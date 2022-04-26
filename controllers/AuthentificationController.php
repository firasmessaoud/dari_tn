<?php

require_once('models/ClientModel.php');

$action = "show";

if(isset($_GET["action"])){
	$action = $_GET["action"];
}

$page = "Authentification.php";

switch($action){
	case "show":
		require_once('views/' . $page);
        break;
        
        case "login":
        break;
        case "logout":
            unset($_SESSION["uid"]);
            session_destroy();
            header('Location: /');
            exit();
            break;


	
}

