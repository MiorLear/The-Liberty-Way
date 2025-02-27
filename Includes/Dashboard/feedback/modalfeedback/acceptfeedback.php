<div class="modal fade" id="updatefeedback<?php echo $row['id_feedback']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">UPDATE | Commentary Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $row['id_feedback'] ?>">
                    <br>
                    <h4><b><u>Commentary Status</u></b></h4>
                    <label for="inputEmail4" class="form-label">Select an option to change the status of the commentary.</label>
                    <br>
                    <br>
                    <select type="text" placeholder="Choose an Option" class="form-control" name="status" id="status">
                        <option disabled selected>Choose an Option</option>
                        <option value="ACCEPTED">ACCEPTED</option>
                        <option value="CANCELLED">CANCELLED</option>
                    </select>
                    <br>
                    <br>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="update_feedback" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
require "../../Includes/Connection/connection.php";
session_start();
//-------------------------- UPDATE PAYMENT -------------------------------------------------
if (isset($_POST['update_feedback'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
 

    $sql = "UPDATE feedback SET status='$status' WHERE id_feedback='$id'";
    if (pg_query($conexion, $sql)) {
        if ($status == "ACCEPTED" || $status == "CANCELLED"){
            $_SESSION['alerta'] = array(
                'icon' => 'success',
                'title' => 'Data successfully updated',
                'text' => 'Commentary has been confirmed correctly!'
            );
        } else {
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'OOPS...',
                'text' => 'There was an error at updating feedback!'
            );
    
            header("Location: ../../Views/Dashboard/dashboard_feedback.php");
        }
        

        header("Location: ../../Views/Dashboard/dashboard_feedback.php");
    } else {
        $_SESSION['alerta'] = array(
            'icon' => 'error',
            'title' => 'OOPS...',
            'text' => 'There was an error at updating feedback!'
        );

        header("Location: ../../Views/Dashboard/dashboard_feedback.php");
    }
}


?>