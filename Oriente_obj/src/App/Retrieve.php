<?php


namespace App;

trait Retrieve{


    /**
     * @param $retrieve
     */

    public function setRetrieve($retrieve){

        $this->retrieve = $retrieve;

    }
    /**
     * Method to retrieve from a chosen table a chosen variable
     * @param Select $val
     * @param $tab
     * @return mixed
     */

    public function getRetrieve($tab,$where,$val){

           $query = $this->connect()->query("SELECT firstname, lastname, dob, biography, image
                                            FROM  ".$tab." WHERE ".$where."='".$val."'");

            $result=$query->fetch();

        return "firstname: " .$result['firstname']."<br> lastname: ".$result['lastname']."<br> dob:".$result['dob']."<br> biography: ".$result['biography']."<br> image: ".$result['image'];

    }



}







?>

