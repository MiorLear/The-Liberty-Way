
$(document).ready(function () {

    $('.minimal-input').change(function () {
        var action = 'action';
        var id = $(this).data('id');
        var quantity = $(this).val();

        updateTicket(action, id, quantity);
    });

    function updateTicket(action, id, quantity) {
        var url = '../../Includes/Cart/PHP/Cart-CRUD/cart_update.php';
        var formData = new FormData();
        formData.append('action', action);
        formData.append('id', id);
        formData.append('quantity', quantity);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {

                var data = JSON.parse(response);

                if (data.ok) {
                    var subtotal = document.getElementById('subtotal_' + id);
                    subtotal.innerHTML = data.sub;
                    
                    let total = 0.00
                    let list = document.getElementsByName('subtotal[]')

                    for (let i = 0; i < list.length; i++) {
                        total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                    }

                    total = new Intl.NumberFormat('en-US', {
                        minimumFractionDigits: 2
                    }).format(total)

                    document.getElementById('total').innerHTML = '$' + total
                }
            }
        });
    }
});
