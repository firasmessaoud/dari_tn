<?php

require_once('models/ClientModel.php');

$action = "show";

if(isset($_GET["action"])){
	$action = $_GET["action"];
}

$page = "home.php";

switch($action){
	case "show":
		
		require_once('views/' . $page);
		break;
    case "inscription":
        
        
	
}

