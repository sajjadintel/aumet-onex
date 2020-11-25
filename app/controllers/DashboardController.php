<?php


class DashboardController extends Controller
{
    function get(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("dashboard");
        } else {

            switch ($this->objCompany->Type) {
                case "manufacturer":
                    $this->webResponse->setData(View::instance()->render("dashboard/manufacturer.php"));
                    break;
                default:
                    $this->webResponse->setData(View::instance()->render("dashboard/default.php"));
                    break;
            }

            echo $this->webResponse->getJSONResponse();
        }
    }
}