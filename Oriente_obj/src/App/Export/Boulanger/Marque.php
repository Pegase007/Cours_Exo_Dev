<?php

namespace App\Export\Boulanger;


use App\Export\AbstractMarque as BaseProduct;

class Marque extends BaseProduct
{



    public function vente()
    {

        /**
         * Affiche le produit chez Darty
         * return String
         */
        return "Le categorie chez Boulanger est " . $this->getTitle();

    }

}
