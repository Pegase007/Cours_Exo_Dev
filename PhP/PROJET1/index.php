

<?php

include 'header.php';
include 'contact.php';
include'mentions.php';
include'apropos.php';





?>

<div class="container">
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top col-md-offset-3 col-md-6">
            <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-8">
                    <ul class="nav navbar-nav ">
                        <li><a href="index.phphp">HOME</a></li>
                        <li><a href="contact.php">CONTACTS</a></li>
                        <li><a href="mentions.php">MENTIONS</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>

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
                                <p><a href="movie.php?id=<?php echo $movie['id'] ?> class="btn btn-primary" role="button">En savoir plus</a> </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-sm-6 col-md-4">
                    <?php
                    $query = $bdd->query('SELECT title, image,description FROM movies WHERE visible =1 AND cover =1 LIMIT 1,1');
                    $images = $query->fetchAll();
                    foreach ($images as $movie) { ?>
                        <div class="thumbnail">
                            <img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;">
                            <div class="caption">
                                <h3><?php echo  $movie['title']  ?></h3>
                                <p><?php echo  $movie['description'] ?></p>
                                <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-sm-6 col-md-4">
                    <?php
                    $query = $bdd->query('SELECT title, image,description FROM movies WHERE visible =1 AND cover =1 LIMIT 2,1');
                    $images = $query->fetchAll();
                    foreach ($images as $movie) { ?>

                        <div class="thumbnail">
                            <img data-src="" alt="" src="<?php echo  $movie['image'] ?>" data-holder-rendered="true" style=" width: 100%; display: block;">
                            <div class="caption">
                                <h3><?php echo  $movie['title']  ?></h3>
                                <p><?php echo  $movie['description'] ?></p>
                                <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>




                <div class="panel-heading"><h4>Films les plus attendus</h4></div>
                <div class="bs-example" data-example-id="thumbnails-with-custom-content">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">


                            <div class="thumbnail">
                                <img data-src="" alt="" src=" " data-holder-rendered="true" style="width: 100%; display: block;">
                                <div class="caption">
                                    <h3></h3>
                                    <p></p>
                                    <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4">

                            <div class="thumbnail">
                                <img data-src="" alt="" src="" data-holder-rendered="true" style=" width: 100%; display: block;">
                                <div class="caption">
                                    <h3></h3>
                                    <p></p>
                                    <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4">

                            <div class="thumbnail">
                                <img data-src="" alt="" src="" data-holder-rendered="true" style=" width: 100%; display: block;">
                                <div class="caption">
                                    <h3></h3>
                                    <p></p>
                                    <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a> </p>
                                </div>
                            </div>

                        </div>

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












                </div>






<?php

include 'footer.php' ;

?>