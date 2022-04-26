<?php
require_once('models/AddannoncesModel.php');

$action = "show";

if(isset($_REQUEST ["action"])){
	$action = $_REQUEST["action"];
}


$page = "AddAnnonce.php";

switch($action){
	case "show":
		
		require_once('views/' . $page);
		break;
		case "addannonce":
			AnnoncesModel1 :: insert(["titre_annonce"=>$_REQUEST["titre_annonce"],
								"status"=>$_REQUEST["status"],
								"prix"=>$_REQUEST["prix"],
								"locatin"=>$_REQUEST["location"],
								"rooms"=>$_REQUEST["rooms"],
								"bathroom"=>$_REQUEST["bathroom"],
								"addresse"=>$_REQUEST["adresse"],
								"state"=>$_REQUEST["state"],
								"postal_code"=>$_REQUEST["postal_code"],
								"name"=>$_REQUEST["name"],
								"email"=>$_REQUEST["email"],
								"phone"=>$_REQUEST["phone"],
								]);
			
			require_once('views/' . $page);
			break;
		
}

