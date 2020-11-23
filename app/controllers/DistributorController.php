<?php


class DistributorController extends Controller
{
    function getMyDistributors(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("mydistributors");
        } else {

            global $dbConnectionAumet;

            $objSubscription = (new Subscription())->getByCompany($this->objCompany->ID);
            $this->f3->set('objSubscription', $objSubscription);

            $dbNetwork = new BaseModel($dbConnectionAumet, 'onex.vwCompanyNetwork');
            $arrNetwork = $dbNetwork->getWhere('"companyId"='.$this->objCompany->ID);
            $this->f3->set('arrNetwork', $arrNetwork);

            $this->webResponse->setData(View::instance()->render("mydistributors/list.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }
}