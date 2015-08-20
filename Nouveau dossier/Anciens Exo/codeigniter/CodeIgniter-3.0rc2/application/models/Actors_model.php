<?php 


//Ma classe Model dans lequel j'aurais mes requétes de actors
class Actors_model extends CI_model{

//Fonction qui me retourne tout les acteurs
	public function allactors(){
		$query = $this->db->query('SELECT * FROM actors');

		return $query->result();
	}


	//Fonction qui me retourne les 4 meilleurs acteurs
	public function bestactors(){

	$query = $this->db->query(

	'SELECT actors.id,firstname,lastname,dob,city,actors.image,biography,recompenses
	FROM actors 
	INNER JOIN actors_movies
	ON actors.id = actors_movies.actors_id
	INNER JOIN movies
	ON movies.id = actors_movies.movies_id
	ORDER BY movies.id DESC
	LIMIT 4
		');
	return $query->result();
	}

	//Fonction qui me retourne le nombre d'acteurs
	public function stats3(){

	$query = $this->db->query(
	'SELECT COUNT(id) AS actors
	FROM actors
	');

	return $query->result();
	}
	//Fonction qui transmet l'id de l'acteur vers la page voir
	public function voiractors($id){
		$query = $this->db->query(
			'SELECT *
			FROM actors
			WHERE actors.id ='.$id
			); 
		return $query->row();
	}
	//Fonction qui me retourne les films joués par cet acteur
	public function filmsactors($id){
		$query = $this->db->query(
			'SELECT *,movies.image as img
			FROM movies
			INNER JOIN actors_movies
			ON movies.id = actors_movies.movies_id
			INNER JOIN actors
			ON actors.id = actors_movies.actors_id
			WHERE actors.id ='.$id
			);
		return $query->result();
	}
	//Je prépare un tableau de données avec les clefs qui sont mes champs de tables
	public function inserer(){
		$data = array(
			'lastname'=> $this->input->post('nom'), //$this->input->post me permet de récupérer mes valeurs en post
			
			'firstname'=>$this->input->post('prenom'),
			'roles'=>$this->input->post('role'),
			'biography'=>$this->input->post('biographie'),
			'nationality'=>$this->input->post('nationalite'),
			'city'=>$this->input->post('ville'),
			'dob'=>$this->input->post('date'),
			'image'=> base_url().'uploads/actors/'.$data['file_name']
			);

		$this->db->insert('actors', $data);
		
	}
	public function editer($id, $data){
		$data = array(
			'lastname'=> $this->input->post('nom'), //$this->input->post me permet de récupérer mes valeurs en post
			
			'firstname'=>$this->input->post('prenom'),
			'roles'=>$this->input->post('role'),
			'biography'=>$this->input->post('biographie'),
			'nationality'=>$this->input->post('nationalite'),
			'city'=>$this->input->post('ville'),
			'dob'=>$this->input->post('date'),
			'image'=> base_url().'uploads/actors/'.$data['file_name']
			);

		$this->db->where('id',$id);
		$this->db->update('actors',$data);
		}

	function supprimer($id){
	$this->db->where('id',$id);
	$this->db->delete('actors');
	}
}