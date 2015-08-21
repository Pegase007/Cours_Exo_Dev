
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

/**
 * création d'un objet Product (instance de la classe Product)
 */

$product = new \App\Product();

// je definis les valeurs de ses attributs/proprietés.

$product->setTitle("Apple Watch");

//echo"Le nom du produit 1 est: {$product->getTitle()}";

$product->setDescription("Ma jolie montre m'affiche l'heure, d'ou le prix");

//echo"La description du produit 1 est: {$product->getDescription()}";

$product->setPrix(600);

//echo"Le prix du produit 1 est: {$product->getPrix()}";

$product->setReference("AX6FB");

//echo"La reference du produit 1 est: {$product->getReference()}";

$product->setCouleur("#AAEEE66");

//echo"La couleur du produit 1 est: {$product->getCouleur()}";

$product->setDimension("2");

//echo"La dimension du produit 1 est: {$product->getDimension()}";

$product->setFonction("horlogerie");

//echo"La fonction du produit 1 est: {$product->getFonction()}";

$product->setAtouts("connectée");

//echo"Les atouts du produit 1 est: {$product->getAtouts()}";

$product->setUrl ("https://www.youtube.com/watch?v=mkODFbp2hjc");

//echo"'L'url du produit 1 est: {$product->getUrl()}";

$product->setVisible (true);
//
//echo"La visibilité du produit 1 est: {$product->getVisible()}";

//$product->setMarques (array("Apple", "Google", "Sony"));

//echo"La marque du produit 1 est: {$product->getMarques()}";

//var_dump($product);

$product->setImages( array("http://www.mixbar.fr/photo/art/grande/8067497-12570604.jpg?v=1437933321","http://www.mixbar.fr/photo/art/grande/8067497-12570604.jpg?v=1437933321"));


// FIN - PRODUCT -


/**
 * Creation d'une nouvelle instance product2
 */

$product2 = new \App\Product();

$product2->setTitle("Banana");

$lib = new \Lib\Beautiful();
echo $lib->title($product2->getTitle());

//echo"Le nom du produit 2 est: {$product->getTitle()}";

$product2->setDescription ( "Une belle banana");

//echo"La description du produit 2 est: {$product->getDescription()}";

$product2->setPrix(1);

//echo"Le prix du produit 2 est: {$product->getPrix()}";

$product2->setReference("BNANA");

//echo"La reference du produit 2 est: {$product->getReference()}";

$product2->setCouleur("#FCE94D");

//echo"La couleur du produit 2 est: {$product->getCouleur()}";

$product2->setDimension("10");

//echo"La dimension du produit 2 est: {$product->getDimension()}";

$product2->setFonction("nutritive");

//echo"La fonction du produit 2 est: {$product->getFonction()}";


$product2->setAtouts("delicieux");

//echo"Les atouts du produit 2 est: {$product->getAtouts()}";


$product2->setUrl ("https://www.banana.com");

//echo"'L'url du produit 2 est: {$product->getUrl()}";


$product2->setVisible (true);

//echo"La visibilité du produit 2 est: {$product->getVisible()}";

$product2->setMarques (array("verte", "jaune"));

//echo"La marque du produit  est: {$product->getMarques()}";



//$user3->ajoutPanier($product2);
//
//
//var_dump($user3->getPanier($product2));
$product2->setImages(array("https://www.organicfacts.net/wp-content/uploads/2013/05/Banana21.jpg","http://www.mixbar.fr/photo/art/grande/8067497-12570604.jpg?v=1437933321"));

//var_dump($product2->getImages());

// ...

/**
 * Creation de la troisieme instant product3
 */

//var_dump($product2);

$product3 = new \App\Product();


$user1 = new \App\Users();

$user1->setNom("Harold");
$user1->setPrenom("FINCH");
$user1->setAge(48);
$user1->setEmail("harold.finch@gmail.com");
$user1->setVille("New York");
//appel de la methode sinscrire
echo $user1->sinscrire();
// appel de la methode newletter
echo $user1->newsletter();
//var_dump($user1);

$user1->augmenterAge();
$user1->augmenterAge();
echo $user1->majeur();


$user2 = new \App\Users();

$user2->setNom("Don");
$user2->setPrenom("DRAPER");
$user2->setAge(40);
$user2->setEmail("don.draper@scdp.com");
$user2->setVille("New York");
echo $user2->sinscrire();
$user2->newsletter();
echo $user2->newsletter();

echo $user2->ecrire($user1);
echo $user2->majeur();
//var_dump($user2);

$user3 = new \App\Users();

$user3->setNom("Walter");
$user3->setPrenom("WHITE");
$user3->setAge(45);
$user3->setEmail("walter.white@gmail.com");
$user3->setVille("Albuquerque");
echo $user3->sinscrire();
$user3->newsletter();
echo $user3->newsletter();

echo $user3->ecrire($user2);

echo $user3 -> commenter($user1);

echo $user3->majeur();
echo $user3->plusAge($user1);

//var_dump($user3);



$category1 = new \App\Category(1);
$category1->setTitle("Hola");
$category1->setDescription("description");
$category1->setVisible("visible");

$category1-> ajoutProduit($product2);
$category1-> ajoutProduit($product);

$category1->removeProduit($product);

//var_dump($category1->getProducts());

//$category1->hasProduit($product2);

echo $category1->getTitle();

/**
 * Nouvelle commande
 */

$commande = new \App\Commande(2);
$commande -> setId('1');
$commande -> setRef('14ER78');

//Lier la commande à un utilisateur

$commande->lienUser($user1);
var_dump($commande->getAttrUser());

// ajouter - supprimer un produit

$commande-> ajoutProduit($product);
$commande-> ajoutProduit($product2);
$commande->removeProduit($product);

$commande->htprice();
$commande->ttcprice(\APP\Commande::TVA);



var_dump($commande->getProduits());
var_dump($commande->getPrixht());
var_dump($commande->getPrixttc());
var_dump($commande->countProduit());
//
//var_dump($commande->preProduit());


$commande2 = new \App\Commande(1);

var_dump($commande2);


$lib=new \Lib\Beautiful();

echo $lib->tab($commande->getProduits());



//constantes
echo \App\Users::PAYS. "<br />";
echo \App\Users::FORMATION. "<br />";
//methodes statiques
echo \App\Users::getPays(). "<br />";
echo \App\Users::getFormation(). "<br />";




$db1=new \App\Database();

//var_dump($db1->getMovies());

echo "<h2>All movies</h2>";
foreach( $db1->getMovies() as $mov){

    echo "<br>".$mov['title'];

}



//var_dump( $db1->getDirectors());
echo "<h2>TT realisateurs</h2>";
foreach( $db1->getDirectors() as $dir){

    echo "<br>".$dir['firstname'].",". $dir['lastname'];

}

//var_dump($db1->getFilm(1));


//get film from id
echo $db1->getFilm(1);

//var_dump($db1->getCat());
echo "<h2>Categories</h2>";
foreach( $db1->getCat() as $cat){

    echo "<br>".$cat['title'];

}

//var_dump($db1->getActors());

echo "<h2>Actors</h2>";
foreach( $db1->getActors() as $actors){

    echo "<br>".$actors['firstname']." ". $actors['lastname'];

}
echo "<h2>Get 1 director</h2>";
        //var_dump( $db1->getRealisateur('Peter'));
        //echo $db1->getRealisateur('Peter')



/**
 * get director information from a firstname or lastname
 */
echo $db1->getRealisateur('Peter','');





/**
 * Get movies from a chosen category
 */
echo "<h2>A movie with a chosen category</h2>";

foreach( $db1->getMovCat("Horreur")as $movCat){

    echo "<br>".$movCat['title'];
}

        //var_dump($db1->getMovTrailer());

        //foreach( $db1->getMovTrailer() as $trailer){
        //
        //    echo $trailer;
        //}


/**
 * Get movies before a chosen date
 */
 echo "<h2>Get the dates from the movies released before a chosen date</h2>";
foreach($db1->getMovBefore('2015-05-04') as $date){


    echo "<br>".$date;
}


/**
 * La clase declinaison herite de la classe produits
 * Cretion de l'heritage de la classe Product
 */

echo "<h2> Heritage</h2>";

$declinaison1= new \App\Declinaison();
$declinaison1->setTitle('Wow mon nouveau produit');
$declinaison1->setPrix(15.3);
$declinaison1->setHauteur(12);
$declinaison1->setPoid(2);
$declinaison1->setProfondeur(2);

/**
 * Add image with counter
 */
echo "<h4>Counter image</h4>";
$declinaison1->addImage('http://o.aolcdn.com/hss/storage/midas/b5236e4ccc84ef48ef5993b2af8e4010/202267673/minions_2015-wide.jpg')."<br>";
echo "<br>".$declinaison1->addImage('http://o.aolcdn.com/hss/storage/midas/b5236e4ccc84ef48ef5993b2af8e4010/202267673/minions_2015-wide.jpg')."<br>";

echo "<br>".$declinaison1->dimension()."<br>";



$images=new\Lib\Images();
//$declinaison1->addImage($image1);
var_dump($declinaison1);

/**
 * Creation d'un heritage admin de user
 */
$admin=new \App\Administrateur();
$admin ->setNom("L'eponge");
$admin ->setPrenom("Bob");
$admin ->setEmail("bobleponge@blabla.com");
$admin ->setAge(2);
$admin ->setVille("Sousl'au");

$admin2=new \App\Administrateur();
$admin2 ->setNom("Max");
$admin2 ->setPrenom("Bay");
$admin2 ->setEmail("superhero@blabla.com");
$admin2 ->setAge(5);
$admin2 ->setVille("Je ne sais pas");


var_dump($admin);
var_dump($admin2);

/**
 * Administrer l'user 1
 */

echo "<br>".$admin2->administrer( $user1);

/**
 * Inscription à la newsletter selon age
 */
echo "<br>".$admin2-> inscriptionNws($user1);

echo "<h2> Inherited class from database </h2>";

$advanced = new \App\DatabaseAdvance();

echo "<h3>Get movies</h3>";
foreach($advanced->getMovies() as $movies){

    echo $movies['title']."<br>";

};

echo "<h3>Get Dir</h3>";
foreach($advanced->getDirectors() as $dir){

    echo $dir['firstname']." ". $dir['lastname']."<br>";

};

echo "<h3>Get Film from Id</h3>";
echo "<br>"."Title: ".$advanced->getFilm(6);



echo "<h3>Get Categories</h3>";

foreach( $advanced->getCat() as $cat){

    echo "<br>".$cat;

}


echo "<h3>Get Actors</h3>";

foreach( $advanced->getActors() as $act) {

    echo "<br>" . $act;

}


echo "<h3>Select Dir</h3>";

echo "<br>".$advanced->getRealisateur('Peter','');


echo "<h3>Get Movie from categories</h3>";

foreach( $advanced->getMovCat("Fantastique") as $cat) {

    echo "<br>" . $cat;

}

echo "<h3>Get Movies released beforE date</h3>";

foreach( $advanced->getMovBefore('2015-01-02') as $act) {

    echo "<br>" . $act;

}

//var_dump($advanced->getTable());
/** INSERT INTO TABLE */


//$advanced->inserer($advanced->getTable(),'user');

/**
 * Modifier donnée dans la base de donnée
 */
$advanced->modifier('user','28','avatar','Bob');

$advanced->delete('user','','','bananabizzzz');




/**
 * Permet d'appeler un objet grace à la methode heritable __toString
 */
$obj= new \App\Product();
$obj->setTitle('Mon super produit');

echo "<br>".$obj;

$obj2 = new \App\Declinaison();
$obj2->setTitle('Mon super decli produit');

echo $obj2;









/**
 * Interface
 */

echo "<h2> Interface </h2>";
$productInt = new \App\Product();
$productInt->setTitle('Adidas');


$decliInt = new \App\Declinaison(2);
$decliInt->setTitle('Vetements');


$decliInt2 = new \App\Declinaison(4);
$decliInt2->setTitle('Sous-Vetements');




echo $decliInt->getParent($productInt);
echo $decliInt->getParent($decliInt2);


/**
 * Traits
 */

echo"<h2>Traits</h2>";
$produit = new\App\Category();
$produit->setPosition(2);
echo $produit->getPosition();


/**
 * ACTEURS/REALISATEURS
 */

echo "<h2> ACTORS/DIRECTORS</h2>";

$actor1 = new \App\Actors();
//$actor1->getCreate($actor1->getTestarray(), "actors");
//$actor1->getUpdate($actor1->getTestarray2(),"actors",39);
//$actor1->getDelete("actors",'35');
echo $actor1->getRetrieve("actors","firstname","Martin");
?>
</div>
</body>
</html>

