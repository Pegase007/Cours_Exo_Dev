<?php


namespace Shop\Commercial;


trait CodeGenerator
{


    /*****************************************************
     * Set attributes
     ***************************************************/


    /**
     * @var generateur de codePromo
     */
    protected $promoCode;


    /*****************************************************
     * Getters & Setters
     ***************************************************/


    /**
     * @return generateur
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * Function setPromoCode Allows to generate a promotional code from a given length
     */
    public function setPromoCode($promoCodeLength)
    {
        $string = "";
        $chaine = "abcdefghijklmnpqrstuvwxy123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$promoCodeLength; $i++) {
            $string .= $chaine[rand()%strlen($chaine)];
        }
        $this->promoCode= $string;
    }














}