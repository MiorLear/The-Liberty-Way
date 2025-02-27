<?php
require "../../Includes/Connection/connection.php";
session_start();

// ---------------------------------------------------------------------------------------

if (empty($_SESSION['id_user'])) {

  header("Location: ../../Views/Home/index.php");
}
// elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 2) { //Administrador

//   header("Location: ../Dashboard/index.php");

// }
elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 3) { //Usuario

  header("Location: ../../Views/Home/index.php");
}



// ---------------------------------------------------------------------------------------

$id_usuario = $_SESSION['id_user'];
$sql = pg_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
while ($datos = pg_fetch_assoc($sql)) {

?>
  <!DOCTYPE html>
  <html lang="en" data-bs-theme="light">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!--Bootstrap icons-->
    <link href="../../Assets/Dashboard/fonts/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!--Google web fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=IBM+Plex+Mono:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>


    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Simplebar css-->
    <link rel="stylesheet" href="../../Assets/Dashboard/vendor/css/simplebar.min.css">
    <!--Choices css-->
    <link rel="stylesheet" href="../../Assets/Dashboard/vendor/css/choices.min.css">

    <!-- Excel -->
    <link rel="stylesheet" href="../../CSS/Excel/Excel.css">

    <!--Date range picker-->
    <link rel="stylesheet" href="../../Assets/Dashboard/vendor/css/daterangepicker.css">
    <!--Main style-->
    <link rel="stylesheet" href="../../CSS/Dashboard/style.min.css">
    <!--Include in page head-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,[email protected],400,0,0" />
  </head>

  <body>


    <!--////////////////// PreLoader Start//////////////////////-->
    <div class="loader bg-gradient-primary text-black">
      <div class="content flex-column p-4 pb-0 d-flex justify-content-center align-items-center flex-column-fluid position-relative">
        <div class="w-100 h-100 position-relative d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spinner-grow  me-2">
            <line x1="12" y1="2" x2="12" y2="6" />
            <line x1="12" y1="18" x2="12" y2="22" />
            <line x1="4.93" y1="4.93" x2="7.76" y2="7.76" />
            <line x1="16.24" y1="16.24" x2="19.07" y2="19.07" />
            <line x1="2" y1="12" x2="6" y2="12" />
            <line x1="18" y1="12" x2="22" y2="12" />
            <line x1="4.93" y1="19.07" x2="7.76" y2="16.24" />
            <line x1="16.24" y1="7.76" x2="19.07" y2="4.93" />
          </svg>
          <div>
            <span>
              <h3>Loading...</h3>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!--////////////////// /.PreLoader END//////////////////////-->


    <div class="d-flex flex-column flex-root">
      <!--Page-->
      <div class="page d-flex flex-row flex-column-fluid">


        <!--///////////Page sidebar begin///////////////-->
        <aside class="page-sidebar">
          <div class="h-100 flex-column d-flex justify-content-start">

            <!--Aside-logo-->
            <div class="aside-logo d-flex align-items-center flex-shrink-0 justify-content-start px-5 position-relative">
              <a href="index.php" class="d-block">
                <div class="d-flex align-items-center flex-no-wrap text-truncate">
                  <!--Logo-icon-->

                  <span class="sidebar-text">
                    <!--Sidebar-text-->
                    <span class="sidebar-text text-truncate fs-3 fw-bold">
                      TheLibertyWay

                    </span>
                </div>
              </a>
            </div>
            <!--Sidebar-Menu-->
            <div class="aside-menu px-3 my-auto" data-simplebar>
              <nav class="flex-grow-1 h-100" id="page-navbar">
                <?php
                //------------------------------------------- ADMIN -------------------------------------------
                if ($_SESSION['id_rol'] == 2) {
                ?>
                  <!--:Sidebar nav-->
                  <ul class="nav flex-column collapse-group collapse d-flex">
                    <li class="nav-item sidebar-title text-truncate opacity-50 small">
                      <i class="bi bi-three-dots"></i>
                      <span>Main</span>
                    </li>
                    <li class="nav-item">
                      <a href="index.php" class="nav-link d-flex align-items-center text-truncate">
                        <span class="sidebar-icon">
                          <span class="material-symbols-rounded">
                            home
                          </span>
                        </span>
                        <!--Sidebar nav text-->
                        <span class="sidebar-text">Home</span>
                      </a>
                    </li>
                    <?php

                    $query = "SELECT * FROM permissions WHERE id_permissions='1'";
                    $result = pg_fetch_assoc(pg_query($conexion, $query));
                    if ($result['flights'] == "ON") {
                      echo "<li class='nav-item mt-2 sidebar-title text-truncate small opacity-50'>
                    <i class='bi bi-three-dots'></i>
                    <span>Flights</span>
                  </li>

                  <li class='nav-item'>
                    <a href='dashboard_flight.php' class='nav-link d-flex align-items-center text-truncate'>
                      <span class='sidebar-icon'>
                        <span class='material-symbols-rounded'>
                          airplane_ticket
                        </span>
                      </span>
                      <span class='sidebar-text'>Flights</span>
                    </a>
                  </li>";
                    }


                    ?>

                    <?php
                    if ($result['hotel_rooms'] == "ON") { ?>
                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Hotel</span>
                      </li>

                      <li class="nav-item">
                        <a href="dashboard_hotelroom.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              hotel
                            </span>
                          </span>
                          <span class="sidebar-text">View Hotel Rooms</span>
                        </a>
                      </li>
                    <?php } ?>

                    <?php
                    if ($result['users'] == "ON") { ?>
                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>User</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_usuario.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              person_search
                            </span>
                          </span>
                          <span class="sidebar-text">View Users</span>
                        </a>
                      </li>

                    <?php } ?>

                    <?php
                    if ($result['payments'] == "ON") { ?>
                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Purchases</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_PaymentReceipt.php" class="nav-link d-flex align-items-center text-truncate active">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              Receipt_Long
                            </span>
                          </span>
                          <span class="sidebar-text">View Purchases</span>
                        </a>
                      </li>
                    <?php } ?>

                    <?php
                    if ($result['feedback'] == "ON") { ?>
                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Feedback</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_feedback.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              comment
                            </span>
                          </span>
                          <span class="sidebar-text">Feedback</span>
                        </a>
                      </li>
                    <?php } ?>

                  <?php } ?>




                  <?php
                  //--------------------------------------------- SUPER ADMIN ----------------------------------------
                  if ($_SESSION['id_rol'] == 1) { ?>
                    <!--:Sidebar nav-->
                    <ul class="nav flex-column collapse-group collapse d-flex">
                      <li class="nav-item sidebar-title text-truncate opacity-50 small">
                        <i class="bi bi-three-dots"></i>
                        <span>Main</span>
                      </li>
                      <li class="nav-item">
                        <a href="index.php" class="nav-link d-flex align-items-center text-truncate">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              home
                            </span>
                          </span>
                          <!--Sidebar nav text-->
                          <span class="sidebar-text">Home</span>
                        </a>
                      </li>

                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Flights</span>
                      </li>

                      <li class="nav-item">
                        <a href="dashboard_flight.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              airplane_ticket
                            </span>
                          </span>
                          <span class="sidebar-text">Flights</span>
                        </a>
                      </li>

                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Hotel</span>
                      </li>

                      <li class="nav-item">
                        <a href="dashboard_hotelroom.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              hotel
                            </span>
                          </span>
                          <span class="sidebar-text">View Hotel Rooms</span>
                        </a>
                      </li>

                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>User</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_usuario.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              person_search
                            </span>
                          </span>
                          <span class="sidebar-text">View Users</span>
                        </a>
                      </li>

                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Purchases</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_PaymentReceipt.php" class="nav-link d-flex align-items-center text-truncate active">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              Receipt_Long
                            </span>
                          </span>
                          <span class="sidebar-text">View Purchases</span>
                        </a>
                      </li>
                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Feedback</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_feedback.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              comment
                            </span>
                          </span>
                          <span class="sidebar-text">Feedback</span>
                        </a>
                      </li>


                      <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                        <i class="bi bi-three-dots"></i>
                        <span>Permissions</span>
                      </li>
                      <li class="nav-item">
                        <a href="dashboard_permissions.php" class="nav-link d-flex align-items-center text-truncate ">
                          <span class="sidebar-icon">
                            <span class="material-symbols-rounded">
                              lock
                            </span>
                          </span>
                          <span class="sidebar-text">Permissions</span>
                        </a>
                      </li>
                    <?php
                  }
                    ?>
                    <br>
              </nav>
            </div>
          </div>
        </aside>
        <!--///////////Page Sidebar End///////////////-->

        <!--///Sidebar close button for 991px or below devices///-->
        <div class="sidebar-close d-lg-none">
          <a href="#"></a>
        </div>
        <!--///.Sidebar close end///-->



        <!--///////////Page content wrapper///////////////-->
        <main class="page-content d-flex flex-column flex-row-fluid">

          <!--//page-header//-->
          <header class="navbar mb-3 px-3 px-lg-6 px-3 px-lg-6 align-items-center page-header navbar-expand navbar-light">
            <a href="#" class="navbar-brand d-block d-lg-none">
              <div class="d-flex align-items-center flex-no-wrap text-truncate">
                <!--Sidebar-icon-->
                <span class="sidebar-icon bg-gradient-primary rounded-3 size-50 fw-bolder text-black">
                  TLW
                </span>
              </div>
            </a>
            <ul class="navbar-nav d-flex align-items-center h-100">
              <li class="nav-item d-none d-lg-flex flex-column h-100 me-2 align-items-center justify-content-center" data-tippy-placement="bottom-start" data-tippy-content="Toggle Sidebar">
                <a href="javascript:void(0)" class="sidebar-trigger nav-link size-40 d-flex align-items-center justify-content-center p-0">
                  <span class="material-symbols-rounded">
                    menu_open
                  </span>
                </a>
              </li>
              <li class="nav-item d-flex flex-column me-2 h-100 justify-content-center dropdown" data-tippy-placement="bottom-start" data-tippy-content="Search in the App">
                <a href="javascript:void;" data-bs-target="#modal_search" data-bs-toggle="modal" class="d-flex align-items-center justify-content-center nav-link size-40 p-0">
                  <span class="material-symbols-rounded">
                    search
                  </span>
                </a>
              </li>

              <!-- <li class="nav-item d-none d-md-flex flex-md-column me-2 h-100 justify-content-md-center dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-link size-40 d-flex align-items-center justify-content-center p-0">
                  <span class="material-symbols-rounded">
                    apps
                  </span>
                </a>
                <div class="dropdown-menu overflow-hidden dropdown-menu-sm p-0 mt-0">
                  
                  <div class="list-group list-group-flush">

                    <div class="list-group-item d-flex align-items-center justify-content-between px-3">
                      <h6 class="dropdown-header ps-0">Apps Shortcuts</h6>
                      <a href="#!" class="btn btn-sm btn-primary">View All Apps <span class="ms-1 fs-5 align-middle material-symbols-rounded">
                          arrow_forward
                        </span></a>
                    </div>

                    
                    <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                      
                    
                      <img src="../../Assets/Dashboard/media/brand-logos/atlassian.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Atlassian</h6>
                        <small>Security and control across Cloud</small>
                      </div>
                    </a>

                    
                    <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                      
                    
                      <img src="../../Assets/Dashboard/media/brand-logos/google-webdev.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Google webdev</h6>
                        <small>Work involved in developing a website</small>
                      </div>
                    </a>

                    
                    <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                      
                    
                      <img src="../../Assets/Dashboard/media/brand-logos/slack.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                      <div class="flex-grow-1">
                        <h6 class="mb-0">Slack</h6>
                        <small>Email collaboration software</small>
                      </div>
                    </a>
                  </div>
                </div>
              </li> -->

              <!--:Dark Mode:-->
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="bs-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                  <span class="theme-icon-active d-flex align-items-center">
                    <span class="material-symbols-rounded align-middle"></span>
                  </span>
                </a>
                <!--:Dark Mode Options:-->
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bs-theme" style="--bs-dropdown-min-width: 9rem;">
                  <li class="mb-1">
                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
                      <span class="theme-icon d-flex align-items-center">
                        <span class="material-symbols-rounded align-middle me-2">
                          lightbulb
                        </span>
                      </span>
                      Light
                    </button>
                  </li>
                  <li class="mb-1">
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                      <span class="theme-icon d-flex align-items-center">
                        <span class="material-symbols-rounded align-middle me-2">
                          dark_mode
                        </span>
                      </span>
                      Dark
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
                      <span class="theme-icon d-flex align-items-center">
                        <span class="material-symbols-rounded align-middle me-2">
                          invert_colors
                        </span>
                      </span>
                      Auto
                    </button>
                  </li>
                </ul>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto d-flex align-items-center h-100">

              <!-- <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100 mx-1 mx-md-3">
                <a href="#" class="nav-link p-0 position-relative size-40 d-flex align-items-center justify-content-center" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <span class="material-symbols-rounded">
                    notifications
                  </span>
                  <span class="size-5 rounded-circle d-flex align-items-center justify-content-center position-absolute end-0 top-0 mt-2 me-1 bg-danger small"></span>
                </a>


                <div class="dropdown-menu mt-0 p-0 overflow-hidden dropdown-menu-end dropdown-menu-sm">
                  
                  <div class="py-3 px-4 bg-primary text-white d-flex align-items-center">
                    <h5 class="me-3 mb-0 flex-grow-1">Notifications</h5>
                    <div class="flex-shrink-0">
                      <a href="#!" class="btn btn-white btn-sm">View All</a>
                    </div>
                  </div>
                  <div style="height:290px" data-simplebar>
                    <div class="list-group list-group-flush mb-0">

                      
                      <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                        <div class="d-block me-3">
                          <div class="avatar avatar-status status-online">
                            <img src="../../Assets/Dashboard/media/avatars/01.jpg" class="img-fluid rounded-circle w-auto" alt="">
                          </div>
                        </div>

                        <div class="flex-grow-1 flex-wrap pe-3">
                          <span class="mb-0 d-block"><strong>Adam Danely</strong> assigned
                            a task to
                            you <strong>#PI-392</strong></span>
                          <small class="text-body-secondary">Just now</small>
                        </div>
                      </a>

                      
                      <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                        <div class="d-block me-3">
                          <div class="avatar avatar-status status-offline">
                            <img src="../../Assets/Dashboard/media/avatars/06.jpg" class="img-fluid rounded-circle w-auto" alt="">
                          </div>
                        </div>

                        <div class="flex-grow-1 flex-wrap pe-3">
                          <span class="mb-0 d-block"><strong>Vivianna Kiser
                            </strong> just posted <span>"Lorem ipsum is placeholder text
                              used in the graphic, print,
                              and industries.
                              "</span></span>
                          <small class="text-body-secondary">2h Ago</small>
                        </div>
                      </a>

                      
                      <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                        <span class="d-block me-3">
                          <span class="d-flex align-items-center justify-content-center lh-1 size-50 bg-success-subtle text-success rounded-circle">
                            <span class="material-symbols-rounded">
                              construction
                            </span>
                          </span>
                        </span>

                        <div class="flex-grow-1 flex-wrap pe-3">
                          <span class="mb-0 d-block"><strong>Updated</strong> Your account
                            password updated
                            succuessfully</span>
                          <small class="text-body-secondary">2h Ago</small>
                        </div>
                      </a>

                     
                      <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                        <span class="d-block me-3">
                          <span class="d-flex align-items-center justify-content-center lh-1 size-50 bg-danger-subtle text-danger rounded-circle">
                            <span class="material-symbols-rounded">
                              percent
                            </span>
                          </span>
                        </span>

                        <div class="flex-grow-1 flex-wrap pe-3">
                          <span class="mb-0 d-block"><strong>Pro discount</strong> Upgrade
                            to pro plan with 30%
                            discount, Apply coupon <span class="badge bg-primary">PRO30</span></span>
                          <small class="text-body-secondary">2h Ago</small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li> -->

              <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100">
                <a href="#" class="nav-link dropdown-toggle height-40 px-2 d-flex align-items-center justify-content-center" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="d-flex align-items-center">

                    <!--Avatar with status-->
                    <div class="action">


                      <?php

                      if (strlen($datos['imagen']) < 30) { ?>

                        <div class="profile">

                          <img src="../../Assets/Profile/image/<?php echo $datos['imagen'] ?>" alt="">

                        </div>

                      <?php  } else { ?>

                        <div class="profile">

                          <img src="<?php echo $datos['imagen'] ?>" alt="">

                        </div>

                      <?php } ?>



                    </div>

                  </div>
                </a>

                <div class="dropdown-menu mt-0 p-0 dropdown-menu-end overflow-hidden">
                  <!--User meta-->
                  <div class="position-relative overflow-hidden px-3 pt-4 pb-7 bg-gradient-primary text-white">

                    <!--Divider-->
                    <svg style="transform: rotate(-180deg)" preserveAspectRatio="none" class="position-absolute start-0 bottom-0 w-100 dropdown-wave" fill="currentColor" height="24" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
                      <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
                      <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
                    </svg>



                    <div class="action">


                      <?php

                      if (strlen($datos['imagen']) < 30) { ?>

                        <div class="profileview">

                          <img src="../../Assets/Profile/image/<?php echo $datos['imagen'] ?>" class="rounded-circle">

                        </div>

                      <?php  } else { ?>

                        <div class="profileview">

                          <img src="<?php echo $datos['imagen'] ?>" class="rounded-circle">

                        </div>

                      <?php } ?>



                    </div>
                    <div class="position-relative">
                      <h5 class="mb-1" style="text-align: center; color: black;"><u><?php echo $datos['nombre'] . " " . $datos['apellido']; ?></u></h5>
                    </div>
                  </div>
                  <div class="py-2 px-1">
                    <a href="../../Views/Profile/profile.php" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-primary text-white rounded-2">
                        account_circle
                      </span>
                      <span class="flex-grow-1">Profile</span>
                    </a>
                    <!-- <a href="#" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-danger text-white rounded-2">
                        settings
                      </span>
                      <span class="flex-grow-1">Settings</span>
                    </a>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-info text-white rounded-2">
                        task
                      </span>
                      <span class="flex-grow-1">Tasks</span>
                    </a> -->
                    <hr class="my-2">
                    <a id="logoutButton" href="" class="dropdown-item d-flex align-items-center">
                      <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-warning text-white rounded-2">
                        logout
                      </span>
                      <span class="flex-grow-1">Log Out</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown ms-3 d-flex d-lg-none align-items-center justify-content-center flex-column h-100">
                <a href="javascript:void(0)" class="nav-link sidebar-trigger-lg-down size-40 p-0 d-flex align-items-center justify-content-center">
                  <span class="material-symbols-rounded align-middle">menu</span>
                </a>
              </li>
            </ul>
          </header>
          <!--Main Header End-->



          <!--Main Search Modal-->
          <!-- Modal -->
          <div class="modal" id="modal_search" tabindex="-1" aria-labelledby="modal_searchLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <!--Search inner-->
                  <div class="">

                    <!--Search form-->
                    <form>
                      <div class="position-relative mb-4">
                        <div class="text-body-secondary">
                          <span class="material-symbols-rounded position-absolute start-0 top-50 translate-middle-y ms-3">
                            search
                          </span>
                        </div>
                        <input type="text" autofocus class="form-control form-control-lg border-2 border-primary border ps-8" placeholder="Search App...">
                      </div>
                    </form>

                    <!--Recently searched-->
                    <div class="d-flex mb-2 align-items-center">
                      <h6 class="d-block mb-0 me-3 flex-grow-1">
                        <span class="material-symbols-rounded align-middle me-1 fs-5 opacity-50">
                          history
                        </span>
                        Recent
                      </h6>
                      <a href="#!" class="small flex-shrink-0 d-block">Clear All</a>
                    </div>
                    <div class="list-group">
                      <!--Recently searched item-->
                      <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                        <div class="flex-grow-1 overflow-hidden">
                          <span class="text-truncate">Campaign reports</span>
                        </div>
                      </a>
                      <!--Recently searched item-->
                      <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                        <div class="flex-grow-1 overflow-hidden">
                          <span class="text-truncate">Funnel reports</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="pt-0 border-top-0 modal-footer">
                  <span class="small">Press ESC or
                    <span class="badge bg-secondary" role="button" data-bs-dismiss="modal">Click me</span> to close
                  </span>
                </div>
              </div>
            </div>
          </div>


          <!--//Page Toolbar//-->
          <div class="toolbar px-3 px-lg-6 pt-3 pb-3">
            <div class="position-relative container-fluid px-0">
              <div class="row align-items-center position-relative">
                <div class="col-sm-7 mb-3 mb-sm-0">
                  <h3 class="mb-2"><span>Hello </span><?php echo $datos['nombre'] . " " . $datos['apellido']; ?>! 👋</h3>
                  <p class="mb-0">Here is what's happening with your store</p>
                  </br>
                  <a data-tippy-content="PDF Report" href="../../Includes/Pdf/TLW - PurchasesReport.php" type="button" class="btn btn-outline-danger"><span class="mb-1 material-symbols-rounded" style="font-size:22px"><span>picture_as_pdf</span></span></a>
                  &nbsp;
                  <button id="excelBtn" data-tippy-content="EXCEL Report" href="" type="button" class="btn btn-outline-success"><span class="mb-1 material-symbols-rounded" style="font-size:22px"><span>backup_table</span></span></button>
                </div>
                <div class="col-sm-5 text-md-end">
                  <div class="d-flex justify-content-sm-end align-items-center">
                    <div class="d-flex align-items-center">
                      <div role="button" id="reportrange" class="btn btn-sm btn-outline-secondary" data-tippy-placement="top" data-tippy-content="Select dashboard data range">
                        <i class="material-symbols-rounded align-middle fs-5">
                          calendar_month
                        </i>
                        <span class="fs-6 d-inline-block"></span>
                      </div>
                    </div>
                    <a href="dashboard_PaymentReceipt.php" data-tippy-placement="top" data-tippy-content="Reload Dashboard" class="flex-shrink-0 ms-2 p-0 rounded-circle size-35 d-flex align-items-center justify-content-center btn btn-coloruse">
                      <span class="material-symbols-rounded lh-1 fs-4">
                        refresh
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--//Page Toolbar End//-->

        <?php
      }
        ?>

        <!--//Page content//-->

        <div class="content px-3 px-lg-6 pt-3 pb-0 d-flex flex-column-fluid position-relative">
          <div class="container-fluid px-0">

            <!--row-->
            <div class="row">
              <div class="col-12 mb-3 mb-lg-5">
                <div class="overflow-hidden card table-nowrap table-card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"></h5>
                  </div>



                  <div class="table-responsive">
                    <table id="purchasesrecipment" class="table mb-0">
                      <thead class="small text-uppercase bg-body text-body-secondary">
                        <tr>
                          <th>ID</th>
                          <th>Client First Name</th>
                          <th>Client Last Name</th>
                          <th>Client Email</th>
                          <th>Client Country</th>
                          <th>Currency</th>
                          <th>Transaction Status</th>
                          <th>Amount</th>
                          <th>Purchase Date</th>
                          <th>Status</th>
                          <th>
                            <center>Action</center>
                          </th>



                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = "SELECT * FROM payment_receipt";
                        $result = pg_query($conexion, $sql);
                        if (pg_num_rows($result)) {
                          while ($row = pg_fetch_assoc($result)) {
                        ?>
                            <tr class="align-middle">
                              <td><?php echo $row['id'] ?></td>
                              <td><?php echo $row['cliente_firstname'] ?></td>
                              <td><?php echo $row['cliente_lastname'] ?></td>
                              <td><?php echo $row['cliente_emailaddress']  ?></td>
                              <td><?php echo $row['cliente_countrycode']  ?></td>
                              <td><?php echo $row['transaccion_currencycode'] ?></td>
                              <td><?php echo $row['transaccion_status'] ?></td>
                              <td> <span class="d-inline-block align-middle"><?php echo  '$ ' . $row['transaccion_amount']  ?></span></td>
                              <td> <span class="d-inline-block align-middle"><?php echo $row['date'] ?></span></td>
                              <td><?php echo $row['status'] ?></td>
                              <td class="text-end">

                                <center>
                                  <div class="btn-group btn-group-sm">
                                    <hr>
                                    <div class="d-flex flex-wrap gap-2">
                                      <button data-bs-target="#confirmpayment<?php echo $row['id'] ?>" data-bs-toggle="modal" data-tippy-content="PURCHASE STATUS" class="btn btn-outline-warning">
                                        <span class="material-symbols-rounded align-middle me-1">
                                          edit_note
                                        </span>
                                      </button>
                                      <?php
                                      include('../../Includes/Dashboard/payments/modalpayments/modal-purchaseStatus.php');
                                      ?>
                                    </div>
                                </center>
                              </td>
                            </tr>


                        <?php
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!--//Page content End//-->

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

              <!--//Page content End//-->

              <!--//Page-footer//-->
              <footer class="pb-3 pb-lg-5 px-3 px-lg-6">
                <div class="container-fluid px-0">
                  <span class="d-block lh-sm small text-body-secondary text-end">&copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>. Copyright
                  </span>
                </div>
              </footer>
              <!--/.Page Footer End-->

        </main>
        <!--///////////Page content wrapper End///////////////-->
      </div>
    </div>


    <?php
    if ($_SESSION['id_rol'] == 1) { ?>

      <!--:Toast:-->
      <div class="toast fade show position-fixed end-0 me-3 me-lg-6 mb-3 mb-lg-6 bottom-0 shadow-lg z-fixed border-0 toast-bg-body toast-text-body" id="introToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
        <div class="toast-header toast-bg-header toast-text-header border-opacity-25 border-bottom border-black align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <h4 class="mb-0 me-2"><img src="../../Assets/Logo/fav.svg" alt="" width="25" height="25"></h4>
            <strong class="me-2">ㅤㅤㅤㅤSUPER ADMINISTRATOR</strong>
          </div>
          <button type="button" class="ms-2 mb-1 btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close">
          </button>
        </div>
        <div class="toast-body">
          <strong><u>Welcome to TLW Admin</u></strong>
          <br>
          Elevate Global Travel Management with TLW Admin's Powerful Tools!
        </div>
      </div>

    <?php } elseif ($_SESSION['id_rol'] == 2) { ?>

      <!--:Toast:-->
      <div class="toast fade show position-fixed end-0 me-3 me-lg-6 mb-3 mb-lg-6 bottom-0 shadow-lg z-fixed border-0 toast-bg-body toast-text-body" id="introToast" role="alert" data-bs-autohide="false" aria-live="assertive" aria-atomic="true">
        <div class="toast-header toast-bg-header toast-text-header border-opacity-25 border-bottom border-black align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <h4 class="mb-0 me-2"><img src="../../Assets/Logo/fav.svg" alt="" width="25" height="25"></h4>
            <strong class="me-2">ㅤㅤㅤㅤㅤADMINISTRATOR</strong>
          </div>
          <button type="button" class="ms-2 mb-1 btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close">
          </button>
        </div>
        <div class="toast-body">
          <strong><u>Welcome to TLW Admin</u></strong>
          <br>
          Elevate Global Travel Management with TLW Admin's Powerful Tools!
        </div>
      </div>

    <?php } ?>


    <!--////////////Theme Core scripts Start/////////////////-->
    <script src="../../JS/Dashboard/theme.bundle.min.js"></script>

    <!--////////////Theme Core scripts End/////////////////-->


    <!--Dashboard duration calendar-->
    <script src="../../Assets/Dashboard/vendor/moment.min.js"></script>
    <script src="../../Assets/Dashboard/vendor/daterangepicker.js"></script>
    <script>
      $(function() {

        var start = moment().subtract(30, 'days');
        var end = moment();

        function cb(start, end) {
          $('#reportrange span').html(start.format('D MMM') + ' - ' + end.format('D MMM'));
        }

        $('#reportrange').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          }
        }, cb);

        cb(start, end);

      });
    </script>

    <!--Dashboard charts begin-->
    <script src="../../Assets/Dashboard/vendor/apexcharts.min.js"></script>
    <script>
      //Chart Sales overview
      var optionsSalesOverview = {
        colors: ["var(--bs-primary)", "var(--bs-gray-400)"],
        series: [{
            name: 'Direct',
            data: [144, 155, 187, 156, 261, 247, 163,
              144, 155, 257, 156, 261, 224, 163,
              144, 155, 257, 156, 261, 198, 163,
              144, 155, 257, 156, 261, 274, 163, 257, 156
            ],
          },
          {
            name: 'Ads',
            data: [76, 85, 101, 98, 87, 124, 91,
              76, 85, 101, 98, 54, 105, 97,
              76, 85, 101, 124, 87, 94, 91,
              76, 85, 101, 78, 104, 135, 104, 98, 87
            ],
          },
        ],

        chart: {
          type: 'area',
          height: 350,
          fontFamily: 'Inherit',
          toolbar: {
            show: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 3,
          curve: 'smooth',
        },
        grid: {
          strokeDashArray: 2,
          padding: {
            top: 0,
            bottom: 0,
            right: 20
          },
          xaxis: {
            lines: {
              show: true,
            },
          },
          yaxis: {
            lines: {
              show: false,
            },
          },
        },
        labels: ["Jan 1", "Jan 2", "Jan 3", "Jan 4", "Jan 5", "Jan 6", "Jan 7",
          "Jan 8", "Jan 9", "Jan 10", "Jan 11", "Jan 12", "Jan 13", "Jan 14",
          "Jan 15", "Jan 16", "Jan 17", "Jan 18", "Jan 19", "Jan 20", "Jan 21",
          "Jan 22", "Jan 23", "Jan 24", "Jan 25", "Jan 26", "Jan 27", "Jan 28", "Jan 29", "Jan 30",
        ],

        yaxis: {
          labels: {
            show: true
          },
        },
        xaxis: {

          tickAmount: 6,
          labels: {
            show: true,
            rotate: 0
          },
          tooltip: {
            enabled: false
          },
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
        },
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            opacityFrom: .05,
            opacityTo: 0,
            stops: [0, 100]
          }
        },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function(val) {
              return val + ' <span class="fw-normal text-body-secondary">Products sold</span>';
            },
          },
        },
        markers: {
          strokeWidth: 5,
          strokeOpacity: 1,
          strokeColors: ["var(--bs-body-bg)", "var(--bs-body-bg)", "var(--bs-body-bg)"],
        },
      };
      var chartOverview = new ApexCharts(
        document.querySelector('#chart_overview'),
        optionsSalesOverview
      );
      chartOverview.render();

      //top countries
      var countryColors = ["var(--bs-primary)", "var(--bs-warning)", "var(--bs-info)", "var(--bs-success)", "var(--bs-danger)", ];
      var optionsCountries = {

        series: [{
          name: "Visitors",
          data: [
            87, 82, 68, 49, 41
          ]
        }],
        chart: {
          type: 'bar',
          height: 300,
          fontFamily: 'inherit',
          toolbar: {
            show: false
          }
        },
        legend: {
          show: false
        },
        colors: countryColors,
        grid: {
          strokeDashArray: 4,
          position: "back",
          padding: {
            right: 30,
            left: 10,
            bottom: -10
          },
          xaxis: {
            lines: {
              show: true,
            },
          },
          yaxis: {
            lines: {
              show: false,
            },
          },
        },
        plotOptions: {
          bar: {
            columnWidth: '30%',
            horizontal: false,
            distributed: true,
            borderRadius: 6,
            dataLabels: {
              position: 'top',
            },
          }
        },
        labels: {
          show: false
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: false
        },
        xaxis: {
          categories: ['USA', 'France', 'UK', 'Japan', 'Canada'],
          axisTicks: {
            show: true,
          },
          axisBorder: {
            show: false,
          },
        },
        yaxis: {
          labels: {
            show: true
          },
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return val + 'k <span class="fw-normal text-body-secondary"></span>';
            },
          },
        },
      };

      var chartCountries = new ApexCharts(document.querySelector("#chart_top_countries"), optionsCountries);
      chartCountries.render();
    </script>

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
        var table = $("#purchasesrecipment").DataTable({
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