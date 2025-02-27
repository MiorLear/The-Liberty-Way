<?php

include("../../../../Includes/Cart/PHP/cart.php");
session_start();

if (isset($_POST['action'])) {

    $id = $_POST['id'];
    $_SESSION['flight_id'] = $id;
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp) {

        if (!isset($_SESSION['carrito']['tickets'][$id])) {
            $_SESSION['carrito']['tickets'][$id] = 1;
            $datos['numero'] = count($_SESSION['carrito']['tickets']);
            $datos['success'] = true;

        } else {

            $datos['warning'] = true;

        }
    } else {

        $datos['error'] = true;

    }

} else {

    $datos['error'] = true;

}

echo json_encode($datos);
