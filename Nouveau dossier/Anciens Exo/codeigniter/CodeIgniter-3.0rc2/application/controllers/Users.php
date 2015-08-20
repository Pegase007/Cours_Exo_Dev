<?php 
/*
* Controlleur Users
*/
class Users extends CI_Controller{

	public function lister(){

		$data['allUsers'] = $this->user_model->allUsers();
		$this->load->view('Users/lister', $data);
	}
	public function creer(){
	
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/users/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		//Validation des champs 
		$this->form_validation->set_rules('nom','nom','required');
		$this->form_validation->set_rules('mdp','mot de passe','required|min_length[3]');
		$this->form_validation->set_rules('mdp1','mot de passe','required|matches[mdp]');
		$this->form_validation->set_rules('roles','rôle','required');
		$this->form_validation->set_rules('mail','mail','required|min_length[5]');
		
		

		//Personnalisation des erreurs
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		
		

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Users/creer');
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
		if (!$this->upload->do_upload('image'))//Erreur sur l'upload
		{
			//Je récupére les messages d'erreur de mon fichier
				$data["error"]= $this->upload->display_errors();


				//Je charge ma vue avec l'erreur
				$this->load->view('Users/creer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte

			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//J'envoie a mon modéle le détail du fichier
			$this->user_model->inserer($data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','Votre utilisateur a bien été créé');
			redirect('Users/lister');

		
			}
		}
	}
	public function supprimer($id){
		$this->user_model->supprimer($id);
		$this->session->set_flashdata('success','Votre utilisateur a bien été supprimé');
		redirect('Users/lister');
	}
	public function editer($id){
		//Initialisation de la configuration de l'upload 
		$config['upload_path'] = './uploads/users/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '4048';
		$config['max_height'] = '1960';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		//Validation des champs 
		$this->form_validation->set_rules('nom','nom','required');
		$this->form_validation->set_rules('mdp','mot de passe','required|min_length[3]');
		$this->form_validation->set_rules('mdp1','mot de passe','required|matches[mdp]');
		$this->form_validation->set_rules('roles','rôle','required');
		$this->form_validation->set_rules('mail','mail','required|min_length[5]');
		
		

		//Personnalisation des erreurs
		$this->form_validation->set_message('required', 'Le %s doit être remplis');
		$this->form_validation->set_message('min_length', 'La %s doit avoir un minimum de %s caractéres');
		
		//Charger la catégorie
		$data['user'] = $this->user_model->voirusers($id);

		//Si mon formulaire contient des erreurs
		if ($this->form_validation->run() == FALSE){
			$this->load->view('Users/editer',$data);
		}
		else{//Quand mon formulaire est valide

			//Action pour faire l'upload de mon fichier 'image' et vérifier si mon fichier est incorrecte
		if (!$this->upload->do_upload('image'))//Erreur sur l'upload
		{
			//Je récupére les messages d'erreur de mon fichier
				$data["error"]= $this->upload->display_errors();


				//Je charge ma vue avec l'erreur
				$this->load->view('Users/editer', $data);

			}else{//Mon upload c'est bien effectué et mon fichier est correcte

			//Récupérer le détail de mon fichier (nom,extension ...)
			$data = $this->upload->data();
			//J'envoie a mon modéle le détail du fichier
			$this->user_model->editer($id,$data); //M'enregistre une nouvelle catégorie

			$this->session->set_flashdata('success','Votre utilisateur a bien été éditer');
			redirect('Users/lister');

		
			}
		}
	}
	
}