<head>
	<link rel="icon" href="../../../favicon.png" type="image/png">
</head>
<?php 

include("../../Includes/Apis/Google-api/config2.php");
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
    session_destroy();
    $url = $google_client->createAuthUrl();
    header("Location:$url");

}


if($_GET['code'])
{
    
    $emailgoogle = $_SESSION['user_email_address'];
    $mailforverifcaction = strtolower($emailgoogle);
    
    $sql = pg_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$mailforverifcaction'");
    $datos = pg_fetch_array($sql);

		if ($datos) {

			if ($datos['estado'] == "Activo") {

				$_SESSION['id_user'] = $datos['id_usuario'];
				$_SESSION['id_rol'] = $datos['rol'];
				
				if ($datos['rol'] == 1) { //Super Administrador
					
					$_SESSION['id_user'] = $datos['id_usuario'];
					header("Location: ../../Views/Dashboard/index.php");
					
				}elseif ($datos['rol'] == 2) { //Administrador
					
					$_SESSION['id_user'] = $datos['id_usuario'];
					header("Location: ../../Views/Dashboard/index.php");
					
				}elseif ($datos['rol'] == 3) { //Usuario
					
					$_SESSION['id_user'] = $datos['id_usuario'];
					header("Location: ../../Views/Home/index.php");
				}

			}elseif ($datos['estado'] == "Inactivo") {

				$_SESSION['alerta'] = array(
					'icon' => 'error',
					'title' => 'You must confirm your email address',
					'text' => 'Check your email for more information!'
				);
		
				header("Location: ../../Views/Login-Registro/index.php");
			}

		}else{

			$_SESSION['alerta'] = array(
				'icon' => 'error',
				'title' => 'Incorrect User or Password',
				'text' => 'Enter your credentials correctly!'
			);
			 header("Location: ../../Views/Login-Registro/index.php");
		}

}

?>