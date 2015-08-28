<?php


namespace App\Smartphone;

/**
 * Class AbstractFactoryMethod
 * @package App\Smartphone
 */
abstract class AbstractFactoryMethod
{

    abstract public function  createSmartphone($coque,$couleur,$capacité,$poid);



}