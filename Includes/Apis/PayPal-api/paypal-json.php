<?php

include('../../../Includes/Connection/connection.php');
include('../../../Includes/Apis/PayPal-api/paypal-email.php');

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

session_start();

print_r($datos);

if (is_array($datos)) {
    $id_transaccion = $datos['detalles']['id'];
    $transaccion_status = $datos['detalles']['status'];
    $transaccion_currencycode = $datos['detalles']['purchase_units'][0]['amount']['currency_code'];
    $transaccion_amount = $datos['detalles']['purchase_units'][0]['amount']['value'];

    $id_payee = $datos['detalles']['purchase_units'][0]['payee']['merchant_id'];
    $payee_email = $datos['detalles']['purchase_units'][0]['payee']['email_address'];

    $id_cliente = $datos['detalles']['payer']['payer_id'];
    $cliente_emailaddress = $datos['detalles']['payer']['email_address'];
    $cliente_firstname = $datos['detalles']['payer']['name']['given_name'];
    $cliente_lastname = $datos['detalles']['payer']['name']['surname'];
    $cliente_countrycode = $datos['detalles']['payer']['address']['country_code'];
    $date = $datos['detalles']['update_time'];
    $new_date = date('Y-m-d H:i:s', strtotime($date));



    $id_usuario = $_SESSION['id_user'];
    $sql2 = pg_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'");
    $datos = pg_fetch_assoc($sql2);

    $id_tlw = $datos['id_usuario'];

    $user_tlw = $datos['usuario'];

    $status = "CHECKING";

    $sql = "INSERT INTO payment_receipt(id_transaccion,transaccion_status,transaccion_currencycode,transaccion_amount,id_payee,payee_email,id_cliente,cliente_emailaddress,cliente_firstname,cliente_lastname,cliente_countrycode,date,id_tlw,user_tlw,status)VALUES('$id_transaccion','$transaccion_status','$transaccion_currencycode','$transaccion_amount','$id_payee','$payee_email','$id_cliente','$cliente_emailaddress','$cliente_firstname','$cliente_lastname','$cliente_countrycode','$new_date','$id_tlw','$user_tlw','$status')";


    if (pg_query($conexion, $sql)) {

        $mail->send();

    }
}
