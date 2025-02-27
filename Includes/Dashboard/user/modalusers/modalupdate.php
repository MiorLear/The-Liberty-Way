<div class="modal fade" id="updateuser<?php echo $row['id_usuario'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">Update
                    User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row['id_usuario'] ?>">
                        <input type="hidden" name="last_role" value="<?php echo $row['rol'] ?>">

                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="inputEmail4" value="<?php echo $row['nombre'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCategory" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user" id="inputFlightType" value="<?php echo $row['usuario'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCategory" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="inputAddress" value="<?php echo $row['correo_electronico'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputFrom" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="inputAddress" value="<?php echo $row['telefono'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="inputTo" class="form-label">Role</label>
                            <select type="select" class="form-control" name="role" id="inputAddress">
                                <option disabled selected value=""><?php if ($row['rol'] == 1) {
                                                        echo "Super Administrator";
                                                    } elseif ($row['rol'] == 2) {
                                                        echo "Administrator";
                                                    } elseif ($row['rol'] == 3) {
                                                        echo "User";
                                                    } ?></option>
                                <option value="1">Super Administrator</option>                                                    
                                <option value="2">Administrator</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputTo" class="form-label">Status</label>
                            <input type="text" class="form-control" name="status" id="inputAddress" value="<?php echo $row['estado'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="update_user" class="btn btn-primary">Save Changes</button>

                    </div>
                </form>
            </div>


            <?php
            require "../../Includes/Connection/connection.php";

            //-------------------------- UPDATE VUELO -------------------------------------------------
            if (isset($_POST['update_user'])) {
                if (empty($_POST['name'])) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'You must complete the name field!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else if (empty($_POST['user'])) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'You must complete the user field!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else if (empty(($_POST['email']))) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'You must complete the email adress field!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else if (empty($_POST['phone'])) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'You must complete the phone field!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else if (empty($_POST['role'])) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'You must complete the rol field!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else if (empty($_POST['status'])) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'You must complete the status field!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $last_role = $_POST['last_role'];
                    $role = $_POST['role'];
                    $status = $_POST['status'];
                    $rol_actual = $_SESSION['id_user'];

                    if($rol_actual == "2" && $last_role == "2"){
                        $_SESSION['alerta'] = array(
                            'icon' => 'warning',
                            'title' => 'Oops...',
                            'text' => 'You cannot update other admins!'
                        );
    
                        header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                    } else {
                        $sql = "UPDATE usuarios SET nombre='$name', usuario='$user', correo_electronico='$email', telefono='$phone', rol='$role', estado='$status' WHERE id_usuario='$id'";


                    if (pg_query($conexion, $sql)) {

                        $_SESSION['alerta'] = array(
                            'icon' => 'success',
                            'title' => 'Data has been updated correctly',
                            'text' => 'Successfully updated user!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                    } else {

                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'Updating error',
                            'text' => 'Error updating user!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                    }
                    }
                    
                }
            }
            ?>
        </div>
    </div>
</div>