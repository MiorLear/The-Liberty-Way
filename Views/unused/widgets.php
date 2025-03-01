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

    <!--Simplebar css-->
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
                      class="nav-link d-flex align-items-center text-truncate active">
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
                    <ul id="ui-pages" class="sidebar-dropdown list-unstyled collapse widgetss_collapse">
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
                      <li class="sidebar-item"><a class="sidebar-link widgets_search" href="page-search.php">Search</a></li>
                      <li class="sidebar-item"><a class="sidebar-link widgets_invoice" href="page-invoice.php">Invoice</a></li>
                      <li class="sidebar-item"><a class="sidebar-link widgets_tasks" href="page-tasks.php">Tasks</a></li>
                      <li class="sidebar-item"><a class="sidebar-link widgets_pricing" href="page-pricing.php">Pricing</a></li>
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
                      <li class="sidebar-item"><a class="sidebar-link widgets_404" href="page-404.php">404 Error</a></li>
                      <li class="sidebar-item"><a class="sidebar-link widgets_blank" href="page-blank.php">Blank Page</a></li>
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
                      class="nav-link d-flex align-items-center text-truncate ">
                      <span class="sidebar-icon">
                        <span class="material-symbols-rounded">
                          construction
                          </span>
                      </span>
                      <!--Sidebar nav text-->
                      <span class="sidebar-text">UI Components</span>
                    </a>
                    <ul id="ui-components" class="sidebar-dropdown list-unstyled collapse @@components_collapse">
              
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
                <div class="col-xl-8 mb-2 mb-md-0">
                  <h3 class="mb-0">Widgets</h3>


                </div>
                <div class="col-lg-4 text-md-end">
                  <nav aria-label="breadcrumb" class="d-md-flex justify-content-md-end">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                      <li class="breadcrumb-item active">Widgets</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!--//Page Toolbar End//-->

          <!--//Page content//-->
          <div class="content pb-0 pt-3 px-3 px-lg-6 d-flex flex-column-fluid">
            <div class="container-fluid px-0">
                 <!--Widget row Title-->
                 <div class="d-flex mb-7 align-items-center">
                  <div class="flex-grow-1 border-top border-gray"></div>
                  
                  <h5 class="flex-shrink-0 mb-0 px-3">Statistics Widgets</h5>
                  <div class="flex-grow-1 border-top border-gray"></div>
                </div>
              <div class="row mb-5">
                <div class="col-sm-6 col-xl-3">

                  <!--//Card start//-->
                  <div class="card card-body mb-3 mb-lg-5">
                    <div class="d-flex justify-content-between align-items-center">
                      <!--Card text-->
                      <div class="me-3">
                        <h5 class="fs-4">
                          847059
                        </h5>
                        <span class="text-body-secondary">Sales earnings</span>
                      </div>

                      <!--Icon-with-size-->
                      <div
                        class="text-white bg-primary flex-shrink-0 size-50 rounded-2 d-flex align-items-center justify-content-center">
                        <!--icon-->
                        <span class="material-symbols-rounded">
                          attach_money
                        </span>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">

                  <!--//Card start//-->
                  <div class="card card-body mb-3 mb-lg-5">
                    <div class="row align-items-center">
                      <div class="col">
                        <p class="text-body-secondary d-block mb-2">Project Progress</p>
                        <div class="progress bg-primary-subtle mb-1" style="height: 4px;">
                          <div class="progress-bar bg-primary" aria-valuemax="100" aria-valuenow="74"
                            style="width: 74%;" role="progressbar"></div>
                        </div>
                        <h4 class="mb-0">74%</h4>
                      </div>
                      <div class="col-auto text-primary">
                        <!--icon-->
                        <!--Icon-with-size-->
                        <div
                          class="text-success bg-success-subtle flex-shrink-0 size-50 rounded-2 d-flex align-items-center justify-content-center">
                          <!--icon-->
                          <span class="material-symbols-rounded">
                            folder_open
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">

                  <!--//Card start//-->
                  <div class="card overflow-hidden mb-3 mb-lg-5">
                    <div class="card-body d-flex align-items-center">
                      <!--Card text-->
                      <div class="flex-grow-1">
                        <h5 class="fs-4 mb-1">
                          847059
                        </h5>
                        <span class="text-body-secondary">Sales earnings</span>
                      </div>
                      <div class="flex-shrink-0 text-end">
                        <div class="small"><span class="text-success">+35%</span></div>
                        <span class="material-symbols-rounded text-success">
                          trending_up
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">

                  <!--//Card start//-->
                  <div class="card overflow-hidden mb-3 mb-lg-5">
                    <div class="card-body d-flex align-items-center">
                      <!--Card text-->
                      <div class="flex-grow-1">
                        <h5 class="fs-4 mb-1">
                          1425
                        </h5>
                        <span class="text-body-secondary">Total Sales</span>
                      </div>
                      <div class="flex-shrink-0 ps-4 border-start">
                        <span class="material-symbols-rounded text-primary">
                          sell
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div class="card-body">
                      <h5 class="mb-2">Company finance</h5>
                      <div class="progress bg-danger-subtle mb-1" style="height: 4px;">
                        <div class="progress-bar bg-danger" aria-valuemax="100" aria-valuenow="68" style="width: 68%;"
                          role="progressbar">
                        </div>
                      </div>
                      <!--Card text-->
                      <div class="flex-grow-1 d-flex align-items-center">
                        <h5 class="fs-4 mb-0">
                          64
                        </h5>
                        <span class="text-body-secondary small ms-auto">Used</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div class="card-body">
                      <h5 class="mb-2">Storage</h5>
                      <div class="progress bg-success-subtle mb-1" style="height: 4px;">
                        <div class="progress-bar bg-success" aria-valuemax="100" aria-valuenow="37" style="width: 37%;"
                          role="progressbar">
                        </div>
                      </div>
                      <!--Card text-->
                      <div class="flex-grow-1 d-flex align-items-center">
                        <h5 class="fs-4 mb-0">
                          37
                        </span>
                        <span class="text-body-secondary small ms-auto">Used of 100GB</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div class="card-body">
                      <h5 class="mb-2">Task Overview</h5>
                      <div class="progress mb-3" style="height: 4px;">
                        <div class="progress-bar bg-primary" aria-valuemax="100" aria-valuenow="63" style="width: 63%;"
                          role="progressbar">
                        </div>
                        <div class="progress-bar bg-warning" aria-valuemax="100" aria-valuenow="37" style="width: 37%;"
                          role="progressbar">
                        </div>
                      </div>
                      <!--Card text-->
                      <ul class="list-unstyled d-flex mb-0">
                        <li class="d-flex align-items-center me-4">
                          <span class="bg-primary size-5 rounded-circle me-2">
                          </span>
                          <span class="text-body-secondary small">Finished</span>
                        </li>
                        <li class="d-flex align-items-center me-4">
                          <span class="bg-warning size-5 rounded-circle me-2">
                          </span>
                          <span class="text-body-secondary small">Due</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card bg-primary border-primary text-white overflow-hidden">
                    <div class="card-body">
                      <span class="align-middle material-symbols-rounded fs-1 mb-2">
                        groups
                      </span>
                      <h5 class="fs-4 mb-1">
                        8475
                      </h5>
                      <h6 class="mb-0 text-reset fw-normal">New customers</h6>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card bg-danger-subtle text-body border-0 overflow-hidden">
                    <div class="card-body">
                      <span class="align-middle material-symbols-rounded fs-1 mb-2">
                        groups
                      </span>
                      <h5 class="fs-4 mb-1">
                        647
                      </h5>
                      <h6 class="mb-0 fw-normal">New customers</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div class="card-body">
                      <span class="align-middle material-symbols-rounded fs-1 mb-2">
                        groups
                      </span>
                      <h5 class="fs-4 mb-1">
                        9478
                      </h5>
                      <h6 class="mb-0 text-body-secondary fw-normal">New customers</h6>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card border-primary-subtle text-body overflow-hidden">
                    <div class="card-body">
                      <span class="align-middle material-symbols-rounded fs-1 mb-2">
                        groups
                      </span>
                      <h5 class="fs-4 mb-1">
                        678
                      </h5>
                      <h6 class="mb-0 text-body-secondary fw-normal">New customers</h6>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div class="card-body d-flex align-items-center justify-content-between">
                      <div
                        class="flex-shrink-0 size-60 bg-primary-subtle text-primary rounded-pill me-3 d-flex align-items-center justify-content-center">
                        <span class="align-middle material-symbols-rounded fs-1">
                          groups
                        </span>
                      </div>
                      <div class="flex-grow-1 text-start">
                        <h5 class="fs-4 mb-1">
                          254
                        </h5>
                        <h6 class="mb-0 fw-normal">New customers</h6>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div
                      class="card-body d-flex align-items-center justify-content-between">
                      <div
                        class="flex-shrink-0 size-60 bg-success-subtle text-success rounded-pill me-3 d-flex align-items-center justify-content-center">
                        <span class="align-middle material-symbols-rounded fs-1">
                          attach_money
                        </span>
                      </div>
                      <div class="flex-grow-1 text-start">
                        <h5 class="fs-4 d-block mb-1">
                          $38382
                        </h5>
                        <h6 class="mb-0 fw-normal">Revenue</h6>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div
                      class="card-body border-top border-4 border-primary d-flex align-items-center justify-content-between">
                      <div
                        class="flex-shrink-0 size-60 bg-primary text-white rounded-pill me-3 d-flex align-items-center justify-content-center">
                        <span class="align-middle material-symbols-rounded fs-1">
                          arrow_drop_up
                        </span>
                      </div>
                      <div class="flex-grow-1 text-start">
                        <h5 class="fs-4 d-block mb-1">
                          38%
                        </h5>
                        <h6 class="mb-0 fw-normal">Bounce Rate</h6>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-3 mb-lg-5">

                  <!--//Card start//-->
                  <div class="card overflow-hidden">
                    <div
                      class="card-body d-flex align-items-center justify-content-between">
                      <div
                        class="flex-shrink-0 size-60 bg-success text-white rounded-pill me-3 d-flex align-items-center justify-content-center">
                        <span class="align-middle material-symbols-rounded fs-1">
                          arrow_drop_up
                        </span>
                      </div>
                      <div class="flex-grow-1 text-start">
                        <h5 class="fs-4 d-block mb-1">
                          65%
                        </h5>
                        <h6 class="mb-0 fw-normal">Bounce Rate</h6>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

                <!--Widget row Title-->
                <div class="d-flex mb-7 align-items-center">
                  <div class="flex-grow-1 border-top border-gray"></div>
                  
                  <h5 class="flex-shrink-0 mb-0 px-3">Project Widgets</h5>
                  <div class="flex-grow-1 border-top border-gray"></div>
                </div>
              <div class="row mb-5">
                <div class="col-xl-4 mb-3 mb-lg-5">

                  <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                      <h5 class="pe-3 mb-0">Projects</h5>
                      <span>
                        <a href="#!.php">View All</a>
                      </span>
                    </div>
                    <div class="card-body p-0">
                      <ul class="list-group list-group-flush mb-0">

                        <!--List group-item begin-->
                        <li class="list-group-item bg-transparent px-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <a href="#!.php">
                                <img src="assets/media/900x600/2.jpg" class="img-fluid rounded-2 width-80 h-auto"
                                  alt="">
                              </a>
                            </div>
                            <div class="overflow-hidden flex-grow-1">
                              <h6 class="mb-0 text-truncate">
                                <a href="#!.php" class="text-reset">Podcaster music site</a>
                              </h6>
                              <span class="text-body-secondary text-truncate d-block">Lorem ipsum dolor sit amet uses for
                                print</span>
                            </div>
                            <div class="">
                              <!--Dropdown-->
                              <div class="dropdown d-block">
                                <a href="#" data-bs-toggle="dropdown" class="text-body-secondary d-block lh-1">
                                  <span class="align-middle material-symbols-rounded">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end mt-1">
                                  <a href="#!.php" class="dropdown-item">Action</a>
                                  <a href="#!.php" class="dropdown-item">Another action</a>
                                  <a href="#!.php" class="dropdown-item">Something else</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!--List group-item begin-->
                        <li class="list-group-item bg-transparent px-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <a href="#!.php">
                                <img src="assets/media/900x600/3.jpg" class="img-fluid rounded-2 width-80 h-auto"
                                  alt="">
                              </a>
                            </div>
                            <div class="overflow-hidden flex-grow-1">
                              <h6 class="mb-0 text-truncate">
                                <a href="#!.php" class="text-reset">Plainting online store</a>
                              </h6>
                              <span class="text-body-secondary text-truncate d-block">Lorem ipsum dolor sit amet uses for
                                print</span>
                            </div>
                            <div class="">
                              <!--Dropdown-->
                              <div class="dropdown d-block">
                                <a href="#" data-bs-toggle="dropdown" class="text-body-secondary d-block lh-1">
                                  <span class="align-middle material-symbols-rounded">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end mt-1">
                                  <a href="#!.php" class="dropdown-item">Action</a>
                                  <a href="#!.php" class="dropdown-item">Another action</a>
                                  <a href="#!.php" class="dropdown-item">Something else</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!--List group-item begin-->
                        <li class="list-group-item bg-transparent px-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <a href="#!.php">
                                <img src="assets/media/900x600/4.jpg" class="img-fluid rounded-2 width-80 h-auto"
                                  alt="">
                              </a>
                            </div>
                            <div class="overflow-hidden flex-grow-1">
                              <h6 class="mb-0 text-truncate">
                                <a href="#!.php" class="text-reset">Has branding</a>
                              </h6>
                              <span class="text-body-secondary text-truncate d-block">Lorem ipsum dolor sit amet uses for
                                print</span>
                            </div>
                            <div class="">
                              <!--Dropdown-->
                              <div class="dropdown d-block">
                                <a href="#" data-bs-toggle="dropdown" class="text-body-secondary d-block lh-1">
                                  <span class="align-middle material-symbols-rounded">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end mt-1">
                                  <a href="#!.php" class="dropdown-item">Action</a>
                                  <a href="#!.php" class="dropdown-item">Another action</a>
                                  <a href="#!.php" class="dropdown-item">Something else</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <!--List group-item begin-->
                        <li class="list-group-item bg-transparent px-3">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <a href="#!.php">
                                <img src="assets/media/900x600/5.jpg" class="img-fluid rounded-2 width-80 h-auto"
                                  alt="">
                              </a>
                            </div>
                            <div class="overflow-hidden flex-grow-1">
                              <h6 class="mb-0 text-truncate">
                                <a href="#!.php" class="text-reset">Project title</a>
                              </h6>
                              <span class="text-body-secondary text-truncate d-block">Lorem ipsum dolor sit amet uses for
                                print</span>
                            </div>
                            <div class="">
                              <!--Dropdown-->
                              <div class="dropdown d-block">
                                <a href="#" data-bs-toggle="dropdown" class="text-body-secondary d-block lh-1">
                                  <span class="align-middle material-symbols-rounded">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end mt-1">
                                  <a href="#!.php" class="dropdown-item">Action</a>
                                  <a href="#!.php" class="dropdown-item">Another action</a>
                                  <a href="#!.php" class="dropdown-item">Something else</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <!--Col-->
                <div class="col-xl-4 mb-3 mb-lg-5">
                  <div class="card">

                    <!-- Card Image -->
                    <a href="#!.php">
                      <img src="assets/media/900x600/1.jpg" alt="..." class="card-img-top">
                    </a>

                    <!-- Card - Body -->
                    <div class="card-body mt-0">
                      <div class="row align-items-center">
                        <div class="col">
                          <h6 class="mb-1">
                            <a href="#!.php" class="text-reset">CRM dashboard</a>
                          </h6>
                          <small class="text-body-secondary">
                            Updated yestarday
                          </small>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#" class="text-body-secondary d-block lh-1" role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <span class="align-middle material-symbols-rounded">
                                more_vert
                              </span>
                            </a>
                            <div class="dropdown-menu mt-1 dropdown-menu-end">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <!--card Footer -->
                    <div class="card-footer">
                      <div class="row align-items-center">
                        <div class="col">
                          <div class="row align-items-center g-0">
                            <div class="col-auto">
                              <small class="me-2">65%</small>
                            </div>
                            <div class="col">

                              <!-- Progress bar -->
                              <div class="progress bg-success-subtle" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"
                                  aria-valuenow="65" aria-valuemax="100"></div>
                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="col-auto">

                          <!-- Avatars group -->
                          <div class="avatar-group justify-content-end">
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Gabriel H">
                              <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Emily Doe">
                              <img src="assets/media/avatars/02.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Adam Howkins">
                              <img src="assets/media/avatars/03.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                          </div>

                        </div>
                      </div> <!-- / .row -->
                    </div>

                  </div>
                </div>
                <!--Col-->
                <div class="col-xl-4 mb-3 mb-lg-5">
                  <div class="card mb-3 mb-lg-5">
                    <!-- Card - Body -->
                    <div class="card-body mt-0">
                      <div class="row align-items-center">
                        <div class="col">
                          <h5 class="mb-1">
                            <a href="#!.php" class="text-reset">CRM dashboard</a>
                          </h5>
                          <span class="text-body-secondary">
                            Updated yestarday
                          </span>

                        </div>
                        <div class="col-auto">

                          <!-- Dropdown -->
                          <div class="dropdown">
                            <a href="#" class="text-body-secondary d-block lh-1" role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <span class="align-middle material-symbols-rounded">
                                more_vert
                              </span>
                            </a>
                            <div class="dropdown-menu mt-1 dropdown-menu-end">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else
                              </a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <!--card Footer -->
                    <div class="card-footer">
                      <div class="row align-items-center">
                        <div class="col">
                          <div class="row align-items-center g-0">
                            <div class="col-auto">
                              <small class="me-2">65%</small>
                            </div>
                            <div class="col">

                              <!-- Progress bar -->
                              <div class="progress bg-success-subtle" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"
                                  aria-valuenow="65" aria-valuemax="100"></div>
                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="col-auto">

                          <!-- Avatars group -->
                          <div class="avatar-group justify-content-end">
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Gabriel H">
                              <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Emily Doe">
                              <img src="assets/media/avatars/02.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Adam Howkins">
                              <img src="assets/media/avatars/03.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                          </div>

                        </div>
                      </div> <!-- / .row -->
                    </div>

                  </div>

                  <!--Scrumboard card-->
                  <div class="card text-body card-body">
                    <a href="#!">
                      <h5>CRM Dashboard Project</h5>
                    </a>
                    <p class="mb-4 text-truncate"> Lorem ipsum is placeholder text commonly used in the graphic, print,
                      and publishing industries for previewing layouts and visual mockups.</p>
                    <div class="width-40 border-top border-3 mb-4 border-gray"></div>
                    <!-- Avatars group -->
                    <div class="avatar-group mb-3">
                      <a href="#!.php" class="avatar-group-item avatar sm rounded-circle" data-tippy-placement="top"
                        data-tippy-content="Gabriel H">
                        <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                      </a>
                      <a href="#!.php" class="avatar-group-item avatar sm rounded-circle" data-tippy-placement="top"
                        data-tippy-content="Emily Doe">
                        <img src="assets/media/avatars/02.jpg" alt="..." class="avatar-group-img rounded-circle">
                      </a>
                      <a href="#!.php" class="avatar-group-item avatar sm rounded-circle" data-tippy-placement="top"
                        data-tippy-content="Adam Howkins">
                        <img src="assets/media/avatars/03.jpg" alt="..." class="avatar-group-img rounded-circle">
                      </a>
                      <a href="#!.php"
                        class="avatar-group-item d-flex align-items-center justify-content-center bg-gray text-body avatar sm rounded-circle"
                        data-tippy-placement="top" data-tippy-content="6 more members">
                        <b>+6</b>
                      </a>
                    </div>
                    <div class="card-footer px-0 pb-0">
                      Updated: <span class="small text-body-secondary"> 2 days ago</span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-7 mb-3 mb-lg-5">
                  <div class="card mb-3 mb-lg-5 card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.php">
                          <img src="assets/media/900x600/1.jpg" class="width-90 rounded-3" alt="">
                        </a>
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#!" class="text-reset">CRM dashboard landing page</a>
                          </h6>
                          <span class="text-body-secondary d-block mb-2 small">
                            Updated 2 Hours Ago
                          </span>
                          <div class="row align-items-center">
                            <div class="col-12">
                              <div class="row align-items-center g-0">
                                <div class="col-auto">
                                  <small class="me-2">65%</small>
                                </div>
                                <div class="col">

                                  <!-- Progress bar -->
                                  <div class="progress bg-success-subtle" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"
                                      aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <a href="#!.php">
                          <img src="assets/media/900x600/3.jpg" class="width-90 rounded-3" alt="">
                        </a>
                      </div>
                      <div class="col">
                        <div class="overflow-hidden flex-nowrap">
                          <h6 class="mb-1">
                            <a href="#!">CRM dashboard landing page</a>
                          </h6>
                          <span class="text-body-secondary d-block mb-2 small">
                            Updated 2 Hours Ago
                          </span>
                          <div class="row align-items-center">
                            <div class="col-12">
                              <div class="row align-items-center g-0">
                                <div class="col-auto">
                                  <small class="me-2">65%</small>
                                </div>
                                <div class="col">

                                  <!-- Progress bar -->
                                  <div class="progress bg-success-subtle" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"
                                      aria-valuenow="65" aria-valuemax="100"></div>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <!-- Avatars group -->
                        <div class="avatar-group justify-content-end d-none d-lg-flex">
                          <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                            data-tippy-placement="top" data-tippy-content="Gabriel H">
                            <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                          </a>
                          <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                            data-tippy-placement="top" data-tippy-content="Emily Doe">
                            <img src="assets/media/avatars/02.jpg" alt="..." class="avatar-group-img rounded-circle">
                          </a>
                          <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                            data-tippy-placement="top" data-tippy-content="Adam Howkins">
                            <img src="assets/media/avatars/03.jpg" alt="..." class="avatar-group-img rounded-circle">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 mb-3 mb-lg-5">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column text-center align-items-center">
                        <div class="d-flex align-items-center justify-content-between">
                          <img src="assets/media/brand-logos/prosperops.svg" class="height-60 flex-shrink-0 me-4 w-auto"
                            alt="">
                          <div class="dropdown">
                            <a href="#" class="d-block lh-1" role="button" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              <span class="material-symbols-rounded align-middle">
                                more_vert
                              </span>
                            </a>
                            <div class="dropdown-menu mt-1 dropdown-menu-end">
                              <a href="#!" class="dropdown-item">
                                Action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Another action
                              </a>
                              <a href="#!" class="dropdown-item">
                                Something else
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="flex-grow-1 pt-4">
                          <span class="d-block text-body-secondary">Updated 2h ago</span>
                          <h5>Prosperops development</h5>
                          <div class="mb-4">
                            <span class="badge rounded-pill bg-success">In Progress</span>
                          </div>
                          <div class="avatar-group">
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Gabriel H">
                              <img src="assets/media/avatars/04.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Emily Doe">
                              <img src="assets/media/avatars/02.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php" class="avatar-group-item avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="Adam Howkins">
                              <img src="assets/media/avatars/03.jpg" alt="..." class="avatar-group-img rounded-circle">
                            </a>
                            <a href="#!.php"
                              class="avatar-group-item d-flex align-items-center justify-content-center bg-body-secondary text-body avatar sm rounded-circle"
                              data-tippy-placement="top" data-tippy-content="6 more members">
                              <b>+6</b>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Footer states-->
                    <div class="card-footer py-0 border-top">
                      <div class="row">
                        <div class="col text-center p-3">
                          <h4 class="fs-5 mb-1">218</h4>
                          <span class="d-block font-size-sm">Tasks</span>
                        </div>

                        <div class="col p-3 text-center border-end border-start">
                          <h4 class="fs-5 mb-1">468</h4>
                          <span class="d-block font-size-sm">Hours</span>
                        </div>

                        <div class="col p-3 text-center">
                          <h4 class="fs-5 mb-1">14</h4>
                          <span class="d-block font-size-sm">Days left</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!--Widget row Title-->
                <div class="d-flex mb-7 align-items-center">
                  <div class="flex-grow-1 border-top border-gray"></div>
                  
                  <h5 class="flex-shrink-0 mb-0 px-3">User Widgets</h5>
                  <div class="flex-grow-1 border-top border-gray"></div>
                </div>
              <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-lg-5">
                  <div class="card">
                    <!--Card title-->
                    <div class="d-flex card-header justify-content-between align-items-center">
                      <h5 class="mb-0 me-3">
                        Users
                      </h5>
                      <a href="#!.php">View All</a>
                    </div>


                    <div class="card-body py-0">
                      <!--List-->
                      <ul class="list-group list-group-flush">

                        <!--List group item-->
                        <li class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <a href="#!" class="">
                                <div class="avatar avatar-status status-online">
                                  <img src="assets/media/avatars/04.jpg" class="img-fluid rounded-circle w-auto" alt="">
                                </div>
                              </a>
                            </div>
                            <div class="col">
                              <h6 class="mb-0"><a href="#!.php">Jason Momoa</a></h6>
                              <small class="text-body-secondary">Front end developer</small>
                            </div>
                            <div class="col-auto">
                              <a href="#!.php" class="btn btn-sm btn-outline-primary">Add</a>
                            </div>
                          </div>
                        </li>
                        <!--List group item-->
                        <li class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <a href="#!" class="">
                                <div class="avatar avatar-status status-online">
                                  <img src="assets/media/avatars/06.jpg" class="img-fluid rounded-circle w-auto" alt="">
                                </div>
                              </a>
                            </div>
                            <div class="col">
                              <h6 class="mb-0"><a href="#!.php">Emily Doe</a></h6>
                              <small class="text-body-secondary">Front end developer</small>
                            </div>
                            <div class="col-auto">
                              <a href="#!.php" class="btn btn-sm btn-outline-primary">Add</a>
                            </div>
                          </div>
                        </li>
                        <!--List group item-->
                        <li class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <a href="#!" class="">
                                <div class="avatar avatar-status status-online">
                                  <img src="assets/media/avatars/07.jpg" class="img-fluid rounded-circle w-auto" alt="">
                                </div>
                              </a>
                            </div>
                            <div class="col">
                              <h6 class="mb-0"><a href="#!.php">Danzel Walsh</a></h6>
                              <small class="text-body-secondary">Python developer</small>
                            </div>
                            <div class="col-auto">
                              <a href="#!.php" class="btn btn-sm btn-outline-primary">Add</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-5">
                  <div class="card card-body">

                    <!--List-->
                    <ul class="list-group list-group-flush">

                      <!--List group item-->
                      <li class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#!" class="">
                              <div class="avatar">
                                <img src="assets/media/avatars/06.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </div>
                            </a>
                          </div>
                          <div class="col">
                            <h6 class="mb-0"><a href="#!.php" class="text-reset">Nikita Miller</a></h6>
                            <span class="text-body-secondary small d-flex align-items-center"><span
                                class="align-middle me-1 size-5 border border-4 border-warning rounded-circle d-inline-block"></span>
                              Away</span>
                          </div>
                          <div class="col-auto">
                            <a href="#!.php" class="btn btn-sm btn-outline-primary">Follow</a>
                          </div>
                        </div>
                      </li>
                      <!--List group item-->
                      <li class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#!" class="">
                              <div class="avatar">
                                <img src="assets/media/avatars/07.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </div>
                            </a>
                          </div>
                          <div class="col">
                            <h6 class="mb-0"><a href="#!.php" class="text-reset">Josefh Ansari</a></h6>
                            <span class="text-body-secondary small d-flex align-items-center"><span
                                class="align-middle me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                              Online</span>
                          </div>
                          <div class="col-auto">
                            <a href="#!.php" class="btn btn-sm btn-outline-primary">Follow</a>
                          </div>
                        </div>
                      </li>
                      <!--List group item-->
                      <li class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#!" class="">
                              <div class="avatar">
                                <img src="assets/media/avatars/03.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </div>
                            </a>
                          </div>
                          <div class="col">
                            <h6 class="mb-0"><a href="#!.php" class="text-reset">Jason Momoa</a></h6>
                            <span class="text-body-secondary small d-flex align-items-center"><span
                                class="align-middle me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                              Online</span>
                          </div>
                          <div class="col-auto">
                            <a href="#!.php" class="btn btn-sm btn-outline-primary">Follow</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-3 mb-lg-5">
                  <!--Card-->
                  <div class="card mb-3 mb-lg-5 text-center">
                    <!--Card body-->
                    <div class="card-body py-5">
                      <!--avatar-->
                      <a href="#!.php"
                        class="avatar xxl rounded-circle bg-gray bg-opacity-10 p-1 position-relative d-block mx-auto">
                        <img src="assets/media/avatars/01.jpg" class="avatar-img img-fluid rounded-circle" alt="">
                      </a>
                      <h5 class="mb-0 pt-3">
                        <a href="#!.php" class="text-reset">Noah Pierre</a>
                      </h5>
                      <span class="text-body-secondary small d-block">Full stack developer</span>
                    </div>

                    <!--Card footer-->
                    <div class="card-footer">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="text-body-secondary small d-flex align-items-center">
                            <span
                              class="align-middle lh-1 me-1 size-5 border border-4 border-warning rounded-circle d-inline-block"></span>
                            Away
                          </span>
                        </div>
                        <div class="col text-end">
                          <a href="#!.php" class="btn btn-sm btn-primary">Follow</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Card-->
                  <div class="card mb-3 mb-lg-5">
                    <!--Card body-->
                    <div class="card-body d-flex align-items-center">
                      <!--avatar-->
                      <a href="#!.php"
                        class="avatar flex-shrink-0 lg me-3 rounded-circle bg-gray bg-opacity-10 p-1 position-relative d-block">
                        <img src="assets/media/avatars/01.jpg" class="avatar-img img-fluid rounded-circle" alt="">
                      </a>
                      <div class="flex-grow-1 pe-3">
                        <h5 class="mb-0">
                          <a href="#!.php" class="text-reset">Noah Pierre</a>
                        </h5>
                        <span class="text-body-secondary small d-block">Full stack developer</span>
                      </div>
                      <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="text-body-secondary" aria-expanded="false">
                          <span class="align-middle material-symbols-rounded">
                            more_vert
                          </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="#!" class="dropdown-item">Follow</a>
                          <a href="#!" class="dropdown-item">Block</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--card-->
                  <div class="card">

                    <!--Card body-->
                    <div class="card-body">
                      <!--Contact-->
                      <div class="text-center">

                        <!-- Avatar -->
                        <a href="#!" class="avatar mb-3 mx-auto xl rounded-cirlce d-block">
                          <img src="assets/media/avatars/01.jpg" alt="..." class="img-fluid rounded-circle">
                        </a>
                        <!-- Title -->
                        <h5 class="mb-0">
                          <a href="#!" class="text-reset">
                            Noah Pierre</a>
                        </h5>

                        <!-- Email -->
                        <p class="small text-body-secondary mb-3">
                          <a class="d-block text-reset text-truncate" href="#!mailto:noah.pierre@company.com">
                            <span class="__cf_email__" data-cfemail="670908060f49170e02151502270a060e0b4904080a">[email&#160;protected]</span></a>
                        </p>
                        <!-- Split dropdown user button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-outline-primary">
                            <span class="material-symbols-rounded align-middle fs-5 me-2">
                              chat
                            </span>Send
                            Message</button>
                          <button type="button" class="btn btn-outline-primary dropdown-toggle-split rounded-end"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="align-middle material-symbols-rounded">
                              more_vert
                            </span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#!">
                              <span class="material-symbols-rounded align-middle opacity-75 me-2">
                                info
                              </span> Contact
                              info
                            </a>
                            <a class="dropdown-item" href="#!">
                              <span class="material-symbols-rounded opacity-75 align-middle me-2">
                                block
                              </span> Block contact
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-3 mb-lg-5">
                  <!--Card-->
                  <div class="card mb-3 mb-lg-5 text-center">
                    <img src="assets/media/900x600/6.jpg" class="card-img-top img-fluid" alt="">

                    <!--Card body-->
                    <div class="card-body">
                      <!--avatar-->
                      <a href="#!.php"
                        class="avatar xl rounded-circle bg-gray bg-opacity-10 p-1 position-relative mt-n8 d-block mx-auto">
                        <img src="assets/media/avatars/01.jpg" class="avatar-img img-fluid rounded-circle" alt="">
                      </a>
                      <h5 class="mb-0 pt-3">
                        <a href="#!.php" class="text-reset">Noah Pierre</a>
                      </h5>
                      <span class="text-body-secondary small d-block">Full stack developer</span>
                    </div>

                    <!--Card footer-->
                    <div class="card-footer">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="text-body-secondary small d-flex align-items-center">
                            <span
                              class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                            Online
                          </span>
                        </div>
                        <div class="col text-end">
                          <a href="#!.php" class="btn btn-sm btn-primary">Follow</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--Card-->
                  <div class="card">

                    <!--Card body-->
                    <div class="card-body">
                      <!--Contact-->
                      <div class="text-center">

                        <!-- Avatar -->
                        <a href="#!" class="avatar mb-3 mx-auto xxl rounded-cirlce d-block">
                          <img src="assets/media/avatars/07.jpg" alt="..." class="img-fluid rounded-circle">
                        </a>
                        <!-- Title -->
                        <h5 class="mb-0">
                          <a href="#!" class="text-reset">Jakoby Roman</a>
                        </h5>

                        <!-- Email -->
                        <p class="small text-body-secondary mb-0">
                          <a class="d-block text-reset text-truncate"
                            href="#!mailto:noah.pierre@company.com"><span class="__cf_email__" data-cfemail="1e747f75717c67306c71737f705e737f7772307d7173">[email&#160;protected]</span></a>
                        </p>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center card-footer">
                      <div>
                        <a href="#!" class="btn btn-sm btn-secondary">
                          <span class="material-symbols-rounded align-middle fs-5 me-1">chat</span>
                          Send Message</a>

                      </div>
                      <!-- Dropup -->
                      <div class="dropup">
                        <a class="d-flex align-items-center justify-content-center size-30 rounded-circle btn btn-outline-secondary p-0"
                          href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="material-symbols-rounded align-middle">
                            more_vert
                          </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mt-1">
                          <a class="dropdown-item" href="#!">
                            <span class="material-symbols-rounded align-middle opacity-75 me-1 fs-5">
                              info
                            </span> Contact
                            info
                          </a>
                          <a class="dropdown-item" href="#!">
                            <span class="material-symbols-rounded opacity-75 align-middle me-1 fs-5">
                              block
                            </span> Block contact
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-3 mb-lg-5">
                  <!--Card-->
                  <div class="card overflow-hidden text-center">
                    <img src="assets/media/900x600/1.jpg" class="card-img-top img-fluid" alt="">

                    <!--Card body-->
                    <div class="card-body p-0">
                      <!--avatar-->
                      <a href="#!.php"
                        class="avatar xl rounded-circle bg-gray bg-opacity-10 p-1 position-relative mt-n5 d-block mx-auto">
                        <img src="assets/media/avatars/01.jpg" class="avatar-img img-fluid rounded-circle" alt="">
                      </a>
                      <h5 class="mb-0 pt-3">
                        <a href="#!.php" class="text-reset">Noah Pierre</a>
                      </h5>
                      <span class="text-body-secondary small d-block mb-4">Full stack developer</span>
                      <div class="row mx-0 border-top border-bottom">
                        <div class="col-6 text-center border-end py-3">
                          <h5 class="mb-0">2345</h5>
                          <small class="text-body-secondary">Followers</small>
                        </div>
                        <div class="col-6 text-center py-3">
                          <h5 class="mb-0">54</h5>
                          <small class="text-body-secondary">Following</small>
                        </div>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                          <span class="text-body-secondary small">Join</span>
                          <strong>April 2014</strong>
                        </li>
                        <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                          <span class="text-body-secondary small">Location</span>
                          <strong>Barcelona, Spain</strong>
                        </li>
                        <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                          <span class="text-body-secondary small d-flex align-items-center">
                            <span
                              class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                            Online
                          </span>
                          <div class="text-end">
                            <a href="#!.php" class="btn btn-sm btn-primary">Follow</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

                 <!--Widget row Title-->
                 <div class="d-flex mb-7 align-items-center">
                  <div class="flex-grow-1 border-top border-gray"></div>
                  
                  <h5 class="flex-shrink-0 mb-0 px-3">Activity Widgets</h5>
                  <div class="flex-grow-1 border-top border-gray"></div>
                </div>
              <div class="row mb-5">
                <div class="col-12 col-lg-6 mb-3 mb-lg-5">
                  <div class="card overflow-hidden">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Notifications</h5>
                    </div>
                    <div class="card-body p-0">
                      <ul class="list-group list-group-flush mb-0">
                        <li class="px-3 pt-3 pb-0 list-group-item h6 text-body-tertiary border-bottom-0">New</li>
                        <!--//Notification item start//-->
                        <li class="list-group-item">
                          <a href="#"
                            class="list-group-item-action px-3 py-2 text-reset d-flex align-items-center">
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
                        </li>
                        <!--//Notification item start//-->
                        <li class="list-group-item">
                          <a href="#"
                            class="list-group-item-action px-3 py-2 text-reset d-flex align-items-center">
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
                        </li>

                        <li class="px-3 pt-3 pb-0 h6 list-group-item text-body-tertiary border-bottom-0">Earlier</li>
                        <!--//Notification item start//-->
                        <li class="list-group-item">
                          <a href="#"
                            class="list-group-item-action px-3 py-2 text-reset d-flex align-items-center">
                            <span class="d-block me-3">
                              <span
                                class="d-flex align-items-center justify-content-center lh-1 size-50 bg-success-subtle text-success rounded-circle">
                                <span class="material-symbols-rounded align-middle text-success">
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
                        </li>
                        <!--//Notification item start//-->
                        <li class="list-group-item">
                          <a href="#"
                            class="list-group-item-action px-3 py-2 text-reset d-flex align-items-center">
                            <span class="d-block me-3">
                              <span
                                class="d-flex align-items-center justify-content-center lh-1 size-50 bg-danger-subtle text-danger rounded-circle">
                                <span class="material-symbols-rounded align-middle text-danger">
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
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 mb-3 mb-lg-5">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0 me-3">Recent Activity</h5>
                      <a href="#!">View All</a>
                    </div>
                    <div class="card-body">
                      <ul class="step list-unstyled mb-0">
                        <li class="step-item">
                          <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span
                                class="avatar sm avatar-status status-online rounded-circle d-flex align-items-center justify-content-center bg-primary text-white">
                                <b>R</b>
                              </span>
                            </span>

                            <div class="step-content">
                              <h6 class="mb-1">Raymond Atkins</h6>
                              <span class="lh-sm d-block mb-1">Added <a href="#!">Felipe Grace</a> to project
                                group</span>
                              <small class="d-block mb-0 text-body-secondary">3h ago</small>
                            </div>
                          </div>

                        </li>
                        <!--/.step-item-->
                        <li class="step-item">
                          <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span class="avatar sm avatar-status status-online">
                                <img src="assets/media/avatars/03.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </span>
                            </span>

                            <div class="step-content">
                              <h6 class="mb-1">Abdul Kadir</h6>
                              <span class="lh-sm d-block mb-1">Created a new task <a href="#!">#235</a></span>
                              <small class="d-block mb-0 text-body-secondary">3h ago</small>
                            </div>
                          </div>

                        </li>
                        <!--/.step-item-->
                        <li class="step-item">
                          <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span class="avatar sm avatar-status status-online">
                                <img src="assets/media/avatars/05.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </span>
                            </span>

                            <div class="step-content">
                              <h6 class="mb-1">Jessica</h6>
                              <span class="d-block mb-2 lh-sm small">Added CSS file</span>
                              <!--Post-->
                              <div class="p-3 border rounded-3 mb-1 d-flex align-items-center">
                                <img src="assets/media/icons/files/css.svg" class="height-40 me-3 flex-shrink-0 w-auto"
                                  alt="">
                                <div class="flex-grow-1 overflow-hidden">
                                  <p class="mb-1 lh-sm text-truncate">tooltip-popover.css</p>
                                  <div class="d-flex align-items-center justify-content-between">
                                    <small class="text-body-secondary">4KB</small>
                                    <a href="#!" class="text-body">
                                      <span class="material-symbols-rounded align-middle text-success">
                                        download
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <small class="d-block text-body-secondary">Sep 14, 12:24PM EST</small>
                            </div>
                          </div>

                        </li>
                        <!--/.step-item-->

                        <!--.step-item-->
                        <li class="step-item">
                          <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span class="avatar sm avatar-status status-online">
                                <img src="assets/media/avatars/04.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </span>
                            </span>

                            <div class="step-content">
                              <h6 class="mb-1">Adam Voes</h6>
                              <span class="lh-sm d-block mb-1">Reassigned a tasked to <a href="#!">Jessica</a> <a
                                  href="#!">#078</a></span>
                              <small class="d-block mb-0 text-body-secondary">June 14, 12:24PM EST</small>
                            </div>
                          </div>

                        </li>
                        <!--/.step-item-->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

                <!--Widget row Title-->
                <div class="d-flex mb-7 align-items-center">
                  <div class="flex-grow-1 border-top border-gray"></div>
                  
                  <h5 class="flex-shrink-0 mb-0 px-3">Other Widgets</h5>
                  <div class="flex-grow-1 border-top border-gray"></div>
                </div>
              <div class="row">
                <div class="col-xl-7 mb-3 mb-lg-5">
                  <!--card-->
                  <div class="card table-nowrap table-card overflow-hidden h-100">
                    <div class="d-flex card-header justify-content-between">
                      <h5 class="me-3 card-title mb-0">Top Products</h5>
                      <a href="#!.php">View All</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table mb-0" style="width:100%">
                        <thead class="text-body-secondary text-uppercase small bg-body">
                          <tr>
                            <th class="ps-3" style="width:190px">Product</th>
                            <th>Change</th>
                            <th>Price</th>
                            <th>Sold</th>
                            <th class="text-end">Sales</th>
                          </tr>
                        </thead>
                        <tbody class="align-middle">
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/6.png"
                                    class="avatar p-1 border rounded-2 me-2 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate"><a href="#!.php" class="text-reset">Apple white earbuds
                                    water proof</a></p>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span class="me-2">8%</span>
                                <span class="small text-success">
                                  <span class="material-symbols-rounded align-middle text-success">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$69</td>
                            <td>9040</td>
                            <td class="text-end">$623760</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/3.png"
                                    class="avatar p-1 border rounded-2 me-2 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate"><a href="#!.php" class="text-reset">Mini handbag for
                                    woomens</a></p>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span class="me-2">6%</span>
                                <span class="small text-success">
                                  <span class="material-symbols-rounded align-middle text-success">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$59</td>
                            <td>8475</td>
                            <td class="text-end">$500025</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/4.png"
                                    class="avatar p-1 border rounded-2 me-2 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate"><a href="#!.php" class="text-reset">Minimalist wireless
                                    headphone</a></p>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span class="me-2">11%</span>
                                <span class="small text-success">
                                  <span class="material-symbols-rounded align-middle text-success">
                                    trending_up
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$59</td>
                            <td>7321</td>
                            <td class="text-end">$431939</td>
                          </tr>
                          <tr>
                            <td class="">
                              <div class="d-flex align-items-center">
                                <a href="#!.php"><img src="assets/media/products/5.png"
                                    class="avatar p-1 border rounded-2 me-2 align-middle" alt=""></a>
                                <p class="mb-0 text-truncate"><a href="#!.php" class="text-reset">Google home mini</a>
                                </p>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span class="me-2">-7%</span>
                                <span class="small text-danger">
                                  <span class="material-symbols-rounded align-middle text-danger">
                                    trending_down
                                  </span>
                                </span>
                              </div>
                            </td>
                            <td>$39</td>
                            <td>5485</td>
                            <td class="text-end">$212862</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 mb-3 mb-lg-5">
                  <div class="card h-100">
                    <div class="d-flex card-header justify-content-between">
                      <h5 class="me-3 mb-0">Top Users by Country</h5>
                      <a href="#!.php">View All</a>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">

                        <!--List-item-->
                        <li class="list-group-item pt-0">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/united-states.svg" alt=""
                                class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">United States</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 31%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/united-kingdom.svg" alt=""
                                class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">United Kingdom</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 24%</span>
                            </div>
                          </div>
                        </li>
                        
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/poland.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">Poland</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 20%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/spain.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">Spain</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-danger">arrow_drop_down</span> 7%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/kenya.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">Kenya</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 6%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/india.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">India</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 5.5%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/france.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">France</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 3.5%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/italy.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">Italy</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-danger">arrow_drop_down</span> 1.75%</span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img src="assets/media/flags/hungary.svg" alt="" class="width-20 rounded-1 h-auto">
                            </div>
                            <div class="flex-grow-1 px-2">Hungary</div>
                            <div class="flex-shrink-0">
                              <span> <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span> 1.25%</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 mb-3 mb-lg-5">
                  <div class="card">
                    <div class="d-flex card-header justify-content-between">
                      <h5 class="me-3 mb-0">Top Customers</h5>
                      <a href="#!.php">View All</a>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">

                        <!--List-item-->
                        <li class="list-group-item pt-0">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="assets/media/avatars/02.jpg" alt="" class="avatar rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-0">Inara Britt</h6>
                              <p class="mb-0 text-body-secondary">Georgia, USA</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <span>
                                $927.00
                              </span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="assets/media/avatars/03.jpg" alt="" class="avatar rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-0">Eduard Franz</h6>
                              <p class="mb-0 text-body-secondary">London, UK</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <span>
                                $916.00
                              </span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="assets/media/avatars/04.jpg" alt="" class="avatar rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-0">Gianluca Darby</h6>
                              <p class="mb-0 text-body-secondary">São Paulo, Brazil</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <span>
                                $896.50
                              </span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="assets/media/avatars/05.jpg" alt="" class="avatar rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-0">Milana Myles</h6>
                              <p class="mb-0 text-body-secondary">Marseille, France</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <span>
                                $874.50
                              </span>
                            </div>
                          </div>
                        </li>
                        <!--List-item-->
                        <li class="list-group-item pb-0">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <img src="assets/media/avatars/06.jpg" alt="" class="avatar rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-0">Taisiia Oluchi</h6>
                              <p class="mb-0 text-body-secondary">Durban, SA</p>
                            </div>
                            <div class="flex-shrink-0 text-end">
                              <span>
                                $857.50
                              </span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 mb-3 mb-lg-5">
                  <div class="card">

                    <img src="assets/media/cover/2.jpg" class="card-img-top img-fluid" alt="">
                    <div class="position-absolute end-0 top-0 me-4 mt-4">
                      <div class="dropstart">
                        <a href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                          class="btn btn-outline-white rounded-3 p-0 d-flex align-items-center justify-content-center size-40">
                          <span class="material-symbols-rounded align-middle">
                            more_vert
                          </span>
                        </a>
                        <div class="dropdown-menu border-0">
                          <a href="#!" class="dropdown-item">
                            <span class="material-symbols-rounded align-middle me-2 opacity-75">
                              favorite
                            </span>Like
                          </a>
                          <a href="#!" class="dropdown-item">
                            <span class="material-symbols-rounded align-middle me-2 opacity-75">
                              info
                            </span>Artist Info
                          </a>
                          <a href="#!" class="dropdown-item">
                            <span class="material-symbols-rounded align-middle me-2 opacity-75">
                              album
                            </span>View album
                          </a>
                          <a href="#!" class="dropdown-item">
                            <span class="material-symbols-rounded align-middle me-2 opacity-75">
                              share
                            </span>Share
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                          <h5 class="mb-1">Blinding lights - Remix</h5>
                          <a href="#!" class="text-body-secondary small">The Weeknd</a>
                        </div>
                        <span>
                          <a href="#!" class="text-body-secondary">
                            <span class="align-middle material-symbols-rounded">
                              favorite
                            </span>
                          </a>
                        </span>
                      </div>
                      <!--Playlist progess-->
                      <div>

                        <div class="progress mb-2 shadow-none bg-primary-subtle" style="height:5px">
                          <div class="progress-bar bg-primary" style="width: 47%;" aria-valuemax="100"
                            aria-valuenow="47" role="progressbar"></div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <span class="small">1:34</span>
                          <span class="small">-2:01</span>
                        </div>
                      </div>
                    </div>


                    <div class="card-footer d-flex justify-content-between align-items-center">

                      <!--Icon Repeat-->
                      <span>
                        <a href="#!" class="text-body">
                          <span class="align-middle material-symbols-rounded">
                            repeat
                          </span>
                        </a>
                      </span>

                      <!--Icon Play/Pause/Next/Prev-->
                      <div class="d-flex align-items-center justify-content-center">
                        <a href="#!"
                          class="size-40 p-0 btn btn-outline-secondary d-flex align-items-center justify-content-center rounded-circle">
                          <span class="align-middle material-symbols-rounded">
                            skip_previous
                          </span>
                        </a>
                        <a href="#!"
                          class="size-45 mx-1 p-0 btn btn-primary d-flex align-items-center justify-content-center rounded-circle">
                          <span class="align-middle material-symbols-rounded">
                            pause
                          </span>
                        </a>
                        <a href="#!"
                          class="size-40 p-0 btn btn-outline-secondary d-flex align-items-center justify-content-center rounded-circle">
                          <span class="align-middle material-symbols-rounded">
                            skip_next
                          </span>
                        </a>
                      </div>
                      <!--Icon Shuffle-->
                      <span>
                        <a href="#!" class="text-body">
                          <span class="align-middle material-symbols-rounded">
                            shuffle
                          </span>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3 mb-lg-5">
                  <div class="card card-body mb-3 mb-lg-5">
                    <div class="row align-items-center">
                      <div class="col-2 col-md-auto">
                        <div
                          class="size-50 d-flex align-items-center justify-content-center bg-primary text-white rounded-pill shadow">
                          <span class="align-middle material-symbols-rounded">
                            edit
                          </span>
                        </div>
                      </div>
                      <div class="col-10 ps-5 ps-md-3 col-md">
                        <div class="row align-items-center">
                          <div class="col-lg-7 mb-3 mb-md-0">
                            <h5 class="mb-1">Create your next Campaign</h5>
                            <p class="mb-0 text-truncate text-body-secondary">Duis aute irure dolor in reprehenderit in voluptate
                              velit esse
                              cillum dolore eu fugiat nulla pariatur.</p>
                          </div>

                          <div class="col-auto ms-md-auto">
                            <a href="#!" class="btn btn-primary btn-sm d-inline-flex align-items-center">
                              <span class="align-middle material-symbols-rounded fs-5 me-1">
                                add
                              </span>Create new campaign
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-body border-0 overflow-hidden bg-primary-subtle">
                    <!--Shape-->
                    <svg class="position-absolute start-50 top-0 text-white" width="100" height="50"
                      viewBox="0 0 100 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity=".15"
                        d="M100 3.8147e-06C100 6.5661 98.7067 13.0679 96.194 19.1342C93.6812 25.2005 89.9983 30.7124 85.3553 35.3553C80.7124 39.9983 75.2005 43.6812 69.1342 46.194C63.0679 48.7067 56.5661 50 50 50C43.4339 50 36.9321 48.7067 30.8658 46.194C24.7995 43.6812 19.2876 39.9983 14.6447 35.3553C10.0017 30.7124 6.31876 25.2005 3.80602 19.1342C1.29329 13.0679 -5.74026e-07 6.56609 0 0L50 3.8147e-06H100Z"
                        fill="currentColor" />
                    </svg>
                    <div class="row align-items-center position-relative z-1">
                      <div class="col-sm-7 mb-3 mb-sm-0" style="--bs-body-color-rgb: 255,255,255;">

                        <h5 class="mb-1">Create a new profile</h5>
                        <p class="mb-0 text-truncate text-body-secondary">Duis aute irure dolor in reprehenderit in voluptate
                          velit esse
                          cillum dolore eu fugiat nulla pariatur.</p>
                      </div>
                      <div class="col-sm-5 text-sm-end">
                        <a href="#!" class="btn btn-primary btn-sm d-inline-flex align-items-center">
                          <span class="align-middle material-symbols-rounded fs-5 me-1">
                            add
                          </span>Create new
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-xl-7 mb-3 mb-lg-5">
                  <div class="card h-100 table-nowrap table-card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Most visited pages</h5>
                      <a href="#!" class="btn btn-sm btn-outline-secondary">View All</a>
                    </div>
                    <div class="table-responsive">
                      <table class="align-middle mb-0 table">
                        <thead class="small text-uppercase text-body-secondary">
                          <tr>
                            <th>Page</th>
                            <th>Visitors</th>
                            <th>Unique visitors</th>
                            <th>Bounce rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>/app/widgets.php</td>
                            <td>13842</td>
                            <td>2514</td>
                            <td>23%
                              <span class="align-middle material-symbols-rounded ms-1 text-success">
                                arrow_drop_up
                              </span>
                            </td>
                          </tr>
                          <tr class="bg-body">
                            <td>/app/analytics.php</td>
                            <td>9514</td>
                            <td>1912</td>
                            <td>13%
                              <span class="align-middle material-symbols-rounded ms-1 text-success">
                                arrow_drop_up
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>/app/index.php</td>
                            <td>8412</td>
                            <td>1245</td>
                            <td>4%
                              <span class="align-middle material-symbols-rounded ms-1 text-danger">
                                arrow_drop_down
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>/app/e-commerce.php</td>
                            <td>6239</td>
                            <td>458</td>
                            <td>8%
                              <span class="align-middle material-symbols-rounded ms-1 text-success">
                                arrow_drop_up
                              </span>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-5 mb-3 mb-lg-5">
                  <div class="card h-100 table-card table-nowrap">
                    <div class="card-header">
                      <h5 class="mb-0">Social media traffic</h5>
                    </div>
                    <table class="mb-0 table">
                      <thead class="small text-uppercase bg-body text-body-secondary">
                        <tr>
                          <th>Network</th>
                          <th>Visitors</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Instagram</td>
                          <td>
                            <div class="fs-6 d-flex justify-content-between align-items-center">654,078
                              <div class="progress rounded-pill bg-danger-subtle height-5 flex-grow-1 ms-4 ms-lg-6">
                                <div class="progress-bar rounded-pill bg-danger" style="width:70%" aria-valuemax="100"
                                  aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Facebook</td>
                          <td>
                            <div class="fs-6 d-flex justify-content-between align-items-center">214,587
                              <div class="progress bg-info-subtle rounded-pill height-5 flex-grow-1 ms-4 ms-lg-6">
                                <div class="progress-bar rounded-pill bg-info" style="width:53%" aria-valuemax="100"
                                  aria-valuemin="0" aria-valuenow="13" role="progressbar"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Twitter</td>
                          <td>
                            <div class="fs-6 d-flex justify-content-between align-items-center">123,478
                              <div class="progress bg-info-primary rounded-pill height-5 flex-grow-1 ms-4 ms-lg-6">
                                <div class="progress-bar rounded-pill bg-primary" style="width:47%" aria-valuemax="100"
                                  aria-valuemin="0" aria-valuenow="37" role="progressbar"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>LinkedIn</td>
                          <td>
                            <div class="fs-6 d-flex justify-content-between align-items-center">012,878
                              <div class="progress bg-info-subtle rounded-pill height-5 flex-grow-1 ms-4 ms-lg-6">
                                <div class="progress-bar rounded-pill bg-info" style="width:27%"
                                  aria-valuemax="100" aria-valuemin="0" aria-valuenow="57" role="progressbar"></div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3 mb-lg-5">
                  <div class="overflow-hidden card table-nowrap table-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">New customers</h5>
                      <a href="#!" class="btn btn-outline-secondary btn-sm">View All</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-body-secondary">
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Payment method</th>
                            <th>Created Date</th>
                            <th class="text-end">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="align-middle">
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/media/avatars/08.jpg" class="avatar sm rounded-pill me-3 flex-shrink-0"
                                  alt="Customer">
                                <div>
                                  <div class="h6 mb-0 lh-1">Mark Voldov</div>
                                </div>
                              </div>
                            </td>
                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="18756e777f7d6b587d75797174367b7775">[email&#160;protected]</a></td>
                            <td><img src="assets/media/flags/russia.svg"
                                class="width-20 h-auto me-2 rounded-pill align-middle" alt=""> <span
                                class="d-inline-block align-middle">Russia</span></td>
                            <td><span>****6231</span></td>
                            <td>21 Sep, 2023</td>
                            <td class="text-end">
                              <div class="drodown">
                                <a data-bs-toggle="dropdown" href="#" class="btn btn-outline-secondary p-1">
                                  <span class="material-symbols-rounded align-middle">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a href="#!" class="dropdown-item">View Details</a>
                                  <a href="#!" class="dropdown-item">Delete user</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/media/avatars/04.jpg" class="avatar sm rounded-pill me-3 flex-shrink-0"
                                  alt="Customer">
                                <div>
                                  <div class="h6 mb-0 lh-1">Topias Kantola</div>
                                </div>
                              </div>
                            </td>
                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="32465d425b534159535c465d5e5372575f535b5e1c515d5f">[email&#160;protected]</a></td>
                            <td><img src="assets/media/flags/brazil.svg"
                                class="width-20 h-auto me-2 rounded-pill align-middle" alt=""> <span
                                class="d-inline-block align-middle">Brazil</span></td>
                            <td><span>****@mail.com</span></td>
                            <td>21 Sep, 2023</td>
                            <td class="text-end">
                              <div class="drodown">
                                <a data-bs-toggle="dropdown" href="#" class="btn btn-outline-secondary p-1">
                                  <span class="material-symbols-rounded align-middle">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a href="#!" class="dropdown-item">View Details</a>
                                  <a href="#!" class="dropdown-item">Delete user</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/media/avatars/05.jpg" class="avatar sm rounded-pill me-3 flex-shrink-0"
                                  alt="Customer">
                                <div>
                                  <div class="h6 mb-0 lh-1">Anaiah Whitten</div>
                                </div>
                              </div>
                            </td>
                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5f505f575f564956574a4a5b507e5b535f5752105d5153">[email&#160;protected]</a></td>
                            <td><img src="assets/media/flags/poland.svg"
                                class="width-20 h-auto me-2 rounded-pill align-middle" alt="">
                              <span class="d-inline-block align-middle">Poland</span>
                            </td>
                            <td><span>****0014</span></td>
                            <td>12 June, 2022</td>
                            <td class="text-end">
                              <div class="drodown">
                                <a data-bs-toggle="dropdown" href="#" class="btn btn-outline-secondary p-1">
                                  <span class="material-symbols-rounded align-middle">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a href="#!" class="dropdown-item">View Details</a>
                                  <a href="#!" class="dropdown-item">Delete user</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/media/avatars/07.jpg" class="avatar sm rounded-pill me-3 flex-shrink-0"
                                  alt="Customer">
                                <div>
                                  <div class="h6 mb-0 lh-1">Wyatt Morris</div>
                                </div>
                              </div>
                            </td>
                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3d4dac2d7d7ceccd1d1cad0e3c6cec2cacf8dc0ccce">[email&#160;protected]</a></td>
                            <td><img src="assets/media/flags/kenya.svg"
                                class="width-20 h-auto me-2 rounded-pill align-middle" alt="">
                              <span class="d-inline-block align-middle">Kenya</span>
                            </td>
                            <td><span>****8715</span></td>
                            <td>04 June, 2022</td>
                            <td class="text-end">
                              <div class="drodown">
                                <a data-bs-toggle="dropdown" href="#" class="btn btn-outline-secondary p-1">
                                  <span class="material-symbols-rounded align-middle">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a href="#!" class="dropdown-item">View Details</a>
                                  <a href="#!" class="dropdown-item">Delete user</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="assets/media/avatars/06.jpg" class="avatar sm rounded-pill me-3 flex-shrink-0"
                                  alt="Customer">
                                <div>
                                  <div class="h6 mb-0 lh-1">Eliana Stout</div>
                                </div>
                              </div>
                            </td>
                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="680d04010906091b1c071d1c280d05090104460b0705">[email&#160;protected]</a></td>
                            <td><img src="assets/media/flags/united-states.svg"
                                class="width-20 h-auto me-2 rounded-pill align-middle" alt="">
                              <span class="d-inline-block align-middle">Usa</span>
                            </td>
                            <td><span>****1010</span></td>
                            <td>01 April, 2022</td>
                            <td class="text-end">
                              <div class="drodown">
                                <a data-bs-toggle="dropdown" href="#" class="btn btn-outline-secondary p-1">
                                  <span class="material-symbols-rounded align-middle">
                                    more_vert
                                  </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a href="#!" class="dropdown-item">View Details</a>
                                  <a href="#!" class="dropdown-item">Delete user</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-3 mb-lg-5">
                  <div class="position-relative card table-nowrap table-card">
                    <div class="card-header align-items-center">
                      <h5 class="mb-0">Latest Transactions</h5>
                      <p class="mb-0 small text-body-secondary">1 Pending</p>
                    </div>
                    <div class="table-responsive">
                      <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-body-secondary">
                          <tr>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="align-middle">
                            <td>
                              #57473829
                            </td>
                            <td>13 Sep, 2021</td>
                            <td>Renee Sims</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span><span class="align-middle fs-5 me-1 text-danger material-symbols-rounded">
                                    arrow_drop_up
                                  </span></span>
                                <span>$145</span>
                              </div>
                            </td>
                            <td>
                              <span class="badge bg-success-subtle text-success">Completed</span>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              #012458780
                            </td>
                            <td>19 Aug, 2021</td>
                            <td>Edith Koenig</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span><span class="align-middle fs-5 me-1 text-success material-symbols-rounded">
                                    arrow_drop_down
                                  </span></span>
                                <span>$641.64</span>
                              </div>
                            </td>
                            <td>
                              <span class="badge bg-warning-subtle text-warning">Pending</span>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              #76444326
                            </td>
                            <td>03 April, 2021</td>
                            <td>Carrie Blount</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span><span class="align-middle fs-5 me-1 text-success material-symbols-rounded">
                                    arrow_drop_down
                                  </span></span>
                                <span>$12,457</span>
                              </div>
                            </td>
                            <td>
                              <span class="badge bg-success-subtle text-success">Completed</span>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              #12498745
                            </td>
                            <td>15 March, 2021</td>
                            <td>Ander Durham</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span><span class="align-middle fs-5 me-1 text-success material-symbols-rounded">
                                    arrow_drop_down
                                  </span></span>
                                <span>$785</span>
                              </div>
                            </td>
                            <td>
                              <span class="badge bg-success-subtle text-success">Completed</span>
                            </td>
                          </tr>
                          <tr class="align-middle">
                            <td>
                              #87444654
                            </td>
                            <td>23 Jan, 2021</td>
                            <td>Netflix Inc.</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span><span class="align-middle fs-5 me-1 text-danger material-symbols-rounded">
                                    arrow_drop_up
                                  </span></span>
                                <span>$199</span>
                              </div>
                            </td>
                            <td>
                              <span class="badge bg-success-subtle text-success">Completed</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer text-end">
                      <a href="#!" class="btn btn-sm btn-secondary">View All Transactions</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6 mb-3 mb-lg-5">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="flex-shrink-0">
                        <h5 class="mb-0">Budget</h5>
                        <p class="mb-0 text-body-secondary small">Last month budget summary</p>
                      </div>
                      <a href="#!" class="btn btn-sm btn-outline-secondary">View all</a>
                    </div>
                    <div class="card-body pt-0">
                      <ul class="list-group list-group-flush">

                        <!--List-group-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="me-4">
                              <div
                                class="size-50 rounded-3 bg-danger-subtle text-danger d-flex justify-content-center align-items-center">
                                <span class="align-middle material-symbols-rounded">
                                  payments
                                </span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <p class="mb-1 text-body-secondary">Expanses</p>
                              <h5 class="mb-1">$2375.58</h5>
                              <div class="d-flex align-items-center">
                                <div class="progress bg-danger-subtle flex-grow-1 mb-0" style="height: 4px;">
                                  <div class="progress-bar bg-danger" style="width: 74%;" aria-valuenow="75"
                                    aria-valuemax="100" role="progressbar"></div>
                                </div>
                                <div class="flex-shrink-0 ps-4">
                                  <span>14.50%
                                    <span class="material-symbols-rounded align-middle fs-4 text-success">
                                      arrow_drop_up
                                    </span>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!--List-group-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="me-4">
                              <div
                                class="size-50 rounded-3 bg-success-subtle text-success d-flex justify-content-center align-items-center">
                                <span class="align-middle material-symbols-rounded">
                                  filter_alt
                                </span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <p class="mb-1 text-body-secondary">Savings</p>
                              <h5 class="mb-1">$875.25</h5>
                              <div class="d-flex align-items-center">
                                <div class="progress bg-success-subtle flex-grow-1 mb-0" style="height: 4px;">
                                  <div class="progress-bar bg-success" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemax="100" role="progressbar"></div>
                                </div>
                                <div class="flex-shrink-0 ps-4">
                                  <span>2.75%
                                    <span class="material-symbols-rounded align-middle fs-4 text-danger">
                                      arrow_drop_down
                                    </span>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <!--List-group-item-->
                        <li class="list-group-item">
                          <div class="d-flex align-items-center">
                            <div class="me-4">
                              <div
                                class="size-50 rounded-3 bg-primary-subtle text-primary d-flex justify-content-center align-items-center">
                                <span class="align-middle material-symbols-rounded">
                                  receipt
                                </span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <p class="mb-1 text-body-secondary">Bills</p>
                              <h5 class="mb-1">$524.00</h5>
                              <div class="d-flex align-items-center">
                                <div class="progress bg-primary-subtle flex-grow-1 mb-0" style="height: 4px;">
                                  <div class="progress-bar bg-primary" style="width: 12%;" aria-valuenow="12"
                                    aria-valuemax="100" role="progressbar"></div>
                                </div>
                                <div class="flex-shrink-0 ps-4">
                                  <span>1.25%
                                    <span class="material-symbols-rounded align-middle fs-4 text-success">
                                      arrow_drop_up
                                    </span>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6 mb-3 mb-lg-5">

                  <!--Card Begin-->
                  <div class="card">

                    <!--Card Header Begin-->
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Todos</h5>
                      <a href="#!" class="btn btn-sm btn-outline-secondary">View all</a>
                    </div>
                    <!--Card Header End-->

                    <!--Card Body Begin-->
                    <div class="card-body p-0">

                      <!--::Begin todo list-->
                      <div class="list-group list-group-flush">
                        <!--/::end todo item-->
                        <!--::Begin todo item-->
                        <div class="list-group-item py-0 px-4">
                          <div class="form-check mb-0 d-flex align-items-center">
                            <input
                              class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-success"
                              type="checkbox" id="checkbox-todo-0">
                            <label class="form-check-label mb-0 p-3" for="checkbox-todo-0">Design a CRM Landing
                              page</label></div>
                        </div>
                        <!--/::end todo item-->
                        <!--::Begin todo item-->
                        <div class="list-group-item py-0 px-4">
                          <div class="form-check mb-0 d-flex align-items-center">
                            <input
                              class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-primary"
                              type="checkbox" id="checkbox-todo-1">
                            <label class="form-check-label mb-0 p-3" for="checkbox-todo-1">Add New Checkboxes with All
                              Theme Colors</label></div>
                        </div>
                        <!--/::end todo item-->
                        <!--::Begin todo item-->
                        <div class="list-group-item py-0 px-4">
                          <div class="form-check mb-0 d-flex align-items-center">
                            <input checked
                              class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-warning"
                              type="checkbox" id="checkbox-todo-2">
                            <label class="form-check-label mb-0 p-3" for="checkbox-todo-2">Update dashboard charts with
                              Apexcharts</label></div>
                        </div>
                        <!--/::end todo item-->

                        <!--::Begin todo item-->
                        <div class="list-group-item py-0 px-4">
                          <div class="form-check mb-0 d-flex align-items-center">
                            <input
                              class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-info"
                              type="checkbox" id="checkbox-todo-3">
                            <label class="form-check-label mb-0 p-3" for="checkbox-todo-3">Twitter Ad Campaign</label>
                          </div>
                        </div>
                        <!--/::end todo item-->
                        <!--::Begin todo item-->
                        <div class="list-group-item py-0 px-4">
                          <div class="form-check mb-0 d-flex align-items-center">
                            <input checked
                              class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-danger"
                              type="checkbox" id="checkbox-todo-4">
                            <label class="form-check-label mb-0 p-3" for="checkbox-todo-4">Add New Widgets for Future
                              Use</label></div>
                        </div>
                        <!--/::end todo item-->

                      </div>
                      <!--/::end todo list-->

                    </div>

                    <!--::begin create new todo-->
                    <div class="card-footer p-0">
                      <div class="row me-0 align-items-center">
                        <div class="col">
                          <input class="form-control bg-transparent ps-4 border-0 shadow-none py-3"
                            placeholder="Add new todo">

                        </div>
                        <div class="col-auto pe-4">
                          <button class="btn btn-sm btn-primary p-1">
                            <span class="material-symbols-rounded align-middle">
                              add
                            </span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!--/::end create new todo-->

                  </div>
                  <!--Card End-->
                </div>
                <div class="col-12">

                  <div class="row">
                    <div class="col-xl-4 mb-3 mb-lg-5">

                      <!--Card Job Applied-->
                      <div class="card card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="assets/media/avatars/03.jpg" class="avatar rounded-pill flex-shrink-0 me-3" alt="">
                          <div class="flex-grow-1">
                            <h5 class="mb-0">Adam Gullium</h5>
                            <a href="#!">View Profile</a>
                          </div>
                        </div>
                        <div class="d-flex pt-3 border-top align-items-center justify-content-between">
                          <span class="text-body-secondary small lh-1 align-middle">Applied on Jan 14, 2021</span>
                          <a href="#!" class="text-body lh-1">
                            <span class="align-middle material-symbols-rounded">
                              delete
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 mb-3 mb-lg-5">

                      <!--Card Job Applied-->
                      <div class="card border-0 bg-primary text-white card-body">
                        <div class="d-flex align-items-center">
                          <img src="assets/media/avatars/03.jpg" class="avatar rounded-pill flex-shrink-0 me-3" alt="">
                          <div class="flex-grow-1">
                            <h5 class="mb-0">Adam Gullium</h5>
                            <a href="#!" class="text-reset">View Profile</a>
                          </div>
                        </div>
                        <hr class="opacity-25">
                        <div class="d-flex align-items-center justify-content-between">
                          <span class="text-white text-opacity-75 small lh-1 align-middle">Applied on Jan 14,
                            2021</span>
                          <a href="#!" class="text-white lh-1">
                            <span class="align-middle material-symbols-rounded">
                              delete
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 mb-3 mb-lg-5">

                      <!--Card Job Applied-->
                      <div class="card card-body">
                        <div class="d-flex align-items-center mb-3">
                          <img src="assets/media/avatars/03.jpg" class="avatar rounded-pill flex-shrink-0 me-3" alt="">
                          <div class="flex-grow-1 overflow-hidden">
                            <h5 class="mb-0">Adam Gullium</h5>
                            <small class="text-body-secondary d-block text-truncate">Applied on 14 Sep 2021</small>
                          </div>
                        </div>
                        <div class="d-flex pt-3 border-top align-items-center justify-content-between">
                          <a href="#!">View Profile</a>
                          <a href="#!" class="text-body lh-1">
                            <span class="align-middle material-symbols-rounded">
                              delete
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-5 mb-3 mb-lg-5">

                  <!--Card Begin-->
                  <div class="card">
                    <div class="card-header align-items-stretch">
                      <div class="flex-grow-1 overflow-hidden">
                        <h5 class="mb-0">Add a Team Member
                        </h5>
                        <p class="mb-0 text-truncate text-body-secondary">
                          Add your teammates to your team and start working together on getting work done
                        </p>
                      </div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <input type="text" class="form-control" placeholder="Team member name">
                        </div>
                        <div class="mb-4">
                          <div class="input-group">
                            <span class="input-group-text">
                              <span class="material-symbols-rounded align-middle fs-5">
                                email
                              </span>
                            </span>
                            <input type="text" class="form-control" placeholder="Team member work email">
                          </div>
                        </div>
                        <h6 class="text-body-secondary small mb-2">Permissions</h6>

                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="d-flex align-items-center justify-content-between">
                              <label class="form-switch-label" for="addTask">
                                <span class="d-block h6 mb-0">Can create tasks</span>
                                <span class="d-block small text-body-secondary">Create tasks and add them to projects</span>
                              </label>
                              <div class="form-switch form-check">
                                <input type="checkbox" id="addTask" class="form-check-input">
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="d-flex align-items-center justify-content-between">
                              <label class="form-switch-label" for="moveTask">
                                <span class="d-block h6 mb-0">Can move tasks around</span>
                                <span class="d-block small text-body-secondary">Make tasks and add them to projects</span>
                              </label>
                              <div class="form-switch form-check">
                                <input type="checkbox" id="moveTask" class="form-check-input">
                              </div>
                            </div>
                          </li>
                        </ul>
                      </form>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                      <button type="button" class="btn btn-sm btn-secondary me-2">Cancel</button>
                      <button type="submit" class="btn btn-sm btn-primary">Add Member </button>
                    </div>
                  </div>
                  <!--Card End-->
                </div>
                <div class="col-12 col-md-6 col-xl-3 mb-3 mb-lg-5">

                  <!--Card Begin-->
                  <div class="card">

                    <!--Card Body Begin-->
                    <div class="card-body">
                      <h5 class="mb-0">Your Top Review</h5>
                      <small class="text-body-secondary d-block mb-3">Best of your reviews</small>
                      <div class="d-flex align-items-center mb-3">
                        <img src="assets/media/avatars/03.jpg" class="avatar rounded-pill flex-shrink-0 me-3" alt="">
                        <div class="flex-grow-1">
                          <h6 class="mb-0">Adam Gullium</h6>
                          <span class="small text-warning">
                            <span class="material-symbols-rounded align-middle fs-6">
                              star
                            </span>
                            <span class="material-symbols-rounded align-middle fs-6">
                              star
                            </span>
                            <span class="material-symbols-rounded align-middle fs-6">
                              star
                            </span>
                            <span class="material-symbols-rounded align-middle fs-6">
                              star
                            </span>
                            <span class="material-symbols-rounded align-middle fs-6">
                              star_half
                            </span>
                          </span>
                        </div>
                      </div>
                      <p class="mb-0 lead">
                        " Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries
                        for previewing layouts and visual mockups. "
                      </p>
                    </div>
                    <!--Card Body End-->


                    <div class="card-footer">
                      <a href="#!" class="text-body d-inline-block me-3">
                        <span class="material-symbols-rounded align-middle fs-4">
                          favorite
                        </span>
                      </a>
                      <a href="#!" class="text-body d-inline-block">
                        <span class="material-symbols-rounded align-middle fs-4">
                          share
                        </span>
                      </a>
                    </div>

                  </div>
                  <!--Card End-->
                </div>
                <div class="col-12 col-xl-4 mb-3 mb-lg-5">

                  <!--Card Begin-->
                  <div class="card">

                    <!--Card Body Begin-->
                    <div class="card-body">
                      <div class="d-flex pb-4 align-items-center justify-content-between">
                        <div class="me-3">
                          <img src="assets/media/avatars/04.jpg" class="avatar rounded-pill shadow-sm" alt="">
                        </div>
                        <div class="d-flex flex-grow-1">
                          <div class="me-2 flex-shrink-0">
                            <h6 class="mb-0">Kasper Dolberg</h6>
                            <span class="text-body-secondary small">Updated 2 hours ago</span>
                          </div>
                          <div class="ms-auto text-end">
                            <span class="badge rounded-pill bg-primary">Developer</span>
                          </div>
                        </div>
                      </div>
                      <div>
                        <h5>Need a Full Stack Developer</h5>
                        <p class="mb-4">
                          Lorem ipsum is placeholder text commonly used in the graphic, publishing industries for
                          previewing layouts and visual mockups.
                        </p>
                        <div class="px-4 py-3 mb-4 border rounded-3 d-flex justify-content-between align-items-center">
                          <div class="flex-grow-1 me-3">
                            <div class="mb-2 d-flex align-items-center"
                            >
                              <sub class="mb-1">$</sub>
                              <h4 class="mb-0 ms-1">9500</h4>
                            </div>
                            <sup class="text-body-secondary">Monthly</sup>
                          </div>
                          <div>
                            <span class="badge rounded-pill bg-success">Full Time</span>
                          </div>
                        </div>
                        <div class="d-grid">
                          <a href="#!" class="btn btn-primary">Apply for this Job</a>
                        </div>
                      </div>
                    </div>
                    <!--Card Body End-->
                  </div>
                  <!--Card End-->
                </div>
                <div class="col-12 col-xl-4 mb-3 mb-lg-5">

                  <!--Card Begin-->
                  <div class="card">

                    <!--Card Body Begin-->
                    <div class="card-body">
                      <div class="d-flex pb-4 align-items-center justify-content-between">
                        <div class="me-3">
                          <img src="assets/media/avatars/04.jpg" class="avatar xl rounded-3 shadow" alt="">
                        </div>
                        <div class="flex-grow-1">
                          <div class="me-2 flex-shrink-0">
                            <h5 class="mb-1">Kasper Dolberg</h5>
                            <span class="text-body-secondary d-block small">Developer at some agency</span>
                          </div>
                        </div>
                      </div>

                      <!--Options-->
                      <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input form-check-input-primary" id="tadmin">
                        <label for="tadmin">Team administrator</label>
                      </div>

                      <div class="form-check mb-2">
                        <input type="checkbox" checked class="form-check-input form-check-input-success" id="mbook">
                        <label for="mbook">Can make bookings</label>
                      </div>

                      <div class="form-check mb-2">
                        <input type="checkbox" checked class="form-check-input form-check-input-warning" id="bproducts">
                        <label for="bproducts">Can buy products</label>
                      </div>
                      <div class="form-check mb-2">
                        <input type="checkbox" checked class="form-check-input form-check-input-info" id="ctasks">
                        <label for="ctasks">Can create tasks</label>
                      </div>

                      <div class="pt-3">
                        <h6>Access cards</h6>
                        <input type="text" class="form-control" placeholder="Type and hit enter">
                      </div>
                    </div>
                    <!--Card Body End-->

                    <!--Card footer-->

                    <div class="card-footer">
                      <div class="d-flex align-items-center justify-content-end">
                        <a href="#!" class="btn btn-sm btn-secondary me-2">Manage</a>
                        <a href="#!" class="btn btn-sm btn-primary">Save changes</a>
                      </div>
                    </div>
                  </div>
                  <!--Card End-->
                </div>
                <div class="col-12 col-xl-8 mb-3 mb-lg-5">

                  <!--Card Begin-->
                  <div class="card table-card table-nowrap overflow-hidden">
                    <div class="card-header">
                      <h5 class="mb-0">My Purchases</h5>
                    </div>
                    <div class="table-responsive">
                      <table class="align-middle table table-striped mb-0">
                        <thead class="small text-uppercase text-body-secondary bg-body">
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <p class="mb-0 fw-bold"><a href="#!" class="text-reset">Name of item</a></p>
                              <small class="text-body-secondary">#INV-1234</small>
                            </td>
                            <td><small>24/12/2019</small></td>
                            <td>$80.00</td>
                            <td>
                              <span class="badge bg-success-subtle text-success paid">
                                Paid
                              </span>
                            </td>
                            <td class="text-end">
                              <a href="#!" class="btn btn-outline-secondary btn-sm">
                                <span class="align-middle me-1 fs-5 material-symbols-rounded">
                                  file_download
                                </span>Download</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-0 fw-bold"><a href="#!" class="text-reset">Name of item</a></p>
                              <small class="text-body-secondary">#INV-1234</small>
                            </td>
                            <td><small>24/12/2019</small></td>
                            <td>$64.00</td>
                            <td>
                              <span class="badge bg-success-subtle text-success paid">
                                Paid
                              </span>
                            </td>
                            <td class="text-end">
                              <a href="#!" class="btn btn-outline-secondary btn-sm disabled">
                                <span class="align-middle me-1 fs-5 material-symbols-rounded">
                                  file_download
                                </span>Download</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-0 fw-bold"><a href="#!" class="text-reset">Name of item</a></p>
                              <small class="text-body-secondary">#INV-1234</small>
                            </td>
                            <td><small>24/12/2019</small></td>
                            <td>$319.00</td>
                            <td>
                              <span class="badge bg-success-subtle text-success paid">
                                Paid
                              </span>
                            </td>
                            <td class="text-end">
                              <a href="#!" class="btn btn-outline-secondary btn-sm">
                                <span class="align-middle me-1 fs-5 material-symbols-rounded">
                                  file_download
                                </span>Download</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-0 fw-bold"><a href="#!" class="text-reset">Name of item</a></p>
                              <small class="text-body-secondary">#INV-1234</small>
                            </td>
                            <td><small>24/12/2019</small></td>
                            <td>$64.00</td>
                            <td>
                              <span class="badge bg-success-subtle text-success paid">
                                Paid
                              </span>
                            </td>
                            <td class="text-end">
                              <a href="#!" class="btn btn-outline-secondary btn-sm">
                                <span class="align-middle me-1 fs-5 material-symbols-rounded">
                                  file_download
                                </span>Download</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-0 fw-bold"><a href="#!" class="text-reset">Name of item</a></p>
                              <small class="text-body-secondary">#INV-1234</small>
                            </td>
                            
                            <td><small>24/12/2019</small></td>
                            <td>$319.00</td>
                            <td>
                              <span class="badge bg-success-subtle text-success paid">
                                Paid
                              </span>
                            </td>
                            <td class="text-end">
                              <a href="#!" class="btn btn-outline-secondary btn-sm">
                                <span class="align-middle me-1 fs-5 material-symbols-rounded">
                                  file_download
                                </span>Download</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <!--Card End-->
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-12 col-xl-4 mb-3 mb-lg-5">
                  <div class="card card-body mb-3 mb-lg-5">
                    <div class="d-flex mb-3 align-items-center">
                      <img src="assets/media/avatars/02.jpg" class="flex-shrink-0 avatar rounded-pill shadow me-4"
                        alt="">
                      <div>
                        <h6 class="mb-0">Mariah Sopranos</h6>
                        <small class="text-body-secondary">21 Oct. 2021, 12:20pm</small>
                      </div>
                    </div>
                    <a href="#!" class="h5 mb-0 text-body">
                      How to create reusable widgets using bootstrap5?
                    </a>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between">
                      <a href="#!" class="small">
                        <span class="material-symbols-rounded align-middle me-1 fs-5">
                          favorite
                        </span> 39 Favorites
                      </a>
                      <a href="#!" class="small">
                        <span class="material-symbols-rounded align-middle me-1 fs-5">
                          comment
                        </span> 19 Comments
                      </a>
                    </div>
                  </div>
                  <div class="card card-body">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="flex-grow-1">
                        <h5 class="mb-4">Sacramento, California</h5>
                        <h2 class="display-4 mb-0">
                          20<sub class="fs-6 text-body-secondary">.C</sub>
                        </h2>
                      </div>
                      <span class="display-2 fw-normal flex-shrink-0">
                        <img src="assets/media/illustration/cloud.png" class="img-fluid width-120 h-auto" alt="">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4 mb-3 mb-lg-5">
                  <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Latest Post</h5>
                      <div class="dropdown">
                        <a href="#" class="text-body-secondary d-block lh-1" role="button" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <span class="align-middle material-symbols-rounded">
                            more_vert
                          </span>
                        </a>
                        <div class="dropdown-menu mt-1 dropdown-menu-end">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--Card body-->
                    <div class="card-body">

                      <!--User-->
                      <div class="d-flex mb-3 align-items-center">
                        <img src="assets/media/avatars/02.jpg" class="flex-shrink-0 avatar rounded-pill shadow me-4"
                          alt="">
                        <div>
                          <div class="d-flex flex-wrap align-items-center">
                            <h6 class="mb-0">Mariah Sopranos</h6>
                            <span class="material-symbols-rounded text-primary fs-4 ms-2">
                              workspace_premium
                            </span>
                          </div>

                          <small class="text-body-secondary">21 Oct. 2021, 12:20pm</small>
                        </div>
                      </div>
                      <!--Poat thumb-->
                      <a href="#!" class="d-block mb-4">
                        <img src="assets/media/900x600/7.jpg" class="img-fluid rounded-3" alt="">
                      </a>

                      <a href="#!" class="h5 mb-0 text-body">
                        How to create reusable widgets using bootstrap5?
                      </a>
                      <hr>
                      <div class="d-flex align-items-center justify-content-between">
                        <a href="#!" class="small">
                          <span class="material-symbols-rounded align-middle me-1 fs-5">
                            favorite
                          </span> 39 Favorites
                        </a>
                        <a href="#!" class="small">
                          <span class="material-symbols-rounded align-middle me-1 fs-5">
                            comment
                          </span> 19 Comments
                        </a>
                      </div>
                      <hr>
                      <a href="#!" class="btn d-block w-100 btn-primary">View Post</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-4 mb-3 mb-lg-5">
                  <!--Card-->
                  <div class="card">
                    <!--Card Image-->
                    <a href="#!" class="d-block">
                      <img src="assets/media/900x600/8.jpg" class="img-fluid card-img-top" alt="">
                    </a>
                    <!--Card body-->
                    <div class="card-body">
                      <a href="#!" class="h5 mb-0 text-body d-block mb-3">
                        How to create reusable widgets using bootstrap5?
                      </a>
                      <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.
                      </p>
                    </div>
                    <!--Card footer-->
                    <div class="d-flex align-items-center justify-content-end card-footer">
                      <a href="#!" class="btn btn-sm btn-outline-secondary">
                         Read more<span class="material-symbols-rounded align-middle ms-1 fs-5 lh-1">
                          chevron_right
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

               <!--Widget row Title-->
               <div class="d-flex mb-7 align-items-center">
                <div class="flex-grow-1 border-top border-gray"></div>
                
                <h5 class="flex-shrink-0 mb-0 px-3">Recently Added Widgets</h5>
                <div class="flex-grow-1 border-top border-gray"></div>
              </div>

              <div class="row">
                <div class="col-12 col-xl-6 mb-3 mb-lg-5">
                  <div class="card overflow-hidden h-100">
                    <div class="card-header d-flex align-items-center">
                      <h5 class="mb-0 flex-grow-1 text-truncate pe-3">Bandwidth Summary</h5>
                      <a href="#!" class="flex-shrink-0 btn btn-sm btn-outline-secondary">
                        <span class="material-symbols-rounded align-middle fs-5 me-1">download</span>
                        Download Report</a>
                    </div>
                    <div class="card-body p-0">
                      <div class="row mx-0">
                        <div class="col-sm-6 col-12 p-4 border-bottom border-end-sm">
                          <!--::begin bandwidth card-->
                          <div class="position-relative">

                            <div class="position-relative">
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                  <span class="fs-4 fw-bold">393</span>
                                  <span class="small">Mb</span>
                                </div>
                                <p class="mb-0">HTTP Traffic</p>
                              </div>
                              <!--Progress bar-->
                              <div class="progress my-2 height-5">
                                <div class="progress-bar rounded-pill progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 small">Monthly target</p>
                                <p class="mb-0 small">17%</p>
                              </div>
                            </div>
                          </div>
                          <!--::/.end bandwidth card-->
                        </div>
                        <div class="col-sm-6 col-12 p-4 border-bottom">
                          <!--::begin bandwidth card-->
                          <div class="position-relative">

                            <div class="position-relative">
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                  <span class="fs-4 fw-bold">151</span>
                                  <span class="small">Mb</span>
                                </div>
                                <p class="mb-0">SMTP Traffic</p>
                              </div>
                              <!--Progress bar-->
                              <div class="progress my-2 height-5">
                                <div class="progress-bar bg-warning rounded-pill progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 small">Monthly target</p>
                                <p class="mb-0 small">34%</p>
                              </div>
                            </div>
                          </div>
                          <!--::/.end bandwidth card-->
                        </div>
                        <div class="col-sm-6 col-12 p-4 border-end-sm border-bottom border-bottom-sm-0">
                          <!--::begin bandwidth card-->
                          <div class="position-relative">

                            <div class="position-relative">
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                  <span class="fs-4 fw-bold">247</span>
                                  <span class="small">Mb</span>
                                </div>
                                <p class="mb-0">FTP Traffic</p>
                              </div>
                              <!--Progress bar-->
                              <div class="progress my-2 height-5">
                                <div class="progress-bar rounded-pill bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 small">Monthly target</p>
                                <p class="mb-0 small">21%</p>
                              </div>
                            </div>
                          </div>
                          <!--::/.end bandwidth card-->
                        </div>
                        <div class="col-sm-6 col-12 p-4">
                          <!--::begin bandwidth card-->
                          <div class="position-relative">
                            <div class="position-relative">
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                  <span class="fs-4 fw-bold">27</span>
                                  <span class="small">Mb</span>
                                </div>
                                <p class="mb-0">POP3 Traffic
                                </p>
                              </div>
                              <!--Progress bar-->
                              <div class="progress my-2 height-5">
                                <div class="progress-bar rounded-pill bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 small">Monthly target</p>
                                <p class="mb-0 small">18%</p>
                              </div>
                            </div>
                          </div>
                          <!--::/.end bandwidth card-->
                        </div>

                      </div>
                      <div class="p-4 border-top-sm bg-body-tertiary">
                        <div class="row align-items-center">
                          <div class="col">
                            <h5 class="text-danger">Running out of your space?</h5>
                            <p>Your storage will be running out soon. Get more space and powerful productivity features.
                            </p>
                            <a href="#!" class="btn btn-primary btn-sm">Upgrade to Pro</a>
                          </div>
                          <div class="col-auto">
                            <img src="assets/media/illustration/sm2.svg" class="width-120 h-auto" alt="">
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 mb-3 mb-lg-5">
                  <div class="card overflow-hidden mb-3 mb-lg-5">
                    <div class="card-body">
                      <div class="mb-3 d-flex align-items-center overflow-hidden">
                        <div>
                          <p class="mb-0 text-truncate">Customers Rate</p>
                        </div>
                        <div class="ps-3 ms-auto">
                          <span class="material-symbols-rounded text-success align-middle">
                            arrow_drop_up
                          </span> 18%
                        </div>
                      </div>
                      <div class="flex-shrink-0 ms-auto">
                        <div class="progress height-10 mb-3">
                          <div class="progress-bar" role="progressbar" aria-label="Segment one" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                          <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
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
                  <div class="card card-body">
                    <div class="mb-auto">
                     <div class="d-flex align-items-staretch">
                       <div class="flex-grow-1">
                         <h3>39</h3>
                     <p class="mb-4">Active Projects</p>
                       </div>
                       <div class="flex-shrink-0">
                         <a href="#!" class="btn btn-primary btn-sm">Manage</a>
                       </div>
                     </div>
                    </div>
                    <div class="mt-auto">
                     <div class="d-flex align-items-center justify-content-between">
                       <p class="mb-0 fw-semibold">Pending</p>
                       <p class="mb-0 fw-semibold">17%</p>
                     </div>
                     <div class="progress mt-2 height-5">
                       <div class="progress-bar bg-primary rounded-pill progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%"></div>
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
                        <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75" data-tippy-content="New orders received in last month" data-tippy-placement="top">info</span>
                      </h6>
                      <div class="d-flex lh-1 align-items-center">
                        <h4 class="mb-0">245</h4>
  
                        <!--vertical line-->
                        <div class="vr lh-1 align-self-center opacity-25 mx-3 height-10" style="min-height: auto;"></div>
                        <!--::/vertical line-->
  
                        <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span>
                        <small>11%</small>
                      </div>
                    </div>
                    <!--::/end card-->
                  </div>
                  <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                    <!--::begin card-->
                    <div class="card card-body">
                      <!--Title-->
                      <h6 class="mb-3">Earnings
                        <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75" data-tippy-content="New orders received" data-tippy-placement="top">info</span>
                      </h6>
                      <div class="d-flex lh-1 align-items-center">
                        <h4 class="mb-0">$756,689</h4>
  
                        <!--vertical line-->
                        <div class="vr lh-1 align-self-center opacity-25 mx-3 height-10" style="min-height: auto;"></div>
                        <!--::/vertical line-->
  
                        <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span>
                        <small>36%</small>
                      </div>
                    </div>
                    <!--::/end card-->
                  </div>
                  <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                    <!--::begin card-->
                    <div class="card card-body">
                      <!--Title-->
                      <h6 class="mb-3">Return
                        <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75" data-tippy-content="Products returns" data-tippy-placement="top">info</span>
                      </h6>
                      <div class="d-flex lh-1 align-items-center">
                        <h4 class="mb-0">87</h4>
  
                        <!--vertical line-->
                        <div class="vr lh-1 align-self-center opacity-25 mx-3 height-10" style="min-height: auto;"></div>
                        <!--::/vertical line-->
  
                        <span class="material-symbols-rounded align-middle text-danger">arrow_drop_down</span>
                        <small>47%</small>
                      </div>
                    </div>
                    <!--::/end card-->
                  </div>
                  <div class="col-sm-6 col-xl-3 mb-3 mb-lg-5">
                    <!--::begin card-->
                    <div class="card card-body">
                      <!--Title-->
                      <h6 class="mb-3">Conversion Rate
                        <span class="material-symbols-rounded ms-2 fs-6 align-middle opacity-75" data-tippy-content="Visitors who purchased at least 1 product" data-tippy-placement="top">info</span>
                      </h6>
                      <div class="d-flex lh-1 align-items-center">
                        <h4 class="mb-0">67%</h4>
  
                        <!--vertical line-->
                        <div class="vr lh-1 align-self-center opacity-25 mx-3 height-10" style="min-height: auto;"></div>
                        <!--::/vertical line-->
  
                        <span class="material-symbols-rounded align-middle text-success">arrow_drop_up</span>
                        <small>24%</small>
                      </div>
                    </div>
                    <!--::/end card-->
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
