$(document).ready(function(){
    $("#form").validate({
        submitHandler: function(form) {
            $('button:submit').prop('disabled', true);
            form.submit();
        }
    });
});
