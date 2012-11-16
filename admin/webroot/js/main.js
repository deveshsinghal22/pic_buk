$(document).ready(function(){
	$("#listUser").click(function(){
		listUser();
	});
	$("#newUser").click(function(){
		listNewUser();
	});

	$("#newPics").click(function(){
		listNewPics();
	});

	$("#approve_user").live("click",function(){
		var val = $(this).attr('setid');
		approve_user(val);
	});
	$("#cancel_user").click(function(){
		var val = $(this).attr('setid');
		cancel_user(val);
	});

	$("#admin_edituser").live("click",function(){
		var val = $(this).attr('setid');
		admin_edituser(val);
	});

	$("#admin_deleteuser").live("click",function(){
		var val = $(this).attr('setid');
		admin_deleteuser(val);
	});

	$("#editlink").live("click",function(){
		$("form#edit_form").submit(); 
		var val = $("#edit_form").val();
		alert(val);
	});


});

/**
* list all approved users 
* 
*/
function listUser() {
	$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"userList": "true"},
		type: "POST",
		success: function(data) {
			$("#center").html(data);
		}
	});
}

/**
* list all new registered users 
* 
*/

function listNewUser() {
	$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"userNew": "true"},
		type: "POST",
		success: function(data) {
			$("#center").html(data);
		}
	});
}


/**
* list all new uploaded pics 
* 
*/

function listNewPics(){
	$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"newPicsList": "true"},
		type: "POST",
		success: function(data) {
			$("#center").html(data);
		}
	});
}

/**
* approve user's request function
* @param user_id = user's id
*
*/
function approve_user(user_id){
	$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"user_id": user_id},
		type: "POST",
		success: function(data) {
		listNewUser();
		}
	});
}

/**
* cancel user's request function
* @param user_id = user's id
*
*/
function cancel_user(user_id){
	$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"user_id1": user_id},
		type: "POST",
		success: function(data) {
		listNewUser();	
		}
	});
}

/**
* edit user function
* @param edit_userid user's id
*
*/
function admin_edituser(edit_userid){
$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"edit_userid": edit_userid},
		type: "POST",
		success: function(data) {
		$("#center").html(data);
		//listNewUser();	
		}
	});
}

/**
* delete user function
* @param edit_userid user's id
*
*/
function admin_deleteuser(delete_userid){
	$.ajax({
		url: "./controller/ajaxLoadFunctions.php",
		data: {"delete_userid": delete_userid},
		type: "POST",
		success: function(data) {
		listNewUser();	
		}
	});
}