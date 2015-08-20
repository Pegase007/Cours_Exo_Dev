<?php
    session_start();

     $pdo = new PDO('mysql:host=localhost;dbname=devdoc', '08saronce', 'mdp');

     $smilies = array(
         ":)" => "http://static.commentcamarche.net/www.commentcamarche.net/pictures/aXh2H55b-capture-d-ecran-2012-05-05-a-17-08-23-s-.png",
         ':(' => "http://static.commentcamarche.net/www.commentcamarche.net/pictures/GbxYkbMG-capture-d-ecran-2012-05-05-a-17-11-45-s-.png"
     );

    $edit = isset($_GET[“edit”]) ? true : false;

    function replaceSmiley($content,  $smilies) {
        foreach( $smilies as $key => $value) {
            $content = str_replace($key, '<img src="' . $value . '">', $content);
        }
        return $content;
    }

     if (isset($_REQUEST["submit"])) {
         $email = htmlspecialchars($_REQUEST["email"]);
         $content = htmlspecialchars($_REQUEST["content"]);
         $req = $pdo->prepare("INSERT INTO messages (contenu, email, `date`) VALUES(:content, :email, NOW())");
         $req->execute(array(
             "content" => $content,
             "email" => $email
         ));
     }
     elseif (isset($_REQUEST[“delete”])) {
	 $req = $pdo->prepare(“DELETE FROM messages WHERE id=:messageId”);
	 $req->execute(array(
		“messageId” => $_REQUEST[“id”]
	 ));
     }


     $query = $pdo->query("SELECT * FROM messages ORDER BY id DESC LIMIT 0, 10");
     
     $str = "";

     while ($data = $query->fetch()) {
         $str .= ' <div class="panel panel-default">
                      <div class="panel-heading">
                        <form method="post">
                            <h3 class="panel-title"> ' . $data["date"] . '</h3>
				<input type=”hidden” name=”id” value=”’ . $data[“id”] . ‘“>’;
				
		   if ($edit) {
			$str .= ‘ <button type=”submit” name=”update” class="glyphicon glyphicon-ok"></button>’;
		   }
$str .= ‘
<button type=”submit” name=”delete” class="glyphicon glyphicon-remove"></button>
                        </form>
                      </div>
                      <div class="panel-body">
                         ' . replaceSmiley($data["contenu"], $smilies) . '
                      </div>
                    </div>';
     }
     
?>

<!doctype>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container">
               
            <?php echo  $str; ?>

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



