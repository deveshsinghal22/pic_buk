<?php
session_start();

?>

<html>
	<head>
		<script type="text/javascript" src="webroot/js/jquery.min.js"></script>
		<script type="text/javascript" src="webroot/js/validation.js"></script>
		<script type="text/javascript" src="webroot/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="webroot/js/new_div.js"></script>
		<script type="text/javascript" src="webroot/js/main.js"></script>

		<link href="webroot/css/style.css" rel="stylesheet"/>
		<link href="webroot/css/home.css" rel="stylesheet"/>

	</head>
	<body>
		<?php
		$page = "";
		if(array_key_exists("page", $_GET)) {
			$page = $_GET["page"];
		}
		if(empty($_SESSION['admin'])){
			require_once("view/index.php");
		}
		else{
			require_once("view/admin.php");
			//require_once("view/list_users.php");
			/*switch($page) {
			case "admin":
				require_once("view/admin.php");
				break;
			default:
				require_once("view/index.php");
				break;
			}*/
		}
		
		?>
	</body>
</html>