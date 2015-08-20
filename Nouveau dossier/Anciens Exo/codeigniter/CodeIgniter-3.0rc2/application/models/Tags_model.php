<?php 


//Ma classe Model dans lequel j'aurais mes requétes de tags
class Tags_model extends CI_model{

	//Fonction qui me retourne les mots-clés
	public function motscles(){

	$query = $this->db->query(
	'SELECT word, COUNT(tags_movies.movies_id) AS nbtag
	FROM tags
	INNER JOIN tags_movies
	ON tags.id = tags_movies.tags_id
	INNER JOIN movies
	ON movies.id = tags_movies.movies_id
	GROUP BY tags.id');

	return $query -> result();
	}
	//Fonction qui me retourne tout mes mots clés par id
	public function voirtags($id){

	$query = $this->db->query(
	'SELECT tags.word as tag, tags.id
	FROM tags
	WHERE tags.id ='.$id 
	);

	return $query->row();
	}


	//Fonction qui me retourne tout les mots-clés
	public function tags(){

	$query = $this->db->query(
	'SELECT *
	FROM tags');

	return $query -> result();
	}

	function inserer($data){
		$data = array(
			'word'=> $this->input->post('tag'), //$this->input->post me permet de récupérer mes valeurs en post
			);

		$this->db->insert('tags', $data);
		
	}
	function editer($id, $data){
		$data = array(
			'word'=> $this->input->post('tag'), //$this->input->post me permet de récupérer mes valeurs en post
			);

		$this->db->where('id',$id);
		$this->db->update('tags',$data);
		
	}
	function supprimer($id){
		$this->db->where('id',$id);
		$this->db->delete('tags');
	}

}

