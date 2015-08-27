<?php

namespace App\Export\Boulanger;


use App\Export\AbstractProduct as BaseProduct;

class Product extends BaseProduct {


    public function vente(){

        /**
         * Affiche le produit chez Darty
         * return String
         */
        return "Le produit chez Boulanger est ". $this->getTitle();

    }


}




?>