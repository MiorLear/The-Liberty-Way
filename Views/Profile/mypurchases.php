<?php

 

 

 

include("../../Includes/Connection/connection.php");

 

include("../../Includes/Cart/PHP/cart.php");

 

session_start();

 

 

 

// ______________________________________________________________________________________________

 

 

 

if (empty($_SESSION['id_user'])) {

 

 

 

    header("Location: ../../Views/Home/index.php");

} elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { //Administrator

 

 

 

    header("Location: ../../Views/Dashboard/index.php");

}

 

 

 

// ______________________________________________________________________________________________

 

 

 

$id_usuario = $_SESSION['id_user'];

 

$sql2 = pg_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");

 

$datos = pg_fetch_assoc($sql2);

 

 

 

$id_tlw = $datos['id_usuario'];

 

 

 

$user_tlw = $datos['usuario'];

 

 

 

?>

 

 

 

 

 

 

 

<!DOCTYPE html>

 

<html lang="en" data-bs-theme="light">

 

 

 

<head>

 

    <meta charset="UTF-8">

 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 

    <title>My Purchases - The Liberty Way</title>

 

 

 

    <!--Google web fonts-->

 

    <link rel="preconnect" href="https://fonts.googleapis.com">

 

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

 

    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=IBM+Plex+Mono:ital@0;1&display=swap" rel="stylesheet">

 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

 

 

 

    <!-- Bootstrap -->

 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

 

 

 

    <!-- Home -->

 

    <link rel="stylesheet" href="../../CSS/Cart/line-awesome.min.css">

 

    <link rel="stylesheet" href="../../CSS/Cart/style.css">

 

 

 

    <!-- Dashboard -->

 

    <link rel="stylesheet" href="../../CSS/Cart/style.min.css">

 

 

 

    <!-- Excel -->

 

    <link rel="stylesheet" href="../../CSS/Excel/Excel.css">

 

 

 

    <!-- favicon -->

 

    <link rel="shortcut icon" href="../../Assets/Home/images/fav.svg" type="image/x-icon">

 

 

 

    <!-- -- jQuery -- -->

 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 

 

 

    <!-- SWEETALERT -->

 

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 

 

 

    <!-- FONTAWESOME -->

 

    <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>

 

 

 

    <style>

        .hidden {

 

            display: none;

 

        }

    </style>

 

</head>

 

 

 

<body>

 

    <div class="page-wrapper">

 

 

 

        <!-- Start Preloader -->

 

        <div class="preloader">

 

            <svg class="svg-loader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">

 

                <path class="loader__path" d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z" fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77" />

 

                <path class="loader__plane" d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z" fill="#000033" />

 

            </svg>

 

        </div>

 

        <!-- End Preloader -->

 

 

 

 

 

        <!--  Start Header -->

 

        <header class="header-section header-section-one">

 

            <div class="header">

 

                <div class="header-bottom-area">

 

                    <div class="container-fluid">

 

                        <div class="header-menu-content">

 

                            <nav class="navbar navbar-expand-lg p-0">

 

                                <div class="navbar-collapse" id="navbarSupportedContent">

 

                                    <ul class="" style="padding-top: 25px;">

 

                                        <li class="menu_has_children">

 

                                            <a href="../../Views/Home/index.php"><i class="fa-solid fa-chevron-left fa-xl" style="color: #dcbb87;"></i></a>

 

                                        </li>

 

                                    </ul>

 

                                </div>

 

                            </nav>

 

                        </div>

 

                    </div>

 

                </div>

 

            </div>

 

        </header>

 

        <!-- End Header -->

 

 

 

 

 

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

 

 

 

        <!-- Cart Banner -->

 

        <section class="banner-section inner-banner-section bg-overlay bg_img" data-background="assets/images/bg/inner-bg.png">

 

            <div class="container-fluid">

 

                <center>

 

                    <a class="site-logo site-title" href="../../Views/Home/index.php">

 

                        <img src="../../Assets/Logo/logo.svg" alt="site-logo" height="55" width="500">

 

                    </a>

 

                </center>

 

                <br><br><br><br><br><br><br><br><br>

 

                <center>

 

                    <a href="#cart-checkout"><i class="fa-sharp fa-solid fa-arrow-down fa-bounce fa-2xl" style="color: #dcbb87"></i></a>

 

                </center>

 

 

 

            </div>

 

        </section>

 

        <!-- End Cart Banner -->

 

 

 

        <!-- Cart Items -->

 

        <div class="four-not-four-section bg--gray ptb-120" id="cart-checkout">

 

            <div class="row justify-content-center align-items-center">

 

                <div class="col-xl-12 text-center">

 

 

 

                    <div class="container">

 

                        <div class="card-cartpayment">

 

                            <div class="banner-content">

 

                                <h1 class="title"><u>My Purchases</u></h1>

 

                                <br><br><br>

 

                                <div class="breadcrumb-area">

 

                                    <div class="table-responsive">

 

                                        <div>

 

                                            <!-- <button id="excelBtn" data-tippy-content="EXCEL Report" class="btn btn-outline-success">

 

                                                <span class="mb-1 material-symbols-rounded" style="font-size:22px">

 

                                                    <span>backup_table</span>

 

                                                </span>

 

                                            </button> -->

 

 

 

 

 

                                            <div>

 

                                                <a data-tippy-content="PDF Report" href="../../Includes/Pdf/TLW - MyPurchasesReport.php" type="button" class="btn btn-outline-danger"><span class="mb-1 material-symbols-rounded" style="font-size:22px"><span>picture_as_pdf</span></span></a>

 

                                                &nbsp;

 

                                                &nbsp;

 

                                                <button id="excelBtn" data-tippy-content="EXCEL Report" href="" type="button" class="btn btn-outline-success"><span class="mb-1 material-symbols-rounded" style="font-size:22px"><span>backup_table</span></span></button>

 

                                            </div>

 

                                        </div>

 

                                        <br>

 

                                        <br>

 

                                        <br>

 

                                        <table id="mypurchases" class="table table-hover">

 

 

 

                                            <thead class="table-dark" style="vertical-align: middle; text-align: center;">

 

                                                <tr style="vertical-align: middle; text-align: center;">

 

                                                    <th class="hidden" scope="col">ID</th>

                                                    <th scope="col">ID Payment</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Recepient Email</th>
                                                    <th scope="col">Price($USD)</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Status</th>

 

                                                    

 

                                                </tr>

 

                                            </thead>

 

                                            <tbody style="vertical-align: middle; text-align: center;">

 

                                                <?php

 

 

 

                                                $sql = "SELECT * FROM payment_receipt WHERE id_tlw = '$id_tlw' AND user_tlw = '$user_tlw'";

 

                                                $select_for_list = pg_query($conexion, $sql);

 

 

 

 

 

 

 

                                                if (pg_num_rows($select_for_list) == null) {

 

                                                    echo '<tr>

 

                                                            <td colspan="12" class="text-center" style="padding: 6.25rem; "><h2><b>Cart Empty</b></h2></td>

 

                                                          </tr>';

                                                } else {

 

 

 

                                                ?>

 

 

 

                                                    <?php while ($list = pg_fetch_assoc($select_for_list)) {  ?>

 

 

 

                                                        <tr style="vertical-align: middle; text-align: center;">

 

                                                            <td class="hidden"><?php echo $id_tlw; ?></td>

                                                            <td style="cursor: pointer;"><?php echo $list['id_transaccion']; ?></td>
                                                            <td style="cursor: pointer;"><?php echo $list['cliente_firstname']; ?></td>
                                                            <td style="cursor: pointer;"><?php echo $list['cliente_lastname']; ?></td>
                                                            <td style="cursor: pointer;"><?php echo $list['payee_email']; ?></td>
                                                            <td style="cursor: pointer;">$<?php echo $list['transaccion_amount']; ?></td>
                                                            <td style="cursor: pointer;"><?php echo $list['cliente_countrycode']; ?></td>
                                                            <td style="cursor: pointer;"><?php echo $list['status']; ?></td>
                                                            

 

                                                            

 

                                                            

 

                                                            

 

                                                            

 

                                                            

 

                                                            

 

                                                        </tr>

 

 

 

                                                    <?php  } ?>

 

                                            </tbody>

 

                                        <?php } ?>

 

                                        </table>

 

                                    </div>

 

                                </div>

 

 

 

 

 

                            </div>

 

                        </div>

 

                    </div>

 

 

 

                    <div class="four-not-four-element-one">

 

                        <img src="../../Assets/Home/images/element/element-20.png" alt="element">

 

                    </div>

 

                    <div class="four-not-four-element-two">

 

                        <img src="../../Assets/Home/images/element/element-21.png" alt="element">

 

                    </div>

 

                    <div class="four-not-four-item text-center" data-aos="fade-up" data-aos-duration="1200">

 

                        <div class="four-not-four-thumb">

 

                            <div class="four-not-four-element-three">

 

                                <img src="../../Assets/Home/images/element/element-20.png" alt="element">

 

                            </div>

 

                            <div class="four-not-four-element-four">

 

                                <img src="../../Assets/Home/images/element/element-21.png" alt="element">

 

                            </div>

 

                        </div>

 

                    </div>

 

                </div>

 

            </div>

 

        </div>

 

        <!--  End Cart Items -->

 

 

 

        <!-- Start Footer -->

 

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

 

        <!-- End Footer -->

 

    </div>

 

 

 

 

 

    <!-- ---------- Boostrap ---------- -->

 

 

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

 

 

 

    <!-- ------------------------------- -->

 

 

 

 

 

 

 

 

 

    <!-- ---------- HOME ---------- -->

 

 

 

    <!-- jquery -->

 

    <script src="../../JS/Cart/jquery.js"></script>

 

    <!-- lightcase js-->

 

    <script src="../../JS/Cart/lightcase.js"></script>

 

    <!-- aos js file -->

 

    <script src="../../JS/Cart/aos.js"></script>

 

    <!-- nice select js -->

 

    <script src="../../JS/Cart/jquery.nice-select.js"></script>

 

    <!-- main -->

 

    <script src="../../JS/Cart/main.js"></script>

 

 

 

    <!-- -------------------------- -->

 

 

 

 

 

 

 

 

 

    <!-- ---------- DASHBOARD ---------- -->

 

 

 

    <script src="../../JS/Cart/theme.bundle.min.js"></script>

 

 

 

    <!-- ------------------------------- -->

 

 

 

 

 

 

 

    <!-- ---------- UPDATE | TICKET ---------- -->

 

    <script src="../../Includes/Cart/JS/updateTicket.js"></script>

 

    <!-- ------------------------------------- -->

 

 

 

    <!-- ---------- DELETE | TICKET ---------- -->

 

    <script src="../../Includes/Cart/JS/deleteTicket.js"></script>

 

    <!-- ------------------------------------- -->

 

 

 

 

 

 

 

    <!-- jquery y bootstrap -->

 

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

 

 

 

    <!-- datatables con bootstrap -->

 

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

 

    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

 

 

 

    <!-- Para usar los botones -->

 

    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>

 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

 

    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

 

 

 

 

 

    <!-- Para los estilos en Excel     -->

 

    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.min.js"></script>

 

    <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.templates.min.js"></script>

 

 

 

 

 

 

 

 

 

    <script>

        $(document).ready(function() {

 

            var table = $("#mypurchases").DataTable({

 

                dom: 'Bfrtip',

 

                buttons: {

 

                    dom: {

 

                        buttons: {

 

                            classname: 'btn'

 

                        }

 

                    },

 

                    buttons: [{

 

                        extend: "excel",

 

                        excelStyles: {

 

                            "template": [

 

                                "blue_medium",

 

                                "header_green",

 

                                "title_medium"

 

                            ]

 

                        },

 

                    }]

 

                },

 

 

 

            });

 

 

 

            $('#excelBtn').click(function() {

 

                table.button('.buttons-excel').trigger();

 

            });

 

        });

    </script>

 

 

 

    <script>

        $("#mypurchases").delegate("td", "click", function() {

 

            var rowData = $(this).closest("tr").find("td").map(function() {

 

                return $(this).text();

 

            }).get();

 

 

            console.log(rowData);

 

            var id_purchase = rowData[0];

            var id_paypal = rowData[1];

 

 

            window.location.href = "mypurchases_status.php?id_purchase=" + id_purchase + "&id_paypal=" + id_paypal;

 

 

        });

    </script>

 

 

 

</body>

 

 

 

</html>