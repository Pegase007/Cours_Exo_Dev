<?php 

//Cette fonction me permet d'ajouter un thumbail(image miniature)à mes articles
add_theme_support('post-thumbnails');


//Démarre la fonction initialisation() au démarrage de wordpress
add_action('init','initialisation');

/**
*Fonction Initialisation
*/
function initialisation(){
	//Enregistre un nouveau type de contenu 
	register_post_type('recettes', array(
		//Celui qui va s'afficher dans mon menu
		'label'=>__('Recettes'),
		//Mon label au singulier "New Combatant"
		'singular_label' => __('Recette'),
		'public' => true,
		'show_ui'=>true,
		'capability_type'=>'post',
		'hierarchical'=> false,
		'supports'=> array('title','editor','excerpt','thumbnail','custom-fields')
	));

	register_taxonomy(
		'Origines','recettes',array(
		'hierarchical' => true,
		'label'=>'Origines',
		'query_var'=> true,
		'rewrite'=> true,
	));

	register_taxonomy(
		'Types','recettes',array(
		'hierarchical' => true,
		'label'=>'Types',
		'query_var'=> true,
		'rewrite'=> true,
	));
	//Enregistre un nouveau type de contenu 
	register_post_type('annonce', array(
		//Celui qui va s'afficher dans mon menu
		'label'=>__('Annonces'),
		//Mon label au singulier "New Combatant"
		'singular_label' => __('Annonce'),
		'public' => true,
		'show_ui'=>true,
		'capability_type'=>'post',
		'hierarchical'=> false,
		'supports'=> array('title','editor','excerpt','thumbnail','custom-fields')
	));

	register_taxonomy(
		'Nature','annonces',array(
		'hierarchical' => true,
		'label'=>'Origines',
		'query_var'=> true,
		'rewrite'=> true,
	));

	register_taxonomy(
		'Types','annonces',array(
		'hierarchical' => true,
		'label'=>'Types',
		'query_var'=> true,
		'rewrite'=> true,
	));
}