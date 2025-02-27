<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="build/css/demo.css">
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
  <script src="build/js/intlTelInput.js"></script>

  <title>Document</title>
</head>

<div class="container">
 <form id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
   <p>Enter your phone number:</p>
   <input id="phone" type="tel" name="phone" />
   <button id="verify-btn" onclick="process(event)" type="submit" class="btn" value="Verify" name="btncheck">Check</button>
 </form>
</div>


<div class="alert alert-info" style="display: none;"></div>

<script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "build/js/utils.js",
        });

        const info = document.querySelector(".alert-info");

        $("#verify-btn").on("click", function(e) {
            e.preventDefault();
            const phoneNumber = phoneInput.getNumber();
            $.ajax({
                url: "../../Includes/Login-Registro/number.php",
                type: "post",
                data: {
                    phone: phoneNumber
                },
                success: function(data) {
                    console.log('hecho')
                },
                error: function(data){
                  console.log("erro en ajax")
                }
            });
        });
    </script>
</html>