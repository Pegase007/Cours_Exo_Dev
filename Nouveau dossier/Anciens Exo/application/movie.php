<?php 
$movies_id = $_GET['mid'];
$connexion = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8","root","troiswa");
$movies = $connexion -> query(
	"SELECT *
	FROM movies
	WHERE movies.id= ".$movies_id
	);

$resultat = $movies -> fetch();//recupere 1 rsultat 
$comments = $connexion -> query(
	"SELECT comments.content, comments.note,user.username AS name,
	DATE_FORMAT(comments.date_created, '%d/%m/%Y') as date_comment,
	DATE_FORMAT(comments.date_created, '%h : %i') as heure_comment
	FROM comments
	INNER JOIN movies
	ON comments.movies_id = movies.id
	INNER JOIN user
	ON user.id = comments.user_id
	WHERE movies.id = " .$movies_id
	);
$actors = $connexion -> query(
	"SELECT actors.id, actors.firstname,actors.lastname,actors.dob,actors.city,actors.image,actors.biography,TIMESTAMPDIFF(YEAR,actors.dob,NOW()) AS age_a
	FROM actors
	INNER JOIN actors_movies 
	ON actors.id = actors_movies.actors_id
	INNER JOIN movies
	ON movies.id = actors_movies.movies_id
	WHERE movies.id =".$movies_id
	);
$directors = $connexion -> query(
	"SELECT directors.id, directors.firstname, directors.lastname, directors.dob, directors.biography, directors.image,TIMESTAMPDIFF(YEAR,directors.dob,NOW()) AS age_d
	FROM directors
	INNER JOIN directors_movies
	ON directors.id = directors_movies.directors_id
	INNER JOIN movies
	ON movies.id = directors_movies.movies_id
	WHERE movies.id =".$movies_id
	);
$cinemas = $connexion -> query(
	"SELECT cinema.title,cinema.ville,
	DATE_FORMAT(sessions.date_session, '%d/%m/%Y') as date_cine,
	DATE_FORMAT(sessions.date_session, '%h : %i')as heure_cine
	FROM cinema
	INNER JOIN cinema_movies
	ON cinema.id = cinema_movies.cinemas_id
	INNER JOIN sessions
	ON sessions.id = cinema_movies.movies_id
	INNER JOIN movies 
	ON movies.id = sessions.movies_id
	WHERE movies.id =".$movies_id
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
	<div id='movie'>
		<h2>Film :</h2>
		<h3><?php echo $resultat["title"]?></h3>
		<div class="row">
			<div class='col-md-4'>
				<img src="<?php echo $resultat["image"]?>" class="img-responsive"/>
			</div>
			<div class='col-md-4'>
				<p><b>Synopsis :</b><?php echo $resultat["synopsis"];?></p>
				<p><b>Description :</b><?php echo $resultat["description"]?></p>
			</div>
			<div class="col-md-4">			
				<p><b>Budget : </b><?php echo $resultat["budget"]?> euros</p>
				<p><b>Année : </b><?php echo $resultat["annee"] ?></p>
				<p><b>Note : </b><?php echo $resultat["note_presse"] ?> /5</p>
				<p><b>Durée : </b><?php echo $resultat["duree"]?>heures</p>
				<p><b>Langue : </b><?php echo $resultat["languages"]?></p>
				<p><b>Bande originale : </b><?php echo $resultat["bo"]?></p>
				<p><b>Distributeur : </b><?php echo $resultat["distributeur"] ?></p>
				<p><b>Type : </b><?php echo $resultat["type_film"] ?></p>

				<p><b>Trailer : </b>
					<div class='embed-responsive embed-responsive-16by9'><?php echo $resultat["trailer"] ?>
					</div></p>
				<p><b>Date de sortie : </b><?php echo $resultat["date_release"] ?></p>
				<p><b>Vues : </b><?php echo $resultat["views"] ?></p>

			</div>
		</div>

		<article id="commentaires">
			<h2>Commentaires :</h2>
			<div class='row'>
			<?php foreach($comments as $comment){?>
			
				<div class="col-md-4 commentaire">
					<p><b>De : </b><?php echo $comment ['name']?></p>
					<p><b>Ecris le : </b>
						<?php echo $comment ["date_comment"]?> à 
						<?php echo $comment ["heure_comment"]?></p>
					<p><b>Note : </b><?php echo $comment ["note"]?> /5</p>
					<p><i><?php echo $comment ["content"]?></i></p>
					
				</div>
			<?php } ?>
			</div>
		</article>
		<article id ="actors">
			<h2>Acteurs :</h2>
			<div class='row'>
				<?php $actors = $actors -> fetchAll();
				$nbactors = count($actors);?>

				<?php foreach($actors as $actor){

				if ($nbactors == 1){ ?>
					<div class='col-md-6 col-md-offset-3 actor'>
				<?php }else{ ?>
					<div class='col-md-6 actor'>
				<?php } ?>
				
					
						<div class='col-md-5'>
							<a href="actors.php?aid=<?php echo $actor['id']?>"><img src="<?php echo $actor["image"] ?>" class="img-responsive"/></a>
						</div>
						<div class='col-md-7'>
							<h3><?php echo $actor["firstname"]." " ?><?php echo $actor["lastname"] ?></h3>
							<p><b>Année de naissance : </b><?php echo $actor["dob"]?></p>
							<p><b>Age : </b><?php echo $actor["age_a"]?></p>
							<p style='margin-bottom: 2em;'><b>Ville de naissance : </b><?php echo $actor["city"]?></p>
						</div>
						<p class="biography"><?php echo $actor["biography"]?></p>
					</div>
				<?php } ?>
			</div>
		</article>	
		<article id="realisator">
			<h2>Realisateurs :</h2>
			<div class="row">
				<?php $directors = $directors -> fetchAll();
				$nbdirectors= count($directors);?>

				<?php foreach($directors as $director){
					if ($nbdirectors == 1){
						echo "<div class='col-md-6 col-md-offset-3'>";
					}else{
						echo "<div class='col-md-6'>";
					}?>
						
				<div class='col-md-6'>
					<a href="directors.php?did=<?php echo $director['id']?>"><img src="<?php echo $director["image"] ?>" class="img-responsive"/></a>
				</div>
				<div class='col-md-6'>
					<h3><?php echo $director["firstname"]." " ?>
						<?php echo $director["lastname"] ?></h3>
							<p><b>Année de naissance : </b><?php echo $director["dob"]?></p>
							<p><b>Age :</b><?php echo $director["age_d"]?></p>
											

				</div>
				<p><?php echo $director["biography"]?></p>
				<?php }?>
			</div>
		</article>
		<article id='cinemas'>
			<h2>Cinemas diffusant ce film :</h2>
			<div class ='row'>
			<?php foreach ($cinemas as $cinema) {?>
				
					<div class ='col-md-4 cinema'>
						<h4><b><?php echo $cinema['title']?></b></h4>
						<p><b>Ville : </b><?php echo $cinema['ville']?></p>
						<p><b>Prochaine séance le : </b>
							<?php echo $cinema['date_cine']?> à 
							<?php echo $cinema['heure_cine']?></p>
					</div>
				
			<?php } ?>
			</div>
		</article>
	</div><!--FIN DE #movie-->
	</body>
</html>