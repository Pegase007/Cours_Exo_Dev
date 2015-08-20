<?php

    

    //Enregistrement dans la base de données
       
    $session = isset($_SESSION["session"])? $_SESSION["session"] : false;   
    $admin = isset($_GET["admin"])? true:false;
        if($admin && !$session){
            exit("Veuillez vous connecter");
        }
            

        $nom="";
        $prenom="";
        $date="";
        $text="";
        $id="";


        if(isset($_REQUEST["envoi"])){

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date = $_POST['date'];
        $text = $_POST['text'];
        $id = $_POST['id'];
        
        
        $bdd->exec("INSERT INTO messages (nom, prenom, date, text) VALUES ('$nom', '$prenom', now(), '$text')");

       /* $sql = "INSERT INTO messages (nom, prenom, date, text) VALUES (:nom, :prenom, :date, :text)";   
        $query = $bdd->prepare( $sql );
        $query->execute( array( ':nom'=>$nom, ':prenom'=>$prenom, ':date'=>$date, ':text'=>$text ) );  
        */
    }
    elseif (isset($_REQUEST["delete"])){
                $req = $bdd->prepare("DELETE FROM messages WHERE id=:messageId");
                $req->execute(array(
                    "messageId" => $_REQUEST["id"]
                    ));
            }
         
    else{
        if(isset($_REQUEST["update"])){
                $message = htmlspecialchars($_REQUEST["text"]);
                $req = $bdd->prepare("UPDATE text SET text=:newContent WHERE id=:messageId");
                $req->execute(array(
                    "newContent"=>$message,
                    "messageId" => $_REQUEST["id"]
                    ));
            

        }
    }








   /* else{
        if(isset($_REQUEST["update"])){
            $req = $bdd->prepare("UPDATE messages SET ")
        }
    }
*/

        
    $admin = isset($_GET["admin"])?true:false;    

