<?php

include("../../Includes/Connection/connection.php");
include("../../Includes/Cart/PHP/cart.php");
session_start();

//___________________________________________________________________________________________________________

if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { //Administrator

    header("Location: ../../Views/Dashboard/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lodgings | The Liberty Way</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="../../CSS/Home/fontawesome-all.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../../CSS/Home/bootstrap.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="../../Assets/Home/images/fav.svg" type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href="../../CSS/Home/swiper.min.css">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="../../CSS/Home/lightcase.css">
    <!-- odometer css link -->
    <link rel="stylesheet" href="../../CSS/Home/odometer.css">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="../../CSS/Home/icomoon.css">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="../../CSS/Home/line-awesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="../../CSS/Home/animate.css">
    <!-- aos.css -->
    <link rel="stylesheet" href="../../CSS/Home/aos.css">
    <!-- flatpick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- nice select css -->
    <link rel="stylesheet" href="../../CSS/Home/nice-select.css">

    <!-- main style css link -->
    <link rel="stylesheet" href="../../CSS/Home/style.css">




    <!-- andTour -->
    <link rel="stylesheet" href="../../CSS/andtour/style.css" />
    <link rel="stylesheet" href="../../CSS/andtour/responsive.css" />



    <!-- _________________________ Google Translate _________________________ -->
    <link rel="stylesheet" href="../../Includes/Apis/GoogleTranslate-api/style.css">
    <!-- ____________________________________________________________________ -->


    <!-- DROPDOWN LIST CSS-->
    <link rel="stylesheet" href="../../CSS/Home/user_menu.css">

    <!-- CART ITEM -->
    <link rel="stylesheet" href="../../CSS/Home/cart_item.css">

    <!-- CSS | iziToast -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>

    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- -- jQuery -- -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <style>
        .card-cartpayment {
            border-radius: 5px;
            background-color: #ebebebd3;
            position: relative;
            width: 40%;
            height: 10%;
            z-index: 9;
            padding: 20px;
            animation: scroll-down 3s cubic-bezier(0.4, 0, 1, 1) infinite;
        }

        .card-cartpayment:hover {
            transition: 0.5s;
            background-color: #f3f3f3d3;
        }

        @media only screen and (max-width: 991px) {
            .card-cartpayment {
                padding: 30px;
            }
        }
    </style>
</head>

<body>


    <div class="page-wrapper">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="preloader">
            <svg class="svg-loader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">
                <path class="loader__path" d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z" fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77" />
                <path class="loader__plane" d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z" fill="#000033" />
            </svg>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="header-section header-section-one">
            <div class="header">
                <div class="header-bottom-area">
                    <div class="container-fluid">
                        <div class="header-menu-content">

                            <nav class="navbar navbar-expand-lg p-0">
                                <a class="site-logo site-title" href="index.php">
                                    <img src="../../Assets/Home/images/logo.svg" alt="site-logo" height="55" width="185">
                                </a>

                                <?php if (empty($_SESSION['id_user'])) { ?>
                                    <div class="navbar-toggler ml-auto">
                                        <?php echo "<a href='../Login-Registro/index.php' class='btn--base'><i class='icon-name_icone'></i> Login</a>"; ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($_SESSION['id_user'])) { ?>
                                    <?php $id_usuario = $_SESSION['id_user'];
                                    $sql = pg_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
                                    while ($datos = pg_fetch_assoc($sql)) { ?>

                                        <div class="navbar-toggler ml-auto">
                                            <div class="action">
                                                <?php if (strlen($datos['imagen']) < 40) { ?>
                                                    <div class="profile" onclick="menuToggle1();">
                                                        <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" alt="">
                                                    </div>
                                                <?php  } else { ?>
                                                    <div class="profile" onclick="menuToggle1();">
                                                        <img src="<?php echo $datos['imagen'] ?>" alt="">
                                                    </div>
                                                <?php } ?>

                                                <div class="menu" style="position: absolute; right:-18px" id="userMenu--1">
                                                    <div class="profileview">
                                                        <div>
                                                            <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                                        </div>
                                                        <?php if (strlen($datos['imagen']) < 40) { ?>
                                                            <div>
                                                                <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                                            </div>

                                                            <?php if (strlen($datos['imagen']) < 40) { ?>
                                                                <div>
                                                                    <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                                                </div>
                                                            <?php  } else { ?>
                                                                <div>
                                                                    <img src="<?php echo $datos['imagen'] ?>" class="rounded-circle">
                                                                </div>
                                                            <?php } ?>
                                                        <?php  } else { ?>
                                                            <div>
                                                                <img src="<?php echo $datos['imagen'] ?>" class="rounded-circle">
                                                            </div>
                                                        <?php } ?>

                                                    </div>

                                                    <h3>
                                                        <u><?php echo $datos['nombre'] . " " . $datos['apellido']; ?></u>
                                                        </br>
                                                        <div>
                                                            <?php echo $datos['correo_electronico'] ?>
                                                        </div>
                                                    </h3>
                                                    <hr class="my-4">
                                                    <ul>
                                                        <li style="padding: 15px 0 15px 0; cursor:pointer;">
                                                            <i class="fa-solid fa-house active"></i>
                                                            <a class="active">HOME</a>
                                                        </li>
                                                        <li style="padding: 15px 0 15px 0; cursor:pointer;">
                                                            <i class="fa-solid fa-circle-user"></i>
                                                            <a href="../Profile/profile.php">PROFILE</a>
                                                        </li>
                                                        <li style="padding: 15px 0 15px 0; cursor:pointer;">
                                                            <i class="fa-solid fa-ticket"></i>
                                                            <a href="../Profile/mypurchases.php">PURCHASES</a>
                                                        </li>
                                                        <hr class="my-4">
                                                        <li id="logoutButton-1" style="padding: 15px 0 15px 0; cursor:pointer;">
                                                            <i class="fa-solid fa-right-from-bracket"></i>
                                                            <a>LOG OUT</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                <?php } ?>


                                <?php if (isset($_SESSION['id_user'])) { ?>
                                    <div class="navbar-toggler">
                                        <div class="action">
                                            <div class="container-cart-icon" id="cartSideBar--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="responsive-icon-cart">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                                <div class="responsive-count-products">
                                                    <span id="num_cart--1"><?php echo $num_cart; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu ml-auto">
                                        <li class="menu_has_children">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="menu_has_children"><a>About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="team.php">Our Team</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_has_children"><a href="flights.php">Flights</a>
                                        </li>
                                        <li class="menu_has_children"><a>Lodgings</a>
                                        </li>
                                        <li class="menu_has_children"><a>Social</a>
                                            <ul class="sub-menu">
                                                <li><a href="faq.php">Faq's</a></li>
                                                <li><a href="contact.php">Contact Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>



                                <?php if (empty($_SESSION['id_user'])) { ?>
                                    <div class="header-action-area">
                                        <div class="header-action" style="padding: 0 0 0 90px">
                                            <?php echo "<a href='../Login-Registro/index.php' class='btn--base'><i class='icon-name_icone'></i> Login</a>"; ?>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (isset($_SESSION['id_user'])) {
                                    $id_usuario = $_SESSION['id_user'];
                                    $sql = pg_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
                                    while ($datos = pg_fetch_assoc($sql)) { ?>
                                        <div class="header-action-area">
                                            <div class="header-action" style="padding: 0 0 0 100px;">
                                                <div class="action">

                                                    <?php if (strlen($datos['imagen']) < 40) { ?>
                                                        <div class="profile" onclick="menuToggle2();">
                                                            <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" alt="">
                                                        </div>
                                                    <?php  } else { ?>
                                                        <div class="profile" onclick="menuToggle2();">
                                                            <img src="<?php echo $datos['imagen'] ?>" alt="">
                                                        </div>
                                                    <?php } ?>



                                                    <div class="menu" id="userMenu--2">
                                                        <div class="profileview">
                                                            <div>
                                                                <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                                            </div>

                                                            <?php if (strlen($datos['imagen']) < 40) { ?>
                                                                <div>
                                                                    <img src="../../Assets/Profile/image/<?php echo $datos['imagen']; ?>" class="rounded-circle">
                                                                </div>
                                                            <?php  } else { ?>
                                                                <div>
                                                                    <img src="<?php echo $datos['imagen'] ?>" class="rounded-circle">
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        <h3>
                                                            <u><?php echo $datos['nombre'] . " " . $datos['apellido']; ?></u>
                                                            </br>
                                                            <div>
                                                                <?php echo $datos['correo_electronico'] ?>
                                                            </div>
                                                        </h3>
                                                        <hr class="my-4">
                                                        <ul>
                                                            <li style="cursor: pointer;">
                                                                <i class="fa-solid fa-house active"></i>
                                                                <a class="active">HOME</a>
                                                            </li>
                                                            <li style="cursor: pointer;">
                                                                <i class="fa-solid fa-circle-user"></i>
                                                                <a href="../Profile/profile.php">PROFILE</a>
                                                            </li>
                                                            <li style="cursor: pointer;">
                                                                <i class="fa-solid fa-ticket"></i>
                                                                <a href="../Profile/mypurchases.php">PURCHASES</a>
                                                            </li>
                                                            <hr class="my-4">
                                                            <li id="logoutButton-2" style="cursor: pointer;">
                                                                <i class="fa-solid fa-right-from-bracket"></i>
                                                                <a>LOG OUT</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>


                                <?php if (isset($_SESSION['id_user'])) { ?>
                                    <div class="header-action-area">
                                        <div class="header-action" style="padding: 0 0 0 80px;">

                                            <div class="container-cart-icon" id="cartSideBar--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                                <div class="count-products">
                                                    <span id="num_cart--2"><?php echo $num_cart; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_SESSION['id_user'])) { ?>
                <div class="cart-overlay">
                    <div class="cart">
                        <span>
                            <i class="fas fa-window-close fa-beat"></i>
                        </span>
                        <center>
                            <h2>YOUR CART</h2>
                        </center>
                        <div class="cart-content" id="sidecart">

                            <!-- ---------- CART ITEM ---------- -->
                            <?php
                            include("../../Includes/Cart/PHP/sidecart_view.php");
                            ?>
                            <!-- ------------------------------- -->

                        </div>
                    </div>
                </div>
            <?php } ?>

        </header>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!-- ALERTAS -->
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

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="banner-section inner-banner-section bg-overlay-black bg_img" data-background="../../Assets/Home/images/bg/inner-bg.png">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-12 text-center">
                        <div class="banner-content">
                            <h1 class="title">Lodgings</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lodgings</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <a href="#" class="scrollToTop">
            <i class="las la-dot-circle"></i>
            <span>Top</span>
        </a>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Package
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Package
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <?php if (isset($_SESSION['hotels']['data'])) { ?>

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Call-widget
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="call-widget-wrapper">
                <button type="button" class="call-widget-btn"><span class="num"><i class="icon-btn-icon-v2"></i> TheLibertyWay</span> <span class="arrow"></span></button>
                <div class="call-widget-form-area">
                    <form class="book-form" method="POST" action="../../Includes/Home/flights.php">
                        <div class="row justify-content-center mb-20-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>To <i style="color:#e9e9e9">(City)</i> </label>
                                    <div class="book-form-icon">
                                        <i class="icon-to-airplane"></i>
                                    </div>
                                    <div id="autocomplete-wrapper-v" class="autocomplete-wrapper" style="display:flexbox;box-sizing:border-box">
                                        <input type="text" id="autocomplete-input-v" placeholder="Type Entry Destination" autocomplete="off" class="book-select form--control" style="color:#FFF;">
                                        <input type="hidden" name="entry" id="entry-city-value">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <label>Date</label>
                                <div class="book-quantity">
                                    <div class="book-plus-minus">
                                        <div class="icon-schedule-icon"></div>
                                        <input name="date" class="book-plus-minus-box qty" type="datetime-local" placeholder="Departure Date">
                                    </div </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <label>Date</label>
                                <div class="book-quantity">
                                    <div class="book-plus-minus">
                                        <div class="icon-schedule-icon"></div>
                                        <input name="date" class="book-plus-minus-box qty" type="datetime-local" placeholder="Departure Date">
                                    </div </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <label>Passenger</label>
                                <div class="book-quantity">
                                    <div class="book-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input name="passengers" class="book-plus-minus-box qty" type="number" id="passengers" value="1" readonly>
                                        <div class="inc qtybutton" onclick=" if (document.getElementById('passengers').value == '10') document.getElementById('passengers').value='9';">+</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <button href="flights.php" type="submit" value="FlightQuery" name="Query" class="btn--base w-100 mt-10"><i class="icon-btn-icon"></i> Book
                                    Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Call-widget
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            <section class="package-section ptb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 text-center">
                            <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                                <span class="sub-title"><span>TLW</span> Lodgings</span>
                                <h2 class="section-title">TLW Lodgings</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Section Heading -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <center>
                                <div class='card-cartpayment' style=' margin:3rem 0rem 3rem 0rem;width:fit-content;'>
                                    <h2> <?php echo  count($_SESSION['hotels']['data']); ?> Lodgings available</h2>
                                </div>
                            </center>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <!-- <div class="col-lg-3">
                            <div class="left_side_search_area">
                                <div class="left_side_search_boxed">
                                    <div class="item_searc_map_area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.6722025132826!2d-89.28994862495837!3d13.6776854867065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632efe53778fb3%3A0x21f34da7f1473fd3!2sSanta%20Cecilia%20School!5e0!3m2!1sen!2ssv!4v1692122508106!5m2!1sen!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="left_side_search_boxed">
                                    <div class="left_side_search_heading">
                                        <h5 style="text-align: center;">Search by name</h5>
                                    </div>
                                    <div class="name_search_form">
                                        <input type="text" class="form-control" placeholder="e.g Deluxe bus">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <div class="left_side_search_boxed" style="text-align: center;">
                                    <div class="left_side_search_heading">
                                        <h5 style="text-align: center;">Filter by price</h5>
                                    </div>
                                    <div class="filter-price">
                                        <div id="price-slider"></div>
                                    </div>
                                    <button class="apply" type="button">Apply</button>
                                </div>
                                <div class="left_side_search_boxed">
                                    <div class="left_side_search_heading">
                                        <h5 style="text-align: center;">Filter by Review</h5>
                                    </div>
                                    <div class="filter_review">
                                        <form class="review_star">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                <label class="form-check-label" for="flexCheckDefault5">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="left_side_search_boxed">
                                    <div class="left_side_search_heading">
                                        <h5 style="text-align: center;">Filter by hotel star</h5>
                                    </div>
                                    <div class="filter_review">
                                        <form class="review_star">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaulta">
                                                <label class="form-check-label" for="flexCheckDefaulta">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaulf21">
                                                <label class="form-check-label" for="flexCheckDefaulf21">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf3">
                                                <label class="form-check-label" for="flexCheckDefaultf3">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf4">
                                                <label class="form-check-label" for="flexCheckDefaultf4">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf5">
                                                <label class="form-check-label" for="flexCheckDefaultf5">
                                                    <i class="fas fa-star color_theme2"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                    <i class="fas fa-star color_asse"></i>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="left_side_search_boxed">
                                    <div class="left_side_search_heading">
                                        <h5 style="text-align: center;">Facilities</h5>
                                    </div>
                                    <div class="tour_search_type">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                            <label class="form-check-label" for="flexCheckDefaultf1">
                                                <span class="area_flex_one">
                                                    <span>Wake-up call</span>
                                                    <span>20</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf2">
                                            <label class="form-check-label" for="flexCheckDefaultf2">
                                                <span class="area_flex_one">
                                                    <span>Flat TV</span>
                                                    <span>14</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf3">
                                            <label class="form-check-label" for="flexCheckDefaultaf3">
                                                <span class="area_flex_one">
                                                    <span>Vehicle service</span>
                                                    <span>30</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf4">
                                            <label class="form-check-label" for="flexCheckDefaultaf4">
                                                <span class="area_flex_one">
                                                    <span>Guide service</span>
                                                    <span>22</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf5">
                                            <label class="form-check-label" for="flexCheckDefaultaf5">
                                                <span class="area_flex_one">
                                                    <span>Internet, Wi-fi</span>
                                                    <span>41</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left_side_search_boxed">
                                    <div class="left_side_search_heading">
                                        <h5 style="text-align: center;">Hotel service</h5>
                                    </div>
                                    <div class="tour_search_type">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt1">
                                            <label class="form-check-label" for="flexCheckDefaultt1">
                                                <span class="area_flex_one">
                                                    <span>Gymnasium</span>
                                                    <span>20</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt2">
                                            <label class="form-check-label" for="flexCheckDefaultt2">
                                                <span class="area_flex_one">
                                                    <span>Mountain Bike</span>
                                                    <span>14</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt3">
                                            <label class="form-check-label" for="flexCheckDefaultt3">
                                                <span class="area_flex_one">
                                                    <span>Wifi</span>
                                                    <span>62</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt4">
                                            <label class="form-check-label" for="flexCheckDefaultt4">
                                                <span class="area_flex_one">
                                                    <span>Aerobics Room</span>
                                                    <span>08</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt5">
                                            <label class="form-check-label" for="flexCheckDefaultt5">
                                                <span class="area_flex_one">
                                                    <span>Golf Cages</span>
                                                    <span>12</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="row">
                                <?php
                                // $pagination = !empty($_GET['pagination']) ? ($_GET['pagination'] + 5) : 0;
                                $hotelpackage = $_SESSION['hotels']['data'];
                                // echo "<pre>";
                                // print_r($hotelpackage);
                                // echo "</pre>";
                                foreach ($hotelpackage as $hotels) { ?>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="theme_common_box_two">
                                            <div class="theme_two_box_img">
                                                <img src="../../Assets/Home/images/about-four.png" alt="img">
                                                <p style="font-size:smaller"><i class="fas fa-map-marker-alt"></i><?= ucwords(strtolower($hotels['hotel']['name'])); ?></p>
                                            </div>
                                            <div class="theme_two_box_content">
                                                <p style="font-family: Playfair Display, sans-serif;color: rgb(43, 37, 64);font-size:larger;"><a><?= ucwords(strtolower($hotels['hotel']['name'])); ?></a></p>
                                                <div class="rating" style="padding: 5px 0 20px 0;">
                                                    <?php
                                                    for ($i = 0; $i < random_int(1, 5); $i++) {
                                                    ?>
                                                        <span class="fa fa-star color_theme"></span>
                                                    <?php } ?>
                                                </div>
                                                <div class="price_hotel">
                                                    <h3>$ <?= $hotels['offers'][0]['price']['total'] ?></h3>
                                                </div>
                                                <hr>
                                                <?php if (isset($_SESSION['id_user'])) { ?>
                                                    <center>
                                                        <button href="flight-booking-submission.html" class="btn btn_theme btn_sm add-to-cart-btn" data-id="<?php echo $hotels['id']; ?>" data-token="<?php echo hash_hmac('sha1', $hotels['id'], KEY_TOKEN); ?>">Book
                                                            now</button>
                                                    </center>
                                                <?php } else { ?>
                                                    <center>
                                                        <a href="../../Views/Login-Registro/index.php" class="btn btn_theme btn_sm ">Book
                                                            now</a>
                                                    </center>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <?php } else { ?>
            <!-- Start Book-form -->
            <section class="book-form-section ptb-120">
                <div class="container">
                    <div class="book-form-area bg-overlay-black bg_img" data-background="../../Assets/Home/images/bg/bg-3.png">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 text-center">
                                <div class="section-header white">
                                    <span class="sub-title text-white"><span>The Liberty Way</span></span>
                                    <h2 class="section-title">Plan a Lodging</h2>
                                </div>
                                <form class="book-form" method="POST" action="../../Includes/Home/lodgings.php">
                                    <div class="row justify-content-center mb-20-none">
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                            <div class="book-select">
                                                <label>City</label>
                                                <div class="book-form-icon">
                                                    <i class="icon-to-airplane"></i>
                                                </div>
                                                <div id="autocomplete-wrapper-v" class="autocomplete-wrapper" style="display:flexbox;box-sizing:border-box">
                                                    <input type="text" id="autocomplete-input-v" placeholder="Type Entry Destination" autocomplete="off" class="book-select form--control" style="color:#FFF;">
                                                    <input type="hidden" name="entry" id="entry-city-value">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                            <label>Check-In</label>
                                            <div class="book-quantity" data-notranslate>
                                                <div class="book-plus-minus" data-notranslate>
                                                    <div data-notranslate class="icon-schedule-icon"></div>
                                                    <input data-notranslate name="checkin" class="book-plus-minus-box qty" type="datetime-local" placeholder="Departure Date" style="justify-content:center;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                            <label>Check-Out</label>
                                            <div class="book-quantity" data-notranslate>
                                                <div class="book-plus-minus" data-notranslate>
                                                    <div data-notranslate class="icon-schedule-icon"></div>
                                                    <input data-notranslate name="checkout" class="book-plus-minus-box qty" type="datetime-local" placeholder="Departure Date" style="justify-content:center;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                            <label>Rooms</label>
                                            <div class="book-quantity">
                                                <div class="book-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input name="rooms" class="book-plus-minus-box qty" type="text" id="passengers" value="1" readonly>
                                                    <div class="inc qtybutton" onclick=" if (document.getElementById('passengers').value == '7') document.getElementById('passengers').value='6';">+</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 form-group">
                                            <button href="flights.php" type="submit" class="btn--base w-100 mt-10"><i class="icon-btn-icon"></i> Book
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End Book-form -->

            <center>
                <div class="card-cartpayment">
                    <h3>Search for your lodging...</h3>
                </div>
            </center>
            <br><br>
        <?php  } ?>


        <script>
            const entry_input = document.getElementById("autocomplete-input-v");
            entry_input.addEventListener("input", function() {
                let countryNames = [];
                let countryValues = [];

                fetch('../../Includes/Apis/Amadeus/city_airport.json')
                    .then(response => response.json())
                    .then(data => {
                        var response = data;
                        CityNames = response.map((response) => {
                            return response.City_Name
                        });
                        CityValues = response.map((response) => {
                            return response.City_Code
                        });
                        CountryNames = response.map((response) => {
                            return response.Country_Name
                        });
                        filternames(CityNames, CityValues, CountryNames);

                        function filternames(names, values, countries) {
                            removeAutocompleteDropdown();
                            // console.log(names);

                            const value = entry_input.value.toLowerCase();
                            if (value.length === 0) return;
                            const filteredNames = []
                            names.forEach((name) => {
                                if (name.substr(0, value.length).toLowerCase() === value) {
                                    filteredNames.push(name);
                                }
                            });
                            // console.log(filteredNames);
                            createAutocompleteDropdown(filteredNames, values, names, countries);
                        }

                        function createAutocompleteDropdown(list, values, names, countries) {
                            const listEl = document.createElement("ul");
                            listEl.className = "autocomplete-list";
                            listEl.id = "autocomplete-list-v";
                            // console.log(countries)
                            list.forEach((city) => {
                                const listItem = document.createElement("li");
                                const CityButton = document.createElement("option");
                                // const CityLabel = document.createElement("label");
                                CityButton.addEventListener("click", onCountryButtonClick);
                                index = names.indexOf(city);
                                CityButton.innerHTML = city + ", " + countries[index];
                                // CityLabel.innerHTML = countries;
                                CityButton.value = values[index];
                                // CityButton.appendChild(CityLabel);
                                listItem.appendChild(CityButton);
                                listEl.appendChild(listItem);
                            });
                            document.querySelector("#autocomplete-wrapper-v").appendChild(listEl);
                        }

                        function removeAutocompleteDropdown() {
                            const listEl = document.querySelector("#autocomplete-list-v");
                            if (listEl) listEl.remove();
                        }

                        function onCountryButtonClick(e) {
                            e.preventDefault();
                            const buttonEl = e.target;
                            entry_input.value = buttonEl.innerHTML;
                            document.getElementById("entry-city-value").value = buttonEl.value;
                            removeAutocompleteDropdown();
                        }
                    })
                    .catch(error => console.error(error));
            });
        </script>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class="footer-section section--bg pt-120">
            <div class="footer-element" data-aos="fade-left" data-aos-duration="1200">
                <img src="../../Assets/Home/images/element/element-1.png" alt="element">
            </div>
            <div class="container">
                <div class="footer-top-area">
                    <div class="row align-items-end mb-30-none">
                        <div class="col-xl-4 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a class="site-logo site-title" href="index.php"> <img src="../../Assets/Home/images/logo.svg" alt="site-logo" height="55" width="185">
                                    </a>
                                </div>
                                <p>The Liberty Way was founded in 2023 seeking to provide real travel experiences through the guide, accesibility and comfort that the people deserve.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-9 mb-30">
                            <div class="footer-widget">
                                <h4 class="widget-title">EL SALVADOR</h4>
                                <ul class="footer-list">
                                    <li><a href="#0">Calle Don Bosco Av. Manuel Gallardo, </a></li>
                                    <li><a href="#0">1-1, Santa Tecla</a></li>
                                    <li><a href="#0">+503 2523 8800</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- ----------------------- Google Translate ----------------------- -->
                <div class="GoogleTranslate-center">
                    <div class="GoogleTranslate-dropdown">
                        <input type="text" class="textBox" placeholder="Language" readonly>
                        <div class="option">
                            <div onclick="doGTranslate('es');return false;">
                                <a title="Spanish"><img src="../../Includes/Apis/GoogleTranslate-api/español.png" height="40" width="40" alt="Spanish" /></a>
                            </div>

                            <div onclick="doGTranslate('en');return false;">
                                <a title="English"><img src="../../Includes/Apis/GoogleTranslate-api/ingles.png" height="40" width="40" alt="English"></a>
                            </div>

                            <div onclick="doGTranslate('de');return false;">
                                <a title="German"><img src="../../Includes/Apis/GoogleTranslate-api/alemania.png" height="40" width="40" alt="German"></a>
                            </div>

                            <div onclick="doGTranslate('fr');return false;">
                                <a title="French"><img src="../../Includes/Apis/GoogleTranslate-api/francia.png" height="40" width="40" alt="French"></a>
                            </div>

                            <div onclick="doGTranslate('ru');return false;">
                                <a title="Russian"><img src="../../Includes/Apis/GoogleTranslate-api/rusia.png" height="40" width="40" alt="Russian"></a>
                            </div>

                            <div onclick="doGTranslate('ja');return false;">
                                <a title="Japanese"><img src="../../Includes/Apis/GoogleTranslate-api/japones.png" height="40" width="40" alt="Japanese"></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="google_translate_element2"></div>
                <div id="translated_text"></div>
                <!-- ---------------------------------------------------------------- -->


                <div class="footer-bottom-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Get started</h4>
                                <ul class="footer-list">
                                    <!-- <li><a href="#0">Private jet</a></li> -->
                                    <li><a href="../Login-Registro/index.php">Register</a></li>
                                    <!-- <li><a href="#0">Current Jet Deals</a></li>
                                <li><a href="#0">Flynext mobile app</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">How it works</h4>
                                <ul class="footer-list">
                                    <li><a href="faq.php">How it works</a></li>
                                    <li><a href="faq.php">Ways to fly</a></li>
                                    <li><a href="faq.php">Ways to buy</a></li>
                                    <li><a href="faq.php">Private charter</a></li>
                                    <li><a href="faq.php">Private Jet Cost</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">About us</h4>
                                <ul class="footer-list">
                                    <li><a href="about.php">About us</a></li>
                                    <!-- <li><a href="#0">News & press</a></li> -->
                                    <li><a href="flights.php">Flights</a></li>
                                    <li><a href="lodgings.php">Lodgings</a></li>
                                    <!-- <li><a href="#0">Careers</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Newsletter</h4>
                                <p>The Liberty Way was founded in 2023 seeking to provide real travel experiences.</p>
                                <form class="subscribe-form" method="POST" action="../../Includes/Home/newsletter.php">
                                    <label class="subscribe-icon"><i class="las la-envelope"></i></label>
                                    <input type="text" class="form--control" name="email" placeholder="Enter Email">
                                    <button type="submit" value="" name="Newsletter" class="btn--base">Subscribe Us <i class="icon-btn-icon ml-1"></i></butt>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="social-area">
                        <ul class="footer-social">
                            <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com" class="active"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://youtube.com"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <p>© 2023 The Liberty Way. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Footer
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </div>




    <!-- jquery -->
    <script src="../../JS/Home/jquery.js"></script>
    <!-- bootstrap js -->
    <script src="../../JS/Home/bootstrap.min.js"></script>
    <!-- swipper js -->
    <script src="../../JS/Home/swiper.min.js"></script>
    <!-- lightcase js-->
    <script src="../../JS/Home/lightcase.js"></script>
    <!-- odometer js -->
    <script src="../../JS/Home/odometer.min.js"></script>
    <!-- viewport js -->
    <script src="../../JS/Home/viewport.jquery.js"></script>
    <!-- progress js -->
    <script src="../../JS/Home/circle-progress.min.js"></script>
    <!-- aos js file -->
    <script src="../../JS/Home/aos.js"></script>
    <!-- nice select js -->
    <script src="../../JS/Home/jquery.nice-select.js"></script>
    <!-- main -->
    <script src="../../JS/Home/main.js"></script>
    <!-- flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("input[type=datetime-local]", {
            minDate: "today",
            maxDate: new Date().fp_incr(279)
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton1 = document.getElementById('logoutButton-1');

            logoutButton1.addEventListener('click', function(event) {
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

        document.addEventListener('DOMContentLoaded', function() {
            const logoutButton2 = document.getElementById('logoutButton-2');

            logoutButton2.addEventListener('click', function(event) {
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

    <!-- JS | iziToast -->
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>


    <!-- ----- USER PROFILE ----- -->
    <script src="../../JS/Home/user_menu.js"></script>

    <!-- ----- CART ITEM ----- -->
    <script src="../../JS/Home/cart-item.js"></script>



    <!-- ----- ADD | CARRITO ----- -->
    <script src="../../Includes/Cart/JS/addTicket.js"></script>
    <!-- ------------------------------------- -->

    <!-- ---------- UPDATE | TICKET ---------- -->
    <script src="../../Includes/Cart/JS/updateTicket.js"></script>
    <!-- ------------------------------------- -->

    <!-- ---------- DELETE | TICKET ---------- -->
    <script src="../../Includes/Cart/JS/deleteTicket.js"></script>
    <!-- ------------------------------------- -->

    <!-- _________________________ Google Translate _________________________ -->
    <script src="../../Includes/Apis/GoogleTranslate-api/script.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <!-- ____________________________________________________________________ -->

</body>

</html>