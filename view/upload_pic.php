<html>
	<head>
		
		<script type="text/javascript" src="/webroot/js/upload_pic.js"></script>
	</head>
	<body>
    <div >
    <input type="file" id="loadImage" name="photoimg" />
    <span id ="error_group"></span><br />
    <input type="button" name="Uplaod" id="Upload" value="upload" />
    </div>
    <div id='preview' >
        <img src="" id="imgDynamic" height="106" width="222" />
    </div>
    <div id="view" >


    </div>
	<?php

	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
	       	$path = "c:/";
	        
	       if ($_FILES["file-0"]["error"] > 0)
	        {
	            $categories[] = array('reply'=>'error');
	            echo json_encode($categories);
	        }
	        else
	        {
	            $name = uniqid().$_FILES["file-0"]["name"];
	            move_uploaded_file($_FILES["file-0"]["tmp_name"],"img/" .$name );
	            $categories[] = array('reply'=>'success','image'=>$name);
	            echo json_encode($categories);
	        }

	}


	?>
 	</body>
</html>