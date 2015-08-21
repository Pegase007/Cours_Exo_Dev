<?php

namespace App;

class AbstractCrew{


    protected $id;
    protected $firstname;
    protected $lastname;
    protected $dob;
    protected $biography;
    protected $image;


    /**
     * DATABASE CONNECTION
     */
    const DBNAME = 'cinecanicule';
    const LOGIN = 'root';
    const MDP = 'troiswa';
    const CHARSET = 'utf8';
    const HOST = 'localhost';



    /** CONSTRUCT BASE */
    public function __construct()
    {
        $this->conection = $this->connect(); // appel une methode dans une autre connect()


    }


    /** GETTER AND SETTERS */


    /**
     * @return mixed
     */
    public function getId($tab)
    {
        $query = $this->connect()->query('SELECT id FROM'.$tab);

        return  $query->fetchAll();
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        $query = $this->connect()->query('SELECT firstname FROM'.$tab);

        return  $query->fetchAll();
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        $query = $this->connect()->query('SELECT lastname FROM'.$tab);

        return  $query->fetchAll();
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        $query = $this->connect()->query('SELECT dob FROM'.$tab);

        return  $query->fetchAll();
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getBiography()
    {
        $query = $this->connect()->query('SELECT biography FROM'.$tab);

        return  $query->fetchAll();
    }

    /**
     * @param mixed $biography
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        $query = $this->connect()->query('SELECT image FROM'.$tab);

        return  $query->fetchAll();
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

/**
 * METHODS
 */

    public function connect()
    {
        return new \PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME.';charset='.self::CHARSET, self::LOGIN, self::MDP);
//retourne un objet PDO
    }









}






?>