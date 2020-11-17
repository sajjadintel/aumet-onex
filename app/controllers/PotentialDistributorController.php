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

            $arrPotentialDistributors = [];
            $this->f3->set('arrPotentialDistributors', $arrPotentialDistributors);

            $this->webResponse->setData(View::instance()->render("potentialdistributors/list.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }

    function getAPIDataTable(){
        
    }

    function getTargetedCountries() {

        $arrRegions = [
            ['id'=> 1, 'region'=>  "Europe", 'eDistributors'=>  5, 'tCountries'=> 0, 'pDistributors'=> 0],
            ['id'=> 2, 'region'=> "North America", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0],
        ['id'=> 3, 'region'=> "Latin America", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0],
        ['id'=> 4, 'region'=> "Western Europe", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0],
        ['id'=> 5, 'region'=> "Central and Eastern Europe", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0],
        ['id'=> 6, 'region'=> "Africa", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0],
        ['id'=> 7, 'region'=> "Middle East", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0],
        ['id'=> 8, 'region'=> "Asia", 'eDistributors'=> 5, 'tCountries'=> 0, 'pDistributors'=> 0]
        ];

        $this->webResponse->setData($arrRegions);

        echo $this->webResponse->getJSONResponse();
    }
}