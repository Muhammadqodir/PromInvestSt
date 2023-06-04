<?php
require 'vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
// credentials.json is the key file we downloaded while setting up our Google Sheets API
$path = 'creds.json';
$client->setAuthConfig($path);

// configure the Sheets Service
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1Y5omriVVDfofQs2gwnySsJZFskkdtmaTnQu99QmSRZ4';
$range = "data";
$userName = $_POST["name"];
$number = " ".$_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];

if($userName == "" && strlen($number) != 18 && $email == "" && $message == ""){
    session_start();
    $_SESSION["message"] = "Заполните все поля!";
    header('Location: contacts.php');
    exit();
}

$date = date("H:i:s d.m.Y");
$newRow = [
    $userName,
    $number,
    $email,
    $message,
    $date
];


$rows = [$newRow];
$valueRange = new \Google_Service_Sheets_ValueRange();
$valueRange->setValues($rows);
$options = ['valueInputOption' => 'USER_ENTERED'];
$service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $options);

session_start();
$_SESSION["success"] = true;
header('Location: contacts.php');