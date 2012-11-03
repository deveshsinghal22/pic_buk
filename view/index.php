<?php
	require_once('./controller/userController.php');

?>
<html>
<head>
 
</head>
	<body>
		<div align="right" class="login">
			<!-- Form for user login
			 -->
			<h3> Login </h3>
			<form action = "" method = 'post' name="login" id="login" novalidate="novalidate">
			<ul>	
			<li><label>Email Id</label></li>
            <li><input type="text" name="user" id="user" placeholder="Enter Email-Id"/><span id ="loginuser_error"> </span></li>
            
            <li><label>Password</label></li>
			<li><input type="password" name="pass" id="pass" placeholder="Enter Password"/><span id ="loginpass_error"> </span></li>
			
			<li class="loginBtn"><input type="submit" name="login" class="btn" id="loginbtn"/><input type="reset" class="btn"/> </li>
		</ul>
		</form>
	</div>

	<div align="center" class="register">
		<!-- Form for user Registration-->
		<h3> Registration Form </h3>
		<form  action = "" method = 'post' name="register" id="register" placeholder="first name" />
         <ul>
             <li><label>First Name</label></li>
             <li><input type ='text' name = 'first_name' id="first_name" placeholder="enter first name"/><span id ="first_name_error"> </span></li>
             <li><label>Last Name</label></li>
             <li><input type ='text' name = 'last_name' id="last_name" placeholder="enter last name"/><span id ="last_name_error"> </span></li>
             <li><label>Email</label></li>
             <li><input type ='text' name = 'email' id="email" placeholder="enter email name"/><span id ="email_error"> </span></li>
 			 <li><label>password</label></li>
             <li><input type ='password' name = 'password' id="password" placeholder="password"/><span id ="password_error"> </span></li>
             <li><label>gender</label></li>
             <li class="reg_gender"><label class="male">Male</label><input type ='radio' name = 'regGender' class="gender" value='m' id="regGender1"/>
             <label class="female">Female</label><input type ='radio' name = 'regGender' class="gender" value='f' id="regGender2"/><span id ="regGender_error"> </span></li>

             <li><label>Marital Status</label></li>
             <li class="reg_gender">
             <label class="male">Single</label><input type ='radio' name = 'regMarital' class="gender" value='s' id="regMarital1"/>
             <label class="female">married</label><input type ='radio' name = 'regMarital' class="gender" value='m' id="regMarital2"/><span id ="regMarital_error"> </span></li>
             <li><label>Contact</label></li>
             <li><input type ='text' name = 'contact' id="contact" placeholder="enter contact no"/><span id ="contact_error"> </span></li>
             <li><label>Address</label></li>
             <li><input type ='text' name = 'address' id="address" placeholder="enter address"/><span id ="address_error"> </span></li>
			<li class="formBtn"><input type="submit" name="register" class="btn" id="registerbtn"/><input type="reset" class="btn"/> </li>

         </ul>
         </form>
	</div>




	</body>
</html>