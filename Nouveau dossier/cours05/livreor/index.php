<?php

header("Content-Type : application/json");
    // Connection avec la base de données
        try{
          $bdd = new PDO('mysql:host=localhost;dbname=cours5','root','troiswa');
          }
        catch(exception $e){
          throw $e;
        }
  


$req = $bdd->prepare("SELECT * FROM messages");
$req ->execute();
$donnees = $req ->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($donnees);


	$monAction = isset($_GET["enregistre"]) ? $_GET["enregistre"] : false;

	if ($monAction) {

$req = $pdo->prepare("SELECT * FROM messages");
	$req->execute();

	$donnees = $req->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($donnees);

}
elseif (enregistre) {
	$contenu = $_REQUEST["???"];
	$req = ???;
	$donnees = $req->execute(???);
	echo ???;
}




?>