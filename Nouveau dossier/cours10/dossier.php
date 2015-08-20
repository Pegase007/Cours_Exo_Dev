<?php 
header("content-type: application/json");

$bdd = new PDO("mysql:host=localhost;dbname=dropbox", "root", "troiswa");
/*
	deux tables : 
		dossiers : id,  name
		fichiers : id,  dossier,  name
*/

$req = $bdd -> prepare("SELECT *, f.nom AS filename, d.nom AS dirname, d.dossier_id AS idDuDossier FROM dossier AS d INNER JOIN fichier AS f ON d.dossier_id = f.dossier ");
$req -> execute();

$liste_dossiers = $req -> fetchAll(PDO::FETCH_ASSOC);

echo json_encode($liste_dossiers);
?>


