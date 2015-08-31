<?php
/**
 * Created by PhpStorm.
 * User: Thais
 * Date: 30/08/2015
 * Time: 11:45
 */

namespace App\Commande;


class Reference extends AbstractCommandeElt
{

    protected $reference;

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }



    public function render( $object)
    {
        $string = "";
        $chaine = "abcdefghijklmnpqrstuvwxy123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i < $object; $i++) {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $this->reference = $string;
    }


}