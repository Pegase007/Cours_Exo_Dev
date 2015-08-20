<?php 
header("content-type: application/json");

$bdd = new PDO("mysql:host=localhost;dbname=dropbox", "root", "troiswa");
/*
	deux tables : 
		dossiers : id,  name
		fichiers : id,  dossier,  name
*/

$req = $bdd -> prepare("SELECT *, f.nom AS filename, d.nom AS dirname, d.dossier_id AS idDuDossier FROM dossiers AS d INNER JOIN fichiers AS f ON d.dossier_id = f.dossier_id ");
$req -> execute();

$liste_dossiers = $req -> fetchAll(PDO::FETCH_ASSOC);

echo json_encode($liste_dossiers);
?>
