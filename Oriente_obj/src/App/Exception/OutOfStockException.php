<?php
// norme PSR
namespace App\Exception;

/**
 * Class AvailableException.
 */
class OutOfStockException extends \Exception
{

    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return "Plus de stock: ".$this->message;
    }






}