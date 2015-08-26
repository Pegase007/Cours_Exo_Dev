<?php


namespace Shop;


class Catalogue
{


    /*****************************************************
     * Set attributes
     ***************************************************/


    /**
     * @var array Category should call all categories in an array. Each category containing its products
     */
    protected $catalogueCategory;

    /*****************************************************
     * Set construction method
     ***************************************************/


    public function __construct(){

        $this->category=array();

    }


    /*****************************************************
     * Getters & Setters
     ***************************************************/


    /**
     * @return array
     */
    public function getCatalogueCategory()
    {
        return $this->catalogueCategory;
    }

    /**
     * @param array $catalogueCategory
     */
    public function setCatalogueCategory($catalogueCategory)
    {
        $this->catalogueCategory = $catalogueCategory;
    }



}