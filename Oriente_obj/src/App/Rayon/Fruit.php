<?php


namespace App\Rayon;


use App\Product;

final class Fruit extends Product{


    protected $provenance;

    public function __construct($provenance="Madagascar"){


         $this ->provenance = $provenance;


    }







}





?>