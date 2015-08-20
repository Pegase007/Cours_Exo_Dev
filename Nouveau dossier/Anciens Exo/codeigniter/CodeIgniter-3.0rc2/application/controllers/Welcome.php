<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// je récupère l'utilisateur en session
        $user = $this->session->userdata('user');

        //si utilisateur pas en session
        if(empty($user)) {
            redirect('welcome/login');
        }

		$data['filmsAffiche'] = $this->movie_model->filmsAffiche();
		$data['filmsattendu'] = $this->movie_model->filmsattendu();
		$data['bestactors'] = $this->actors_model->bestactors();
		$data['categories'] = $this->categories_model->categories();
		$data['bestdirectors'] = $this->directors_model->bestdirectors();
		$data['random_movies'] = $this->movie_model->random_movies();
		$data['stats1'] = $this->categories_model->stats1();
		$data['stats2'] = $this->movie_model->stats2();
		$data['stats3'] = $this->actors_model->stats3();
		$data['stats4'] = $this->directors_model->stats4();
		$data['motscles'] = $this->tags_model->motscles();
		$data['nextsessions'] = $this->movie_model->nextsessions();
		$data['lastusers'] = $this->user_model->lastusers();
		$data['commentactifs'] = $this->movie_model->commentactifs();
		$data['commentinactifs'] = $this->movie_model->commentinactifs();
		$data['commentencours'] = $this->movie_model->commentencours();
		$data['allcomments'] = $this->comments_model->allcomments();
		$data['nbcommentact'] = $this->comments_model->nbcommentact();
		$data['nbcommentencours'] = $this->comments_model->nbcommentencours();
		$data['nbcommentinact'] = $this->comments_model->nbcommentinact();
		$data['filmfavori'] = $this->movie_model->filmfavori();
		$data['statsfilm'] = $this->movie_model->statsfilm();
		$data['filmdiffuses'] = $this->movie_model->filmdiffuses();
		$data['totalbudget'] = $this->movie_model->totalbudget();
		$data['moyenneage'] = $this->movie_model->moyenneage();
		$data['actorlyon'] = $this->movie_model->actorlyon();
		$data['actorparis'] = $this->movie_model->actorparis();
		$data['actorbirmin'] = $this->movie_model->actorbirmin();
		$data['film_categories'] = $this->movie_model->film_categories();
		$data['film_sorties'] = $this->movie_model->film_sorties();


		$this->load->view('welcome_message', $data);

	}
	public function login(){

        $this->form_validation->set_rules('nom','login','required|min_length[3]');
        $this->form_validation->set_rules('mdp','password','required|min_length[5]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        }

        else { // quand mon formulaire est valide

            //je récupère l'utilisateur grace à ma requete stockée dans le model user_model
            $user = $this->user_model->recupererUser();

            //si il y a bien un utilisateur en base de données
            if(!empty($user)) {

                //mise à jour de la date du last login
                $this->user_model->updateLastLogin($user->id);

                //écris en session mon utlisateur
                $this->session->set_userdata(array('user' => $user));

                // j'écris un message flash pour dire bonjour à mon utilisateur
                $this->session->set_flashdata('success','<div class="alert alert-success"Bonjour' .$user->username.', vous êtes bien connecté.');

                redirect('welcome/index');
            }else{
                $data['error'] = "Mauvais login / Mauvais mot de passe. Veuillez recommencer.";
                $this->load->view('login',$data);
            }
        }      
    }
    public function logout() {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect('welcome/login');
    }
	public function homepage(){
		//charge la vue index
		$this->load->view('index');
	}
	
}
