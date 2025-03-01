<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assan-Admin</title>

        <!--Bootstrap icons-->
        <link href="../../Assets/Dashboard/fonts/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <!--Google web fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100..900&family=IBM+Plex+Mono:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!--Simplebar css-->
    <link rel="stylesheet" href="../../Assets/Dashboard/vendor/css/simplebar.min.css">

    <!--Choices css-->
    <link rel="stylesheet" href="../../Assets/Dashboard/vendor/css/choices.min.css">

    <!--Main style-->
    <link rel="stylesheet" href="../../CSS/Dashboard/style.min.css">
  </head>

  <body class="layout-horizontal">

      <!--////////////////// PreLoader Start//////////////////////-->
      <div class="loader bg-gradient-primary text-white">
        <!--Placeholder animated layout for preloader-->
        <div class="d-flex flex-column flex-root">
          <div class="page d-flex flex-row flex-column-fluid">
            <div class="page-content ps-0 ms-0 d-flex flex-column flex-row-fluid">
              <div
                class="content flex-column p-4 pb-0 d-flex justify-content-center align-items-center flex-column-fluid position-relative">
                <div class="w-100 h-100 position-relative d-flex align-items-center justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader anim-spinner me-2"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>
                <div>
                  <span>Loading...</span>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--////////////////// /.PreLoader END//////////////////////-->


    <!--App Start-->
    <div class="d-flex flex-column flex-root">
      <!--Page-->


      <!--Header horizontal start-->
      <header class="navbar py-lg-0 navbar-expand-lg navbar-light navbar-horizontal fixed-top start-0 top-0 w-100 shadow-sm">
          <div class="container">
            <a class="navbar-brand fw-bolder text-reset fs-3" href="index.php">
              <!--Logo-icon-->
              <span class="sidebar-icon size-40 d-flex align-items-center justify-content-center fs-4 lh-1 text-white rounded-3 bg-gradient-primary fw-bolder"> A </span>
            </a>
              <div class="d-flex order-lg-last">
                  <div class="order-lg-last ms-auto">
                      <ul class="navbar-nav navbar-icon flex-row ms-auto d-flex align-items-center">
                        <!--:Dark Mode:-->
          <li class="nav-item dropdown h-100 me-2">
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
                        <li class="nav-item me-2 py-lg-3 d-flex align-items-center">
                          <a href="#!" class="btn btn-primary rounded-pill btn-sm">
                            <span class="material-symbols-rounded align-middle me-1 fs-5">
                              add
                              </span>Create
                          </a>
                        </li>
                          <li class="nav-item dropdown py-lg-3 me-3">
                            <a href="#" class="nav-link p-0 position-relative size-35 d-flex align-items-center justify-content-center rounded-circle" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                              <span class="material-symbols-rounded align-middle">
                                notifications
                                </span>
                              <span class="badge p-0 size-5 me-2 mt-1 rounded-circle d-flex align-items-center justify-content-center position-absolute end-0 top-0 bg-danger small"></span>
                            </a>
                            <div class="dropdown-menu mt-0 p-0 overflow-hidden dropdown-menu-end dropdown-menu-sm">
                              <div class="d-flex p-3 justify-content-between align-items-center border-bottom">
                                <h5 class="me-3 mb-0">Notifications</h5>
                                <div class="flex-shrink-0">
                                  <a href="#!" class="btn btn-primary btn-sm">View All</a>
                                </div>
                              </div>
                        
                              <div style="height:290px" data-simplebar>
                                <div class="list-group list-group-flush mb-0">
                                  <!--//Notification item start//-->
                                   <a href="#" class="list-group-item list-group-item-action px-4 d-flex align-items-center">
                                      <div class="d-block me-3">
                                        <div class="avatar avatar-status status-online">
                                          <img src="assets/media/avatars/01.jpg" class="img-fluid rounded-circle w-auto" alt="">
                                        </div>
                                      </div>
                
                                      <div class="flex-grow-1 flex-wrap pe-3">
                                        <span class="mb-0 d-block"><strong>Adam Danely</strong> assigned
                                          a task to
                                          you <strong>#PI-392</strong></span>
                                        <small class="text-body-secondary">Just now</small>
                                      </div>
                                    </a>
                                  <!--//Notification item start//-->
                                  <a href="#" class="list-group-item list-group-item-action px-4 d-flex align-items-center">
                                      <div class="d-block me-3">
                                        <div class="avatar avatar-status status-offline">
                                          <img src="assets/media/avatars/06.jpg" class="img-fluid rounded-circle w-auto" alt="">
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
                                    <!--//Notification item start//-->
                                   <a href="#" class="list-group-item list-group-item-action px-4 d-flex align-items-center">
                                      <span class="d-block me-3">
                                        <span
                                          class="d-flex align-items-center justify-content-center lh-1 size-50 bg-success-subtle text-success rounded-circle">
                                          <span class="material-symbols-rounded align-middle">
                                            settings
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
                                  <!--//Notification item start//-->
                                  <a href="#" class="list-group-item list-group-item-action px-4 d-flex align-items-center">
                                      <span class="d-block me-3">
                                        <span
                                          class="d-flex align-items-center justify-content-center lh-1 size-50 bg-danger-subtle text-danger rounded-circle">
                                          <span class="material-symbols-rounded align-middle">
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
                          </li>
                          <li class="nav-item dropdown py-lg-3">
                            <a href="#" class="nav-link dropdown-toggle rounded-pill p-1 lh-1 pe-1 d-flex align-items-center justify-content-center" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                              <div class="d-flex align-items-center">
    
                                <!--Avatar with status-->
                                <div class="avatar-status status-online avatar sm">
                                  <img src="assets/media/avatars/01.jpg" class="rounded-circle img-fluid" alt="">
                                </div>
                              </div>
                            </a>
    
                            <div class="dropdown-menu mt-0 pt-0 dropdown-menu-end overflow-hidden">
                              <!--User meta-->
                              <div class="position-relative overflow-hidden p-3 mb-3 border-bottom">
                                <h5 class="mb-1">Noah Pierre</h5>
                                <p class="text-body-secondary small mb-0 lh-1">Full stack developer</p>
                              </div>
                              <a href="#!.php" class="dropdown-item">  
                                <span class="material-symbols-rounded align-middle opacity-75 fs-4 me-2">
                                account_circle
                                </span>
                                Profile</a>
                              <a href="#!.php" class="dropdown-item">
                                <span class="material-symbols-rounded align-middle opacity-75 fs-4 me-2">
                                  settings
                                  </span>
                                Settings</a>
                              <a href="#!.php" class="dropdown-item">
                                <span class="material-symbols-rounded align-middle opacity-75 fs-4 me-2">
                                  task
                                  </span>
                                Tasks</a>
                              <hr class="mt-3 mb-1">
                              <a href="#!.php" class="dropdown-item d-flex align-items-center">
                                <span class="material-symbols-rounded align-middle opacity-75 fs-4 me-2">
                                  logout
                                  </span>
                                Sign out
                              </a>
                            </div>
                          </li>
                        </ul>
                  </div>
            
                  <button class="navbar-toggler border-0 shadow-none ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>

              <!--Navbar collapse items-->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item py-3 dropdown">
                        <form class="position-relative">
                            <input type="text" placeholder="Search..." class="form-control" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-menu dropdown-menu-sm mt-3 overflow-hidden p-0">
                              <div class="dropdown-header">Top Searches
                                <span class="material-symbols-rounded align-middle ms-2">
                                  trending_up
                                </span>  
                              </div>
                            <div class="list-group list-group-flush">
                              <a href="#!" class="list-group-item list-group-item-action px-4 d-flex">
                                <img src="assets/media/brand-logos/github.svg" class="height-20 rounded-3 p-1 bg-dark w-auto me-3" alt="">
                                <span>Github repository</span>
                              </a>
                              <a href="#!" class="list-group-item list-group-item-action px-4 d-flex">
                                <img src="assets/media/brand-logos/jirasoftware.svg" class="height-20 w-auto me-3" alt="">
                                <span>Jira pending issues</span>
                              </a>
                              <a href="#!" class="list-group-item list-group-item-action px-4 d-flex">
                                <img src="assets/media/brand-logos/prosperops.svg" class="height-20 w-auto me-3" alt="">
                                <span>Prosperops development</span>
                              </a>
                            </div>
                            </div>
                        </form>
                    </li>
              
                  </ul>
                <ul class="navbar-nav me-lg-5">
                    <li class="nav-item dropdown py-lg-3 me-lg-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dashboard
                        </a>
                        <ul class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="index.php">E-commerce</a></li>
                          <li><a class="dropdown-item" href="index-analytics.php">Analytics</a></li>
                          <li><a class="dropdown-item" href="index-project-management.php">Management</a></li>
                        </ul>
                      </li>
                  <li class="nav-item py-lg-3 me-lg-2">
                    <a class="nav-link" href="#">Inbox</a>
                  </li>
                  <li class="nav-item py-lg-3 me-lg-2">
                      <a class="nav-link" href="#">Messages</a>
                    </li>
                    <li class="nav-item py-lg-3">
                      <a class="nav-link" href="#">Orders</a>
                    </li>
                </ul>
              </div>
          </div>
      </header>
      <div class="page d-flex flex-row flex-column-fluid">

        <!--///////////Page content wrapper///////////////-->
        <main class="page-content pt-7 ps-0 ms-0 d-flex flex-column flex-row-fluid">

           <!--//Page Toolbar//-->
           <div class="toolbar pt-10 pb-5 px-3">
            <div class="position-relative container">
              <div class="row align-items-center position-relative">
                <div class="col-md-7 mb-2 mb-md-0">
                  <h3 class="mb-0">Welcome back, Noah!</h3>
                </div>
                <div class="col-md-5">
                  <nav aria-label="breadcrumb" class="d-md-flex justify-content-md-end">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="#!" class="">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                      <li class="breadcrumb-item active">Analytics</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!--//Page Toolbar End//-->

          <!--//Page content//-->
          <div class="content d-flex flex-column-fluid position-relative">
            <div class="container">
              <div class="row">
                <div class="col-xl-9 mb-3 mb-lg-5">
                  <div class="card overflow-hidden">
                    <div class="card-header d-flex align-items-center">
                      <div class="pe-3 flex-grow-1">
                        <div class="d-flex align-items-center">
                          <h3 class="mb-1">2395</h3>
                          <div class="flex-grow-1 ms-3">
                            <!--:Badge:-->
                            <div class="d-inline-flex align-items-center lh-1 text-success">
                              <span class="material-symbols-rounded align-middle">
                                arrow_drop_up
                              </span>29%
                            </div>
                            </div>
                        </div>
                        <p class="mb-0">Sales by Source</p>
                      </div>
                      <div class="flex-shrink-0">
                        <a href="#!" class="btn btn-outline-secondary btn-sm">View Full Report</a>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div id="chart_overview"></div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3">
                  <div class="row">
                    <div class="col-xl-12 col-md-6 mb-3 mb-lg-5">
                      <div class="card overflow-hidden">
                        <div class="card-header">
                          <h5 class="mb-0 card-title">Sales by Category</h5>
                        </div>

                        <!--categories list-->
                        <div class="list-group list-group-flush">
                          
                          <!--:Category:-->
                          <div class="list-group-item p-3 d-flex align-items-center justify-content-between">
                            <div class="size-35 me-3 rounded bg-danger-subtle text-danger d-flex align-items-center justify-content-center flex-shrink-0">
                              <span class="material-symbols-rounded">
                                styler
                                </span>
                            </div>
                            <div class="flex-grow-1 d-flex align-items-center">
                              <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mb-0">13425</h5>
                              <small class="text-body-secondary text-truncate">Fashion</small>
                              </div>
                              <div class="flex-shrink-0 ps-2 text-success d-flex align-items-center">
                                <span class="material-symbols-rounded lh-1 align-middle">
                                  arrow_drop_up
                                </span>
                                <small>12%</small>
                              </div>
                            </div>
                          </div>
                          <!--:Category:-->
                          <div class="list-group-item p-3 d-flex align-items-center justify-content-between">
                            <div class="size-35 me-3 rounded bg-primary-subtle text-primary d-flex align-items-center justify-content-center flex-shrink-0">
                              <span class="material-symbols-rounded lh-1 align-middle">
smartphone
                              </span>
                            </div>
                            <div class="flex-grow-1 d-flex align-items-center">
                              <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mb-0">6387</h5>
                              <small class="text-body-secondary text-truncate">Gadgets</small>
                              </div>
                              <div class="flex-shrink-0 ps-2 text-success d-flex align-items-center">
                                <span class="material-symbols-rounded lh-1 align-middle">
                                  arrow_drop_up
                                </span>
                                <small>3%</small>
                              </div>
                            </div>
                          </div>
                          <!--:Category:-->
                          <div class="list-group-item p-3 d-flex align-items-center justify-content-between">
                            <div class="size-35 me-3 rounded bg-success-subtle text-success d-flex align-items-center justify-content-center flex-shrink-0">
                              <span class="material-symbols-rounded lh-1 align-middle">
                                blender
                              </span>
                            </div>
                            <div class="flex-grow-1 d-flex align-items-center">
                              <div class="flex-grow-1 overflow-hidden">
                                <h5 class="mb-0">4387</h5>
                              <small class="text-body-secondary text-truncate">Electronics</small>
                              </div>
                              <div class="flex-shrink-0 ps-2 text-success d-flex align-items-center">
                                <span class="material-symbols-rounded lh-1 align-middle">
                                  arrow_drop_up
                                </span>
                                <small>4%</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12 col-md-6 mb-3 mb-lg-5">
                      <div class="card overflow-hidden">
                        <div class="card-body">
                          <div class="mb-3 d-flex align-items-center overflow-hidden">
                            <div>
                              <p class="mb-0 text-truncate">Customers Rate</p>
                            </div>
                            <div class="ps-3 ms-auto">
                              <span class="material-symbols-rounded text-success align-middle">
                                arrow_drop_up
                              </span>18%
                            </div>
                          </div>
                          <div class="flex-shrink-0 ms-auto">
                            <div class="progress height-10 mb-3">
                              <div class="progress-bar" role="progressbar" aria-label="Segment one" style="width: 57%"
                                aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                              <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two"
                                style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center">
                              <div class="flex-grow-1">
                                <h5 class="mb-0">57%</h5>
                                <span class="small text-body-secondary">
                                  First time buyers
                                </span>
                              </div>
                              <div class="text-end">
                                <h5 class="mb-0">43%</h5>
                                <span class="small text-body-secondary">
                                  Returning
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                  <!--::begin card-->
                  <div class="card card-body">
                    <!--Title-->
                    <h6 class="mb-3">New Orders
                      <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75"
                        data-tippy-content="New orders received" data-tippy-placement="top">info</span>
                    </h6>
                    <div class="d-flex lh-1 align-items-center">
                      <h4 class="mb-0">245</h4>

                      <!--vertical line-->
                      <div class="vr lh-1 align-self-center opacity-25 me-1 ms-3 height-10" style="min-height: auto;"></div>
                      <!--::/vertical line-->

                      <!--:Badge:-->
                      <div class="d-inline-flex align-items-center text-success">
                        <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span>
                      <small>11%</small>
                      </div>
                    </div>
                  </div>
                  <!--::/end card-->
                </div>
                <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                  <!--::begin card-->
                  <div class="card card-body">
                    <!--Title-->
                    <h6 class="mb-3">Earnings
                      <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75"
                        data-tippy-content="Earnings by sales" data-tippy-placement="top">info</span>
                    </h6>
                    <div class="d-flex lh-1 align-items-center">
                      <h4 class="mb-0">$756,689</h4>

                      <!--vertical line-->
                      <div class="vr lh-1 align-self-center opacity-25 me-1 ms-3 height-10" style="min-height: auto;"></div>
                      <!--::/vertical line-->

                      <!--:Badge:-->
                      <div class="d-inline-flex align-items-center text-success">
                        <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span>
                      <small>36%</small>
                      </div>
                    </div>
                  </div>
                  <!--::/end card-->
                </div>
                <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                  <!--::begin card-->
                  <div class="card card-body">
                    <!--Title-->
                    <h6 class="mb-3">Return
                      <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75"
                        data-tippy-content="Products returned" data-tippy-placement="top">info</span>
                    </h6>
                    <div class="d-flex lh-1 align-items-center">
                      <h4 class="mb-0">87</h4>

                      <!--vertical line-->
                      <div class="vr lh-1 align-self-center opacity-25 me-1 ms-3 height-10" style="min-height: auto;"></div>
                      <!--::/vertical line-->

                     <!--:Badge:-->
                     <div class="d-inline-flex align-items-center text-danger">
                      <span class="material-symbols-rounded align-middle text-danger">arrow_drop_down</span>
                    <small>24%</small>
                    </div>
                    </div>
                  </div>
                  <!--::/end card-->
                </div>
                <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                  <!--::begin card-->
                  <div class="card card-body">
                    <!--Title-->
                    <h6 class="mb-3">Conversion Rate
                      <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75"
                        data-tippy-content="Visitors who purchased at least 1 product"
                        data-tippy-placement="top">info</span>
                    </h6>
                    <div class="d-flex lh-1 align-items-center">
                      <h4 class="mb-0">67%</h4>

                      <!--vertical line-->
                      <div class="vr lh-1 align-self-center opacity-25 me-1 ms-3 height-10" style="min-height: auto;"></div>
                      <!--::/vertical line-->

                      <!--:Badge:-->
                      <div class="d-inline-flex align-items-center text-success">
                        <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span>
                      <small>24%</small>
                      </div>
                    </div>
                  </div>
                  <!--::/end card-->
                </div>
              </div>

              <!--row-->
              <div class="row">
                <div class="col-lg-7 col-xxl-8 mb-3 mb-lg-5">
                  <!--card-->
                  <div class="card table-card table-nowrap overflow-hidden h-100">
                    <div class="d-flex card-header align-items-center justify-content-between">
                      <h5 class="me-3 card-title mb-0">Top Products</h5>
                      <a href="#!" class="btn btn-outline-secondary btn-sm">View All</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped mb-0" style="width:100%">
                        <thead class="text-body-secondary small">
                          <tr>
                            <th style="width:190px">Product</th>
                            <th>Change</th>
                            <th>Price</th>
                            <th>Sold</th>
                            <th>Sales</th>
                          </tr>
                        </thead>
                        <tbody class="align-middle">
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/6.png"
                                    class="avatar sm bg-body p-1 rounded-2 me-3 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate fs-6"><a href="#!.php" class="text-reset">Apple white
                                    earbuds
                                    water proof</a></p>
                              </div>
                            </td>
                            <td>
                              <div class="d-inline-flex badge bg-success-subtle text-success align-items-center">
                                <span class="me-1">8%</span>
                                <span class="text-success">
                                  <span class="material-symbols-rounded align-middle fs-5">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$69</td>
                            <td>9040</td>
                            <td>$623760</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-inline-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/3.png"
                                    class="avatar sm bg-body p-1 rounded-2 me-3 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate fs-6"><a href="#!.php" class="text-reset">Mini handbag for
                                    woomens</a></p>
                              </div>
                            </td>
                            <td>
                              <div class="d-inline-flex badge bg-success-subtle text-success align-items-center">
                                <span class="me-1">6%</span>
                                <span class="text-success">
                                  <span class="material-symbols-rounded align-middle fs-5">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$59</td>
                            <td>8475</td>
                            <td>$500025</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/4.png"
                                    class="avatar sm bg-body p-1 rounded-2 me-3 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate fs-6"><a href="#!.php" class="text-reset">Minimalist
                                    wireless
                                    headphone</a></p>
                              </div>
                            </td>
                            <td>
                              <div class="d-inline-flex badge bg-success-subtle text-success align-items-center">
                                <span class="me-1">11%</span>
                                <span class="text-success">
                                  <span class="material-symbols-rounded align-middle fs-5">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$59</td>
                            <td>7321</td>
                            <td>$431939</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/5.png"
                                    class="avatar sm bg-body p-1 rounded-2 me-3 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate fs-6"><a href="#!.php" class="text-reset">Google alexa</a>
                                </p>
                              </div>
                            </td>
                            <td>
                              <div class="d-inline-flex badge bg-danger-subtle text-danger align-items-center">
                                <span class="me-1">-7%</span>
                                <span class="text-danger">
                                  <span class="material-symbols-rounded fs-5">
                                    trending_down
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$39</td>
                            <td>5485</td>
                            <td>$212862</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/7.png"
                                    class="avatar sm bg-body p-1 rounded-2 me-3 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate fs-6"><a href="#!.php" class="text-reset">Lorem ipsum
                                    robot</a>
                                </p>
                              </div>
                            </td>
                            <td>
                              <div class="d-inline-flex badge bg-success-subtle text-success align-items-center">
                                <span class="me-1">6%</span>
                                <span class="text-success">
                                  <span class="material-symbols-rounded fs-5">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$1139</td>
                            <td>3764</td>
                            <td>$112862</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-xxl-4 mb-3 mb-lg-5">
                  <div class="card h-100 overflow-hidden">

                    <div class="d-flex align-items-center card-header justify-content-between">
                      <div class="flex-grow-1 overflow-hidden pe-3">
                        <div class="d-flex align-items-center">
                          <h3 class="mb-2">138K</h3>
                          <small class="text-body-secondary ms-2">Total Visitors</small>
                        </div>
                        <p class="mb-0 text-truncate">Visitors by country</p>
                      </div>

                      <a href="#!" class="btn flex-shrink-0 btn-outline-secondary btn-sm">View Statistics</a>
                    </div>
                    <div class="overflow-hidden">
                      <div class="w-100" id="chart_top_countries"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--//Page content End//-->
          <footer class="pb-3 pb-lg-5">
            <div class="container">
              <span class="d-block lh-sm small text-body-secondary text-end">©
                Copyright  <script>
                  document.write(new Date().getFullYear())
                </script>.
              </span>
            </div>
          </footer>
        </main>
        <!--///////////Page content wrapper End///////////////-->
      </div>
    </div>
    
    <!--////////////Theme Core scripts Start/////////////////-->
    <script src="../../JS/Dashboard/theme.bundle.min.js"></script>

    <!--////////////Theme Core scripts End/////////////////-->

    
    

        <!--Dashboard charts begin-->
    <script src="../../Assets/Dashboard/vendor/apexcharts.min.js"></script>
        <script>
          //Chart Sales overview
          //Chart Sales overview
      var optionsSalesOverview = {
        colors: [utils.getColor('primary'), utils.getColor('warning')],
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
            opacityFrom: .25,
            opacityTo: 0,
            stops: [0, 100]
          }
        },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (val) {
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
     var countryColors = [utils.getColor('primary'),utils.getColor('danger'),utils.getColor('info'),utils.getColor('warning'), utils.getColor('success')];
      var optionsCountries = {
        
          series: [{ name:"Visitors",
          data: [
            87, 82, 68, 49, 41
          ]
        }],
          chart: {
          type: 'bar',
          height: 300,
          fontFamily:'inherit',
          toolbar:{
            show:false
          }
        },
        legend:{
          show:false
        },
        colors: countryColors,
        grid:{
          strokeDashArray:4,
          position:"back",
          padding:{
            right:30,
            left:10,
            bottom:-10
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
            columnWidth:'30%',
            horizontal: false,
            distributed:true,
            borderRadius:6,
            dataLabels: {
              position: 'top',
            },
          }
        },
        labels:{
          show:false
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: false
        },
        xaxis: {
          categories: ['USA', 'India', 'UK', 'France', 'Canada'],
          axisTicks: {
            show: true,
          },
          axisBorder: {
            show: false,
          },
        },
        yaxis:{
          labels:{
            show:true
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
            formatter: function (val) {
              return val + 'k <span class="fw-normal text-body-secondary"></span>';
            },
          },
        },
        };

        var chartCountries = new ApexCharts(document.querySelector("#chart_top_countries"), optionsCountries);
        chartCountries.render();
        </script>
  </body>

</html>
