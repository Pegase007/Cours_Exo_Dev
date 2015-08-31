<?php


namespace App\Export;


/**
 * Class BoulangerFactory
 * @package App\Export
 */
class BoulangerFactory extends AbstractFactory
{
    /**
     * Handle creation of Product
     * @return mixed
     */
    public function createProduct($title, $prix, $reference)
    {
        return new Boulanger\Product($title,$prix,$reference);
    }

    /**
     * Handle creation of Category
     * @return mixed
     */
    public function createCategory($title, $description)
    {
        return new Boulanger\Category($title,$description);
    }




    public function createLabel($nom,$title, $description)
    {
        return new Boulanger\Marque($nom,$title,$description);
    }


}