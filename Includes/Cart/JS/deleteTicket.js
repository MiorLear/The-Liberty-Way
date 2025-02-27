
$(document).ready(function () {

    $('.delete-to-cart-btn').click(function (event) {
        event.preventDefault();

        var action = 'action';
        var id = $(this).val();


        confirmAlert(action, id);

    })

    function deleteTicket(action, id) {
        var url = '../../Includes/Cart/PHP/Cart-CRUD/cart_delete.php';
        var formData = new FormData();
        formData.append('action', action);
        formData.append('id', id);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data.ok) {

                    confirmAlert(result.isConfirmed).then(() => {
                        location.reload();
                    });

                }
            },
            error: function () {

                console.log('Error en la solicitud AJAX');

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'There was an error in the request!',
                    showConfirmButton: false,
                    timer: 5000
                });
            }
        });
    }

    // _______________________________________________________________

    function confirmAlert(action, id) {

        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: 'You will remove the ticket from your cart!',
            color: '#000',
            confirmButtonColor: '#dcbc87',
            confirmButtonText: 'Yes, remove',
            showCancelButton: true,
            cancelButtonColor: '#303030',
            cancelButtonText: 'Cancel',
            

        }).then((result) => {
            
            if (result.isConfirmed) {

                deleteTicket(action, id);

                Swal.fire({
                    icon: 'success',
                    title: 'Ticket successfully remove',
                    text: 'The ticket has been removed from your cart!',
                    color: '#000',
                    showConfirmButton: false,
                    timer: 5000,
                }).then(() => {
                    location.reload();
                });

            }
        });
    }
});