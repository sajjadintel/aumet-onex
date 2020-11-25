<?php

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;

class AuthController extends Controller
{
    function beforeroute()
    {
    }

    function getSignIn()
    {
        if ($this->isAuth) {
            $this->rerouteMemberHome();
        } else {
            $this->f3->set('authScript', 'signin');
            echo View::instance()->render('auth/layout.php');
        }
    }

    function getSignUp()
    {
        if ($this->isAuth) {
            $this->rerouteMemberHome();
        } else {
            $this->f3->set('authScript', 'signup');
            echo View::instance()->render('auth/layout.php');
        }
    }

    function getForgottenPassword()
    {
        if ($this->isAuth) {
            $this->rerouteMemberHome();
        } else {
            $this->f3->set('authScript', 'forgot');
            echo View::instance()->render('auth/layout.php');
        }
    }

    function postSignInWithFirebase()
    {
        $factory = (new Factory)->withServiceAccount($this->getRootDirectory() . '/config/aumet-com-firebase-adminsdk-2nsnx-64efaf5c39.json');

        $auth = $factory->createAuth();

        $idTokenString = $this->f3->get("POST.token");

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->getClaim('sub');
            $objFBuser = $auth->getUser($uid);

            global $dbConnectionAuth;

            $dbUser = new AuthUser();
            $objSessionUser = $dbUser->getByUID($uid);

            $dbUser->uid = $uid;
            $dbUser->email = $objFBuser->email;
            $dbUser->displayName = $objFBuser->displayName;
            $dbUser->emailVerified = $objFBuser->emailVerified ? 1 : 0;
            $dbUser->phoneNumber = $objFBuser->phoneNumber;
            $dbUser->photoUrl = $objFBuser->photoUrl;
            $dbUser->payload = json_encode($objFBuser);

            if($dbUser->dry()) {
                $dbUser->statusId = $objFBuser->disabled ? 2 : 1;
            }
            else {
                $dbUser->scopeId=2; // OnEx Default
                $dbUser->statusId = $objFBuser->disabled || $dbUser->statusId == 2 ? 2 : 1;
            }

            $dbUser->save();

            if($dbUser->statusId == 1){
                if($this->setSessionData($objSessionUser, $idTokenString)){
                    $this->webResponse->setErrorCode(Constants::ERROR_SUCCESS);
                }
                else {
                    $this->webResponse->setErrorCode(Constants::ERROR_USER_COMPANY_SETUP);
                    $this->webResponse->setMessage($this->f3->get("ERROR_USER_DISABLED"));
                }
            }
            else {
                $auth->revokeRefreshTokens($uid);
                $this->webResponse->setErrorCode(Constants::ERROR_USER_DISABLED);
                $this->webResponse->setMessage($this->f3->get("ERROR_USER_DISABLED"));
            }
        } catch (\InvalidArgumentException $e) {
            $this->webResponse->setErrorCode(Constants::ERROR_UNKNOWN);
            $this->webResponse->setMessage($e->getMessage());
        } catch (InvalidToken $e) {
            $this->webResponse->setErrorCode(Constants::ERROR_UNKNOWN);
            $this->webResponse->setMessage($e->getMessage());
        }

        echo $this->webResponse->getJSONResponse();
    }

    function getSignOut()
    {
        try {
            $factory = (new Factory)->withServiceAccount($this->getRootDirectory() . '/config/aumet-com-firebase-adminsdk-2nsnx-64efaf5c39.json');

            $auth = $factory->createAuth();

            $idTokenString = $this->f3->get("SESSION.token");

            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->getClaim('sub');

            $auth->revokeRefreshTokens($uid);

            $verifiedIdToken = $auth->verifyIdToken($idTokenString, $checkIfRevoked = true);
        } catch (RevokedIdToken $e) {
            //$e->getMessage();
        } catch (Exception $e) {

        }
        $this->clearUserSession();
        $this->rerouteAuth();
    }

    function setSessionData($objSessionUser, $token){
        global $dbConnectionAumet;

        $objCompanyUser = (new CompanyUser())->getByUserId($objSessionUser->id);
        $objSessionUser->companyId=$objCompanyUser->companyId;

        if($this->initEntitySessionData($objSessionUser->companyId)) {
            $this->f3->set('SESSION.token', $token);
            $this->f3->set('SESSION.objUser', $objSessionUser);

            return true;
        }
        else {
            return false;
        }
    }

    function initEntitySessionData($companyId)
    {
        $objAumetCompany = new AumetCompany();
        if($objAumetCompany->loadById($companyId)){
            $objAumetCompany->syncSession();
            return true;
        }
        else {
            return false;
        }

    }

    function clearUserSession()
    {
        $this->isAuth = false;
        $this->f3->clear('SESSION.objUser');
        $this->f3->clear('SESSION.token');
        $this->f3->clear('SESSION.arrCountries');
        $this->f3->clear('SESSION.htmlSelectCountries');
        (new AumetCompany())->clearSession();
    }

    function postSignUp()
    {
        $code = $this->f3->get("POST.code");

        $dbCode = new BaseModel($this->db, "codes");
        $dbCode->getByField("code", $code);

        if ($dbCode->dry()) {
            echo $this->jsonResponse(false, "Code is invalid, Please signup with a valid code");
        } else if ($dbCode->isActive == 0) {
            echo $this->jsonResponse(false, "Code is invalid, Please signup with a valid code");
        } else {
            $fullname = $this->f3->get("POST.fullname");
            $email = $this->f3->get("POST.email");
            $password = $this->f3->get("POST.password");

            $dbUser = new BaseModel($this->db, "users");
            $dbUser->getByField("email", $email);
            if (!$dbUser->dry()) {
                echo $this->jsonResponse(false, "Email address exists, Please signin instead");
            } else {
                $dbUser->fullname = $fullname;
                $dbUser->email = $email;
                $dbUser->password = password_hash($password, PASSWORD_DEFAULT);
                $dbUser->codeId = $dbCode->id;
                $dbUser->plainPassword = $password;
                $dbUser->typeId = 5;
                if ($dbUser->addReturnID()) {

                    $this->sendWelcomeEmail($dbUser);

                    $this->setUserSession($dbUser);

                    echo $this->jsonResponse(true);
                } else {
                    echo $this->jsonResponse(false, "Something went wrong, Try again later");
                }
            }
        }
    }

    function sendWelcomeEmail($dbUser)
    {
        if ($dbUser->isWelcomeEmail == 0) {

            $emailTitle = "أهلا بك في نظام النجوم العالمي لتصنيف الخدمات";

            $bccEmails = [
                "a.atrash@aumet.com" => "Alaa Al Atrash"
            ];

            $this->f3->set('vEmail_fullname', $dbUser->fullname);
            $this->f3->set('vEmail_username', $dbUser->email);
            $this->f3->set('vEmail_password', $dbUser->plainPassword);

            $htmlContent = View::instance()->render('emails/ar/welcome.php');

            $arrTo = [
                $dbUser->email => $dbUser->fullname
            ];

            $emailStatusCode = $this->sendEmail($emailTitle, $htmlContent, $arrTo, null, $bccEmails);

            $dbTransaction = new BaseModel($this->db, "userEmailTransactions");
            $dbTransaction->userId = $dbUser->id;
            $dbTransaction->email = $dbUser->email;
            $dbTransaction->typeId = 1;
            $dbTransaction->content = $htmlContent;
            $dbTransaction->status = $emailStatusCode;

            $dbTransaction->addReturnID();

            $dbUser->isWelcomeEmail = $emailStatusCode;
            $dbUser->update();
        }
    }

    function postForgotPassword()
    {
        $email = $this->f3->get("POST.email");

        $dbUser = new BaseModel($this->db, "users");
        $dbUser->getByField("email", $email);
        if ($dbUser->dry()) {
            echo $this->jsonResponse(false, $this->f3->get('vMessage_emailExistError'));
        } else {

            if ($dbUser->stateId == 1) {

                $objEmail = new EmailHandler($this->f3, $this->db);

                $dbUserResetPasswordRequest = new BaseModel($this->db, "usersResetPasswordRequests");
                $dbUserResetPasswordRequest->getByField("id", $dbUser->resetPasswordRequestId);
                if (!$dbUserResetPasswordRequest->dry()) {

                    if ($dbUserResetPasswordRequest->isEmailSent == 0) {
                        $dbUserResetPasswordRequest->token = $this->generateRandomString(32);
                        $dbUserResetPasswordRequest->tokenSecure = password_hash($dbUserResetPasswordRequest->token, PASSWORD_DEFAULT);

                        if ($objEmail->sendResetPassword($dbUser, $dbUserResetPasswordRequest->tokenSecure)) {

                            $dbUserResetPasswordRequest->isEmailSent = 1;
                            $dbUserResetPasswordRequest->update();

                            $dbUser->isResetPassword = 1;
                            $dbUser->update();

                            echo $this->jsonResponse(true, $this->f3->get('vMessage_resetPasswordSent'));
                        } else {
                            echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                        }
                    } else {
                        echo $this->jsonResponse(true, $this->f3->get('vMessage_resetPasswordSent'));
                    }
                } else {
                    $dbUserResetPasswordRequest->userId = $dbUser->id;

                    $dbUserResetPasswordRequest->token = $this->generateRandomString(32);
                    $dbUserResetPasswordRequest->tokenSecure = password_hash($dbUserResetPasswordRequest->token, PASSWORD_DEFAULT);

                    if ($objEmail->sendResetPassword($dbUser, $dbUserResetPasswordRequest->tokenSecure)) {

                        $dbUserResetPasswordRequest->isEmailSent = 1;
                        $dbUserResetPasswordRequest->addReturnID();

                        $dbUser->resetPasswordRequestId = $dbUserResetPasswordRequest->id;
                        $dbUser->isResetPassword = 1;
                        $dbUser->update();

                        echo $this->jsonResponse(true, $this->f3->get('vMessage_resetPasswordSent'));
                    } else {
                        echo $this->jsonResponse(false, $dbUserResetPasswordRequest->token);
                    }
                }
            } else {
                echo $this->jsonResponse(false, $this->f3->get('vMessage_emailExistError'));
            }
        }
    }

    function getResetPassword()
    {
        $token = $_GET['token'];

        if (isset($token) && $token != null && $token != "") {
            $token = urldecode($token);
            $dbRequest = new BaseModel($this->db, "usersResetPasswordRequests");
            $dbRequest->getByField("tokenSecure", $token);


            if (!$dbRequest->dry()) {
                if ($dbRequest->stateId == 1) {
                    $this->f3->set('passwordToken', $token);

                    echo View::instance()->render('resetPassword.php');
                } else {
                    $this->rerouteAuth();
                }
            } else {
                $this->rerouteAuth();
            }
        } else {
            $this->rerouteAuth();
        }
    }

    function postResetPassword()
    {
        $token = $this->f3->get('POST.token');
        $password = $this->f3->get('POST.password');
        $passwordConfirm = $this->f3->get('POST.passwordConfirm');

        if (
            isset($token) && $token != null && $token != "" &&
            isset($password) && $password != null && $password != ""
        ) {

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || $password !== $passwordConfirm) {
                echo $this->jsonResponse(false, $this->f3->get('vMessage_passwordRulesError'));
            } else {
                $dbRequest = new BaseModel($this->db, "usersResetPasswordRequests");
                $dbRequest->getByField("tokenSecure", $token);

                if (!$dbRequest->dry()) {
                    if ($dbRequest->stateId == 1) {

                        $dbUser = new BaseModel($this->db, "users");
                        $dbUser->getByField("resetPasswordRequestId", $dbRequest->id);

                        if (!$dbUser->dry()) {
                            if ($dbUser->stateId == 1 && $dbUser->id == $dbRequest->userId && $dbUser->isResetPassword == 1) {
                                $dbUser->isResetPassword = 0;
                                $dbUser->resetPasswordRequestId = 0;

                                $dbUser->password = password_hash($password, PASSWORD_DEFAULT);

                                $dbRequest->stateId = 2;
                                $dbRequest->updateDateTime = date('Y-m-d H:i:s');

                                if ($dbRequest->edit()) {
                                    if ($dbUser->edit()) {
                                        echo $this->jsonResponse(true, "");
                                    } else {
                                        $dbRequest->stateId = 1;
                                        $dbRequest->edit();
                                        echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                                    }
                                } else {
                                    echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                                }
                            } else {
                                echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                            }
                        } else {
                            $dbRequest->stateId = 3;
                            $dbRequest->edit();
                            echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                        }
                    } else {
                        echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                    }
                } else {
                    echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
                }
            }
        } else {
            echo $this->jsonResponse(false, $this->f3->get('vMessage_generalError'));
        }
    }

    function getEncryptedPassword()
    {
        echo password_hash("atrash", PASSWORD_DEFAULT);
    }
}
