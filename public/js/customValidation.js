$(document).ready(function()
{
	/********************* validation for Add User************************/
    $("#userAdd").validate({
        rules: {
            name: {   
                required: true,
                minlength: 3,
                lettersonly:true
            },
            password:
            {
                required: true,
                minlength: 6
            },
            cpassword:
            {
            	required: true,
            	equalTo: "#password"
            },
            email:
            {
                required: true,
                email: true
            }
        },
        messages: {
            fname: {
                required: 'Name is required',
                minlength: "At least {0} characters required!",
            },
        }   
    });

    /*********************for secound name validation ************************/
    jQuery.validator.addMethod("lettersonly", function(value, element)
    {
        return this.optional(element) || /^[a-z A-Z]+$/.test(value);
    }, "Letters only please"); 

});