<?php
require_once('./config.php');
/**
* 
*/
class userModel
	{

	   /**
		* registration functinality
		*/
	    public function registration($register = array() ) {
	    $insert = "insert into user
	    (first_name,last_name,gender,password,email,contact,address,marital_status)
	    values
	    ('$register[fname]','$register[lname]','$register[gender]','$register[password]','$register[email]','$register[contact]','$register[address]','$register[marital]')";
	    mysql_query($insert);
	    }
	    
	    /**
		* login functinality
		*/

	    public function login($email = null, $password = null){
	    	$select = mysql_query("select id,first_name,email,isActive,password,type,gender,image from user where email='$email' and password='$password'");
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
	}

	
?>