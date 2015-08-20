<?php
	header("Content-Type: application/json");
	$pdo = new PDO("mysql:host=localhost;dbname=dropbox", "root", "troiswa");
	

	$monAction = isset($_GET["jefais"]) ? $_GET["jefais"] : false;
	$dossier=isset($_GET["nom"]);


	if (!$monAction) {
		$req = $pdo->prepare("SELECT * FROM dossier as d, d.nom AS dossier_nom INNER JOIN fichier as f, f.nom AS fichier_nom ON d.dossier_id = f.dossier_id");
		$req->execute();

		$donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($donnees);

}
	/*if (!$monAction) {
		$req = $pdo->prepare("SELECT * FROM fichier");
		$req->execute();

		$donnees = $req->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($donnees);

}
*/

?>