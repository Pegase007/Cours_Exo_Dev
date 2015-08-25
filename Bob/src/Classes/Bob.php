<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 25/08/15
 * Time: 18:48
 */

namespace Classes;


class Bob
{

    protected $chanson;
    protected $name;
    protected $city;

    /**
     * @return mixed
     */
    public function getChanson()
    {
        return $this->chanson;
    }

    /**
     * @param mixed $chanson
     */
    public function setChanson($chanson)
    {
        $this->chanson = $chanson;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }


    public function chant(){

        return $this->name . " chante ".$this->chanson." à ".$this->city;


    }




}