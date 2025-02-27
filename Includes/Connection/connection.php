<?php
include("config.php");

$conexion = pg_connect($connection_BD);

if (!$conexion) {
    echo "<marquee>Not connected to db</marquee>\n";
}
// else{
//     echo "<marquee>Conectado</marquee>";
// }
?>