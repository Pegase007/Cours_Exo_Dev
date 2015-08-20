<!DOCTYPE HTML>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Livre D'or Edit</title>

       
        <link rel="stylesheet" href="css/style.css" />

    </head>
    <body>
     <div class="container"> 
    
 <!-- Insertion BDD -->
<?php include'index.php';?>  
<?php include 'config.php';?>
<?php include 'traitement.php';?>



     <h1>Livre d'Or</h1>
     <h2>Affichage</h2>
    <div class="historic">
        <form method="POST">
        <?php
           //Récupération dans la base de donnée
            $reponse = $bdd->query('SELECT id,text FROM messages ORDER BY date LIMIT 0,5');
            
            while ($donnees = $reponse->fetch())
            {                
                //echo '<strong>New Message : </strong>'.htmlspecialchars($donnees['text']).'<br />';
                echo str_replace(':)', '<img src="img/emot2.png">', '<strong>New Message : </strong>'.htmlspecialchars($donnees['text'])."<input type='hidden' name='id' value='" . $donnees['id'] . "'><button type='submit' name='delete'>x</button>".
                "<button type='submit' name='update'>Update</button>".'<br />');
            }
           
           ?> 
        </form>
           
       
            
           
    </div>

    <div>
        <h2>Messages</h2>
            <form method="POST">
                <label for="nom">Nom</label><input type="text" name="nom" id="nom" /><br />
                <label for="prenom">Prénom</label><input type="text" name="prenom" id="prenom" /><br />
                <label for="date">Date</label><input type="date" name="date" id="date" /><br /><br/>
                <label for="text">Message</label><textarea name="text" id="text" rows="8" cols="50"></textarea>
                <button type="submit" name="envoi">Envoyer</button>
            </form>

           
    </div>



      
    </div>    
    </body>
</html>