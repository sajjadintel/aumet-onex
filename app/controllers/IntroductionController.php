<?php


class IntroductionController extends Controller
{
    // Define Errors
    const error_notSubscribed = 1;
    const error_inactiveSubscription = 2;
    const error_blockedSubscription = 3;
    const error_noEnoughCredits = 4;

    function getSendPotentialDistributorIntroduction(){
        $countryId = $this->f3->get("PARAMS.countryId");
        $companyId = $this->f3->get("PARAMS.companyId");

        if (!$this->f3->ajax()) {
            $this->renderLayout("potentialdistributors/country/$countryId/sendintroduction/$companyId");
        } else {

            global $dbConnectionAumet;

            $objSubscription = (new Subscription())->getByCompany($this->objCompany->ID);
            $this->f3->set('objSubscription', $objSubscription);

            $dbCountry = new BaseModel($dbConnectionAumet, 'setup.Country');
            $objCountry = BaseModel::toObject($dbCountry->getWhere('"ID" = ' . $countryId)[0]);
            $this->f3->set('objCountry', $objCountry);

            $dbDistributor = new BaseModel($dbConnectionAumet, 'production.Company');
            $objDistributor = BaseModel::toObject($dbDistributor->getWhere('"ID" = ' . $companyId)[0]);
            $this->f3->set('objDistributor', $objDistributor);

            $this->webResponse->setData(View::instance()->render("introductions/sendIntroduction.php"));
            echo $this->webResponse->getJSONResponse();
        }
    }

    function postSendPotentialDistributorIntroduction(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("potentialDistributors");
        } else {

            $countryId = $this->f3->get("PARAMS.countryId");
            $companyId = $this->f3->get("PARAMS.companyId");

            $dbSubscription = new Subscription();
            $dbSubscription->getByCompany($this->objCompany->ID);

            if(!$dbSubscription->dry()) {
                if($dbSubscription->statusId == SubscriptionStatus::active) {
                    if($dbSubscription->introductions > 0) {
                        $dbIntroduction = new Introduction();
                        $dbIntroduction->userId = $this->objUser->id;
                        $dbIntroduction->fromCompanyId = $this->objCompany->ID;
                        $dbIntroduction->toCompanyId = $companyId;
                        $dbIntroduction->add();

                        $dbSubscription->introductions = $dbSubscription->introductions - 1;
                        $dbSubscription->update();
                    }
                    else {
                        $this->webResponse->setErrorCode(IntroductionController::IntroductionControllerError_noEnoughCredits);
                    }
                }
                else {
                    $this->webResponse->setErrorCode(IntroductionController::IntroductionControllerError_inactiveSubscription);
                }
            }
            else {
                $this->webResponse->setErrorCode(IntroductionController::IntroductionControllerError_notSubscribed);
            }

            //$this->webResponse->setData( $this->f3->get('POST'));

            echo $this->webResponse->getJSONResponse();
        }
    }
}