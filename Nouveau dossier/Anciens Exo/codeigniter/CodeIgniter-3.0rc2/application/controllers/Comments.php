<?php 
/*
* Controlleur Comments
*/
class Comments extends CI_Controller{

	/*
	* Fonction lister : Page qui va lister mes comments
	*/
	 public function __construct() {
            parent::__construct();

        $user = $this->session->userdata('user');
        
            if(empty($user)) {
                redirect('welcome/login');
            }
        }
    public function lister(){
        // $data est mon transporteur de données
        $data['voircomments'] = $this->comments_model->voircomments();
        $this->load->view('Comments/lister', $data);
    }
    public function supprimer($id){
        $this->comments_model->supprimer($id);
        $this->session->set_flashdata('success','votre commentaire a bien été supprimé');
        redirect('Comments/lister');
    }
    public function supprimerDansVoir($idfilm,$id){
        $this->comments_model->supprimer($id);
        
        echo'Votre commentaire a bien été supprimé';
        exit();
       
    }
}