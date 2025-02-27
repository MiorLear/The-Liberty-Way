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

if (isset($_GET['email']) && isset($_GET['token'])) {

    $token = $_GET['token'];
    $email = $_GET['email'];
    $estado = "Activo";

    $result = pg_query_params($conexion, "SELECT * FROM usuarios WHERE token = $1 AND correo_electronico = $2 ", array($token, $email));

    if ($result && pg_num_rows($result) == 1) {
        $row = pg_fetch_assoc($result);

        pg_query_params($conexion, "UPDATE usuarios SET estado = $1 WHERE correo_electronico = $2", array($estado, $email));

        pg_query_params($conexion, "UPDATE usuarios SET token = NULL WHERE correo_electronico = $1", array($email));
        // echo "<script>
        // alert('The account has been successfully verified.');
        // window.location = '../../Views/Login-Registro/index.php';
        // </script>";
    } else {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'Oops...',
            'text' => 'The account has been previously verified!'
        );

        header("Location: ../../Views/Login-Registro/index.php");
        exit();
    }
} else {

    $_SESSION['alerta'] = array(
        'icon' => 'error',
        'title' => 'Error',
        'text' => 'Missing parameters in the URL!'
    );

    header("Location: ../../Views/Login-Registro/index.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Account | The Liberty Way</title>
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
    <!-- nice select css -->
    <link rel="stylesheet" href="../../CSS/Home/nice-select.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="../../CSS/Home/style.css">

    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>
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
                                <!-- <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button> -->
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu ml-auto">
                                        <!-- <li class="menu_has_children">
                                            <a href="../../Views/Home/index.php">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.php">Home One</a></li>
                                                <li><a href="index-two.html">Home Two</a></li>
                                                <li><a href="index-dark.html">Home Dark</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu_has_children"><a href="#0">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="flights.php">Service</a></li>
                                                <li><a href="flights-details.php">Service Details</a></li>
                                                <li><a href="deals.html">Deals</a></li>
                                                <li><a href="deals-details.html">Deals Details</a></li>
                                                <li><a href="lodgings.php">Package</a></li>
                                                <li><a href="lodgings-details.php">Package Details</a></li>
                                                <li><a href="course.html">Our Course</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="team.php">Our Team</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="../Login-Registro/index.php">Sign Up</a></li>
                                                <li><a href="../Login-Registro/index.php">Sign In</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li class="menu_has_children"><a href="../../Views/Home/about.php">About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="../../Views/Home/team.php">Our Team</a></li>
                                                <li><a href="../../Views/Home/team-details.php">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu_has_children"><a href="../../Views/Home/flights.php">Flights</a>
                                        </li>
                                        <li class="menu_has_children"><a href="../../Views/Home/lodgings.php">Lodgings</a>
                                        </li> -->
                                        <!-- <li class="menu_has_children"><a href="#0">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="faq.php">Faq</a></li> -->
                                        <!-- <li class="menu_has_children"><a href="../../Views/Home/contact.php">Contact Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="../../Views/Home/faq.php">Faq</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                    <!-- <div class="header-right">
                                        <div class="search-bar d-none d-lg-block">
                                            <div class="header-top-search-area">
                                                <form class="header-search-form" action="https://gamblingscript.com/search" method="GET">
                                                    <input type="search" name="keyword" id="header_search" placeholder="Search Product...">
                                                    <button class="header-search-btn"><i class="fas fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="header-action-area">
                                            <a href="../Login-Registro/index.php" class="action-btn two"><i class="icon-name_icone"></i></a>
                                            <div class="header-action">
                                                <?php
                                                if (empty($_SESSION['id_user'])) {
                                                    echo "<a href='../Login-Registro/index.php' class='btn--base'><i class='icon-name_icone'></i> Login</a>";
                                                } else {
                                                    echo "<a href='../Dashboard/profile.php' class='btn--base'><i class='icon-name_icone'></i> Your Profile</a>'";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Header
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--  Start Scroll-To-Top -->
        <a href="#" class="scrollToTop">
            <i class="las la-dot-circle"></i>
            <span>Top</span>
        </a>
        <!-- End Scroll-To-Top -->

        
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

        <!-- Start 404 -->
        <section class="banner-section inner-banner-section bg-overlay bg_img" data-background="assets/images/bg/inner-bg.png">
            <div class="container-fluid">
                <center>
                    <a class="site-logo site-title" href="../../Views/Home/index.php">
                        <img src="../../Assets/Home/images/logo.svg" alt="site-logo" height="55" width="500">
                    </a>
                </center>
                <br><br><br><br><br>
                <center>
                    <a href="#verified-account"><i class="fa-sharp fa-solid fa-arrow-down fa-bounce fa-2xl" style="color: #dcbb87"></i></a>
                </center>
            </div>
        </section>
        <!-- End 404 -->

        <!-- Start 404 -->
        <div class="four-not-four-section bg--gray ptb-120" id="verified-account">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-12 text-center">
                    <div class="banner-content">
                        <h1 class="title"><u>Verified Account</u></h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <p>
                                <h3>You are now free to continue browsing with your account through TheLibertyWay!</h3>
                                </p>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div class="four-not-four-element-one">
                <img src="../../Assets/Home/images/element/element-16.png" alt="element">
            </div>
            <div class="four-not-four-element-two">
                <img src="../../Assets/Home/images/element/element-17.png" alt="element">
            </div>
            <div class="four-not-four-item text-center" data-aos="fade-up" data-aos-duration="1200">
                <div class="four-not-four-thumb">
                    <img src="../../Assets/Home/images/404.png" alt="404">
                    <div class="four-not-four-element-three">
                        <img src="../../Assets/Home/images/element/element-16.png" alt="element">
                    </div>
                    <div class="four-not-four-element-four">
                        <img src="../../Assets/Home/images/element/element-17.png" alt="element">
                    </div>
                </div>
                <br><br><br><br>
                <div class="banner-btn">
                    <a href="../Home/index.php" class="btn--base"><i class="fas fa-chevron-right mr-2"></i>HOME <i class="icon-btn-icon ml-1"></i></a>
                </div>
            </div>
        </div>
        <!--  End 404 -->


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
                                    <a class="site-logo site-title" href="../../Views/Home/index.php"> <img src="../../Assets/Home/images/logo.svg" alt="site-logo" height="55" width="185"></a>
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
                        <!-- <div class="col-xl-2 col-lg-3 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h4 class="widget-title">ASIA & PACIFIC</h4>
                            <ul class="footer-list">
                                <li><a href="#0">2473 Red Road Ste 98</a></li>
                                <li><a href="#0">Singapore SG</a></li>
                                <li><a href="#0">+ 1 623 211 6319</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                        <div class="footer-widget">
                            <h4 class="widget-title">NORTH AMERICA</h4>
                            <ul class="footer-list">
                                <li><a href="#0">Europe 45 Gloucester Road</a></li>
                                <li><a href="#0">London DT1M 3BF</a></li>
                                <li><a href="#0">+44 (0)20 3671 5709</a></li>
                            </ul>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="footer-bottom-area">
                    <div class="row mb-30-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">Get started</h4>
                                <ul class="footer-list">
                                    <!-- <li><a href="#0">Private jet</a></li> -->
                                    <li><a href="../../Views/Home/../Login-Registro/index.php">Register</a></li>
                                    <!-- <li><a href="#0">Current Jet Deals</a></li>
                                <li><a href="#0">Flynext mobile app</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">How it works</h4>
                                <ul class="footer-list">
                                    <li><a href="../../Views/Home/faq.php">How it works</a></li>
                                    <li><a href="../../Views/Home/faq.php">Ways to fly</a></li>
                                    <li><a href="../../Views/Home/faq.php">Ways to buy</a></li>
                                    <li><a href="../../Views/Home/faq.php">Private charter</a></li>
                                    <li><a href="../../Views/Home/faq.php">Private Jet Cost</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                            <div class="footer-widget">
                                <h4 class="title">About us</h4>
                                <ul class="footer-list">
                                    <li><a href="../../Views/Home/about.php">About us</a></li>
                                    <!-- <li><a href="#0">News & press</a></li> -->
                                    <li><a href="../../Views/Home/flights.php">Flights</a></li>
                                    <li><a href="../../Views/Home/lodgings.php">Lodgings</a></li>
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


</body>

</html>