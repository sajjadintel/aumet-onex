<?php

// Reports all errors
error_reporting(E_ALL);

// Do not display errors for the end-users (security issue)
ini_set('display_errors', 'On');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

date_default_timezone_set("Asia/Dubai");

require_once("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$f3 = \Base::instance();

$f3->set('AUTOLOAD', "app/controllers/ | app/classes/ | app/models/");

/* Config */
$f3->set('DEBUG', '9');
$f3->set('UI', 'ui/');
$f3->set('LOGS', 'logs/');
$f3->set('LOCALES', 'app/translations/');
$f3->set('FALLBACK', 'en');
$f3->set('ENCODING', 'UTF-8');


$f3->set('CACHE','redis=localhost');

$f3->set('AUMET_CACHE', FALSE);

$f3->set('rootDIR', dirname(__FILE__));

$f3->set('tempDIR', dirname(__FILE__).'/tmp/');

$tempDIR = dirname(__FILE__).'/files/tmp/';
if(is_dir($tempDIR)) {
    $f3->set('tempDIR', $tempDIR);
}
else {
    if (!mkdir($tempDIR, 0777, true)) {
        die('Failed to create folders...');
    }
    else{
        $f3->set('tempDIR', $tempDIR);
    }
}

$uploadsDir = dirname(__FILE__).'/files/uploads/';
if(is_dir($uploadsDir)) {
    $f3->set('uploadDIR', $uploadsDir);
}
else {
    if (!mkdir($uploadsDir, 0777, true)) {
        die('Failed to create folders...');
    }
    else{
        $f3->set('uploadDIR', $uploadsDir);
    }
}

$f3->set('platformVersionRelease', '?v=1.3');
$f3->set('platformVersionDevelopment', '?v=' . date('His'));

$f3->set('platformVersion', $f3->get('platformVersionDevelopment'));

$f3->set('authServerKey', '-SC4,=$?.3:&KRR]:DCQx{~wY!)`+--CkhE`2ur<VCZ(Tk8Pt2YXvdp3mz>3wsW`');

$dbHost = getenv('MYDB_HOST_LOC');
$dbUsername = getenv('MYDB_USER_LOC');
$dbPassword = getenv('MYDB_PASS_LOC');

$dbPGHost = getenv('PGDB_HOST_LOC');
$dbPGUsername = getenv('PGDB_USER_LOC');
$dbPGPassword = getenv('PGDB_PASS_LOC');

if (getenv('ENV') == Constants::ENV_PROD) {
    $dbHost = getenv('MYDB_HOST_PROD');
    $dbUsername = getenv('MYDB_USER_PROD');
    $dbPassword = getenv('MYDB_PASS_PROD');

    $dbPGHost = getenv('PGDB_HOST_PROD');
    $dbPGUsername = getenv('PGDB_USER_PROD');
    $dbPGPassword = getenv('PGDB_PASS_PROD');
}
$dbPort = getenv('MYDB_PORT');
$dbPGPort = getenv('PGDB_PORT');

$dbNameAuth = getenv('DB_NAME_AUTH');
$dbNameIndustry = getenv('DB_NAME_INDUSTRY');
$dbNameAumet = getenv('DB_NAME_AUMET');

$f3->set('dbUsername', $dbUsername);
$f3->set('dbPassword', $dbPassword);

$f3->set('dbPGUsername', $dbPGUsername);
$f3->set('dbPGPassword', $dbPGPassword);

$f3->set('dbConnStringAuth', "mysql:host=$dbHost;port=$dbPort;dbname=$dbNameAuth");
$f3->set('dbConnStringIndustry', "mysql:host=$dbHost;port=$dbPort;dbname=$dbNameIndustry");
$f3->set('dbConnStringAumet', "pgsql:host=$dbPGHost;port=$dbPGPort;dbname=$dbNameAumet");

$f3->set('dbConnStringOnEx', "mysql:host=$dbHost;port=$dbPort;dbname=onex");

global $dbConnectionAuth;

$dbConnectionAuth = new DB\SQL(
    $f3->get('dbConnStringAumet'),
    $f3->get('dbPGUsername'),
    $f3->get('dbPGPassword'),
    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
);

global $dbConnectionIndustry;

$dbConnectionIndustry = new DB\SQL(
    $f3->get('dbConnStringIndustry'),
    $f3->get('dbUsername'),
    $f3->get('dbPassword'),
    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
);

global $dbConnectionAumet;

$dbConnectionAumet = new DB\SQL(
    $f3->get('dbConnStringAumet'),
    $f3->get('dbPGUsername'),
    $f3->get('dbPGPassword'),
    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
);

global $dbConnectionOnEx;

$dbConnectionOnEx = new DB\SQL(
    $f3->get('dbConnStringOnEx'),
    $f3->get('dbUsername'),
    $f3->get('dbPassword'),
    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
);

$f3->set('mailHost', 'smtp.sendgrid.net');
$f3->set('mailUsername', 'apikey');
$f3->set('mailPassword', getenv('SENDGRID_API_KEY'));
$f3->set('mailSMTPSecure', 'tls');
$f3->set('mailPort', 587);
$f3->set('mailFromName', 'Aumet Inc');
$f3->set('mailFromEmail', 'no-reply@aumet.com');
$f3->set('mailBCC', 'a.atrash@aumet.com');

define('CHUNK_SIZE', 1024 * 1024);

include_once("routes.php");

session_start();

$f3->run();
