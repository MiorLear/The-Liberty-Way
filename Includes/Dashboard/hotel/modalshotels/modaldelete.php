<div class="modal fade" id="deletehotel<?php echo $row['id_hotel'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">Delete a Hotel
                    Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?php echo $row['id_hotel'] ?>">

                        <label for="inputEmail4" class="form-label">¿Are you sure you want to delete this permanently?</label>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="delete_hotel" class="btn btn-primary">confirm</button>
                        </div>
                </form>
            </div>
            <?php
            require "../../Includes/Connection/connection.php";
            session_start();
            //-------------------------- UPDATE VUELO -------------------------------------------------
            if (isset($_POST['delete_hotel'])) {
                $id = $_POST['id'];
                $sql = "DELETE FROM hotels WHERE id_hotel=" . $id;
                if (pg_query($conexion, $sql)) {
                    $_SESSION['alerta'] = array(
                        'icon' => 'success',
                        'title' => 'Data successfully deleted',
                        'text' => 'The hotel data has been recorded correctly!'
                    );
                
                    header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                } else {
                    $_SESSION['alerta'] = array(
                        'icon' => 'error',
                        'title' => 'OOPS...',
                        'text' => 'There was an error deleting flight data!'
                    );
                
                    header("Location: ../../Views/Dashboard/dashboard_hotelroom.php");
                }
            }


            ?>