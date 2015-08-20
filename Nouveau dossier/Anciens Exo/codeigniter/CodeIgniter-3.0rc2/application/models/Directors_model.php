<?php 


//Ma classe Model dans lequel j'aurais mes requétes de directors
class Directors_model extends CI_model{

	//Fonction qui me retourne tous les réalisateurs
	public function alldirectors(){
		$query = $this->db->query(

		"SELECT *
		FROM directors");

		return $query->result();
	}

	//Fonction qui me retourne les 4 meilleurs réalisateurs
	public function bestdirectors(){
		
	$query = $this->db->query(

	"SELECT d.id,d.firstname,d.ville, d.lastname, d.dob, d.biography, d.image, COUNT(dm.movies_id)
	FROM directors AS d
	INNER JOIN directors_movies AS dm
	ON d.id = dm.directors_id
	WHERE d.lastname NOT LIKE '%Boyer%'
	GROUP BY dm.directors_id
	ORDER BY COUNT(dm.movies_id) DESC
	LIMIT 4
	");

	return $query->result();
	}

	//Fonction qui me retourne le nombre de réalisateurs
	public function stats4(){

	$query = $this->db->query(
	'SELECT COUNT(id) AS realis
	FROM directors
	');

	return $query->result();
	}

	//Fonction qui transmet l'id des réalisateurs vers la page voir
	public function voirdirectors($id){
		$query = $this->db->query(
			'SELECT *
			FROM directors
			WHERE id ='.$id
			); 
		return $query->row();
	}
	//Fonction qui me retourne les films joués par cet acteur
	public function filmsdirectors($id){
		$query = $this->db->query(
			'SELECT *,movies.image as img
			FROM movies
			INNER JOIN directors_movies
			ON movies.id = directors_movies.movies_id
			INNER JOIN directors
			ON directors.id = directors_movies.directors_id
			WHERE directors.id ='.$id
			);
		return $query->result();
	}
	//Je prépare un tableau de données avec les clefs qui sont mes champs de tables
	public function inserer($data){
		$data = array(
			'lastname'=> $this->input->post('nom'), //$this->input->post me permet de récupérer mes valeurs en post			
			'firstname'=>$this->input->post('prenom'),
			'biography'=>$this->input->post('biographie'),
			'ville'=>$this->input->post('ville'),
			'dob'=>$this->input->post('date'),
			'image'=> base_url().'uploads/directors/'.$data['file_name']
			);

		$this->db->insert('directors', $data);
		
	}

	public function editer($id,$data){
		$data = array(
			'lastname'=> $this->input->post('nom'), //$this->input->post me permet de récupérer mes valeurs en post			
			'firstname'=>$this->input->post('prenom'),
			'biography'=>$this->input->post('biographie'),
			'ville'=>$this->input->post('ville'),
			'dob'=>$this->input->post('date'),
			'image'=> base_url().'uploads/directors/'.$data['file_name']
			);

		$this->db->where('id',$id);
		$this->db->update('directors',$data);
	}
	function supprimer($id){
		$this->db->where('id',$id);
		$this->db->delete('directors');
	}
}