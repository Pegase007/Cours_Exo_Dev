<?php


namespace Shop;

use \Shop\Category;

class Order
{

    /*****************************************************
     * Set attributes
     ***************************************************/



    /**
     * @var $orderReference
     */
    protected $orderReference;

    /**
     * @var $client should call out to the client who is creating the order
     */
    protected $orderClient;
    /**
     * @var array products should collect all the products chosen by the user
     */

    protected $orderProducts;
    /**
     * @var $deliveryDate should indicate the date the client has chosen to be delivered or the date of possible delivery
     */
    protected $orderDeliveryDate;
    /**
     * @var $orderDate should indicate the date the order was validated
     */
    protected $orderDate;

    /**
     * @var $BasePrice is the original price
     */
    protected $BasePrice;

    /**
     * @var $FinalPrice is the price after adding taxes and reductions
     */
    protected $FinalPrice;
    /**
     * @var $orderProductQuantity is the total number of articles in the order
     */
    protected $orderProductQuantity;
    /**
     * @var $orderState indicates the state of the order
     */
    protected $orderState;

    /**
     * @var $payment should indicate the type of payment
     */

    protected $orderPayment;


    /*****************************************************
     * Set construction method
     ***************************************************/

    public function __construct(){

        $this->orderProducts=array();
        $this->orderDeliveryDate= new \DateTime("+ 2 days");
        $this->orderDate = new \DateTime("now");
        $this->BasePrice = 0;
        $this->FinalPrice =0;
        $this->orderProductQuantity=0;
        $this->orderState=0;
        $this->orderPayment=false;


    }


    /*****************************************************
     * Getters & Setters
     ***************************************************/

    /**
     * @return mixed
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param mixed $orderReference
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
    }

    /**
     * @return should
     */
    public function getOrderClient()
    {
        return $this->orderClient;
    }

    /**
     * @param should $orderClient
     */
    public function setOrderClient($orderClient)
    {
        $this->orderClient = $orderClient;
    }

    /**
     * @return array
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param array $orderProducts
     */
    public function setOrderProducts($orderProducts)
    {
        $this->orderProducts = $orderProducts;
    }

    /**
     * @return should
     */
    public function getOrderDeliveryDate()
    {
        return $this->orderDeliveryDate;
    }

    /**
     * @param should $orderDeliveryDate
     */
    public function setOrderDeliveryDate($orderDeliveryDate)
    {
        $this->orderDeliveryDate = $orderDeliveryDate;
    }

    /**
     * @return should
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param should $orderDate
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
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
    public function setBasePrice()
    {
        foreach($this->getOrderProducts() as $price){

            $this->BasePrice= $this->BasePrice + $price->getBasePrice();
        }

    }

    /**
     * @return is
     */
    public function getFinalPrice()
    {
        return $this->FinalPrice;
    }

    /**
     * @param is $finalPrice
     */
    public function setFinalPrice()
    {
        foreach($this->getOrderProducts() as $price){

            $this->FinalPrice= $this->FinalPrice + $price->getFinalPrice();
        }
    }

    /**
     * @return is
     */
    public function getOrderProductQuantity()
    {
        return count($this->orderProducts);
    }

    /**
     * @param is $orderProductQuantity
     */
    public function setOrderProductQuantity()
    {
        $this->orderProductQuantity = count($this->orderProducts);
    }

    /**
     * @return indicates
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param indicates $orderState
     */
    public function setOrderState($orderState)
    {
        $this->orderState = $orderState;
    }

    /**
     * @return should
     */
    public function getOrderPayment()
    {
        return $this->orderPayment;
    }

    /**
     * @param should $orderPayment
     */
    public function setOrderPayment($orderPayment)
    {
        $this->orderPayment = $orderPayment;
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

        array_push( $this->orderProducts,$product);
    }

    /**
     * delProduct allows to remove object from class Product from OrderProducts attribute array.
     * @param Product $product
     */
    public function delProduct(Product $product)
    {
        unset($this->orderProducts,$product);
    }



}