<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire PHP</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <form  method="POST">
		<label for="nom">Nom : </label><input type="text" name="nom" id="nom" /><br />
		<label for="email">Email :</label><input type="email" value="root" name="email" id="email" /><br />
		<input type="submit" value="Envoyer" />
	</form>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
                               