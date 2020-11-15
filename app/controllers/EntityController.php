<?php

class EntityController extends Controller
{
    function getEntityProfile(){
        if (!$this->f3->ajax()) {
            $this->renderLayout("mycompanyprofile");
        } else {

            $arrPotentialDistributors = [];
            $this->f3->set('arrPotentialDistributors', $arrPotentialDistributors);

            $this->webResponse->setData(View::instance()->render("entityprofile/manufacturer.php"));

            echo $this->webResponse->getJSONResponse();
        }
    }
}
