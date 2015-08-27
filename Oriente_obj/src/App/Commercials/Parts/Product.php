<?php


namespace App\Commercials\Parts;

/**
 * Class Product
 * @package App\Commercials\Parts
 */
class Product extends AbstractProduct
{


    protected $quantity;
    protected $visible;

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param mixed $visible
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    }







}