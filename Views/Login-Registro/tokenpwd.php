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

$email = $_SESSION['email'];

if (isset($_POST['Validtoken'])) {

    $query = "SELECT * FROM usuarios WHERE correo_electronico='$email'";
    $result = pg_query($conexion, $query);
    $rows = pg_fetch_assoc($result);

    $token = $_POST['tokenvalidation'];
    $token1 = $rows['tokenpass'];

    if ($token != $rows['tokenpass']) {


        $_SESSION['alerta'] = array(
            'icon' => 'error',
            'title' => 'ERROR',
            'text' => 'The token is incorrect'
        );
    } else {



        $update_query = "UPDATE usuarios SET tokenpass = NULL WHERE tokenpass ='$token1'";
        $update_result = pg_query($conexion, $update_query);
        header('Location: changepwd.php');
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
                    <center>
                        <h2 class="title"><u>Enter your reset password token</u></h2>
                    </center>

                    <br>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="tokenvalidation" placeholder="Token" minlength="3" maxlength="30" required />
                    </div>

                    <br>
                    <input type="submit" name="Validtoken" class="btn" value="Continue" />

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
                <img src="../../Assets/Login-Registro/img/email_inbox.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <?php echo $errores; ?>

</body>

</html>