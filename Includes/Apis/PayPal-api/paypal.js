
$(document).ready(function () {
    console.log(TotalPrice);
});

// --------------------------------------------------

paypal.Buttons({
    style: {
        layout: 'vertical',
        color: 'silver',
        shape: 'pill',
        label: 'pay',
        tagline: false
    },

    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: TotalPrice
                }
            }]
        })
    },

    onApprove: function (data, actions) {

        actions.order.capture().then(function (details) {
            console.log(details);

            let url = '../../../TheLibertyWay/Includes/Apis/PayPal-api/paypal-json.php'
            return fetch(url, {
                method: 'POST',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify({
                    detalles: details
                })
            })
        });

        Swal.fire({
            icon: 'success',
            title: 'Payment completed',
            text: 'The transaction has already been done!',
            showConfirmButton: false,
            timer: 5000
        }).then(() => {
            location.replace('../../../TheLibertyWay/Includes/Cart/PHP/cart_unset.php');
        })

    },

    onCancel: function (data) {

        console.log(data);

        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Something went wrong!',
            showConfirmButton: false,
            timer: 5000
        })
    }

}).render('#paypal-button-container');