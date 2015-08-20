<?php
include "header.php";
include "footer.php";
include"connexion.php";

//id : récupere l'id en URL
$id = $_GET['id'];

//stocker la requete et l'executer avec la fonction query()
$query = $bdd->query('SELECT * FROM categories LIMIT 8');
$categories = $query->fetchAll();

$querycat = $bdd->query('SELECT movies.image
FROM `categories`
INNER JOIN movies
ON categories.id=movies.categories_id
WHERE movies.image IS NOT NULL
AND movies.image REGEXP "https?:\/\/" AND movies.id= '.$id);

$movim=$querycat-> fetchAll();


?>



<div class="container">


    <div class=" col-md-12" id="movies">



        <div class="panel-heading"><h4>Catégories</h4></div>
        <div class="bs-example" data-example-id="thumbnails-with-custom-content">
            <div class="row">
                <?php foreach ($categories as $cat) { ?>
                    <div class="col-sm-6 col-md-3">


                        <div class="thumbnail">
                            <a href="movie.php?id=<?php  ?>"><img class="" src="<?php

                                 echo $cat['image'];
//$querycat = $bdd->query('SELECT movies.image
//FROM `categories`
//INNER JOIN movies
//ON categories.id=movies.categories_id
//WHERE movies.image IS NOT NULL
//AND movies.image REGEXP "https?:\/\/" AND categories.id= '.$cat['id']);
//$movim=$querycat-> fetch();
//echo $movim['image']
//                                       ?> " data-holder-rendered="true" style=" width: 100%; display: block;"></a>
                            <div class="caption captionb" >


                                <a href="movie.php?id=<?php  ?>"><h6><?php echo $cat['title']  ?></h6></a>
                                <p><?php echo $cat['description'] ?></p>

                                <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>

                            </div>
                        </div>


                    </div>
                <?php } ?>

