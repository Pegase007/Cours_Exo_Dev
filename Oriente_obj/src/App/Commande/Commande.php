<?php

namespace App\Commande;


class Commande extends AbstractCommandeElt
{


    protected $elements;


    public function addElement(AbstractCommandeElt $element)
    {
        $this->elements[] = $element;
    }

    /**
     * @return mixed
     */
    public function getElements()
    {
        return $this->elements;
    }



    public function render( $object)
    {

        foreach ($object as $obj => $val) {


            return $val;

        }


    }








}