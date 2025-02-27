<?php

include("../../../Includes/Connection/connection.php");
include("../../../Includes/Cart/PHP/cart.php");
session_start();

// ______________________________________________________________________________________________

$tickets = isset($_SESSION['carrito']['tickets']) ? $_SESSION['carrito']['tickets'] : null;

$cart_list = array();

if ($tickets != null) {

    foreach ($tickets as $id => $quantity) {

        $id--;
        // echo $id;
        $_SESSION['flights']['data'][$id]["cantidad"] = $quantity;
        if (isset($_SESSION['flights']['data'][$id])) {
            if ($_SESSION['flights']['data'][$id]['type'] == 'flight-offer') {
                $cart_list[$id]['id'] = isset($_SESSION['flights']['data'][$id]['id']) ? $_SESSION['flights']['data'][$id]['id'] : null;
                $cart_list[$id]['airline'] = isset($_SESSION['flights']['data'][$id]['airline']) ? $_SESSION['flights']['data'][$id]['airline'] : null;
                if (isset($_SESSION['flights']['data'][$id]['itineraries'][0]['segments'])) {
                    if (count($_SESSION['flights']['data'][$id]['itineraries'][0]['segments']) > 1) {
                        $cart_list[$id]['tipo_vuelo'] = 'Flight by stopovers';
                    } else {
                        $cart_list[$id]['tipo_vuelo'] = 'Direct Flight';
                    }
                }
                $cart_list[$id]['categoria_vuelo'] = isset($_SESSION['flights']['data'][$id]['travelerPricings'][0]['fareDetailsBySegment'][0]['cabin']) ? $_SESSION['flights']['data'][$id]['travelerPricings'][0]['fareDetailsBySegment'][0]['cabin'] : null;
                $cart_list[$id]['lugar_salida'] = isset($_SESSION['flights']['data'][$id]['itineraries'][0]['segments'][0]['departure']['departure_airport']) ? $_SESSION['flights']['data'][$id]['itineraries'][0]['segments'][0]['departure']['departure_airport'] : null;
                $cart_list[$id]['lugar_destino'] = isset(end($_SESSION['flights']['data'][$id]['itineraries'][0]['segments'])['arrival']['arrival_airport']) ? end($_SESSION['flights']['data'][$id]['itineraries'][0]['segments'])['arrival']['arrival_airport'] : null;
                $cart_list[$id]['fecha_salida'] = isset($_SESSION['flights']['data'][$id]['itineraries'][0]['segments'][0]['departure']['at']) ? $_SESSION['flights']['data'][$id]['itineraries'][0]['segments'][0]['departure']['at'] : null;
                $cart_list[$id]['fecha_destino'] = isset(end($_SESSION['flights']['data'][$id]['itineraries'][0]['segments'])['arrival']['at']) ? $_SESSION['flights']['data'][$id]['itineraries'][0]['segments'][0]['departure']['at'] : null;
                $cart_list[$id]['precio'] = isset($_SESSION['flights']['data'][$id]['price']['total']) ? $_SESSION['flights']['data'][$id]['price']['total'] : null;
                $cart_list[$id]['cantidad'] = isset($_SESSION['flights']['data'][$id]['cantidad']) ? $_SESSION['flights']['data'][$id]['cantidad'] : null;
                $cart_list[$id]['item'] = isset($_SESSION['flights']['data'][$id]['type']) ? $_SESSION['flights']['data'][$id]['type'] : null;
                // $cart_list[] = isset($_SESSION['flights']['data'][$id]) ? $_SESSION['flights']['data'][$id] : null;
            } else if ($_SESSION['flights']['data'][$id]['type'] == 'hotel-offer') {
                // echo $_SESSION['flights']['data'][$id]['type'];
                // print_r($_SESSION['flights']['data'][$id]);
                $cart_list[$id]['id'] = isset($_SESSION['flights']['data'][$id]['id']) ? $_SESSION['flights']['data'][$id]['id'] : null;
                $cart_list[$id]['airline'] = isset($_SESSION['flights']['data'][$id]['airline']) ? $_SESSION['flights']['data'][$id]['airline'] : null;
                $cart_list[$id]['precio'] = isset($_SESSION['flights']['data'][$id]['price']['total']) ? $_SESSION['flights']['data'][$id]['price']['total'] : null;
                $cart_list[$id]['cantidad'] = isset($_SESSION['flights']['data'][$id]['cantidad']) ? $_SESSION['flights']['data'][$id]['cantidad'] : null;
                $cart_list[$id]['item'] = isset($_SESSION['flights']['data'][$id]['type']) ? $_SESSION['flights']['data'][$id]['type'] : null;
                // $cart_list[] = isset($_SESSION['flights']['data'][$id]) ? $_SESSION['flights']['data'][$id] : null;
                            }
        } 
    }
}

?>

<!-- ______________________________________________________________________________________________ -->

<?php
if ($cart_list == null) {
    echo "<hr class='my-4'>
          <br><br><br><br><br>
          <div class='cart-footer'>
            <h3 style='color: #5a5a5a;'><span class='cart-total'><u>CART EMPTY</u></span></h3>
            <br><br><br><br><br>
          </div>";
} else {
    $total = 0;

    foreach ($cart_list as $ticket) {
        // echo '<pre>';
        // print_r($ticket);
        // echo '</pre>';        
        $id_vuelo = $ticket['id'];
        $aerolinea = $ticket['airline'];
        $tipo_vuelo = $ticket['tipo_vuelo'];
        $categoria_vuelo = $ticket['categoria_vuelo'];
        $lugar_salida = $ticket['lugar_salida'];
        $lugar_destino = $ticket['lugar_destino'];
        $fecha_salida = $ticket['fecha_salida'];
        $fecha_destino = $ticket['fecha_destino'];
        $precio = $ticket['precio'];
        $cantidad = $ticket['cantidad'];
        $subtotal = $cantidad * $precio;
        $total += $subtotal;
?>

        <!-- cart item -->
        <div class="cart-item">
            <img src="../../Assets/Home/images/about-two.png" alt="product">
            <div>
                <h4><?php echo $aerolinea; ?></h4>
                <h5 id="subtotal_<?php echo $id_vuelo; ?>" name="subtotal[]"><?php echo MONEDA . number_format($subtotal, 2, '.', ','); ?></h5>
                <p class="cart-item-p"><?php echo $categoria_vuelo; ?></p>
            </div>
            <div>
                <!-- <i class="fas fa-chevron-up"></i>
                <p class="item-amount"><?php echo $cantidad; ?></p>
                <i class="fas fa-chevron-down"></i> -->
                <input type="number" inputmode="numeric" onkeydown="return false;" class="minimal-input" min="1" max="10" step="1" value="<?php echo $cantidad; ?>" size="2" id="quantity_<?php echo $id_vuelo; ?>" data-id="<?php echo $id_vuelo; ?>">
            </div>
            <div>
                <button value="<?php echo $id_vuelo; ?>" class="delete-to-cart-btn" style="background-color: transparent;"><i class="fa-solid fa-trash"></i></button>
            </div>

        </div>
        <!-- end cart item -->

        <hr class="my-4">

    <?php } ?>

    <div class="cart-footer">
        <h2 style="color: #000;"><b><u>Your Total:</u></b></h2>
        <h3 id="total"><?php echo "<span class='cart-total'>" . MONEDA . number_format($total, 2, '.', ','); ?></span></h3>
        <br><br>
        <a href="../../../../../TheLibertyWay/Views/Cart/cart_checkout.php" class="clear-cart cart-banner-btn">Check Out</a>
        <br>
    </div>

<?php } ?>