<?php

include("../../Includes/Connection/connection.php");
session_start();

// ---------------------------------------------------------------------------------------

if (empty($_SESSION['id_user'])) {

    header("Location: ../../Views/Home/index.php");
}

// ---------------------------------------------------------------------------------------

$id_usuario = $_SESSION['id_user'];
$sql = pg_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
while ($datos = pg_fetch_assoc($sql)) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="../../Assets/Home/images/fav.svg" type="image/x-icon">

        <!-- SWEETALERT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- FONTAWESOME -->
        <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>

        <!-- DESIGN CSS -->
        <link href="../../CSS/Profile/profile.css" rel="stylesheet">

        <title>Profile | The Liberty Way</title>
    </head>

    <body>
        <div class="main-content">
            <!-- Top navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Form -->
                    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                        <div class="form-group mb-0">
                        </div>
                    </form>
                    <!-- User -->


                    <div class="navbar-nav align-items-center d-none d-md-flex">

                        <div class="action">



                            <?php

                            if (strlen($datos['imagen']) < 30) { ?>

                                <div class="profile" onclick="menuToggle();">
                                    <img src="../../Assets/Profile/image/<?php echo $datos['imagen'] ?>" alt="">
                                </div>

                            <?php  } else { ?>

                                <div class="profile" onclick="menuToggle();">
                                    <img src="<?php echo $datos['imagen'] ?>" ?>" alt="">
                                </div>
                            <?php } ?>

                            <div class="menu">

                                <div class="profileview">

                                    <?php

                                    if (strlen($datos['imagen']) < 30) { ?>

                                        <div>
                                            <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                        </div>

                                    <?php  } else { ?>

                                        <div>

                                            <img src="<?php echo $datos['imagen'] ?>" class="rounded-circle">

                                        </div>

                                    <?php } ?>



                                </div>
                                <br>
                                <h3>
                                    <u><?php echo $datos['nombre'] . " " . $datos['apellido']; ?></u>
                                    <div>
                                        <?php echo $datos['correo_electronico'] ?>
                                    </div>
                                </h3>
                                <hr class="my-4">
                                <ul>
                                    <li style="cursor: pointer;">
                                        <i class="fa-solid fa-house"></i>
                                        <?php if ($datos['rol'] == 1) { ?>
                                            <a href="../Dashboard/index.php">HOME</a>
                                        <?php } elseif ($datos['rol'] == 2) { ?>
                                            <a href="../Dashboard/index.php">HOME</a>
                                        <?php } elseif ($datos['rol'] == 3) { ?>
                                            <a href="../Home/index.php">HOME</a>
                                        <?php } ?>
                                    </li>
                                    <li style="cursor: pointer;">
                                        <i class="fa-solid fa-circle-user active"></i>
                                        <a class="active">PROFILE</a>
                                    </li>
                                    <?php if ($datos['rol'] == 1 || $datos['rol'] == 2) {
                                    } elseif ($datos['rol'] == 3) { ?>
                                        <li style="cursor: pointer;">
                                            <i class="fa-solid fa-ticket"></i>
                                            <a href="../Profile/mypurchases.php">PURCHASES</a>
                                        </li>
                                    <?php } ?>
                                    <hr class="my-4">
                                    <li id="logoutButton" style="cursor: pointer;">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <a>LOG OUT</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Header -->
            <div class="header pb-8 pt-lg-8">


                <?php

                if (strlen($datos['imagen']) < 30) { ?>

                    <center>
                        <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="image_banner">
                    </center>

                <?php  } else { ?>


                    <center>
                        <img src="<?php echo $datos['imagen'] ?>" class="image_banner">
                    </center>

                <?php } ?>


                <span class="mask bg-gradient-default opacity-8"></span>
            </div>
            <!-- Page content -->
        </div>
        </br>
        <div class="container-fluid mt--7">
            <div class="row justify-content-center">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <?php
                                    if (!isset($_POST['Edit_Profile'])) { ?>
                                        <div>
                                            <div>
                                                <div class="uploadview">


                                                    <?php

                                                    if (strlen($datos['imagen']) < 30) { ?>

                                                        <div>
                                                            <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                                        </div>

                                                    <?php  } else { ?>

                                                        <div>

                                                            <img src="<?php echo $datos['imagen'] ?>" class="rounded-circle">

                                                        </div>

                                                    <?php } ?>


                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>

                                        <form class="form" id="form" method="POST" action="../../Includes/Profile/update_profileimage.php" enctype="multipart/form-data">

                                            <input type="hidden" name="id" value="<?php echo $datos['id_usuario']; ?>">

                                            <div class="upload">



                                                <?php

                                                if (strlen($datos['imagen']) < 30) { ?>

                                                    <div>
                                                        <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" id="image">
                                                    </div>

                                                <?php  } else { ?>

                                                    <div>

                                                        <img src="<?php echo $datos['imagen'] ?>" id="image">

                                                    </div>

                                                <?php } ?>


                                                <div class="centerRound" id="upload">
                                                    <input type="file" name="FILE_img" id="fileImg" accept=".jpg,.jpeg,.png" capture="filesystem">
                                                    <i class="fa fa-camera"></i>
                                                </div>

                                                <div class="leftRound" id="cancel" style="display: none;">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div class="rightRound" id="confirm" style="display: none;">
                                                    <input type="submit">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>


                                        </form>

                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4"></div>

                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h3>
                                    <u><?php echo $datos['nombre'] . " " . $datos['apellido']; ?></u></span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i><?php echo $datos['correo_electronico'] ?>
                                </div>
                                <hr class="my-4">
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i><u>OCCUPATION</u>
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>
                                    <?php
                                    if ($datos['rol'] == 1) {
                                        echo "SUPER ADMINISTRATOR";
                                    } elseif ($datos['rol'] == 2) {
                                        echo "ADMINISTRATOR";
                                    } elseif ($datos['rol'] == 3) {
                                        echo "USER";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (!isset($_POST['Edit_Profile'])) { ?>
                            <center>
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="submit" class="btn btn-beige" name="Edit_Profile" value="EDIT PROFILE"></input>
                                </form>
                            </center>
                        <?php
                        }
                        ?>


                        </br>
                    </div>
                </div>
            </div>
        </div>
        </br>
        <!-- SWEETALERT -->
        <?php
        if (isset($_SESSION['alerta'])) { ?>
            <script>
                Swal.fire({
                    icon: '<?php echo $_SESSION['alerta']['icon']; ?>',
                    title: '<?php echo $_SESSION['alerta']['title']; ?>',
                    text: '<?php echo $_SESSION['alerta']['text']; ?>',
                    showConfirmButton: false,
                    timer: 5000
                })
            </script>
        <?php
            unset($_SESSION['alerta']);
        }
        ?>
        </br>
        <?php
        if (!isset($_POST['Edit_Profile'])) { ?>
            <center>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center"></div>
                            </br>
                            <div>
                                <center>
                                    <h3><u>MY ACCOUNT</u></h3>
                                </center>
                            </div>
                            </br>

                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4"><u>USER INFORMATION</u></h6>
                                </br>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">NAME</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php echo $datos['nombre']; ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">LAST NAME</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php echo $datos['apellido']; ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">EMAIL ADDRESS</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php echo $datos['correo_electronico']; ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">USERNAME</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php echo $datos['usuario']; ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">OCCUPATION</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php
                                                        if ($datos['rol'] == 1) {
                                                            echo "Super Administrator";
                                                        } elseif ($datos['rol'] == 2) {
                                                            echo "Administrator";
                                                        } elseif ($datos['rol'] == 3) {
                                                            echo "User";
                                                        }
                                                        ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">PHONE NUMBER</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php echo $datos['telefono']; ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        <?php } else { ?>
            <center>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center"></div>
                            </br>
                            <div>
                                <center>
                                    <h3><u>MY ACCOUNT</u></h3>
                                </center>
                            </div>
                            </br>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="../../Includes/Profile/update_userinformation.php">
                                <h6 class="heading-small text-muted mb-4"><u>USER INFORMATION</u></h6>
                                </br>
                                <input type="hidden" name="id" value="<?php echo $datos['id_usuario']; ?>">
                                </br>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="form-control-label" for="input-username">NAME</label>
                                            <input class="form-control form-control-alternative" name="first_name" value="<?php echo $datos['nombre']; ?>"></input>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">LAST NAME</label>
                                                <input class="form-control form-control-alternative" name="last_name" value="<?php echo $datos['apellido']; ?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">EMAIL ADDRESS</label>
                                                <input class="form-control form-control-alternative" name="email_address" value="<?php echo $datos['correo_electronico']; ?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">USERNAME</label>
                                                <input class="form-control form-control-alternative" name="username" value="<?php echo $datos['usuario']; ?>"></input>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">OCCUPATION</label>
                                                <label class="form-control form-control-alternative">
                                                    <h4><?php
                                                        if ($datos['rol'] == 1) {
                                                            echo "Super Administrator";
                                                        } elseif ($datos['rol'] == 2) {
                                                            echo "Administrator";
                                                        } elseif ($datos['rol'] == 3) {
                                                            echo "User";
                                                        }
                                                        ?></h4>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">PHONE NUMBER</label>
                                                <input class="form-control form-control-alternative" name="phone_number" value="<?php echo $datos['telefono']; ?>"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <hr class="my-4">
                                <div>
                                    <input type="submit" class="btn btn-dark" name="Update_UserInformation" value="UPDATE INFORMATION"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </br>
                </br>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center"></div>
                            </br>
                            <div>
                                <center>
                                    <h3><u>CHANGE PASSWORD</u></h3>
                                </center>
                            </div>
                            </br>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="../../Includes/Profile/update_password.php">
                                <h6 class="heading-small text-muted mb-4"><u>USER PASSWORD</u></h6>
                                </br>
                                <input type="hidden" name="id" value="<?php echo $datos['id_usuario']; ?>">
                                </br>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">CURRENT PASSWORD</label>
                                                <input type="password" id="password" class="form-control form-control-alternative" name="current_password" placeholder="Type your current password..." required></input>
                                                <i id="toggleIcon" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility()"></i>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="form-control-label" for="input-username">NEW PASWORD</label>
                                            <input type="password" id="password2" class="form-control form-control-alternative" name="new_password" placeholder="Type your new password..." required></input>
                                            <i id="toggleIcon2" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility2()"></i>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">CONFIRM PASSWORD</label>
                                                <input type="password" id="password3" class="form-control form-control-alternative" name="confirm_password" placeholder="Retype your new password..." required></input>
                                                <i id="toggleIcon3" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility3()"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </br>
                                <hr class="my-4">
                                <div>
                                    <input type="submit" class="btn btn-dark" name="Update_Password" value="UPDATE PASSWORD"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
        <?php
        }
        ?>


        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6 m-auto text-center">
                    <div class="copyright">
                        <p>Account created <a style="color: #796736cc;"><u><?php echo $datos['fecha']; ?></u></a></p>
                    </div>
                </div>
            </div>
        </footer>
    <?php
}
    ?>

    <!-- ----- PROFILE ----- -->
    <script src="../../JS/Profile/profile.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton = document.getElementById('logoutButton');

            logoutButton.addEventListener('click', function(event) {
                event.preventDefault();

                Swal.fire({

                    icon: 'question',
                    title: 'Are you sure?',
                    text: 'You will be logged out!',
                    color: '#000',
                    confirmButtonColor: '#dcbc87',
                    confirmButtonText: 'Yes, log out',
                    showCloseButton: true,
                    showCancelButton: true,
                    cancelButtonColor: '#303030',
                    cancelButtonText: 'Cancel'

                }).then((result) => {

                    if (result.isConfirmed) {
                        window.location.href = '../../Includes/Login-Registro/logout.php';
                    }

                });
            });
        });
    </script>

    </body>

    </html>