<?php
session_start();

?>
 <html>

<meta charset="utf-8">

	<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

<?php
var_dump($_SESSION); 
				/*$_SESSION["nom"] = "sam";
				echo $_SESSION["nom"];*/

			/*
				$_SESSION["id"]=1;
				if(isset($_SESSION["id"])){
					echo "Vous êtes connecté";
				}else{
					echo "Vous n'êtes pas connecté";
				}
			*/
	try{
          $bdd = new PDO('mysql:host=localhost;dbname=cours3','root','troiswa');
          }
        catch(exception $e){
          throw $e;
        }
        
?>


<?php
/*
	if(isset($_REQUEST["submit"])){
	 	$nom = $_REQUEST['nom'];
	 	$password = $_REQUEST['password'];	 
	 
		$sql = $bdd->query("SELECT * FROM utilisateurs WHERE
		 							name ='$nom' AND 
		 							pass ='$password'
		 							");
		$user = $sql->fetch();
			if($user){ //Si $utilisateur existe
				echo "Vous êtes connecté";
			}else{
				echo "Noob";
			}

}
	/* Injection 
		' OR 1=1 --
	*/
?>


<?php

if(isset($_SESSION["session"])){
	if(isset($_REQUEST["submit"])){
		 	$nom = $_REQUEST['nom'];
		 	$password = $_REQUEST['password'];

		 $query=$bdd->prepare("SELECT * FROM utilisateurs WHERE
		 						name = :monNom AND
		 						pass = :monPassword");
		 	$query->execute(array(
		 		"monNom" => $nom,
		 		"monPassword" => $password
		 		));

			$user = $query->fetch();
			/*if($user){
				echo"Connecté";
			}
			else{
				echo "Noob";
			}*/
			if($user){
				$_SESSION["session"]=$user;
				
					echo "Vous êtes connecté";
				}
				else{
					echo"Vous n'êtes pas connecté";
				}
			
	}
}
?>
<?php
if(isset($_SESSION["session"])){?>
	<form methode="POST">
		<input type="text" name="nom">
		<input type="password" name="password">
		<button type="submit" name="submit">Envoyer</button> 
	</form>
<?php }
	else{
		$name = $_SESSION["session"]["name"];
		echo"Bonjour".$name;
	}


?>


</html>