<?php

include("../../../../Includes/Connection/connection.php");
include("../../../../Includes/Cart/PHP/cart.php");
session_start();

// ______________________________________________________________________________________________

if (isset($_POST['action'])) {

    $action = $_POST['action'];
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    if ($action == 'action') {
        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 0;
        $respuesta = update($id, $quantity);

        if ($respuesta > 0) {
            $datos['ok'] = true;
        } else {
            $datos['ok'] = false;
        }

        $datos['sub'] = MONEDA . number_format($respuesta, 2, '.', ',');

    } else {

        $datos['ok'] = false;

    }

} else {

    $datos['ok'] = false;

}

echo json_encode($datos);


function update($id, $quantity) {

    include("../../../../Includes/Connection/connection.php");
    include("../../../../Includes/Cart/PHP/cart-config.php");
    session_start();

    $resultado = 0;
    if ($id > 0 && $quantity > 0 && is_numeric(($quantity))) {
        if (isset($_SESSION['carrito']['tickets'][$id])) {

            $_SESSION['carrito']['tickets'][$id] = $quantity;
            $id--;
            $_SESSION['flights']['data'][$id]["cantidad"] = $quantity;

            // $sql = "SELECT precio FROM vuelos WHERE id_vuelo = $id";
            // $result = pg_query($conexion, $sql);
            // $row = pg_fetch_array($result);

            $price = $_SESSION['flights']['data'][$id]['price']['total'];
            $resultado = $quantity * $price;

            return $resultado;
        }

    } else {

        return $resultado;

    }
}

?>