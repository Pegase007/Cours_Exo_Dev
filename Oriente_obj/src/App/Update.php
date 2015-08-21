<?php


namespace App;

trait Update{


    /**
     * @param $update
     */

    public function setUpdate($update){

        $this->update = $update;

    }


    /**
     * From an array of values for a crewmember
     *
     * @param array $array
     * @param $tab
     */

    public function getUpdate(Array $array,$tab,$id){

//        $id = $array['id'];
        $firstname = $array['firstname'];
        $lastname = $array['lastname'];
        $dob = $array['dob'];
        $biography = $array['biography'];
        $image = $array['image'];

        $stmt = $this->connect()->prepare('UPDATE '.$tab.' SET  id = :id, firstname = :firstname,lastname = :lastname, dob = :dob, biography = :biography, image = :image  WHERE id='.$id);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':biography', $biography);
        $stmt->bindParam(':image', $image);
        $stmt->execute();




    }




}








?>