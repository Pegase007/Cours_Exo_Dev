<?php
$actors_id = $_GET['aid'];
$connexion = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8","root","troiswa");

$actors = $connexion -> query(
	"SELECT *
	FROM actors
	WHERE actors.id= ".$actors_id
	
	);
$resultat = $actors -> fetch();//recupere 1 rsultat 
$movies = $connexion -> query(
	"SELECT movies.image,movies.annee,movies.title,movies.id
	FROM movies
	INNER JOIN actors_movies
	ON movies.id = actors_movies.movies_id
	INNER JOIN actors
	ON actors.id = actors_movies.actors_id
	WHERE actors.id = ".$actors_id
	);
$acteurs_ville = $connexion -> query(
	"SELECT actors.image,actors.firstname,actors.dob,actors.id, actors.lastname, TIMESTAMPDIFF(YEAR,dob,NOW()) AS age
	FROM actors
	WHERE actors.city ='".$resultat["city"]."'
	AND actors.id <> ".$actors_id
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

			<h1>Acteur :</h1>


			<article id='actors'>
			
				<div class="row">
				
			
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6">
							<img src="<?php  echo $resultat["image"] ?>" class="img-responsive"/>
						</div>
						<div class="col-md-6">
							<h3><?php echo $resultat["firstname"]." " ?><?php echo $resultat["lastname"] ?></h3>
							<p><b>Date de création : </b><?php echo $resultat["date_created"]?></p>
							<p><b>Année de naissance : </b><?php echo $resultat["dob"]?></p>
							<p><b>Ville de naissance : </b><?php echo $resultat["city"]?></p>
							<p><b>Récompenses : </b><?php echo $resultat["recompenses"]?></p>
						
						</div>	
							<p><?php echo $resultat["biography"]?></p>
				
					</div>
				
				</div>
			
			
			</article>
			<article id='films_joues'>
				<h1>Films joués :</h1>
								
				<div class="row">

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
			<article id='acteurs_ville'>
				<h1>Acteurs de la méme ville :</h1>
				<div class="row">

					<?php $acteurs_ville = $acteurs_ville -> fetchAll();
					$nbactors = count($acteurs_ville);?>
					

					<?php foreach($acteurs_ville as $acteur_ville){?>

					<?php if ($nbactors == 1){ ?>
						<div class='col-md-4 col-md-offset-4'>		
					<?php }else{ ?>
						<div class='col-md-4 col-md-offset-1'>
					<?php } ?>


					<a href="actors.php?aid=<?php echo $acteur_ville['id']?>"><img src="<?php echo $acteur_ville["image"] ?>" class="img-responsive"/></a>
					
					<h3><?php echo $acteur_ville["firstname"]." " ?><?php echo $acteur_ville["lastname"] ?></h3>
					<p><b>Année de naissance : </b><?php echo $acteur_ville["dob"]?></p>
					<p><b>Age : </b><?php echo $acteur_ville["age"]?></p>
					</div>
					<?php } ?>
				</div>


			</article>

		
</body>
</html>