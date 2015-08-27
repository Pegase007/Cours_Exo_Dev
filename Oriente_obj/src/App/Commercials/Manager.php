<?php

namespace App\Commercials;

use App\Category;

class Manager
{

    public function build(BuilderInterface $builder){


        $builder->createProduct();
        $builder->addCategory();
        $builder->addImages();
        $builder->enable();
        $builder->addDeclinaisons();
        $builder->quantity();


        return $builder->getProduct();


    }


}