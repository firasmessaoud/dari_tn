<?php


require_once('models/ClientModel.php');

$action = "show";

if(isset($_GET["action"])){
	$action = $_GET["action"];
}

$page = "Inscription.php";

switch($action){
	case "show":
		
		require_once('views/' . $page);
        
		break;
    case "inscription":
        ClientModel::insert(["cin"=>$_POST["cin"],
                            "nom"=>$_POST["nom"],
                            "prenom"=>$_POST["prenom"],
                            "mail"=>$_POST["mail"],
                            "mdp"=>$_POST["mdp"],
                            ]);
        
        require_once('views/' . $page);
        break;
	
}

