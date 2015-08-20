<?php
	//echo $_SERVER["REQUEST_METHOD"];

/*
	$method = $_SERVER["REQUEST_METHOD"];

	if ($method == "GET"){
		echo "Obtenir";
	}
	else if($method == "POST"){
		echo "Mettre à jour";
	}
	else if($method == "PUT"){
		echo "Creer";
	}
	else{
		echo "Supprimer";
	}
*/

//Le même en switch	
/*
$method = $_SERVER["REQUEST_METHOD"];
$type = ($_GET["type"]);

switch($method){
	case "GET":
		echo "Obtenir"; //." ".($_GET["type"]);
		break;
	case "POST":
		echo "Mettre à jour";
		break;
	case "PUT":
		echo "Creer";
		break;
	case "DELETE":
		echo "Supprimer";
		break;

	echo " ".$type;
*/

/*
$method = $_SERVER["REQUEST_METHOD"];

switch($method){
	case "GET":
		echo "Obtenir"; //." ".($_GET["type"]);
		break;
	case "POST":
		echo "Mettre à jour";
		break;
	case "PUT":
		echo "Creer";
		break;
	case "DELETE":
		echo "Supprimer";
		break;

	$type = ($_GET["type"]);
*/

	require ("message.php");
	require ("utilisateur.php");

	$method = $_SERVER["REQUEST_METHOD"];
	$type = ($_GET["type"]);
	$utilisateur = ($_GET["utilisateur"]);
	
	if($type){	
		switch($method){
			case "GET":
				getMessage();
				break;
			case "POST":
				postMessage();
				break;
			case "PUT":
				creerMessage();
				break;
			case "DELETE":
				deleteMessage();
				break;
		}
	}
	
	else($utilisateur){
		switch($method){
			case "GET":
				getUtilisateur();
				break;
			case "POST":
				postUtilisateur();
				break;
			case "PUT":
				creerUtilisateur();
				break;
			case "DELETE":
				deleteUtilisateur();
				break;
		}
	}
?>