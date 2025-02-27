<head>
	<link rel="icon" href="../../../favicon.png" type="image/png">
</head>

<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include("../../Includes/Apis/Google-api/config.php");
include("../Connection/connection.php");
include("../Ngrok/ngrok.php");
  

// --------------------------- API GOOGLE	 ---------------------------

if(isset($_GET["code"]))
{


    
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
} else {
    $google_client->revokeToken();

    $url = $google_client->createAuthUrl();
    header("Location:$url");

}


if($_GET['code'])
{

// --------------------------- SMTP CONFIG ---------------------------

//SERVER CONFIG

$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;                      
$mail->isSMTP();                                            
$mail->Host       = 'smtp.gmail.com';                     
$mail->SMTPAuth   = true;                                   
$mail->Username   = 'thelivertway@gmail.com';                    
$mail->Password   = 'zvypwbuagcuoueny';                               
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
$mail->Port       = 465;                                    

//TOKEN Y VARIABLES NECESARIAS

$token = sha1(rand(0, 1000));
$nombregoogle = $_SESSION['user_first_name'] ;
$apellidogoogle = $_SESSION['user_last_name'] ;
$emailgoogle = $_SESSION['user_email_address'];
$picturegoogle = $_SESSION['user_image'];
$mailforverifcaction = strtolower($emailgoogle);
$estado = "Inactivo";
$rol = 3;

//EMAIL PARTS

$mail->isHTML(true);                                  
$mail->Subject = 'Please confirm your email address';
$mail->Body    = '<!DOCTYPE html>
<html>
<head>
	<title>Account Email Verification</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			background-color: #f8f8f8;
			color: #333;
			margin: 0;
			padding: 0;
		}

		h1, h2, h3, h4, h5, h6 {
			color: #dcbb87;
			font-weight: bold;
			margin-top: 0;
		}

		a {
			color: #dcbb87;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 5px;
		}

		button {
			background-color: #dcbb87;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 16px;
			font-weight: bold;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		button:hover {
			background-color: #c9a874;
		}
	</style>
</head>
<body>
<form action="verificacion-correo.php" method="get" >

<div class="container">
		<h1>Account Email Verification</h1>
		<p>Dear '.$nombregoogle.',</p>
		<p>Thank you for registering for our travel and hotels website. Before you can start using your account, we need to verify your email address.</p>
		<p>To verify your email address, please click on the following button:</p>
		<p><a href="'.$ngrok.'/TheLibertyWay/Views/Login-Registro/verificacion-correo.php?email='.$mailforverifcaction.'&token='.$token.'"><button>Verify Email Address</button></a></p>
		<p>If you did not register for our service, please ignore this email.</p>
		<p>Thank you,</p>
		<p>TheLibertyWay Team</p>
	</div>
</form>
	
</body>
</html>
';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//EMAIL RECIPIENT

 //Recipients
 $mail->setFrom('thelivertway@gmail.com', 'TheLibertyWay');
 $mail->addAddress($emailgoogle);
 

 $sqlemail = pg_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$emailgoogle'");
 $filasemail = pg_num_rows($sqlemail);


if ($filasemail > 0) {
  echo "Ya existe la cuenta";
  $_SESSION['alerta'] = array(
	'icon' => 'warning',
	'title' => 'Hold on a second',
	'text' => 'Account already exist!'
);
header("Location: ../../Views/Login-Registro/index.php");
}else{ 
	
    

	$sql = pg_send_query($conexion, "INSERT INTO usuarios(nombre,apellido,usuario,correo_electronico,telefono,contrasenia,rol,estado,token,imagen) VALUES ('$nombregoogle','$apellidogoogle',null,'$emailgoogle',null,null,'$rol','$estado','$token','$picturegoogle')");
    echo pg_result_error (pg_get_result($conexion));

    if ($sql) {
        
        $_SESSION['alerta'] = array(
            'icon' => 'success',
            'title' => 'successful registration',
            'text' => 'Check your email address!'
        );
        
        header("Location: ../../Views/Login-Registro/index.php");
        $mail->send();
        }else {

			$_SESSION['alerta'] = array(
				'icon' => 'error',
				'title' => 'Error registration',
				'text' => 'error registering your account!'
			);
		}
    }

   

}




?>