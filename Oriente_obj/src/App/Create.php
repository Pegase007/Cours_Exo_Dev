<?php


namespace App;

trait Create{

    /**
     * @param $create
     */

    public function setCreate($create){

        $this->create = $create;

    }


    /**
     * Create a new line in DataBase from a chosen array on a chosen table
     * @param array $array
     * @param $tab
     */

    public function getCreate(Array $array, $tab)
    {

        $firstname = $array['firstname'];
        $lastname = $array['lastname'];
        $dob = $array['dob'];
        $biography = $array['biography'];
        $image = $array['image'];

        $stmt = $this->connect()->prepare('INSERT INTO '.$tab.' (firstname,lastname,dob,biography,image) VALUES ( ?, ?, ?, ?, ?)');
        $stmt->bindParam(1, $firstname);
        $stmt->bindParam(2, $lastname);
        $stmt->bindParam(3, $dob);
        $stmt->bindParam(4, $biography);
        $stmt->bindParam(5, $image);


        $stmt->execute();
    }
}






?>