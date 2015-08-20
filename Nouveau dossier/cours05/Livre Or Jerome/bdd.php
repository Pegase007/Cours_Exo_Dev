<!doctype html>
<head>
	<LINK rel="stylesheet" type="text/css" href="css.css">
	</head>

<?php


try {
$bdd = new PDO("mysql:host=localhost;dbname=falzendev", "root", "troiswa");
}
catch  (Exception $e) {
	
while ($data = $reponse -> fetch()) {
	// var_dump($data);
	echo "Prenom : " . $data["prenom"] . "<br />";
}

// OU  ALORS
// var_dump($reponse -> fetchAll());
//mais prend plus de ressources



$nom = "";

if (isset($_REQUEST["submit"])) {
	$nom = htmlspecialchars($_REQUEST["nom"]);

	if (empty($_REQUEST["nom"])) {
	echo "il manque un nom";
	}

}
echo $nom;

//$bdd -> exec("INSERT INTO users (prenom, pseudo) VALUES ('Alesk', 'Freyggen')");


?>


<form method="POST">

<label for="nom">votre nom :</label>

<input type="text" name="nom" id="nom" placeholder="<?php echo $nom; ?>"></input>

<button type="submit" name="submit">envoyer</button>


</form>











<!-- ==============================================================
				livre d'or
============================================================ -->

<div style="height:2px; width:100%; background-color:red"></div>

<h2 style="margin-left: 5em">Livre d'or</h2>

<h4>Anciens messages :</h4>
<div class="msg-container">

</div><!-- fin msg-container -->



<form method="POST">

	<input type="text" name="pseudo" placeholder="Votre pseudo">

	<textarea type="text" name="message">

	</textarea>

	<button type="submit">Publier</button>

</form>


<?php
$pseudo = "";

if (isset($_REQUEST["submit"])) {
	$pseudo = htmlspecialchars($_REQUEST["pseudo"]);
	$message = htmlspecialchars($_REQUEST["message"]);

	if (empty($_REQUEST["pseudo"]) || empty($_REQUEST["message"])) {
		echo "il manque un champ";
	}

}






?>