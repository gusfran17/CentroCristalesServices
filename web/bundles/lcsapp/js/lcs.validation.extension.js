var validationRules = {};

function errorPlacement(error, element) {
    if($(element).hasClass('stand-alone-validable')){
        return false;
    }
    else if(element.is(':checkbox') || element.is(':radio')) {
        $(element).parent().parent().after(error);
    }
    else if (element.data('role') === 'price'){
        $(element).parent().after(error);
    }
    else if($(element).hasClass('jasny-input-file'))
    {
        $(element).parent().after(error);
    }
    else{
        element.after(error);
    }
}

function highlight(element, errorClass) {
    if($(element).hasClass('stand-alone-validable'))
    {
        $(element).addClass('has-error');
    }
    else{
        $(element.form).find("label[for=" + element.id + "]").parent().addClass('has-error');
    }
}

function unhighlight(element, errorClass) {
    if($(element).hasClass('stand-alone-validable')){
        $(element).removeClass('has-error');
    }
    else{
        $(element.form).find("label[for=" + element.id + "]").parent().removeClass('has-error');
    }
}

jQuery.validator.setDefaults({
    errorElement: "small",
    errorClass: "help-block text-danger",
    errorPlacement: errorPlacement,
    highlight: highlight,
    unhighlight: unhighlight
});
