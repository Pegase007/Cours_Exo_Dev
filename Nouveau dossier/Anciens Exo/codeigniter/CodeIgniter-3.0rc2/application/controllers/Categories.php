<?php 
/*
* Controlleur Categories
*/
class Categories extends CI_Controller{

	/*
	* Fonction lister : Page qui va lister mes categories
	*/
	 public function __construct() {
            parent::__construct();

        $user = $this->session->userdata('user');
        
            if(empty($user)) {
                redirect('welcome/login');
            }
        }
	public function supprimer($id){
		$this->categories_model->supprimer($id);
		$this->session->set_flashdata('success','votre catégorie a bien été supprimé');
		redirect('categories/lister');
	}
	public function lister(){
		// $data est mon transporteur de données
		$data['allcategories'] = $this->categories_model->allcategories();
		$data['categories'] = array('Fantastique','Science-fiction','Drame','Action');
		//J'appelle ma vue lister et je lui transmets mon transporteur $data
		$this->load->view('Categories/lister', $data);
	}
	public function creer(){
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/categories/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		//Validation des champs 
		$this->form_validation->set_rules('title','Titre','required|min_length[5]|max_length[50]|is_unique[categories.title]');
		$this->form_validation->set_rules('description','Description','required|min_length[20]');

		//Personnalisation des erreurs
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		$this->form_validation->set_message('max_length', 'Le %s doit avoir un maximum de %s caractéres');
		$this->form_validation->set_message('is_unique','Le %s doit etre unique');

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Categories/creer');
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
			if (!$this->upload->do_upload('image'))//Erreur sur l'upload
			{
				//Je récupére les messages d'erreur de mon fichier
				$data["error"]= $this->upload->display_errors();

				exit(print_r($data["error"]));
				
				//Je charge ma vue avec l'erreur
				$this->load->view('Categories/creer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte

			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//j'envoie a mon modéle le détail de ce fichier
			$this->categories_model->inserer($data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','votre catégorie a bien été créé');
			redirect('Categories/lister');
			}
		}

		
	}
	public function editer($id){
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/categories/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		//Validation des champs 
		$this->form_validation->set_rules('title','Titre','required|min_length[5]|max_length[50]|is_unique[categories.title]');
		$this->form_validation->set_rules('description','Description','required|min_length[20]');

		//Personnalisation des erreurs
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		$this->form_validation->set_message('max_length', 'Le %s doit avoir un maximum de %s caractéres');
		
		//Charger la catégorie
		$data['categorie'] = $this->categories_model->voircatego1($id);

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Categories/editer', $data);
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
			if (!$this->upload->do_upload('image'))//Erreur sur l'upload
			{
				//Je récupére les messages d'erreur de mon fichier
				$data["error"]= $this->upload->display_errors();

				exit(print_r($data["error"]));
				
				//Je charge ma vue avec l'erreur
				$this->load->view('Categories/editer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte

			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//j'envoie a mon modéle le détail de ce fichier
			$this->categories_model->editer($id, $data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','votre catégorie a bien été éditer');
			redirect('Categories/lister','refresh');
			}
		}
		

	}
	public function voir($id){
		$data['voircatego1'] = $this->categories_model->voircatego1($id);
		$data['voircategos'] = $this->categories_model->voircategos($id);
		$data['categories1'] = $this->categories_model->categories1($id);
		$this->load->view('Categories/voir', $data);
	}
}



?>