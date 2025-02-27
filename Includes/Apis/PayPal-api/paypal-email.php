<?php
include("../../../Includes/Connection/connection.php");

session_start();


if (isset($_SESSION['id_user']) && $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { //Administrator

    header("Location: ../../../Views/Dashboard/index.php");
}
$cart_list = $_SESSION['cart_list'];

foreach ($cart_list as $cart_item) {
    $subtotal = $cart_item['cantidad'] * $cart_item['precio'];
    $total += $subtotal;
    $carrito .=
        "
    <tr>
        <td style='vertical-align: middle; text-align: center;'>" . $cart_item['airline'] . "</td>
        <td style='vertical-align: middle; text-align: center;'>" . $cart_item['cantidad'] . "</td>
        <td style='vertical-align: middle; text-align: center;'>$" . $cart_item['precio'] . "</td>
        <td style='vertical-align: middle; text-align: center;'>$" . $subtotal . "</td>
    </tr>
    ";
}

//_____________________________________________________________________________


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/Exception.php';
require '../../PHPMailer/PHPMailer.php';
require '../../PHPMailer/SMTP.php';

// ---------------------------------------------------------------------------------------

$id_usuario = $_SESSION['id_user'];
$sql = pg_query($conexion, "SELECT *
FROM usuarios
JOIN payment_receipt
ON usuarios.id_usuario = CAST(payment_receipt.id_tlw AS INTEGER)
WHERE usuarios.id_usuario = '$id_usuario'");
while ($datos = pg_fetch_assoc($sql)) {



    // --------------------------- SMTP CONFIG ---------------------------

    //SERVER CONFIG

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'thelivertway@gmail.com';
    $mail->Password   = 'zvypwbuagcuoueny';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;


    // ----- ADJUNTAR IMAGEN AL CORREO -----

    $imagePath = '../../../Assets/Logo/logo.png';
    $imageName = 'logo';
    $mail->addEmbeddedImage($imagePath, $imageName);

    //EMAIL PARTS

    $mail->isHTML(true);
    $mail->Subject = 'TheLibertyWay - PAYMENT RECEIPT';
    $mail->Body    = '<!DOCTYPE html>
    <html>
    
    <head>
        <title>Payment Receipt - The Liberty Way</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 0.875rem;
                line-height: 1.5;
                background-color: #f8f8f8;
                color: #333;
                margin: 0;
                padding: 0;
            }
    
            h1,
            h5,
            h6 {
                color: #dcbb87;
                font-weight: bold;
                margin-top: 0;
            }
    

            h2,
            h4 {
                font-weight: bold;
                margin-top: 0;
            }

            h3 {
                color: #dcbb87;
                border-top: 0.06rem solid #ddd;
                border-bottom: 0.06rem solid #ddd;
            }
    
            a {
                color: #dcbb87;
            }
    
            b {
                color: #dcbb87;
                font-weight: bold;
                margin-top: 0;
            }
    
            .container {
                max-width: 37.5rem;
                margin: 0 auto;
                padding: 1.25rem;
                background-color: #fff;
                border: 0.06rem solid #ddd;
                border-radius: 0.3rem;
            }
    
            .logo {
                text-align: center;
                margin-bottom: 1.3rem;
            }
    
            .logo img {
                max-width: 31.25rem;
                height: auto;
            }
    
            button {
                background-color: #dcbb87;
                color: #fff;
                border: none;
                padding: 0.6rem 1.3rem;
                font-size: 1rem;
                font-weight: bold;
                border-radius: 0.3rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
    
            button:hover {
                background-color: #c9a874;
            }
    
            table {
                width: 100%;
                border-collapse: collapse;
            }
    
            table th {
                border-bottom: 0.06rem solid #000000;
                padding: 0.5rem;
                text-align: left;
            }
    
            table td {
                border-bottom: 0.03rem solid #f5f5f5;
                padding: 0.5rem;
                text-align: left;
            }
    
            .total {
                text-align: right;
                font-size: 1.1rem;
                border-top: 0.06rem solid #ddd;
                border-bottom: 0.06rem solid #ddd;
                padding-top: 0.6rem;
                padding-bottom: 0.6rem;
                margin-top: 1.3rem;
            }
    
            .fecha-emision {
                text-align: center;
            }

            .text-center{
                text-align: center;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="logo">
                <img src="cid:' . $imageName . '">
            </div>
            <center>
                <h3 style="padding: 12px 0 10px 0;">PAYMENT RECEIPT</h3>
            </center>
            <br>
            <p class="text-center" style="font-size: 0.938rem;">Receipt IDㅤ|ㅤ<strong><u>' . $datos['id_transaccion'] . '</u></strong></p>
            <br>
            <hr>
            <p class="text-center"><b><u>Personal Information</u></b></p>
            <div style="display:flex; justify-content: space-around;">
                <p style="margin-right: auto;">Name | <strong>' . $datos['cliente_firstname'] . '</strong></p>
                <p style="margin-left: auto;">Last Name | <strong>' . $datos['cliente_lastname'] . '</strong></p>
            </div>
            <p class="text-center">Email Address | <strong>' . $datos['cliente_emailaddress'] . '</strong></p>
            <div style="display:flex; justify-content: space-around;">
                <p style="margin-right: auto;">Country Code | <strong>' . $datos['cliente_countrycode'] . '</strong></p>
                <p style="margin-left: auto;">Currency Code | <strong>' . $datos['transaccion_currencycode'] . '</strong></p>
            </div>
            
            <br>
            <hr>
            <br><br>
            <center>
                <h3 style="padding: 2px 0 0 0;">RECEIPT DETAILS</h3>
            </center>
            <br>
            <table>
                <thead>
                    <tr>
                        <th style="vertical-align: middle; text-align: center;">Description</th>
                        <th style="vertical-align: middle; text-align: center;">Quantity</th>
                        <th style="vertical-align: middle; text-align: center;">Unit Price</th>
                        <th style="vertical-align: middle; text-align: center;">Total</th>
                    </tr>
                </thead>
                <tbody>
                ' . $carrito . '
                </tbody>
            </table>
            
            <br><br>
            <div class="total">
                <p>Total Paidㅤ|ㅤ<b>$' . $total . '</b></p>
            </div>
            <br><br>
            <h4 class="fecha-emision" style="color: #5a5a5a;"><u><strong>' . $datos['date'] . '</strong></u></h4>
        </div>
    </body>
    
    </html>';
    $mail->AltBody = 'ㅤ';

    // ----- PDF -----
    $pdfContent = file_get_contents('paypal-pdf.php');
    $mail->addStringAttachment($pdfContent, 'Payment Receipt - TheLibertyWay.pdf', 'base64', 'application/pdf');


    //Recipients
    $mail->setFrom('thelivertway@gmail.com', 'TheLibertyWay');
    $mail->addAddress($datos['correo_electronico']);
}
