
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
//
//$prod1= new \App\Product("montre");
//$prod2= new \App\Product("bague");
//
//$prods=[$prod1,$prod2];
//
//try{
//
//    $category2= new \App\Category();
//    $category2->setTitle("This is my title");
//    $category2->setVisible(false);
//    $category2->setProducts($prods);
//
//
//}catch(\App\Exception\OutOfStockException $e){
//
//
//    echo "<div class='alert alert-warning'>
//
//                    La catégorie {$e->getMessage()} n'a aucun produit
//
//                    </div>";
//
//}
//catch (Exception $e){
//
//    // envoyer un mail à l'administrateur sur l'erreur en question
//    echo "<pre>".$e->getMessage()." line: ".$e->getLine()." File: ".$e->getFile();
//
//}


 $fruit= new \App\Rayon\Fruit();
var_dump($fruit);






//    $produit4 = new \App\Product("PS4", 360, 400, $img1, $img2, "#ffffff");
//    $category2 = new \App\Categorie();
//    $category2->setTitle("Ma catégorie");
//    $category2->setVisible(false);
//
//    $produit4->setQuantity(2);
//    //$produit4->setVisible(false);
//    $produit4->setDatePublication(new \DateTime("2016-03-15"));
//    $produit4->setVisible(true);
//    $produit4->setTitle("Produit n°4");
//    $produit4->setDescription("afsdfsder");
//    echo     $produit4->getDescription();
//
//
//    $category3 = new \App\Categorie();
//    $category3->setTitle("Ma cat");
//    $category3->addProduct($product);
//    $category3->addProduct($iphone6);
//    $category3->getProducts();
//    //var_dump(count($category3->getProducts()));
//











?>
</div>
</body>
</html>

