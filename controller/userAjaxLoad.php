<?php
session_start();
$con = mysql_connect("localhost", "root", "");
	
	if (!$con) {
	    die('Could not connect: ' . mysql_error());
		}
	else
	    mysql_select_db("pic_book", $con);

	if(isset($_POST) && array_key_exists("upload", $_POST)) {
	?>
		<input type="file" id="loadImage" name="photoimg" /><br>
		<input type="button" id="try" value="upload pic">
		<div id='preview'>
        <img src="" id="imgDynamic" height="300" width="300" style="display: none;"/>
    	</div>
    	<div id="view">
     	</div>
     	<button id='cnf' name='confirm' style="display: none;" >confirm</button>
	<?php

		}
	/* image is inserted in to database */
	if(isset($_POST) && array_key_exists("cnf", $_POST)) {
	$insert = "insert into image (name, user_id) values ('$_SESSION[picc]' , '$_SESSION[id]')";
	echo $insert;
	mysql_query($insert);
	}


if(isset($_POST) && array_key_exists("change_profile", $_POST)) { ?>
	<input type="file" id="loadImage" name="photoimg" /><br>
		<input type="button" id="new_try" value="upload pic">
		<div id='preview'>
        <img src="" id="imgDynamic" height="110" width="220" style="display: none;"/>
    	</div>
    	<div id="view">
     	</div>
     	<button id='new_cnf' name='confirm' style="display: none;" >confirm</button>
	<?php } 



	if(isset($_POST) && array_key_exists("new_cnf", $_POST)) {
	$pic = $_SESSION['profile_picc'];
	$id = $_SESSION['id'];
	$insert = "update user set image='$pic' where id= '$id'";
	echo $insert;
	mysql_query($insert);
	}
	?>