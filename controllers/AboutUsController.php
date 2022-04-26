<?php



$action = "show";

if(isset($_GET["action"])){
	$action = $_GET["action"];
}

$page = "AboutUs.php";

switch($action){
	case "show":
		
		require_once('views/' . $page);
		break;
	
}

