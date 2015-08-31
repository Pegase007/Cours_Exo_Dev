<?php
/**
 * Created by PhpStorm.
 * User: Thais
 * Date: 30/08/2015
 * Time: 11:45
 */

namespace App\Commande;


class User extends AbstractCommandeElt
{

    protected $user;


    public function render( $object)
    {
        return $this->user = $object;
    }


}