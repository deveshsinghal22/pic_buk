(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#login").validate({
                rules: {
                    user: "required",
                    pass: "required",
                    
                },
                messages: {
                    user: "Please enter your id",
                    pass: "Please enter your pass", 
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });


            $("#register").validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },

                    regGender:{
                        required: true
                    },
                    regMarital:{
                        required: true
                    },
                    contact: {
                        required: true,
                        minlength: 10,
                        IsNumeric: true
                    },
                    
                    address: "required"
                },
                messages: {
                    first_name: "Please enter your firstname",
                    last_name: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
                    email: "Please enter a valid email address",
                    regGender: "please select one",
                    regMarital: "please select status",
                    contact: {
                         required: "Please provide a contact no.",
                         minlength: "Your contact no must be at least 10 characters long",
                         IsNumeric: "please fill no."
                    },
                   
                    address: "Please provide address"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });

        }

    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);