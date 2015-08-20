<?php

namespace Lib;

class Beautiful {

    public function paragraph($paragraph) {
        return "<p>". $paragraph ."</p>";
    }

    public function title($title) {
        return "<h1>". $title ."</h1>";
    }
//    public function subtitle($subtitle) la signature de la methode

//{
//return "<h3>". $subtitle ."</h3>";
//} le corps de la methode

    public function subtitle($subtitle) {
        return "<h3>". $subtitle ."</h3>";
    }


    public function tab(array $tab){
        $html = "<table>";


        foreach($tab as $elt){
            $html  .= "<tr><td>".$elt->getTitle()."</td></tr>
            <tr><td> </td><td>".$elt->getDescription() ."</td></tr>
            <tr><td> </td><td>".$elt->getPrix() ."</td></tr>
            <tr><td> </td><td>".$elt->getReference() ."</td></tr>
            <tr><td> </td><td>".$elt->getCouleur() ."</td></tr>
            <tr><td> </td><td>".$elt->getDimension() ."</td></tr>
            <tr><td> </td><td>".$elt->getFonction() ."</td></tr>
            <tr><td> </td><td>".$elt->getAtouts() ."</td></tr>
            <tr><td> </td><td>".$elt->getUrl() ."</td></tr>
            <tr><td> </td><td>".$elt->getVisible() ;

        }

        $html .= "</table>";

        return $html;
    }


    public function  displayImage($tab, $class){

        return '<img src="' .$elt . '" class="' . $class . '" width=150px >';
    }

    /**
     *
     * @param $url
     * @param string $class
     * @return string
     */
    public function image($url, $class="img-rounded") {

        return "<img class='".$class."' src='". $url ."'> ";
    }


    /**
     * Allows to wrap a video 'url' with a div class "embed".
     * @param $url
     * @return string
     */
    public function embed($url){

        return '<div class="embed-responsive embed-responsive-16by9">
          '.$url.'
        </div>';

    }




}




?>