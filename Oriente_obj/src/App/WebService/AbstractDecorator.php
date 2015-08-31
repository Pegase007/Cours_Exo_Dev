<?php

namespace App\WebService;


abstract class AbstractDecorator implements RenderInterface
{



    protected $wrapped;

    /**
     * Stocker l'objet envoyé en parametres
     * @param $wrapped
     */
    public function __construct(RenderInterface $wrapped){


        $this->wrapped =$wrapped;


    }
}