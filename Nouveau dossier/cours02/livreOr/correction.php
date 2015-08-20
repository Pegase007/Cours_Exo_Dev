config.php

 $pdo = new PDO('mysql:host=localhost;dbname=bdd', 'root', 'test');

traitement.php

$query = $pdo->query("SELECT * FROM messages");

$str = "";

if (isset($_REQUEST[“submit”])) {

  $email = htmlspecialchars($_REQUEST[“email”]);
  $content = htmlspecialchars($_REQUEST[“contenu”]));

  foreach ($smilies as $key => $value) {
    $content = str_replace($key, ‘<img src=”’ . $value . ‘”>’, $content);
  }
  

  $pdo->exec(“INSERT INTO messages (contenu, email, `date`) VALUES (‘$content’, ‘$email’, NOW())”);

}

while ($data = $query->fetch()) {
  $str .= "<div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title"> ' . $data["date"] . '</h3>
                      </div>
                      <div class="panel-body">
                         ' . $data["contenu"] . '
                      </div>
                    </div>”;
}


 //note le .= équivaut au +=

 

index.php

<?php
	include();
	include();
?>
<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container">
               
           

            <form method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <textarea class="form-control" rows="3" name="content"></textarea>
              <button type="submit" class="btn btn-default" name="submit">Submit</button>
            </form>
    
            <div>
    </body>

</html>


