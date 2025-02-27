<?php

include('../../Ngrok/ngrok.php');
//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('145698937140-68p3ji3j822i6noopiaqn5qqdg3koi8l.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI -- CAMBIAR ESTO A MANO PORQUE NO HAY DE OTRA
$google_client->setRedirectUri('https://correct-marginally-cod.ngrok-free.app/TheLibertyWay/Includes/Login-Registro/api-google-logic.php');


// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

// $google_client->
?> 