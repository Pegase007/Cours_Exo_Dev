 <?php
    // Connection avec la base de données
        try{
          $bdd = new PDO('mysql:host=localhost;dbname=livreOr','root','troiswa');
          }
        catch(exception $e){
          throw $e;
        }
        

?>