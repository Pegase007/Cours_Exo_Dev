<?php


namespace App;


interface CrudInterface{




    public function getCreate(Array $array, $tab);

    public function  getRetrieve($tab,$where,$val);

    public function getUpdate(Array $array,$tab,$id);

    public function getDelete($tab, $id);


}




?>