<?php
session_start();

// _____________________________________________________________

define("KEY_TOKEN", "APR.wqc-354*");
define("MONEDA", "$");

// _____________________________________________________________

$num_cart = 0;
if (isset($_SESSION['carrito']['tickets'])) {
    $num_cart = count($_SESSION['carrito']['tickets']);
}

?>