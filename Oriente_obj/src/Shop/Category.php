<?php

namespace Shop;


class Category
{

    /*****************************************************
     * Set attributes
     ***************************************************/

    protected $categoryName;

    protected $categoryProducts;


    /*****************************************************
     * Set construction method
     ***************************************************/


    public function __construct(){

        $this->categoryProducts=array();


    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }



    /**
     * @return array
     */
    public function getCategoryProducts()
    {
        return $this->categoryProducts;
    }

    /**
     * @param array $categoryProducts
     */
    public function setCategoryProducts($categoryProducts)
    {
        $this->categoryProducts = $categoryProducts;
    }




    /*****************************************************
     * Method
     ***************************************************/


    /**
     * addProduct allows to add object from class Product to OrderProducts attribute.
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        array_push( $this->categoryProducts,$product);
    }

    /**
     * delProduct allows to remove object from class Product from OrderProducts attribute array.
     * @param Product $product
     */
    public function delProduct(Product $product)
    {
        unset($this->categoryProducts,$product);
    }



}