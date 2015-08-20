<?php
	session_start();
	include(“config.php”);
	include(“traitement.php”);
?>
<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

          <?php
            if(!$session){
              if(!empty($error)){
                for($i=0; $i < count($error)); i++){
                  echo $error[$i];
}
              }
            }
            ?>

    <?php if (!$session) { ?>              

            <form method="post">
              <div class="form-group">
                <label>pseudo</label>
                <input type="text" class="form-control" name="pseudo">
              </div>
                <div class="form-group">
                <label >Mot de passe</label>
                <input type="text" class="form-control" name="mdp">
              </div>
                
             <div class="form-group">
                <label>Confirmation Mot de passe</label>
                <input type="text" class="form-control" name="mdp_confirm">
              </div>
              
              <button type="submit" class="btn btn-default" name="register">Submit</button>
            </form>
    
		<?php } 
		else {
			echo “Déjà connecté !”;
		}

?>
            <div>
    </body>

</html>

