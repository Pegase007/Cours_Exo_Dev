<?php

namespace App\Export\Darty;


use App\Export\AbstractCategory as BaseProduct;

class Category extends BaseProduct
{


    public function vente()
    {

        /**
         * Affiche le produit chez Darty
         * return String
         */
        return "Le categorie chez Darty est " . $this->getTitle();

    }

}
