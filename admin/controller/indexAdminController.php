<?php
	require_once('./model/indexAdminModel.php');

	$class_obj = new indexModel(); // object of class of model.php
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


		$val = $class_obj->login($user , $pass);    
			if(!empty($val)){
				$_SESSION['admin'] = $val['first_name'];
				$_SESSION['id'] = $val['id'];
				$_SESSION['email'] = $val['email'];

				if($val['type'] == 'a')	{
					switch($val['isActive']){
						case 'a':
							header('location:?page=admin');
							break;
						default:
							echo "invalid login";
					
					}
				}
			}
			else {

			echo "invalid login";
			}		
	}

	
	
?>