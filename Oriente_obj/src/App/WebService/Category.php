<?php

namespace App\WebService;


class Category implements RenderInterface
{

    /**
     * @vartype
     */
    protected $type;
    /**
     * @var title
     */
    protected $title;

    /**
     * @var description
     */
    protected $description;

    protected $visible;






    public function __construct($title,$description,$visible){

        $this->type= "Category";
        $this->title=$title;
        $this->description=$description;
        $this->visible=$visible;



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

        return array( "title" => $this->title, "type"=>$this->type);

    }


}