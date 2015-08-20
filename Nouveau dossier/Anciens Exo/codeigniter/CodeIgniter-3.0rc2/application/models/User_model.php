<?php 

class User_model extends CI_model{

     //Fonction qui me retourne toutes les utilisateurs
    public function lastusers(){
        
    $query = $this->db->query(
    "SELECT image ,username ,DATE_FORMAT(user.last_login, '%d/%m/%Y') as lastlogin
    FROM user
    ORDER BY last_login
    LIMIT 5");

    return $query->result();

    }
    
    public function recupererUser(){

        $username = $this->input->post('nom');
        $password = $this->input->post('mdp');

        $this->db->select('*');
        $this->db->from('user');

        $this->db->where('password', $password);
        $this->db->where('enabled', 1);
        $this->db->where("username='".$username."' OR email='" .$username. "'");

        $query=$this->db->get();

        return $query->row();
    }

    // met à jour la date du champ last_login
    function updateLastLogin($id) {

        $data = array(
            'last_login' => date('Y-m-d H:i:s'),
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
    //Fonction qui me retourne tous mes users et qui me compte les commentaires par user
    public function allUsers(){
        $query = $this->db->query(
            "SELECT *,COUNT(comments.id) as nbcomment, user.id as id
            FROM user
            LEFT JOIN comments
            ON user.id = comments.user_id
            GROUP BY user.id
            ");

        return $query->result();
    }
    //Je prépare un tableau de données avec les clefs qui sont mes champs de tables
    public function inserer(){
        $data = array(
            'username'=> $this->input->post('nom'), //$this->input->post me permet de récupérer mes valeurs en post
            
            'email'=>$this->input->post('mail'),
            'is_admin'=>$this->input->post('roles'),
            'password'=>$this->input->post('mdp'),
            'image'=> base_url().'uploads/users/'.$data['file_name']
            );

        $this->db->insert('user', $data);
        
    }
    //Fonction qui transmet l'id de l'utilisateur vers la page voir
    public function voirusers($id){
        $query = $this->db->query(
            'SELECT *
            FROM user
            WHERE user.id ='.$id
            ); 
        return $query->row();
    }
    public function editer($id, $data){
        $data = array(
            'username'=> $this->input->post('nom'), //$this->input->post me permet de récupérer mes valeurs en post
            
            'email'=>$this->input->post('mail'),
            'is_admin'=>$this->input->post('roles'),
            'password'=>$this->input->post('mdp'),
            'image'=> base_url().'uploads/users/'.$data['file_name']
            );

        $this->db->where('id',$id);
        $this->db->update('user', $data);


    }

    function supprimer($id){
    $this->db->where('id',$id);
    $this->db->delete('user');
    }
}