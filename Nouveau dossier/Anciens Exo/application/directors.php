<?php
$directors_id = $_GET['did'];
$connexion = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8","root","troiswa");

$directors = $connexion -> query(
	"SELECT *
	FROM directors
	WHERE directors.id= ".$directors_id
	
	);
$resultat = $directors -> fetch();//recupere 1 rsultat 

$movies = $connexion -> query(
	"SELECT *,movies.id
	FROM movies
	INNER JOIN directors_movies
	ON movies.id = directors_movies.movies_id
	WHERE directors_movies.directors_id=".$directors_id
	);
$directors_ville = $connexion -> query(
	"SELECT *
	FROM directors
	WHERE directors.ville ='".$resultat["ville"]."'
	AND directors.id <> ".$directors_id
	);
?>

<!doctype HTML>
<html>
	<head>
		<meta charset='utf-8'>	
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://code.jquery.com/jquery-2.1.3.min.js">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/application.css">
	</head>
<body>
	<header>
		<h1>Applications Cinema</h1>
	</header>
	<nav id='first_nav'>
			<ul>
				<li><a href="application.php">Accueil</a></li>
				<li><a href="#film_affiche">Films</a></li>
				<li><a href="categories.php">Categories</a></li>
				<li><a href="#best_actors">Acteurs</a></li>
				<li><a href="#real">Réalisateurs</a></li>
			</ul>
		</nav>
	<article id='directors'>
		<h1>Réalisateurs :</h1>

		<div class="row">

			<div class='col-md-8 col-md-offset-2'>

				<div class='col-md-6'>
					<img src='<?php echo $resultat["image"]?>' class='img-responsive'/>
				</div>
				<div class='col-md-6'>
					<h3><?php echo $resultat ["firstname"]." "?>
					<?php echo $resultat['lastname']?></h3>

					<p><b>Date de naissance : </b><?php echo $resultat ['dob']?></p>
					<br>
					</div>
					<p><?php echo $resultat ['biography']?></p>
			</div>
		</div>
	</article>
	<article id='films_tournes'>

		<h1>Films réalisés :</h1>

		<div class='row'>
			<?php $movies = $movies -> fetchAll();
					$nbmovies = count($movies);?>

					<?php foreach($movies as $movie){?>

					<?php if ($nbmovies == 1){ ?>
						<div class='col-md-4 col-md-offset-4'>		
					<?php }else{ ?>
						<div class='col-md-4 col-md-offset-1'>
					<?php } ?>
					<a href="movie.php?mid=<?php echo $movie['id']?>"><img src="<?php echo $movie["image"]?>" class="img-responsive"/></a>
						
						<h3><?php echo $movie["title"]?></h3>
						<p style='text-align: center;'><b>Année : </b><?php echo $movie["annee"] ?></p>

				</div>
			<?php } ?>

		</div>
	</article>
	<article id='directors_ville'>
		<h1>Réalisateurs de la méme ville :</h1>

		<div class="row">

					<?php $directors_ville = $directors_ville -> fetchAll();
					$nbdirectors = count($directors_ville);?>
					

					<?php foreach($directors_ville as $director_ville){?>

					<?php if ($nbdirectors == 1){ ?>
						<div class='col-md-4 col-md-offset-4'>		
					<?php }else{ ?>
						<div class='col-md-4 col-md-offset-1'>
					<?php } ?>


					<a href="directors.php?did=<?php echo $director_ville['id']?>"><img src="<?php echo $director_ville["image"] ?>" class="img-responsive"/></a>
					
					<h3><?php echo $director_ville["firstname"]." " ?><?php echo $director_ville["lastname"] ?></h3>
					<p><b>Année de naissance : </b><?php echo $director_ville["dob"]?></p>
					<p><b>Ville :</b><?php echo $director_ville['ville']?></p>
					</div>
					<?php } ?>
				</div>

	</article>
</body>
</html>