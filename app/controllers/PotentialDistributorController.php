<?php


class PotentialDistributorController extends Controller
{
    function getWorkspace(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("potentialDistributors");
        } else {

            $arrPotentialDistributors = [];
            $this->f3->set('arrPotentialDistributors', $arrPotentialDistributors);

            $this->webResponse->setData(View::instance()->render("potentialdistributors/workspace.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }

    function postAddSuggestedToTargetedCountries(){
        $countryId = $this->f3->get("POST.countryId");

        $objCountry = $this->arrSuggestedCountries[$countryId];

        $this->arrTargetedCountries[$countryId] = $objCountry;

        unset($this->arrSuggestedCountries[$countryId]);

        $this->f3->set('SESSION.arrTargetedCountries', $this->arrTargetedCountries);
        $this->f3->set('SESSION.arrSuggestedCountries', $this->arrSuggestedCountries);
        $this->f3->set('arrSuggestedCountries', $this->arrSuggestedCountries);
        $this->f3->set('arrTargetedCountries', $this->arrTargetedCountries);

        $this->getList();
    }

    function getList(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("potentialDistributors");
        } else {

            global $dbConnectionAumet;

            $vwRegionCountryDistributorCount = new CompanyRegionCountryDistributorCount();
            $arrTemp = $vwRegionCountryDistributorCount->getByCompanyId($this->objCompany->ID);

            $arrRegions = [];
            foreach ($arrTemp as $objCountry) {
                if(!array_key_exists($objCountry->RegionID, $arrRegions)) {
                    $arrRegions[$objCountry->RegionID] = new stdClass();
                    $arrRegions[$objCountry->RegionID]->id = $objCountry->RegionID;
                    $arrRegions[$objCountry->RegionID]->name = $objCountry->RegionName;
                    $arrRegions[$objCountry->RegionID]->arrCountries = [];
                }
                $arrRegions[$objCountry->RegionID]->arrCountries[] = $objCountry;
            }
            $this->f3->set('arrRegions', $arrRegions);

            $arrPotentialDistributors = [];
            $this->f3->set('arrPotentialDistributors', $arrPotentialDistributors);

            $this->webResponse->setData(View::instance()->render("potentialdistributors/byRegion.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }

    function getPotentialDistributorsByCountry(){
        $countryId = $this->f3->get("PARAMS.countryId");
        if (!$this->f3->ajax()) {
            $this->renderLayout("potentialdistributors/country/$countryId");
        } else {
            $this->f3->set('objSubscription', (new Subscription())->getByCompany($this->objCompany->ID));

            $this->f3->set('objCountry', (new Country())->getById($countryId));

            $arrDistributors = (new PotentialConnection())->getByAvailableConnectionsByCountry($this->objCompany->ID, $countryId);
            foreach ($arrDistributors as $objDistributor){
                $objDistributor->objUser = (new AumetUser())->getOneByCompanyId($objDistributor->ID);
                $objDistributor->arrExperience = AumetDBRoutines::getDistributorExperiences($objDistributor->distributorId);
            }

            $this->f3->set('arrDistributors', $arrDistributors);

            $this->webResponse->setData(View::instance()->render("potentialdistributors/byCountry.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }



}