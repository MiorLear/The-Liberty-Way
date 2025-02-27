<div class="modal fade" id="createuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">Create
                    User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="modal-body">
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="inputEmail4">
                        </div>
                        <div class="col-md-12 input-field">
                            <label for="inputCategory" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="col-md-12 input-field">
                            <label for="inputCategory" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" name="password2" id="password2">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCategory" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user" id="inputFlightType">
                        </div>
                        <div class="col-md-12">
                            <label for="inputCategory" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputAddress">
                        </div>
                        <div class="col-md-12">
                            <label for="inputFrom" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="inputAddress">
                        </div>
                        <div class="col-md-12">
                            <label for="inputTo" class="form-label">Role</label>
                            <select type="select" class="form-control" name="role" id="inputAddress">
                                <option disabled selected value="">Choose a Role</option>
                                <option value="2">Administrator</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputTo" class="form-label">Status</label>
                            <input type="text" class="form-control" name="status" id="inputAddress">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="create_user" class="btn btn-primary">Save Changes</button>
                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                            <li class="mt-2" id="dropzone-preview-list">
                                                <!-- This is used as the file preview template -->
                                                <div class="border rounded-3">
                                                    <div class="d-flex align-items-center p-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="width-8 h-auto rounded-3">
                                                                <img data-dz-thumbnail class="w-full h-auto rounded-3 block"
                                                                    src="#" alt="Dropzone-Image" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="pt-1">
                                                                <h5 class="font-semibold mb-1" data-dz-name>&nbsp;</h5>
                                                                <p class="text-sm text-body-secondary fw-normal" data-dz-size></p>
                                                                <strong class="error text-danger"
                                                                    data-dz-errormessage></strong>
                                                            </div>
                                                        </div>
                                                        <div class="shrink-0 ms-3">
                                                            <button data-dz-remove
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                    </div>
                </form>
            </div>


            <?php
            require "../../Includes/Connection/connection.php";

            //-------------------------- UPDATE VUELO -------------------------------------------------
            if (isset($_POST['create_user'])) {
                if (empty($_POST['name']) || empty($_POST['last_name']) || empty($_POST['user']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) {

                    $_SESSION['alerta'] = array(
                        'icon' => 'warning',
                        'title' => 'Oops...',
                        'text' => 'Please, fill in all the parameters!'
                    );

                    header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                } else {
                    $name = $_POST['name'];
                    $last_name = $_POST['last_name'];
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $password2 = $_POST['password2'];
                    $encrypted = sha1($password);
                    $role = $_POST['role'];     
                    $status = $_POST['status'];
                    $image = "IMG-User.png";
                    $date = date('M d, Y');

                    if ($password == $password2){
                        $sql = "INSERT INTO usuarios(nombre,apellido,usuario,correo_electronico,telefono,contrasenia,rol,estado,imagen,fecha)
                        VALUES('$name','$last_name','$user','$email','$phone','$encrypted','$role','$status','$image','$date')";
                        if (pg_query($conexion, $sql)) {
    
                            $_SESSION['alerta'] = array(
                                'icon' => 'success',
                                'title' => 'Data has been registered correctly',
                                'text' => 'Successfully registered!'
                            );
    
                            header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                        } else {
    
                            $_SESSION['alerta'] = array(
                                'icon' => 'error',
                                'title' => 'Registering error',
                                'text' => 'Error registering user!'
                            );
    
                            header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                        }
                    } else {
                        $_SESSION['alerta'] = array(
                            'icon' => 'error',
                            'title' => 'Registering error',
                            'text' => 'Passwords do not match!'
                        );

                        header("Location: ../../Views/Dashboard/dashboard_usuario.php");
                    }
                    }
                }
            
            ?>
        </div>
    </div>
</div>