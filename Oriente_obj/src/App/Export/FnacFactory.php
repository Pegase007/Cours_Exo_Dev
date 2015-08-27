<?php


namespace App\Export;


/**
 * Class BoulangerFactory
 * @package App\Export
 */
class FnacFactory extends AbstractFactory
{
    /**
     * Handle creation of Product
     * @return mixed
     */
    public function createProduct($title, $prix, $reference)
    {
        return new Fnac\Product($title,$prix,$reference);
    }

    /**
     * Handle creation of Category
     * @return mixed
     */
    public function createCategory($title, $description)
    {
        return new Fnac\Category($title,$description);
    }

    public function createLabel($nom,$title, $description)
    {
        return new Fnac\Marque($nom,$title,$description);
    }

}