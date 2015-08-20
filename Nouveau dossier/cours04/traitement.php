<?php
	$session = isset($_SESSION[“session”]) ? $_SESSION[“session”] : false;
	$error = array();
	if (!$session) {

		if (isset($_REQUEST[“register”])) {

			$pseudo = htmlspecialchars($_REQUEST[“pseudo”]);
			$mdp =  $_REQUEST[“mdp”];
			$mdpConfirm =  $_REQUEST[“mdp_confirm”];

			if ($mdp == $mdpConfirm) {
					
				$req = $pdo->prepare(
					“INSERT INTO users (pseudo, pass) VALUES (:nom, :pass)”);
						$req->execute(array(
							“nom”  => $pseudo,
							/*“pass” => $mdp*/
							"pass"=>hash("sha256", $mdp)
						));
						if (!$insert) {
							$error[] = “L’insertion n’a pas fonctionné”;
						}

			}
			else{
				$error[] = "Les mots de passe ne sont pas identiques";
			}
	}
}

?>
