<?php
	require_once('./controller/indexAdminController.php');
?>
<html>
<head>
 
</head>
	<body>
		<div align="right" class="login">
			<!-- Form for user login
			 -->
			<h3> Login </h3>
			<form action = "" method = 'post' name="login">
			<ul>	
			<li><label>Email Id</label></li>
            <li><input type="text" name="user" id="user" placeholder="Enter Email-Id"/><span id ="loginuser_error"> </span></li>
            
            <li><label>Password</label></li>
			<li><input type="password" name="pass" id="pass" placeholder="Enter Password"/><span id ="loginpass_error"> </span></li>
			
			<li class="loginBtn"><input type="submit" name="login" class="btn" id="loginbtn"/><input type="reset" class="btn"/> </li>
		</ul>
		</form>
	</div>
	</body>
</html>