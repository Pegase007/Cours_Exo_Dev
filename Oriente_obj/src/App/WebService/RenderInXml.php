<?php

namespace App\WebService;


class RenderInXml extends AbstractDecorator
{


    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();
        $doc = new \DOMDocument();
        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }
        return $doc->saveXML();
    }

}