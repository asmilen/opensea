$(document).ready(() => {
    // ajax setup laravel
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

handleSubmitGetInTouchFormOnHomePage();
});

// Handle submit get in touch form on home page
function handleSubmitGetInTouchFormOnHomePage() {
    $('.get-in-touch form').on('submit', function (e) {
        e.preventDefault();
        $.post('/customer-message', $(this).serialize())
            .then(function (response) {
                swal(
                    response.status, response.message,
                    response.status
                )
            })
            .catch(function (error) {
                console.log(error);
            });
    });
}