<?php
include "connexion.php";
include "header.php";
include "footer.php";


//id : récupere l'id en URL
$id = $_GET['id'];

//stocker la requete et l'executer avec la fonction query()
$query = $bdd->query('SELECT * FROM actors WHERE id= '.$id);

$actors = $query->fetch();


$querymov=$bdd ->query('SELECT movies.title,movies.date_release
FROM actors
INNER JOIN actors_movies ON actors.id = actors_movies.actors_id
INNER JOIN movies ON movies.id = actors_movies.movies_id WHERE actors.id='.$id);
$mov=$querymov ->fetchAll();

$query = "SELECT actors.firstname, actors.lastname,actors.city
FROM  `actors` WHERE city= '{$actors['city']}'";

//var_dump($query);

$queryville=$bdd->query($query);
$ville=$queryville ->fetchAll();

?>


<div class="container">
    <div id="moviedesc">

        <h1> <?php echo $actors['firstname']." ".$actors['lastname']; ?></h1>

        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src=" <?php echo $actors['image'];?> ">
            </div>

            <div class="col-md-8">
                <h5> Role: <?php echo $actors['roles']; ?> </h5>
                <h5> Nationalité: <?php
                    if ( $actors['nationality'] =="en"){

                        echo "English";

                    }
                    else if($actors['nationality'] =="en_US"){

                        echo "American";
                    }

                    else{
                        echo $actors['nationality'];
                    }
                    ?> </h5>
                <h5> Date de naissance: <?php echo $actors['dob']?></h5>
                <h5> Ville d'origine:
                    <?php echo $actors['city'] ?> </h5>



                <h5> Biographie</h5>
                <p> <?php echo $actors['biography']; ?></p>

                <h5> Films tournés:</h5>
                <table><?php
                    foreach ($mov as $movact) {
                        echo
                            " <tr><td><strong>" . $movact['title']."</strong> </td>

                            <td class='text-right col-md-8'>".  $movact['date_release'] ."</td>
                            </tr>";

                    };
                    ?></table>

                <h5> Acteurs de la même ville:
                    <?php
                    foreach ($ville as $actville) {

                            echo "<br>".$actville['firstname'] . " " . $actville['lastname'];
                    }

                    ?> </h5>



            </div>
            <br>



            <div class="col-md-12">
                  <?php

                    if($actors['recompenses']=! " "){

                        echo "<h5 > Recompenses:". $actors['recompenses']."</h5>";
                    }
                    else{ ?>

                        <div class="alert alert-danger" role="alert">
                            Aucune recompense pour cet acteur
                        </div>

                    <?php }

                    ?> </h5>

            </div>








        </div>
    </div>