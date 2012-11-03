<?php
session_start();
?>

 
<html>
	<head>
	  <script type="text/javascript" src="webroot/js/jquery.min.js"></script>
	  <script type="text/javascript" src="webroot/js/validation.js"></script>
 	  <script type="text/javascript" src="webroot/js/jquery.validate.min.js"></script>
 	  <script type="text/javascript" src="webroot/js/top_up-min.js"></script>

 	  <link href="webroot/css/style.css" rel="stylesheet"/>
 	  <link href="webroot/css/home.css" rel="stylesheet"/>

	</head>
	<body>
		<?php
		$page = "";
		if(array_key_exists("page", $_GET)) {
			$page = $_GET["page"];
		}
		if(empty($_SESSION['user'])){
		require_once("view/index.php");

		}
		else{
			require_once("view/home.php");
			/*switch($page) {
			case "home":
				require_once("view/home.php");
				break;

			default:
				require_once("view/index.php");
				break;
			}*/
		}
		
		?>
	</body>
</html>