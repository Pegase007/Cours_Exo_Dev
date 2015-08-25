
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

</head>
<body>
<div class="container">
<?php
//include'src/App/Visible.php';
//include"src/App/Title.php";
//include"src/App/Catalogue.php";
//include "src/App/Product.php";
//include"src/App/Users.php";
//include"src/App/Category.php";
//include"src/App/Commande.php";
//include"src/Lib/Beautiful.php";
//include"src/Lib/Images.php";
//include"src/App/Database.php";
//include"src/App/Declinaison.php";
//include"src/App/Administrateur.php";
//include"src/Lib/Bootstrap.php";
//include"src/App/DatabaseAdvance.php";
require __DIR__ . '/vendor/autoload.php';


echo "<h2> Exception specifique </h2>";



try{

    $category2= new \App\Category("dftgdfg");
    $category2->setTitle("This is my title");
    $category2->setVisible(false);

}catch(\App\Exception\AvailableException $e){


    echo "<div class='alert alert-warning'>
                    La catégorie {$e->getMessage()} est indisponible
                    </div>";

}
catch (Exception $e){

    // envoyer un mail à l'administrateur sur l'erreur en question
    echo "<pre>".$e->getMessage()." line: ".$e->getLine()." File: ".$e->getFile();

}




?>
</div>
</body>
</html>

