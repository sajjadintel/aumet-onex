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
}