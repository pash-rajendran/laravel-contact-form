$(function () {
    $('#contact-form').submit(function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        $('#contact-form-submit').attr('disabled', true);

        $.ajax({
            url: $(this).data('url'),
            type: 'post',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function success(response) {
                console.log(response);
                $('#status-message').addClass('alert-success');
                $('#status-message').html('Thank you for contacting us. We will reach out to you shortly!');
            },
            error: function error(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                $('#status-message').addClass('alert-danger');
                $('#status-message').html('Error submitting your message. Please try again or contact us at (855) 357-4677');
            }
        })
    });
});
