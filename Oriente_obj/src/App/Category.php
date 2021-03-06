<?php

namespace App;

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


class Category
{
    use \App\Position;


    protected $title;
    protected $description;
    protected $visible;
    protected $products = array();

    public function __construct()
    {
//        $this->visible = $etat;
        $this->products = array();
        $this->beautiful = new Beautiful(); //00: agrégation
        $this->products = array();


//        if (count($products)<2){
//
//            throw new OutOfStockException( $this." n'a aucun produit");
//
//        }
//        $this->products = $products;

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->beautiful->title($this->title);
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
        return $this->beautiful->paragraph($this->description);
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
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param mixed $visible
     */
    public function setVisible($visible)
    {

        if(!is_bool($visible)){

            throw new \Exception("Attention la visibilité n'es pas bouléenne");

        }elseif( $visible == false){

            throw new OutOfStockException( $this );
        }
        $this->visible = $visible;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts(Array $products=array())
    {

        if (count($products)<2){

            throw new OutOfStockException( $this." n'a aucun produit");

        }
        $this->products = $products;
    }

//Injection de dependance
//    public function __construct($visible= 1, $products = array()){
//        $this->visibility = $visible;
//        $this->products = $products;
//
//
//    } >>> $categorie1 =  new Category(1, array($produit1,$produit2));


//ajouter retirer produit
    public function ajoutProduit(Product $product)
    {
        $this->products[$product->getTitle() ] = $product;
    }

    /**
     * Méthode pour ajouter des produits dans la catégorie.
     *
     * @param Product $product
     *
     * @return $this
     */
//    public function addProduct (Product $product)
//    {
//        array_push($this->products, $product);
//        return $this;
//    }


    public function removeProduit(Product $product)
    {
        unset($this->products[$product->getTitle()]);
    }

    /*
     * Méthode pour supprimer des produits dans la catégorie
     * @param $product
     * @return $this
     */
//    public function deleteProduct ($product)
//    {
//        unset($this->products[$product]);
//        return $this;
//    }

//    public function hasProduit(Product $product)
//    {
//
//       if( in_array($this->products[$product->getTitle()], products)){
//
//
//        echo $this->products[$product->getTitle()]."exists";
//
//       }
//
//
//    }


    public function __toString(){

        if($this->getTitle()==''){
            return " ";
        }else{
           return $this->getTitle();
        }

    }



}
