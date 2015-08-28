<?php

namespace App\WebService;


class RenderInJson extends AbstractDecorator
{


    public function renderProduct(){


        $output= $this->wrapped->renderProduct();

        return json_encode($output);

    }

}