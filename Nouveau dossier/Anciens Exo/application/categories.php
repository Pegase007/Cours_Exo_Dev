<?php
$connexion = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8","root","troiswa");

$films = $connexion -> query(
	"SELECT title,image,description,budget,annee,duree, note_presse
	FROM movies
	WHERE visible = 1
	AND cover = 1
	AND date_release <=NOW()
	LIMIT 5"
	);
$films2 = $connexion -> query(
	"SELECT title,image,description,budget,annee,duree, note_presse
	FROM movies
	WHERE date_release >=NOW()
	LIMIT 5"
	);
$actors = $connexion -> query(
	"SELECT firstname,lastname,dob,city,actors.image,biography,recompenses
	FROM actors 
	INNER JOIN actors_movies
	ON actors.id = actors_movies.actors_id
	INNER JOIN movies
	ON movies.id = actors_movies.movies_id
	ORDER BY movies.id DESC
	LIMIT 3
	"
	);
$categories = $connexion -> query(
	"SELECT categories.title,categories.id,categories.description,categories.image, COUNT(movies.id) AS nbmoovies
	FROM categories
	LEFT JOIN movies
	ON movies.categories_id = categories.id
	GROUP BY categories.title
	"
	);
$directors= $connexion -> query(
	"SELECT d.firstname, d.lastname, d.dob, d.biography, d.image, COUNT(dm.movies_id)
	FROM directors AS d
	INNER JOIN directors_movies AS dm
	ON d.id = dm.directors_id
	WHERE d.lastname NOT LIKE 'Boyer%'
	GROUP BY dm.directors_id
	ORDER BY COUNT(dm.movies_id) DESC
	LIMIT 4
	"
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
		<div id="page_categories">
			<article id='categories'>
				<h1>Categories</h1>

				<div class='row'>
					<?php foreach($categories as $categorie){ ?>
					<div class="col-md-6 categ">
						
						<h2><a href="categorie.php?cid=<?php echo $categorie['id']?>"><?php echo $categorie["title"]." " ?></a>
						</h2>
							<p><b>Nombre de films : </b>
							<?php
							if ($categorie["nbmoovies"] == 0){
								echo 'Aucun film';
							}elseif($categorie["nbmoovies"] == 1){
								echo '1 film';
							}else{
							 echo $categorie["nbmoovies"]." films";
							}
							 ?>
							</p>
							<p><b>Description : </b><?php echo $categorie["description"]?></p>
						
							<a href="categorie.php?cid=<?php echo $categorie['id']?>"><img src="<?php echo $categorie["image"]?>" class="img-responsive"/></a>
					</div>	
				<?php } ?>
				</div>
			</article>
		</div>	




	</body>
</html>