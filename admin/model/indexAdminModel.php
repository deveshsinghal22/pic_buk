<?php
require_once('./config.php');
class indexModel
	{
   		public function login($email = null, $password = null){
		    	$select = mysql_query("select id,first_name,email,isActive,password,type from user where email='$email' and password='$password'");
		    	$result = mysql_fetch_array($select);
		    	if(mysql_num_rows($select)) {
		    		if($result['password'] == $password){
					return $result;
		    	}
		    	else{
		    		return false;
		    	}
		    }
		    else {
		    	return false;
		    }

		}
/*
		public function listUsers(){
			$select_user = mysql_query("select id, first_name,last_name,gender,email,isActive from user where type='a'");
			$result = mysql_fetch_array($select_user);
			return $result;
		}

*/


	}
?>