<?php
/* ---------------------------------------------------------- */
/*       settings neccecary values for lead collerctor        */
/* ---------------------------------------------------------- */

// spreadsheet id, can get it from spreadsheet url
define('SPREAD_SHEET_ID', '');

// API key file name, file should be placed in this directory
define('API_KEY_FILE_NAME', 'service_account-3f5306f1d4f7.json');


/* ---------------------------------------------------------- */
/*                   site identity settings                   */
/* ---------------------------------------------------------- */

// site identity
define('SITE_NAME', 'Demo Landing');
define('SITE_EMAIL', 'contact-client@mymail.infos.st');

// company identity in mention privasy and terms windows
define('COMPANY_NAME', 'ACTION MARKETING');
define('COMPANY_ADRESS', '680 RTE DU MEDONNET 74920 COMBLOUX');
define('COMPANY_INFO', '
SARL au capital de 7606 euros <br>
Inscrite au registre du commerce de Annecy sous le n°479235236 <br>
N° de TVA intracommunautaire : FR44479235236 <br>
Directeur de la publication : Vincent lespour <br>
Hébergement du site : OVH <br>
Crédits photo : Thomas Pico Photographe, Ladepro, Fotolia, 123RF, Twenty20, Adobe stock, Pexels <br>
');

// automatically determine site adress or override/edit this if you need manualiy add site self link
define('SITE_SELF_LINK', ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) );


// other settings
// -----------------------------------------

// sheet name shold used for lead collector
$_SHEET_NAME ="Leads";

// default spreadsheet header color
$_HC_R = $_HC_G = $_HC_B = 0.9;
$_HC_A = 1;

// date column name (other names are taken from "name" attribute)
$_SHEET_DATE_COLUMN_NAME = "date";

// lead log settings, relative path is relative this folder ( number is steps up)
$_LOG_DIRECTORY_PATH = dirname( __DIR__, 1 ); // now it is the same dir lp make sure that there is no access in htaacess file
$_LOG_DIRECTORY_NAME = "leads-logs";
$_LOG_FILE_PREFIX ="leads";
