<?php
session_start();
$con = mysql_connect("localhost", "root", "");
    
    if (!$con) {
        die('Could not connect: ' . mysql_error());
        }
    else
        mysql_select_db("pic_book", $con);
$path = "../webroot/image/wall/";
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
       
        
       if ($_FILES["file-0"]["error"] > 0)
        {
            $categories[] = array('reply'=>'error');
            // /echo json_encode($categories);
        }
        else
        {
            $name = uniqid().$_FILES["file-0"]["name"];
            move_uploaded_file($_FILES["file-0"]["tmp_name"],"../webroot/image/wall/" .$name );
            $categories[] = array('reply'=>'success','image'=>$name);
            echo json_encode($categories);
            $_SESSION['picc'] = $name;
        }
    }


?>