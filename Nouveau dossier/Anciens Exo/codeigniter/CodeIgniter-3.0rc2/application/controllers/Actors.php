<?php 
/*
* Controlleur Actors
*/
class Actors extends CI_Controller{

	/*
	* Fonction lister : Page qui va lister mes actors
	*/
 	public function __construct() {
        parent::__construct();

    $user = $this->session->userdata('user');
    
        if(empty($user)) {
            redirect('welcome/login');
        }
    }

	
	public function supprimer($id){
		$this->actors_model->supprimer($id);
		$this->session->set_flashdata('success','Votre acteur a bien été supprimé');
		redirect('Actors/lister');
	}
	public function lister(){
		$data['allactors'] = $this->actors_model->allactors();
		$this->load->view('Actors/lister', $data);
	}
	public function creer(){
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/actors/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		//Validation des champs 
		$this->form_validation->set_rules('nom','nom','required|min_length[3]');
		$this->form_validation->set_rules('prenom','prenom','required|min_length[3]');
		$this->form_validation->set_rules('role','rôle','required');
		$this->form_validation->set_rules('nationalite','nationalité','required');
		$this->form_validation->set_rules('biographie','biographie','required|min_length[10]');
		$this->form_validation->set_rules('ville','ville','required');
		$this->form_validation->set_rules('date','date de naissance','required');

		//Personnalisation des erreurs
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		
		

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Actors/creer');
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
		if (!$this->upload->do_upload('image'))//Erreur sur l'upload
		{
			//Je récupére les messages d'erreur de mon fichier
				$data["error"]= $this->upload->display_errors();


				//Je charge ma vue avec l'erreur
				$this->load->view('Actors/creer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte

			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//J'envoie a mon modéle le détail du fichier
			$this->actors_model->inserer($data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','Votre acteur a bien été créé');
			redirect('Actors/lister');

		
			}
		}
	}
	public function editer($id){
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/actors/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		//Validation des champs 
		$this->form_validation->set_rules('nom','nom','required|min_length[3]');
		$this->form_validation->set_rules('prenom','prenom','required|min_length[3]');
		$this->form_validation->set_rules('role','rôle','required');
		$this->form_validation->set_rules('nationalite','nationalité','required');
		$this->form_validation->set_rules('biographie','biographie','required|min_length[10]');
		$this->form_validation->set_rules('ville','ville','required');
		$this->form_validation->set_rules('date','date de naissance','required');

		//Personnalisation des erreurs
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		
		//Charger la catégorie
		$data['actor'] = $this->actors_model->voiractors($id);

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Actors/editer', $data);
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
		if (!$this->upload->do_upload('image'))//Erreur sur l'upload
		{
			//Je récupére les messages d'erreur de mon fichier
				$data["error"]= $this->upload->display_errors();


				//Je charge ma vue avec l'erreur
				$this->load->view('Actors/editer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte

			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//J'envoie a mon modéle le détail du fichier
			$this->actors_model->editer($id,$data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','Votre acteur a bien été éditer');
			redirect('Actors/lister','refresh');

		
			}
		}
	}
	public function voir($id){
		$data['voiractors'] = $this->actors_model->voiractors($id);
		$data['filmsactors'] = $this->actors_model->filmsactors($id);
		$this->load->view('Actors/voir', $data);
	}
}



?>