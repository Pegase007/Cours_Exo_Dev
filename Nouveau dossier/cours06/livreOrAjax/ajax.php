<?php 
header("Content-Type: application/json");


$bdd = new PDO("mysql:host=localhost;dbname=cours06", "root", "troiswa");

$monAction = isset($_GET["jefais"]) ? $_GET["jefais"] : $_GET["jefais"] = "affiche";


	if ($_GET["jefais"] == "affiche") {
		
		$req = $bdd -> prepare("SELECT * FROM posters");
		$req -> execute();

		$listeMsg = $req -> fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($listeMsg);
	}


	if ($_GET["jefais"] == "enreg") {
		$req = $bdd -> prepare("INSERT INTO posters (pseudo, message, date) 
										VALUES (:pseudo, :message, NOW())");

		$pseudo = htmlspecialchars($_REQUEST["pseudo"]);
		$message = htmlspecialchars($_REQUEST["message"]);


		$execution = $req -> execute(array(
					":pseudo" => $pseudo,
					":message" => $message
				));
		if($execution){
			$id = $pdo->lastInsertId();
			$req = $pdo->prepare("SELECT * from posters WHERE id=:id");
			$req->execute(array(
					"id"=>$id
				));
			$donnee = $req->fetch(PDO::FETCH_ASSOC);
			echo json_encode($donnee);
		}
		else{
			echo json_encode(false);
		}


	}



?>
