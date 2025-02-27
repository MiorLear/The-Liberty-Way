<div class="modal fade" id="updateflight<?php echo $row['id_vuelo'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">Update
                    Flight</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row['id_vuelo'] ?>">
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Airline</label>
                            <select type="text" class="form-control" name="aerolinea" id="aerolinea" required="true">
                            <option selected> <?php echo $row['aerolinea'] ?></option>
                                <option value="American Airlines">American Airlines</option>
                                <option value="Avianca">Avianca</option>
                                <option value="Volaris">Volaris</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputCategory" class="form-label">Flight type</label>
                            <select type="text" class="form-control" name="tipo_vuelo" id="tipo_vuelo" required="true">
                            <option selected> <?php echo $row['tipo_vuelo'] ?></option>
                                <option value="Round trip">Round trip</option>
                                <option value="One way">One way</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputCategory" class="form-label">Category</label>
                            <select type="text" class="form-control" name="categoria_vuelo" id="categoria_vuelo"  required="true">
                                 <option selected> <?php echo $row['categoria_vuelo'] ?></option>
                                <option value="Tourist Class">Tourist Class</option>
                                <option value="Business Class">Business Class</option>
                                <option value="First Class">First Class</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputFrom" class="form-label">From</label>
                            <input type="text" class="form-control" name="lugar_salida" id="lugar_salida" value="<?php echo $row['lugar_salida'] ?>" required="true">
                        </div>
                        <div class="col-md-12">
                            <label for="inputTo" class="form-label">To</label>
                            <input type="text" class="form-control" name="lugar_destino" id="lugar_destino" value="<?php echo $row['lugar_destino'] ?>" required="true">
                        </div>
                        <div class="col-12">
                            <label for="singleDatePicker" class="form-label">Departure Date</label>
                            <input id="singleDatePicker<?php echo $row['fecha_salida'] ?>" name="fecha_salida" class="form-control" value="<?php echo $row['fecha_salida'] ?>" required="true" data-inputmask="'alias':'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCity" class="form-label">Return Date</label>
                            <input name="fecha_destino" class="form-control" value="<?php echo $row['fecha_destino'] ?>" type="date">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCity" class="form-label">Price</label>
                            <input id="precio" name="precio" class="form-control" minlength="7" maxlength="10" type="text" value="<?php echo $row['precio'] ?>" required="true" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" inputmode="decimal">
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="update_flight" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>



            <?php
            require "../../Includes/Connection/connection.php";

            //-------------------------- UPDATE VUELO -------------------------------------------------
            if (isset($_POST['update_flight'])) {
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

                    $id = $_POST['id'];
                    $airline = $_POST['aerolinea'];
                    $flight_type = $_POST['tipo_vuelo'];
                    $flight_category = $_POST['categoria_vuelo'];
                    $salida = $_POST['lugar_salida'];
                    $destino = $_POST['lugar_destino'];
                    $fecha_salida = strtotime($_POST['fecha_salida']);
                    $fecha_destino = strtotime($_POST['fecha_destino']);
                    $precio = $_POST['precio'];
                    if (!preg_match("/-/", $_POST['precio'])) {
                        if ($flight_type == "Round trip") {
                            if ($fecha_salida < $fecha_destino) {
                                $f1 = date('m-d-Y', $fecha_salida);
                                $f2 = date('m-d-Y', $fecha_destino);

                                $sql = "UPDATE vuelos SET aerolinea ='$airline', tipo_vuelo='$flight_type', categoria_vuelo='$flight_category', lugar_salida='$salida', 
                            lugar_destino='$destino', fecha_salida='$f1', fecha_destino='$f2', precio='$precio' WHERE id_vuelo='$id'";

                                if (pg_query($conexion, $sql)) {

                                    $_SESSION['alerta'] = array(
                                        'icon' => 'success',
                                        'title' => 'Data has been updated correctly',
                                        'text' => 'Successfully updated flight!'
                                    );

                                    header("Location: ../../Views/Dashboard/dashboard_flight.php");
                                } else {

                                    $_SESSION['alerta'] = array(
                                        'icon' => 'error',
                                        'title' => 'Updating error',
                                        'text' => 'Error updating flight!'
                                    );

                                    header("Location: ../../Views/Dashboard/dashboard_flight.php");
                                }
                            } elseif ($fecha_salida > $fecha_destino) {

                                $_SESSION['alerta'] = array(
                                    'icon' => 'error',
                                    'title' => 'Updating error',
                                    'text' => 'Departure Date must be before Return Date!'
                                );
                            }
                        } else if ($flight_type == "One way" && (!empty($fecha_destino))) {

                            $_SESSION['alerta'] = array(
                                'icon' => 'error',
                                'title' => 'Updating error',
                                'text' => 'Departure date not available with one way!'
                            );

                            header("Location: ../../Views/Dashboard/dashboard_flight.php");
                        } else if ($flight_type == "One way" && (empty($fecha_destino))) {
                            $f1 = date('m-d-Y', $fecha_salida);
                            $sql = "UPDATE vuelos SET aerolinea ='$airline', tipo_vuelo='$flight_type', categoria_vuelo='$flight_category', lugar_salida='$salida', 
                        lugar_destino='$destino', fecha_salida='$f1', fecha_destino='Not Available', precio='$precio' WHERE id_vuelo='$id'";
                            if (pg_query($conexion, $sql)) {

                                $_SESSION['alerta'] = array(
                                    'icon' => 'success',
                                    'title' => 'Correctly updated',
                                    'text' => 'The flight has been successfully updated!'
                                );

                                header("Location: ../../Views/Dashboard/dashboard_flight.php");
                            } else {

                                $_SESSION['alerta'] = array(
                                    'icon' => 'error',
                                    'title' => 'Updating error',
                                    'text' => 'Error updating flight!'
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
        </div>
    </div>
</div>