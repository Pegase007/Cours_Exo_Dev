<?php

namespace App;
use \App\User;

class Administrateur extends User{


    /**
     * Administrer un utilisateur
     * @param \App\User $user
     * @return string
     */
    public function administrer(User $user){

        return "<br> L'administrateur ". $this->getNom() ." a administré l'utilisateur ".$user->getNom();

    }

    /**
     * Inscription à la newsletter selon age
     * @param \App\User $user
     * @return string
     */
public function inscriptionNws(User $user){

    if ($user->age<18){

        return "Vous avez: ".$user->age."ans. Voici la newsletter pour les moins de 18 ans";
    }
    else{

        return "Vous avez: ".$user->age."ans. Voici la newsletter pour plus de 18 ans";
    }

}




}



?>