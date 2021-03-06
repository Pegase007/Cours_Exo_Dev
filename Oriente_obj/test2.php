
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


echo "<h2> Design Patterns </h2>";

$darty = new\App\Export\DartyFactory();
$product= $darty->createProduct('Apple Watch','A22EF',14.00);
dump($darty->createProduct('Apple Watch','A22EF',14.00));
dump($product->vente());
$boulanger = new\App\Export\BoulangerFactory();
$product= $boulanger->createProduct('Apple Book','A2DFSD',140.00);
dump($boulanger->createProduct('Apple Book','A2DFSD',140.00));
dump($product->vente());





$running = function(\App\Export\VenteInterface $obj){

    return $obj ->vente();
};

$abstractrunningprod =function(\App\Export\AbstractFactory $class, $title,$reference,$prix){

    return $class->createProduct($title,$reference,$prix);
};

$abstractrunningcat=function(\App\Export\AbstractFactory $class, $title,$description){

    return $class->createCategory($title,$description);
};

$produit1=$abstractrunningprod($darty,'Appel Watch','A22EF',14.00);
$produit2=$abstractrunningprod($boulanger,'Apple Book','A2DFSD',140.00);
$cat = $abstractrunningcat($darty,'Watch','watches');
$cat1 = $abstractrunningcat($boulanger,'Computer','pro');

dump($produit1);
dump($produit2);
dump($cat);
dump($cat1);


echo "<h2> Builder </h2>";

$manager = new \App\Commercials\Manager();

$product5=$manager->build(new App\Commercials\ProductBuilder());

dump($product5);


echo "<h2> Design Patterns Factory</h2>";


$samsungfactory = new \App\Smartphone\SamsungFactory();
$appelfactory = new App\Smartphone\AppleFactory();
$sonyfactory=new App\Smartphone\SonyFactory();


$smartphoneSamsung=$samsungfactory->createSmartphone("metal","vert",16,120);
$smartphoneApple=$appelfactory->createSmartphone("plastique","noir",32,230);
$smartphoneSony=$sonyfactory->createSmartphone("plastique","gris",32,210);


dump($smartphoneSamsung);
dump($smartphoneApple);
dump($smartphoneSony);


echo "<h2> Design Patterns Decorator</h2>";

$prod1= new App\WebService\Product('Apple Watch','description',600);
$prod2= new App\WebService\Product('Apple TV','description',2000);

$mark1= new App\WebService\Marque('Apple','AEREZ');
$mark2= new App\WebService\Marque('Samsung','RESRES');

$cat1=new App\WebService\Category('Telephone','cat of telephones',1);
$cat2=new App\WebService\Category('Ordinateurs','cat of ordinateurs',0);


$renderjson= new \App\WebService\RenderInJson($prod1);
$renderXml=new \App\WebService\RenderInXml($prod2);
//$renderBoot=new App\WebService\RenderInBootstrap($prod1);
//$renderBoot2=new App\WebService\RenderInBootstrap($cat1);



$extras=new App\WebService\RenderInBootstrap( new App\WebService\RenderInBold($prod1));


dump($renderjson->renderProduct(),$renderXml->renderProduct());

dump( $extras->renderProduct());



//echo $renderBoot->renderProduct();
echo $extras->renderProduct();

echo "<h2> Design Patterns Adapteur</h2>";

$adapteur= new App\FaceDeBook\FbUserAdapter(new \App\FaceDeBook\FbUser());

dump($adapteur->getImages());


echo "<h4>Google </h4>";

$google= new \App\Google\GoogleUserAdapter((new \App\Google\GoogleUser()));

dump($google->getMov());


echo "<h2> Design Patterns composite</h2>";

$product=new App\Commande\Product();
$product->render($prod1);

$product2= new App\Commande\Product();
$product2->render($prod2);

$ref=new App\Commande\Reference();
$ref->render(5);


dump($ref);

$commande= new App\Commande\Commande();

$commande ->addElement($ref);
$commande->addElement($product);
$commande->addElement($product2);


dump($commande);
$commande->render($commande);

dump($commande->render($commande));



?>
</div>
</body>
</html>

