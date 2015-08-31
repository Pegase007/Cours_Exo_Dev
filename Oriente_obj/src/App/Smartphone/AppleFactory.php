<?php


namespace App\Smartphone;


class AppleFactory extends AbstractFactoryMethod{



    public function  createSmartphone($coque,$couleur, $capacity, $poid)
    {

        switch($capacity){


            case 16 :
                return new Iphone4S($couleur, $capacity, $poid);
                break;

            case 32 :
                return new Iphone5S($couleur, $capacity, $poid);
                break;
            default:
                throw new \Exception("La {$capacity} n'est pas reconnue");
        }
    }


}