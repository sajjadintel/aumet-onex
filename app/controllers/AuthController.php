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

            $dbUser = new BaseModel($dbConnectionAuth, "user");
            $objSessionUser = $dbUser->getByField("uid", $uid);

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
                $this->setSessionData($objSessionUser, $idTokenString);

                $this->webResponse->setErrorCode(Constants::ERROR_SUCCESS);
            }
            else {
                $auth->revokeRefreshTokens($uid);
                $this->webResponse->setErrorCode(Constants::ERROR_USER_DISABLED);
                $this->webResponse->setMessage($this->get("ERROR_USER_DISABLED"));
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

        $dbCountry = new BaseModel($dbConnectionAumet, 'public.countries');
        $arrCountries = $dbCountry->all("country asc");
        $arrCountriesSession = [];
        $htmlSelectCountryOptions="";
        foreach ($arrCountries as $country) {
            $arrCountriesSession[] = BaseModel::toObject($country);
            $htmlSelectCountryOptions .= "<option value='$country->id'>$country->country</option>";
        }
        $this->f3->set('SESSION.arrCountries', $arrCountriesSession);
        $this->f3->set('SESSION.htmlSelectCountries', $htmlSelectCountryOptions);

        global $dbConnectionOnEx;

        $dbEntityUser = new BaseModel($dbConnectionOnEx, "entityUser");
        $objEntityUser = $dbEntityUser->getByField("userId", $objSessionUser->id);
        $objSessionUser->entityId=$objEntityUser->entityId;

        $this->initEntitySessionData($objSessionUser->entityId);

        $this->f3->set('SESSION.token', $token);
        $this->f3->set('SESSION.objUser', $objSessionUser);
    }

    function initEntitySessionData($companyId)
    {
        $objAumetCompany = new AumetCompany();
        $objAumetCompany->loadById($companyId);
        $objAumetCompany->syncSession();
    }

    function initEntitySessionDataOLD($companyId)
    {
        global $dbConnectionAumet;

        $dbCompany = new Company();
        $objCompany = $dbCompany->getById($companyId);
        if(!$dbCompany->dry()){
            $this->f3->set('SESSION.objCompany', $objCompany);

            /*
            $dbCompanyProfile = new BaseModel($dbConnectionAumet, 'public.companies');
            $arrProf = $dbCompanyProfile->getWhere('"XrefId" = ' . $companyId);
            $dbCompanyProfile = BaseModel::toObject($dbCompanyProfile->getWhere('"XrefId" = ' . $companyId)[0]);
            $this->f3->set('SESSION.objCompanyProfile', $dbCompanyProfile);

            */
            $dbManufacturer = new BaseModel($dbConnectionAumet, 'production.Manufacturer');
            $objManufacturer = BaseModel::toObject($dbManufacturer->getWhere('"CompanyID" = ' . $companyId)[0]);
            //$this->f3->set('SESSION.objManufacturer', $objManufacturer);

            $dbCountry = new BaseModel($dbConnectionAumet, 'public.countries');
            $objCountry = BaseModel::toObject($dbCountry->getWhere('"id" = ' . $objCompany->CountryID)[0]);

            $objCountry->flag = "";

            switch ($objCountry->id) {
                case 13:
                    $objCountry->flag = "001-austria.svg";
                    break;
                case 14:
                    $objCountry->flag = "009-australia.svg";
                    break;
                case 46:
                    $objCountry->flag = "015-china.svg";
                    break;
                case 87:
                    $objCountry->flag = "170-greece.svg";
                    break;
                case 111:
                    $objCountry->flag = "077-jordan.svg";
                    break;
                case 168:
                    $objCountry->flag = "121-new-zealand.svg";
                    break;
                case 228:
                    $objCountry->flag = "226-united-states.svg";
                    break;
            }

            $this->f3->set('SESSION.objCountry', $objCountry);



            $dbProspectedCompany = new BaseModel($dbConnectionAumet, 'production.ProspectedCompany');
            $objProspectedCompany = BaseModel::toObject($dbProspectedCompany->getWhere('"ID" = ' . $objCompany->ProspectedCompanyID)[0]);
            $this->f3->set('SESSION.objProspectedCompany', $objProspectedCompany);

            $dbProspectedCompanyScientificNames = new BaseModel($dbConnectionAumet, 'production.ProspectedCompanyScientificName');
            $arrTempProspectedCompanyScientificNames = $dbProspectedCompanyScientificNames->getWhere('"ProspectedCompanyID" = ' . $objProspectedCompany->ID);
            $arrProspectedCompanyScientificNames = [];
            $arrCompanyMedicalLinesIDs = [];
            $arrCompanySpecialtiesIDs = [];
            foreach ($arrTempProspectedCompanyScientificNames as $objTemp) {
                $obj = BaseModel::toObject($objTemp);
                $arrProspectedCompanyScientificNames[] = $obj;

                if(!in_array($objTemp->MedicalLineID, $arrCompanyMedicalLinesIDs) && is_numeric($objTemp->MedicalLineID) && $objTemp->MedicalLineID > 0){
                    $arrCompanyMedicalLinesIDs[] = $objTemp->MedicalLineID;
                }

                if(!in_array($objTemp->SpecialityID, $arrCompanySpecialtiesIDs) && is_numeric($objTemp->SpecialityID) && $objTemp->SpecialityID > 0){
                    $arrCompanySpecialtiesIDs[] = $objTemp->SpecialityID;
                }
            }
            $this->f3->set('SESSION.arrCompanyScientificNames', $arrProspectedCompanyScientificNames);

            $dbSpeciality = new BaseModel($dbConnectionAumet, 'setup.Speciality');
            $arrTempSpeciality = $dbSpeciality->getWhere('"ID" in (' . implode(',',$arrCompanySpecialtiesIDs).')');
            $arrCompanySpecialities = [];
            foreach ($arrTempSpeciality as $objTemp) {
                $obj = BaseModel::toObject($objTemp);
                $arrCompanySpecialities[$objTemp->ID] = $obj;
            }
            $this->f3->set('SESSION.arrCompanySpecialities', $arrCompanySpecialities);

            $dbProducts = new BaseModel($dbConnectionAumet, 'public.products');
            $arrTempProducts = $dbProducts->getWhere('"manufacturerId" = ' . $companyId);
            $arrProducts = [];
            foreach ($arrTempProducts as $objProductTemp) {
                $objProduct = BaseModel::toObject($objProductTemp);
                if(array_key_exists($objProductTemp->specialityId, $arrCompanySpecialities)){
                    $objProduct->specialityName = $arrCompanySpecialities[$objProductTemp->specialityId]->Name;
                }
                else {
                    $objProduct->specialityName = $objProductTemp->specialityId;
                }
                $arrProducts[] = $objProduct;

            }
            $this->f3->set('SESSION.arrProducts', $arrProducts);

            $this->rerouteMemberHome();
        }
    }

    function clearUserSession()
    {
        $this->isAuth = false;
        $this->f3->clear('SESSION.objUser');
        $this->f3->clear('SESSION.token');
        $this->f3->clear('SESSION.arrCountries');
        $this->f3->clear('SESSION.htmlSelectCountries');
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
