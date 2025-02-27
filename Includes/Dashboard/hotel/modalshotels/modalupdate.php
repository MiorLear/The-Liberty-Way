<div class="modal fade" id="updatehotel<?php echo $row['id_hotel'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static"
                                                data-bs-keyboard="false">
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
                <input type="hidden" name="id" value="<?php echo $row['id_hotel']?>">
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Hotel</label>
                        <input type="text" class="form-control" name="hotel" id="inputEmail4" value="<?php echo $row['hotel'] ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategory" class="form-label">Adults</label>
                        <input type="text" class="form-control" name="adultos" id="inputFlightType" value="<?php echo $row['adultos'] ?>" >
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategory" class="form-label">Kids</label>
                        <input type="text" class="form-control" name="kids" id="inputAddress" value="<?php echo $row['kids'] ?>" >
                    </div>
                    <div class="col-md-12">
                        <label for="inputFrom" class="form-label">Category</label>
                        <select type="text" class="form-control" name="categoria" id="inputAddress" >
                            <option selected><?php echo $row['categoria'] ?></option>
                            <option value="Standard Class">Standard Class</option>
                            <option value="Executive Class">Executive Class</option>
                            <option value="Suite Class">Suite Class</option>
                            <option value="Family Class">Family Class</option>
                            <option value="Deluxe Class">Deluxe Class</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="singleDatePicker" class="form-label">Check-in Date</label>
                        <input id="singleDatePicker<?php echo $row['check_in'] ?>" class="form-control" name="check_in" value="<?php echo $row['check_in'] ?>" data-inputmask="'alias':'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Check-out Date</label>
                        <input id="singleDatePicker<?php echo $row['check_out'] ?>" class="form-control" name="check_out" value="<?php echo $row['check_out'] ?>" data-inputmask="'alias':'datetime'" data-inputmask-inputformat="mm/dd/yyyy">
                    </div>
                    <div class="col-md-12">
                        <label for="inputTo" class="form-label">Price per day ($USD)</label>
                        <input type="text" class="form-control" name="price" id="inputAddress" value="<?php echo $row['precio'] ?>" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" inputmode="decimal">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="update_hotel" class="btn btn-primary" >Save Changes</button>
                    
                </div>
            </form>
            </div>


            <?php
            require "../../Includes/Connection/connection.php";
            session_start();
            //-------------------------- INSERT HOTEL -------------------------------------------------
            if (isset($_POST['update_hotel'])) {
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
            
                } else if (empty($_POST['check_in'])) {
                      
                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'OOPS...',
                        'text' => 'You must complete the check-in date field!'
                    );
                    header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
            
                } else if (empty($_POST['check_out'])) {
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
                    $id = $_POST['id'];
                    $hotel = $_POST['hotel'];
                    $adults = $_POST['adultos'];
                    $kids = $_POST['kids'];
                    $categoria = $_POST['categoria'];
                    $check_in = strtotime($_POST['check_in']);
                    $check_out = strtotime($_POST['check_out']);
                    $price = $_POST['price'];
                    if(!preg_match("/-/", $price)){
                    if($adults >= 1 || $kids >= 1){
                        if ($check_in < $check_out){
                            $f1 = date('m-d-Y', $check_in);
                            $f2 = date('m-d-Y', $check_out);
                            $sql = "UPDATE hotels SET hotel='$hotel', adultos='$adults', kids='$kids', categoria='$categoria', check_in='$f1', check_out='$f2', precio='$price' WHERE id_hotel='$id'";

                            if (pg_query($conexion, $sql)) {
            
                                $_SESSION['alerta'] = array(
                                    'icon' => 'success',
                                    'title' => 'Successful registration',
                                    'text' => 'The hotel room has been successfully updated!'
                                );
                            
                                header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
            
                            } else {
            
                                $_SESSION['alerta'] = array(
                                    'icon' => 'error',
                                    'title' => 'Updating error',
                                    'text' => 'Hotel Room updating error!'
                                );
                            
                                header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                           }
            
                        } else if ($check_in > $check_out){
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
                } else {
                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'OOPS...',
                        'text' => 'Do not right negative numbers!'
                    );
                
                    header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                }
            }
            }
            ?>
        </div>
    </div>
</div>