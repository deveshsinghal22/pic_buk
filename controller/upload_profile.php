<?php
session_start();
$con = mysql_connect("localhost", "root", "");
    
    if (!$con) {
        die('Could not connect: ' . mysql_error());
        }
    else
        mysql_select_db("pic_book", $con);
    $path = "../webroot/image/profile/";
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
       
        
       if ($_FILES["file-0"]["error"] > 0)
        {
            $categories[] = array('reply'=>'error');
            // /echo json_encode($categories);
        }
        else
        {
            $name = $_SESSION['id'].".jpg";
            move_uploaded_file($_FILES["file-0"]["tmp_name"],"../webroot/image/profile/" .$name );
            $categories[] = array('reply'=>'success','image'=>$name);
            echo json_encode($categories);
            $_SESSION['profile_picc'] = $name;
        }
    }


?>