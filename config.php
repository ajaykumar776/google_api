


<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('619289382967-tj5s60cpmotspj6eqio24raofm6lahc1.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('oHnMh35bK_ye6EAglXpaltCd');


//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/ajay/google_Api/dashboard.php');
//scope allowing


// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>