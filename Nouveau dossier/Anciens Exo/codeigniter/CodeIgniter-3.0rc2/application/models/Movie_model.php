<?php 


//Ma classe Model dans lequel j'aurais mes requétes de Movie
class Movie_model extends CI_model{


	//Fonction qui me retourne tous mes films
	public function allmovies(){
		$query = $this->db->query('SELECT * FROM movies');

		return $query->result();
	}

	//Retourne les 5 films a l'affiche
	public function filmsAffiche(){
		$query = $this->db->query(
		'SELECT title,id,image,description,budget,annee,duree, note_presse
		FROM movies
		WHERE visible = 1
		AND cover = 1
		AND date_release <= NOW()
		LIMIT 5');

	return $query->result();
	}
	//Retourne les 5 films les plus attendus
	public function filmsattendu(){
		$query = $this->db->query(
		'SELECT title,id,image,description,budget,annee,duree, note_presse
		FROM movies
		WHERE date_release >=NOW()
		LIMIT 5');

	return $query->result();
	}
	//Retourne 1 film aléatoire
	public function random_movies(){
		$query = $this->db->query(
		'SELECT *
		FROM movies
		ORDER BY RAND()
		LIMIT 1');

		return $query->result();
	}

	//Fonction qui me retourne le nombre de films total
	public function stats2(){

		$query = $this->db->query(
		'SELECT COUNT(id) AS movies
		FROM movies
		');

		return $query->result();
	}

	//Fonctions qui me retourne les 5 prochaines séances
	public function nextsessions(){

	$query = $this->db->query(
	'SELECT movies.image, movies.title as letitre, sessions.date_session, cinema.ville
	FROM movies
	INNER JOIN cinema_movies
	ON movies.id = cinema_movies.movies_id
	INNER JOIN cinema
	ON cinema.id = cinema_movies.cinemas_id
	INNER JOIN sessions
	ON sessions.movies_id = movies.id
	ORDER BY sessions.date_session DESC
	LIMIT 5
	');

	return $query->result();
	}

	//Fonctions qui me retourne les 5 derniers commentaires avec state= 1
	public function commentactifs(){

	$query = $this->db->query(	
	'SELECT user.username,user.image,movies.title,comments.content,comments.date_created
	FROM comments
	INNER JOIN user
	ON comments.user_id = user.id
	INNER JOIN movies
	ON movies.id = comments.movies_id
	WHERE state = 1
	ORDER BY comments.date_created DESC
	LIMIT 5
	');

	return $query->result();
	}

	//Fonctions qui me retourne les 5 derniers commentaires avec state= 0
	public function commentinactifs(){

	$query = $this->db->query(	
	'SELECT user.username,user.image,movies.title,comments.content,comments.date_created
	FROM comments
	INNER JOIN user
	ON comments.user_id = user.id
	INNER JOIN movies
	ON movies.id = comments.movies_id
	WHERE state = 0
	ORDER BY comments.date_created DESC
	LIMIT 5
	');

	return $query->result();
	}

	//Fonctions qui me retourne les 5 derniers commentaires avec state= 2
	public function commentencours(){

	$query = $this->db->query(	
	'SELECT user.username,user.image,movies.title,comments.content,comments.date_created
	FROM comments
	INNER JOIN user
	ON comments.user_id = user.id
	INNER JOIN movies
	ON movies.id = comments.movies_id
	WHERE state = 2
	ORDER BY comments.date_created DESC
	LIMIT 5
	');

	return $query->result();
	}

	//Fonctions qui me compte tous les films favoris
	public function filmfavori(){

		$query = $this->db->query(
			'SELECT COUNT(filmfavoris) as favori
			FROM (
			SELECT COUNT(movies_id) as filmfavoris
			FROM user_favoris
			INNER JOIN movies
			ON movies.id = user_favoris.movies_id
			GROUP BY user_favoris.movies_id) as groupe
			');
			
		return $query->row();
	}
//Fonction qui me retourne le nombre de films total
	public function statsfilm(){

		$query = $this->db->query(
		'SELECT COUNT(id) AS movie
		FROM movies
		');

		return $query->row();
	}
//Fonctions qui me compte tous les films les plus diffusés
	public function filmdiffuses(){

		$query = $this->db->query(
			'SELECT COUNT(filmdiffuse) as diffuse
			FROM (
			SELECT COUNT(movies_id) as filmdiffuse
			FROM sessions
			INNER JOIN movies
			ON movies.id = sessions.movies_id
			GROUP BY sessions.movies_id) as groupe
			');
			
		return $query->row();
	}
//Fonction qui calcule le budget total des films
	public function totalbudget(){

		$query = $this->db->query(
			'SELECT SUM(budget) as totalbudget
			FROM movies
			');

		return $query->row();
	}



//Fonction qui calcule la moyenne d'age des acteurs
	public function moyenneage(){

		$query = $this->db->query(
			'SELECT FLOOR(AVG(TIMESTAMPDIFF(YEAR, dob, NOW()))) as moyenne
			FROM actors
			');

		return $query->row();
	}

//Fonction qui m'indique le nombre d'acteurs de la ville de Lyon
	public function actorlyon(){

		$query = $this->db->query(
	"SELECT COUNT(id) as actlyon, city
	FROM actors
	WHERE city LIKE '%Lyon%'
	GROUP BY city"
	);
		return $query->row();
	}

//Fonction qui m'indique le nombre d'acteurs de la ville de Paris
	public function actorparis(){

		$query = $this->db->query(
	"SELECT COUNT(id) as actparis, city
	FROM actors
	WHERE city LIKE '%Paris%'
	GROUP BY city"
	);
		return $query->row();
	}

//Fonction qui m'indique le nombre d'acteurs de la ville de Birmingham
	public function actorbirmin(){

		$query = $this->db->query(
	"SELECT COUNT(id) as actbirmin, city
	FROM actors
	WHERE city LIKE '%Birmingham%'
	GROUP BY city"
	);
		return $query->row();
	}

//Fonction qui me compte le nombre de categories et le nombre de films par categories
	public function film_categories(){

		$query = $this->db->query(

	"SELECT categories.title, COUNT(movies.categories_id)as nbcategorie
	FROM categories
	INNER JOIN movies
	ON categories.id = movies.categories_id
	GROUP BY categories_id"
	);
		return $query->result();
	}
//Fonction qui réparti les films par leurs mois de sortie
	public function film_sorties(){

		$query = $this->db->query(
	'SELECT COUNT(ID) as nb, MONTHNAME(date_release)as mois
	FROM movies
	WHERE DATE_FORMAT(date_release,"%m") IS NOT NULL
	AND DATE_FORMAT(date_release,"%m")<> "00/0000"
	GROUP BY DATE_FORMAT(date_release,"%m")
	ORDER BY date_release ASC '
	);
		return $query->result();
	}
//Fonction qui transmet l'id du film vers la page voir
	public function voirfilms($id){
		$query = $this->db->query(
			'SELECT *
			FROM movies
			WHERE id ='.$id
			); 
		return $query->row();
	}

//Fonction qui affiche les commentaire du film sur la page voir
	public function commentfilms($id){
		$query = $this->db->query(
			'SELECT *,user.username,user.image as img, comments.id as cid
			FROM comments
			INNER JOIN movies
			ON movies.id = comments.movies_id	
			INNER JOIN user
			ON user.id = comments.user_id
			WHERE movies.id ='.$id
			);
		return $query->result();
	}
//Fonction qui affiche les acteurs ayant joués dans le film
	public function actorfilms($id){
		$query = $this->db->query(
			'SELECT actors.firstname, actors.lastname, actors.dob, actors.city, actors.image
			FROM actors
			INNER JOIN actors_movies
			ON actors.id = actors_movies.actors_id
			INNER JOIN movies
			ON movies.id = actors_movies.movies_id
			WHERE movies.id ='.$id
			);
		return $query->result();
	}

//Je prépare un tableau de données avec les clefs qui sont mes champs de tables
	public function inserer($data){
		$data = array(
			'title'=> $this->input->post('titre'), //$this->input->post me permet de récupérer mes valeurs en post
			
			'annee'=>$this->input->post('annee'),
			'date_release'=>$this->input->post('date'),
			'bo'=>$this->input->post('bo'),
			'visible'=>$this->input->post('visible'),
			'cover'=>$this->input->post('couv'),
			'synopsis'=>$this->input->post('synopsis'),
			'description'=>$this->input->post('description'),
			'trailer'=>$this->input->post('trailer'),
			'distributeur'=>$this->input->post('distrib'),
			'budget'=>$this->input->post('budget'),
			'categories_id'=>$this->input->post('catego'),
			'image'=> base_url().'uploads/movies/'.$data['file_name']

			);

		$this->db->insert('movies', $data);
		
	}
	public function editer($id, $data){
		
		$data = array(
			'title'=> $this->input->post('titre'), //$this->input->post me permet de récupérer mes valeurs en post
			'annee'=>$this->input->post('annee'),
			'date_release'=>$this->input->post('date'),
			'bo'=>$this->input->post('bo'),
			'visible'=>$this->input->post('visible'),
			'cover'=>$this->input->post('couv'),
			'synopsis'=>$this->input->post('synopsis'),
			'description'=>$this->input->post('description'),
			'image'=> base_url().'uploads/movies/'.$data['file_name'],
			'trailer'=>$this->input->post('trailer'),
			'distributeur'=>$this->input->post('distrib'),
			'budget'=>$this->input->post('budget'),
			'categories_id'=>$this->input->post('catego'),
			);

		$this->db->where('id',$id);
		$this->db->update('movies',$data);
		
	}

	
	function supprimer($id){
		$this->db->where('id',$id);
		$this->db->delete('movies');
	}
	function activer($id){
		$data = array(
			'visible'=>1
			);
		$this->db->where('id',$id);
		$this->db->update('movies',$data);
	}
	function desactiver($id){
		$data = array(
			'visible'=>0
			);
		$this->db->where('id',$id);
		$this->db->update('movies',$data);
	}
	function mettreavant($id){
		$data = array(
			'cover'=>1
			);
		$this->db->where('id',$id);
		$this->db->update('movies',$data);
	}
	function retireravant($id){
		$data = array(
			'cover'=>0
			);
		$this->db->where('id',$id);
		$this->db->update('movies',$data);
	}


	public function rechercher(){

	$mot = $this->input->post('mot');
		$query = $this->db->query(
			"SELECT m.title as mtitle,m.id,c.title as ctitle, m.description, m.synopsis
			FROM movies as m

			LEFT JOIN actors_movies as am
			ON m.id = am.movies_id 

			LEFT JOIN actors as a
			ON a.id = am.actors_id 

			LEFT JOIN directors_movies as dm
			ON m.id = dm.movies_id 

			LEFT JOIN directors as d
			ON d.id = dm.directors_id 

			LEFT JOIN tags_movies as tm
			ON m.id = tm.movies_id 

			LEFT JOIN tags as t
			ON t.id = tm.tags_id 

			LEFT JOIN categories as c
			ON c.id = m.categories_id 

			WHERE m.title LIKE '%".$mot."%'
			OR m.description LIKE '%".$mot."%'
			OR m.synopsis LIKE '%".$mot."%'

			OR c.title LIKE '%".$mot."%'

			OR CONCAT (a.firstname,' ',a.lastname) LIKE '%".$mot."%'

			OR CONCAT (d.firstname,' ',d.lastname) LIKE '%".$mot."%'

			OR t.word LIKE '%".$mot."%'

			GROUP BY m.id
			");

		return $query->result();
	}
	public function rechercheAjax(){

	$mot = $this->input->post('mot');
		$query = $this->db->query(
			"SELECT m.title as mtitle
			FROM movies as m

			LEFT JOIN actors_movies as am
			ON m.id = am.movies_id 

			LEFT JOIN actors as a
			ON a.id = am.actors_id 

			LEFT JOIN directors_movies as dm
			ON m.id = dm.movies_id 

			LEFT JOIN directors as d
			ON d.id = dm.directors_id 

			LEFT JOIN tags_movies as tm
			ON m.id = tm.movies_id 

			LEFT JOIN tags as t
			ON t.id = tm.tags_id 

			LEFT JOIN categories as c
			ON c.id = m.categories_id 

			WHERE m.title LIKE '%".$mot."%'
			OR m.description LIKE '%".$mot."%'
			OR m.synopsis LIKE '%".$mot."%'

			OR c.title LIKE '%".$mot."%'

			OR CONCAT (a.firstname,' ',a.lastname) LIKE '%".$mot."%'

			OR CONCAT (d.firstname,' ',d.lastname) LIKE '%".$mot."%'

			OR t.word LIKE '%".$mot."%'

			GROUP BY m.id
			");

		return $query->result();

		}
}