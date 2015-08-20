	<?php
	session_start();
  
	?>
<html>
<meta charset="utf-8">
	<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

<?php
try{
          $bdd = new PDO('mysql:host=localhost;dbname=cours04','root','troiswa');
          }
        catch(exception $e){
          throw $e;
        }
?>

  <form methode="POST">
    <label for="nom">Nom</label><input type="text" name="nom">
    <label for="password">Mot de passe</label><input type="password" name="password">
    <label for="confirmpassword">Confirmation Mdp</label><input type="confirmpassword" name="confirmpassword">
    <button type="submit" name="submit">Enregistrer</button>
  </form>



<?php

/*Enregistrment dans la base de données*/
  $nom="";
  $password="";
  $confirmpassword="";

  if(isset($_REQUEST["submit"])){
        $nom = $_REQUEST['nom'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];


          if((!empty($nom)) && (!empty($password)) && (!empty($confirmpassword))){
            $bdd->exec("INSERT INTO utilisateurs (nom, password, confirmpassword) VALUES('$nom', '$password', $confirmpassword')");
          }
          else{
            echo "Veuillez renseigner tous les champs";
          }
  }








/*
function verifNom(){
  if(empty($nom)){
    echo "Veuillez renseigner le nom";
    return false;
  }
}

function verifpassword(){
  if(empty($password)){
    echo "veuillez renseigner le mot de passe";
    return false;
  }
}

  function verifconfirm(){
  if(empty($_confirmpassword)){
    echo "Veuillez confirmer votre mot de passe";
    return false;
  }
}

function verifForm(){
    $nomOk = verifNom('nom');
    $passwordOk = verifpassword('password');
    $confirmOk = verifconfirm('confirmpassword');

    if ($nomOk || $passwordOk || $confirmOk){
      $bdd->exec("INSERT INTO utilisateurs(nom, password, confirmpassword) VALUES ('$nom', '$password', '$confirmpassword')");
    }
    else{
      echo "Veuillez renseigner tous les champs";
    }
}
    
*/
?>