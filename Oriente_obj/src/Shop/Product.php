<?php

namespace Shop;


class Product
{

    /*****************************************************
     * Set attributes
     ***************************************************/
    /**
     * @var $productName
     */
    protected $productName;
    /**
     * @var $productRefereces is an attributed number to a particular product
     */
    protected $productReference;
    /**
     * @var $BasePrice is the base price before reduction and taxes
     */
    protected $BasePrice;
    /**
     * @var $FinalPrice is the last price with reductions and taxes included
     */
    protected $FinalPrice;
    /**
     * @var $productQuantity indicates the number of products available
     */
    protected $productQuantity;
    /**
     * @var $productState indicates the state of the product
     */
    protected $productState;



    /*****************************************************
     * Set construction method
     ***************************************************/

    public function __construct(){




    }


    /*****************************************************
     * Getters & Setters
     ***************************************************/


    /**
     * @return is
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * @param is $productReference
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;
    }

    /**
     * @return is
     */
    public function getBasePrice()
    {
        return $this->BasePrice;
    }

    /**
     * @param is $BasePrice
     */
    public function setBasePrice($BasePrice)
    {
        $this->BasePrice = $BasePrice;
    }

    /**
     * @return is
     */
    public function getFinalPrice()
    {
        return $this->FinalPrice;
    }

    /**
     * @param is $productFinalPrice
     */
    public function setFinalPrice($FinalPrice)
    {
        $this->FinalPrice = $FinalPrice;
    }

    /**
     * @return indicates
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * @param indicates $productQuantity
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;
    }

    /**
     * @return indicates
     */
    public function getProductState()
    {
        return $this->productState;
    }

    /**
     * @param indicates $productState
     */
    public function setProductState($productState)
    {
        $this->productState = $productState;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return  parent::getCategoryName();

    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {

        $this->categoryName = $categoryName;
    }





}