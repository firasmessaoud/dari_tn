<?php

require_once('models/AnnoncesModel.php');

$action = "show";

if(isset($_GET["action"])){
	$action = $_GET["action"];
}

$page = "Annonces.php";

switch($action){
    case "liste":
        $Annonces = AnnoncesModel::getAll();
        require_once('views/' . $page);
				break;

			case "recherche":
					if(isset($_POST["type"]) && isset($_POST["region"])){
							$type = $_POST["type"];
							$region = $_POST["region"];

							$Annonces = AnnoncesModel::recherche(["type" => $type, "region" => $region]);
					}
					require_once('views/' . $page);

					break;
	
}

