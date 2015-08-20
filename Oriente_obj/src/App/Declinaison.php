<?php

namespace App;

use \App\Product;
use \App\Title;
use \App\Visible;

class Declinaison extends Product implements Title{

    protected $poid;
    protected $hauteur;
    protected $profondeur;
    protected $compteurImage;
    protected $images;



    public function __construct(){

        $this->compteurImage=0;
        $this->images=array();
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



    /**
     * @return mixed
     */
    public function getCompteurImage()
    {
        return $this->compteurImage;
    }

    /**
     * @param mixed $compteurImage
     */
    public function setCompteurImage($compteurImage)
    {
        $this->compteurImage = $compteurImage;
    }


    /**
     * @return mixed
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * @param mixed $poid
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;
    }

    /**
     * @return mixed
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * @param mixed $hauteur
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    /**
     * @return mixed
     */
    public function getProfondeur()
    {
        return $this->profondeur;
    }

    /**
     * @param mixed $profondeur
     */
    public function setProfondeur($profondeur)
    {
        $this->profondeur = $profondeur;
    }

    public function dimension()
    {
        return "Poids : ".$this->getPoid()." Haut. : ".$this->getHauteur()." Prof. : ".$this->getProfondeur();
    }



    /**
     *Methodes à implementer
     */
    public function getParent(Visible $elt)
    {
        return "La catégorie parente est : ".$elt->getTitle();
    }






    public function addImage($item) {
        array_push($this->images, $item);
       return $this->compteurImage ++;
    }

    public function deleteImage($item)
    {
        unset($this->product[$item->getUrl()]);

         $compteurImage --;
    }



}


?>