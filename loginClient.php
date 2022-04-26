

<?php
require_once('models/Model.php');
require_once('models/ClientModel.php');
Model::init();

session_start();

if(isset($_POST["mail"]) && isset ($_POST["mdp"])) 
{
        $client = ClientModel::login($_POST["mail"], $_POST["mdp"]);
        if ($client != null){
            $_SESSION["uid"] = $client->getId();
        }
        header('location: index.php');
        
}

?>