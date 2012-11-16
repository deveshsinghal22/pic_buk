$(document).ready(function(){

	$("#try").live("click", function(){
		save();
	});

	$("#new_try").live("click", function(){
		new_save();
	});

	$("#upload").click(function(){
		upload();
	});

	$("#cnf").live("click", function(){
		cnf();
	});

	$("#new_cnf").live("click", function(){
		new_cnf();
	});
	
		$("#change_profile").click(function(){
		change_profile();
	});

});

	function upload(){
		$('#center').css({'width':100,'height':100});		
		$('#left').fadeOut();
		$('#center').fadeOut();
		$('#pic').fadeIn();
		$.ajax({
			url: "./controller/userAjaxLoad.php",			
			data: {"upload": "true"},
			type: "POST",
			success: function(data) {
			$("#pic").html(data);
			}
		});
	}

	function save(){
		
		$("#imgDynamic").show();
		$("#imgDynamic").attr("src","webroot/image/loading.gif");
		
		var data = new FormData();
		jQuery.each($('#loadImage')[0].files, function(i, file) {
			data.append('file-'+i, file);
		});
		$.ajax({
			url: './controller/upload.php',
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
			dataType: "JSON",
			success: function(data){
				if(data[0].reply == "success") {
					$count++;
					img = "webroot/image/wall/"+data[0].image;
					$("#imgDynamic").attr("src",img);
					$('#try').attr("disabled","disabled");
					$("#cnf").show();
				} else if(data.reply == "session") {
                    $("#view").html("You have upoloaded maximum number of images.");
                } else {
					$("#imgDynamic").attr("src","");
					$("#imgDynamic").hide();
				}
			}
		});
		
		$("#loadImage").live("change", function(){
		$('#try').removeAttr("disabled");
	});

	}

		function cnf(){
			$.ajax({
			url: "./controller/userAjaxLoad.php",			
			data: {"cnf": "true"},
			type: "POST",
			success: function(data) {
			alert("uploaded");
			url = "./index.php";
			window.location = url;
			}
		});

}
function change_profile(){

	  	$.ajax({
			url: "./controller/userAjaxLoad.php",			
			data: {"change_profile": "true"},
			type: "POST",
			success: function(data) {
			$("#image").html(data);
			}
		});
	}


function new_save(){
		$("#imgDynamic").show();
		$("#imgDynamic").attr("src","webroot/image/loading.gif");
		
		var data = new FormData();
		jQuery.each($('#loadImage')[0].files, function(i, file) {
			data.append('file-'+i, file);
		});
		$.ajax({
			url: './controller/upload_profile.php',
			data: data,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
			dataType: "JSON",
			success: function(data){
				if(data[0].reply == "success") {
					$count++;
					img = "webroot/image/profile/"+data[0].image;
					$("#imgDynamic").attr("src",img);
					$('#new_try').attr("disabled","disabled");
					$("#new_cnf").show();
				} else if(data.reply == "session") {
                    $("#view").html("You have upoloaded maximum number of images.");
                } else {
					$("#imgDynamic").attr("src","");
					$("#imgDynamic").hide();
				}
			}
		});
		
		$("#loadImage").live("change", function(){
		$('#new_try').removeAttr("disabled");
	});

	}

		function cnf(){
			$.ajax({
			url: "./controller/userAjaxLoad.php",			
			data: {"cnf": "true"},
			type: "POST",
			success: function(data) {
			alert("uploaded");
			url = "./index.php";
			window.location = url;
			}
		});

	}
function new_cnf(){

	$.ajax({
			url: "./controller/userAjaxLoad.php",			
			data: {"new_cnf": "true"},
			type: "POST",
			success: function(data) {
			alert("uploaded");
			url = "./index.php";
			window.location = url;
			}
		});

	}