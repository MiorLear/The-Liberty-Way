<?php
//-------------------- CONNECTION TO DATABASE --------------------

require "../../Includes/Connection/connection.php";
session_start();


//------------------- UPDATE USER INFORMATION -------------------

if (isset($_POST['Update_UserInformation'])) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email_address']) && !empty($_POST['username']) && !empty($_POST['phone_number'])) {
        
        $id = $_POST["id"];
        $nombre = trim(pg_escape_string($conexion,$_POST['first_name']));
        $apellido = trim(pg_escape_string($conexion,$_POST['last_name']));
        $usuario = strtolower(trim(pg_escape_string($conexion,$_POST['username'])));
        $correo_electronico = strtolower(trim(pg_escape_string($conexion,$_POST['email_address'])));
        $telefono = trim(pg_escape_string($conexion,$_POST['phone_number']));
        $telefono_sin_formato = preg_replace('/[^0-9]/', '', str_replace(array("+503", " ", "-"), "", $telefono));

        if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombre)) {

            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'Invalid Name',
                'text' => 'The name you selected is invalid!'
            );
            
            header("Location: ../../Views/Profile/profile.php");

        } elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $apellido)) {
            
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'Invalid Last Name',
                'text' => 'The last name you selected is not valid!'
            );
            
            header("Location: ../../Views/Profile/profile.php");

        } elseif (!preg_match('/^[6-7]\d{7}$/', $telefono_sin_formato)) {
            
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'Invalid Phone',
                'text' => 'The telephone number you selected is not valid!'
            );
            
            header("Location: ../../Views/Profile/profile.php");

        } elseif (!filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)) {
            
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'Invalid Email Adress',
                'text' => 'The email adress you selected is not valid!'
            );

            header("Location: ../../Views/Profile/profile.php");

        } else {
            
            $telefono_formato = '+503 ' . substr($telefono_sin_formato, 0, 4) . '-' . substr($telefono_sin_formato, 4);

			$sqluser = pg_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND id_usuario != '$id'");
			$filasuser = pg_num_rows($sqluser);

			$sqlemail = pg_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico' AND id_usuario != '$id'");
			$filasemail = pg_num_rows($sqlemail);

			$sqlcellphone = pg_query($conexion, "SELECT * FROM usuarios WHERE telefono = '$telefono_formato' AND id_usuario != '$id'");
			$filascellphone = pg_num_rows($sqlcellphone);

            if ($filasuser > 0 && $filasemail > 0 && $filascellphone > 0){

                $_SESSION['alerta'] = array(
                    'icon' => 'error',
                    'title' => 'Existing records',
                    'text' => 'The user, the email and the phone number you selected already exist!'
                );
                
                header("Location: ../../Views/Profile/profile.php");

            }elseif ($filasuser > 0) {
                
                $_SESSION['alerta'] = array(
                    
                    'icon' => 'error',
                    'title' => 'Existing user',
                    'text' => 'The user you selected already exists!'
                );
                
                header("Location: ../../Views/Profile/profile.php");

            }elseif($filasemail > 0){
                
                $_SESSION['alerta'] = array(
                    'icon' => 'error',
                    'title' => 'Existing email adress',
                    'text' => 'The email adress you selected already exists!'
                );
                
                header("Location: ../../Views/Profile/profile.php");

            }elseif ($filascellphone > 0) {
                
                $_SESSION['alerta'] = array(
                    'icon' => 'error',
                    'title' => 'Existing phone number',
                    'text' => 'The phone number you selected already exists!'
                );
                
                header("Location: ../../Views/Profile/profile.php");
            } else {
                
                $sql = pg_query($conexion, "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', correo_electronico='$correo_electronico', telefono='$telefono_formato' WHERE id_usuario='$id'");

                if ($sql) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'success',
                        'title' => 'Successfully Updated',
                        'text' => 'Account information has been successfully updated!'
                    );

                    header("Location: ../../Views/Profile/profile.php");
                    exit();

                } else {

                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'Updating error',
                        'text' => 'Error updating Account information!'
                    );

                    header("Location: ../../Views/Profile/profile.php");
                    exit();

                }

            }
        } 

    } else {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'Oops...',
            'text' => 'Do not leave empty fields!'
        );

        header("Location: ../../Views/Profile/profile.php");
        exit();

    }
}
?>