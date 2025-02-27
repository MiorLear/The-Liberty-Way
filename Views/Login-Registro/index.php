<?php
include("../../Includes/Connection/connection.php");
session_start();




//___________________________________________________________________________________________________________

if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 3) { //User
  header("Location: ../../Views/Home/index.php");
} elseif (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { //Administrator
  header("Location: ../../Views/Dashboard/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <script src="js/intlTelInput.js"></script>
  <link rel="shortcut icon" href="../../Assets/Home/images/fav.svg" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/Login-Registro/style.css" />

  <!-- Countries Flags -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="build/js/intlTelInput.js"></script>

  <!-- CSS | Animated Anchor -->
  <link rel="stylesheet" href="../../CSS/Home/animated-anchor.css">

  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/79d3ca1a80.js" crossorigin="anonymous"></script>

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <title>Login | The Liberty Way</title>

  <style>
    .fa-chevron-left {
      position: fixed;
      z-index: 50;
      top: 40px;
      left: 30px;
    }
  </style>

  <style>
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 0px 0 0 0;
      box-sizing: border-box;
    }

    @media screen and (max-width: 767px) {
      .form-container {
        height: 400px;
        /* Set a fixed height for the container to enable scrolling */
        overflow-y: auto;
        /* Enable vertical scrolling if the content overflows */
      }

      /* Adjust the width of the input fields to fit the smaller screen */
      .form-container input[type="text"],
      .form-container input[type="email"],
      .form-container input[type="phone"],
      .form-container input[type="password"] {
        width: 100%;
        /* Set the width to 100% of the container */
        box-sizing: border-box;
        /* Ensure padding is included in the input field's width */
      }


    }

    /* Styles for larger screens (768px and above) */
    @media screen and (min-width: 768px) {
      .form-container {
        height: auto;
        /* Allow the container to adjust its height according to the content */
        overflow-y: hidden;
        /* Hide the vertical scrollbar for larger screens */
      }
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="forms-container">
      <div class="signin-signup">
        <!-- FORMULARIO INICIAR SESIÓN -->
        <form action="../../Includes/Login-Registro/login.php" method="POST" class="sign-in-form">

          <h2 class="title"><u>Log In </u></h2>
          </br>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="User_L_Email" placeholder="User" minlength="3" maxlength="15" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" name="PasswordL" placeholder="Password" minlength="5" maxlength="20" required />
            <i id="toggleIcon" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility()"></i>
          </div>
          <br>
          <a href="../../Views/Login-Registro/insertmail.php" class="btn--base">Forgot Password? <i class="fa-solid fa-arrow-right-long fa-xl"></i></a>
          </br>
          <input type="submit" name="sign_in" class="btn" value="Continue" />

          <p class="social-text">Or Login with one of these platforms.</p>

          <div class="social-media">
            <!-- <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a> -->
            <a href="../../Includes/Login-Registro/api-google-logic-log.php" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <!-- <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a> -->
          </div>

        </form>





        <!-- FORMULARIO PARA REGISTRARSE -->



        <form class="sign-up-form" method="post">
          <h2 class="title" style="padding: 35px 0 0 0 ;"><u>Sign In</u></h2>
          <div class="form-container">
            <center>

              <div class="input-field">
                <i class="fas fa-user"></i>
                <input data-id="UserR" type="text" name="UserR" placeholder="User" minlength="3" maxlength="15" required />
              </div>

              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input data-id="EmailR" type="email" name="EmailR" placeholder="Email address" minlength="5" maxlength="30" required />
              </div>

              <div class="input-field">
                <input id="phone" type="number" style="padding: 15px 0 0 50px;" min="1" required />
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input data-id="PasswordR" type="password" id="password2" name="PasswordR" placeholder="Password" minlength="5" maxlength="20" required />
                <i id="toggleIcon2" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility2()"></i>
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input data-id="RepeatpasswordR" type="password" id="password3" name="RepeatpasswordR" placeholder="Repeat Password" minlength="5" maxlength="20" required />
                <i id="toggleIcon3" class="fa-regular fa-eye password-toggle" onclick="togglePasswordVisibility3()"></i>
              </div>

              <div class="options">
                <ul>
                  <li>
                    <input data-id="terms" type="checkbox" name="terms" id="design">
                    <label for="design">
                      <span class="circle" style="position: absolute; left: -20px;"></span>
                      <span class="fireworks" style="position: absolute; left: -10px;"></span>
                      <span class="text" style="position: absolute; right: -50px;"><a href="terms&conditions.php" class="btn--base-responsive" style="size: 5px;">Terms & Conditions<i class="fa-solid fa-arrow-right-long fa-xl"></i></a></span>
                    </label>
                  </li>
              </div>


              <center>
                <input data-id="sign_up" value='sign up' type='submit' id='sign_up' class='btn' name='sign_up'></input>


                <!-- <input onclick="process(event)" id="verify-btn" type="submit" class="btn" name="sign_up" /> -->
              </center>

              <p class="social-text">Or Sign In with one of these platforms.</p>




              <div class="social-media">
                <!-- <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a> -->
                <a href="../../Includes/Login-Registro/api-google-logic.php" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <!-- <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a> -->
              </div>
              <br>
              <div class="g-recaptcha" data-sitekey="6Le8aE4nAAAAAFsKb7lGrbsO3Gi8fFfMQu4j29q-"></div>


            </center>

          </div>



        </form>
      </div>
    </div>

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

    <!-- APARTADO PARA CAMBIAR DE FORMULARIOS -->
    <div class="panels-container">
      <div class="panel left-panel">
        <a class="icon-left" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
          <i class="fa-solid fa-chevron-left fa-xl fa-bounce" style="color: #7a6643;"></i>
        </a>
        <div class="content">
          <h3><u>Don't have an account yet?</u></h3>
          <p>
            Join our online community and start enjoying all our services!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign Up
          </button>
        </div>
        <img src="../../Assets/Login-Registro/img/world.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel">
        <a class="icon-left" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
          <i class="fa-solid fa-chevron-left fa-xl fa-bounce" style="color: #7a6643;"></i>
        </a>
        <div class="content">
          <h3><u>Already have an account?</u></h3>
          <p>
            Welcome back!<br>
            Log in to your account to access all that "The Liberty Way" has to offer.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Log In
          </button>
        </div>
        <img src="../../Assets/Login-Registro/img/airplane.svg" class="image" alt="" />
      </div>
    </div>
  </div>


  <!-- ----- SCRIPT ----- -->
  <script src="../../JS/Login-Registro/app.js"></script>

  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password");
      var toggleIcon = document.getElementById("toggleIcon");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
      }
    }

    function togglePasswordVisibility2() {
      var passwordInput = document.getElementById("password2");
      var toggleIcon = document.getElementById("toggleIcon2");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
      }
    }

    function togglePasswordVisibility3() {
      var passwordInput = document.getElementById("password3");
      var toggleIcon = document.getElementById("toggleIcon3");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
      }
    }
  </script>

<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "build/js/utils.js",
    });

    $("#sign_up").on("click", function(e) {
      e.preventDefault();

      const phoneNumber = phoneInput.getNumber();
      const User = $("input[name=UserR]").val();
      const Email = $("input[name=EmailR]").val();
      const Password = $("input[name=PasswordR]").val();
      const Repeatpassword = $("input[name=RepeatpasswordR]").val();
      const termsChecked = $("#design").prop("checked");
      const button = $("input[name=sign_up]").val();
      const token = $("#g-recaptcha-response").val();

      $.ajax({
        url: "../../Includes/Login-Registro/register.php",
        type: "POST",
        data: {
          sign_up: button,
          phone: phoneNumber,
          UserR: User,
          EmailR: Email,
          PasswordR: Password,
          RepeatpasswordR: Repeatpassword,
          terms: termsChecked ? "check" : "unchecked",
          captcha: token,
        },
        dataType: 'json',
        success: function(data) {


          if (data.icon == 'success') {
            Swal.fire({
              icon: data.icon,
              title: data.title,
              text: data.text,
 
            }).then(function() {
              location.reload();

              
            });
          } else {
            Swal.fire({
              icon: data.icon,
              title: data.title,
              text: data.text,

            })
          }


        },
        error: function(data) {
          console.log("error en ajax");
        },
      });
    });
  </script>

  <script src="build/js/intlTelInput.js"></script>

</body>

</html>