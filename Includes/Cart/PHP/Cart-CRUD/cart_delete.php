<?php

include("../../../../Includes/Connection/connection.php");
include("../../../../Includes/Cart/PHP/cart.php");
session_start();

// ______________________________________________________________________________________________

if (isset($_POST['action'])) {

    $action = $_POST['action'];
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    if ($action == 'action') {

        $datos['ok'] = delete($id);
        
    } else {

        $datos['ok'] = false;

    }
} else {

    $datos['ok'] = false;
}

echo json_encode($datos);


function delete($id)
{

    if ($id > 0 && is_numeric($id)) {

        if (isset($_SESSION['carrito']['tickets'][$id])) {

            unset($_SESSION['carrito']['tickets'][$id]);

            return true;
        }
    } else {

        return false;
    }
}

?>