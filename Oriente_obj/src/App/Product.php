<?php

namespace App;

/*
 * Class Product
 * La classe product va permettre de modeliser l'ensemble des produits dans une boutique
 * Prototype ou Moule des produits d'une boutique
 */

use App\Exception\AvailableException;
use App\Exception\OutOfStockException;
use Lib\Beautiful;


//permet d'inscrire une class dans une classe

//exemple d'utilisation
//    public function getTitle(){
//
//        $beautiful = new Beautiful();
//        return $beautiful->title($this->title);
//
//    }


class Product extends Catalogue implements Visible
{
    // attribut public
    /**
     * @var
     */
    protected $title;

    /**
     * @var
     */
    protected $description;

    /**
     * @var $prix du produit
     */
    protected $prix;

    /**
     * @var $prix ht
     */
    protected $prixht;


    /**
     * @var
     */
    protected $reference;

    /**
     * @var
     */
    protected $couleur;

    /**
     * @var
     */
    protected $dimension;

    /**
     * @var
     */
    protected $fonction;

    /**
     * @var
     */
    protected $atouts;

    /**
     * @var
     */
    protected $url;

    /**
     * @var
     */
    protected $marques;

    /**
     * @var int
     */
    protected $visible;

    /**
     * @var array
     */
    protected $panier;

    /**
     * @var array
     */
    protected $images;

    /**
     * @var date de publication de l'article
     */
    protected $datePublication;

    /**
     * @var category
     */
    protected $category;



    /**
     *
     */
    public function __construct($title='', $prix=0, $prixht=0 )
    {
        $this->images = array();
        $this->visible = 1;
        $this->panier = array();
        $this->beautiful = new Beautiful(); //00: agrégation

        if($prix < $prixht){

            throw new AvailableException("Le prix HT doit etre supérieur ou égal au prix TTC");
        }

        $this->prix = $prix;
        $this->prixht = $prixht;


    }


//    public function __construct(Array $images=array() )
//    {
//        $this->images = $images;
//        $this->visible = 1;
//        $this->panier = array();
//        $this->beautiful = new Beautiful(); //00: agrégation
////
//        var_dump(count($images));
//
//        if ( count($images) < 2  ){
//
//            throw new \Exception("Il manque des images");
//
//        }
//
//    }

    /**
     * @return ht
     */
    public function getPrixht()
    {
        return $this->prixht;
    }

    /**
     * @param ht $prixht
     */
    public function setPrixht($prixht)
    {
        $this->prixht = $prixht;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->title.' : '.$this->prix;
    }

    /**
     * Methode d'accès à la proprieté title
     * Getter.
     */
    public function getTitle()
    {

        // this modelise mon objet courant sur lequel je suis
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @return mixed
     */
    public function getAtouts()
    {
        return $this->atouts;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getMarques()
    {
        return $this->marques;
    }

    /**
     * @return int
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /*
      * Méthode de mofification de ma propriété title
     * Setter
      */

    /**
     * @param $title
     * @return mixed
     */
    public function setTitle($title)
    {
        return $this->title = $title;
    }

    /**
     * @param $description
     * @return mixed
     */
    public function setDescription($description)
    {
        return $this->description = $description;
    }

    /**
     * @param $prix
     * @return mixed
     */
    public function setPrix($prix)
    {
        return $this->prix = $prix;
    }

    /**
     * @param $reference
     * @return mixed
     */
    public function setReference($reference)
    {
        return $this->reference = $reference;
    }

    /**
     * @param $couleur
     * @return mixed
     */
    public function setCouleur($couleur)
    {
        return $this->couleur = $couleur;
    }

    /**
     * @param $dimension
     * @return mixed
     */
    public function setDimension($dimension)
    {
        return $this->dimension = $dimension;
    }

    /**
     * @param $fonction
     * @return mixed
     */
    public function setFonction($fonction)
    {
        return $this->fonction = $fonction;
    }

    /**
     * @param $atouts
     * @return mixed
     */
    public function setAtouts($atouts)
    {
        return $this->atouts = $atouts;
    }

    /**
     * @param $url
     * @return mixed
     */
    public function setUrl($url)
    {
        return $this->url = $url;
    }

    /**
     * @param $marques
     * @return mixed
     */
    public function setMarques($marques)
    {
        return $this->marques = $marques;
    }

    /**
     * @param $visible
     * @throws \Exception if product is not visible (==0) or visibility is not an number
     */
    public function setVisible($visible)
    {

        if ($visible == False || !is_bool($visible)){


            throw new \Exception("Votre article n'est pas visible");

        }
        $this->visible=$visible;


    }

    /**
     * @return array
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * @param array $panier
     */
    public function setPanier($panier)
    {
        $this->panier = $panier;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        if ( count($images) < 2  ){

            throw new \Exception("Il manque des images");

        }
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @param $item
     */
    public function addImage($item)
    {
        //        $this->product[$item->getUrl()] = $item;

        array_push($this->images, $item);
    }

    /**
     * @param $item
     */
    public function deleteImage($item)
    {
        unset($this->product[$item->getUrl()]);
    }

    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * @param mixed $date_publication
     */
    public function setDatePublication($date_publication)
    {
//        strtotime($date_publication)
        if(!($date_publication instanceof \DateTime || !is_object($date_publication))){

            throw new \Exception("Ceci n'es pas une date");

        }
    }

    // PEUT AUSSI S'ECRIRE COMME CECI
//    public function setDatePublication(\DateTime $date_publication){
//
//
//   }


    /**
     * Check if quantity is equal to zero or not a number. If it is, throw exception and send text.
     * @param $quantity
     * @throws \Exception
     */
//    public function setQuantity($quantity){
//
//        if ($quantity == 0 || !is_int($quantity)){
//
//
//            throw new \Exception('Votre quantité ne doit pas être égale à 0');
//
//        }
//        $this->quantity=$quantity;
//
//    }

    /**
     * V2 utiliser une class exception
     * @param $quantity
     * @throws OutOfStockException
     */
    public function setQuantity($quantity)
    {
        if(!is_int($quantity)){
            throw new Exception($this);

        }
        elseif($quantity == 0){
            throw new OutOfStockException($this);
        }

        $this->quantity = $quantity;
    }

//=============================================PROPOSITION MOUS==========================================================//
//    /**
//     * @param $datePublication
//     * @throws \Exception
//     */
//    public function setDatePublication($datePublication)
//    {
//        /* Méthode 1
//        if (!preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/', $date))  {
//            throw new \Exception('Format de date invalide');
//        }
//
//        Méthode 2
//        if ( get_class($datePublication) != "DateTime" ){
//            throw new \Exception('Date non valide');
//        }*/
//        $now = new \DateTime();
//        if(!($datePublication instanceof \DateTime) || !is_object($datePublication) || ($datePublication > $now) ){
//            throw new \DateException("Ceci n'est pas une date");
//        }
//
//
//        $this->datePublication = $datePublication;
//
//    }
//
//
//    /**
//     * @return string
//     * @throws Exceptions\DescriptionException
//     */
//    public function getDescription()
//    {
//        $beautiful = new Beautiful();
//
//        if ( !preg_match("/^[\w\s]{20,}$/", $this->description)){
//            throw new DescriptionException($this->title);
//        }
//
//        return $beautiful->paragraph($this);
//    }

    //===========================================================================================================//







    /**
     * @return category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param category $category
     */



//    public function setCategory($cat)
//    {
//
//        if(!is_a($cat, 'App\Category' ) ){
//            throw new \Exception("Ce n'est pas la bonne catégorie");
//
//        }

//    }


//    public function setCategory($category)
//    {
//        if(!is_object($category) && $category instanceof \App\categorie ) {
//            throw new \Exception('Pas un objet de la cat');
//        }
//        $this->category = $category;
//    }

    public function setCategory($cat)
    {
        if(!is_object($cat) || !$cat instanceof \App\Category || strlen($cat->getTitle())<5) {

            throw new \Exception('Pas un objet de la cat');
        }
        $this->category = $cat;
    }










}
