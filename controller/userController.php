<?php
	require_once('./model/indexModel.php');
	$abc = new userModel(); // object of class of model.php
	
	if(array_key_exists("register", $_POST)) {

		$first_name = trim(htmlentities(strip_tags($_POST['first_name'])));
		if (get_magic_quotes_gpc())
		$first_name = stripslashes($first_name);
		$first_name = mysql_real_escape_string($first_name);
		
		$last_name = trim(htmlentities(strip_tags($_POST['last_name'])));
		if (get_magic_quotes_gpc())
		$first_name = stripslashes($last_name);
		$first_name = mysql_real_escape_string($first_name);

		$email = trim(htmlentities(strip_tags($_POST['email'])));
		if (get_magic_quotes_gpc())
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);

		$password = trim(htmlentities(strip_tags($_POST['password'])));
		if (get_magic_quotes_gpc())
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);

		$contact = trim(htmlentities(strip_tags($_POST['contact'])));
		if (get_magic_quotes_gpc())
		$contact = stripslashes($contact);
		$contact = mysql_real_escape_string($contact);

		$address = trim(htmlentities(strip_tags($_POST['address'])));
		if (get_magic_quotes_gpc())
		$address = stripslashes($address);
		$address = mysql_real_escape_string($address);

		$registration = array(
			'fname' => $first_name,
			'lname' => $last_name,
			'email' => $email,
			'gender' => $_POST['regGender'],
			'marital' => $_POST['regMarital'],
			'password' => $password,
			'contact' => $contact,
			'address' => $address
	);
		/**
		* registration functionality
		* @param registration form values
		* insertion of values in database 
		*/
		
		$abc->registration($registration); 
		
		echo "Registration complete now login ";

	}	

	/**
	* Login Functionality
	* @param user NULL
	* @param pass NULL
	*/
	if(array_key_exists("login", $_POST)) {

		$user = trim(htmlentities(strip_tags($_POST['user'])));
		if (get_magic_quotes_gpc())
		$user = stripslashes($user);
		$user = mysql_real_escape_string($user);
		
		$pass = trim(htmlentities(strip_tags($_POST['pass'])));
		if (get_magic_quotes_gpc())
		$pass = stripslashes($pass);
		$pass = mysql_real_escape_string($pass);


		$val = $abc->login($user , $pass);    
		
			if(!empty($val)){
			$_SESSION['user'] = $val['first_name'];
			$_SESSION['id'] = $val['id'];
			$_SESSION['email'] = $val['email'];

			switch($val['isActive']){
				case 'p':
					echo "your request is still pending";
					break;
				case 'a':
					header('location:?page=home');
					break;
				default:
					echo "invalid login";
			
		}
	}
	else {

			echo "invalid login";

	}

		
	}	
?>