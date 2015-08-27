<?php

namespace App\Export\Fnac;


use App\Export\AbstractProduct as BaseProduct;

class Product extends BaseProduct  {




    public function vente(){

        /**
         * Affiche le produit chez Darty
         * return String
         */
        return "Le produit chez Fnac est ". $this->getTitle();

    }


}




?>