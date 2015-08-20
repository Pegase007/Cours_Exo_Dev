<?php 


//Ma classe Model dans lequel j'aurais mes requétes de Movie
class Comments_model extends CI_model{


	//Fonction qui me retourne tous mes commentaires
	public function allcomments(){
		$query = $this->db->query(
			"SELECT COUNT(id)as nbcomments
			FROM comments");

		return $query -> row();
	}
	//Fonction qui me compte tout les commentaires actifs
	public function nbcommentact(){
		$query = $this->db->query(
			'SELECT COUNT(id) as commentsactifs
			FROM comments
			WHERE state = 1');
		return $query -> row();
	}
	//Fonction qui me compte tout les commentaires en cours
	public function nbcommentencours(){
		$query = $this->db->query(
			'SELECT COUNT(id) as commentsencours
			FROM comments
			WHERE state = 2');
		return $query -> row();
	}
	//Fonction qui me compte tout les commentaires inactifs
	public function nbcommentinact(){
		$query = $this->db->query(
			'SELECT COUNT(id) as commentsinactifs
			FROM comments
			WHERE state = 0');
		return $query -> row();
	}
	//Fonction qui transmet l'id des comments vers la page voir
	public function voircomments(){
		$query = $this->db->query(
			'SELECT *, user.image as img, comments.id as cid
			FROM comments
			INNER JOIN user
			ON user.id = comments.user_id
			INNER JOIN movies
			ON movies.id = comments.movies_id'
			); 
		return $query->result();
	}

	public function supprimer($id){
	$this->db->where('id',$id);
	$this->db->delete('comments');
	}
}