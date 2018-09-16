// Get cart data
function getCartData(cb) {
    $.ajax({
        type: 'GET',
        url: 'api/frontend/cart/index',
        success: cb,
        error: handleRequestError
    });

}

function RequestCheckout(cart_data) {
    submit_data = {
        "info" : {
            "gender" : "male",
            "first_name" : $('#first-name').val(),
            "last_name" : $('#last-name').val(),
            "email" : $('#email').val(),
            "address_line_1" : $('#address-1').val(),
            "address_line_2" : $('#address-2').val(),
            "city" : $('#city').val(),
            "postcode" : $('#code').val(),
            "state" : $('#state').val(),
            "country" : $('#country').val(),
        },
        "items" : cart_data
    };
    $.ajax({
        type: 'POST',
        url: 'api/frontend/checkout',
        data: JSON.stringify(submit_data),
        headers: {
            'Content-type': 'application/json'
        },
        success: function () {
            swal({
                title: "Success!",
                text: "Successfully Checkout!",
                type: "success"
            }).then(() => {
                location.href='/';
            });
        },
        error: handleRequestError()
    });
}

function processCheckout()
{
    $('.continue button').click(function (e) {
        e.preventDefault();
        getCartData(RequestCheckout);
    });
}

$(document).ready(() => {
    csrfHeader();
    processCheckout();
});