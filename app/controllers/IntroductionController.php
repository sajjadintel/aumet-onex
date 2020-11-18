<?php


class IntroductionController extends Controller
{
    function getSendPotentialDistributorIntroduction(){
        $countryId = $this->f3->get("PARAMS.countryId");
        $entityId = $this->f3->get("PARAMS.entityId");

        if (!$this->f3->ajax()) {
            $this->renderLayout("potentialdistributors/country/$countryId/sendintroduction/$entityId");
        } else {

            global $dbConnectionAumet;

            $dbCountry = new BaseModel($dbConnectionAumet, 'setup.Country');
            $objCountry = BaseModel::toObject($dbCountry->getWhere('"ID" = ' . $countryId)[0]);
            $this->f3->set('objCountry', $objCountry);

            $dbDistributor = new BaseModel($dbConnectionAumet, 'production.Company');
            $objDistributor = BaseModel::toObject($dbDistributor->getWhere('"ID" = ' . $entityId)[0]);
            $this->f3->set('objDistributor', $objDistributor);

            $this->webResponse->setData(View::instance()->render("introductions/sendIntroduction.php"));
            echo $this->webResponse->getJSONResponse();
        }
    }
}