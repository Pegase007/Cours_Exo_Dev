<?php



namespace App;

trait Position{


    protected $position;

    public function setPosition($position){
        $this->position = $position;
    }

    public function getPosition(){
        return $this->position;
    }


}






?>