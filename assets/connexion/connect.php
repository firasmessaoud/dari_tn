<?php

include_once("db_connect.php");

session_start();

$bdd = maConnexion();
$table='utilisateur';

$ROOT = _DIR_;

$DS = DIRECTORY_SEPARATOR;
if(isset($_REQUEST["email"]) && !(empty($_REQUEST["email"])))
{
	$email=$bdd->quote($_REQUEST["email"]);
	
}
else
{
	die("ajouter votre email !!!");
}

if(isset($_REQUEST["pass"]) && !(empty($_REQUEST["pass"])))
{
	$pass=$bdd->quote(md5($_REQUEST["pass"]));
}
else
{
	die("donner votre mot de passe  !!!");
}
$req="select * from $table where email=$email and pass=$pass ";
$reponse = $bdd->query($req) or die ($bdd->errorInfo()[2]);
$nb=$reponse->rowCount();

if($nb==0)
{
	header("location: ../erreur.php");
}
else
{
	$ligne=$reponse->fetchObject();
	if($ligne->role == 1)
	{
		$_SESSION['role']=1;
		$_SESSION['ncin']=$ligne->ncin;
		header("location: ../index.php?controller=home");
		exit;
	
	}
	else
	{
		$_SESSION['role']=2;
		$_SESSION['ncin']=$ligne->ncin;
		header("location: ../index.php?controller=utilisateur");
		exit;		
	}
}