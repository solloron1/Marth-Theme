$(function() {
  $('#contact').validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      message: {
        required: true
      },
    },
    messages: {
      name: {
        required: "You have a name, right?",
        minlength: "Your name must consist of at least 2 characters"
      },
      email: {
        required: "No email, No message!"
      },
      message: {
        required: "This is kind of needed to send the form",
        minlength: "That's it? Really?"
      },
    },
    submitHandler: function(form) {
      $(form).ajaxSubmit({
        type: "POST",
        data: $(form).serialize(),
        success: function() {
          $('#contact :input').attr('disabled', 'disabled');
          $('#contact').fadeTo("slow", 0.15, function() {
            $(this).find(':input').attr('disabled', 'disabled');
            $('#success').fadeIn();
          });
        },
        error: function() {
          $('#contact').fadeTo("slow", 0.15, function() {
            $('#error').fadeIn();
          });
        }
      });
    }
  });
});
