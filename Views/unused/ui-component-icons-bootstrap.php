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

    <body>
        <!--////////////////// PreLoader Start//////////////////////-->
        <div class="loader bg-gradient-primary text-white">
          <div
                  class="content flex-column p-4 pb-0 d-flex justify-content-center align-items-center flex-column-fluid position-relative">
                  <div class="w-100 h-100 position-relative d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spinner-grow  me-2"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>
                  <div>
                    <span>Loading...</span>
                  </div>
                </div>
                </div>
        </div>
        <!--////////////////// /.PreLoader END//////////////////////-->

      <!--App Start-->
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
                          <span class="sidebar-icon size-40 d-flex align-items-center justify-content-center fs-4 lh-1 text-white rounded-3 bg-gradient-primary fw-bolder"> A </span>
                          <span class="sidebar-text">
                            <!--Sidebar-text-->
                            <span class="sidebar-text text-truncate fs-3 fw-bold">
                              Assan
                            </span>
                          </span>
                        </div>
                      </a>
                    </div>
                    <!--Sidebar-Menu-->
                    <div class="aside-menu px-3 my-auto" data-simplebar>
                      <nav class="flex-grow-1 h-100" id="page-navbar">
                        <!--:Sidebar nav-->
                        <ul class="nav flex-column collapse-group collapse d-flex">
                          <li class="nav-item sidebar-title text-truncate opacity-50 small">
                            <i class="bi bi-three-dots"></i>
                            <span>Main</span>
                          </li>
                          <li class="nav-item">
                            <a href="index.php" class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  sell
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">E-commerce</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="index-analytics.php" class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  monitoring
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">Analytics</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="index-project-management.php" class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  folder
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">Management</span>
                            </a>
                          </li>
          
                          <li class="nav-item">
                            <a href="widgets.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  widgets
                                  </span>
                              </span>
                              <span class="sidebar-text">Widgets <span class="badge rounded-pill bg-success ms-3">60+</span></span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a data-bs-toggle="collapse"
                              class="nav-link d-flex align-items-center text-truncate "
                              aria-expanded="false" href="#ui-pages">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  sticky_note_2
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">Pages</span>
                            </a>
                            <ul id="ui-pages" class="sidebar-dropdown list-unstyled collapse componentss_collapse">
                              <li class="sidebar-item">
                                <a href="#pages-account" data-bs-toggle="collapse" aria-expanded="false" class="sidebar-link @@account_active">
                                  Account
                                </a>
                                <ul id="pages-account" class="sidebar-dropdown list-unstyled collapse sd-second-level @@account_collapse">
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" href="account-general.php">General</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" href="account-billing.php">Billing</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" href="account-contacts.php">Contacts</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" href="account-security.php">Security</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" href="account-notifications.php">Notification</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="sidebar-item">
                                <a href="#pages-profile" data-bs-toggle="collapse" aria-expanded="false" class="sidebar-link @@profile_active">
                                  Profile
                                </a>
                                <ul id="pages-profile" class="sidebar-dropdown list-unstyled collapse sd-second-level @@profile_collapse">
                                  <li class="sidebar-item">
                                    <a class="sidebar-link @@profile_overview" href="profile.php">Overview</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="sidebar-item">
                                <a href="#pages-authentication" data-bs-toggle="collapse" aria-expanded="false" class="sidebar-link">
                                  Authentication
                                </a>
                                <ul id="pages-authentication" class="sidebar-dropdown list-unstyled collapse sd-second-level">
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" target="_blank" href="page-auth-signin.php">SignIn</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" target="_blank" href="page-auth-signup.php">SignUp</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" target="_blank" href="page-auth-recover-pass.php">Recover password</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" href="page-auth-success.php">Success</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link" target="_blank" href="page-auth-lockscreen.php">lockscreen</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="sidebar-item"><a class="sidebar-link components_search" href="page-search.php">Search</a></li>
                              <li class="sidebar-item"><a class="sidebar-link components_invoice" href="page-invoice.php">Invoice</a></li>
                              <li class="sidebar-item"><a class="sidebar-link components_tasks" href="page-tasks.php">Tasks</a></li>
                              <li class="sidebar-item"><a class="sidebar-link components_pricing" href="page-pricing.php">Pricing</a></li>
                              <li class="sidebar-item">
                                <a href="#pages-projects" data-bs-toggle="collapse" aria-expanded="false" class="sidebar-link @@projects_active">
                                  Projects
                                </a>
                                <ul id="pages-projects" class="sidebar-dropdown list-unstyled @@projects_collapse_show collapse sd-second-level">
                                  <li class="sidebar-item">
                                    <a class="sidebar-link @@projects" href="projects-list.php">List</a>
                                  </li>
                                  <li class="sidebar-item">
                                    <a class="sidebar-link @@project_detail" href="project-detail.php">Details</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="sidebar-item"><a class="sidebar-link components_404" href="page-404.php">404 Error</a></li>
                              <li class="sidebar-item"><a class="sidebar-link components_blank" href="page-blank.php">Blank Page</a></li>
                            </ul>
                          </li>


                          <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                            <i class="bi bi-three-dots"></i>
                            <span>Apps</span>
                          </li>
                          <li class="nav-item">
                            <a href="app-inbox.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  all_inbox
                                  </span>
                              </span>
                              <span class="sidebar-text">Inbox <span class="badge rounded-pill bg-primary small lh-1 ms-3">1
                                  new</span></span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="app-chat.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  chat
                                  </span>
                              </span>
                              <span class="sidebar-text">Chat</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="app-calendar.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  calendar_month
                                  </span>
                              </span>
                              <span class="sidebar-text">Calendar</span>
                            </a>
                          </li>
                          <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                            <i class="bi bi-three-dots"></i>
                            <span>Features</span>
                          </li>
                          <li class="nav-item">
                            <a href="#layouts" data-bs-toggle="collapse" aria-expanded="false"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  space_dashboard
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">Layouts</span>
                            </a>
                            <ul id="layouts" class="sidebar-dropdown list-unstyled collapse @@layout_collapse_show">
                              <li class="sidebar-item"><a class="sidebar-link @@layout_compact" href="layout-compact.php">Compact</a></li>
                              <li class="sidebar-item"><a class="sidebar-link" href="layout-horizontal.php">Horizontal</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@layout_boxed" href="layout-boxed.php">Boxed</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#ui-components" data-bs-toggle="collapse" aria-expanded="false"
                              class="nav-link d-flex align-items-center text-truncate active">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  construction
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">UI Components</span>
                            </a>
                            <ul id="ui-components" class="sidebar-dropdown list-unstyled collapse show">
              
                              <li class="sidebar-item"><a class="sidebar-link @@component_avatars_active" href="ui-component-avatars.php">Avatars</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_accordion_active" href="ui-component-accordion.php">Accordion</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_alerts_active" href="ui-component-alerts.php">Alerts</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_badges_active" href="ui-component-badges.php">Badges</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_buttons_active" href="ui-component-buttons.php">Buttons</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_cards_active" href="ui-component-cards.php">Cards</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_carousel_active" href="ui-component-carousel.php">Carousel</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_collapse_active" href="ui-component-collapse.php">Collapse</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_dropdown_active" href="ui-component-dropdown.php">Dropdowns</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_modals_active" href="ui-component-modals.php">Modal</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_offcanvas_active" href="ui-component-offcanvas.php">Offcanvas</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_icons_material_active" href="ui-component-icons-material-symbols.php">Material Sysmbols</a>
                              </li>
                              <li class="sidebar-item"><a class="sidebar-link active" href="ui-component-icons-bootstrap.php">Bootstrap
                                  Icons <span class="badge bg-info ms-2">1.10.3</span></a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_progress_active" href="ui-component-progress.php">Progress</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_spinners_active" href="ui-component-spinners.php">Spinners</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_swiper_active" href="ui-component-swiper-slider.php">Swiper Slider</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_typo_active" href="ui-component-typography.php">Typography</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_toast_active" href="ui-component-toast.php">Toast</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_bs_tables_active" href="ui-component-tables.php">Tables</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_tippy_active" href="ui-component-tippy-js.php">Tippy.js</a></li>
                             </ul>
                          </li>
                          <li class="nav-item">
                            <a href="charts.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  auto_graph
                                  </span>
                              </span>
                              <span class="sidebar-text">Charts</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="maps.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  map
                                  </span>
                              </span>
                              <span class="sidebar-text">Maps</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="datatables.php"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  database
                                  </span>
                              </span>
                              <span class="sidebar-text">Datatables</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#component-forms" data-bs-toggle="collapse" aria-expanded="false"
                              class="nav-link d-flex align-items-center text-truncate ">
                              <span class="sidebar-icon">
                                <span class="material-symbols-rounded">
                                  edit_note
                                  </span>
                              </span>
                              <!--Sidebar nav text-->
                              <span class="sidebar-text">Forms</span>
                            </a>
                            <ul id="component-forms" class="sidebar-dropdown list-unstyled collapse @@form_collapse_show">
                              <li class="sidebar-item"><a class="sidebar-link @@form_bootstrap" href="ui-form-bootstrap.php">
                                  Bootstrap</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_quill_editor" href="ui-form-editor.php">
                                  Editor</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_stepper" href="ui-form-stepper.php">
                                  Stepper</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_upload" href="ui-form-upload.php">
                                  Upload</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_daterangepicker" href="ui-form-daterange-picker.php">
                                  Daterangepicker</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_validation" href="ui-form-validation.php">
                                  Validation</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_choices" href="ui-form-choices.php">
                                  Choices</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@form_input_mask" href="ui-form-inputmask.php">
                                  Inputmask</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#multi-level" data-bs-toggle="collapse" aria-expanded="false">
                              <div class="d-flex align-items-center">
                                <span class="sidebar-icon">
                                  <span class="material-symbols-rounded">
                                    layers
                                    </span>
                                </span>
                                <span class="sidebar-text">Multi level</span>
                              </div>
                            </a>
                            <ul id="multi-level" class="collapse sidebar-dropdown list-unstyled mb-0">
                              <li class="sidebar-item">
                                <a href="#level-2" data-bs-toggle="collapse" aria-expanded="false" class="sidebar-link">Level
                                  Two</a>
                                <ul id="level-2" class="collapse sidebar-dropdown list-unstyled mb-0">

                                  <li class="sidebar-item">
                                    <a href="#level-3" data-bs-toggle="collapse" aria-expanded="false" class="sidebar-link">Level
                                      two item 2</a>
                                    <ul id="level-3" class="collapse sidebar-dropdown list-unstyled mb-0">
                                      <li class="sidebar-item">
                                        <a href="#!" class="sidebar-link">Level three item 1</a>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                      <!--aside-info-box-->
                      <div class="my-3 p-3 aside-info bg-gradient-primary shadow-lg text-white rounded-4 position-relative overflow-hidden">
                        <svg style="transform: rotate(-180deg);" preserveAspectRatio="none" class="position-absolute text-white start-0 bottom-0 w-100" fill="currentColor" height="35%" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".1"></path>
                          <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".25"></path>
                          <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" opacity=".25"></path>
                        </svg>
                       <div class="position-relative">
                        <p class="mb-0 pb-2">Release your maximal potencial software</p>
                        <!--Action button-->
                        <a href="#!.php" class="btn rounded-pill btn-white shadow-sm text-truncate px-3 btn-sm">Upgrade Pro</a>
                       </div>
                      </div>
                    </div>
                  </div>
                </aside>
                <!--///////////Page Sidebar End///////////////-->

                <!--///Sidebar close button for 991px or below devices///-->
                <div
                class="sidebar-close d-lg-none">
                <a href="#"></a>
                </div>
                <!--///.Sidebar close end///-->


                <!--///////////Page content wrapper///////////////-->
                <main class="page-content d-flex flex-column flex-row-fluid">


                    <!--//page-header//-->
                    <header class="navbar mb-3 px-3 px-lg-6 px-3 px-lg-6 align-items-center page-header navbar-expand navbar-light">
                      <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <div class="d-flex align-items-center flex-no-wrap text-truncate">
                          <!--Sidebar-icon-->
                          <span class="sidebar-icon bg-gradient-primary rounded-3 size-40 fw-bolder text-white">
                            A
                          </span>
                        </div>
                      </a>
                      <ul class="navbar-nav d-flex align-items-center h-100">
                        <li class="nav-item d-none d-lg-flex flex-column h-100 me-2 align-items-center justify-content-center" data-tippy-placement="bottom-start" data-tippy-content="Toggle Sidebar">
                          <a href="javascript:void(0)"
                            class="sidebar-trigger nav-link size-40 d-flex align-items-center justify-content-center p-0">
                            <span class="material-symbols-rounded">
                              menu_open
                              </span>
                          </a>
                        </li>
                        <li class="nav-item d-flex flex-column me-2 h-100 justify-content-center dropdown" data-tippy-placement="bottom-start" data-tippy-content="Search in the App">
                          <a href="javascript:void;" data-bs-target="#modal_search" data-bs-toggle="modal" 
                            class="d-flex align-items-center justify-content-center nav-link size-40 p-0">
                            <span class="material-symbols-rounded">
                              search
                              </span>
                          </a>
                        </li>
                        <li class="nav-item d-none d-md-flex flex-md-column me-2 h-100 justify-content-md-center dropdown">
                          <a href="#" data-bs-toggle="dropdown"
                            class="nav-link size-40 d-flex align-items-center justify-content-center p-0">
                            <span class="material-symbols-rounded">
                              apps
                              </span>
                          </a>
                          <div class="dropdown-menu overflow-hidden dropdown-menu-sm p-0 mt-0">
                            <!--Apps list-->
                            <div class="list-group list-group-flush">

                              <div class="list-group-item d-flex align-items-center justify-content-between px-3">
                                <h6 class="dropdown-header ps-0">Apps Shortcuts</h6>
                                <a href="#!" class="btn btn-sm btn-primary">View All Apps <span class="ms-1 fs-5 align-middle material-symbols-rounded">
                                  arrow_forward
                                  </span></a>
                              </div>
                              <!--App item-->
                              <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                                <!--App logo-->
                                <img src="assets/media/brand-logos/atlassian.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Atlassian</h6>
                                  <small>Security and control across Cloud</small>
                                </div>
                              </a>

                              <!--App item-->
                              <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                                <!--App logo-->
                                <img src="assets/media/brand-logos/google-webdev.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Google webdev</h6>
                                  <small>Work involved in developing a website</small>
                                </div>
                              </a>

                              <!--App item-->
                              <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                                <!--App logo-->
                                <img src="assets/media/brand-logos/slack.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                                <div class="flex-grow-1">
                                  <h6 class="mb-0">Slack</h6>
                                  <small>Email collaboration software</small>
                                </div>
                              </a>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <ul class="navbar-nav ms-auto d-flex align-items-center h-100">
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
                        <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100 mx-1 mx-md-3">
                          <a href="#"
                            class="nav-link p-0 position-relative size-40 d-flex align-items-center justify-content-center"
                            aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <span class="material-symbols-rounded">
                              notifications
                              </span>
                            <span
                              class="size-5 rounded-circle d-flex align-items-center justify-content-center position-absolute end-0 top-0 mt-2 me-1 bg-danger small"></span>
                          </a>


                          <div class="dropdown-menu mt-0 p-0 overflow-hidden dropdown-menu-end dropdown-menu-sm">
                            <!--notification header-->
                            <div class="py-3 px-4 bg-primary text-white d-flex align-items-center">
                              <h5 class="me-3 mb-0 flex-grow-1">Notifications</h5>
                              <div class="flex-shrink-0">
                                <a href="#!" class="btn btn-white btn-sm">View All</a>
                              </div>
                            </div>
                            <div style="height:290px" data-simplebar>
                              <div class="list-group list-group-flush mb-0">
            
                                <!--//Notification item start//-->
                                 <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
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
                                <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
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
                                 <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                                    <span class="d-block me-3">
                                      <span
                                        class="d-flex align-items-center justify-content-center lh-1 size-50 bg-success-subtle text-success rounded-circle">
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
                                <!--//Notification item start//-->
                                <a href="#" class="list-group-item list-group-item-action py-3 px-4 d-flex align-items-center">
                                    <span class="d-block me-3">
                                      <span
                                        class="d-flex align-items-center justify-content-center lh-1 size-50 bg-danger-subtle text-danger rounded-circle">
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
                        </li>
                        <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100">
                          <a href="#"
                            class="nav-link dropdown-toggle height-40 px-2 d-flex align-items-center justify-content-center"
                            aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="d-flex align-items-center">

                              <!--Avatar with status-->
                              <div class="avatar-status status-online me-sm-2 avatar xs">
                                <img src="assets/media/avatars/01.jpg" class="rounded-circle img-fluid" alt="">
                              </div>
                              <span class="d-none d-md-inline-block">Noah</span>
                            </div>
                          </a>

                          <div class="dropdown-menu mt-0 p-0 dropdown-menu-end overflow-hidden">
                            <!--User meta-->
                            <div class="position-relative overflow-hidden px-3 pt-4 pb-7 bg-gradient-primary text-white">
                              <!--Divider-->
                              <svg style="transform: rotate(-180deg)" preserveAspectRatio="none"
                                class="position-absolute start-0 bottom-0 w-100 dropdown-wave" fill="currentColor" height="24" viewBox="0 0 1200 120"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                                  opacity=".25" />
                                <path
                                  d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                                  opacity=".5" />
                                <path
                                  d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
                              </svg>
                              <div class="position-relative">
                                <h5 class="mb-1">Noah Pierre</h5>
                                <p class="text-white text-opacity-75 small mb-0 lh-1">Full stack developer</p>
                              </div>
                            </div>
                            <div class="py-2 px-1">
                              <a href="profile.php" class="dropdown-item d-flex align-items-center">
                                <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-primary text-white rounded-2">
                                account_circle
                                </span>
                              <span class="flex-grow-1">Profile</span>
                              </a>
                              <a href="account-general.php" class="dropdown-item d-flex align-items-center">
                                <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-danger text-white rounded-2">
                                settings
                                </span>
                              <span class="flex-grow-1">Settings</span>
                              </a>
                              <a href="page-tasks.php" class="dropdown-item d-flex align-items-center">
                                <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-info text-white rounded-2">
                                task
                                </span>
                              <span class="flex-grow-1">Tasks</span>
                              </a>
                              <hr class="my-2">
                              <a href="page-auth-signin.php" class="dropdown-item d-flex align-items-center">
                                <span class="material-symbols-rounded align-middle me-2 size-30 fs-5 d-flex align-items-center justify-content-center bg-warning text-white rounded-2">
                                logout
                                </span>
                              <span class="flex-grow-1">Logout</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="nav-item dropdown ms-3 d-flex d-lg-none align-items-center justify-content-center flex-column h-100">
                          <a href="javascript:void(0)"
                            class="nav-link sidebar-trigger-lg-down size-40 p-0 d-flex align-items-center justify-content-center">
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
                          <input type="text" autofocus class="form-control form-control-lg border-2 border-primary border ps-8"
                            placeholder="Search App...">
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
                    <div class="toolbar px-3 px-lg-6 py-3">
                        <div class="position-relative container-fluid px-0">
                            <div class="row align-items-center position-relative">
                                <div class="col-md-8">
                                    <h3 class="mb-2">Bootstrap Icons</h3>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">UI Components</li>
                                            <li class="breadcrumb-item active">Bootstrap Icons</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//Page Toolbar End//-->

                    <!--//Page content//-->
                    <div id="iconsList" class="content pt-3 px-3 px-lg-6 d-flex flex-column-fluid">
                        <div class="container-fluid px-0">
                          <!--Search-->
                          <div class="card card-body mb-3 mb-lg-5">
                           <div class="position-relative">
                            <div class="position-absolute start-0 top-50 translate-middle-y d-flex align-items-center justify-content-center width-30 opacity-25">
                              <span class="material-symbols-rounded fs-5">search</span>
                            </div>
                            <input type="text" class="form-control search ps-6"
                            placeholder="Search icon by name...">
                           </div>
                          </div>
                         <div class="card">
                           <div class="card-header d-flex justify-content-between align-items-center">
                             <h5 class="mb-0">1,900 Icons</h5>
                             <span>v1.10.3</span>
                           </div>
                           <div class="card-body">
                            <!--Bootstrap icons start-->
                            <div class="row list row-cols-2 text-center row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-0-circle"></i>
                                <div class="small text-body-secondary iname">0-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-1-circle-fill"></i>
                                <div class="small text-body-secondary iname">1-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-1-circle"></i>
                                <div class="small text-body-secondary iname">1-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-1-square-fill"></i>
                                <div class="small text-body-secondary iname">1-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-1-square"></i>
                                <div class="small text-body-secondary iname">1-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-2-circle-fill"></i>
                                <div class="small text-body-secondary iname">2-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-2-circle"></i>
                                <div class="small text-body-secondary iname">2-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-2-square-fill"></i>
                                <div class="small text-body-secondary iname">2-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-2-square"></i>
                                <div class="small text-body-secondary iname">2-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-3-circle-fill"></i>
                                <div class="small text-body-secondary iname">3-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-3-circle"></i>
                                <div class="small text-body-secondary iname">3-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-3-square-fill"></i>
                                <div class="small text-body-secondary iname">3-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-3-square"></i>
                                <div class="small text-body-secondary iname">3-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-4-circle-fill"></i>
                                <div class="small text-body-secondary iname">4-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-4-circle"></i>
                                <div class="small text-body-secondary iname">4-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-4-square-fill"></i>
                                <div class="small text-body-secondary iname">4-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-4-square"></i>
                                <div class="small text-body-secondary iname">4-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-5-circle-fill"></i>
                                <div class="small text-body-secondary iname">5-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-5-circle"></i>
                                <div class="small text-body-secondary iname">5-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-5-square-fill"></i>
                                <div class="small text-body-secondary iname">5-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-5-square"></i>
                                <div class="small text-body-secondary iname">5-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-6-circle-fill"></i>
                                <div class="small text-body-secondary iname">6-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-6-circle"></i>
                                <div class="small text-body-secondary iname">6-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-6-square-fill"></i>
                                <div class="small text-body-secondary iname">6-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-6-square"></i>
                                <div class="small text-body-secondary iname">6-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-7-circle-fill"></i>
                                <div class="small text-body-secondary iname">7-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-7-circle"></i>
                                <div class="small text-body-secondary iname">7-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-7-square-fill"></i>
                                <div class="small text-body-secondary iname">7-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-7-square"></i>
                                <div class="small text-body-secondary iname">7-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-8-circle-fill"></i>
                                <div class="small text-body-secondary iname">8-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-8-circle"></i>
                                <div class="small text-body-secondary iname">8-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-8-square-fill"></i>
                                <div class="small text-body-secondary iname">8-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-8-square"></i>
                                <div class="small text-body-secondary iname">8-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-9-circle-fill"></i>
                                <div class="small text-body-secondary iname">9-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-9-circle"></i>
                                <div class="small text-body-secondary iname">9-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-9-square-fill"></i>
                                <div class="small text-body-secondary iname">9-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-9-square"></i>
                                <div class="small text-body-secondary iname">9-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-activity"></i>
                                <div class="small text-body-secondary iname">activity</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-airplane-engines-fill"></i>
                                <div class="small text-body-secondary iname">airplane-engines-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-airplane-engines"></i>
                                <div class="small text-body-secondary iname">airplane-engines</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-airplane-fill"></i>
                                <div class="small text-body-secondary iname">airplane-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-airplane"></i>
                                <div class="small text-body-secondary iname">airplane</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-alarm-fill"></i>
                                <div class="small text-body-secondary iname">alarm-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-alarm"></i>
                                <div class="small text-body-secondary iname">alarm</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-alexa"></i>
                                <div class="small text-body-secondary iname">alexa</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-align-bottom"></i>
                                <div class="small text-body-secondary iname">align-bottom</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-align-center"></i>
                                <div class="small text-body-secondary iname">align-center</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-align-end"></i>
                                <div class="small text-body-secondary iname">align-end</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-align-middle"></i>
                                <div class="small text-body-secondary iname">align-middle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-align-start"></i>
                                <div class="small text-body-secondary iname">align-start</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-align-top"></i>
                                <div class="small text-body-secondary iname">align-top</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-alipay"></i>
                                <div class="small text-body-secondary iname">alipay</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-alt"></i>
                                <div class="small text-body-secondary iname">alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-android"></i>
                                <div class="small text-body-secondary iname">android</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-android2"></i>
                                <div class="small text-body-secondary iname">android2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-app-indicator"></i>
                                <div class="small text-body-secondary iname">app-indicator</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-app"></i>
                                <div class="small text-body-secondary iname">app</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-apple"></i>
                                <div class="small text-body-secondary iname">apple</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-archive-fill"></i>
                                <div class="small text-body-secondary iname">archive-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-archive"></i>
                                <div class="small text-body-secondary iname">archive</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-90deg-down"></i>
                                <div class="small text-body-secondary iname">arrow-90deg-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-90deg-left"></i>
                                <div class="small text-body-secondary iname">arrow-90deg-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-90deg-right"></i>
                                <div class="small text-body-secondary iname">arrow-90deg-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-90deg-up"></i>
                                <div class="small text-body-secondary iname">arrow-90deg-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-bar-down"></i>
                                <div class="small text-body-secondary iname">arrow-bar-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-bar-left"></i>
                                <div class="small text-body-secondary iname">arrow-bar-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-bar-right"></i>
                                <div class="small text-body-secondary iname">arrow-bar-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-bar-up"></i>
                                <div class="small text-body-secondary iname">arrow-bar-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-clockwise"></i>
                                <div class="small text-body-secondary iname">arrow-clockwise</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-counterclockwise"></i>
                                <div class="small text-body-secondary iname">arrow-counterclockwise</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-down-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-circle"></i>
                                <div class="small text-body-secondary iname">arrow-down-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-left-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-down-left-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-left-circle"></i>
                                <div class="small text-body-secondary iname">arrow-down-left-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-left-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-down-left-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-left-square"></i>
                                <div class="small text-body-secondary iname">arrow-down-left-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-left"></i>
                                <div class="small text-body-secondary iname">arrow-down-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-right-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-down-right-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-right-circle"></i>
                                <div class="small text-body-secondary iname">arrow-down-right-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-right-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-down-right-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-right-square"></i>
                                <div class="small text-body-secondary iname">arrow-down-right-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-right"></i>
                                <div class="small text-body-secondary iname">arrow-down-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-short"></i>
                                <div class="small text-body-secondary iname">arrow-down-short</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-down-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-square"></i>
                                <div class="small text-body-secondary iname">arrow-down-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down-up"></i>
                                <div class="small text-body-secondary iname">arrow-down-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-down"></i>
                                <div class="small text-body-secondary iname">arrow-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-left-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left-circle"></i>
                                <div class="small text-body-secondary iname">arrow-left-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left-right"></i>
                                <div class="small text-body-secondary iname">arrow-left-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left-short"></i>
                                <div class="small text-body-secondary iname">arrow-left-short</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-left-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left-square"></i>
                                <div class="small text-body-secondary iname">arrow-left-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-left"></i>
                                <div class="small text-body-secondary iname">arrow-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-repeat"></i>
                                <div class="small text-body-secondary iname">arrow-repeat</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-return-left"></i>
                                <div class="small text-body-secondary iname">arrow-return-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-return-right"></i>
                                <div class="small text-body-secondary iname">arrow-return-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-right-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-right-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-right-circle"></i>
                                <div class="small text-body-secondary iname">arrow-right-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-right-short"></i>
                                <div class="small text-body-secondary iname">arrow-right-short</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-right-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-right-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-right-square"></i>
                                <div class="small text-body-secondary iname">arrow-right-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-right"></i>
                                <div class="small text-body-secondary iname">arrow-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-through-heart-fill"></i>
                                <div class="small text-body-secondary iname">arrow-through-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-through-heart"></i>
                                <div class="small text-body-secondary iname">arrow-through-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-up-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-circle"></i>
                                <div class="small text-body-secondary iname">arrow-up-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-left-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-up-left-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-left-circle"></i>
                                <div class="small text-body-secondary iname">arrow-up-left-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-left-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-up-left-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-left-square"></i>
                                <div class="small text-body-secondary iname">arrow-up-left-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-left"></i>
                                <div class="small text-body-secondary iname">arrow-up-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-right-circle-fill"></i>
                                <div class="small text-body-secondary iname">arrow-up-right-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-right-circle"></i>
                                <div class="small text-body-secondary iname">arrow-up-right-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-right-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-up-right-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-right-square"></i>
                                <div class="small text-body-secondary iname">arrow-up-right-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-right"></i>
                                <div class="small text-body-secondary iname">arrow-up-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-short"></i>
                                <div class="small text-body-secondary iname">arrow-up-short</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-square-fill"></i>
                                <div class="small text-body-secondary iname">arrow-up-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up-square"></i>
                                <div class="small text-body-secondary iname">arrow-up-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrow-up"></i>
                                <div class="small text-body-secondary iname">arrow-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrows-angle-contract"></i>
                                <div class="small text-body-secondary iname">arrows-angle-contract</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrows-angle-expand"></i>
                                <div class="small text-body-secondary iname">arrows-angle-expand</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrows-collapse"></i>
                                <div class="small text-body-secondary iname">arrows-collapse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrows-expand"></i>
                                <div class="small text-body-secondary iname">arrows-expand</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrows-fullscreen"></i>
                                <div class="small text-body-secondary iname">arrows-fullscreen</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-arrows-move"></i>
                                <div class="small text-body-secondary iname">arrows-move</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-aspect-ratio-fill"></i>
                                <div class="small text-body-secondary iname">aspect-ratio-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-aspect-ratio"></i>
                                <div class="small text-body-secondary iname">aspect-ratio</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-asterisk"></i>
                                <div class="small text-body-secondary iname">asterisk</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-at"></i>
                                <div class="small text-body-secondary iname">at</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-award-fill"></i>
                                <div class="small text-body-secondary iname">award-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-award"></i>
                                <div class="small text-body-secondary iname">award</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-back"></i>
                                <div class="small text-body-secondary iname">back</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-backspace-fill"></i>
                                <div class="small text-body-secondary iname">backspace-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-backspace-reverse-fill"></i>
                                <div class="small text-body-secondary iname">backspace-reverse-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-backspace-reverse"></i>
                                <div class="small text-body-secondary iname">backspace-reverse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-backspace"></i>
                                <div class="small text-body-secondary iname">backspace</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-3d-fill"></i>
                                <div class="small text-body-secondary iname">badge-3d-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-3d"></i>
                                <div class="small text-body-secondary iname">badge-3d</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-4k-fill"></i>
                                <div class="small text-body-secondary iname">badge-4k-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-4k"></i>
                                <div class="small text-body-secondary iname">badge-4k</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-8k-fill"></i>
                                <div class="small text-body-secondary iname">badge-8k-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-8k"></i>
                                <div class="small text-body-secondary iname">badge-8k</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-ad-fill"></i>
                                <div class="small text-body-secondary iname">badge-ad-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-ad"></i>
                                <div class="small text-body-secondary iname">badge-ad</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-ar-fill"></i>
                                <div class="small text-body-secondary iname">badge-ar-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-ar"></i>
                                <div class="small text-body-secondary iname">badge-ar</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-cc-fill"></i>
                                <div class="small text-body-secondary iname">badge-cc-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-cc"></i>
                                <div class="small text-body-secondary iname">badge-cc</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-hd-fill"></i>
                                <div class="small text-body-secondary iname">badge-hd-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-hd"></i>
                                <div class="small text-body-secondary iname">badge-hd</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-sd-fill"></i>
                                <div class="small text-body-secondary iname">badge-sd-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-sd"></i>
                                <div class="small text-body-secondary iname">badge-sd</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-tm-fill"></i>
                                <div class="small text-body-secondary iname">badge-tm-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-tm"></i>
                                <div class="small text-body-secondary iname">badge-tm</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-vo-fill"></i>
                                <div class="small text-body-secondary iname">badge-vo-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-vo"></i>
                                <div class="small text-body-secondary iname">badge-vo</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-vr-fill"></i>
                                <div class="small text-body-secondary iname">badge-vr-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-vr"></i>
                                <div class="small text-body-secondary iname">badge-vr</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-wc-fill"></i>
                                <div class="small text-body-secondary iname">badge-wc-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-badge-wc"></i>
                                <div class="small text-body-secondary iname">badge-wc</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-check-fill"></i>
                                <div class="small text-body-secondary iname">bag-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-check"></i>
                                <div class="small text-body-secondary iname">bag-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-dash-fill"></i>
                                <div class="small text-body-secondary iname">bag-dash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-dash"></i>
                                <div class="small text-body-secondary iname">bag-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-fill"></i>
                                <div class="small text-body-secondary iname">bag-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-heart-fill"></i>
                                <div class="small text-body-secondary iname">bag-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-heart"></i>
                                <div class="small text-body-secondary iname">bag-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-plus-fill"></i>
                                <div class="small text-body-secondary iname">bag-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-plus"></i>
                                <div class="small text-body-secondary iname">bag-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-x-fill"></i>
                                <div class="small text-body-secondary iname">bag-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag-x"></i>
                                <div class="small text-body-secondary iname">bag-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bag"></i>
                                <div class="small text-body-secondary iname">bag</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-balloon-fill"></i>
                                <div class="small text-body-secondary iname">balloon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-balloon-heart-fill"></i>
                                <div class="small text-body-secondary iname">balloon-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-balloon-heart"></i>
                                <div class="small text-body-secondary iname">balloon-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-balloon"></i>
                                <div class="small text-body-secondary iname">balloon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bandaid-fill"></i>
                                <div class="small text-body-secondary iname">bandaid-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bandaid"></i>
                                <div class="small text-body-secondary iname">bandaid</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bank"></i>
                                <div class="small text-body-secondary iname">bank</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bank2"></i>
                                <div class="small text-body-secondary iname">bank2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bar-chart-fill"></i>
                                <div class="small text-body-secondary iname">bar-chart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bar-chart-line-fill"></i>
                                <div class="small text-body-secondary iname">bar-chart-line-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bar-chart-line"></i>
                                <div class="small text-body-secondary iname">bar-chart-line</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bar-chart-steps"></i>
                                <div class="small text-body-secondary iname">bar-chart-steps</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bar-chart"></i>
                                <div class="small text-body-secondary iname">bar-chart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-basket-fill"></i>
                                <div class="small text-body-secondary iname">basket-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-basket"></i>
                                <div class="small text-body-secondary iname">basket</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-basket2-fill"></i>
                                <div class="small text-body-secondary iname">basket2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-basket2"></i>
                                <div class="small text-body-secondary iname">basket2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-basket3-fill"></i>
                                <div class="small text-body-secondary iname">basket3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-basket3"></i>
                                <div class="small text-body-secondary iname">basket3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-battery-charging"></i>
                                <div class="small text-body-secondary iname">battery-charging</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-battery-full"></i>
                                <div class="small text-body-secondary iname">battery-full</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-battery-half"></i>
                                <div class="small text-body-secondary iname">battery-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-battery"></i>
                                <div class="small text-body-secondary iname">battery</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-behance"></i>
                                <div class="small text-body-secondary iname">behance</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bell-fill"></i>
                                <div class="small text-body-secondary iname">bell-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bell-slash-fill"></i>
                                <div class="small text-body-secondary iname">bell-slash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bell-slash"></i>
                                <div class="small text-body-secondary iname">bell-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bell"></i>
                                <div class="small text-body-secondary iname">bell</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bezier"></i>
                                <div class="small text-body-secondary iname">bezier</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bezier2"></i>
                                <div class="small text-body-secondary iname">bezier2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bicycle"></i>
                                <div class="small text-body-secondary iname">bicycle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-binoculars-fill"></i>
                                <div class="small text-body-secondary iname">binoculars-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-binoculars"></i>
                                <div class="small text-body-secondary iname">binoculars</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-blockquote-left"></i>
                                <div class="small text-body-secondary iname">blockquote-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-blockquote-right"></i>
                                <div class="small text-body-secondary iname">blockquote-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bluetooth"></i>
                                <div class="small text-body-secondary iname">bluetooth</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-body-text"></i>
                                <div class="small text-body-secondary iname">body-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-book-fill"></i>
                                <div class="small text-body-secondary iname">book-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-book-half"></i>
                                <div class="small text-body-secondary iname">book-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-book"></i>
                                <div class="small text-body-secondary iname">book</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-check-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-check"></i>
                                <div class="small text-body-secondary iname">bookmark-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-dash-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-dash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-dash"></i>
                                <div class="small text-body-secondary iname">bookmark-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-heart-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-heart"></i>
                                <div class="small text-body-secondary iname">bookmark-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-plus-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-plus"></i>
                                <div class="small text-body-secondary iname">bookmark-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-star-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-star-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-star"></i>
                                <div class="small text-body-secondary iname">bookmark-star</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-x-fill"></i>
                                <div class="small text-body-secondary iname">bookmark-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark-x"></i>
                                <div class="small text-body-secondary iname">bookmark-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmark"></i>
                                <div class="small text-body-secondary iname">bookmark</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmarks-fill"></i>
                                <div class="small text-body-secondary iname">bookmarks-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookmarks"></i>
                                <div class="small text-body-secondary iname">bookmarks</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bookshelf"></i>
                                <div class="small text-body-secondary iname">bookshelf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-boombox-fill"></i>
                                <div class="small text-body-secondary iname">boombox-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-boombox"></i>
                                <div class="small text-body-secondary iname">boombox</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bootstrap-fill"></i>
                                <div class="small text-body-secondary iname">bootstrap-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bootstrap-reboot"></i>
                                <div class="small text-body-secondary iname">bootstrap-reboot</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bootstrap"></i>
                                <div class="small text-body-secondary iname">bootstrap</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-all"></i>
                                <div class="small text-body-secondary iname">border-all</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-bottom"></i>
                                <div class="small text-body-secondary iname">border-bottom</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-center"></i>
                                <div class="small text-body-secondary iname">border-center</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-inner"></i>
                                <div class="small text-body-secondary iname">border-inner</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-left"></i>
                                <div class="small text-body-secondary iname">border-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-middle"></i>
                                <div class="small text-body-secondary iname">border-middle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-outer"></i>
                                <div class="small text-body-secondary iname">border-outer</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-right"></i>
                                <div class="small text-body-secondary iname">border-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-style"></i>
                                <div class="small text-body-secondary iname">border-style</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-top"></i>
                                <div class="small text-body-secondary iname">border-top</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border-width"></i>
                                <div class="small text-body-secondary iname">border-width</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-border"></i>
                                <div class="small text-body-secondary iname">border</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bounding-box-circles"></i>
                                <div class="small text-body-secondary iname">bounding-box-circles</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bounding-box"></i>
                                <div class="small text-body-secondary iname">bounding-box</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-down-left"></i>
                                <div class="small text-body-secondary iname">box-arrow-down-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-down-right"></i>
                                <div class="small text-body-secondary iname">box-arrow-down-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-down"></i>
                                <div class="small text-body-secondary iname">box-arrow-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-down-left"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-down-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-down-right"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-down-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-down"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-left"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-right"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-up-left"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-up-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-up-right"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-up-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-in-up"></i>
                                <div class="small text-body-secondary iname">box-arrow-in-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-left"></i>
                                <div class="small text-body-secondary iname">box-arrow-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-right"></i>
                                <div class="small text-body-secondary iname">box-arrow-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-up-left"></i>
                                <div class="small text-body-secondary iname">box-arrow-up-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-up-right"></i>
                                <div class="small text-body-secondary iname">box-arrow-up-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-arrow-up"></i>
                                <div class="small text-body-secondary iname">box-arrow-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-fill"></i>
                                <div class="small text-body-secondary iname">box-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-seam-fill"></i>
                                <div class="small text-body-secondary iname">box-seam-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box-seam"></i>
                                <div class="small text-body-secondary iname">box-seam</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box"></i>
                                <div class="small text-body-secondary iname">box</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box2-fill"></i>
                                <div class="small text-body-secondary iname">box2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box2-heart-fill"></i>
                                <div class="small text-body-secondary iname">box2-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box2-heart"></i>
                                <div class="small text-body-secondary iname">box2-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-box2"></i>
                                <div class="small text-body-secondary iname">box2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-boxes"></i>
                                <div class="small text-body-secondary iname">boxes</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-braces-asterisk"></i>
                                <div class="small text-body-secondary iname">braces-asterisk</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-braces"></i>
                                <div class="small text-body-secondary iname">braces</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bricks"></i>
                                <div class="small text-body-secondary iname">bricks</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-briefcase-fill"></i>
                                <div class="small text-body-secondary iname">briefcase-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-briefcase"></i>
                                <div class="small text-body-secondary iname">briefcase</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-alt-high-fill"></i>
                                <div class="small text-body-secondary iname">brightness-alt-high-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-alt-high"></i>
                                <div class="small text-body-secondary iname">brightness-alt-high</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-alt-low-fill"></i>
                                <div class="small text-body-secondary iname">brightness-alt-low-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-alt-low"></i>
                                <div class="small text-body-secondary iname">brightness-alt-low</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-high-fill"></i>
                                <div class="small text-body-secondary iname">brightness-high-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-high"></i>
                                <div class="small text-body-secondary iname">brightness-high</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-low-fill"></i>
                                <div class="small text-body-secondary iname">brightness-low-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brightness-low"></i>
                                <div class="small text-body-secondary iname">brightness-low</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-broadcast-pin"></i>
                                <div class="small text-body-secondary iname">broadcast-pin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-broadcast"></i>
                                <div class="small text-body-secondary iname">broadcast</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-browser-chrome"></i>
                                <div class="small text-body-secondary iname">browser-chrome</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-browser-edge"></i>
                                <div class="small text-body-secondary iname">browser-edge</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-browser-firefox"></i>
                                <div class="small text-body-secondary iname">browser-firefox</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-browser-safari"></i>
                                <div class="small text-body-secondary iname">browser-safari</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brush-fill"></i>
                                <div class="small text-body-secondary iname">brush-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-brush"></i>
                                <div class="small text-body-secondary iname">brush</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bucket-fill"></i>
                                <div class="small text-body-secondary iname">bucket-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bucket"></i>
                                <div class="small text-body-secondary iname">bucket</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bug-fill"></i>
                                <div class="small text-body-secondary iname">bug-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bug"></i>
                                <div class="small text-body-secondary iname">bug</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-building"></i>
                                <div class="small text-body-secondary iname">building</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-bullseye"></i>
                                <div class="small text-body-secondary iname">bullseye</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-c-circle-fill"></i>
                                <div class="small text-body-secondary iname">c-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-c-circle"></i>
                                <div class="small text-body-secondary iname">c-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-c-square-fill"></i>
                                <div class="small text-body-secondary iname">c-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-c-square"></i>
                                <div class="small text-body-secondary iname">c-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calculator-fill"></i>
                                <div class="small text-body-secondary iname">calculator-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calculator"></i>
                                <div class="small text-body-secondary iname">calculator</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-check-fill"></i>
                                <div class="small text-body-secondary iname">calendar-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-check"></i>
                                <div class="small text-body-secondary iname">calendar-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-date-fill"></i>
                                <div class="small text-body-secondary iname">calendar-date-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-date"></i>
                                <div class="small text-body-secondary iname">calendar-date</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-day-fill"></i>
                                <div class="small text-body-secondary iname">calendar-day-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-day"></i>
                                <div class="small text-body-secondary iname">calendar-day</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-event-fill"></i>
                                <div class="small text-body-secondary iname">calendar-event-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-event"></i>
                                <div class="small text-body-secondary iname">calendar-event</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-fill"></i>
                                <div class="small text-body-secondary iname">calendar-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-heart-fill"></i>
                                <div class="small text-body-secondary iname">calendar-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-heart"></i>
                                <div class="small text-body-secondary iname">calendar-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-minus-fill"></i>
                                <div class="small text-body-secondary iname">calendar-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-minus"></i>
                                <div class="small text-body-secondary iname">calendar-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-month-fill"></i>
                                <div class="small text-body-secondary iname">calendar-month-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-month"></i>
                                <div class="small text-body-secondary iname">calendar-month</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-plus-fill"></i>
                                <div class="small text-body-secondary iname">calendar-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-plus"></i>
                                <div class="small text-body-secondary iname">calendar-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-range-fill"></i>
                                <div class="small text-body-secondary iname">calendar-range-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-range"></i>
                                <div class="small text-body-secondary iname">calendar-range</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-week-fill"></i>
                                <div class="small text-body-secondary iname">calendar-week-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-week"></i>
                                <div class="small text-body-secondary iname">calendar-week</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-x-fill"></i>
                                <div class="small text-body-secondary iname">calendar-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar-x"></i>
                                <div class="small text-body-secondary iname">calendar-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar"></i>
                                <div class="small text-body-secondary iname">calendar</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-check-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-check"></i>
                                <div class="small text-body-secondary iname">calendar2-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-date-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-date-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-date"></i>
                                <div class="small text-body-secondary iname">calendar2-date</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-day-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-day-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-day"></i>
                                <div class="small text-body-secondary iname">calendar2-day</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-event-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-event-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-event"></i>
                                <div class="small text-body-secondary iname">calendar2-event</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-heart-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-heart"></i>
                                <div class="small text-body-secondary iname">calendar2-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-minus-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-minus"></i>
                                <div class="small text-body-secondary iname">calendar2-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-month-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-month-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-month"></i>
                                <div class="small text-body-secondary iname">calendar2-month</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-plus-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-plus"></i>
                                <div class="small text-body-secondary iname">calendar2-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-range-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-range-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-range"></i>
                                <div class="small text-body-secondary iname">calendar2-range</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-week-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-week-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-week"></i>
                                <div class="small text-body-secondary iname">calendar2-week</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-x-fill"></i>
                                <div class="small text-body-secondary iname">calendar2-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2-x"></i>
                                <div class="small text-body-secondary iname">calendar2-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar2"></i>
                                <div class="small text-body-secondary iname">calendar2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-event-fill"></i>
                                <div class="small text-body-secondary iname">calendar3-event-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-event"></i>
                                <div class="small text-body-secondary iname">calendar3-event</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-fill"></i>
                                <div class="small text-body-secondary iname">calendar3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-range-fill"></i>
                                <div class="small text-body-secondary iname">calendar3-range-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-range"></i>
                                <div class="small text-body-secondary iname">calendar3-range</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-week-fill"></i>
                                <div class="small text-body-secondary iname">calendar3-week-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3-week"></i>
                                <div class="small text-body-secondary iname">calendar3-week</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar3"></i>
                                <div class="small text-body-secondary iname">calendar3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar4-event"></i>
                                <div class="small text-body-secondary iname">calendar4-event</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar4-range"></i>
                                <div class="small text-body-secondary iname">calendar4-range</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar4-week"></i>
                                <div class="small text-body-secondary iname">calendar4-week</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-calendar4"></i>
                                <div class="small text-body-secondary iname">calendar4</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-fill"></i>
                                <div class="small text-body-secondary iname">camera-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-reels-fill"></i>
                                <div class="small text-body-secondary iname">camera-reels-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-reels"></i>
                                <div class="small text-body-secondary iname">camera-reels</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-video-fill"></i>
                                <div class="small text-body-secondary iname">camera-video-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-video-off-fill"></i>
                                <div class="small text-body-secondary iname">camera-video-off-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-video-off"></i>
                                <div class="small text-body-secondary iname">camera-video-off</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera-video"></i>
                                <div class="small text-body-secondary iname">camera-video</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera"></i>
                                <div class="small text-body-secondary iname">camera</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-camera2"></i>
                                <div class="small text-body-secondary iname">camera2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-capslock-fill"></i>
                                <div class="small text-body-secondary iname">capslock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-capslock"></i>
                                <div class="small text-body-secondary iname">capslock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-capsule-pill"></i>
                                <div class="small text-body-secondary iname">capsule-pill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-capsule"></i>
                                <div class="small text-body-secondary iname">capsule</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-car-front-fill"></i>
                                <div class="small text-body-secondary iname">car-front-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-car-front"></i>
                                <div class="small text-body-secondary iname">car-front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-checklist"></i>
                                <div class="small text-body-secondary iname">card-checklist</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-heading"></i>
                                <div class="small text-body-secondary iname">card-heading</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-image"></i>
                                <div class="small text-body-secondary iname">card-image</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-list"></i>
                                <div class="small text-body-secondary iname">card-list</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-card-text"></i>
                                <div class="small text-body-secondary iname">card-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-down-fill"></i>
                                <div class="small text-body-secondary iname">caret-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-down-square-fill"></i>
                                <div class="small text-body-secondary iname">caret-down-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-down-square"></i>
                                <div class="small text-body-secondary iname">caret-down-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-down"></i>
                                <div class="small text-body-secondary iname">caret-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-left-fill"></i>
                                <div class="small text-body-secondary iname">caret-left-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-left-square-fill"></i>
                                <div class="small text-body-secondary iname">caret-left-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-left-square"></i>
                                <div class="small text-body-secondary iname">caret-left-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-left"></i>
                                <div class="small text-body-secondary iname">caret-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-right-fill"></i>
                                <div class="small text-body-secondary iname">caret-right-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-right-square-fill"></i>
                                <div class="small text-body-secondary iname">caret-right-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-right-square"></i>
                                <div class="small text-body-secondary iname">caret-right-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-right"></i>
                                <div class="small text-body-secondary iname">caret-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-up-fill"></i>
                                <div class="small text-body-secondary iname">caret-up-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-up-square-fill"></i>
                                <div class="small text-body-secondary iname">caret-up-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-up-square"></i>
                                <div class="small text-body-secondary iname">caret-up-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-caret-up"></i>
                                <div class="small text-body-secondary iname">caret-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-check-fill"></i>
                                <div class="small text-body-secondary iname">cart-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-check"></i>
                                <div class="small text-body-secondary iname">cart-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-dash-fill"></i>
                                <div class="small text-body-secondary iname">cart-dash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-dash"></i>
                                <div class="small text-body-secondary iname">cart-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-fill"></i>
                                <div class="small text-body-secondary iname">cart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-plus-fill"></i>
                                <div class="small text-body-secondary iname">cart-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-plus"></i>
                                <div class="small text-body-secondary iname">cart-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-x-fill"></i>
                                <div class="small text-body-secondary iname">cart-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart-x"></i>
                                <div class="small text-body-secondary iname">cart-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart"></i>
                                <div class="small text-body-secondary iname">cart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart2"></i>
                                <div class="small text-body-secondary iname">cart2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart3"></i>
                                <div class="small text-body-secondary iname">cart3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cart4"></i>
                                <div class="small text-body-secondary iname">cart4</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cash-coin"></i>
                                <div class="small text-body-secondary iname">cash-coin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cash-stack"></i>
                                <div class="small text-body-secondary iname">cash-stack</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cash"></i>
                                <div class="small text-body-secondary iname">cash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cassette-fill"></i>
                                <div class="small text-body-secondary iname">cassette-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cassette"></i>
                                <div class="small text-body-secondary iname">cassette</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cast"></i>
                                <div class="small text-body-secondary iname">cast</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cc-circle-fill"></i>
                                <div class="small text-body-secondary iname">cc-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cc-circle"></i>
                                <div class="small text-body-secondary iname">cc-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cc-square-fill"></i>
                                <div class="small text-body-secondary iname">cc-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cc-square"></i>
                                <div class="small text-body-secondary iname">cc-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-dots-fill"></i>
                                <div class="small text-body-secondary iname">chat-dots-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-dots"></i>
                                <div class="small text-body-secondary iname">chat-dots</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-fill"></i>
                                <div class="small text-body-secondary iname">chat-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-heart-fill"></i>
                                <div class="small text-body-secondary iname">chat-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-heart"></i>
                                <div class="small text-body-secondary iname">chat-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-dots-fill"></i>
                                <div class="small text-body-secondary iname">chat-left-dots-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-dots"></i>
                                <div class="small text-body-secondary iname">chat-left-dots</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-fill"></i>
                                <div class="small text-body-secondary iname">chat-left-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-heart-fill"></i>
                                <div class="small text-body-secondary iname">chat-left-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-heart"></i>
                                <div class="small text-body-secondary iname">chat-left-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-quote-fill"></i>
                                <div class="small text-body-secondary iname">chat-left-quote-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-quote"></i>
                                <div class="small text-body-secondary iname">chat-left-quote</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-text-fill"></i>
                                <div class="small text-body-secondary iname">chat-left-text-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left-text"></i>
                                <div class="small text-body-secondary iname">chat-left-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-left"></i>
                                <div class="small text-body-secondary iname">chat-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-quote-fill"></i>
                                <div class="small text-body-secondary iname">chat-quote-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-quote"></i>
                                <div class="small text-body-secondary iname">chat-quote</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-dots-fill"></i>
                                <div class="small text-body-secondary iname">chat-right-dots-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-dots"></i>
                                <div class="small text-body-secondary iname">chat-right-dots</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-fill"></i>
                                <div class="small text-body-secondary iname">chat-right-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-heart-fill"></i>
                                <div class="small text-body-secondary iname">chat-right-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-heart"></i>
                                <div class="small text-body-secondary iname">chat-right-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-quote-fill"></i>
                                <div class="small text-body-secondary iname">chat-right-quote-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-quote"></i>
                                <div class="small text-body-secondary iname">chat-right-quote</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-text-fill"></i>
                                <div class="small text-body-secondary iname">chat-right-text-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right-text"></i>
                                <div class="small text-body-secondary iname">chat-right-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-right"></i>
                                <div class="small text-body-secondary iname">chat-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-dots-fill"></i>
                                <div class="small text-body-secondary iname">chat-square-dots-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-dots"></i>
                                <div class="small text-body-secondary iname">chat-square-dots</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-fill"></i>
                                <div class="small text-body-secondary iname">chat-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-heart-fill"></i>
                                <div class="small text-body-secondary iname">chat-square-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-heart"></i>
                                <div class="small text-body-secondary iname">chat-square-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-quote-fill"></i>
                                <div class="small text-body-secondary iname">chat-square-quote-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-quote"></i>
                                <div class="small text-body-secondary iname">chat-square-quote</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-text-fill"></i>
                                <div class="small text-body-secondary iname">chat-square-text-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square-text"></i>
                                <div class="small text-body-secondary iname">chat-square-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-square"></i>
                                <div class="small text-body-secondary iname">chat-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-text-fill"></i>
                                <div class="small text-body-secondary iname">chat-text-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat-text"></i>
                                <div class="small text-body-secondary iname">chat-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chat"></i>
                                <div class="small text-body-secondary iname">chat</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check-all"></i>
                                <div class="small text-body-secondary iname">check-all</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check-circle-fill"></i>
                                <div class="small text-body-secondary iname">check-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check-circle"></i>
                                <div class="small text-body-secondary iname">check-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check-lg"></i>
                                <div class="small text-body-secondary iname">check-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check-square-fill"></i>
                                <div class="small text-body-secondary iname">check-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check-square"></i>
                                <div class="small text-body-secondary iname">check-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check"></i>
                                <div class="small text-body-secondary iname">check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check2-all"></i>
                                <div class="small text-body-secondary iname">check2-all</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check2-circle"></i>
                                <div class="small text-body-secondary iname">check2-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check2-square"></i>
                                <div class="small text-body-secondary iname">check2-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-check2"></i>
                                <div class="small text-body-secondary iname">check2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-bar-contract"></i>
                                <div class="small text-body-secondary iname">chevron-bar-contract</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-bar-down"></i>
                                <div class="small text-body-secondary iname">chevron-bar-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-bar-expand"></i>
                                <div class="small text-body-secondary iname">chevron-bar-expand</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-bar-left"></i>
                                <div class="small text-body-secondary iname">chevron-bar-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-bar-right"></i>
                                <div class="small text-body-secondary iname">chevron-bar-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-bar-up"></i>
                                <div class="small text-body-secondary iname">chevron-bar-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-compact-down"></i>
                                <div class="small text-body-secondary iname">chevron-compact-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-compact-left"></i>
                                <div class="small text-body-secondary iname">chevron-compact-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-compact-right"></i>
                                <div class="small text-body-secondary iname">chevron-compact-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-compact-up"></i>
                                <div class="small text-body-secondary iname">chevron-compact-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-contract"></i>
                                <div class="small text-body-secondary iname">chevron-contract</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-double-down"></i>
                                <div class="small text-body-secondary iname">chevron-double-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-double-left"></i>
                                <div class="small text-body-secondary iname">chevron-double-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-double-right"></i>
                                <div class="small text-body-secondary iname">chevron-double-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-double-up"></i>
                                <div class="small text-body-secondary iname">chevron-double-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-down"></i>
                                <div class="small text-body-secondary iname">chevron-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-expand"></i>
                                <div class="small text-body-secondary iname">chevron-expand</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-left"></i>
                                <div class="small text-body-secondary iname">chevron-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-right"></i>
                                <div class="small text-body-secondary iname">chevron-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-chevron-up"></i>
                                <div class="small text-body-secondary iname">chevron-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-circle-fill"></i>
                                <div class="small text-body-secondary iname">circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-circle-half"></i>
                                <div class="small text-body-secondary iname">circle-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-circle-square"></i>
                                <div class="small text-body-secondary iname">circle-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-circle"></i>
                                <div class="small text-body-secondary iname">circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-check-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-check"></i>
                                <div class="small text-body-secondary iname">clipboard-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-data-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-data-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-data"></i>
                                <div class="small text-body-secondary iname">clipboard-data</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-heart-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-heart"></i>
                                <div class="small text-body-secondary iname">clipboard-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-minus-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-minus"></i>
                                <div class="small text-body-secondary iname">clipboard-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-plus-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-plus"></i>
                                <div class="small text-body-secondary iname">clipboard-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-pulse"></i>
                                <div class="small text-body-secondary iname">clipboard-pulse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-x-fill"></i>
                                <div class="small text-body-secondary iname">clipboard-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard-x"></i>
                                <div class="small text-body-secondary iname">clipboard-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard"></i>
                                <div class="small text-body-secondary iname">clipboard</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-check-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-check"></i>
                                <div class="small text-body-secondary iname">clipboard2-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-data-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-data-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-data"></i>
                                <div class="small text-body-secondary iname">clipboard2-data</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-heart-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-heart"></i>
                                <div class="small text-body-secondary iname">clipboard2-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-minus-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-minus"></i>
                                <div class="small text-body-secondary iname">clipboard2-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-plus-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-plus"></i>
                                <div class="small text-body-secondary iname">clipboard2-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-pulse-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-pulse-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-pulse"></i>
                                <div class="small text-body-secondary iname">clipboard2-pulse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-x-fill"></i>
                                <div class="small text-body-secondary iname">clipboard2-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2-x"></i>
                                <div class="small text-body-secondary iname">clipboard2-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clipboard2"></i>
                                <div class="small text-body-secondary iname">clipboard2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clock-fill"></i>
                                <div class="small text-body-secondary iname">clock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clock-history"></i>
                                <div class="small text-body-secondary iname">clock-history</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clock"></i>
                                <div class="small text-body-secondary iname">clock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-arrow-down-fill"></i>
                                <div class="small text-body-secondary iname">cloud-arrow-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-arrow-down"></i>
                                <div class="small text-body-secondary iname">cloud-arrow-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-arrow-up-fill"></i>
                                <div class="small text-body-secondary iname">cloud-arrow-up-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-arrow-up"></i>
                                <div class="small text-body-secondary iname">cloud-arrow-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-check-fill"></i>
                                <div class="small text-body-secondary iname">cloud-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-check"></i>
                                <div class="small text-body-secondary iname">cloud-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-download-fill"></i>
                                <div class="small text-body-secondary iname">cloud-download-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-download"></i>
                                <div class="small text-body-secondary iname">cloud-download</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-drizzle-fill"></i>
                                <div class="small text-body-secondary iname">cloud-drizzle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-drizzle"></i>
                                <div class="small text-body-secondary iname">cloud-drizzle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-fill"></i>
                                <div class="small text-body-secondary iname">cloud-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-fog-fill"></i>
                                <div class="small text-body-secondary iname">cloud-fog-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-fog"></i>
                                <div class="small text-body-secondary iname">cloud-fog</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-fog2-fill"></i>
                                <div class="small text-body-secondary iname">cloud-fog2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-fog2"></i>
                                <div class="small text-body-secondary iname">cloud-fog2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-hail-fill"></i>
                                <div class="small text-body-secondary iname">cloud-hail-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-hail"></i>
                                <div class="small text-body-secondary iname">cloud-hail</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-haze-fill"></i>
                                <div class="small text-body-secondary iname">cloud-haze-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-haze"></i>
                                <div class="small text-body-secondary iname">cloud-haze</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-haze2-fill"></i>
                                <div class="small text-body-secondary iname">cloud-haze2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-haze2"></i>
                                <div class="small text-body-secondary iname">cloud-haze2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-lightning-fill"></i>
                                <div class="small text-body-secondary iname">cloud-lightning-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-lightning-rain-fill"></i>
                                <div class="small text-body-secondary iname">cloud-lightning-rain-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-lightning-rain"></i>
                                <div class="small text-body-secondary iname">cloud-lightning-rain</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-lightning"></i>
                                <div class="small text-body-secondary iname">cloud-lightning</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-minus-fill"></i>
                                <div class="small text-body-secondary iname">cloud-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-minus"></i>
                                <div class="small text-body-secondary iname">cloud-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-moon-fill"></i>
                                <div class="small text-body-secondary iname">cloud-moon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-moon"></i>
                                <div class="small text-body-secondary iname">cloud-moon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-plus-fill"></i>
                                <div class="small text-body-secondary iname">cloud-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-plus"></i>
                                <div class="small text-body-secondary iname">cloud-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-rain-fill"></i>
                                <div class="small text-body-secondary iname">cloud-rain-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-rain-heavy-fill"></i>
                                <div class="small text-body-secondary iname">cloud-rain-heavy-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-rain-heavy"></i>
                                <div class="small text-body-secondary iname">cloud-rain-heavy</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-rain"></i>
                                <div class="small text-body-secondary iname">cloud-rain</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-slash-fill"></i>
                                <div class="small text-body-secondary iname">cloud-slash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-slash"></i>
                                <div class="small text-body-secondary iname">cloud-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-sleet-fill"></i>
                                <div class="small text-body-secondary iname">cloud-sleet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-sleet"></i>
                                <div class="small text-body-secondary iname">cloud-sleet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-snow-fill"></i>
                                <div class="small text-body-secondary iname">cloud-snow-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-snow"></i>
                                <div class="small text-body-secondary iname">cloud-snow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-sun-fill"></i>
                                <div class="small text-body-secondary iname">cloud-sun-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-sun"></i>
                                <div class="small text-body-secondary iname">cloud-sun</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-upload-fill"></i>
                                <div class="small text-body-secondary iname">cloud-upload-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud-upload"></i>
                                <div class="small text-body-secondary iname">cloud-upload</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloud"></i>
                                <div class="small text-body-secondary iname">cloud</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clouds-fill"></i>
                                <div class="small text-body-secondary iname">clouds-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-clouds"></i>
                                <div class="small text-body-secondary iname">clouds</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloudy-fill"></i>
                                <div class="small text-body-secondary iname">cloudy-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cloudy"></i>
                                <div class="small text-body-secondary iname">cloudy</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-code-slash"></i>
                                <div class="small text-body-secondary iname">code-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-code-square"></i>
                                <div class="small text-body-secondary iname">code-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-code"></i>
                                <div class="small text-body-secondary iname">code</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-coin"></i>
                                <div class="small text-body-secondary iname">coin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-collection-fill"></i>
                                <div class="small text-body-secondary iname">collection-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-collection-play-fill"></i>
                                <div class="small text-body-secondary iname">collection-play-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-collection-play"></i>
                                <div class="small text-body-secondary iname">collection-play</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-collection"></i>
                                <div class="small text-body-secondary iname">collection</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-columns-gap"></i>
                                <div class="small text-body-secondary iname">columns-gap</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-columns"></i>
                                <div class="small text-body-secondary iname">columns</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-command"></i>
                                <div class="small text-body-secondary iname">command</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-compass-fill"></i>
                                <div class="small text-body-secondary iname">compass-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-compass"></i>
                                <div class="small text-body-secondary iname">compass</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cone-striped"></i>
                                <div class="small text-body-secondary iname">cone-striped</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cone"></i>
                                <div class="small text-body-secondary iname">cone</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-controller"></i>
                                <div class="small text-body-secondary iname">controller</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cpu-fill"></i>
                                <div class="small text-body-secondary iname">cpu-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cpu"></i>
                                <div class="small text-body-secondary iname">cpu</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-credit-card-2-back-fill"></i>
                                <div class="small text-body-secondary iname">credit-card-2-back-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-credit-card-2-back"></i>
                                <div class="small text-body-secondary iname">credit-card-2-back</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-credit-card-2-front-fill"></i>
                                <div class="small text-body-secondary iname">credit-card-2-front-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-credit-card-2-front"></i>
                                <div class="small text-body-secondary iname">credit-card-2-front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-credit-card-fill"></i>
                                <div class="small text-body-secondary iname">credit-card-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-credit-card"></i>
                                <div class="small text-body-secondary iname">credit-card</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-crop"></i>
                                <div class="small text-body-secondary iname">crop</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cup-fill"></i>
                                <div class="small text-body-secondary iname">cup-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cup-hot-fill"></i>
                                <div class="small text-body-secondary iname">cup-hot-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cup-hot"></i>
                                <div class="small text-body-secondary iname">cup-hot</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cup-straw"></i>
                                <div class="small text-body-secondary iname">cup-straw</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cup"></i>
                                <div class="small text-body-secondary iname">cup</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-bitcoin"></i>
                                <div class="small text-body-secondary iname">currency-bitcoin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-dollar"></i>
                                <div class="small text-body-secondary iname">currency-dollar</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-euro"></i>
                                <div class="small text-body-secondary iname">currency-euro</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-exchange"></i>
                                <div class="small text-body-secondary iname">currency-exchange</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-pound"></i>
                                <div class="small text-body-secondary iname">currency-pound</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-rupee"></i>
                                <div class="small text-body-secondary iname">currency-rupee</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-currency-yen"></i>
                                <div class="small text-body-secondary iname">currency-yen</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cursor-fill"></i>
                                <div class="small text-body-secondary iname">cursor-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cursor-text"></i>
                                <div class="small text-body-secondary iname">cursor-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-cursor"></i>
                                <div class="small text-body-secondary iname">cursor</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-circle-dotted"></i>
                                <div class="small text-body-secondary iname">dash-circle-dotted</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-circle-fill"></i>
                                <div class="small text-body-secondary iname">dash-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-circle"></i>
                                <div class="small text-body-secondary iname">dash-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-lg"></i>
                                <div class="small text-body-secondary iname">dash-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-square-dotted"></i>
                                <div class="small text-body-secondary iname">dash-square-dotted</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-square-fill"></i>
                                <div class="small text-body-secondary iname">dash-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash-square"></i>
                                <div class="small text-body-secondary iname">dash-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dash"></i>
                                <div class="small text-body-secondary iname">dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-device-hdd-fill"></i>
                                <div class="small text-body-secondary iname">device-hdd-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-device-hdd"></i>
                                <div class="small text-body-secondary iname">device-hdd</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-device-ssd-fill"></i>
                                <div class="small text-body-secondary iname">device-ssd-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-device-ssd"></i>
                                <div class="small text-body-secondary iname">device-ssd</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diagram-2-fill"></i>
                                <div class="small text-body-secondary iname">diagram-2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diagram-2"></i>
                                <div class="small text-body-secondary iname">diagram-2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diagram-3-fill"></i>
                                <div class="small text-body-secondary iname">diagram-3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diagram-3"></i>
                                <div class="small text-body-secondary iname">diagram-3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diamond-fill"></i>
                                <div class="small text-body-secondary iname">diamond-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diamond-half"></i>
                                <div class="small text-body-secondary iname">diamond-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-diamond"></i>
                                <div class="small text-body-secondary iname">diamond</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-1-fill"></i>
                                <div class="small text-body-secondary iname">dice-1-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-1"></i>
                                <div class="small text-body-secondary iname">dice-1</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-2-fill"></i>
                                <div class="small text-body-secondary iname">dice-2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-2"></i>
                                <div class="small text-body-secondary iname">dice-2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-3-fill"></i>
                                <div class="small text-body-secondary iname">dice-3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-3"></i>
                                <div class="small text-body-secondary iname">dice-3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-4-fill"></i>
                                <div class="small text-body-secondary iname">dice-4-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-4"></i>
                                <div class="small text-body-secondary iname">dice-4</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-5-fill"></i>
                                <div class="small text-body-secondary iname">dice-5-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-5"></i>
                                <div class="small text-body-secondary iname">dice-5</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-6-fill"></i>
                                <div class="small text-body-secondary iname">dice-6-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dice-6"></i>
                                <div class="small text-body-secondary iname">dice-6</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-disc-fill"></i>
                                <div class="small text-body-secondary iname">disc-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-disc"></i>
                                <div class="small text-body-secondary iname">disc</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-discord"></i>
                                <div class="small text-body-secondary iname">discord</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-display-fill"></i>
                                <div class="small text-body-secondary iname">display-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-display"></i>
                                <div class="small text-body-secondary iname">display</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-displayport-fill"></i>
                                <div class="small text-body-secondary iname">displayport-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-displayport"></i>
                                <div class="small text-body-secondary iname">displayport</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-distribute-horizontal"></i>
                                <div class="small text-body-secondary iname">distribute-horizontal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-distribute-vertical"></i>
                                <div class="small text-body-secondary iname">distribute-vertical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-door-closed-fill"></i>
                                <div class="small text-body-secondary iname">door-closed-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-door-closed"></i>
                                <div class="small text-body-secondary iname">door-closed</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-door-open-fill"></i>
                                <div class="small text-body-secondary iname">door-open-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-door-open"></i>
                                <div class="small text-body-secondary iname">door-open</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dot"></i>
                                <div class="small text-body-secondary iname">dot</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-download"></i>
                                <div class="small text-body-secondary iname">download</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dpad-fill"></i>
                                <div class="small text-body-secondary iname">dpad-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dpad"></i>
                                <div class="small text-body-secondary iname">dpad</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dribbble"></i>
                                <div class="small text-body-secondary iname">dribbble</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-dropbox"></i>
                                <div class="small text-body-secondary iname">dropbox</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-droplet-fill"></i>
                                <div class="small text-body-secondary iname">droplet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-droplet-half"></i>
                                <div class="small text-body-secondary iname">droplet-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-droplet"></i>
                                <div class="small text-body-secondary iname">droplet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ear-fill"></i>
                                <div class="small text-body-secondary iname">ear-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ear"></i>
                                <div class="small text-body-secondary iname">ear</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-earbuds"></i>
                                <div class="small text-body-secondary iname">earbuds</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-easel-fill"></i>
                                <div class="small text-body-secondary iname">easel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-easel"></i>
                                <div class="small text-body-secondary iname">easel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-easel2-fill"></i>
                                <div class="small text-body-secondary iname">easel2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-easel2"></i>
                                <div class="small text-body-secondary iname">easel2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-easel3-fill"></i>
                                <div class="small text-body-secondary iname">easel3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-easel3"></i>
                                <div class="small text-body-secondary iname">easel3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-egg-fill"></i>
                                <div class="small text-body-secondary iname">egg-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-egg-fried"></i>
                                <div class="small text-body-secondary iname">egg-fried</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-egg"></i>
                                <div class="small text-body-secondary iname">egg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eject-fill"></i>
                                <div class="small text-body-secondary iname">eject-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eject"></i>
                                <div class="small text-body-secondary iname">eject</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-angry-fill"></i>
                                <div class="small text-body-secondary iname">emoji-angry-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-angry"></i>
                                <div class="small text-body-secondary iname">emoji-angry</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-dizzy-fill"></i>
                                <div class="small text-body-secondary iname">emoji-dizzy-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-dizzy"></i>
                                <div class="small text-body-secondary iname">emoji-dizzy</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-expressionless-fill"></i>
                                <div class="small text-body-secondary iname">emoji-expressionless-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-expressionless"></i>
                                <div class="small text-body-secondary iname">emoji-expressionless</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-frown-fill"></i>
                                <div class="small text-body-secondary iname">emoji-frown-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-frown"></i>
                                <div class="small text-body-secondary iname">emoji-frown</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-heart-eyes-fill"></i>
                                <div class="small text-body-secondary iname">emoji-heart-eyes-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-heart-eyes"></i>
                                <div class="small text-body-secondary iname">emoji-heart-eyes</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-kiss-fill"></i>
                                <div class="small text-body-secondary iname">emoji-kiss-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-kiss"></i>
                                <div class="small text-body-secondary iname">emoji-kiss</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-laughing-fill"></i>
                                <div class="small text-body-secondary iname">emoji-laughing-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-laughing"></i>
                                <div class="small text-body-secondary iname">emoji-laughing</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-neutral-fill"></i>
                                <div class="small text-body-secondary iname">emoji-neutral-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-neutral"></i>
                                <div class="small text-body-secondary iname">emoji-neutral</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-smile-fill"></i>
                                <div class="small text-body-secondary iname">emoji-smile-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-smile-upside-down-fill"></i>
                                <div class="small text-body-secondary iname">emoji-smile-upside-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-smile-upside-down"></i>
                                <div class="small text-body-secondary iname">emoji-smile-upside-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-smile"></i>
                                <div class="small text-body-secondary iname">emoji-smile</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-sunglasses-fill"></i>
                                <div class="small text-body-secondary iname">emoji-sunglasses-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-sunglasses"></i>
                                <div class="small text-body-secondary iname">emoji-sunglasses</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-wink-fill"></i>
                                <div class="small text-body-secondary iname">emoji-wink-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-emoji-wink"></i>
                                <div class="small text-body-secondary iname">emoji-wink</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-check-fill"></i>
                                <div class="small text-body-secondary iname">envelope-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-check"></i>
                                <div class="small text-body-secondary iname">envelope-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-dash-fill"></i>
                                <div class="small text-body-secondary iname">envelope-dash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-dash"></i>
                                <div class="small text-body-secondary iname">envelope-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-exclamation-fill"></i>
                                <div class="small text-body-secondary iname">envelope-exclamation-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-exclamation"></i>
                                <div class="small text-body-secondary iname">envelope-exclamation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-fill"></i>
                                <div class="small text-body-secondary iname">envelope-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-heart-fill"></i>
                                <div class="small text-body-secondary iname">envelope-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-heart"></i>
                                <div class="small text-body-secondary iname">envelope-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-open-fill"></i>
                                <div class="small text-body-secondary iname">envelope-open-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-open-heart-fill"></i>
                                <div class="small text-body-secondary iname">envelope-open-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-open-heart"></i>
                                <div class="small text-body-secondary iname">envelope-open-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-open"></i>
                                <div class="small text-body-secondary iname">envelope-open</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-paper-fill"></i>
                                <div class="small text-body-secondary iname">envelope-paper-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-paper-heart-fill"></i>
                                <div class="small text-body-secondary iname">envelope-paper-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-paper-heart"></i>
                                <div class="small text-body-secondary iname">envelope-paper-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-paper"></i>
                                <div class="small text-body-secondary iname">envelope-paper</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-plus-fill"></i>
                                <div class="small text-body-secondary iname">envelope-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-plus"></i>
                                <div class="small text-body-secondary iname">envelope-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-slash-fill"></i>
                                <div class="small text-body-secondary iname">envelope-slash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-slash"></i>
                                <div class="small text-body-secondary iname">envelope-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-x-fill"></i>
                                <div class="small text-body-secondary iname">envelope-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope-x"></i>
                                <div class="small text-body-secondary iname">envelope-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-envelope"></i>
                                <div class="small text-body-secondary iname">envelope</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eraser-fill"></i>
                                <div class="small text-body-secondary iname">eraser-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eraser"></i>
                                <div class="small text-body-secondary iname">eraser</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-escape"></i>
                                <div class="small text-body-secondary iname">escape</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ethernet"></i>
                                <div class="small text-body-secondary iname">ethernet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ev-station-fill"></i>
                                <div class="small text-body-secondary iname">ev-station-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ev-station"></i>
                                <div class="small text-body-secondary iname">ev-station</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-circle-fill"></i>
                                <div class="small text-body-secondary iname">exclamation-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-circle"></i>
                                <div class="small text-body-secondary iname">exclamation-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-diamond-fill"></i>
                                <div class="small text-body-secondary iname">exclamation-diamond-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-diamond"></i>
                                <div class="small text-body-secondary iname">exclamation-diamond</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-lg"></i>
                                <div class="small text-body-secondary iname">exclamation-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-octagon-fill"></i>
                                <div class="small text-body-secondary iname">exclamation-octagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-octagon"></i>
                                <div class="small text-body-secondary iname">exclamation-octagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-square-fill"></i>
                                <div class="small text-body-secondary iname">exclamation-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-square"></i>
                                <div class="small text-body-secondary iname">exclamation-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-triangle-fill"></i>
                                <div class="small text-body-secondary iname">exclamation-triangle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation-triangle"></i>
                                <div class="small text-body-secondary iname">exclamation-triangle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclamation"></i>
                                <div class="small text-body-secondary iname">exclamation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-exclude"></i>
                                <div class="small text-body-secondary iname">exclude</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-explicit-fill"></i>
                                <div class="small text-body-secondary iname">explicit-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-explicit"></i>
                                <div class="small text-body-secondary iname">explicit</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eye-fill"></i>
                                <div class="small text-body-secondary iname">eye-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eye-slash-fill"></i>
                                <div class="small text-body-secondary iname">eye-slash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eye-slash"></i>
                                <div class="small text-body-secondary iname">eye-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eye"></i>
                                <div class="small text-body-secondary iname">eye</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eyedropper"></i>
                                <div class="small text-body-secondary iname">eyedropper</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-eyeglasses"></i>
                                <div class="small text-body-secondary iname">eyeglasses</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-facebook"></i>
                                <div class="small text-body-secondary iname">facebook</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fan"></i>
                                <div class="small text-body-secondary iname">fan</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fast-forward-btn-fill"></i>
                                <div class="small text-body-secondary iname">fast-forward-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fast-forward-btn"></i>
                                <div class="small text-body-secondary iname">fast-forward-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fast-forward-circle-fill"></i>
                                <div class="small text-body-secondary iname">fast-forward-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fast-forward-circle"></i>
                                <div class="small text-body-secondary iname">fast-forward-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fast-forward-fill"></i>
                                <div class="small text-body-secondary iname">fast-forward-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fast-forward"></i>
                                <div class="small text-body-secondary iname">fast-forward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-arrow-down-fill"></i>
                                <div class="small text-body-secondary iname">file-arrow-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-arrow-down"></i>
                                <div class="small text-body-secondary iname">file-arrow-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-arrow-up-fill"></i>
                                <div class="small text-body-secondary iname">file-arrow-up-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-arrow-up"></i>
                                <div class="small text-body-secondary iname">file-arrow-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-bar-graph-fill"></i>
                                <div class="small text-body-secondary iname">file-bar-graph-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-bar-graph"></i>
                                <div class="small text-body-secondary iname">file-bar-graph</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-binary-fill"></i>
                                <div class="small text-body-secondary iname">file-binary-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-binary"></i>
                                <div class="small text-body-secondary iname">file-binary</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-break-fill"></i>
                                <div class="small text-body-secondary iname">file-break-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-break"></i>
                                <div class="small text-body-secondary iname">file-break</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-check-fill"></i>
                                <div class="small text-body-secondary iname">file-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-check"></i>
                                <div class="small text-body-secondary iname">file-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-code-fill"></i>
                                <div class="small text-body-secondary iname">file-code-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-code"></i>
                                <div class="small text-body-secondary iname">file-code</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-diff-fill"></i>
                                <div class="small text-body-secondary iname">file-diff-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-diff"></i>
                                <div class="small text-body-secondary iname">file-diff</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-arrow-down-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-arrow-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-arrow-down"></i>
                                <div class="small text-body-secondary iname">file-earmark-arrow-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-arrow-up-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-arrow-up-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-arrow-up"></i>
                                <div class="small text-body-secondary iname">file-earmark-arrow-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-bar-graph-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-bar-graph-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-bar-graph"></i>
                                <div class="small text-body-secondary iname">file-earmark-bar-graph</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-binary-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-binary-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-binary"></i>
                                <div class="small text-body-secondary iname">file-earmark-binary</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-break-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-break-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-break"></i>
                                <div class="small text-body-secondary iname">file-earmark-break</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-check-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-check"></i>
                                <div class="small text-body-secondary iname">file-earmark-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-code-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-code-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-code"></i>
                                <div class="small text-body-secondary iname">file-earmark-code</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-diff-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-diff-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-diff"></i>
                                <div class="small text-body-secondary iname">file-earmark-diff</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-easel-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-easel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-easel"></i>
                                <div class="small text-body-secondary iname">file-earmark-easel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-excel-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-excel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-excel"></i>
                                <div class="small text-body-secondary iname">file-earmark-excel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-font-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-font-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-font"></i>
                                <div class="small text-body-secondary iname">file-earmark-font</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-image-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-image-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-image"></i>
                                <div class="small text-body-secondary iname">file-earmark-image</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-lock-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-lock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-lock"></i>
                                <div class="small text-body-secondary iname">file-earmark-lock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-lock2-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-lock2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-lock2"></i>
                                <div class="small text-body-secondary iname">file-earmark-lock2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-medical-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-medical-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-medical"></i>
                                <div class="small text-body-secondary iname">file-earmark-medical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-minus-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-minus"></i>
                                <div class="small text-body-secondary iname">file-earmark-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-music-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-music-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-music"></i>
                                <div class="small text-body-secondary iname">file-earmark-music</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-pdf-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-pdf-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-pdf"></i>
                                <div class="small text-body-secondary iname">file-earmark-pdf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-person-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-person-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-person"></i>
                                <div class="small text-body-secondary iname">file-earmark-person</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-play-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-play-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-play"></i>
                                <div class="small text-body-secondary iname">file-earmark-play</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-plus-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-plus"></i>
                                <div class="small text-body-secondary iname">file-earmark-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-post-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-post-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-post"></i>
                                <div class="small text-body-secondary iname">file-earmark-post</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-ppt-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-ppt-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-ppt"></i>
                                <div class="small text-body-secondary iname">file-earmark-ppt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-richtext-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-richtext-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-richtext"></i>
                                <div class="small text-body-secondary iname">file-earmark-richtext</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-ruled-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-ruled-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-ruled"></i>
                                <div class="small text-body-secondary iname">file-earmark-ruled</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-slides-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-slides-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-slides"></i>
                                <div class="small text-body-secondary iname">file-earmark-slides</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-spreadsheet-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-spreadsheet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-spreadsheet"></i>
                                <div class="small text-body-secondary iname">file-earmark-spreadsheet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-text-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-text-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-text"></i>
                                <div class="small text-body-secondary iname">file-earmark-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-word-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-word-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-word"></i>
                                <div class="small text-body-secondary iname">file-earmark-word</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-x-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-x"></i>
                                <div class="small text-body-secondary iname">file-earmark-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-zip-fill"></i>
                                <div class="small text-body-secondary iname">file-earmark-zip-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark-zip"></i>
                                <div class="small text-body-secondary iname">file-earmark-zip</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-earmark"></i>
                                <div class="small text-body-secondary iname">file-earmark</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-easel-fill"></i>
                                <div class="small text-body-secondary iname">file-easel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-easel"></i>
                                <div class="small text-body-secondary iname">file-easel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-excel-fill"></i>
                                <div class="small text-body-secondary iname">file-excel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-excel"></i>
                                <div class="small text-body-secondary iname">file-excel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-fill"></i>
                                <div class="small text-body-secondary iname">file-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-font-fill"></i>
                                <div class="small text-body-secondary iname">file-font-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-font"></i>
                                <div class="small text-body-secondary iname">file-font</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-image-fill"></i>
                                <div class="small text-body-secondary iname">file-image-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-image"></i>
                                <div class="small text-body-secondary iname">file-image</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-lock-fill"></i>
                                <div class="small text-body-secondary iname">file-lock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-lock"></i>
                                <div class="small text-body-secondary iname">file-lock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-lock2-fill"></i>
                                <div class="small text-body-secondary iname">file-lock2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-lock2"></i>
                                <div class="small text-body-secondary iname">file-lock2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-medical-fill"></i>
                                <div class="small text-body-secondary iname">file-medical-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-medical"></i>
                                <div class="small text-body-secondary iname">file-medical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-minus-fill"></i>
                                <div class="small text-body-secondary iname">file-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-minus"></i>
                                <div class="small text-body-secondary iname">file-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-music-fill"></i>
                                <div class="small text-body-secondary iname">file-music-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-music"></i>
                                <div class="small text-body-secondary iname">file-music</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-pdf-fill"></i>
                                <div class="small text-body-secondary iname">file-pdf-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-pdf"></i>
                                <div class="small text-body-secondary iname">file-pdf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-person-fill"></i>
                                <div class="small text-body-secondary iname">file-person-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-person"></i>
                                <div class="small text-body-secondary iname">file-person</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-play-fill"></i>
                                <div class="small text-body-secondary iname">file-play-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-play"></i>
                                <div class="small text-body-secondary iname">file-play</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-plus-fill"></i>
                                <div class="small text-body-secondary iname">file-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-plus"></i>
                                <div class="small text-body-secondary iname">file-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-post-fill"></i>
                                <div class="small text-body-secondary iname">file-post-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-post"></i>
                                <div class="small text-body-secondary iname">file-post</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-ppt-fill"></i>
                                <div class="small text-body-secondary iname">file-ppt-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-ppt"></i>
                                <div class="small text-body-secondary iname">file-ppt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-richtext-fill"></i>
                                <div class="small text-body-secondary iname">file-richtext-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-richtext"></i>
                                <div class="small text-body-secondary iname">file-richtext</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-ruled-fill"></i>
                                <div class="small text-body-secondary iname">file-ruled-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-ruled"></i>
                                <div class="small text-body-secondary iname">file-ruled</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-slides-fill"></i>
                                <div class="small text-body-secondary iname">file-slides-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-slides"></i>
                                <div class="small text-body-secondary iname">file-slides</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-spreadsheet-fill"></i>
                                <div class="small text-body-secondary iname">file-spreadsheet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-spreadsheet"></i>
                                <div class="small text-body-secondary iname">file-spreadsheet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-text-fill"></i>
                                <div class="small text-body-secondary iname">file-text-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-text"></i>
                                <div class="small text-body-secondary iname">file-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-word-fill"></i>
                                <div class="small text-body-secondary iname">file-word-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-word"></i>
                                <div class="small text-body-secondary iname">file-word</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-x-fill"></i>
                                <div class="small text-body-secondary iname">file-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-x"></i>
                                <div class="small text-body-secondary iname">file-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-zip-fill"></i>
                                <div class="small text-body-secondary iname">file-zip-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file-zip"></i>
                                <div class="small text-body-secondary iname">file-zip</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-file"></i>
                                <div class="small text-body-secondary iname">file</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-files-alt"></i>
                                <div class="small text-body-secondary iname">files-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-files"></i>
                                <div class="small text-body-secondary iname">files</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-aac"></i>
                                <div class="small text-body-secondary iname">filetype-aac</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-ai"></i>
                                <div class="small text-body-secondary iname">filetype-ai</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-bmp"></i>
                                <div class="small text-body-secondary iname">filetype-bmp</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-cs"></i>
                                <div class="small text-body-secondary iname">filetype-cs</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-css"></i>
                                <div class="small text-body-secondary iname">filetype-css</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-csv"></i>
                                <div class="small text-body-secondary iname">filetype-csv</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-doc"></i>
                                <div class="small text-body-secondary iname">filetype-doc</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-docx"></i>
                                <div class="small text-body-secondary iname">filetype-docx</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-exe"></i>
                                <div class="small text-body-secondary iname">filetype-exe</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-gif"></i>
                                <div class="small text-body-secondary iname">filetype-gif</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-heic"></i>
                                <div class="small text-body-secondary iname">filetype-heic</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-html"></i>
                                <div class="small text-body-secondary iname">filetype-html</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-java"></i>
                                <div class="small text-body-secondary iname">filetype-java</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-jpg"></i>
                                <div class="small text-body-secondary iname">filetype-jpg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-js"></i>
                                <div class="small text-body-secondary iname">filetype-js</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-json"></i>
                                <div class="small text-body-secondary iname">filetype-json</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-jsx"></i>
                                <div class="small text-body-secondary iname">filetype-jsx</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-key"></i>
                                <div class="small text-body-secondary iname">filetype-key</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-m4p"></i>
                                <div class="small text-body-secondary iname">filetype-m4p</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-md"></i>
                                <div class="small text-body-secondary iname">filetype-md</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-mdx"></i>
                                <div class="small text-body-secondary iname">filetype-mdx</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-mov"></i>
                                <div class="small text-body-secondary iname">filetype-mov</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-mp3"></i>
                                <div class="small text-body-secondary iname">filetype-mp3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-mp4"></i>
                                <div class="small text-body-secondary iname">filetype-mp4</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-otf"></i>
                                <div class="small text-body-secondary iname">filetype-otf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-pdf"></i>
                                <div class="small text-body-secondary iname">filetype-pdf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-php"></i>
                                <div class="small text-body-secondary iname">filetype-php</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-png"></i>
                                <div class="small text-body-secondary iname">filetype-png</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-ppt"></i>
                                <div class="small text-body-secondary iname">filetype-ppt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-pptx"></i>
                                <div class="small text-body-secondary iname">filetype-pptx</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-psd"></i>
                                <div class="small text-body-secondary iname">filetype-psd</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-py"></i>
                                <div class="small text-body-secondary iname">filetype-py</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-raw"></i>
                                <div class="small text-body-secondary iname">filetype-raw</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-rb"></i>
                                <div class="small text-body-secondary iname">filetype-rb</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-sass"></i>
                                <div class="small text-body-secondary iname">filetype-sass</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-scss"></i>
                                <div class="small text-body-secondary iname">filetype-scss</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-sh"></i>
                                <div class="small text-body-secondary iname">filetype-sh</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-sql"></i>
                                <div class="small text-body-secondary iname">filetype-sql</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-svg"></i>
                                <div class="small text-body-secondary iname">filetype-svg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-tiff"></i>
                                <div class="small text-body-secondary iname">filetype-tiff</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-tsx"></i>
                                <div class="small text-body-secondary iname">filetype-tsx</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-ttf"></i>
                                <div class="small text-body-secondary iname">filetype-ttf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-txt"></i>
                                <div class="small text-body-secondary iname">filetype-txt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-wav"></i>
                                <div class="small text-body-secondary iname">filetype-wav</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-woff"></i>
                                <div class="small text-body-secondary iname">filetype-woff</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-xls"></i>
                                <div class="small text-body-secondary iname">filetype-xls</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-xlsx"></i>
                                <div class="small text-body-secondary iname">filetype-xlsx</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-xml"></i>
                                <div class="small text-body-secondary iname">filetype-xml</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filetype-yml"></i>
                                <div class="small text-body-secondary iname">filetype-yml</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-film"></i>
                                <div class="small text-body-secondary iname">film</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter-circle-fill"></i>
                                <div class="small text-body-secondary iname">filter-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter-circle"></i>
                                <div class="small text-body-secondary iname">filter-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter-left"></i>
                                <div class="small text-body-secondary iname">filter-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter-right"></i>
                                <div class="small text-body-secondary iname">filter-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter-square-fill"></i>
                                <div class="small text-body-secondary iname">filter-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter-square"></i>
                                <div class="small text-body-secondary iname">filter-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-filter"></i>
                                <div class="small text-body-secondary iname">filter</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fingerprint"></i>
                                <div class="small text-body-secondary iname">fingerprint</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fire"></i>
                                <div class="small text-body-secondary iname">fire</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-flag-fill"></i>
                                <div class="small text-body-secondary iname">flag-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-flag"></i>
                                <div class="small text-body-secondary iname">flag</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-flower1"></i>
                                <div class="small text-body-secondary iname">flower1</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-flower2"></i>
                                <div class="small text-body-secondary iname">flower2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-flower3"></i>
                                <div class="small text-body-secondary iname">flower3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-check"></i>
                                <div class="small text-body-secondary iname">folder-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-fill"></i>
                                <div class="small text-body-secondary iname">folder-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-minus"></i>
                                <div class="small text-body-secondary iname">folder-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-plus"></i>
                                <div class="small text-body-secondary iname">folder-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-symlink-fill"></i>
                                <div class="small text-body-secondary iname">folder-symlink-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-symlink"></i>
                                <div class="small text-body-secondary iname">folder-symlink</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder-x"></i>
                                <div class="small text-body-secondary iname">folder-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder"></i>
                                <div class="small text-body-secondary iname">folder</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder2-open"></i>
                                <div class="small text-body-secondary iname">folder2-open</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-folder2"></i>
                                <div class="small text-body-secondary iname">folder2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fonts"></i>
                                <div class="small text-body-secondary iname">fonts</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-forward-fill"></i>
                                <div class="small text-body-secondary iname">forward-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-forward"></i>
                                <div class="small text-body-secondary iname">forward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-front"></i>
                                <div class="small text-body-secondary iname">front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fuel-pump-diesel-fill"></i>
                                <div class="small text-body-secondary iname">fuel-pump-diesel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fuel-pump-diesel"></i>
                                <div class="small text-body-secondary iname">fuel-pump-diesel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fuel-pump-fill"></i>
                                <div class="small text-body-secondary iname">fuel-pump-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fuel-pump"></i>
                                <div class="small text-body-secondary iname">fuel-pump</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fullscreen-exit"></i>
                                <div class="small text-body-secondary iname">fullscreen-exit</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-fullscreen"></i>
                                <div class="small text-body-secondary iname">fullscreen</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-funnel-fill"></i>
                                <div class="small text-body-secondary iname">funnel-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-funnel"></i>
                                <div class="small text-body-secondary iname">funnel</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gear-fill"></i>
                                <div class="small text-body-secondary iname">gear-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gear-wide-connected"></i>
                                <div class="small text-body-secondary iname">gear-wide-connected</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gear-wide"></i>
                                <div class="small text-body-secondary iname">gear-wide</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gear"></i>
                                <div class="small text-body-secondary iname">gear</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gem"></i>
                                <div class="small text-body-secondary iname">gem</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gender-ambiguous"></i>
                                <div class="small text-body-secondary iname">gender-ambiguous</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gender-female"></i>
                                <div class="small text-body-secondary iname">gender-female</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gender-male"></i>
                                <div class="small text-body-secondary iname">gender-male</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gender-trans"></i>
                                <div class="small text-body-secondary iname">gender-trans</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-geo-alt-fill"></i>
                                <div class="small text-body-secondary iname">geo-alt-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-geo-alt"></i>
                                <div class="small text-body-secondary iname">geo-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-geo-fill"></i>
                                <div class="small text-body-secondary iname">geo-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-geo"></i>
                                <div class="small text-body-secondary iname">geo</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gift-fill"></i>
                                <div class="small text-body-secondary iname">gift-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gift"></i>
                                <div class="small text-body-secondary iname">gift</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-git"></i>
                                <div class="small text-body-secondary iname">git</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-github"></i>
                                <div class="small text-body-secondary iname">github</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-globe"></i>
                                <div class="small text-body-secondary iname">globe</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-globe2"></i>
                                <div class="small text-body-secondary iname">globe2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-google-play"></i>
                                <div class="small text-body-secondary iname">google-play</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-google"></i>
                                <div class="small text-body-secondary iname">google</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-gpu-card"></i>
                                <div class="small text-body-secondary iname">gpu-card</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-graph-down-arrow"></i>
                                <div class="small text-body-secondary iname">graph-down-arrow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-graph-down"></i>
                                <div class="small text-body-secondary iname">graph-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-graph-up-arrow"></i>
                                <div class="small text-body-secondary iname">graph-up-arrow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-graph-up"></i>
                                <div class="small text-body-secondary iname">graph-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-1x2-fill"></i>
                                <div class="small text-body-secondary iname">grid-1x2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-1x2"></i>
                                <div class="small text-body-secondary iname">grid-1x2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-3x2-gap-fill"></i>
                                <div class="small text-body-secondary iname">grid-3x2-gap-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-3x2-gap"></i>
                                <div class="small text-body-secondary iname">grid-3x2-gap</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-3x2"></i>
                                <div class="small text-body-secondary iname">grid-3x2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-3x3-gap-fill"></i>
                                <div class="small text-body-secondary iname">grid-3x3-gap-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-3x3-gap"></i>
                                <div class="small text-body-secondary iname">grid-3x3-gap</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-3x3"></i>
                                <div class="small text-body-secondary iname">grid-3x3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid-fill"></i>
                                <div class="small text-body-secondary iname">grid-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grid"></i>
                                <div class="small text-body-secondary iname">grid</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grip-horizontal"></i>
                                <div class="small text-body-secondary iname">grip-horizontal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-grip-vertical"></i>
                                <div class="small text-body-secondary iname">grip-vertical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-h-circle-fill"></i>
                                <div class="small text-body-secondary iname">h-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-h-circle"></i>
                                <div class="small text-body-secondary iname">h-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-h-square-fill"></i>
                                <div class="small text-body-secondary iname">h-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-h-square"></i>
                                <div class="small text-body-secondary iname">h-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hammer"></i>
                                <div class="small text-body-secondary iname">hammer</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-index-fill"></i>
                                <div class="small text-body-secondary iname">hand-index-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-index-thumb-fill"></i>
                                <div class="small text-body-secondary iname">hand-index-thumb-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-index-thumb"></i>
                                <div class="small text-body-secondary iname">hand-index-thumb</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-index"></i>
                                <div class="small text-body-secondary iname">hand-index</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-thumbs-down-fill"></i>
                                <div class="small text-body-secondary iname">hand-thumbs-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-thumbs-down"></i>
                                <div class="small text-body-secondary iname">hand-thumbs-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-thumbs-up-fill"></i>
                                <div class="small text-body-secondary iname">hand-thumbs-up-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hand-thumbs-up"></i>
                                <div class="small text-body-secondary iname">hand-thumbs-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-handbag-fill"></i>
                                <div class="small text-body-secondary iname">handbag-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-handbag"></i>
                                <div class="small text-body-secondary iname">handbag</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hash"></i>
                                <div class="small text-body-secondary iname">hash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-fill"></i>
                                <div class="small text-body-secondary iname">hdd-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-network-fill"></i>
                                <div class="small text-body-secondary iname">hdd-network-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-network"></i>
                                <div class="small text-body-secondary iname">hdd-network</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-rack-fill"></i>
                                <div class="small text-body-secondary iname">hdd-rack-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-rack"></i>
                                <div class="small text-body-secondary iname">hdd-rack</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-stack-fill"></i>
                                <div class="small text-body-secondary iname">hdd-stack-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd-stack"></i>
                                <div class="small text-body-secondary iname">hdd-stack</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdd"></i>
                                <div class="small text-body-secondary iname">hdd</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdmi-fill"></i>
                                <div class="small text-body-secondary iname">hdmi-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hdmi"></i>
                                <div class="small text-body-secondary iname">hdmi</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-headphones"></i>
                                <div class="small text-body-secondary iname">headphones</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-headset-vr"></i>
                                <div class="small text-body-secondary iname">headset-vr</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-headset"></i>
                                <div class="small text-body-secondary iname">headset</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heart-arrow"></i>
                                <div class="small text-body-secondary iname">heart-arrow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heart-fill"></i>
                                <div class="small text-body-secondary iname">heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heart-half"></i>
                                <div class="small text-body-secondary iname">heart-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heart-pulse-fill"></i>
                                <div class="small text-body-secondary iname">heart-pulse-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heart-pulse"></i>
                                <div class="small text-body-secondary iname">heart-pulse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heart"></i>
                                <div class="small text-body-secondary iname">heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heartbreak-fill"></i>
                                <div class="small text-body-secondary iname">heartbreak-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heartbreak"></i>
                                <div class="small text-body-secondary iname">heartbreak</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hearts"></i>
                                <div class="small text-body-secondary iname">hearts</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heptagon-fill"></i>
                                <div class="small text-body-secondary iname">heptagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heptagon-half"></i>
                                <div class="small text-body-secondary iname">heptagon-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-heptagon"></i>
                                <div class="small text-body-secondary iname">heptagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hexagon-fill"></i>
                                <div class="small text-body-secondary iname">hexagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hexagon-half"></i>
                                <div class="small text-body-secondary iname">hexagon-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hexagon"></i>
                                <div class="small text-body-secondary iname">hexagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hospital-fill"></i>
                                <div class="small text-body-secondary iname">hospital-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hospital"></i>
                                <div class="small text-body-secondary iname">hospital</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hourglass-bottom"></i>
                                <div class="small text-body-secondary iname">hourglass-bottom</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hourglass-split"></i>
                                <div class="small text-body-secondary iname">hourglass-split</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hourglass-top"></i>
                                <div class="small text-body-secondary iname">hourglass-top</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hourglass"></i>
                                <div class="small text-body-secondary iname">hourglass</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-house-door-fill"></i>
                                <div class="small text-body-secondary iname">house-door-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-house-door"></i>
                                <div class="small text-body-secondary iname">house-door</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-house-fill"></i>
                                <div class="small text-body-secondary iname">house-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-house-heart-fill"></i>
                                <div class="small text-body-secondary iname">house-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-house-heart"></i>
                                <div class="small text-body-secondary iname">house-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-house"></i>
                                <div class="small text-body-secondary iname">house</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hr"></i>
                                <div class="small text-body-secondary iname">hr</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hurricane"></i>
                                <div class="small text-body-secondary iname">hurricane</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-hypnotize"></i>
                                <div class="small text-body-secondary iname">hypnotize</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-image-alt"></i>
                                <div class="small text-body-secondary iname">image-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-image-fill"></i>
                                <div class="small text-body-secondary iname">image-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-image"></i>
                                <div class="small text-body-secondary iname">image</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-images"></i>
                                <div class="small text-body-secondary iname">images</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-inbox-fill"></i>
                                <div class="small text-body-secondary iname">inbox-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-inbox"></i>
                                <div class="small text-body-secondary iname">inbox</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-inboxes-fill"></i>
                                <div class="small text-body-secondary iname">inboxes-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-inboxes"></i>
                                <div class="small text-body-secondary iname">inboxes</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-incognito"></i>
                                <div class="small text-body-secondary iname">incognito</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-indent"></i>
                                <div class="small text-body-secondary iname">indent</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-infinity"></i>
                                <div class="small text-body-secondary iname">infinity</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-info-circle-fill"></i>
                                <div class="small text-body-secondary iname">info-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-info-circle"></i>
                                <div class="small text-body-secondary iname">info-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-info-lg"></i>
                                <div class="small text-body-secondary iname">info-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-info-square-fill"></i>
                                <div class="small text-body-secondary iname">info-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-info-square"></i>
                                <div class="small text-body-secondary iname">info-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-info"></i>
                                <div class="small text-body-secondary iname">info</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-input-cursor-text"></i>
                                <div class="small text-body-secondary iname">input-cursor-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-input-cursor"></i>
                                <div class="small text-body-secondary iname">input-cursor</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-instagram"></i>
                                <div class="small text-body-secondary iname">instagram</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-intersect"></i>
                                <div class="small text-body-secondary iname">intersect</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-album"></i>
                                <div class="small text-body-secondary iname">journal-album</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-arrow-down"></i>
                                <div class="small text-body-secondary iname">journal-arrow-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-arrow-up"></i>
                                <div class="small text-body-secondary iname">journal-arrow-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-bookmark-fill"></i>
                                <div class="small text-body-secondary iname">journal-bookmark-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-bookmark"></i>
                                <div class="small text-body-secondary iname">journal-bookmark</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-check"></i>
                                <div class="small text-body-secondary iname">journal-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-code"></i>
                                <div class="small text-body-secondary iname">journal-code</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-medical"></i>
                                <div class="small text-body-secondary iname">journal-medical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-minus"></i>
                                <div class="small text-body-secondary iname">journal-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-plus"></i>
                                <div class="small text-body-secondary iname">journal-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-richtext"></i>
                                <div class="small text-body-secondary iname">journal-richtext</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-text"></i>
                                <div class="small text-body-secondary iname">journal-text</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal-x"></i>
                                <div class="small text-body-secondary iname">journal-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journal"></i>
                                <div class="small text-body-secondary iname">journal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-journals"></i>
                                <div class="small text-body-secondary iname">journals</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-joystick"></i>
                                <div class="small text-body-secondary iname">joystick</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-justify-left"></i>
                                <div class="small text-body-secondary iname">justify-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-justify-right"></i>
                                <div class="small text-body-secondary iname">justify-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-justify"></i>
                                <div class="small text-body-secondary iname">justify</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-kanban-fill"></i>
                                <div class="small text-body-secondary iname">kanban-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-kanban"></i>
                                <div class="small text-body-secondary iname">kanban</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-key-fill"></i>
                                <div class="small text-body-secondary iname">key-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-key"></i>
                                <div class="small text-body-secondary iname">key</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-keyboard-fill"></i>
                                <div class="small text-body-secondary iname">keyboard-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-keyboard"></i>
                                <div class="small text-body-secondary iname">keyboard</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ladder"></i>
                                <div class="small text-body-secondary iname">ladder</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lamp-fill"></i>
                                <div class="small text-body-secondary iname">lamp-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lamp"></i>
                                <div class="small text-body-secondary iname">lamp</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-laptop-fill"></i>
                                <div class="small text-body-secondary iname">laptop-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-laptop"></i>
                                <div class="small text-body-secondary iname">laptop</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layer-backward"></i>
                                <div class="small text-body-secondary iname">layer-backward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layer-forward"></i>
                                <div class="small text-body-secondary iname">layer-forward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layers-fill"></i>
                                <div class="small text-body-secondary iname">layers-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layers-half"></i>
                                <div class="small text-body-secondary iname">layers-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layers"></i>
                                <div class="small text-body-secondary iname">layers</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-sidebar-inset-reverse"></i>
                                <div class="small text-body-secondary iname">layout-sidebar-inset-reverse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-sidebar-inset"></i>
                                <div class="small text-body-secondary iname">layout-sidebar-inset</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-sidebar-reverse"></i>
                                <div class="small text-body-secondary iname">layout-sidebar-reverse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-sidebar"></i>
                                <div class="small text-body-secondary iname">layout-sidebar</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-split"></i>
                                <div class="small text-body-secondary iname">layout-split</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-text-sidebar-reverse"></i>
                                <div class="small text-body-secondary iname">layout-text-sidebar-reverse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-text-sidebar"></i>
                                <div class="small text-body-secondary iname">layout-text-sidebar</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-text-window-reverse"></i>
                                <div class="small text-body-secondary iname">layout-text-window-reverse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-text-window"></i>
                                <div class="small text-body-secondary iname">layout-text-window</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-three-columns"></i>
                                <div class="small text-body-secondary iname">layout-three-columns</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-layout-wtf"></i>
                                <div class="small text-body-secondary iname">layout-wtf</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-life-preserver"></i>
                                <div class="small text-body-secondary iname">life-preserver</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightbulb-fill"></i>
                                <div class="small text-body-secondary iname">lightbulb-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightbulb-off-fill"></i>
                                <div class="small text-body-secondary iname">lightbulb-off-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightbulb-off"></i>
                                <div class="small text-body-secondary iname">lightbulb-off</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightbulb"></i>
                                <div class="small text-body-secondary iname">lightbulb</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightning-charge-fill"></i>
                                <div class="small text-body-secondary iname">lightning-charge-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightning-charge"></i>
                                <div class="small text-body-secondary iname">lightning-charge</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightning-fill"></i>
                                <div class="small text-body-secondary iname">lightning-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lightning"></i>
                                <div class="small text-body-secondary iname">lightning</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-line"></i>
                                <div class="small text-body-secondary iname">line</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-link-45deg"></i>
                                <div class="small text-body-secondary iname">link-45deg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-link"></i>
                                <div class="small text-body-secondary iname">link</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-linkedin"></i>
                                <div class="small text-body-secondary iname">linkedin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-check"></i>
                                <div class="small text-body-secondary iname">list-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-columns-reverse"></i>
                                <div class="small text-body-secondary iname">list-columns-reverse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-columns"></i>
                                <div class="small text-body-secondary iname">list-columns</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-nested"></i>
                                <div class="small text-body-secondary iname">list-nested</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-ol"></i>
                                <div class="small text-body-secondary iname">list-ol</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-stars"></i>
                                <div class="small text-body-secondary iname">list-stars</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-task"></i>
                                <div class="small text-body-secondary iname">list-task</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list-ul"></i>
                                <div class="small text-body-secondary iname">list-ul</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-list"></i>
                                <div class="small text-body-secondary iname">list</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lock-fill"></i>
                                <div class="small text-body-secondary iname">lock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lock"></i>
                                <div class="small text-body-secondary iname">lock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lungs-fill"></i>
                                <div class="small text-body-secondary iname">lungs-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-lungs"></i>
                                <div class="small text-body-secondary iname">lungs</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-magic"></i>
                                <div class="small text-body-secondary iname">magic</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-magnet-fill"></i>
                                <div class="small text-body-secondary iname">magnet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-magnet"></i>
                                <div class="small text-body-secondary iname">magnet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mailbox"></i>
                                <div class="small text-body-secondary iname">mailbox</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mailbox2"></i>
                                <div class="small text-body-secondary iname">mailbox2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-map-fill"></i>
                                <div class="small text-body-secondary iname">map-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-map"></i>
                                <div class="small text-body-secondary iname">map</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-markdown-fill"></i>
                                <div class="small text-body-secondary iname">markdown-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-markdown"></i>
                                <div class="small text-body-secondary iname">markdown</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mask"></i>
                                <div class="small text-body-secondary iname">mask</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mastodon"></i>
                                <div class="small text-body-secondary iname">mastodon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-medium"></i>
                                <div class="small text-body-secondary iname">medium</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-megaphone-fill"></i>
                                <div class="small text-body-secondary iname">megaphone-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-megaphone"></i>
                                <div class="small text-body-secondary iname">megaphone</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-memory"></i>
                                <div class="small text-body-secondary iname">memory</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-app-fill"></i>
                                <div class="small text-body-secondary iname">menu-app-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-app"></i>
                                <div class="small text-body-secondary iname">menu-app</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-button-fill"></i>
                                <div class="small text-body-secondary iname">menu-button-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-button-wide-fill"></i>
                                <div class="small text-body-secondary iname">menu-button-wide-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-button-wide"></i>
                                <div class="small text-body-secondary iname">menu-button-wide</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-button"></i>
                                <div class="small text-body-secondary iname">menu-button</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-down"></i>
                                <div class="small text-body-secondary iname">menu-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-menu-up"></i>
                                <div class="small text-body-secondary iname">menu-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-messenger"></i>
                                <div class="small text-body-secondary iname">messenger</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-meta"></i>
                                <div class="small text-body-secondary iname">meta</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mic-fill"></i>
                                <div class="small text-body-secondary iname">mic-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mic-mute-fill"></i>
                                <div class="small text-body-secondary iname">mic-mute-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mic-mute"></i>
                                <div class="small text-body-secondary iname">mic-mute</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mic"></i>
                                <div class="small text-body-secondary iname">mic</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-microsoft-teams"></i>
                                <div class="small text-body-secondary iname">microsoft-teams</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-microsoft"></i>
                                <div class="small text-body-secondary iname">microsoft</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-minecart-loaded"></i>
                                <div class="small text-body-secondary iname">minecart-loaded</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-minecart"></i>
                                <div class="small text-body-secondary iname">minecart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-modem-fill"></i>
                                <div class="small text-body-secondary iname">modem-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-modem"></i>
                                <div class="small text-body-secondary iname">modem</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-moisture"></i>
                                <div class="small text-body-secondary iname">moisture</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-moon-fill"></i>
                                <div class="small text-body-secondary iname">moon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-moon-stars-fill"></i>
                                <div class="small text-body-secondary iname">moon-stars-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-moon-stars"></i>
                                <div class="small text-body-secondary iname">moon-stars</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-moon"></i>
                                <div class="small text-body-secondary iname">moon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mortarboard-fill"></i>
                                <div class="small text-body-secondary iname">mortarboard-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mortarboard"></i>
                                <div class="small text-body-secondary iname">mortarboard</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-motherboard-fill"></i>
                                <div class="small text-body-secondary iname">motherboard-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-motherboard"></i>
                                <div class="small text-body-secondary iname">motherboard</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mouse-fill"></i>
                                <div class="small text-body-secondary iname">mouse-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mouse"></i>
                                <div class="small text-body-secondary iname">mouse</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mouse2-fill"></i>
                                <div class="small text-body-secondary iname">mouse2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mouse2"></i>
                                <div class="small text-body-secondary iname">mouse2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mouse3-fill"></i>
                                <div class="small text-body-secondary iname">mouse3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-mouse3"></i>
                                <div class="small text-body-secondary iname">mouse3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-music-note-beamed"></i>
                                <div class="small text-body-secondary iname">music-note-beamed</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-music-note-list"></i>
                                <div class="small text-body-secondary iname">music-note-list</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-music-note"></i>
                                <div class="small text-body-secondary iname">music-note</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-music-player-fill"></i>
                                <div class="small text-body-secondary iname">music-player-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-music-player"></i>
                                <div class="small text-body-secondary iname">music-player</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-newspaper"></i>
                                <div class="small text-body-secondary iname">newspaper</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-nintendo-switch"></i>
                                <div class="small text-body-secondary iname">nintendo-switch</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-node-minus-fill"></i>
                                <div class="small text-body-secondary iname">node-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-node-minus"></i>
                                <div class="small text-body-secondary iname">node-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-node-plus-fill"></i>
                                <div class="small text-body-secondary iname">node-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-node-plus"></i>
                                <div class="small text-body-secondary iname">node-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-nut-fill"></i>
                                <div class="small text-body-secondary iname">nut-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-nut"></i>
                                <div class="small text-body-secondary iname">nut</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-octagon-fill"></i>
                                <div class="small text-body-secondary iname">octagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-octagon-half"></i>
                                <div class="small text-body-secondary iname">octagon-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-octagon"></i>
                                <div class="small text-body-secondary iname">octagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-optical-audio-fill"></i>
                                <div class="small text-body-secondary iname">optical-audio-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-optical-audio"></i>
                                <div class="small text-body-secondary iname">optical-audio</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-option"></i>
                                <div class="small text-body-secondary iname">option</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-outlet"></i>
                                <div class="small text-body-secondary iname">outlet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-p-circle-fill"></i>
                                <div class="small text-body-secondary iname">p-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-p-circle"></i>
                                <div class="small text-body-secondary iname">p-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-p-square-fill"></i>
                                <div class="small text-body-secondary iname">p-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-p-square"></i>
                                <div class="small text-body-secondary iname">p-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-paint-bucket"></i>
                                <div class="small text-body-secondary iname">paint-bucket</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-palette-fill"></i>
                                <div class="small text-body-secondary iname">palette-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-palette"></i>
                                <div class="small text-body-secondary iname">palette</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-palette2"></i>
                                <div class="small text-body-secondary iname">palette2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-paperclip"></i>
                                <div class="small text-body-secondary iname">paperclip</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-paragraph"></i>
                                <div class="small text-body-secondary iname">paragraph</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pass-fill"></i>
                                <div class="small text-body-secondary iname">pass-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pass"></i>
                                <div class="small text-body-secondary iname">pass</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-check-fill"></i>
                                <div class="small text-body-secondary iname">patch-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-check"></i>
                                <div class="small text-body-secondary iname">patch-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-exclamation-fill"></i>
                                <div class="small text-body-secondary iname">patch-exclamation-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-exclamation"></i>
                                <div class="small text-body-secondary iname">patch-exclamation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-minus-fill"></i>
                                <div class="small text-body-secondary iname">patch-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-minus"></i>
                                <div class="small text-body-secondary iname">patch-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-plus-fill"></i>
                                <div class="small text-body-secondary iname">patch-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-plus"></i>
                                <div class="small text-body-secondary iname">patch-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-question-fill"></i>
                                <div class="small text-body-secondary iname">patch-question-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-patch-question"></i>
                                <div class="small text-body-secondary iname">patch-question</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pause-btn-fill"></i>
                                <div class="small text-body-secondary iname">pause-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pause-btn"></i>
                                <div class="small text-body-secondary iname">pause-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pause-circle-fill"></i>
                                <div class="small text-body-secondary iname">pause-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pause-circle"></i>
                                <div class="small text-body-secondary iname">pause-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pause-fill"></i>
                                <div class="small text-body-secondary iname">pause-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pause"></i>
                                <div class="small text-body-secondary iname">pause</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-paypal"></i>
                                <div class="small text-body-secondary iname">paypal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pc-display-horizontal"></i>
                                <div class="small text-body-secondary iname">pc-display-horizontal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pc-display"></i>
                                <div class="small text-body-secondary iname">pc-display</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pc-horizontal"></i>
                                <div class="small text-body-secondary iname">pc-horizontal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pc"></i>
                                <div class="small text-body-secondary iname">pc</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pci-card"></i>
                                <div class="small text-body-secondary iname">pci-card</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-peace-fill"></i>
                                <div class="small text-body-secondary iname">peace-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-peace"></i>
                                <div class="small text-body-secondary iname">peace</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pen-fill"></i>
                                <div class="small text-body-secondary iname">pen-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pen"></i>
                                <div class="small text-body-secondary iname">pen</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pencil-fill"></i>
                                <div class="small text-body-secondary iname">pencil-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pencil-square"></i>
                                <div class="small text-body-secondary iname">pencil-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pencil"></i>
                                <div class="small text-body-secondary iname">pencil</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pentagon-fill"></i>
                                <div class="small text-body-secondary iname">pentagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pentagon-half"></i>
                                <div class="small text-body-secondary iname">pentagon-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pentagon"></i>
                                <div class="small text-body-secondary iname">pentagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-people-fill"></i>
                                <div class="small text-body-secondary iname">people-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-people"></i>
                                <div class="small text-body-secondary iname">people</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-percent"></i>
                                <div class="small text-body-secondary iname">percent</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-badge-fill"></i>
                                <div class="small text-body-secondary iname">person-badge-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-badge"></i>
                                <div class="small text-body-secondary iname">person-badge</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-bounding-box"></i>
                                <div class="small text-body-secondary iname">person-bounding-box</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-check-fill"></i>
                                <div class="small text-body-secondary iname">person-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-check"></i>
                                <div class="small text-body-secondary iname">person-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-circle"></i>
                                <div class="small text-body-secondary iname">person-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-dash-fill"></i>
                                <div class="small text-body-secondary iname">person-dash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-dash"></i>
                                <div class="small text-body-secondary iname">person-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-fill"></i>
                                <div class="small text-body-secondary iname">person-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-heart"></i>
                                <div class="small text-body-secondary iname">person-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-hearts"></i>
                                <div class="small text-body-secondary iname">person-hearts</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-lines-fill"></i>
                                <div class="small text-body-secondary iname">person-lines-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-plus-fill"></i>
                                <div class="small text-body-secondary iname">person-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-plus"></i>
                                <div class="small text-body-secondary iname">person-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-rolodex"></i>
                                <div class="small text-body-secondary iname">person-rolodex</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-square"></i>
                                <div class="small text-body-secondary iname">person-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-video"></i>
                                <div class="small text-body-secondary iname">person-video</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-video2"></i>
                                <div class="small text-body-secondary iname">person-video2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-video3"></i>
                                <div class="small text-body-secondary iname">person-video3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-workspace"></i>
                                <div class="small text-body-secondary iname">person-workspace</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-x-fill"></i>
                                <div class="small text-body-secondary iname">person-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person-x"></i>
                                <div class="small text-body-secondary iname">person-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-person"></i>
                                <div class="small text-body-secondary iname">person</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone-fill"></i>
                                <div class="small text-body-secondary iname">phone-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone-flip"></i>
                                <div class="small text-body-secondary iname">phone-flip</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone-landscape-fill"></i>
                                <div class="small text-body-secondary iname">phone-landscape-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone-landscape"></i>
                                <div class="small text-body-secondary iname">phone-landscape</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone-vibrate-fill"></i>
                                <div class="small text-body-secondary iname">phone-vibrate-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone-vibrate"></i>
                                <div class="small text-body-secondary iname">phone-vibrate</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-phone"></i>
                                <div class="small text-body-secondary iname">phone</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pie-chart-fill"></i>
                                <div class="small text-body-secondary iname">pie-chart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pie-chart"></i>
                                <div class="small text-body-secondary iname">pie-chart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-piggy-bank-fill"></i>
                                <div class="small text-body-secondary iname">piggy-bank-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-piggy-bank"></i>
                                <div class="small text-body-secondary iname">piggy-bank</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pin-angle-fill"></i>
                                <div class="small text-body-secondary iname">pin-angle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pin-angle"></i>
                                <div class="small text-body-secondary iname">pin-angle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pin-fill"></i>
                                <div class="small text-body-secondary iname">pin-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pin-map-fill"></i>
                                <div class="small text-body-secondary iname">pin-map-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pin-map"></i>
                                <div class="small text-body-secondary iname">pin-map</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pin"></i>
                                <div class="small text-body-secondary iname">pin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pinterest"></i>
                                <div class="small text-body-secondary iname">pinterest</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pip-fill"></i>
                                <div class="small text-body-secondary iname">pip-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-pip"></i>
                                <div class="small text-body-secondary iname">pip</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-play-btn-fill"></i>
                                <div class="small text-body-secondary iname">play-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-play-btn"></i>
                                <div class="small text-body-secondary iname">play-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-play-circle-fill"></i>
                                <div class="small text-body-secondary iname">play-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-play-circle"></i>
                                <div class="small text-body-secondary iname">play-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-play-fill"></i>
                                <div class="small text-body-secondary iname">play-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-play"></i>
                                <div class="small text-body-secondary iname">play</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-playstation"></i>
                                <div class="small text-body-secondary iname">playstation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plug-fill"></i>
                                <div class="small text-body-secondary iname">plug-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plug"></i>
                                <div class="small text-body-secondary iname">plug</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plugin"></i>
                                <div class="small text-body-secondary iname">plugin</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-circle-dotted"></i>
                                <div class="small text-body-secondary iname">plus-circle-dotted</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-circle-fill"></i>
                                <div class="small text-body-secondary iname">plus-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-circle"></i>
                                <div class="small text-body-secondary iname">plus-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-lg"></i>
                                <div class="small text-body-secondary iname">plus-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-slash-minus"></i>
                                <div class="small text-body-secondary iname">plus-slash-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-square-dotted"></i>
                                <div class="small text-body-secondary iname">plus-square-dotted</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-square-fill"></i>
                                <div class="small text-body-secondary iname">plus-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus-square"></i>
                                <div class="small text-body-secondary iname">plus-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-plus"></i>
                                <div class="small text-body-secondary iname">plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postage-fill"></i>
                                <div class="small text-body-secondary iname">postage-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postage-heart-fill"></i>
                                <div class="small text-body-secondary iname">postage-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postage-heart"></i>
                                <div class="small text-body-secondary iname">postage-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postage"></i>
                                <div class="small text-body-secondary iname">postage</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postcard-fill"></i>
                                <div class="small text-body-secondary iname">postcard-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postcard-heart-fill"></i>
                                <div class="small text-body-secondary iname">postcard-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postcard-heart"></i>
                                <div class="small text-body-secondary iname">postcard-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-postcard"></i>
                                <div class="small text-body-secondary iname">postcard</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-power"></i>
                                <div class="small text-body-secondary iname">power</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-prescription"></i>
                                <div class="small text-body-secondary iname">prescription</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-prescription2"></i>
                                <div class="small text-body-secondary iname">prescription2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-printer-fill"></i>
                                <div class="small text-body-secondary iname">printer-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-printer"></i>
                                <div class="small text-body-secondary iname">printer</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-projector-fill"></i>
                                <div class="small text-body-secondary iname">projector-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-projector"></i>
                                <div class="small text-body-secondary iname">projector</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-puzzle-fill"></i>
                                <div class="small text-body-secondary iname">puzzle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-puzzle"></i>
                                <div class="small text-body-secondary iname">puzzle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-qr-code-scan"></i>
                                <div class="small text-body-secondary iname">qr-code-scan</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-qr-code"></i>
                                <div class="small text-body-secondary iname">qr-code</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-circle-fill"></i>
                                <div class="small text-body-secondary iname">question-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-circle"></i>
                                <div class="small text-body-secondary iname">question-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-diamond-fill"></i>
                                <div class="small text-body-secondary iname">question-diamond-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-diamond"></i>
                                <div class="small text-body-secondary iname">question-diamond</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-lg"></i>
                                <div class="small text-body-secondary iname">question-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-octagon-fill"></i>
                                <div class="small text-body-secondary iname">question-octagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-octagon"></i>
                                <div class="small text-body-secondary iname">question-octagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-square-fill"></i>
                                <div class="small text-body-secondary iname">question-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question-square"></i>
                                <div class="small text-body-secondary iname">question-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-question"></i>
                                <div class="small text-body-secondary iname">question</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-quora"></i>
                                <div class="small text-body-secondary iname">quora</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-quote"></i>
                                <div class="small text-body-secondary iname">quote</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-r-circle-fill"></i>
                                <div class="small text-body-secondary iname">r-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-r-circle"></i>
                                <div class="small text-body-secondary iname">r-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-r-square-fill"></i>
                                <div class="small text-body-secondary iname">r-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-r-square"></i>
                                <div class="small text-body-secondary iname">r-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-radioactive"></i>
                                <div class="small text-body-secondary iname">radioactive</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rainbow"></i>
                                <div class="small text-body-secondary iname">rainbow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-receipt-cutoff"></i>
                                <div class="small text-body-secondary iname">receipt-cutoff</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-receipt"></i>
                                <div class="small text-body-secondary iname">receipt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reception-0"></i>
                                <div class="small text-body-secondary iname">reception-0</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reception-1"></i>
                                <div class="small text-body-secondary iname">reception-1</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reception-2"></i>
                                <div class="small text-body-secondary iname">reception-2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reception-3"></i>
                                <div class="small text-body-secondary iname">reception-3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reception-4"></i>
                                <div class="small text-body-secondary iname">reception-4</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record-btn-fill"></i>
                                <div class="small text-body-secondary iname">record-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record-btn"></i>
                                <div class="small text-body-secondary iname">record-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record-circle-fill"></i>
                                <div class="small text-body-secondary iname">record-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record-circle"></i>
                                <div class="small text-body-secondary iname">record-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record-fill"></i>
                                <div class="small text-body-secondary iname">record-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record"></i>
                                <div class="small text-body-secondary iname">record</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record2-fill"></i>
                                <div class="small text-body-secondary iname">record2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-record2"></i>
                                <div class="small text-body-secondary iname">record2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-recycle"></i>
                                <div class="small text-body-secondary iname">recycle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reddit"></i>
                                <div class="small text-body-secondary iname">reddit</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-repeat-1"></i>
                                <div class="small text-body-secondary iname">repeat-1</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-repeat"></i>
                                <div class="small text-body-secondary iname">repeat</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reply-all-fill"></i>
                                <div class="small text-body-secondary iname">reply-all-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reply-all"></i>
                                <div class="small text-body-secondary iname">reply-all</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reply-fill"></i>
                                <div class="small text-body-secondary iname">reply-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-reply"></i>
                                <div class="small text-body-secondary iname">reply</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rewind-btn-fill"></i>
                                <div class="small text-body-secondary iname">rewind-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rewind-btn"></i>
                                <div class="small text-body-secondary iname">rewind-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rewind-circle-fill"></i>
                                <div class="small text-body-secondary iname">rewind-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rewind-circle"></i>
                                <div class="small text-body-secondary iname">rewind-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rewind-fill"></i>
                                <div class="small text-body-secondary iname">rewind-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rewind"></i>
                                <div class="small text-body-secondary iname">rewind</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-robot"></i>
                                <div class="small text-body-secondary iname">robot</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-router-fill"></i>
                                <div class="small text-body-secondary iname">router-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-router"></i>
                                <div class="small text-body-secondary iname">router</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rss-fill"></i>
                                <div class="small text-body-secondary iname">rss-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rss"></i>
                                <div class="small text-body-secondary iname">rss</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-rulers"></i>
                                <div class="small text-body-secondary iname">rulers</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-safe-fill"></i>
                                <div class="small text-body-secondary iname">safe-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-safe"></i>
                                <div class="small text-body-secondary iname">safe</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-safe2-fill"></i>
                                <div class="small text-body-secondary iname">safe2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-safe2"></i>
                                <div class="small text-body-secondary iname">safe2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-save-fill"></i>
                                <div class="small text-body-secondary iname">save-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-save"></i>
                                <div class="small text-body-secondary iname">save</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-save2-fill"></i>
                                <div class="small text-body-secondary iname">save2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-save2"></i>
                                <div class="small text-body-secondary iname">save2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-scissors"></i>
                                <div class="small text-body-secondary iname">scissors</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-screwdriver"></i>
                                <div class="small text-body-secondary iname">screwdriver</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sd-card-fill"></i>
                                <div class="small text-body-secondary iname">sd-card-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sd-card"></i>
                                <div class="small text-body-secondary iname">sd-card</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-search-heart-fill"></i>
                                <div class="small text-body-secondary iname">search-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-search-heart"></i>
                                <div class="small text-body-secondary iname">search-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-search"></i>
                                <div class="small text-body-secondary iname">search</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-segmented-nav"></i>
                                <div class="small text-body-secondary iname">segmented-nav</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-check-fill"></i>
                                <div class="small text-body-secondary iname">send-check-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-check"></i>
                                <div class="small text-body-secondary iname">send-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-dash-fill"></i>
                                <div class="small text-body-secondary iname">send-dash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-dash"></i>
                                <div class="small text-body-secondary iname">send-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-exclamation-fill"></i>
                                <div class="small text-body-secondary iname">send-exclamation-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-exclamation"></i>
                                <div class="small text-body-secondary iname">send-exclamation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-fill"></i>
                                <div class="small text-body-secondary iname">send-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-plus-fill"></i>
                                <div class="small text-body-secondary iname">send-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-plus"></i>
                                <div class="small text-body-secondary iname">send-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-slash-fill"></i>
                                <div class="small text-body-secondary iname">send-slash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-slash"></i>
                                <div class="small text-body-secondary iname">send-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-x-fill"></i>
                                <div class="small text-body-secondary iname">send-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send-x"></i>
                                <div class="small text-body-secondary iname">send-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-send"></i>
                                <div class="small text-body-secondary iname">send</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-server"></i>
                                <div class="small text-body-secondary iname">server</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-share-fill"></i>
                                <div class="small text-body-secondary iname">share-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-share"></i>
                                <div class="small text-body-secondary iname">share</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-check"></i>
                                <div class="small text-body-secondary iname">shield-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-exclamation"></i>
                                <div class="small text-body-secondary iname">shield-exclamation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-fill-check"></i>
                                <div class="small text-body-secondary iname">shield-fill-check</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-fill-exclamation"></i>
                                <div class="small text-body-secondary iname">shield-fill-exclamation</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-fill-minus"></i>
                                <div class="small text-body-secondary iname">shield-fill-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-fill-plus"></i>
                                <div class="small text-body-secondary iname">shield-fill-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-fill-x"></i>
                                <div class="small text-body-secondary iname">shield-fill-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-fill"></i>
                                <div class="small text-body-secondary iname">shield-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-lock-fill"></i>
                                <div class="small text-body-secondary iname">shield-lock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-lock"></i>
                                <div class="small text-body-secondary iname">shield-lock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-minus"></i>
                                <div class="small text-body-secondary iname">shield-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-plus"></i>
                                <div class="small text-body-secondary iname">shield-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-shaded"></i>
                                <div class="small text-body-secondary iname">shield-shaded</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-slash-fill"></i>
                                <div class="small text-body-secondary iname">shield-slash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-slash"></i>
                                <div class="small text-body-secondary iname">shield-slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield-x"></i>
                                <div class="small text-body-secondary iname">shield-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shield"></i>
                                <div class="small text-body-secondary iname">shield</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shift-fill"></i>
                                <div class="small text-body-secondary iname">shift-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shift"></i>
                                <div class="small text-body-secondary iname">shift</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shop-window"></i>
                                <div class="small text-body-secondary iname">shop-window</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shop"></i>
                                <div class="small text-body-secondary iname">shop</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-shuffle"></i>
                                <div class="small text-body-secondary iname">shuffle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-stop-fill"></i>
                                <div class="small text-body-secondary iname">sign-stop-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-stop-lights-fill"></i>
                                <div class="small text-body-secondary iname">sign-stop-lights-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-stop-lights"></i>
                                <div class="small text-body-secondary iname">sign-stop-lights</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-stop"></i>
                                <div class="small text-body-secondary iname">sign-stop</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-left-fill"></i>
                                <div class="small text-body-secondary iname">sign-turn-left-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-left"></i>
                                <div class="small text-body-secondary iname">sign-turn-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-right-fill"></i>
                                <div class="small text-body-secondary iname">sign-turn-right-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-right"></i>
                                <div class="small text-body-secondary iname">sign-turn-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-slight-left-fill"></i>
                                <div class="small text-body-secondary iname">sign-turn-slight-left-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-slight-left"></i>
                                <div class="small text-body-secondary iname">sign-turn-slight-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-slight-right-fill"></i>
                                <div class="small text-body-secondary iname">sign-turn-slight-right-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-turn-slight-right"></i>
                                <div class="small text-body-secondary iname">sign-turn-slight-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-yield-fill"></i>
                                <div class="small text-body-secondary iname">sign-yield-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sign-yield"></i>
                                <div class="small text-body-secondary iname">sign-yield</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signal"></i>
                                <div class="small text-body-secondary iname">signal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signpost-2-fill"></i>
                                <div class="small text-body-secondary iname">signpost-2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signpost-2"></i>
                                <div class="small text-body-secondary iname">signpost-2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signpost-fill"></i>
                                <div class="small text-body-secondary iname">signpost-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signpost-split-fill"></i>
                                <div class="small text-body-secondary iname">signpost-split-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signpost-split"></i>
                                <div class="small text-body-secondary iname">signpost-split</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-signpost"></i>
                                <div class="small text-body-secondary iname">signpost</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sim-fill"></i>
                                <div class="small text-body-secondary iname">sim-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sim"></i>
                                <div class="small text-body-secondary iname">sim</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-backward-btn-fill"></i>
                                <div class="small text-body-secondary iname">skip-backward-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-backward-btn"></i>
                                <div class="small text-body-secondary iname">skip-backward-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-backward-circle-fill"></i>
                                <div class="small text-body-secondary iname">skip-backward-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-backward-circle"></i>
                                <div class="small text-body-secondary iname">skip-backward-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-backward-fill"></i>
                                <div class="small text-body-secondary iname">skip-backward-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-backward"></i>
                                <div class="small text-body-secondary iname">skip-backward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-end-btn-fill"></i>
                                <div class="small text-body-secondary iname">skip-end-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-end-btn"></i>
                                <div class="small text-body-secondary iname">skip-end-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-end-circle-fill"></i>
                                <div class="small text-body-secondary iname">skip-end-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-end-circle"></i>
                                <div class="small text-body-secondary iname">skip-end-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-end-fill"></i>
                                <div class="small text-body-secondary iname">skip-end-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-end"></i>
                                <div class="small text-body-secondary iname">skip-end</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-forward-btn-fill"></i>
                                <div class="small text-body-secondary iname">skip-forward-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-forward-btn"></i>
                                <div class="small text-body-secondary iname">skip-forward-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-forward-circle-fill"></i>
                                <div class="small text-body-secondary iname">skip-forward-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-forward-circle"></i>
                                <div class="small text-body-secondary iname">skip-forward-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-forward-fill"></i>
                                <div class="small text-body-secondary iname">skip-forward-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-forward"></i>
                                <div class="small text-body-secondary iname">skip-forward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-start-btn-fill"></i>
                                <div class="small text-body-secondary iname">skip-start-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-start-btn"></i>
                                <div class="small text-body-secondary iname">skip-start-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-start-circle-fill"></i>
                                <div class="small text-body-secondary iname">skip-start-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-start-circle"></i>
                                <div class="small text-body-secondary iname">skip-start-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-start-fill"></i>
                                <div class="small text-body-secondary iname">skip-start-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skip-start"></i>
                                <div class="small text-body-secondary iname">skip-start</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-skype"></i>
                                <div class="small text-body-secondary iname">skype</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slack"></i>
                                <div class="small text-body-secondary iname">slack</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slash-circle-fill"></i>
                                <div class="small text-body-secondary iname">slash-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slash-circle"></i>
                                <div class="small text-body-secondary iname">slash-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slash-lg"></i>
                                <div class="small text-body-secondary iname">slash-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slash-square-fill"></i>
                                <div class="small text-body-secondary iname">slash-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slash-square"></i>
                                <div class="small text-body-secondary iname">slash-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-slash"></i>
                                <div class="small text-body-secondary iname">slash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sliders"></i>
                                <div class="small text-body-secondary iname">sliders</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sliders2-vertical"></i>
                                <div class="small text-body-secondary iname">sliders2-vertical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sliders2"></i>
                                <div class="small text-body-secondary iname">sliders2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-smartwatch"></i>
                                <div class="small text-body-secondary iname">smartwatch</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-snapchat"></i>
                                <div class="small text-body-secondary iname">snapchat</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-snow"></i>
                                <div class="small text-body-secondary iname">snow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-snow2"></i>
                                <div class="small text-body-secondary iname">snow2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-snow3"></i>
                                <div class="small text-body-secondary iname">snow3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-alpha-down-alt"></i>
                                <div class="small text-body-secondary iname">sort-alpha-down-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-alpha-down"></i>
                                <div class="small text-body-secondary iname">sort-alpha-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-alpha-up-alt"></i>
                                <div class="small text-body-secondary iname">sort-alpha-up-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-alpha-up"></i>
                                <div class="small text-body-secondary iname">sort-alpha-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-down-alt"></i>
                                <div class="small text-body-secondary iname">sort-down-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-down"></i>
                                <div class="small text-body-secondary iname">sort-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-numeric-down-alt"></i>
                                <div class="small text-body-secondary iname">sort-numeric-down-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-numeric-down"></i>
                                <div class="small text-body-secondary iname">sort-numeric-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-numeric-up-alt"></i>
                                <div class="small text-body-secondary iname">sort-numeric-up-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-numeric-up"></i>
                                <div class="small text-body-secondary iname">sort-numeric-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-up-alt"></i>
                                <div class="small text-body-secondary iname">sort-up-alt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sort-up"></i>
                                <div class="small text-body-secondary iname">sort-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-soundwave"></i>
                                <div class="small text-body-secondary iname">soundwave</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-speaker-fill"></i>
                                <div class="small text-body-secondary iname">speaker-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-speaker"></i>
                                <div class="small text-body-secondary iname">speaker</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-speedometer"></i>
                                <div class="small text-body-secondary iname">speedometer</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-speedometer2"></i>
                                <div class="small text-body-secondary iname">speedometer2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-spellcheck"></i>
                                <div class="small text-body-secondary iname">spellcheck</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-spotify"></i>
                                <div class="small text-body-secondary iname">spotify</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-square-fill"></i>
                                <div class="small text-body-secondary iname">square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-square-half"></i>
                                <div class="small text-body-secondary iname">square-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-square"></i>
                                <div class="small text-body-secondary iname">square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stack-overflow"></i>
                                <div class="small text-body-secondary iname">stack-overflow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stack"></i>
                                <div class="small text-body-secondary iname">stack</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-star-fill"></i>
                                <div class="small text-body-secondary iname">star-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-star-half"></i>
                                <div class="small text-body-secondary iname">star-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-star"></i>
                                <div class="small text-body-secondary iname">star</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stars"></i>
                                <div class="small text-body-secondary iname">stars</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-steam"></i>
                                <div class="small text-body-secondary iname">steam</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stickies-fill"></i>
                                <div class="small text-body-secondary iname">stickies-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stickies"></i>
                                <div class="small text-body-secondary iname">stickies</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sticky-fill"></i>
                                <div class="small text-body-secondary iname">sticky-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sticky"></i>
                                <div class="small text-body-secondary iname">sticky</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stop-btn-fill"></i>
                                <div class="small text-body-secondary iname">stop-btn-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stop-btn"></i>
                                <div class="small text-body-secondary iname">stop-btn</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stop-circle-fill"></i>
                                <div class="small text-body-secondary iname">stop-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stop-circle"></i>
                                <div class="small text-body-secondary iname">stop-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stop-fill"></i>
                                <div class="small text-body-secondary iname">stop-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stop"></i>
                                <div class="small text-body-secondary iname">stop</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stoplights-fill"></i>
                                <div class="small text-body-secondary iname">stoplights-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stoplights"></i>
                                <div class="small text-body-secondary iname">stoplights</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stopwatch-fill"></i>
                                <div class="small text-body-secondary iname">stopwatch-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-stopwatch"></i>
                                <div class="small text-body-secondary iname">stopwatch</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-strava"></i>
                                <div class="small text-body-secondary iname">strava</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-subtract"></i>
                                <div class="small text-body-secondary iname">subtract</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-club-fill"></i>
                                <div class="small text-body-secondary iname">suit-club-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-club"></i>
                                <div class="small text-body-secondary iname">suit-club</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-diamond-fill"></i>
                                <div class="small text-body-secondary iname">suit-diamond-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-diamond"></i>
                                <div class="small text-body-secondary iname">suit-diamond</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-heart-fill"></i>
                                <div class="small text-body-secondary iname">suit-heart-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-heart"></i>
                                <div class="small text-body-secondary iname">suit-heart</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-spade-fill"></i>
                                <div class="small text-body-secondary iname">suit-spade-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-suit-spade"></i>
                                <div class="small text-body-secondary iname">suit-spade</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sun-fill"></i>
                                <div class="small text-body-secondary iname">sun-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sun"></i>
                                <div class="small text-body-secondary iname">sun</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sunglasses"></i>
                                <div class="small text-body-secondary iname">sunglasses</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sunrise-fill"></i>
                                <div class="small text-body-secondary iname">sunrise-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sunrise"></i>
                                <div class="small text-body-secondary iname">sunrise</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sunset-fill"></i>
                                <div class="small text-body-secondary iname">sunset-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-sunset"></i>
                                <div class="small text-body-secondary iname">sunset</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-symmetry-horizontal"></i>
                                <div class="small text-body-secondary iname">symmetry-horizontal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-symmetry-vertical"></i>
                                <div class="small text-body-secondary iname">symmetry-vertical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-table"></i>
                                <div class="small text-body-secondary iname">table</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tablet-fill"></i>
                                <div class="small text-body-secondary iname">tablet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tablet-landscape-fill"></i>
                                <div class="small text-body-secondary iname">tablet-landscape-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tablet-landscape"></i>
                                <div class="small text-body-secondary iname">tablet-landscape</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tablet"></i>
                                <div class="small text-body-secondary iname">tablet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tag-fill"></i>
                                <div class="small text-body-secondary iname">tag-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tag"></i>
                                <div class="small text-body-secondary iname">tag</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tags-fill"></i>
                                <div class="small text-body-secondary iname">tags-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tags"></i>
                                <div class="small text-body-secondary iname">tags</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telegram"></i>
                                <div class="small text-body-secondary iname">telegram</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-fill"></i>
                                <div class="small text-body-secondary iname">telephone-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-forward-fill"></i>
                                <div class="small text-body-secondary iname">telephone-forward-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-forward"></i>
                                <div class="small text-body-secondary iname">telephone-forward</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-inbound-fill"></i>
                                <div class="small text-body-secondary iname">telephone-inbound-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-inbound"></i>
                                <div class="small text-body-secondary iname">telephone-inbound</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-minus-fill"></i>
                                <div class="small text-body-secondary iname">telephone-minus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-minus"></i>
                                <div class="small text-body-secondary iname">telephone-minus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-outbound-fill"></i>
                                <div class="small text-body-secondary iname">telephone-outbound-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-outbound"></i>
                                <div class="small text-body-secondary iname">telephone-outbound</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-plus-fill"></i>
                                <div class="small text-body-secondary iname">telephone-plus-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-plus"></i>
                                <div class="small text-body-secondary iname">telephone-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-x-fill"></i>
                                <div class="small text-body-secondary iname">telephone-x-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone-x"></i>
                                <div class="small text-body-secondary iname">telephone-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-telephone"></i>
                                <div class="small text-body-secondary iname">telephone</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-terminal-dash"></i>
                                <div class="small text-body-secondary iname">terminal-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-terminal-fill"></i>
                                <div class="small text-body-secondary iname">terminal-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-terminal-plus"></i>
                                <div class="small text-body-secondary iname">terminal-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-terminal-split"></i>
                                <div class="small text-body-secondary iname">terminal-split</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-terminal-x"></i>
                                <div class="small text-body-secondary iname">terminal-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-terminal"></i>
                                <div class="small text-body-secondary iname">terminal</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-text-center"></i>
                                <div class="small text-body-secondary iname">text-center</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-text-indent-left"></i>
                                <div class="small text-body-secondary iname">text-indent-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-text-indent-right"></i>
                                <div class="small text-body-secondary iname">text-indent-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-text-left"></i>
                                <div class="small text-body-secondary iname">text-left</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-text-paragraph"></i>
                                <div class="small text-body-secondary iname">text-paragraph</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-text-right"></i>
                                <div class="small text-body-secondary iname">text-right</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-textarea-resize"></i>
                                <div class="small text-body-secondary iname">textarea-resize</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-textarea-t"></i>
                                <div class="small text-body-secondary iname">textarea-t</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-textarea"></i>
                                <div class="small text-body-secondary iname">textarea</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thermometer-half"></i>
                                <div class="small text-body-secondary iname">thermometer-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thermometer-high"></i>
                                <div class="small text-body-secondary iname">thermometer-high</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thermometer-low"></i>
                                <div class="small text-body-secondary iname">thermometer-low</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thermometer-snow"></i>
                                <div class="small text-body-secondary iname">thermometer-snow</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thermometer-sun"></i>
                                <div class="small text-body-secondary iname">thermometer-sun</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thermometer"></i>
                                <div class="small text-body-secondary iname">thermometer</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-three-dots-vertical"></i>
                                <div class="small text-body-secondary iname">three-dots-vertical</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-three-dots"></i>
                                <div class="small text-body-secondary iname">three-dots</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thunderbolt-fill"></i>
                                <div class="small text-body-secondary iname">thunderbolt-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-thunderbolt"></i>
                                <div class="small text-body-secondary iname">thunderbolt</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ticket-detailed-fill"></i>
                                <div class="small text-body-secondary iname">ticket-detailed-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ticket-detailed"></i>
                                <div class="small text-body-secondary iname">ticket-detailed</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ticket-fill"></i>
                                <div class="small text-body-secondary iname">ticket-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ticket-perforated-fill"></i>
                                <div class="small text-body-secondary iname">ticket-perforated-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ticket-perforated"></i>
                                <div class="small text-body-secondary iname">ticket-perforated</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ticket"></i>
                                <div class="small text-body-secondary iname">ticket</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tiktok"></i>
                                <div class="small text-body-secondary iname">tiktok</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-toggle-off"></i>
                                <div class="small text-body-secondary iname">toggle-off</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-toggle-on"></i>
                                <div class="small text-body-secondary iname">toggle-on</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-toggle2-off"></i>
                                <div class="small text-body-secondary iname">toggle2-off</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-toggle2-on"></i>
                                <div class="small text-body-secondary iname">toggle2-on</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-toggles"></i>
                                <div class="small text-body-secondary iname">toggles</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-toggles2"></i>
                                <div class="small text-body-secondary iname">toggles2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tools"></i>
                                <div class="small text-body-secondary iname">tools</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tornado"></i>
                                <div class="small text-body-secondary iname">tornado</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-train-freight-front-fill"></i>
                                <div class="small text-body-secondary iname">train-freight-front-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-train-freight-front"></i>
                                <div class="small text-body-secondary iname">train-freight-front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-train-front-fill"></i>
                                <div class="small text-body-secondary iname">train-front-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-train-front"></i>
                                <div class="small text-body-secondary iname">train-front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-train-lightrail-front-fill"></i>
                                <div class="small text-body-secondary iname">train-lightrail-front-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-train-lightrail-front"></i>
                                <div class="small text-body-secondary iname">train-lightrail-front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-translate"></i>
                                <div class="small text-body-secondary iname">translate</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trash-fill"></i>
                                <div class="small text-body-secondary iname">trash-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trash"></i>
                                <div class="small text-body-secondary iname">trash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trash2-fill"></i>
                                <div class="small text-body-secondary iname">trash2-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trash2"></i>
                                <div class="small text-body-secondary iname">trash2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trash3-fill"></i>
                                <div class="small text-body-secondary iname">trash3-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trash3"></i>
                                <div class="small text-body-secondary iname">trash3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tree-fill"></i>
                                <div class="small text-body-secondary iname">tree-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tree"></i>
                                <div class="small text-body-secondary iname">tree</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-triangle-fill"></i>
                                <div class="small text-body-secondary iname">triangle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-triangle-half"></i>
                                <div class="small text-body-secondary iname">triangle-half</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-triangle"></i>
                                <div class="small text-body-secondary iname">triangle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trophy-fill"></i>
                                <div class="small text-body-secondary iname">trophy-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-trophy"></i>
                                <div class="small text-body-secondary iname">trophy</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tropical-storm"></i>
                                <div class="small text-body-secondary iname">tropical-storm</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-truck-flatbed"></i>
                                <div class="small text-body-secondary iname">truck-flatbed</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-truck-front-fill"></i>
                                <div class="small text-body-secondary iname">truck-front-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-truck-front"></i>
                                <div class="small text-body-secondary iname">truck-front</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-truck"></i>
                                <div class="small text-body-secondary iname">truck</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tsunami"></i>
                                <div class="small text-body-secondary iname">tsunami</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tv-fill"></i>
                                <div class="small text-body-secondary iname">tv-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-tv"></i>
                                <div class="small text-body-secondary iname">tv</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-twitch"></i>
                                <div class="small text-body-secondary iname">twitch</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-twitter"></i>
                                <div class="small text-body-secondary iname">twitter</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-bold"></i>
                                <div class="small text-body-secondary iname">type-bold</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-h1"></i>
                                <div class="small text-body-secondary iname">type-h1</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-h2"></i>
                                <div class="small text-body-secondary iname">type-h2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-h3"></i>
                                <div class="small text-body-secondary iname">type-h3</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-italic"></i>
                                <div class="small text-body-secondary iname">type-italic</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-strikethrough"></i>
                                <div class="small text-body-secondary iname">type-strikethrough</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type-underline"></i>
                                <div class="small text-body-secondary iname">type-underline</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-type"></i>
                                <div class="small text-body-secondary iname">type</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ubuntu"></i>
                                <div class="small text-body-secondary iname">ubuntu</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ui-checks-grid"></i>
                                <div class="small text-body-secondary iname">ui-checks-grid</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ui-checks"></i>
                                <div class="small text-body-secondary iname">ui-checks</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ui-radios-grid"></i>
                                <div class="small text-body-secondary iname">ui-radios-grid</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-ui-radios"></i>
                                <div class="small text-body-secondary iname">ui-radios</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-umbrella-fill"></i>
                                <div class="small text-body-secondary iname">umbrella-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-umbrella"></i>
                                <div class="small text-body-secondary iname">umbrella</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-unindent"></i>
                                <div class="small text-body-secondary iname">unindent</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-union"></i>
                                <div class="small text-body-secondary iname">union</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-unity"></i>
                                <div class="small text-body-secondary iname">unity</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-universal-access-circle"></i>
                                <div class="small text-body-secondary iname">universal-access-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-universal-access"></i>
                                <div class="small text-body-secondary iname">universal-access</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-unlock-fill"></i>
                                <div class="small text-body-secondary iname">unlock-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-unlock"></i>
                                <div class="small text-body-secondary iname">unlock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-upc-scan"></i>
                                <div class="small text-body-secondary iname">upc-scan</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-upc"></i>
                                <div class="small text-body-secondary iname">upc</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-upload"></i>
                                <div class="small text-body-secondary iname">upload</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-c-fill"></i>
                                <div class="small text-body-secondary iname">usb-c-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-c"></i>
                                <div class="small text-body-secondary iname">usb-c</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-drive-fill"></i>
                                <div class="small text-body-secondary iname">usb-drive-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-drive"></i>
                                <div class="small text-body-secondary iname">usb-drive</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-fill"></i>
                                <div class="small text-body-secondary iname">usb-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-micro-fill"></i>
                                <div class="small text-body-secondary iname">usb-micro-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-micro"></i>
                                <div class="small text-body-secondary iname">usb-micro</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-mini-fill"></i>
                                <div class="small text-body-secondary iname">usb-mini-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-mini"></i>
                                <div class="small text-body-secondary iname">usb-mini</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-plug-fill"></i>
                                <div class="small text-body-secondary iname">usb-plug-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-plug"></i>
                                <div class="small text-body-secondary iname">usb-plug</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb-symbol"></i>
                                <div class="small text-body-secondary iname">usb-symbol</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-usb"></i>
                                <div class="small text-body-secondary iname">usb</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-valentine"></i>
                                <div class="small text-body-secondary iname">valentine</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-valentine2"></i>
                                <div class="small text-body-secondary iname">valentine2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-vector-pen"></i>
                                <div class="small text-body-secondary iname">vector-pen</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-view-list"></i>
                                <div class="small text-body-secondary iname">view-list</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-view-stacked"></i>
                                <div class="small text-body-secondary iname">view-stacked</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-vimeo"></i>
                                <div class="small text-body-secondary iname">vimeo</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-vinyl-fill"></i>
                                <div class="small text-body-secondary iname">vinyl-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-vinyl"></i>
                                <div class="small text-body-secondary iname">vinyl</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-virus"></i>
                                <div class="small text-body-secondary iname">virus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-virus2"></i>
                                <div class="small text-body-secondary iname">virus2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-voicemail"></i>
                                <div class="small text-body-secondary iname">voicemail</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-down-fill"></i>
                                <div class="small text-body-secondary iname">volume-down-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-down"></i>
                                <div class="small text-body-secondary iname">volume-down</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-mute-fill"></i>
                                <div class="small text-body-secondary iname">volume-mute-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-mute"></i>
                                <div class="small text-body-secondary iname">volume-mute</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-off-fill"></i>
                                <div class="small text-body-secondary iname">volume-off-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-off"></i>
                                <div class="small text-body-secondary iname">volume-off</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-up-fill"></i>
                                <div class="small text-body-secondary iname">volume-up-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-volume-up"></i>
                                <div class="small text-body-secondary iname">volume-up</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-vr"></i>
                                <div class="small text-body-secondary iname">vr</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wallet-fill"></i>
                                <div class="small text-body-secondary iname">wallet-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wallet"></i>
                                <div class="small text-body-secondary iname">wallet</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wallet2"></i>
                                <div class="small text-body-secondary iname">wallet2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-watch"></i>
                                <div class="small text-body-secondary iname">watch</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-water"></i>
                                <div class="small text-body-secondary iname">water</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-webcam-fill"></i>
                                <div class="small text-body-secondary iname">webcam-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-webcam"></i>
                                <div class="small text-body-secondary iname">webcam</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wechat"></i>
                                <div class="small text-body-secondary iname">wechat</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-whatsapp"></i>
                                <div class="small text-body-secondary iname">whatsapp</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wifi-1"></i>
                                <div class="small text-body-secondary iname">wifi-1</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wifi-2"></i>
                                <div class="small text-body-secondary iname">wifi-2</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wifi-off"></i>
                                <div class="small text-body-secondary iname">wifi-off</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wifi"></i>
                                <div class="small text-body-secondary iname">wifi</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wind"></i>
                                <div class="small text-body-secondary iname">wind</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-dash"></i>
                                <div class="small text-body-secondary iname">window-dash</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-desktop"></i>
                                <div class="small text-body-secondary iname">window-desktop</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-dock"></i>
                                <div class="small text-body-secondary iname">window-dock</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-fullscreen"></i>
                                <div class="small text-body-secondary iname">window-fullscreen</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-plus"></i>
                                <div class="small text-body-secondary iname">window-plus</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-sidebar"></i>
                                <div class="small text-body-secondary iname">window-sidebar</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-split"></i>
                                <div class="small text-body-secondary iname">window-split</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-stack"></i>
                                <div class="small text-body-secondary iname">window-stack</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window-x"></i>
                                <div class="small text-body-secondary iname">window-x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-window"></i>
                                <div class="small text-body-secondary iname">window</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-windows"></i>
                                <div class="small text-body-secondary iname">windows</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wordpress"></i>
                                <div class="small text-body-secondary iname">wordpress</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wrench-adjustable-circle-fill"></i>
                                <div class="small text-body-secondary iname">wrench-adjustable-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wrench-adjustable-circle"></i>
                                <div class="small text-body-secondary iname">wrench-adjustable-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wrench-adjustable"></i>
                                <div class="small text-body-secondary iname">wrench-adjustable</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-wrench"></i>
                                <div class="small text-body-secondary iname">wrench</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-circle-fill"></i>
                                <div class="small text-body-secondary iname">x-circle-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-circle"></i>
                                <div class="small text-body-secondary iname">x-circle</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-diamond-fill"></i>
                                <div class="small text-body-secondary iname">x-diamond-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-diamond"></i>
                                <div class="small text-body-secondary iname">x-diamond</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-lg"></i>
                                <div class="small text-body-secondary iname">x-lg</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-octagon-fill"></i>
                                <div class="small text-body-secondary iname">x-octagon-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-octagon"></i>
                                <div class="small text-body-secondary iname">x-octagon</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-square-fill"></i>
                                <div class="small text-body-secondary iname">x-square-fill</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x-square"></i>
                                <div class="small text-body-secondary iname">x-square</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-x"></i>
                                <div class="small text-body-secondary iname">x</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-xbox"></i>
                                <div class="small text-body-secondary iname">xbox</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-yelp"></i>
                                <div class="small text-body-secondary iname">yelp</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-yin-yang"></i>
                                <div class="small text-body-secondary iname">yin-yang</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-youtube"></i>
                                <div class="small text-body-secondary iname">youtube</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-zoom-in"></i>
                                <div class="small text-body-secondary iname">zoom-in</div>
                              </div>
                              <div class="icon my-4">
                                <i class="fs-2 text-primary d-block mb-2 bi bi-zoom-out"></i>
                                <div class="small text-body-secondary iname">zoom-out</div>
                              </div>
                            </div>
                           </div>
                         </div>
                        </div>
                    </div>
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
        
        <!--////////////Theme Core scripts Start/////////////////-->
        <script src="../../JS/Dashboard/theme.bundle.min.js"></script>

        <!--////////////Theme Core scripts End/////////////////-->


        <!--Search email -->
    <script src="../../Assets/Dashboard/vendor/list.min.js"></script>
        <script>
            var options = {
                valueNames: ['iname','label']
            };

            var iconList = new List('iconsList', options);

        </script>
    </body>

</html>
