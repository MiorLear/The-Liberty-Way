<?php

session_start();
unset($_SESSION['carrito']);
header("Location: ../../../Views/Home/index.php");

?>