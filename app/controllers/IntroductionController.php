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

            $this->f3->set('objCountry', (new Country())->getById($countryId));

            $dbDistributor = new BaseModel($dbConnectionAumet, 'production.Company');
            $objDistributor = BaseModel::toObject($dbDistributor->getWhere('"ID" = ' . $companyId)[0]);
            $objDistributor->objUser = (new AumetUser())->getOneByCompanyId($objDistributor->ID);
            $objDistributor->arrExperience = AumetDBRoutines::getDistributorExperiences($objDistributor->distributorId);
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
                if($dbSubscription->statusId == 1) {
                    if($dbSubscription->introductions > 0) {
                        $dbIntroduction = new Introduction();
                        $dbIntroduction->userId = $this->objUser->id;
                        $dbIntroduction->fromCompanyId = $this->objCompany->ID;
                        $dbIntroduction->toCompanyId = $companyId;
                        $dbIntroduction->addReturnID();

                        $dbSubscription->introductions = $dbSubscription->introductions - 1;
                        $dbSubscription->update();

                        $objRes = new stdClass();
                        $objRes->introductionsCredit = $dbSubscription->introductions;
                        $objRes->introductionId = $dbIntroduction->id;
                        $this->webResponse->setData($objRes);
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

    function getViewIntroduction(){
        $introductionId = $this->f3->get("PARAMS.introductionId");

        if (!$this->f3->ajax()) {
            $this->renderLayout("introductions/$introductionId");
        } else {

            $dbIntroduction = new Introduction();
            $dbIntroduction->getById($introductionId);

            global $dbConnectionAumet;

            $objSubscription = (new Subscription())->getByCompany($this->objCompany->ID);
            $this->f3->set('objSubscription', $objSubscription);

            $dbDistributor = new BaseModel($dbConnectionAumet, 'production.Company');
            $objDistributor = BaseModel::toObject($dbDistributor->getWhere('"ID" = ' . $dbIntroduction->toCompanyId)[0]);
            $objDistributor->objUser = (new AumetUser())->getOneByCompanyId($objDistributor->ID);
            $this->f3->set('objDistributor', $objDistributor);

            $this->f3->set('objCountry', (new Country())->getById($objDistributor->CountryID));

            $this->webResponse->setData(View::instance()->render("introductions/viewIntroduction.php"));
            echo $this->webResponse->getJSONResponse();
        }
    }

    function getSentIntroductions(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("introductions");
        } else {

            global $dbConnectionAumet;

            $objSubscription = (new Subscription())->getByCompany($this->objCompany->ID);
            $this->f3->set('objSubscription', $objSubscription);

            $dbSentIntroductions = new BaseModel($dbConnectionAumet, 'onex.vwSentIntroductions');
            $arrSentIntroductions = $dbSentIntroductions->getWhere('"fromCompanyId"='.$this->objCompany->ID);
            $this->f3->set('arrSentIntroductions', $arrSentIntroductions);

            $this->webResponse->setData(View::instance()->render("introductions/list.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }
}