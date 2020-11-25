<?php


class ProfileController extends Controller
{
    function getTargetedCountries()
    {
        $this->f3->set('arrTargetCountries', (new CompanyTargetCountry())->getByCompanyId($this->objCompany->ID));
        $this->webResponse->setData(View::instance()->render("popups/targetedCountries.php"));
        echo $this->webResponse->getJSONResponse();
    }

    function postTargetedCountries()
    {
        $arrTargetCountries = $this->f3->get("POST.targetCountries");

        foreach ($arrTargetCountries as $targetCountryId) {
            $objTargetCountry = new CompanyTargetCountry();
            $objTargetCountry->getByPKId($this->objCompany->ID, $targetCountryId);
            if($objTargetCountry->dry()) {
                $objTargetCountry->companyId = $this->objCompany->ID;
                $objTargetCountry->countryId = $targetCountryId;
                $objTargetCountry->add();
            }
        }
        echo $this->webResponse->getJSONResponse();
    }

    function postRemoveTargetedCountry(){
        $targetCountryId = $this->f3->get("PARAMS.countryId");
        $objTargetCountry = new CompanyTargetCountry();
        $objTargetCountry->getByPKId($this->objCompany->ID, $targetCountryId);
        $objTargetCountry->delete();
        $this->webResponse->setData($targetCountryId);
        echo $this->webResponse->getJSONResponse();
    }
}