<?php
require_once('./config.php');
/**
* 
*/
class userModel
	{

	    // method declaration
	    public function registration($register = array() ) {
	 
	    $insert = "insert into user
	    (first_name,last_name,gender,password,email,contact,address,marital_status)
	    values
	    ('$register[first_name]','$register[last_name]','$register[regGender]','$register[password]','$register[email]','$register[contact]','$register[address]','$register[regMarital]')";
	    mysql_query($insert);
	    }
	    

	    public function login($email = null, $password = null){
	    	$select = mysql_query("select id,first_name,email,isActive,password from user where email='$email' and password='$password'");
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