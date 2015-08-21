<?php

namespace App;

abstract class Catalogue
{
    protected $name;
    protected $marque;
    protected $ndd;

    public function getName()
    {
        return $this->name;
    }

    /**
     * Abstract method
     * Une methode abstraite est une methode qui doit etre redéfinie par les classes filles.
     */
    abstract public function __toString();
}
