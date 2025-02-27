<?php
//-------------------- CONNECTION TO DATABASE --------------------

require "../../Includes/Connection/connection.php";
session_start();


//----------------------- UPDATE PASSWORD -----------------------

if (isset($_POST['Update_Password'])) {

    if (!empty($_POST['current_password']) && !empty($_POST['new_password']) && !empty($_POST['confirm_password'])) {
        
        $id = $_POST["id"];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        $contraseña = trim(pg_escape_string($conexion, $_POST['current_password']));
        $contraseña_encriptada = Trim(sha1($contraseña));

        $sql_select = pg_query($conexion, "SELECT contrasenia FROM usuarios WHERE id_usuario = '$id'");
        $datos = pg_fetch_array($sql_select);

        if ($contraseña_encriptada == $datos['contrasenia']) {

            if ($new_password == $confirm_password) {

                if (strlen($new_password) >= 5) {
                    if (preg_match('/[a-zA-Z]/', $new_password) && preg_match('/[0-9]/', $new_password)) {
                        if (preg_match('/[a-z]/', $new_password) && preg_match('/[A-Z]/', $new_password)) {
                            if (preg_match('/[^a-zA-Z0-9]/', $new_password)) {
                                if (strpos($new_password, ' ') === false) {

                                    $newpassword_encrypt = Trim(sha1($new_password));
                                    $sql = pg_query($conexion, "UPDATE usuarios SET contrasenia='$newpassword_encrypt' WHERE id_usuario='$id'");

                                    if ($sql) {

                                        $_SESSION['alerta'] = array(
                                            'icon' => 'success',
                                            'title' => 'Successfully Updated',
                                            'text' => 'Password has been successfully updated !'
                                        );

                                        header("Location: ../../Views/Profile/profile.php");
                                        exit();
                                    } else {

                                        $_SESSION['alerta'] = array(
                                            'icon' => 'error',
                                            'title' => 'Updating error',
                                            'text' => 'Error updating password!'
                                        );

                                        header("Location: ../../Views/Profile/profile.php");
                                        exit();
                                    }
                                } else {
                                    $_SESSION['alerta'] = array(
                                        'icon' => 'warning',
                                        'title' => 'Oops...',
                                        'text' => 'The password must not contain spaces!'
                                    );

                                    header("Location: ../../Views/Profile/profile.php");
                                    exit();
                                }
                            } else {

                                $_SESSION['alerta'] = array(
                                    'icon' => 'warning',
                                    'title' => 'Oops...',
                                    'text' => 'Password must have special characters!'
                                );

                                header("Location: ../../Views/Profile/profile.php");
                                exit();
                            }
                        } else {

                            $_SESSION['alerta'] = array(
                                'icon' => 'warning',
                                'title' => 'Oops...',
                                'text' => 'Password must contain upper and lower case letters!'
                            );

                            header("Location: ../../Views/Profile/profile.php");
                            exit();
                        }
                    } else {

                        $_SESSION['alerta'] = array(
                            'icon' => 'warning',
                            'title' => 'Oops...',
                            'text' => 'Password must contain letters and numbers!'
                        );

                        header("Location: ../../Views/Profile/profile.php");
                        exit();
                    }
                } else {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'Password must be 5 or more characters!'
                    );

                    header("Location: ../../Views/Profile/profile.php");
                    exit();
                }
            } else {

                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Oops...',
                    'text' => 'Passwords entered do not match!'
                );

                header("Location: ../../Views/Profile/profile.php");
                exit();
            }
        } else {

            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'Password mismatch',
                'text' => 'The entered password does not match your account!'
            );

            header("Location: ../../Views/Profile/profile.php");
            exit();
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
