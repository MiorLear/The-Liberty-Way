<?php 

include("../Connection/connection.php");
session_start();

// --------------------------- LOGIN ---------------------------

if (isset($_POST['sign_in'])) {
    if(empty($_POST['User_L_Email']) && empty($_POST['PasswordL'])){
		
		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Hold on a second',
			'text' => 'You must fill in the fields with your information!'
		);
		
		header("Location: ../../Views/Login-Registro/index.php");
		
	}elseif (empty($_POST['User_L_Email'])) {
		
		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Hold on a second',
			'text' => 'You must enter your username or email address!'
		);

		header("Location: ../../Views/Login-Registro/index.php");

	}elseif (empty($_POST['PasswordL'])) {
		$_SESSION['alerta'] = array(
			'icon' => 'warning',
			'title' => 'Hold on a second',
			'text' => 'You must enter the Password!'
		);

		header("Location: ../../Views/Login-Registro/index.php");
	
	}else {

		$usuario_correo = strtolower(trim(pg_escape_string($conexion,$_POST['User_L_Email'])));
		$contraseña = trim(pg_escape_string($conexion,$_POST['PasswordL']));
		$contraseña_encriptada = trim(sha1($contraseña));
		$sql = pg_query($conexion, "SELECT * FROM usuarios WHERE (usuario = '$usuario_correo' OR correo_electronico = '$usuario_correo') AND contrasenia = '$contraseña_encriptada'");
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
}

?>