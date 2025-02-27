<div class="modal fade" id="createhotelroom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">Create a
                    Hotel Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="modal-body">
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Hotel</label>
                        <input type="text" class="form-control" name="hotel" id="inputEmail4" placeholder="Holiday Inn">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategory" class="form-label">No. Adults</label>
                        <input type="text" class="form-control" name="adultos" id="inputFlightType" placeholder="2">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategory" class="form-label">No. Kids</label>
                        <input type="text" class="form-control" name="kids" id="inputAddress" placeholder="3">
                    </div>
                    <div class="col-md-12">
                        <label for="inputFrom" class="form-label">Category</label>
                        <select type="text" class="form-control" name="categoria" id="inputAddress" placeholder="Suite Class">
                            <option disabled selected>Choose an Category</option>
                            <option value="Standard Class">Standard Class</option>
                            <option value="Executive Class">Executive Class</option>
                            <option value="Suite Class">Suite Class</option>
                            <option value="Family Class">Family Class</option>
                            <option value="Deluxe Class">Deluxe Class</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="singleDatePicker" class="form-label">Check-in Date</label>
                        <input id="singleDatePicker" class="form-control" name="check-in" data-inputmask="'alias':'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Check-out Date</label>
                        <input id="singleDatePicker2" class="form-control" name="check-out" data-inputmask="'alias':'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                    </div>
                    <div class="col-md-12">
                        <label for="inputTo" class="form-label">Price per day ($USD)</label>
                        <input type="text" class="form-control" name="price" id="inputAddress" placeholder="Price" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" inputmode="decimal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="insert_hotel" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require "../../Includes/Connection/connection.php";
session_start();
//-------------------------- INSERT HOTEL -------------------------------------------------
if (isset($_POST['insert_hotel'])) {
    if (empty($_POST['hotel'])) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the hotel field!'
        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else if (empty($_POST['adultos'])) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the adults field!'
        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else if (empty(($_POST['kids']))) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the kids field!'
        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else if (empty($_POST['categoria'])) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the hotel category field!'
        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else if (empty($_POST['check-in'])) {

        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the check-in date field!'
        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else if (empty($_POST['check-out'])) {
        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the check-out date field!'
        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else if (empty($_POST['price'])) {
        $_SESSION['alerta'] = array(
            'icon' => 'warning',
            'title' => 'OOPS...',
            'text' => 'You must complete the price field!'

        );
        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
    } else {
        $hotel = $_POST['hotel'];
        $adults = $_POST['adultos'];
        $kids = $_POST['kids'];
        $categoria = $_POST['categoria'];
        $check_in = strtotime($_POST['check-in']);
        $check_out = strtotime($_POST['check-out']);
        $price = $_POST['price'];

        if (!preg_match("/-/", $price)) {
            if ($adults >= 1 || $kids >= 1) {
                if ($check_in < $check_out) {
                    $f1 = date('m-d-Y', $check_in);
                    $f2 = date('m-d-Y', $check_out);
                    $sql = "INSERT INTO hotels(hotel,adultos,kids,categoria,check_in,check_out,precio) VALUES ('$hotel','$adults','$kids','$categoria','$f1','$f2','$price')";
                    if (pg_query($conexion, $sql)) {

                        $_SESSION['alerta'] = array(
                            'icon' => 'success',
                            'title' => 'Successful registration',
                            'text' => 'The hotel room has been successfully registered!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                    } else {

                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'Registration error',
                            'text' => 'Hotel Room register error!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                    }
                } else if ($check_in > $check_out) {
                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'OOPS...',
                        'text' => 'Check-in Date must be before Check-out Date!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                }
            } else {
                $_SESSION['alerta'] = array(
                    'icon' => 'error',
                    'title' => 'OOPS...',
                    'text' => 'Do not right negative numbers!'
                );

                header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
            }
        } else{
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'OOPS...',
                'text' => 'Do not right negative numbers!'
            );

            header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
        }
    }
}
//------------------------- FIN INSERT HOTEL ROOMS ---------------------------------
?>
