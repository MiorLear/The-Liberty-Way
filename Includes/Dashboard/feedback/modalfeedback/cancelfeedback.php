<div class="modal fade" id="cancelfeedback<?php echo $row['id_feedback'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">Remove Commentary</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $row['id_feedback'] ?>">

                    <label for="inputEmail4" class="form-label">Are you sure you want to remove this permanently?</label>

                    <br>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="cancel_feedback" class="btn btn-primary">Confirm</button>
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
if (isset($_POST['cancel_feedback'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM feedback WHERE id_feedback='$id'";
    if (pg_query($conexion, $sql)) {
        $_SESSION['alerta'] = array(
            'icon' => 'success',
            'title' => 'Data successfully cancelled',
            'text' => 'Commentary has been cancelled correctly!'
        );

        header("Location: ../../Views/Dashboard/dashboard_feedback.php");
    } else {
        $_SESSION['alerta'] = array(
            'icon' => 'error',
            'title' => 'OOPS...',
            'text' => 'There was an error at deleting Commentary!'
        );

        header("Location: ../../Views/Dashboard/dashboard_feedback.php");
    }
}


?>