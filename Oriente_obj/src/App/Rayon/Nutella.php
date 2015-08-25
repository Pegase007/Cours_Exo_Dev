<?php



namespace App\Rayon;

use App\Product;

final class Nutella extends Product{





    protected $volume;

    public function __construct($volume =250){


        return $this->volume=$volume;


    }

}






?>