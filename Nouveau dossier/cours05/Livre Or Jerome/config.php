<?php 


	$bdd = new PDO("mysql:host=localhost;dbname=falzendev", "root", "troiswa");


	if (isset($_REQUEST["submit"])) {
		

		$pseudo = htmlspecialchars($_REQUEST["pseudo"]);
		$message = htmlspecialchars($_REQUEST["message"]);


		if (empty($_REQUEST["pseudo"]) || empty($_REQUEST["message"])) {
			echo "il manque un champ";
		}	
		else {
			$bdd -> exec("INSERT INTO posters(pseudo, message, date) VALUES ('$pseudo', '$message', NOW())");
		}



	}
?>