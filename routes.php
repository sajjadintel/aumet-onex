<?php

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

$f3->route('GET /@language/@page', 'DemoController->getPage');
$f3->route('GET /@language/mysalesnetwork/region/@regionId/distributors', 'DemoController->get_mysalesnetwork_region_distributors');
$f3->route('GET /@language/mysalesnetwork/region/@regionId/targetedcountries', 'DemoController->get_mysalesnetwork_region_targetedcountries');

$f3->route('GET /@language/mysalesnetwork/region/@regionId/country/@countryId', 'DemoController->get_mysalesnetwork_region_country');

$f3->route('GET /@language/demo/start', 'DemoController->getStartDemo');
$f3->route('GET /@language/demo/set/@companyId', 'DemoController->getSetDemoCompany');

$f3->route('POST /@language/demo/setup', 'DemoController->postSetupDemoCompany');
