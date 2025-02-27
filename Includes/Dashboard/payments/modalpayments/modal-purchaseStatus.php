<div class="modal fade" id="confirmpayment<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCenteredLabel">UPDATE | Purchase Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <br>
                    <h4><b><u>Purchase Status</u></b></h4>
                    <label for="inputEmail4" class="form-label">Select an option to change the status of the purchase.</label>
                    <br>
                    <br>
                    <select type="text" placeholder="Choose an Option" class="form-control" name="status" id="status">
                        <option disabled selected>Choose an Option</option>
                        <option value="CANCELLED">CANCELLED</option>
                        <option value="CHECKING">CHECKING</option>
                        <option value="ON PROCESS">ON PROCESS</option>
                        <option value="CONFIRMED">CONFIRMED</option>
                        <option value="COMPLETED">COMPLETED</option>
                    </select>
                    <br>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button name="update_payment" class="btn btn-primary">Confirm</button>
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
if (isset($_POST['update_payment'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE payment_receipt SET status='$status' WHERE id='$id'";
    if (pg_query($conexion, $sql)) {
        if ($status == "CANCELLED" || $status == "CHECKING" || $status == "ON PROCESS" || $status == "CONFIRMED" || $status == "COMPLETED") {
            $_SESSION['alerta'] = array(
                'icon' => 'success',
                'title' => 'Data successfully updated',
                'text' => 'Payment has been updated correctly!'
            );

            header("Location: ../../Views/Dashboard/dashboard_PaymentReceipt.php");
        } else {
            $_SESSION['alerta'] = array(
                'icon' => 'error',
                'title' => 'OOPS...',
                'text' => 'There was an error at updating payment!'
            );

            header("Location: ../../Views/Dashboard/dashboard_PaymentReceipt.php");
        }
    } else {
        $_SESSION['alerta'] = array(
            'icon' => 'error',
            'title' => 'OOPS...',
            'text' => 'There was an error at updating payment!'
        );

        header("Location: ../../Views/Dashboard/dashboard_PaymentReceipt.php");
    }
}


?>