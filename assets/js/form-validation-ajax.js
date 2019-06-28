$(document).ready(function(){

    let formData = $('#validateForm');

    $(formData).parsley();

    $(formData).on('submit', function (e) {
        // To Avoid Page Refresh
        e.preventDefault();
        // If the form is valid, will proceed with submission.
        if ($(formData).parsley().isValid()) {            

            $.ajax({
                type: formData.attr('method'),
                url: formData.attr('action'),
                data: formData.serialize(),

                beforeSend: function () {
                    $("#submit").prop('disabled', true);    // disable button
                    $("#reset-button").prop('disabled', true);     // disable button
                    $("#submit").text('Sending..');         // change button text
                },

                success: function (data, status, jqXHR) {
                    $("#submit").prop('disabled', false);   // enable button
                    $("#reset-button").prop('disabled', false);   // enable button
                    $("#submit").text('Submit');            // change button text
                    if (data.result === "success") {
                        $("#validateForm").trigger('reset');
                        $('#success').html('<span class="alert-success">'+ data.message +'</span><br>');
                    } else if(data.result === "fail") {
                        $('#failure').html('<span class="alert-danger">'+ data.message +'</span><br>');
                    } else {
                        $('#failure').html('<span class="alert-danger">Success ! Some unknown error happened</span><br>');
                    }

                },

                error: function (jqXHR, status) {
                    $('#failure').html('<span class="alert-danger">Unable to receive Response from server</span><br>');
                }
            });

        } else {
            console.log("Parsley Form Validation Failed");
        }

    });
});
