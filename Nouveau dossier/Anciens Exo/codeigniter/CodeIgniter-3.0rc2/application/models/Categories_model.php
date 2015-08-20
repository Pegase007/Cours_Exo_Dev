<?php 


//Ma classe Model dans lequel j'aurais mes requétes de categories
class Categories_model extends CI_model{

	//Fonction qui me donne toutes mes categories	
	public function allcategories(){

		$query = $this->db->query(
		"SELECT *
		FROM categories")
		;

		return $query->result();
	}


	//Fonction qui me retourne le nombre de films par catégories
	public function categories(){
		
	$query = $this->db->query(

	'SELECT categories.title, COUNT(movies.id) AS nbmoovies,categories.id
	FROM categories
	INNER JOIN movies
	ON movies.categories_id = categories.id
	GROUP BY categories.title
	');

	return $query->result();
	}

	//Fonction qui me retourne le nombre de catégories
	public function stats1(){

	$query = $this->db->query(
	'SELECT COUNT(id) AS cats
	FROM categories
	');

	return $query->result();
	}
	//Fonction qui transmet l'id de la catégorie vers la page voir categorie
	public function voircatego1($id){
		$query = $this->db->query(
			'SELECT categories.id as id, categories.image as img, categories.description as descrip, categories.title as ttl
			FROM categories
			WHERE categories.id ='.$id
			); 
	return $query->row();
	}
	//Fonction qui transmet l'id des films par catégorie vers la page voir categorie
	public function voircategos($id){
		$query = $this->db->query(
			'SELECT *, movies.image as img, movies.title as ttl
			FROM categories
			INNER JOIN movies
			ON categories.id = movies.categories_id
			WHERE categories.id ='.$id
			); 
	return $query->result();
	}
	//Fonction qui me retourne le nombre de films par catégories(Méme ceux sans catégories)
	public function categories1($id){
		
	$query = $this->db->query(

	'SELECT * 
	FROM movies
	WHERE categories_id = '.$id.'
	');

	return $query->result();
	}


	//Je prépare un tableau de données avec les clefs qui sont mes champs de tables
	function inserer($data){
		$data = array(
			'title'=> $this->input->post('title'), //$this->input->post me permet de récupérer mes valeurs en post
			'description'=>$this->input->post('description'),
			'date_created'=> date('Y-m-d H:i:s'),
			'image'=> base_url().'uploads/categories/'.$data['file_name']
			);

		$this->db->insert('categories', $data);
		
	}

	function editer($id, $data){
		$data = array(
			'title'=> $this->input->post('title'), //$this->input->post me permet de récupérer mes valeurs en post
			'description'=>$this->input->post('description'),
			'image'=> base_url().'uploads/categories/'.$data['file_name']
			);

		$this->db->where('id',$id);
		$this->db->update('categories',$data);
		
	}

	function supprimer($id){
		$this->db->where('id',$id);
		$this->db->delete('categories');
	}

}