

<?php
require_once('models/Model.php');
require_once('models/ClientModel.php');
Model::init();

session_start();
if(isset($_SESSION["uid"])){
    $client = ClientModel::select($_SESSION["uid"]);
}
 
require_once('views/layout.php');


?>