<?php


namespace App\Export;

/**
 * Class AbstractFactory
 * @package App\Export
 */
abstract class AbstractFactory
{

    /**
     * Handle creation of Product
     * @return mixed
     */
    abstract public function createProduct($title,$prix,$reference);

    /**
     * Handle creation of Category
     * @return mixed
     */
    abstract public function createCategory($title,$description);

    /**
     * Handle creation of Label
     * @return mixed
     */
    abstract public function createLabel($nom,$title,$description);

}