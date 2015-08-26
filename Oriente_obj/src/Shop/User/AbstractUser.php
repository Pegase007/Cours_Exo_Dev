<?php


namespace Shop\User;


abstract class AbstractUser
{
    /*****************************************************
     * Set attributes
     ***************************************************/

    /**
     * @var $userFirstName
     */
    protected $userFirstName;
    /**
     * @var $userLastName
     */
    protected $userLastName;
    /**
     * @var $userAdress
     */
    protected $userAdress;
    /**
     * @var $userEmail
     */
    protected $userEmail;
    /**
     * @var array $userOrders should include all previous and actual orders from the client
     */
    protected $userOrders;



    /*****************************************************
     * Set construction method
     ***************************************************/


    public function __construct(){

        $this->userOrders=array();

    }


    /*****************************************************
     * Getters & Setters
     ***************************************************/


    /**
     * @return mixed
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @param mixed $userFirstName
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @param mixed $userLastName
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
    }

    /**
     * @return mixed
     */
    public function getUserAdress()
    {
        return $this->userAdress;
    }

    /**
     * @param mixed $userAdress
     */
    public function setUserAdress($userAdress)
    {
        $this->userAdress = $userAdress;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return array
     */
    public function getUserOrders()
    {
        return $this->userOrders;
    }

    /**
     * @param array $userOrders
     */
    public function setUserOrders($userOrders)
    {
        $this->userOrders = $userOrders;
    }








}