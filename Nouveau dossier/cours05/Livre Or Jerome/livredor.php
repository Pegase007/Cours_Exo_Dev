<!-- ==============================================================
				livre d'or
============================================================ -->
<!doctype html>
<head>
	<LINK rel="stylesheet" type="text/css" href="css.css">
	</head>

						<?php 
						include("config.php");
						?>



<div style="height:2px; width:100%; background-color:red"></div>

<h2 style="margin-left: 5em">Livre d'or</h2>

<h4>Anciens messages :</h4>

<div class="msg-container">

		<?php
			

			if (isset($_REQUEST["delete"])) {
			     $req = $bdd->prepare("DELETE FROM posters WHERE id=:messageId");
			     $req -> execute(array(
        		":messageId" => $_REQUEST["id"]
			));
 		} 



		$data = $bdd -> query("SELECT pseudo,message,id FROM posters");

		while ($oldMsg = $data->fetch()) {
			// var_dump($oldMsg); affiche TOUT le tableau associatif

			echo  $oldMsg["pseudo"] . " :<br />";
					

			$smileys = array(
				":)" => "http://www.famidac.fr/forum/mods/smileys/images/smiley25.gif",
				":(" => "http://www.freesmileys.org/smileys/smiley-sad009.gif"
			);

			$edit = isset($_GET["edit"])? true : false; // check si edit est dans l'url
			$admin = isset($_GET["admin"])? true : false; // check si admin est dans l'url

				foreach ($smileys as $key => $value) {	
					$oldMsg = str_replace($key, "<img src=".$value.">", $oldMsg);
				}

				if ($edit) {


					echo "<div style='height: 70%; width: 70%; border: 1px solid black; margin: 10px 5px; padding: 5px 10px'><br />".
					"<form method='POST'>
					<textarea rows=5 type='text' name='newMsg'>";

					if (isset($_REQUEST["modif"])) {

						$modif = $bdd->prepare("UPDATE posters SET message=:newMsg WHERE id=:messageId");
						$newMsg = htmlspecialchars($_REQUEST["newMsg"]);

						$messageId = $_REQUEST["id"];

						$modif -> execute(array(
						":newMsg" => $newMsg,
						":messageId" => $messageId
							));

						$data = $bdd -> query("SELECT pseudo,message,id FROM posters");
						$oldMsg = $data->fetch();
					
						}

					echo $oldMsg['message'] . 
					"</textarea>
					<input type='hidden' name='id' value='" .$oldMsg['id']. "'>
					<button type='submit' name='modif'>Modifier</button><br />
					<br /></div></form>";

				}


				else if ($admin) {

					echo "<div style='border: 1px solid black; margin: 10px 5px; padding: 5px 10px'><br />".
					"<form method='POST'>
					<textarea rows=5 type='text' name='newMsg'>";

					if (isset($_REQUEST["modif"])) {

						$modif = $bdd->prepare("UPDATE posters SET message=:newMsg WHERE id=:messageId");
						$newMsg = htmlspecialchars($_REQUEST["newMsg"]);

						$messageId = $_REQUEST["id"];

						$modif -> execute(array(
						":newMsg" => $newMsg,
						":messageId" => $messageId
							));

						$data = $bdd -> query("SELECT pseudo,message,id FROM posters");
						$oldMsg = $data->fetch();
					
						}

						//suppression définie en début de fichier

					echo $oldMsg['message'] . 
					"</textarea>
					<input type='hidden' name='id' value='" .$oldMsg['id']. "'>
					<button type='submit' name='modif'>Modifier</button>
					<button type='submit' name='delete'>Delete</button>
	</div></form>";


				}
				else { //normal, pas besoin des ID
			echo "<div style='border: 1px solid black; margin: 10px 5px; padding: 5px 10px'><br />" . 
			$oldMsg["message"] . "</div></form>";
		}

	}

		?>
</div><!-- fin msg-container -->



<form method="POST">

	<input type="text" name="pseudo" placeholder="Votre pseudo">
	<input type="text" name="email" placeholder="Votre adresse email">

	<textarea type="text" name="message"></textarea>

	<button type="submit" name="submit">Publier</button>

</form>



<!--
array(4) { 
["pseudo"]=> string(6) "OOOOOO" 
[0]=> string(6) "OOOOOO" 
["message"]=> string(36) "DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD" 
[1]=> string(36) "DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD" 
}
-->