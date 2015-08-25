

<?php

include "connexion.php";
include "header.php";
include "footer.php";

//id : récupere l'id en URL
$id = $_GET['id'];

//stocker la requete et l'executer avec la fonction query()
$query = $bdd->query('SELECT * FROM movies WHERE id= '.$id);

// fetchOne() me permet de récupérer 1 seul résultat
$film = $query->fetch();

$queryb = $bdd ->query('SELECT directors.firstname, directors.lastname
FROM  `movies`
INNER JOIN directors_movies ON movies.id = directors_movies.movies_id
INNER JOIN directors ON directors.id = directors_movies.directors_id
WHERE movies.id ='.$id);

$directors=$queryb->fetchAll();


$queryactors=$bdd ->query('SELECT actors.firstname,actors.lastname
FROM  `movies`
INNER JOIN actors_movies ON movies.id = actors_movies.movies_id
INNER JOIN actors ON actors.id = actors_movies.actors_id WHERE movies.id='.$id);
$actors=$queryactors ->fetchAll();


$genre=$bdd ->query('SELECT categories.title
FROM  `movies`
INNER JOIN categories ON categories.id = movies.categories_id
WHERE movies.id='.$id );
$categories=$genre -> fetchAll();

$mark=$bdd ->query('SELECT note_presse
FROM  `movies` WHERE movies.id='.$id);
$note=$mark -> fetch();

$com=$bdd ->query('SELECT comments.content, user.username, comments.date_created, comments.content
FROM  `movies`
INNER JOIN comments ON movies.id = comments.movies_id
INNER JOIN user ON user.id = comments.user_id WHERE movies.id='.$id);

?>


    <div class="container">
        <div id="moviedesc">

            <h1> <?php echo $film['title']; ?></h1>

            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive" src=" <?php echo $film['image'];?> ">
                </div>
                <div class="col-md-8">

                    <h5> Date de sortie: <?php echo $film['date_release']; ?> </h5>
                    <h5> Directeur: <?php
                        foreach($directors as $realisateur )
                        echo $realisateur['firstname']." ".$realisateur['lastname']; ?> </h5>
                    <h5> Acteurs:  <?php

                        foreach ($actors as $person) {
                            echo $person['firstname']. " " .$person['lastname'].", ";
                        };?> </h5>
                    <h5> Categories:  <?php

                        foreach ($categories as $cat) {
                            echo $cat['title'];
                        };?> </h5>

                    <h5> Note presse:  <?php
                            echo $note['note_presse'];

                       ?> </h5>

                        <p> <?php echo $film['synopsis']; ?></p>


                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>


            </div>

        </div>

    </div>
