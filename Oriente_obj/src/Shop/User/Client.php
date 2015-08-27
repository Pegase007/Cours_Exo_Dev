<?php


namespace Shop\User;

use Shop\User\AbstractUser;

class Client extends AbstractUser
{

    /*****************************************************
     * Attributes set in AbstractUser

    *    protected $userFirstName;
    *    protected $userLastName;
    *    protected $userAdress;
    *    protected $userEmail;
    *    protected $userOrders;
     ***************************************************/


    public function updateAccount($attribute,$modification)
    {

        return $attribute = $modification;
    }


}