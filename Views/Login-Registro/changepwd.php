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

if (isset($_POST['changepass'])) {
    $password = $_POST['pass'];
    $password2 = $_POST['rpass'];
    $email = $_SESSION['email'];

    $errores = "";

    if (!empty($password) or !empty($password2)) {
        if ($password != $password2) {
            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'Password do not match!'
            );
        } else {


            $query = "SELECT * FROM usuarios WHERE correo_electronico='$email'";
            $result = pg_query($conexion, $query);
            $rows = pg_fetch_assoc($result);

            $password = sha1($password);
            $password2 = sha1($password2);

            if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/', $password)) {

                $_SESSION['alerta'] = array(
                    'icon' => 'warning',
                    'title' => 'Oops...',
                    'text' => 'You must use a password with a capital letter, a lowercase letter, a special character, and a number!'
                );
            } else {
                if ($password == $rows['pass']) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'New password cannot be the same as the previous one!'
                    );
                } else {
                    $update_query = "UPDATE usuarios SET contrasenia ='$password' WHERE correo_electronico='$email'";
                    $update_result = pg_query($conexion, $update_query);

                    if ($update_result) {

                        $_SESSION['alerta'] = array(
                            'icon' => 'success',
                            'title' => 'Updated',
                            'text' => 'Password successfully changed!'
                        );

                        header('Location: index.php');
                    } else {


                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'ERROR',
                            'text' => 'Failed to update password'
                        );
                    }
                }
            }
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

                    <h2 class="title"><u>Enter your new password</u></h2>
                    <br>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="pass" placeholder="Password" minlength="5" maxlength="20" required />
                        <i id="toggleIcon" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility()"></i>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password2" name="rpass" placeholder=" Repeat Password" minlength="5" maxlength="20" required />
                        <i id="toggleIcon2" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility2()"></i>
                    </div>

                    <br>
                    <input type="submit" name="changepass" class="btn" value="Continue" />

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
                
                <div class="content"></div>
                <img src="../../Assets/Login-Registro/img/code_verfication.svg" class="image" alt="" />
            </div>
        </div>

    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }

        function togglePasswordVisibility2() {
            var passwordInput = document.getElementById("password2");
            var toggleIcon = document.getElementById("toggleIcon2");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>

    <?php echo $errores; ?>

</body>

</html>