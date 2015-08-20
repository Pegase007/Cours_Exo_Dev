<?php
	header("Content-Type: application/json");
	$pdo = new PDO("mysql:host=localhost;dbname=cours06", "root", "troiswa");
	
	

	$monAction = isset($_GET["jefais"]) ? $_GET["jefais"] : false;
	$id = isset($_GET["id"]) ? $_GET["id"] : false;


	if (!$monAction) {

$req = $pdo->prepare("SELECT * FROM messages");
	$req->execute();

	$donnees = $req->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($donnees);

}
	//inserttion
elseif ($monAction == "insertion") {
	$contenu = htmlspecialchars($_REQUEST["content"]);
	$email = htmlspecialchars($_REQUEST["email"]);
	$req = $pdo->prepare("INSERT INTO  messages (contenu, email, `date`) VALUES (:monContenu, :monEmail, NOW())");
	$execution = $req->execute(array(
		"monContenu" => $contenu,
		"monEmail" => $email
));
if ($execution) {
	$id = $pdo->lastInsertId();
	$req = $pdo->prepare("SELECT * FROM messages WHERE id=:id");
	$req->execute(array(
		"id" => $id
	));
	$donnee = $req->fetch(PDO::FETCH_ASSOC);
	echo json_encode($donnee);
}
else {
		echo json_encode(false);
		}
	}

	//Suppression
	elseif ($monAction == "supprimer") {
		

		$req = $pdo->prepare("DELETE FROM messages WHERE id=:id");
		$req->execute(array(
			":id" => $id
			));
		$donnee = $req->fetch(PDO::FETCH_ASSOC);
		echo json_encode($ret);

	}

	//Mise à jour
	elseif ($monAction == "mise_a_jour") {
			
	
	$contenu = htmlspecialchars($_REQUEST["content"]);

		if ($id) {
			$req = $pdo->prepare("UPDATE messages SET contenu=:message WHERE id=:id");
			$ret = $req->execute(array(
				"message" 	=> $contenu,
				"id"		=> $id
			));

			echo json_encode($ret);

			}

	}




?>

