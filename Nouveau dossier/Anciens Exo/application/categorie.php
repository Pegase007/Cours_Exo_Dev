<?php
$categories_id = $_GET['cid'];
$connexion = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8","root","troiswa");
$category = $connexion -> query(
	"SELECT *
	FROM categories
	WHERE categories.id = ".$categories_id
	);
$resultat = $category -> fetch();
//fetch veut dire qu'un seul résultat
$movies = $connexion -> query(
	"SELECT *
	FROM movies
	WHERE categories_id=".$categories_id
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
	<div id='categorie'>
		<h2>Les films de la catégorie <?php
		echo $resultat['title'];?></h2>

		<p><?php
		echo $resultat['description'];
		?></p>

		<?php 
		foreach($movies as $movie){?>
			<h3><?php echo $movie["title"];?></h3>
			<div class='row'>
				<div class='col-md-4'>
					<a href="movie.php?mid=<?php echo $movie['id']?>"><img src="<?php echo $movie["image"]?>" class="img-responsive"/></a>
				</div>
				<div class='col-md-4'>
					<p><?php echo $movie["synopsis"];?></p>
				</div>
				<div class='col-md-4'>
					<p><b>Année : </b><?php echo $movie["annee"];?></p>
					<p><b>Budget : </b><?php echo $movie["budget"];?></p>
					<p><b>Durée : </b><?php echo $movie["duree"];?> heures</p>
					<p><b>Note : </b><?php echo $movie["note_presse"];?> /5</p>
					<p><b>Prix : </b><?php echo $movie["price"];?> euros</p>
				</div>	
			</div>
		<?php } ?>
	</div>
	</body>
</html>