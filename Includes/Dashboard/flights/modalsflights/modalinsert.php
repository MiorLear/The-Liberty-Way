 <!--Modal Create-->

 <div class="modal fade" id="createflight" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">

             <div class="modal-header">
                 <h5 class="modal-title" id="exampleCenteredLabel">Create a
                     Flight</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                 <div class="modal-body">
                     <div class="col-12">
                         <label for="inputEmail4" class="form-label">Airline</label>
                         <select type="text" placeholder="Choose an Airline" class="form-control" name="aerolinea" id="aerolinea">
                             <option disabled selected>Choose an Airline</option>
                             <option value="American Airlines">American Airlines</option>
                             <option value="Avianca">Avianca</option>
                             <option value="Volaris">Volaris</option>
                         </select>
                     </div>
                     <div class="col-md-12">
                         <label for="inputCategory" class="form-label">Flight type (Do not write on Departure Date in case of One Way)</label>
                         <select type="text" class="form-control" name="tipo_vuelo" id="tipo_vuelo" placeholder="Round-trip">
                             <option disabled selected>Choose an Airline</option>
                             <option value="Round trip">Round trip</option>
                             <option value="One way">One way</option>
                         </select>
                     </div>
                     <div class="col-md-12">
                         <label for="inputCategory" class="form-label">Category</label>
                         <select type="text" class="form-control" name="categoria_vuelo" id="categoria_vuelo" placeholder="Business Class">
                             <option disabled selected>Choose an Airline</option>
                             <option value="Tourist Class">Tourist Class</option>
                             <option value="Business Class">Business Class</option>
                             <option value="First Class">First Class</option>
                         </select>
                     </div>
                     <div class="col-md-12">
                         <label for="inputFrom" class="form-label">From</label>
                         <input type="text" class="form-control" name="lugar_salida" id="lugar_salida" placeholder="Canada">
                     </div>
                     <div class="col-md-12">
                         <label for="inputTo" class="form-label">To</label>
                         <input type="text" class="form-control" name="lugar_destino" id="lugar_destino" placeholder="France">
                     </div>
                     <div class="col-12">
                         <label for="singleDatePicker" class="form-label">Departure Date</label>
                         <input id="singleDatePicker" name="fecha_salida" class="form-control" data-inputmask="'alias':'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                     </div>
                     <div class="col-md-12">
                         <label for="inputCity" class="form-label">Return Date</label>
                         <input name="fecha_destino" class="form-control" type="date">
                     </div>
                     <div class="col-md-12">
                         <label for="inputCity" class="form-label">Price($)</label>
                         <input id="precio" name="precio" class="form-control" type="text" minlength="7" maxlength="10" placeholder="$999.99 USD" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" inputmode="decimal">
                     </div>
                     <br>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button name="insert_flight" class="btn btn-primary">Save changes</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <?php
    require "../../Includes/Connection/connection.php";
    session_start();
    //-------------------------- INSERT VUELO -------------------------------------------------
    if (isset($_POST['insert_flight'])) {
        if (empty($_POST['aerolinea'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the airline field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty($_POST['tipo_vuelo'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the flight type field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty(($_POST['categoria_vuelo']))) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the flight category field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty($_POST['lugar_salida'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the place of departure field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty($_POST['lugar_destino'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the target place field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty($_POST['fecha_salida'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the date of departure field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty($_POST['fecha_destino']) && $_POST['fecha_destino'] == "Round trip") {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the target date field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else if (empty($_POST['precio'])) {

            $_SESSION['alerta'] = array(
                'icon' => 'warning',
                'title' => 'Oops...',
                'text' => 'You must complete the price field!'
            );

            header("Location: ../../Views/Dashboard/dashboard_flight.php");
        } else {
            $airline = $_POST['aerolinea'];
            $flight_type = $_POST['tipo_vuelo'];
            $flight_category = $_POST['categoria_vuelo'];
            $salida = $_POST['lugar_salida'];
            $destino = $_POST['lugar_destino'];
            $fecha_salida = strtotime($_POST['fecha_salida']);
            $fecha_destino = strtotime($_POST['fecha_destino']);
            $precio = $_POST['precio'];
            if (!preg_match("/-/", $precio)) {
                if ($flight_type == "Round trip") {
                    if ($fecha_salida < $fecha_destino) {

                        $f1 = date('m-d-Y', $fecha_salida);
                        $f2 = date('m-d-Y', $fecha_destino);
                        $sql = "INSERT INTO vuelos(aerolinea,tipo_vuelo,categoria_vuelo,lugar_salida,lugar_destino,fecha_salida,fecha_destino,precio)
                    VALUES ('$airline','$flight_type','$flight_category','$salida','$destino','$f1','$f2','$precio')";

                        if (pg_query($conexion, $sql)) {

                            $_SESSION['alerta'] = array(
                                'icon' => 'success',
                                'title' => 'Successful registration',
                                'text' => 'The flight has been successfully registered!'
                            );

                            header("Location: ../../Views/Dashboard/dashboard_flight.php");
                        } else {

                            $_SESSION['alerta'] = array(
                                'icon' => 'error',
                                'title' => 'Registration error',
                                'text' => 'Flight check-in error!'
                            );

                            header("Location: ../../Views/Dashboard/dashboard_flight.php");
                        }
                    } else if ($fecha_salida > $fecha_destino) {


                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'Registration error',
                            'text' => 'Departure Date must be before Return Date!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_flight.php");
                    }
                } else if ($flight_type == "One way" && (!empty($fecha_destino))) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'Registration error',
                        'text' => 'Return date not available with one way!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_flight.php");
                } else if ($flight_type == "One way" && (empty($fecha_destino))) {
                    $f1 = date('m-d-Y', $fecha_salida);
                    $sql = "INSERT INTO vuelos(aerolinea,tipo_vuelo,categoria_vuelo,lugar_salida,lugar_destino,fecha_salida,fecha_destino,precio)
                VALUES ('$airline','$flight_type','$flight_category','$salida','$destino','$f1','Not Available','$precio')";
                    if (pg_query($conexion, $sql)) {

                        $_SESSION['alerta'] = array(
                            'icon' => 'success',
                            'title' => 'Successful registration',
                            'text' => 'The flight has been successfully registered!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_flight.php");
                    } else {
                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'Registration error',
                            'text' => 'Flight check-in error!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_flight.php");
                    }
                }
            } else {
                $_SESSION['alerta'] = array(
                    'icon' => 'error',
                    'title' => 'Registration error',
                    'text' => 'Price error!'
                );

                header("Location: ../../Views/Dashboard/dashboard_flight.php");
            }
        }
    }
    ?>