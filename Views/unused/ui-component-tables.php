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
                              <li class="sidebar-item"><a class="sidebar-link @@component_icons_bootstrap_active" href="ui-component-icons-bootstrap.php">Bootstrap
                                  Icons <span class="badge bg-info ms-2">1.10.3</span></a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_progress_active" href="ui-component-progress.php">Progress</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_spinners_active" href="ui-component-spinners.php">Spinners</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_swiper_active" href="ui-component-swiper-slider.php">Swiper Slider</a> </li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_typo_active" href="ui-component-typography.php">Typography</a></li>
                              <li class="sidebar-item"><a class="sidebar-link @@component_toast_active" href="ui-component-toast.php">Toast</a></li>
                              <li class="sidebar-item"><a class="sidebar-link active" href="ui-component-tables.php">Tables</a></li>
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
                                    <h3 class="mb-2">Bootstrap tables</h3>

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item active">UI Components</li>
                                            <li class="breadcrumb-item active">Bootstrap Tables</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//Page Toolbar End//-->

                    <!--//Page content//-->
                    <div class="content pt-3 px-3 px-lg-6 d-flex flex-column-fluid">
                        <div class="container-fluid px-0">
                           <div class="row">
                            <div class="col-12">
                                  <!--Begin::table card-->
                                  <div class="card table-card table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Table components</h5>
                                    </div>
                                    <div class="card-body">
                                        <!--Begin:Item Avatar-->
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/media/avatars/01.jpg" class="avatar sm rounded-circle" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Jason Roy</h6>
                                                <small class="text-body-secondary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e545f4d51507e4c5147105d5153">[email&#160;protected]</a></small>
                                            </div>
                                        </div>
                                         <!--/ends:Item Avatar-->
                                         <!--Begin:Project info-->
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/media/900x600/10.jpg" class="avatar lg rounded-3" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Landing page in Figma</h6>
                                                <small class="text-body-secondary">Maruti</small>
                                            </div>
                                        </div>
                                         <!--/ends:Project info-->
                                         <hr class="my-5">

                                         <!--Begin:Table row action dropdown-->
                                        <div class="dropdown">
                                            <a href="#" class="size-40 d-flex align-items-center justify-content-center rounded-circle btn btn-outline-secondary p-0" data-bs-toggle="dropdown">
                                                <span class="material-symbols-rounded">more_vert</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#!" class="dropdown-item">Add to contacts</a>
                                                <a href="#!" class="dropdown-item">Block from list</a>
                                                <a href="#!" class="dropdown-item">Share to a friend</a>
                                            </div>
                                        </div>
                                         <!--/ends:Table row action dropdown-->
                                         <hr class="my-5">
                                         <!--Begin:Table Action inline-->
                                        <div class="d-flex align-items-center">
                                            <a href="#!" data-tippy-content="View user">
                                                <span class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                            </a>
                                            <!--Divider line-->
                                            <span class="border-start mx-2 d-block height-20"></span>
                                            <a href="#!" data-tippy-content="Edit user">
                                                <span class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                            </a>
                                             <!--Divider line-->
                                             <span class="border-start mx-2 d-block height-20"></span>
                                            <a href="#!" data-tippy-content="Delete user">
                                                <span class="material-symbols-rounded align-middle fs-5 text-body">delete</span>
                                            </a>
                                        </div>
                                         <!--/ends:Table Action inline-->
                                         <hr class="my-5">
                                         <!--Begin:Table Switch & Check-->
                                        <div class="d-flex align-items-center">
                                            <div class="form-check form-switch me-4">
                                                <input class="form-check-input" type="checkbox" role="switch" id="tdCheckSwitch">
                                                <label class="form-check-label" for="tdCheckSwitch"></label>
                                              </div>
                                              <br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="tdCheck">
                                                <label class="form-check-label" for="tdCheck"></label>
                                              </div>
                                        </div>
                                         <!--/ends:Table Switch & Check-->
                                         <hr class="my-5">
                                         <!--Begin:Table Progress for row-->
                                        <div class="width-120">
                                            <div class="progress height-5 rounded-pill">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated rounded-pill" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                              </div>
                                        </div>
                                         <!--/ends:Table Progress for row-->
                                         <hr class="my-5">
                                          <!--Begin:Table users group-->
                                        <div class="">
                                            <div class="avatar-group d-none d-lg-flex">
                                                <a href="#!.php" class="avatar-group-item sm avatar rounded-circle" data-tippy-placement="top" data-tippy-content="Gabriel H">
                                                  <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                                                </a>
                                                <a href="#!.php" class="avatar-group-item sm avatar rounded-circle" data-tippy-placement="top" data-tippy-content="Emily Doe">
                                                  <img src="assets/media/avatars/02.jpg" alt="..." class="avatar-group-img rounded-circle">
                                                </a>
                                                <a href="#!.php" class="avatar-group-item sm avatar rounded-circle" data-tippy-placement="top" data-tippy-content="Adam Howkins">
                                                  <img src="assets/media/avatars/03.jpg" alt="..." class="avatar-group-img rounded-circle">
                                                </a>
                                                <a href="#!.php" class="avatar-group-item sm avatar rounded-circle" data-tippy-placement="top" data-tippy-content="Gabriel H">
                                                    <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                                                  </a>
                                              </div>
                                        </div>
                                         <!--/ends:Table users group-->

                                         <hr class="my-5">
                                          <!--Begin:Table badges for status-->
                                        <div class="mb-2">
                                            <span class="badge bg-primary me-1">In Progress</span>
                                            <span class="badge bg-warning me-1">On hold</span>
                                            <span class="badge bg-success me-1">Active</span>
                                            <span class="badge bg-danger me-1">Inactive</span>
                                        </div>
                                        <div class="mb-2">
                                            <span class="badge fs-6 bg-primary me-1">In Progress</span>
                                            <span class="badge fs-6 bg-warning me-1">On hold</span>
                                            <span class="badge fs-6 bg-success me-1">Active</span>
                                            <span class="badge fs-6 bg-danger me-1">Inactive</span>
                                        </div>
                                         <!--/ends:Table badges for status-->
                                        <hr class="my-5">
                                        <h5>Example</h5>
                                    </div>
                                    
                                   <div class="table-responsive table-card table-nowrap">
                                    <table class="table align-middle table-hover mb-0">
                                        <thead>
                                          <tr>
                                            <th>Id</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            <th>
                                                Working Hours
                                            </th>
                                            <th class="text-end">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>#6343</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/media/avatars/01.jpg" class="avatar sm rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Jason Roy</h6>
                                                        <small class="text-body-secondary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f757e6c70715f6d7066317c7072">[email&#160;protected]</a></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success fs-6">Active</span>
                                            </td>
                                            <td>
                                                <div class="width-120">
                                                    <div class="progress height-5 rounded-pill">
                                                        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated rounded-pill" role="progressbar" aria-label="Animated striped example" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%"></div>
                                                      </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <a href="#!" data-tippy-content="View user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Edit user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                                    </a>
                                                     <!--Divider line-->
                                                     <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Delete user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>#3432</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/media/avatars/02.jpg" class="avatar sm rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Monika Bedi</h6>
                                                        <small class="text-body-secondary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="39545657505258795b5c5d50175a5654">[email&#160;protected]</a></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger fs-6">Inactive</span>
                                            </td>
                                            <td>
                                                <div class="width-120">
                                                    <div class="progress height-5 rounded-pill">
                                                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated rounded-pill" role="progressbar" aria-label="Animated striped example" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%"></div>
                                                      </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <a href="#!" data-tippy-content="View user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Edit user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                                    </a>
                                                     <!--Divider line-->
                                                     <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Delete user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>#2342</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/media/avatars/03.jpg" class="avatar sm rounded-circle" alt="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-0">Mark Otto</h6>
                                                        <small class="text-body-secondary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6bbb7a4bd96b9a2a2b9f8b5b9bb">[email&#160;protected]</a></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success fs-6">Active</span>
                                            </td>
                                            <td>
                                                <div class="width-120">
                                                    <div class="progress height-5 rounded-pill">
                                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated rounded-pill" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                      </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <a href="#!" data-tippy-content="View user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">visibility</span>
                                                    </a>
                                                    <!--Divider line-->
                                                    <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Edit user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">edit</span>
                                                    </a>
                                                     <!--Divider line-->
                                                     <span class="border-start mx-2 d-block height-20"></span>
                                                    <a href="#!" data-tippy-content="Delete user">
                                                        <span class="material-symbols-rounded align-middle fs-5 text-body">delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                   </div>
                                </div>
                                <!--/ends::table card-->


                                <!--Begin::table card-->
                                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Basic table example</h5>
                                    </div>
                                    <table class="table mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                 <!--Begin::table card-->
                                 <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Striped table example</h5>
                                    </div>
                                    <table class="table table-striped mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->
                                <!--Begin::table card-->
                                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Primary table example</h5>
                                    </div>
                                    <table class="table table-hover table-primary mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                <!--Begin::table card-->
                                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Success table example</h5>
                                    </div>
                                    <table class="table table-hover table-success mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                 <!--Begin::table card-->
                                 <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Light table example</h5>
                                    </div>
                                    <table class="table table-hover table-light mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                  <!--Begin::table card-->
                                  <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Dark table example</h5>
                                    </div>
                                    <table class="table table-hover table-dark mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->


                                 <!--Begin::table card-->
                                 <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Info table example</h5>
                                    </div>
                                    <table class="table table-hover table-info mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->
                                <!--Begin::table card-->
                                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Danger table example</h5>
                                    </div>
                                    <table class="table table-hover table-danger mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                <!--Begin::table card-->
                                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Warning table example</h5>
                                    </div>
                                    <table class="table table-hover table-warning mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                 <!--Begin::table card-->
                                 <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Active table example</h5>
                                    </div>
                                    <table class="table table-hover table-striped mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr class="table-active">
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                   <!--Begin::table card-->
                                   <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header border-bottom-0">
                                        <h5 class="mb-0">Bordered table example</h5>
                                    </div>
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->
                                  <!--Begin::table card-->
                                  <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header border-bottom-0">
                                        <h5 class="mb-0">Custom color bordered table example</h5>
                                    </div>
                                    <table class="table table-bordered border-primary mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>The Bird</td>
                                            <td>@twitter</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                <!--/ends::table card-->

                                <!--Begin::table card-->
                                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">
                                    <div class="card-header">
                                        <h5 class="mb-0">Responsive example</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped mb-0">
                                            <thead>
                                                <tr class="bg-body">
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/ends::table card-->
                            </div>
                           </div>
                        </div>
                    </div>
                    <!--//Page content End//-->

                     <!--//Page-footer//-->
                     <footer class="pb-3 pb-lg-5 px-3 px-lg-6">
                        <div class="container-fluid px-0">
                          <span class="d-block lh-sm small text-body-secondary text-end">&copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
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



    </body>

</html>
