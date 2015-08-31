<?php

namespace App\Commercials\Parts;


abstract class AbstractProduct
{

    /**
     * @var tableau d'objets qui va stocker toutes les caracterisques
     */
    protected $data;

    /**
     * @param $key
     * @param $value
     */
    public function setCaracteristiques($key,$value){

        $this->data[$key] = $value;


    }

}