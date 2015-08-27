<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/08/15
 * Time: 17:03
 */

namespace App\Export;


abstract class AbstractMarque
{


    protected $nom;
    protected $description;
    protected $visibility;



    public function  __construct($nom,$title,$description){

        $this->now->$nom;
        $this->title = $title;
        $this->description= $description;


    }




}