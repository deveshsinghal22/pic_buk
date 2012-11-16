$(document).ready(function() {
	$("#loginbtn").click(function() {
       var len = $('#user').val().length;
        if(len<=0){
           $('#loginuser_error').html('please enter id');
            return false;
        } else {
            $('#loginuser_error').html('');
        }
    });

    $("#loginbtn").click(function() {
       var len = $('#pass').val().length;
        if(len<=0){
           $('#loginpass_error').html('please enter pass');
            return false;
        } else {
            $('#loginpass_error').html('');

        
        }
    });
});