<?php
$connexion = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8","root","troiswa");

$films = $connexion -> query(
	"SELECT title,id,image,description,budget,annee,duree, note_presse
	FROM movies
	WHERE visible = 1
	AND cover = 1
	AND date_release <=NOW()
	LIMIT 5"
	);
$films2 = $connexion -> query(
	"SELECT title,id,image,description,budget,annee,duree, note_presse
	FROM movies
	WHERE date_release >=NOW()
	LIMIT 5"
	);
$actors = $connexion -> query(
	"SELECT actors.id,firstname,lastname,dob,city,actors.image,biography,recompenses
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
	"SELECT categories.title, COUNT(movies.id) AS nbmoovies
	FROM categories
	INNER JOIN movies
	ON movies.categories_id = categories.id
	GROUP BY categories.title
	"
	);
$directors= $connexion -> query(
	"SELECT d.id,d.firstname, d.lastname, d.dob, d.biography, d.image, COUNT(dm.movies_id)
	FROM directors AS d
	INNER JOIN directors_movies AS dm
	ON d.id = dm.directors_id
	WHERE d.lastname NOT LIKE 'Boyer%'
	GROUP BY dm.directors_id
	ORDER BY COUNT(dm.movies_id) DESC
	LIMIT 4
	"
);
$random_movies = $connexion -> query(
	"SELECT *
	FROM movies
	ORDER BY RAND()
	LIMIT 1"
	);
$stats1 = $connexion -> query(
	"SELECT COUNT(id) AS cats
	FROM categories"
	);
$stats_cats = $stats1-> fetch();

$stats2 = $connexion -> query(
	"SELECT COUNT(id) AS movies
	FROM movies"
	);
$stats_movies = $stats2 -> fetch();

$stats3 = $connexion -> query(
	"SELECT COUNT(id) AS actors
	FROM actors"
	);
$stats_actors = $stats3 -> fetch();

$stats4 = $connexion -> query(
	"SELECT COUNT(id) AS realis
	FROM directors"
	);
$stats_directors = $stats4 -> fetch();

//REQUETES POUR AVOIR LA PROCHAINE SEANCE DU FILM ALEATOIRE
// SELECT *
// FROM sessions
// INNER JOIN cinema
// ON sessions.cinema_id = cinema.id
// INNER JOIN cinema_movies
// ON cinema_movies.cinemas_id = cinema.id
// INNER JOIN movies
// ON cinema_movies.movies_id = movies.id
// WHERE movies.id = $random_movies
// ORDER BY sessions.date_session DESC

$next_sessions = $connexion -> query(
	"SELECT movies.image, movies.title as letitre, sessions.date_session, cinema.ville
	FROM movies
	INNER JOIN cinema_movies
	ON movies.id = cinema_movies.movies_id
	INNER JOIN cinema
	ON cinema.id = cinema_movies.cinemas_id
	INNER JOIN sessions
	ON sessions.movies_id = movies.id
	WHERE cinema.ville LIKE '%6900%'
	ORDER BY sessions.date_session DESC
	LIMIT 1"
	);
$tags = $connexion -> query(
	"SELECT word, COUNT(tags_movies.movies_id) AS nbtag
	FROM tags
	INNER JOIN tags_movies
	ON tags.id = tags_movies.tags_id
	INNER JOIN movies
	ON movies.id = tags_movies.movies_id
	GROUP BY tags.id
	"
	);
$sliders = $connexion -> query(
	"SELECT image
	FROM movies"
	);
$lastusers = $connexion -> query(
	"SELECT image ,username ,DATE_FORMAT(user.last_login, '%d/%m/%Y') as lastlogin
	FROM user
	ORDER BY last_login
	LIMIT 5"
	);
$comment_actifs = $connexion -> query(
	"SELECT *
	FROM comments
	INNER JOIN user
	ON user.id = comments.user_id
	INNER JOIN movies
	ON movies.id = comments.movies_id
	WHERE comments.state = 2"
	);
$comment_encours = $connexion -> query(
	"SELECT *
	FROM comments
	INNER JOIN user
	ON user.id = comments.user_id
	INNER JOIN movies
	ON movies.id = comments.movies_id
	WHERE comments.state = 1"
	);
$comment_inactifs = $connexion -> query(
	"SELECT *
	FROM comments
	INNER JOIN user
	ON user.id = comments.user_id
	INNER JOIN movies
	ON movies.id = comments.movies_id
	WHERE comments.state = 0"
	);
$favoris = $connexion -> query(
	"SELECT COUNT(user_favoris.user_id)as coeur,movies.id,movies.image, movies.budget, movies.annee, movies.title, movies.note_presse, movies.duree, movies.description
	FROM movies
	INNER JOIN user_favoris
	ON movies.id = user_favoris.movies_id
	GROUP BY user_favoris.movies_id
	LIMIT 4"
	);
$allusers = $connexion -> query(
	"SELECT image,username
	FROM user"
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
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="carousel/assets/owl-carousel/owl.carousel.css">
 
	<!-- Default Theme -->
	<link rel="stylesheet" href="carousel/assets/owl-carousel/owl.theme.css">
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
				<li><a href="#">Accueil</a></li>
				<li><a href="#film_affiche">Films</a></li>
				<li><a href="categories.php">Categories</a></li>
				<li><a href="#best_actors">Acteurs</a></li>
				<li><a href="#real">Réalisateurs</a></li>
			</ul>
		</nav>
		<section>
			<article id='film_affiche'>
				<h1>Films à l'affiche</h1>
				<?php foreach($films as $film){ ?>
					<div class="row">
						<div class="col-md-5">				
							<a href="movie.php?mid=<?php echo $film['id']?>"><img src="<?php echo $film["image"]?>" class="img-responsive"/></a>
							<h3><?php echo $film["title"]?></h3>
							<p><b>Budget : </b><?php echo $film["budget"]?> euros</p>
							<p><b>Année : </b><?php echo $film["annee"] ?></p>
							<p><b>Note : </b><?php echo $film["note_presse"] ?> /5</p>
							<p><b>Durée : </b><?php echo $film["duree"]?>heures</p>
							</div>
							
							<div class='col-md-7'>
							<p class='description'><?php echo $film["description"]?></p>
						</div>
					</div>
					<hr>				
					

				<?php }
				?>

			</article>

			<article id='film_attente'>
				<h1>Films les plus attendus</h1>
				
					<?php foreach($films2 as $film) { ?>
						<div class="row">		
							<div class="col-md-5">		
								<a href="movie.php?mid=<?php echo $film['id']?>"><img src="<?php echo $film["image"]?>" class="img-responsive"/></a>
								<h3><?php echo $film["title"]?></h3>
								<p><b>Budget : </b><?php echo $film["budget"]?> euros</p>
								<p><b>Année : </b><?php echo $film["annee"]?> </p>
								<p><b>Note : </b><?php echo $film["note_presse"]?> /5</p>
								<p><b>Durée : </b><?php echo $film["duree"]?> heures</p>
							</div>
							
							<div class='col-md-7'>
								<p><?php echo $film["description"]?></p>
							</div>
									
					</div>
						<hr>			

					<?php } ?>
				
				
			</article>
		</section>


		<article id='best_actors'>
			<h1>Les 3 meilleurs acteurs</h1>
			
			<div class="row">
			<?php foreach($actors as $actor){ ?>
			
			<div class="col-md-4">
			<a href="actors.php?aid=<?php echo $actor['id']?>"><img src="<?php  echo $actor["image"] ?>" class="img-responsive"/></a>
			<h3><?php echo $actor["firstname"]." " ?><?php echo $actor["lastname"] ?></h3>
			<p><b>Date de naissance : </b><?php echo $actor["dob"]?></p>
			<p><b>Ville de naissance : </b><?php echo $actor["city"]?></p>
			<p><b>Récompenses : </b><?php echo $actor["recompenses"]?></p>
			<p><?php echo $actor["biography"]?></p>
			
			</div>
			<?php } ?>
			</div>
			
			
		</article>


		<article id='categories'>
			<h1>Categories</h1>

			<div class='row'>
				<?php foreach($categories as $categorie){ ?>
				<div class="col-md-3">
					<h4><b><?php echo $categorie["title"]." " ?> : </b><?php echo $categorie["nbmoovies"]?></h4>

				</div>	
			<?php } ?>
			</div>
		</article>

		<article id='real'>
			<h1>Les réalisateurs les plus connus</h1>
			<div class='row'>
				<?php foreach($directors as $director){?>
				<div class='col-md-6'>
					<div class='row'>
						<div class='col-md-5'>
							<a href="directors.php?did=<?php echo $director['id']?>"><img src='<?php echo $director["image"]?>' class='img-responsive'/></a>
						</div>
						<div class='col-md-7'>
							<h3><?php echo $director ["firstname"]." "?><?php echo $director['lastname']?></h3>
							<p><b>Date de naissance : </b><?php echo $director ['dob']?></p>
							<br>
						</div>
						<p><?php echo $director ['biography']?></p>
					</div>
				</div>
				<?php } ?>
			</div>

		</article>

		<div class='row' id='random_stats_cine'>
			<div class='col-md-6'>
				<article id='random_movie'>
					<h1>Film aléatoire :</h1>
					<div class='row'>
						<?php foreach($random_movies as $random_movie){?>
						<div class='col-md-6'>
							<img src='<?php echo $random_movie["image"]?>' class='img-responsive'/> 
							<h3><?php echo $random_movie["title"]?></h3>
							<p><b>Budget : </b><?php echo $random_movie["budget"]?> euros</p>
							<p><b>Année : </b><?php echo $random_movie["annee"] ?></p>
							<p><b>Note : </b><?php echo $random_movie["note_presse"] ?> /5</p>
							<p><b>Durée : </b><?php echo $random_movie["duree"]?>heures</p>
						</div>
						<div class='col-md-6'>
							<p class='description'><?php echo $random_movie["description"]?></p>

						
						</div>
						<?php } ?>
					</div>

				</article>
			</div>
			<div class='col-md-6'>
				<article id='statistiques'>
					<h1>Statistiques :</h1>
					<p><b>Nombre de catégories :</b><?php echo $stats_cats["cats"] ?></p>
					<p><b>Nombre de films :</b><?php echo $stats_movies["movies"] ?></p>
					<p><b>Nombre d'acteurs :</b><?php echo $stats_actors["actors"] ?></p>
					<p><b>Nombre de réalisateurs :</b><?php echo $stats_directors["realis"] ?></p>
				</article>
				<article id='next_session'>
					<h1>La prochaine séance a Lyon :</h1>
					
						<?php foreach ($next_sessions as $next_session){?>
					<div class='col-md-6'>
						
						<img src='<?php echo $next_session["image"]?>' class='img-responsive'/> 

					</div>
					<div class='col-md-6'>
						<h3><?php echo $next_session["letitre"]?></h3>
						<p><b>Prochaine séance le :<br></b><?php echo $next_session ["date_session"]?></p>
						<?php }?>
						<p><b>Adresse :<br></b><?php echo $next_session ['ville']?></p>
					</div>
				</article>

			</div>
		</div>
		<div class='row' id='not_last_parts'>
			<div class='col-md-3'>
				<article id='nuage_tags'>
							<h1>Mots clés :</h1>

							<?php foreach ($tags as $tag){?>

							<?php if ($tag ["nbtag"] == 1) {?>
								<p style='font-size: 100%;'>
							<?php }elseif ($tag ["nbtag"] == 2) {?>
									<p style='font-size: 150%;'>
							<?php }elseif ($tag ["nbtag"] >2) {?>
									<p style='font-size: 200%;'>
							<?php }elseif ($tag["nbtag"] >5) {?>
									<p style='font-size: 250%;'>
							<?php }?>

							<?php echo $tag ['word']?>
							<?php } ?>
						</p>
				</article>
			</div>
			<div class='col-md-9'>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">

			  	<?php $i = 1; foreach ($sliders as $slider){?>
			  	<?php if($i == 1) {?>
			    	<div class="item active">
			    <?php }else{ ?>
			    	<div class='item'>
			    <?php }?>
			      <img src="<?php echo $slider['image']?>" class="img-responsive" width='200' height='250' alt="movie_image"/>
			      </div>
			       <?php $i++; } ?>
			      <div class="carousel-caption">
			        
			    
			     </div>
			    
			   	 	    	
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>

			</div>
			</div>
		</div>
		<div class='row' id='last_parts'>
			<div class='col-md-3'>
				<article id='last_users'>
				
					<h1>Les 5 derniers utilisateurs connectés :</h1>
					<?php foreach ($lastusers as $lastuser){?>
					<div class='row'>
						<div class='col-md-4'>
						 	<img src='<?php echo $lastuser["image"]?>' width='70px' height ='120px' class='img-responsive'/><br>
						</div>

						<div class='col-md-8' style='font-size : 80%;'>
							<p><b>User : </b><?php echo $lastuser ['username']?></p>	
							<p><b>Derniére connexion : </b><?php echo $lastuser['lastlogin']; ?></p>				
						</div>
					</div>
					<?php } ?>
								
				</article>
			</div>
		
		<div class='col-md-9'>
			<article id='tab_comment'>
				<div role="tabpanel">

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#actif" aria-controls="home" role="tab" data-toggle="tab">Commentaires actifs</a></li>
				    <li role="presentation"><a href="#encours" aria-controls="profile" role="tab" data-toggle="tab">Commentaires en cours de validation</a></li>
				    <li role="presentation"><a href="#inactif" aria-controls="messages" role="tab" data-toggle="tab">Commentaires inactifs</a></li>
				    
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="actif">
				    	<?php foreach ($comment_actifs as $comment_actif){?>
				    	<div class='comments_border'>
					    	<p><i><?php echo $comment_actif ['content']?></i></p>
					    	<p><b>Ecrit par : </b><?php echo $comment_actif ['username']?>
					    	<b>Le : </b><?php echo $comment_actif ['date_created']?>
					    	<b>Sur : </b><?php echo $comment_actif ['title']?></p>
					    </div>
				    	<?php } ?>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="encours">
				    	<?php foreach ($comment_encours as $comment_encour){?>
				    	<div class='comments_border'>
					    	<p><i><?php echo $comment_encour ['content']?></i></p>
					    	<p><b>Ecrit par : </b><?php echo $comment_encour ['username']?>
					    	<b>Le : </b><?php echo $comment_encour ['date_created']?>
					    	<b>Sur : </b><?php echo $comment_encour ['title']?></p>		    	
					    </div>
					    <?php } ?>
				    </div>
				   
				    <div role="tabpanel" class="tab-pane" id="inactif">
				    	<?php foreach ($comment_inactifs as $comment_inactif){?>
				    	<div class='comments_border'>   	
					    	<p><i><?php echo $comment_inactif ['content']?></i></p>
					    	<p><b>Ecrit par : </b><?php echo $comment_inactif ['username']?>
					    	<b>Le : </b><?php echo $comment_inactif ['date_created']?>
					    	<b>Sur : </b><?php echo $comment_inactif ['title']?></p>	    	
					    </div>	
					    <?php } ?>			     
				    </div>
				  </div>

				</div> 

			</article>
		</div>
		</div>
		<article id='films_favoris'>
			<h1>Les films favoris des utilisateurs :</h1>
			
				<?php foreach($favoris as $favori){?>
				<div class='row'>
						<div class='col-md-6'>
							<img src='<?php echo $favori["image"]?>' class='img-responsive'/> 
							<h3><?php echo $favori["title"]?></h3>
							<p><b>Budget : </b><?php echo $favori["budget"]?> euros</p>
							<p><b>Année : </b><?php echo $favori["annee"] ?></p>
							<p><b>Note : </b><?php echo $favori["note_presse"] ?> /5</p>
							<p><b>Durée : </b><?php echo $favori["duree"]?>heures</p>
						</div>
						<div class='col-md-6'>
							<p class='description'><?php echo $favori["description"]?></p>
							<div class="btn-group" role="group" aria-label="...">
  								<a href='movie.php?mid=<?php echo $favori["id"];?>'<button type="button" class="btn btn-default">Voir plus</button></a>
  							</div>
							<label id='coeur'><span class="glyphicon glyphicon-heart" aria-hidden="true"><?php echo $favori ['coeur']?></span></label>
						</div>
				</div>
				<?php } ?>
			
		</article>
		</div>
		</div>
		<article id='alluser'>
			<h1>Nos utilisateurs préférés :</h1>
			<div id="owl-example" class="owl-carousel">
				<?php foreach ($allusers as $alluser ) {?>
					
				
	  			<div><img src='<?php echo $alluser["image"]?>' class='img-responsive'/> 
	  				<figcaption>
	  					<?php echo $alluser["username"]?>
	  				</figcaption>
	  			 </div>
	  			<?php } ?>

	  			
			</div>
		</article>
		<footer>

		</footer>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- Include js plugin -->
<script src="carousel/assets/owl-carousel/owl.carousel.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/carousel.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>