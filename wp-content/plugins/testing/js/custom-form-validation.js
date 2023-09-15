jQuery(document).ready(function($) {
    console.log("working");
    $('#onClickEvent').submit(function(e) {
        console.log("working2");
        e.preventDefault(); // Prevent the default form submission

        // Get the form data
        var formData = $(this).serialize();

        // Submit the form using AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl, // WordPress AJAX URL
            data: formData,
            success: function(response) {
                $('#form-message').html(response); // Display the response message
                $('#custom-form')[0].reset(); // Clear the form fields after successful submission
            }
        });
    });
});


