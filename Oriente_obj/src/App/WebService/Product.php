<?php

namespace App\WebService;


class Product implements RenderInterface
{

    protected $type;
    /**
     * @var title
     */
    protected $title;

    /**
     * @var description
     */
    protected $description;

    /**
     * @var prix
     */
    protected $prix;



    public function __construct($title,$description,$prix){


        $this->type= "Product";
        $this->title=$title;
        $this->description=$description;
        $this->prix=$prix;


    }
    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    /*********************************************************************************************
     * Method
     ******************************************************************************************/


    /**
     * Fonction pour retourner les details du produit
     * @return string
     */
    public function renderProduct(){

    return array( "title" => $this->title, "type"=>$this->type);

    }


}