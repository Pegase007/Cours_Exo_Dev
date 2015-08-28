<?php


namespace App\Smartphone;


class SonyFactory extends AbstractFactoryMethod{



    public function  createSmartphone($coque,$couleur, $capacity, $poid)
    {

        switch($capacity){


            case 16 :
                return new XperiaZ($couleur, $capacity, $poid);
                break;

            case 32 :
                return new XperiaZ2($couleur, $capacity, $poid);
                break;
            default:
                throw new \Exception("La {$capacity} n'est pas reconnue");
        }
    }


}