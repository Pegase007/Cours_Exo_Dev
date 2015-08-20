 /*
    $reponse = $bdd -> query("SELECT*FROM utilisateurs");
      var_dump($reponse -> fetch());
      var_dump($reponse -> fetch());
    */

    //Même chose avec un while, et pour recupérer toutes les données
    /*
    $reponse = $bdd -> query("SELECT*FROM utilisateurs");
    while($donnee = $reponse -> fetch()){
      var_dump($donnee);
    }  
    */

    //Et donc la même avec l'aide de PDO
    /*
    $reponse = $bdd -> query("SELECT*FROM utilisateurs");
    var_dump($reponse -> fetchAll());
    */

    //Recupere tous les prenoms
    /*$reponse = $bdd -> query("SELECT*FROM utilisateurs");
      while($donnee = $reponse -> fetch()){
        echo "Prenom : ".$donnee["prenom"]."<br/>";
      }  
  */
  ?>


<?php
/*
  if(isset($_REQUEST["nom"])){
    echo "Il manque le nom";
   if(empty($_REQUEST["nom"])){
    echo "Il manque le nom";
  }
  */
?>
<!--
  <form  method="POST">
    <label for="nom">Nom : </label><input type="text" name="nom" id="nom" /><br />
    <label for="email">Email :</label><input type="email" name="email" id="email" /><br />
    <button type="submit" name="submit">Envoyer</button>
  </form>
  */
-->


<!-- Pour que le champ nom se rappel de ce que l'on a rentrer au chargement de la page -->
<!--
  <form  method="POST">
    <label for="nom">Nom : </label><input type="text" name="nom" value='<?php echo $_REQUEST["nom"];?>' id="nom" /><br />
    <label for="email">Email :</label><input type="email" name="email" id="email" /><br />
    <button type="submit" name="submit">Envoyer</button>
  </form>
-->


<!-- Pour que le champ n'affiche rien au chargement -->
<?php
/*
$nom = "";
if(isset($_REQUEST["submit"])){
  $nom = $_REQUEST["nom"];

  if(empty($nom)){
      echo "Il manque le nom";
    }
  }
  */
?>

<!--
<form  method="POST">
    <label for="nom">Nom : </label><input type="text" name="nom" value='<?php echo $nom?>' id="nom" /><br />
    <label for="email">Email :</label><input type="email" name="email" id="email" /><br />
    <button type="submit" name="submit">Envoyer</button>
  </form>
-->


