<?php


namespace App\Smartphone;




class SamsungFactory extends AbstractFactoryMethod
{
    public function  createSmartphone($coque,$couleur, $capacity, $poid)
    {

        switch($capacity){


            case 32:
                return new GalaxyNote( $couleur, $capacity, $poid);
                break;

            case 16:
                return new GalaxyS($couleur, $capacity, $poid);
                break;
            default:
                throw new \Exception("La {$capacity} n'est pas reconnue");
        }
    }


}