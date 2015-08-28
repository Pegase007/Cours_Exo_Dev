<?php

namespace App\WebService;


class Marque implements RenderInterface
{

    /**
     * @var type
     */
    protected $type;
    /**
     * @var title
     */
    protected $title;

    /**
     * @var description
     */
    protected $reference;





    public function __construct($title,$reference){


        $this->title=$title;
        $this->reference=$reference;
        $this->type= "Marque";


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


    /*********************************************************************************************
     * Method
     ******************************************************************************************/


    /**
     * Fonction pour retourner les details du produit
     * @return string
     */
    public function renderProduct(){

    return array( "title" => $this->title, "type" => $this->type);

    }


}