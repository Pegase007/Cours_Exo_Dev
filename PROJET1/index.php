

<?php

include 'header.php';
include 'contact.php';
include'mentions.php';
include'apropos.php';


$query=$bdd->query('
SELECT actors.id, COUNT( movies.id ) , actors.image, actors.firstname, actors.lastname
FROM actors_movies
INNER JOIN actors ON actors.id = actors_movies.actors_id
INNER JOIN movies ON movies.id = actors_movies.movies_id
WHERE actors.id
GROUP BY actors.id
LIMIT 4
');
$bestact=$query-> fetchAll();

$querydir=$bdd->query('
SELECT directors.id, COUNT( movies.id ) , directors.image, directors.firstname, directors.lastname
FROM directors_movies
INNER JOIN directors ON directors.id = directors_movies.directors_id
INNER JOIN movies ON movies.id = directors_movies.movies_id
WHERE directors.id
GROUP BY directors.id
LIMIT 4

');
$bestdir=$querydir-> fetchAll();


$query=$bdd->query('SELECT categories.title, COUNT( movies.id )
FROM  `categories`
INNER JOIN movies ON categories.id = movies.categories_id
GROUP BY categories.title');
$cat=$query-> fetchAll();



?>

<div class="container">


    <div class="col-md-offset-1 col-md-10" id="movies">



        <div class="panel-heading"><h4>Films à l'affiche</h4></div>
        <div class="bs-example" data-example-id="thumbnails-with-custom-content">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <?php
                    $query = $bdd->query('SELECT title, image,description,id FROM movies WHERE visible =1 AND cover =1 LIMIT 1');
                    $images = $query->fetchAll();
                    foreach ($images as $movie) { ?>

                        <div class="thumbnail">
                            <a href="movie.php?id=<?php echo $movie['id'] ?>"> <img data-src="" alt="" src="  <?php echo  $movie['image'] ?> " data-holder-rendered="true" style="width: 100%; display: block;"></a>
                            <div class="caption">
                                <h3> <a href="movie.php?id=<?php echo $movie['id'] ?>"><?php echo $movie['id'] ?> <?php echo  $movie['title']  ?></a></h3>
                                <p>  <a href="movie.php?id=<?php echo $movie['id'] ?>"><?php echo  $movie['description'] ?></a></p>

                            </div>
                            <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-sm-6 col-md-4">
                    <?php
                    $query = $bdd->query('SELECT title, image,description,id FROM movies WHERE visible =1 AND cover =1 LIMIT 1,1');
                    $images = $query->fetchAll();
                    foreach ($images as $movie) { ?>
                        <div class="thumbnail">
                            <a href="movie.php?id=<?php echo $movie['id'] ?>"><img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;"></a>
                            <div class="caption">
                                <a href="movie.php?id=<?php echo $movie['id'] ?>"><h3><?php echo  $movie['title']  ?></h3></a>
                                <p><?php echo  $movie['description'] ?></p>

                            </div>
                            <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-sm-6 col-md-4">
                    <?php
                    $query = $bdd->query('SELECT title, image,description,id FROM movies WHERE visible =1 AND cover =1 LIMIT 2,1');
                    $images = $query->fetchAll();
                    foreach ($images as $movie) { ?>

                        <div class="thumbnail">
                            <a href="movie.php?id=<?php echo $movie['id'] ?>"><img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;"></a>
                            <div class="caption">
                                <a href="movie.php?id=<?php echo $movie['id'] ?>"><h3><?php echo  $movie['title']  ?></h3></a>
                                <p><?php echo  $movie['description'] ?></p>
                            </div>
                            <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                        </div>
                    <?php } ?>
                </div>




                <h4>Films les plus attendus</h4>

                <div class="bs-example" data-example-id="thumbnails-with-custom-content">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <?php
                            $query = $bdd->query('SELECT title, image, description, id
                                            FROM  `movies`
                                            WHERE visible =0
                                            AND  `date_release` > NOW( ) LIMIT 1');
                            $images = $query->fetchAll();
                            foreach ($images as $movie) { ?>

                                <div class="thumbnail">
                                    <a href="movie.php?id=<?php echo $movie['id'] ?>"><img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;"></a>
                                    <div class="caption">
                                        <a href="movie.php?id=<?php echo $movie['id'] ?>"><h3><?php echo  $movie['title']  ?></h3></a>
                                        <p><?php echo $movie['description'] ?></p>

                                    </div>
                                    <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <?php
                            $query = $bdd->query('SELECT title, image, description, id
                                            FROM  `movies`
                                            WHERE visible =0
                                            AND  `date_release` > NOW( ) LIMIT 1,1');
                            $images = $query->fetchAll();
                            foreach ($images as $movie) { ?>

                                <div class="thumbnail">
                                    <a href="movie.php?id=<?php echo $movie['id'] ?>"><img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;"></a>
                                    <div class="caption">
                                        <a href="movie.php?id=<?php echo $movie['id'] ?>"><h3><?php echo  $movie['title']  ?></h3></a>
                                        <p><?php echo $movie['description'] ?></p>

                                    </div>
                                    <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <?php
                            $query = $bdd->query('SELECT title, image, description, id
                                            FROM  `movies`
                                            WHERE visible =0
                                            AND  `date_release` > NOW( ) LIMIT 2,1');
                            $images = $query->fetchAll();
                            foreach ($images as $movie) { ?>

                                <div class="thumbnail">
                                    <a href="movie.php?id=<?php echo $movie['id'] ?>"><img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;"></a>
                                    <div class="caption">
                                        <a href="movie.php?id=<?php echo $movie['id'] ?>"><h3><?php echo  $movie['title']  ?></h3></a>
                                        <p><?php echo $movie['description'] ?></p>

                                    </div>
                                    <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                                </div>
                            <?php } ?>
                        </div>




    <?php
    //
    ////stocker la requete et l'executer avec la fonction query()
    //
    //$query = $bdd->query('SELECT * FROM movies');
    //
    //// fetchAll() me permet de récupérer les resultats de ma requete
    //$resultat = $query->fetchAll();
    //
    //// parcour le tableaux de résultats
    //foreach($resultat as $movie) {
    //
    //    // afiiche chaque titre de film
    //
    //    echo $movie['title'];
    //}
    //?>



                        <div class="panel-heading  "><h4>Les quatres meilleurs acteurs</h4></div>
                        <div class="bs-example" data-example-id="thumbnails-with-custom-content">
                            <div class="row">
                                <?php foreach($bestact as $best){?>
                                <div class="col-sm-4 col-md-3">

                                        <div class="thumbnail ">
                                           <img  alt="" src="<?php echo $best['image']?>" class="img-circle ">
                                            <div class="caption">
                                                <h6> <?php echo $best['firstname']." ".$best['lastname'] ?> </h6>


                                            </div>
                                            <p><a href="#" class="btn btn-warning" role="button">En savoir plus</a> </p>
                                        </div>

                                </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>


                    <div class="panel-heading  "><h4>Les quatres meilleurs realisateurs</h4></div>
                    <div class="bs-example" data-example-id="thumbnails-with-custom-content">
                        <div class="row">
                            <?php foreach($bestdir as $best){?>
                                <div class="col-sm-4 col-md-3">

                                    <div class="thumbnail ">
                                        <img  alt="" src="<?php echo $best['image']?>" class="img-circle ">
                                        <div class="caption">
                                            <h6> <?php echo $best['firstname']." ".$best['lastname'] ?> </h6>


                                        </div>
                                        <p><a href="#" class="btn btn-warning" role="button">En savoir plus</a> </p>
                                    </div>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
<div class="col-md-4">

    <div class="panel-heading  "><h4>Les catégories</div>


    <ul class="list-group">
<?php foreach($cat as $category){ ?>

    <li class="list-group-item">
        <span class="badge"> <?php echo $category['COUNT( movies.id )'] ?></span>
        <?php echo $category['title'] ?>
    </li>
<?php } ?>
</ul>
        


</div>




                </div>






<?php

include 'footer.php' ;

?>