<?php

$f3->route('GET /resources/@type',
    function($f3, $args) {
        $path = $f3->get('UI').$args['type'].'/';
        $files = preg_replace('/(\.+\/)/','',$_GET['files']); // close potential hacking attempts
        echo Web::instance()->minify($files, null, true, $path);
    },
    3600*24
);

$f3->route('GET /@language/@page', 'DemoController->getPage');

$f3->route('GET /', 'LandingController->get');
$f3->route('GET /@language', 'LandingController->get');

$f3->route('GET /@language/auth/signin', 'AuthController->getSignIn');
$f3->route('POST /@language/auth/signin', 'AuthController->postSignInWithFirebase');

$f3->route('GET /@language/auth/signup', 'AuthController->getSignUp');
$f3->route('GET /@language/auth/forgot', 'AuthController->getForgottenPassword');

$f3->route('GET /@language/auth/signout', 'AuthController->getSignOut');

$f3->route('GET /@language/onboarding/step/@stepId', 'OnboardingController->getStep');
$f3->route('POST /@language/onboarding/save', 'OnboardingController->postUserOnboarding');

$f3->route('GET /@language/me/menu', 'UserController->getMenu');
$f3->route('GET /@language/me/switchLanguage/@languageTo', 'UserController->switchLanguage');


$f3->route('GET /@language/mysalesnetwork/region/@regionId/distributors', 'DemoController->get_mysalesnetwork_region_distributors');
$f3->route('GET /@language/mysalesnetwork/region/@regionId/targetedcountries', 'DemoController->get_mysalesnetwork_region_targetedcountries');

$f3->route('GET /@language/mysalesnetwork/region/@regionId/country/@countryId', 'DemoController->get_mysalesnetwork_region_country');

$f3->route('GET /@language/demo/start', 'DemoController->getStartDemo');
$f3->route('GET /@language/demo/set/@companyId', 'DemoController->getSetDemoCompany');

$f3->route('POST /@language/demo/setup', 'DemoController->postSetupDemoCompany');

$f3->route('GET /@language/profile/countries/targeted', 'ProfileController->getTargetedCountries');
$f3->route('POST /@language/profile/countries/targeted', 'ProfileController->postTargetedCountries');

// Calls
$f3->route('GET /@language/calls', 'CallController->get');
$f3->route('GET /@language/potentialdistributors', 'PotentialDistributorController->getWorkspace');
$f3->route('GET /@language/potentialdistributors/list', 'PotentialDistributorController->getList');
$f3->route('POST /@language/potentialdistributors/addSuggestedToTargetedCountries', 'PotentialDistributorController->postAddSuggestedToTargetedCountries');

$f3->route('GET /@language/potentialdistributors/country/@countryId', 'PotentialDistributorController->getPotentialDistributorsByCountry');

$f3->route('GET /@language/potentialdistributors/country/@countryId/sendintroduction/@companyId', 'IntroductionController->getSendPotentialDistributorIntroduction');
$f3->route('POST /@language/potentialdistributors/country/@countryId/sendintroduction/@companyId', 'IntroductionController->postSendPotentialDistributorIntroduction');

$f3->route('GET /@language/introductions/@introductionId', 'IntroductionController->getViewIntroduction');
$f3->route('GET /@language/introductions', 'IntroductionController->getSentIntroductions');

$f3->route('GET /@language/mydistributors', 'DistributorController->getMyDistributors');


$f3->route('GET /@language/mycompanyprofile', 'EntityController->getEntityProfile');


