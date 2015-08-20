<?php
include "connexion.php";
include "header.php";
include "footer.php";


//id : récupere l'id en URL
$id = $_GET['id'];

//stocker la requete et l'executer avec la fonction query()
$query = $bdd->query('SELECT * FROM directors WHERE id= '.$id);

$directors = $query->fetch();



$querymov=$bdd ->query('SELECT movies.title, movies.date_release
FROM  `directors`
INNER JOIN directors_movies ON directors.id = directors_movies.directors_id
INNER JOIN movies ON movies.id = directors_movies.movies_id WHERE movies.id='.$id);
$move=$querymov ->fetchAll();


?>


<div class="container">
    <div id="moviedesc">

        <h1> <?php echo $directors['firstname']." ".$directors['lastname']; ?></h1>

        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src=" <?php echo $directors['image'];?> ">
            </div>

            <div class="col-md-8">

                <h5> Date de naissance: <?php echo $directors['dob']?></h5>


                <h5> Biographie</h5>
                <p> <?php echo $directors['biography']; ?></p>

                <h5> Films tournés:</h5>
                <table><?php
                    foreach ($move as $movact) {
                        echo
                            " <tr><td><strong>" . $movact['title']."</strong> </td>

                            <td class='text-right col-md-8'>".  $movact['date_release'] ."</td>
                            </tr>";

                    };
                    ?></table>

                <h5> Note:  <?php
                    echo $directors['note'];

                    ?> </h5>
            </div>
            <br>








        </div>
    </div>