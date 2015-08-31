<?php

namespace App\WebService;


class RenderInBold extends AbstractDecorator
{



    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();

            return '<strong>'.$output['type'].' '.$output['title'].' </strong>';



    }




}