<?php

include("../../Includes/Connection/connection.php");
session_start();

//___________________________________________________________________________________________________________

if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 3) { //User
    header("Location: ../../Views/Home/index.php");
} elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { //Administrator
    header("Location: ../../Views/Dashboard/index.php");
}

//___________________________________________________________________________________________________________

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../Includes/PHPMailer/PHPMailer.php';
require '../../Includes/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$errores = "";

if (isset($_POST['sendemail'])) {
    $email = $_POST['resetmail'];
    require("../../Includes/Connection/connection.php");

    $query = "SELECT * FROM usuarios WHERE correo_electronico='$email'";
    $result = pg_query($conexion, $query);
    $rows = pg_fetch_assoc($result);

    $date = new DateTime();
    $date_str = $date->format('Y-m-d H:i:s');

    $tokencreated = $rows['tokencreated'];

    if ($tokencreated) {
        $fecha_pasada = DateTime::createFromFormat('Y-m-d H:i:s', $tokencreated);
        $fecha_actual = new DateTime();
        $diferencia_dias = $fecha_pasada->diff($fecha_actual)->i;

        if ($diferencia_dias >= 5) {
            if ($email != $rows['correo_electronico']) {
                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Oops...',
                    'text' => 'You recently requested a password change!'
                );
            } else {
                $nombre = $rows['usuario'];
                $token = sprintf("%06d", random_int(0, 999999));

                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com;';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'thelivertway@gmail.com';
                $mail->Password   = 'zvypwbuagcuoueny';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom('thelivertway@gmail.com', 'TheLibertyWay');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Change password';
                $mail->Body    = '<!DOCTYPE html>
                <html>
                <head>
                    <title>Password Reset Token</title>
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
                <form action="reset-password.php" method="post">
                
                    <div class="container">
                        <h1>Password Reset Token</h1>
                        <p>Dear ' . $nombre . ' ,</p>
                        <p>We have received a request to reset the password for your account. To proceed with the password change, please use the following token code:</p>
                        <p><strong>' . $token . '</strong></p>
                        <p>Please visit the password reset page on our website and enter the token code to set a new password.</p>
                        <p>If you did not initiate the password reset request, please ignore this email.</p>
                        <p>If you have any questions or need further assistance, please do not hesitate to contact us. We will be happy to assist you in any way we can.</p>
                        <p>Best regards,</p>
                        <p>TheLibertyWay</p>
                    </div>
                </form>
                    
                </body>
                </html>
                ';
                $mail->send();

                $query = "UPDATE usuarios SET tokenpass ='$token', tokencreated = '$date_str' WHERE correo_electronico ='$email'";
                pg_query($conexion, $query);

                $_SESSION['token'] = $token;
                $_SESSION['email'] = $email;

                header('Location: tokenpwd.php');
            }
        } else {

            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'ERROR',
                'text' => 'We already sent an email.'
            );
        }
    } else {
        if ($email != $rows['correo_electronico']) {

            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'ERROR',
                'text' => 'Email does not exist.'
            );
        } else {
            $nombre = $rows['usuario'];
            $token = sprintf("%06d", random_int(0, 999999));

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com;';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'thelivertway@gmail.com';
            $mail->Password   = 'zvypwbuagcuoueny';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('thelivertway@gmail.com', 'TheLibertyWay');
            $mail->addAddress($email, $nombre);

            $mail->isHTML(true);
            $mail->Subject = 'Change password';
            $mail->Body    = '<!DOCTYPE html>
            <html>
            <head>
                <title>Password Reset Token</title>
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
            <form action="reset-password.php" method="post">
            
                <div class="container">
                    <h1>Password Reset Token</h1>
                    <p>Dear ' . $nombre . ' ,</p>
                    <p>We have received a request to reset the password for your account. To proceed with the password change, please use the following token code:</p>
                    <p><strong>' . $token . '</strong></p>
                    <p>Please visit the password reset page on our website and enter the token code to set a new password.</p>
                    <p>If you did not initiate the password reset request, please ignore this email.</p>
                    <p>If you have any questions or need further assistance, please do not hesitate to contact us. We will be happy to assist you in any way we can.</p>
                    <p>Best regards,</p>
                    <p>TheLibertyWay</p>
                </div>
            </form>
                
            </body>
            </html>
            ';
            $mail->send();

            $query = "UPDATE usuarios SET tokenpass ='$token', tokencreated = '$date_str' WHERE correo_electronico ='$email'";
            pg_query($conexion, $query);

            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            header('Location: tokenpwd.php');
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../../Assets/Home/images/fav.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/Login-Registro/style.css" />

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>

    <title>Password Recovery | The Liberty Way</title>

    <style>
        .fa-chevron-left {
            position: fixed;
            z-index: 50;
            top: 40px;
            left: 30px;
        }

        .btn--base {
            position: relative;
            color: #000;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: 800;
            text-align: center;
            text-decoration: none;
            transition: 1s;
        }

        .btn--base:hover {
            color: #dcbb87;
            text-decoration: underline;
        }

        .fa-arrow-right-long {
            color: #000;
            padding: 0 0 0 10px;
            transition: 1s;
            transform: translate(0%, 0%);
        }

        .btn--base:hover .fa-arrow-right-long {
            color: #dcbb87;
            padding: 0 0 0 5px;
            transform: translate(50%, 0%);
        }

        @media only screen and (max-width: 991px) {
            .btn--base {
                padding: 10px 18px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- FORMULARIO INICIAR SESIÓN -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="sign-in-form">

                    <h2 class="title"><u>Enter your Email</u></h2>
                    <br>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="resetmail" placeholder="Email" minlength="3" maxlength="30" required />
                    </div>


                    <br>
                    <input type="submit" name="sendemail" class="btn" value="Continue" />



                </form>



            </div>
        </div>
        <!-- ALERTAS -->
        <?php
        if (isset($_SESSION['alerta'])) { ?>
            <script>
                Swal.fire({
                    icon: '<?php echo $_SESSION['alerta']['icon']; ?>',
                    title: '<?php echo $_SESSION['alerta']['title']; ?>',
                    text: '<?php echo $_SESSION['alerta']['text']; ?>',
                    showConfirmButton: false,
                    timer: 3000
                })
            </script>
        <?php
            unset($_SESSION['alerta']);
        }
        ?>

        <!-- APARTADO PARA CAMBIAR DE FORMULARIOS -->

        <div class="panels-container">

            <div class="panel left-panel">
                <a class="icon-left" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                    <i class="fa-solid fa-chevron-left fa-xl fa-bounce" style="color: #7a6643;"></i>
                </a>
                <div class="content"></div>
                <img src="../../Assets/Login-Registro/img/forgot_password.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <?php echo $errores; ?>

</body>

</html>