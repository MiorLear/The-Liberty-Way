$(document).ready(function () {

    $('.add-to-cart-btn').click(function () {
        var action = 'action';
        var id = $(this).data('id');
        var token = $(this).data('token');

        addTicket(action, id, token);
    });

    function addTicket(action, id, token) {
        let url = '../../Includes/Cart/PHP/Cart-CRUD/cart_insert.php';
        let formData = new FormData();
        formData.append('action', action);
        formData.append('id', id);
        formData.append('token', token);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {

                var data = JSON.parse(response);

                if (data.success) {

                    $('#num_cart--1').text(data.numero);
                    $('#num_cart--2').text(data.numero);

                    iziToast.success({
                        title: 'ㅤSUCCESSㅤﾠ|ﾠ',
                        message: 'Ticket added to cart!',
                        timeout: 5000,
                        position: 'topRight',
                        animateInside: true,
                        rtl: false,
                        pauseOnHover: true,
                        resetOnHover: false,
                        closeOnEscape: false,
                        closeOnClick: false,
                        transitionIn: 'bounceInLeft',
                        transitionOut: 'fadeOutRight',
                        transitionInMobile: 'fadeInDown',
                        transitionOutMobile: 'fadeOutUp',
                        progressBar: true,
                        progressBarEasing: 'linear'
                    });

                } else if (data.warning) {

                    iziToast.warning({
                        title: 'ㅤOOPS...ㅤﾠ|ﾠ',
                        message: 'Ticket already added to cart!',
                        timeout: 5000,
                        position: 'topRight',
                        animateInside: true,
                        rtl: false,
                        pauseOnHover: true,
                        resetOnHover: false,
                        closeOnEscape: false,
                        closeOnClick: false,
                        transitionIn: 'bounceInLeft',
                        transitionOut: 'fadeOutRight',
                        transitionInMobile: 'fadeInDown',
                        transitionOutMobile: 'fadeOutUp',
                        progressBar: true,
                        progressBarEasing: 'linear'
                    });

                } else if (data.error) {
                    
                    iziToast.error({
                        title: 'ㅤERRORㅤﾠ|ﾠ',
                        message: 'Ticket not added to cart!',
                        timeout: 5000,
                        position: 'topRight',
                        animateInside: true,
                        rtl: false,
                        pauseOnHover: true,
                        resetOnHover: false,
                        closeOnEscape: false,
                        closeOnClick: false,
                        transitionIn: 'bounceInLeft',
                        transitionOut: 'fadeOutRight',
                        transitionInMobile: 'fadeInDown',
                        transitionOutMobile: 'fadeOutUp',
                        progressBar: true,
                        progressBarEasing: 'linear'
                    });

                };
            },
            error: function () {
                console.log('Error en la solicitud AJAX');

                iziToast.error({
                    title: 'ㅤERRORㅤﾠ|ﾠ',
                    message: 'Ticket not added to cart!',
                    timeout: 5000,
                    position: 'topRight',
                    animateInside: true,
                    rtl: false,
                    pauseOnHover: true,
                    resetOnHover: false,
                    closeOnEscape: false,
                    closeOnClick: false,
                    transitionIn: 'bounceInLeft',
                    transitionOut: 'fadeOutRight',
                    transitionInMobile: 'fadeInDown',
                    transitionOutMobile: 'fadeOutUp',
                    progressBar: true,
                    progressBarEasing: 'linear'
                });
            }
        });
    }
});

// _____________________________________________________________________

$(document).ready(function () {

    function updateSideCart() {
        $.ajax({
            url: '../../Includes/Cart/PHP/sidecart_view.php',
            type: 'POST',
            success: function (response) {
                $('#sidecart').html(response);
                
            },
            error: function () {
                console.log('Error en la solicitud AJAX');
            }
        });
    }

    $('.add-to-cart-btn').click(function () {
        updateSideCart();
    });
});