
$(document).ready(function () {
    $("form").parsley();
    $("form").submit(function (event) {
        // Validate form fields
        $(this).parsley().validate();
        // If the form is valid, will proceed with submission.
        if ($(this).parsley().isValid()) {
            $("button[type='submit']", this)
                .text("Sending...")
                .attr("disabled", "disabled");
            $("button[type='reset']", this)
                .attr("disabled", "disabled");

            return true;

        }
        event.preventDefault();
    });
});
