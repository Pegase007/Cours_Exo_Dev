<?php

namespace App\Commercials;


interface BuilderInterface
{

    /**
     * @return mixed
     */
    public function enable();

    /**
     * @return mixed
     */
    public function addImages();

    /**
     * @return mixed
     */
    public function addCategory();

    /**
     * @return mixed
     */
    public function addDeclinaisons();

    /**
     * @return mixed
     */
    public function quantity();

    /**
     * @return mixed
     */
    public function getProduct();

    /**
     * @return mixed
     */
    public function createProduct();




}