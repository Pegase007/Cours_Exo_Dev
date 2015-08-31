<?php

namespace App\Commande;


class Product extends AbstractCommandeElt
{

    protected $product;

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }


    public function render( $object)
    {
        return $this->product = $object;
    }


}