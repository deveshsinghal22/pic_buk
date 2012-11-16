$(document).ready(function() {
	$("#registerbtn").click(function() {
       var len = $('#first_name').val().length;
        if(len<=0){
           $('#first_name_error').html('please enter first name');
            return false;
        } else {
            $('#first_name_error').html('');
        }
    });

    $("#registerbtn").click(function() {
       var len = $('#last_name').val().length;
        if(len<=0){
           $('#last_name_error').html('please enter last name');
            return false;
        } else {
            $('#last_name_error').html('');
        }
    });

   $("#registerbtn").click(function() {
      var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
       var len = $('#email').val().length;
        if(len<=0){
           $('#email_error').html('please enter email');
            return false;
        } 
          else if(!($('#email').val().match(pattern))){
            $('#email_error').html('please enter valid email');
            return false;

          }
        else {
            $('#email_error').html('');
        }
    });

  $("#registerbtn").click(function() {
       var len = $('#password').val().length;
        if(len<=0){
           $('#password_error').html('please enter a password');
            return false;
        } else {
            $('#last_name_error').html('');
        }
    });

   $("#registerbtn").click(function() {
      if(!($('input:radio[name="regGender"]:checked').val())){
            $('#regGender_error').html('please select type');
            return false;
        } else {
            $('#regGender_error').html('');
        }
    });

  $("#registerbtn").click(function() {
      if(!($('input:radio[name="regMarital"]:checked').val())){
            $('#regMarital_error').html('please select type');
            return false;
        } else {
            $('#regMarital_error').html('');
        }
    });

   $("#registerbtn").click(function() {
    var numbers = /^[0-9]+$/;
       var len = $('#contact').val().length;
        if(len<=0){
           $('#contact_error').html('please enter contact');
            return false;
        } 
        else if(!($('#contact').val().match(numbers) && (len == 10))){
          $('#contact_error').html('please enter only 10 nos');
            return false;
        }

        else {
            $('#contact_error').html('');
        }
    });

$("#registerbtn").click(function() {
       var len = $('#address').val().length;
        if(len<=0){
           $('#address_error').html('please enter pass');
            return false;
        } else {
            $('#address_error').html('');
        }
    });



});