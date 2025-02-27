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
    <link rel="stylesheet" href="../../CSS/Dashboard/style.min.css">
  </head>

  <body>
    <!--:Dark Mode:-->
    <div class="position-absolute z-3 w-auto h-auto end-0 top-0 mt-4 me-4">
      <div class="dropdown">
        <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="bs-theme" type="button"
          aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
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
      </div>
    </div>
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

    <!--Page decoration bg-->
    <svg class="position-absolute start-50 top-50 translate-middle w-100 h-auto text-success" width="269" height="46"
      viewBox="0 0 269 46" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M1 45.5883L2.85333 42.4379C4.70667 39.2875 8.41333 32.9866 12.12 32.3827C15.8267 31.7787 19.5333 36.8717 23.24 34.6264C26.9467 32.3812 30.6533 22.7977 34.36 15.7916C38.0667 8.78544 41.7733 4.35666 45.48 2.24437C49.1867 0.132086 52.8933 0.336285 56.6 5.79635C60.3067 11.2564 64.0133 21.9724 67.72 25.115C71.4267 28.2576 75.1333 23.8268 78.84 23.2826C82.5467 22.7384 86.2533 26.0807 89.96 28.7572C93.6667 31.4337 97.3733 33.4443 101.08 33.7153C104.787 33.9862 108.493 32.5175 112.2 26.2199C115.907 19.9223 119.613 8.79583 123.32 7.96574C127.027 7.13565 130.733 16.6019 134.44 18.5189C138.147 20.4358 141.853 14.8034 145.56 15.1708C149.267 15.5381 152.973 21.9051 156.68 22.1048C160.387 22.3045 164.093 16.3369 167.8 11.2909C171.507 6.24493 175.213 2.1206 178.92 4.91021C182.627 7.69982 186.333 17.4034 190.04 20.0102C193.747 22.617 197.453 18.1271 201.16 16.0605C204.867 13.994 208.573 14.3508 212.28 17.9127C215.987 21.4746 219.693 28.2417 223.4 28.7805C227.107 29.3193 230.813 23.6299 234.52 20.1116C238.227 16.5932 241.933 15.246 245.64 13.36C249.347 11.4741 253.053 9.04947 256.76 8.97756C260.467 8.90566 264.173 11.1865 266.027 12.3269L267.88 13.4673"
        stroke-width=".25" stroke="url(#paint0_linear_120_4)" />
      <defs>
        <linearGradient id="paint0_linear_120_4" x1="285.5" y1="16" x2="-1.5" y2="16" gradientUnits="userSpaceOnUse">
          <stop offset="0.0313589" stop-color="currentColor" stop-opacity="0" />
          <stop offset="0.544214" stop-color="currentColor" />
          <stop offset="0.984321" stop-color="currentColor" stop-opacity="0" />
        </linearGradient>
      </defs>
    </svg>
    <div class="d-flex flex-column flex-root">
      <!--Page-->
      <div class="page d-flex flex-row flex-column-fluid z-1 position-relative">
        <!--///////////Page content wrapper///////////////-->
        <main class="page-content overflow-hidden ms-0 d-flex flex-column flex-row-fluid">


          <!--//content//-->
          <div class="content p-1 d-flex flex-column-fluid position-relative">
            <div class="container py-4">
              <div class="row h-100 align-items-center justify-content-center">
                <div class="col-sm-8 col-11 col-lg-5 col-xl-4">
                  <!--Lockscreen Card-->
                  <div class="card card-body pt-10">
                    <!--Lockscreen avatar-->
                    <img src="assets/media/avatars/01.jpg"
                      class="avatar xxl p-1 p-lg-2 bg-body z-1 mt-n7 d-block mx-auto rounded-circle position-absolute top-0 start-50 translate-middle-x"
                      alt="">

                    <h4 class="mb-3 pt-4 text-center">Noah Pierre</h4>
                    <form class="z-1 position-relative needs-validation" novalidate="" action="index.php">
                      <div class="position-relative mb-3">
                        <input type="password" class="form-control form-control-lg bg-transparent" required=""
                          id="floatingLockscreenPass" placeholder="Password">

                        <button
                          class="btn btn-primary p-0 d-flex align-items-center justify-content-center shadow-none border-0 position-absolute end-0 top-50 translate-middle-y me-1 h-75 width-40"
                          type="submit">
                          <span class="material-symbols-rounded align-middle">
                            arrow_forward
                          </span>
                        </button>
                      </div>
                      <p class="small text-body-secondary text-center mb-0">
                        <span class="d-none d-sm-inline-block">Forget password?</span> <a
                          href="page-auth-recover-pass.php"
                          class="ms-2 text-decoration-underline fw-bold link-underline">Recover password</a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--///////////Page content wrapper end///////////////-->

          <!--//Page-footer//-->
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
      </div>
    </div>
    
    <!--////////////Theme Core scripts Start/////////////////-->
    <script src="../../JS/Dashboard/theme.bundle.min.js"></script>

    <!--////////////Theme Core scripts End/////////////////-->

  </body>

</html>
