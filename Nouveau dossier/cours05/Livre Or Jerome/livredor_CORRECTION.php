<?php
     session_start();

     define("TABLE", "posters");

     $pdo = new PDO('mysql:host=localhost;dbname=falzendev', 'root', 'troiswa');

     $smilies = array(
         ":)" => "http://static.commentcamarche.net/www.commentcamarche.net/pictures/aXh2H55b-capture-d-ecran-2012-05-05-a-17-08-23-s-.png",
         ':(' => "http://static.commentcamarche.net/www.commentcamarche.net/pictures/GbxYkbMG-capture-d-ecran-2012-05-05-a-17-11-45-s-.png"
     );

    $admin = isset($_GET["admin"]) ? true : false;

    function replaceSmiley($content,  $smilies) {
        foreach( $smilies as $key => $value) {
            $content = str_replace($key, '<img src="' . $value . '">', $content);
        }
        return $content;
    }

     if (isset($_REQUEST["submit"])) {
         $email = htmlspecialchars($_REQUEST["email"]);
         $content = htmlspecialchars($_REQUEST["content"]);
         $req = $pdo->prepare("INSERT INTO " . TABLE . " (contenu, email, `date`) VALUES(:content, :email, NOW())");
         $req->execute(array(
             "content" => $content,
             "email" => $email
         ));
     }
     elseif (isset($_REQUEST["delete"])) {
	 $req = $pdo->prepare("DELETE FROM " . TABLE . " WHERE id=:messageId");
	 $req->execute(array(
		"messageId" => $_REQUEST["id"]
	 ));
     }
     elseif (isset($_REQUEST["update"])) {
	 $message = htmlspecialchars($_REQUEST["message"]);
 $id = $_REQUEST["id"];

	if (is_numeric($id)) {
 $req = $pdo->prepare("UPDATE " . TABLE . " SET contenu=:content WHERE id=:messageId");
	 $req->execute(array(
	"content" 		=> $message,
	"messageId" 		=> $id

     ));
}

     }


     $query = $pdo->query("SELECT * FROM " . TABLE . " ORDER BY id DESC LIMIT 0, 10");
     
     $str = "";

     while ($data = $query->fetch()) {
         $str .= ' 
		<form method="post">
  <div class="panel panel-default">
                      <div class="panel-heading">
                        
                            <h3 class="panel-title"> ' . $data["date"] . '</h3>';
				
				
		   if ($admin) {
$str .= '<input type="hidden" name="id" value="' . $data["id"] . '"> 

<button type="submit" name="update" class="glyphicon glyphicon-ok"></button>

<button type="submit" name="delete" class="glyphicon glyphicon-remove"></button>';

		   }
                 
$str .=    '</div>';
	if ($admin) {
		$str .= '<textarea class="form-control" rows="3" name="message">' . $data["contenu"] . '</textarea>';
	}
	else {
	 	$str .= '<div class="panel-body">' . replaceSmiley($data["contenu"], $smilies) . '
                      </div>';
	}

        $str .= '</div></form>';
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



