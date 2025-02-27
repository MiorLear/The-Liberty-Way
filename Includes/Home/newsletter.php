<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include("../Connection/connection.php");
session_start();

if (isset($_POST["Newsletter"])) {
	if (empty($_POST['email'])) {

		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Oops...',
			'text' => 'Please enter your email address!'
		);

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit();
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$_SESSION['alerta'] = array(
			'icon' => 'error',
			'title' => 'Error',
			'text' => 'The e-mail address ' . $email . ' is not valid!'
		);

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit();
	}
}
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

//EMAIL PARTS

$mail->isHTML(true);
$mail->Subject = 'Welcome to ';
$mail->Body    = '<!DOCTYPE html>
<html>
<head>
	<title>Thank you for joining to The Liberty Way Newsletter</title>
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
<form action="newsletter.php" method="get" >

<div class="container">
		<h1>Welcome to TLW newsletter</h1>
		<p>Dear User,</p>
		<p>Thank you for registering on The LIberty Way Newspaper. Here you can find the best offers and services that can be offert.</p>
		<p>it is recommended to be attentive to the mails, because you could win up to a trip all paid, we wait for you in The Liberty Way, consider yourself part of the guild.</p>
		<p>Greetings.</p>
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
$mail->addAddress($_POST['email']);
$email = strtolower(trim(pg_escape_string($conexion, $_POST['email'])));

if (isset($_POST["Newsletter"])) {
	if (!empty($_POST['email']) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

		pg_close($conexion);
		$conexion =  pg_connect($connection_BD);
		$sqlemail = pg_query($conexion, "SELECT * FROM newsletter WHERE email = '$email'");
		// echo pg_last_error($conexion);
		$filasemail = pg_num_rows($sqlemail);
		echo $filasemail;

		if ($filasemail > 0) {

			$_SESSION['alerta'] = array(
				'icon' => 'warning',
				'title' => 'Oops...',
				'text' => 'The e-mail address ' . $email . ' has been registered!'
			);

			header("Location: ../../Views/Home/index.php");
			exit();

		} else {
			$sql = pg_send_query($conexion, "INSERT INTO newsletter(email) VALUES ('$email')");
			echo pg_result_error(pg_get_result($conexion));
			if ($sql > 0) {

				$_SESSION['alerta'] = array(
					'icon' => 'success',
					'title' => 'Successful registration',
					'text' => 'Registration successful, check your email!'
				);

				header("Location: ../../Views/Home/index.php");

				$mail->send();
				exit();
				
			} else {
				$_SESSION['alerta'] = array(
					'icon' => 'error',
					'title' => 'Unknown error',
					'text' => 'Error updating profile picture!'
				);

				header("Location: ../../Views/Home/index.php");
				exit();
			}
		}
	}
}
