<?php 
/*
* Controlleur Tags
*/
class Tags extends CI_Controller{

	/*
	* Fonction lister : Page qui va lister mes tags
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
		$data['tags'] = $this->tags_model->tags();
		//J'appelle ma vue lister et je lui transmets mon transporteur $data
		$this->load->view('Tags/lister', $data);
	}
	public function creer(){
		// $data est mon transporteur de données
		

		$this->form_validation->set_rules('tag','tag','required|is_unique[tags.word]');

		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('is_unique','Le %s doit etre unique');
		//J'appelle ma vue creer et je lui transmets mon transporteur $data
		

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Tags/creer');
		}
		else{//Quand mon formulaire est valide
			$this->tags_model->inserer(); //M'enregistre une nouvelle catégorie
			
			redirect('Tags/lister');
			
		}
	}
	public function editer($id){
		// $data est mon transporteur de données
		

		$this->form_validation->set_rules('tag','tag','required|is_unique[tags.word]');

		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('is_unique','Le %s doit etre unique');
		//J'appelle ma vue creer et je lui transmets mon transporteur $data
		
		//Charger la catégorie
		$data['tags'] = $this->tags_model->voirtags($id);

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Tags/editer', $data);
		}
		else{//Quand mon formulaire est valide
			$this->tags_model->editer($id); //M'enregistre une nouvelle catégorie
			
			redirect('Tags/lister');
		}
	}
	public function supprimer($id){
		$this->tags_model->supprimer($id);
		$this->session->set_flashdata('success','votre tag a bien été supprimé');
		redirect('tags/lister');
	}
	public function voir($id){
		// $data est mon transporteur de données
		$data['voirtags'] = $this->tags_model->voirtags($id);
		//J'appelle ma vue lister et je lui transmets mon transporteur $data
		$this->load->view('Tags/voir', $data);
	}
}
?>