<?php


namespace App\Commercials;


use App\Commercials\Parts\Product;
use App\Declinaison;
use App\Category;
use Lib\Images;

class ProductBuilder implements BuilderInterface
{

    protected $product;

    /**
     * @return mixed
     */
    public function enable()
    {


        $this->product->setVisible('true');
    }

    /**
     * @return mixed
     */
    public function addImages()
    {

        $this->product->setCaracteristiques('images',new Images());

    }

    /**
     * @return mixed
     */
    public function addCategory()
    {

        $this->product->setCaracteristiques("category", new Category("Smartphone", "Tous les smartphones"));

    }

    /**
     * @return mixed
     */
    public function addDeclinaisons()
    {

        $this->product->setCaracteristiques('declinaison',[new Declinaison(),new Declinaison()]);
    }

    /**
     * @return mixed
     */
    public function quantity()
    {
        $this->product->setQuantity(1);
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed
     */
    public function createProduct()
    {
        $this->product= new Product();
    }


}