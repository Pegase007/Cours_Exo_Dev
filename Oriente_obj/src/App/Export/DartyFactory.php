<?php


namespace App\Export;

/**
 * Class DartyFactory
 * @package App\Export
 */
class DartyFactory extends AbstractFactory
{
    /**
     * Handle creation of Product
     * @return mixed
     */
    public function createProduct($title, $prix, $reference)
    {
       return new Darty\Product($title,$prix,$reference);
    }

    /**
     * Handle creation of Category
     * @return mixed
     */
    public function createCategory($title, $description)
    {
       return new Darty\Category($title,$description);
    }

    /**
     * Handle creation of Label
     * @return mixed
     */
    public function createLabel($nom,$title, $description)
    {
        return new Darty\Marque($nom,$title,$description);
    }


}