<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include("../Connection/connection.php");
include("../Ngrok/ngrok.php");
session_start();


// --------------------------- SMTP CONFIG ---------------------------

//SERVER CONFIG

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'thelivertway@gmail.com';
$mail->Password   = 'zvypwbuagcuoueny';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 465;

//TOKEN Y VARIABLES NECESARIAS

$mailforverifcaction = strtolower($_POST['EmailR']);
$token = sha1(rand(0, 1000));

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
		<p>Dear ' . $_POST['UserR'] . ',</p>
		<p>Thank you for registering for our travel and hotels website. Before you can start using your account, we need to verify your email address.</p>
		<p>To verify your email address, please click on the following button:</p>
		<p><a href="' . $ngrok . '/TheLibertyWay/Views/Login-Registro/verificacion-correo.php?email=' . $mailforverifcaction . '&token=' . $token . '"><button>Verify Email Address</button></a></p>
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










// --------------------------- REGISTER ---------------------------

if (isset($_POST["sign_up"])) {



	if (empty($_POST['UserR']) || empty($_POST['EmailR']) || empty($_POST['phone']) || empty($_POST['PasswordR']) || empty($_POST['RepeatpasswordR'])) {







		$alerts['alerta'] = array(



			'icon' => 'warning',



			'title' => 'Hold on a second',



			'text' => 'Don not leave empty fields!'



		);











		echo json_encode($alerts['alerta']);
		exit;
	} else {



		if ($_POST['PasswordR'] != $_POST['RepeatpasswordR']) {







			$alerts['alerta'] = array(



				'icon' => 'warning',



				'title' => 'Oops...',



				'text' => 'Passwords entered do not match!'



			);







			echo json_encode($alerts['alerta']);
			exit;
		} else {







			$contraseña = $_POST['PasswordR'];







			if (strlen($contraseña) >= 5) {



				if (preg_match('/[a-zA-Z]/', $contraseña) && preg_match('/[0-9]/', $contraseña)) {



					if (preg_match('/[a-z]/', $contraseña) && preg_match('/[A-Z]/', $contraseña)) {



						if (preg_match('/[^a-zA-Z0-9]/', $contraseña)) {



							if (strpos($contraseña, ' ') === false) {







								$usuario = strtolower(trim($_POST['UserR']));



								$correo_electronico = strtolower(trim($_POST['EmailR']));





								$telefono = trim($_POST['phone']);

								// VALIDATE CELLPHONE API

								$apiUrl = 'https://api.numlookup.com/';
								$apiKey = 'num_live_Z0SfIpYh7aIKBa6U3WjW5yn27BYEPNpJODMOmIWv';

								$requestUrl = 'https://api.numlookupapi.com/v1/validate/' . $telefono . '?apikey=num_live_Z0SfIpYh7aIKBa6U3WjW5yn27BYEPNpJODMOmIWv';

								$response = file_get_contents($requestUrl);

								if ($response !== false) {
									
									$result = json_decode($response, true);
								} else {

									echo "Error occurred while making the request";
								}




								$contraseña = trim(pg_escape_string($_POST['PasswordR']));



								$contraseña_encriptada = Trim(sha1($contraseña));



								$rol = 3;



								$estado = "Inactivo";



								$imagen = "IMG-User.png";



								$fecha = date('M d, Y');







								if ($result['valid'] < 1) {







									$alerts['alerta'] = array(



										'icon' => 'error',



										'title' => 'Invalid Phone',



										'text' => 'The telephone number you selected is not valid!'



									);







									echo json_encode($alerts['alerta']);
									exit;
								} elseif (!filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)) {







									$alerts['alerta'] = array(



										'icon' => 'error',



										'title' => 'Invalid Email Adress',



										'text' => 'The email adress you selected is not valid!'



									);







									echo json_encode($alerts['alerta']);
									exit;
								} else {







									







									$sqluser = pg_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");



									$filasuser = pg_num_rows($sqluser);







									$sqlemail = pg_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico'");



									$filasemail = pg_num_rows($sqlemail);







									$sqlcellphone = pg_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$telefono'");



									$filascellphone = pg_num_rows($sqlcellphone);







									if ($filasuser > 0 && $filasemail > 0 && $filascellphone > 0) {







										$alerts['alerta'] = array(



											'icon' => 'error',



											'title' => 'Existing records',



											'text' => 'The user, the email and the phone number you selected already exist!'



										);







										echo json_encode($alerts['alerta']);
										exit;
									} elseif ($filasuser > 0) {







										$alerts['alerta'] = array(







											'icon' => 'error',



											'title' => 'Existing user',



											'text' => 'The user you selected already exists!'



										);







										echo json_encode($alerts['alerta']);
										exit;
									} elseif ($filasemail > 0) {







										$alerts['alerta'] = array(



											'icon' => 'error',



											'title' => 'Existing email adress',



											'text' => 'The email adress you selected already exists!'



										);







										echo json_encode($alerts['alerta']);
										exit;
									} elseif ($filascellphone > 0) {







										$alerts['alerta'] = array(



											'icon' => 'error',



											'title' => 'Existing phone number',



											'text' => 'The phone number you selected already exists!'



										);







										echo json_encode($alerts['alerta']);
										exit;
									} elseif (empty($_POST['captcha'])) {







										$alerts['alerta'] = array(



											'icon' => 'error',



											'title' => 'Captcha',



											'text' => 'Please complete the captcha box!'



										);







										echo json_encode($alerts['alerta']);
										exit;
									} elseif ($_POST['terms'] !== "check") {







										$alerts['alerta'] = array(



											'icon' => 'error',



											'title' => 'Terms & Conditions',



											'text' => 'You need to accept terms & conditions'



										);







										echo json_encode($alerts['alerta']);
										exit;
									} else {







										$sql = pg_query($conexion, "INSERT INTO usuarios(usuario,correo_electronico,telefono,contrasenia,rol,estado,token,imagen,fecha) VALUES ('$usuario','$correo_electronico','$telefono','$contraseña_encriptada','$rol','$estado','$token','$imagen','$fecha')");


                                        




										if ($sql > 0) {







											$alerts['alerta'] = array(



												'icon' => 'error',



												'title' => 'Registration error',



												'text' => 'Error while registering!'



											);




											

                                            
											echo json_encode($alerts['alerta']);
											exit;
										} else {



                                          

											

											$alerts['alerta'] = array(



												'icon' => 'success',



												'title' => 'Successful registration',



												'text' => 'Successful Registration check your email address!'



											);

											

                                             

											
                    


											echo json_encode($alerts['alerta']);
											$mail->setFrom('thelivertway@gmail.com', 'TheLibertyWay');
                                            $mail->addAddress($_POST['EmailR']);
											$mail->send();
											exit;



											
										}
									}
								}
							} else {



								$alerts['alerta'] = array(



									'icon' => 'warning',



									'title' => 'Oops...',



									'text' => 'The password must not contain spaces!'



								);







								echo json_encode($alerts['alerta']);
								exit;



								exit();
							}
						} else {







							$alerts['alerta'] = array(



								'icon' => 'warning',



								'title' => 'Oops...',



								'text' => 'Password must have special characters!'



							);







							echo json_encode($alerts['alerta']);
							exit;



							exit();
						}
					} else {







						$alerts['alerta'] = array(



							'icon' => 'warning',



							'title' => 'Oops...',



							'text' => 'Password must contain upper and lower case letters!'



						);







						echo json_encode($alerts['alerta']);
						exit;



						exit();
					}
				} else {







					$alerts['alerta'] = array(



						'icon' => 'warning',



						'title' => 'Oops...',



						'text' => 'Password must contain letters and numbers!'



					);







					echo json_encode($alerts['alerta']);
					exit;



					exit();
				}
			} else {







				$alerts['alerta'] = array(



					'icon' => 'warning',



					'title' => 'Oops...',



					'text' => 'Password ' . $contraseña . ' be 5 or more contraseña!'



				);







				echo json_encode($alerts['alerta']);
				exit;



				exit();
			}
		}
	}
}
