<?php
/* ---------------------------------------------------------- */
/*       settings neccecary values for lead collerctor        */
/* ---------------------------------------------------------- */

// spreadsheet id, can get it from spreadsheet url
define('SITE_NAME', 'ADVERTIZING');

// spreadsheet id, can get it from spreadsheet url
define('SPREAD_SHEET_ID', '1zbFiwwiYZ9OFlIqP3dBgN9lty1N4oDqJjZCd_ybzsZw');

// API key file name, file should be placed in this directory
define('API_KEY_FILE_NAME', 'service_account-3f5306f1d4f7.json');




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
$_LOG_DIRECTORY_PATH = dirname( __DIR__, 1 );
$_LOG_DIRECTORY_NAME = "leads-logs";
$_LOG_FILE_PREFIX ="leads";
