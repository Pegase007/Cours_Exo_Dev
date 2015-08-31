<?php

namespace App\WebService;


class RenderInBootstrap extends AbstractDecorator
{



    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();

        return "<div class='alert alert-success'>".$output."</div>";

        }







}