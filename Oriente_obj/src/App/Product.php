<?php

namespace App;

/*
 * Class Product
 * La classe product va permettre de modeliser l'ensemble des produits dans une boutique
 * Prototype ou Moule des produits d'une boutique
 */

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
    protected $title;

    protected $description;

    protected $prix;

    protected $reference;

    protected $couleur;

    protected $dimension;

    protected $fonction;

    protected $atouts;

    protected $url;

    protected $marques;

    protected $visible;

    protected $panier;

    protected $images;

    public function __construct()
    {
        $this->images = array();
        $this->visible = 1;
        $this->panier = array();
        $this->beautiful = new Beautiful(); //00: agrégation
    }

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

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getDimension()
    {
        return $this->dimension;
    }

    public function getFonction()
    {
        return $this->fonction;
    }

    public function getAtouts()
    {
        return $this->atouts;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getMarques()
    {
        return $this->marques;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    /*
      * Méthode de mofification de ma propriété title
     * Setter
      */

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function setDescription($description)
    {
        return $this->description = $description;
    }

    public function setPrix($prix)
    {
        return $this->prix = $prix;
    }

    public function setReference($reference)
    {
        return $this->reference = $reference;
    }

    public function setCouleur($couleur)
    {
        return $this->couleur = $couleur;
    }

    public function setDimension($dimension)
    {
        return $this->dimension = $dimension;
    }

    public function setFonction($fonction)
    {
        return $this->fonction = $fonction;
    }

    public function setAtouts($atouts)
    {
        return $this->atouts = $atouts;
    }

    public function setUrl($url)
    {
        return $this->url = $url;
    }

    public function setMarques($marques)
    {
        return $this->marques = $marques;
    }

    public function setVisible($visible)
    {
        return $this->visible = $visible;
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
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    public function addImage($item)
    {
        //        $this->product[$item->getUrl()] = $item;

        array_push($this->images, $item);
    }

    public function deleteImage($item)
    {
        unset($this->product[$item->getUrl()]);
    }

/////////////////////////////////////////////////////////////
}
