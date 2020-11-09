<?php


class ProfileController extends Controller
{
    function getTargetedCountries()
    {
        $this->webResponse->setData(View::instance()->render("popups/targetedCountries.php"));
        echo $this->webResponse->getJSONResponse();
    }
}