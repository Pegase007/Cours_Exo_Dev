<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/08/15
 * Time: 10:32
 */

namespace App\Smartphone;


abstract class AbstractSony implements SmartphoneInterface
{
    /**
     * @var couleur
     */
    protected $couleur;
    /**
     * @var capacity
     */
    protected $capacity;
    /**
     * @var poid
     */
    protected $poid;

    /**
     * @param $couleur
     * @param $capacity
     * @param $poid
     */
    public function __construct($couleur,$capacity,$poid){

        $this->couleur=$couleur;
        $this->capacity=$capacity;
        $this->poid=$poid;


    }

    /**
     * @return couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param couleur $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return poid
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * @param poid $poid
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;
    }




    /**
     * @param $color
     */
    public function  setColor($color)
    {
        // TODO: Implement setColor() method.
    }

    /**
     * @param $capacity
     */
    public function setCapacity($capacity)
    {
        // TODO: Implement setCapacity() method.
    }

    /**
     * @param $weight
     */
    public function setWeight($weight)
    {
        // TODO: Implement setWeight() method.
    }

}