<?php

$controller = 'home';

if(isset($_GET["controller"])){
	$controller = $_GET["controller"];
}

switch($controller) {
        
	case 'home':
		require_once('controllers/HomeController.php');
		break;
        
    case 'AboutUs': 
        require_once ('controllers/AboutUsController.php');
        break;
		
    case 'annonces' : 
        require_once ('controllers/AnnoncesController.php');
        break;
        
    case 'authentification' :
        require_once ('controllers/AuthentificationController.php');
        break;
        
    case 'inscription':
        require_once('controllers/InscriptionController.php');
        break;
        
    case 'AjouterAnnonce':
        require_once('controllers/AjouterAnnonceController.php');
        break;
}

