<?php

// default values
require_once __DIR__ . '/config/config.php';

// get GET variables
$get_values = [];
$get_names = [];
foreach ($_POST as $key => $value) {
  array_push ( $get_values, strval ($value) );
  array_push ( $get_names, strval ($key) );
}
$insert_values = $get_values;
array_unshift( $insert_values, date("Y/m/d h:i:s") );
$insert_names = $get_names;
array_unshift( $insert_names, $_SHEET_DATE_COLUMN_NAME );

// EXIT IF GET VARIABLES EMPTY
if (empty($get_values)) exit;


// =============== FILES ==================

// ----------------------------------------
//    CREATE FILE IF EXISTS AND ADD LOG
// ----------------------------------------


$today_filename = $_LOG_DIRECTORY_PATH."/".$_LOG_DIRECTORY_NAME."/".$_LOG_FILE_PREFIX."-".date("Y-m-d").".csv";

if ( !file_exists ( $_LOG_DIRECTORY_PATH.'/'.$_LOG_DIRECTORY_NAME ) ) {
  mkdir( $_LOG_DIRECTORY_PATH.'/'.$_LOG_DIRECTORY_NAME, 0777, true );
}

if ( !file_exists ( $today_filename ) ) {
  $newfile = fopen( $today_filename, "w" );
  fputcsv( $newfile, $insert_names );
  fclose( $newfile );
}

$addfile = fopen( $today_filename, "a" );
fputcsv( $addfile, $insert_values );
fclose( $addfile );

// =========== GOOGLE SHEETS =============

require_once __DIR__ . '/vendor/autoload.php';
$client = new \Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/config/'.API_KEY_FILE_NAME);
$service = new Google_Service_Sheets($client);


$leadsSheetId = false; // leads sheet id
// Get all sheets request and do custom error reporting
error_reporting(E_ERROR);
try {
  $response = $service->spreadsheets->get(SPREAD_SHEET_ID);
}
catch(Exception $e) {
  $error_class = json_decode ( $e->getMessage() );
  //echo 'Message: <h2>' .$e->getMessage() . '</h2>';
  //print_r ( $error_class->error->errors );
  if ( $error_class->error->code == 404 ) echo '<h1 style="color:red">Check spreadsheet ID</h1>';
  if ( $error_class->error->code == 403 ) echo '<h1 style="color:red">Check if you correctly added user to spreadsheet</h1>';
  echo "<h2>".$error_class->error->code." ".$error_class->error->message."</h2>";
  foreach ($error_class->error->errors as $key => $value) {
    foreach ($value as $key_inner => $value_inner) {
      echo '<p><strong>'.$key_inner.'</strong>: '.$value_inner.'</p>';
    }
  }
  error_reporting(0);
}

// All sheets
foreach($response->getSheets() as $sheet) {
  $sheetProperties = $sheet->getProperties();
  if ($sheetProperties->title==$_SHEET_NAME) { $leadsSheetId=$sheetProperties->sheetId; break; };
}

// ----------------------------------------
//    CREATE SPREADSHEET IF NONE EXISTS
// ----------------------------------------

if ($leadsSheetId == false) {
  $requests = [
      new Google_Service_Sheets_Request([
        "addSheet" => [
          'properties' => [
            "title" => $_SHEET_NAME,
          ],
        ]
      ])
  ];
  $batchUpdateRequest = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([ 'requests' => $requests ]);
  $result = $service->spreadsheets->batchUpdate(SPREAD_SHEET_ID, $batchUpdateRequest);
  $addedSheetId = $result->replies[0]->addSheet->properties->sheetId;
  $leadsSheetId = $addedSheetId;

  //set column width for new elements
  $requests = [
      new Google_Service_Sheets_Request([
        "updateDimensionProperties" => [
          'range' => ["sheetId" => $leadsSheetId, "dimension" => "COLUMNS", "startIndex" => 0, "endIndex" => count($insert_names),
          ],
          'properties' => [ 'pixelSize' => 140 ],
          'fields' => 'pixelSize',
        ]
      ])
  ];
  $batchUpdateRequest = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([ 'requests' => $requests ]);
  $result = $service->spreadsheets->batchUpdate(SPREAD_SHEET_ID, $batchUpdateRequest);

}

// ----------------------------------------
//      ADD TABLE HEAD IF TABLE EMPY
// ----------------------------------------
$response = $service->spreadsheets_values->get(SPREAD_SHEET_ID, $range=$_SHEET_NAME);
$values = $response->getValues();

if (empty($values)) {

  // add row with column names we get from GET var indees
  $range = $_SHEET_NAME;
  function names_format($val="") { return ucfirst( str_replace( ["-","_"] , " ", $val) ); }
  $formatted_values = array_map('names_format', $insert_names);
  $values = [ $formatted_values ];
  $body = new Google_Service_Sheets_ValueRange([ 'values' => $values ]);
  $params = [ 'valueInputOption' => "RAW" ];
  $insert = [ "insertDataOption" => "INSERT_ROWS" ];
  $result = $service->spreadsheets_values->append(SPREAD_SHEET_ID, $range, $body, $params, $insert);

  // set our header bg
  $format = [
      'backgroundColor' => [ 'red' => $_HC_R, 'green' => $_HC_G, 'blue' => $_HC_B, 'alpha' => $_HC_A, ],
      'textFormat' => [ 'bold' => true ],
  ];

  $requests = [
      new Google_Service_Sheets_Request([ 
          'repeatCell' => [
              'fields' => 'userEnteredFormat.backgroundColor, userEnteredFormat.textFormat.bold',
              'range' => [ 'sheetId' => $leadsSheetId, 'endRowIndex' => 1, 'endColumnIndex' => count( $insert_names ), ],
              'cell' => [ 'userEnteredFormat' => $format, ],
          ],
      ])
  ];
  $batchUpdateRequest = new Google_Service_Sheets_BatchUpdateSpreadsheetRequest([ 'requests' => $requests ]);
  $result = $service->spreadsheets->batchUpdate(SPREAD_SHEET_ID, $batchUpdateRequest);

}


// ----------------------------------------
//              ADD NEW ROW
// ----------------------------------------

// checking last row values for dupplicate
$is_duplicate_lead = false;
if (!empty($values)) {
  $values_length = count($values);
  $last_value_without_date = $values[$values_length-1];
  array_shift( $last_value_without_date );
  if ( $last_value_without_date === $get_values ) $is_duplicate_lead = true;
}

// writing new values
if (!$is_duplicate_lead) {
  $range = $_SHEET_NAME;
  $values = [ $insert_values ];
  $body = new Google_Service_Sheets_ValueRange([ 'values' => $values ]);
  $params = [ "valueInputOption" => "RAW" ];
  $insert = [ "insertDataOption" => "INSERT_ROWS" ];
  $result = $service->spreadsheets_values->append(SPREAD_SHEET_ID, $range, $body, $params, $insert);
}

// ========= REDIRECT AFTER ALL ===========

// ----------------------------------------
//    MAIN REDIRECT TO THANK YOU PAGE
// ----------------------------------------
header("Location: merci.php");
