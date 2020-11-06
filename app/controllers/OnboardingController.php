<?php


class OnboardingController extends Controller
{
    function getStep()
    {
        $stepId = $this->f3->get("PARAMS.stepId");

        $this->webResponse->setData(View::instance()->render("onboarding/step_$stepId.php"));
        echo $this->webResponse->getJSONResponse();
    }

    function postUserOnboarding()
    {
        global $dbConnectionAuth;

        $dbUser = new BaseModel($dbConnectionAuth, "user");
        $dbUser->getByField("id", $this->objUser->id);
        $dbUser->displayName = $this->f3->get("POST.name");
        $dbUser->update();

        $dbUserOnboarding = new BaseModel($dbConnectionAuth, "userOnboarding");
        $dbUserOnboarding->getByField("userId", $this->objUser->id);
        $dbUserOnboarding->userId = $this->objUser->id;
        $dbUserOnboarding->company = $this->f3->get("POST.company");
        $dbUserOnboarding->position = $this->f3->get("POST.position");
        $dbUserOnboarding->country = $this->f3->get("POST.country");
        $dbUserOnboarding->save();

        $this->webResponse->setData("/en/demo/start");
        echo $this->webResponse->getJSONResponse();
    }
}