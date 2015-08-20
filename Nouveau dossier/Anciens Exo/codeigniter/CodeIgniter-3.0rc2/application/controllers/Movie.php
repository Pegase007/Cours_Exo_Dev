<?php 
/*
* Controlleur Movie
*/
class Movie extends CI_Controller{

	/*
	* Fonction lister : Page qui va lister mes films
	*/
	 public function __construct() {
            parent::__construct();

        $user = $this->session->userdata('user');
        
            if(empty($user)) {
                redirect('welcome/login');
            }
        }
	public function supprimer($id){
		$this->movie_model->supprimer($id);
		//Ecriture du message flash en session
		//success est la clé de message et le message est ma valeur d'affichage
		$this->session->set_flashdata('success','Votre film a bien été supprimé');
		redirect('movie/lister');
	}
	public function activer($id){
		$this->movie_model->activer($id);
		//$this->session->set_flashdata('success','votre film a bien été supprimé');
		redirect('movie/lister');
	}
	public function mettreavant($id){
		$this->movie_model->mettreavant($id);
		//$this->session->set_flashdata('success','votre film a bien été supprimé');
		redirect('movie/lister');
	}
	public function retireravant($id){
		$this->movie_model->retireravant($id);
		//$this->session->set_flashdata('success','votre film a bien été supprimé');
		redirect('movie/lister');
	}
	public function desactiver($id){
		$this->movie_model->desactiver($id);
		//$this->session->set_flashdata('success','votre film a bien été supprimé');
		redirect('movie/lister');
	}
	public function lister(){
		// $data est mon transporteur de données
		$data['allmovies'] = $this->movie_model->allmovies();
		//J'appelle ma vue lister et je lui transmets mon transporteur $data
		$this->load->view('Movie/lister', $data);
	}
	public function creer(){
		$data['allcategories']=$this->categories_model->allcategories();

		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/movies/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		//Validation des champs 
		$this->form_validation->set_rules('titre','titre','required');
		$this->form_validation->set_rules('annee','année','required|max_length[4]');
		$this->form_validation->set_rules('date','date de sortie','required');
		$this->form_validation->set_rules('bo','bande original','required');
		$this->form_validation->set_rules('visible','visibilité','required');
		$this->form_validation->set_rules('couv','couverture','required');
		$this->form_validation->set_rules('synopsis','synopsis','required|min_length[10]');
		$this->form_validation->set_rules('description','description','required|min_length[10]');
		//$this->form_validation->set_rules('image','image','required');
		$this->form_validation->set_rules('trailer','trailer','required');
		$this->form_validation->set_rules('distrib','distributeur','required');
		$this->form_validation->set_rules('budget','budget','required|min_length[6]');
		$this->form_validation->set_rules('catego','catégorie','required');

		//Personnalisation des erreurs
		// $this->form_validation->set_message('checked', 'La %s doit être cocher');
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('max_length', 'La %s doit avoir un maximum de %s caractéres');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		
		
		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Movie/creer', $data);
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
			if (!$this->upload->do_upload('image'))//Erreur sur l'upload
			{
				//Je récupére les messages d'erreur de mon fichier
					$data["error"]= $this->upload->display_errors();


					//Je charge ma vue avec l'erreur
					$this->load->view('Movie/creer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte
			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//J'envoie a mon modéle le détail du fichier
			$this->movie_model->inserer($data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','Votre film a bien été créé');
			redirect('Movie/lister');

		
			}
		}
	}
	public function editer($id){
		$data['allcategories']=$this->categories_model->allcategories();

		//Validation des champs 
		$this->form_validation->set_rules('titre','titre','required');
		$this->form_validation->set_rules('annee','année','required|max_length[4]');
		$this->form_validation->set_rules('date','date de sortie','required');
		$this->form_validation->set_rules('bo','bande original','required');
		$this->form_validation->set_rules('visible','visibilité','required');
		$this->form_validation->set_rules('couv','couverture','required');
		$this->form_validation->set_rules('synopsis','synopsis','required|min_length[10]');
		$this->form_validation->set_rules('description','description','required|min_length[10]');
		$this->form_validation->set_rules('trailer','trailer','required');
		$this->form_validation->set_rules('distrib','distributeur','required');
		$this->form_validation->set_rules('budget','budget','required|min_length[6]');
		$this->form_validation->set_rules('catego','catégorie','required');

		//Personnalisation des erreurs
		// $this->form_validation->set_message('checked', 'La %s doit être cocher');
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('max_length', 'La %s doit avoir un maximum de %s caractéres');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		
		
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/movies/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		//Charger la catégorie
		$data['movie'] = $this->movie_model->voirfilms($id);

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Movie/editer',$data);
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
			if (!$this->upload->do_upload('image'))//Erreur sur l'upload
			{
				//Je récupére les messages d'erreur de mon fichier
					$data["error"]= $this->upload->display_errors();

					//Je charge ma vue avec l'erreur
					$this->load->view('Movie/editer', $data);

			}else{
				//Mon upload c'est bien effectué et mon fichier est correcte
				//Récupérer le détail de mon fichier (nom,extension ...)
				$data = $this->upload->data();
				//J'envoie a mon modéle le détail du fichier
				$this->movie_model->editer($id,$data); //M'enregistre une nouvelle catégorie

				$this->session->set_flashdata('success','Votre film a bien été editer');
				redirect('Movie/lister','refresh');

			}
		}
	}

	public function voir($id){
		//Je transmet au model mon argument $id récuperer depuis l'URL
		$data['voirfilms'] = $this->movie_model->voirfilms($id);
		$data['commentfilms'] = $this->movie_model->commentfilms($id);
		$data['actorfilms'] = $this->movie_model->actorfilms($id);
		$this->load->view('Movie/voir', $data);
	}
	/**
	*Moteur de recherche
	*/
	public function rechercher(){

		


		$this->form_validation->set_rules('mot','Mot','required|min_length[3]');

		$this->form_validation->set_message('required','Le champ de recherche doit étre remplis');
		$this->form_validation->set_message('min_length','Le champ de recherche doit avoir un minimum de 3 caractéres');

		//Si mon formulaire comporte des erreurs
		if($this->form_validation->run()==FALSE)
		{
			$data['movies'] = array();
			$this->load->view('Movie/rechercher');

		}else{ //Si mon formulaire est correct

			$movies = $this->movie_model->rechercher();

			$data ['movies'] = $movies;
			$this->load->view('Movie/rechercher',$data);
		}
	}
	public function ajaxmovies(){
		$movies = $this->movie_model->rechercheAjax();//Je vais rechercher mes films

		echo json_encode($movies);
		return true;
	}

}


?>