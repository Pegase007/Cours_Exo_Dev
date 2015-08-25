<?php

namespace App;


trait Delete{


    /**
     * @param $delete
     */
    public function setDelete($delete){

        $this->delete = $delete;

    }


    /**
     * FROM THE ID OF A LINE DELETE IT
     * @param $tab
     * @param $id
     * @param $firstname
     * @param $lastname
     * @param $email
     */

    public function getDelete($tab, $id )
    {


            $stmt = $this->connect()->prepare('DELETE FROM '.$tab.' WHERE id='.$id);

            $stmt->execute();

    }






}




?>