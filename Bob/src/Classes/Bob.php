<?php


namespace Classes;


class Bob
{

    /**
     * @var
     */
    protected $chanson;
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $metier;
    /**
     * @var int
     */
    protected $age;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var
     */
    protected $dob;

    /**
     * @param $nom
     * @param int $age
     * @param string $email
     * @throws \Exception
     */
    public function __construct($nom, $age=20, $email=""){

    $this->name=$nom;
    $this->age=$age;
    $this->email=$email;

    if(!is_int($age) || $age > 100){


        throw new \Exception('Age non permis');
    }


}
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

    /**
     * @return mixed
     */
    public function getMetier()
    {
        return $this->metier;
    }

    /**
     * @param mixed $metier
     */
    public function setMetier($metier)
    {
        $this->metier = $metier;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob(\DateTime $datetime)
    {
        $this->dob = $datetime;
    }


    /**
     * @return string
     */
    public function chant(){

        return $this->name . " chante ".$this->chanson." à ".$this->city;


    }

    /**
     * @return string
     */
    public function travaille(){

        return "Bob travaille";


    }

    /**
     * @param string $scene
     * @param array $cahnson
     * @return string
     */
    public function concert($scene="Zenith", $cahnson=array()){

        return "Il chante au ".$scene." les chansons ".implode(',',$chanson)."de Bob Dylan...";

    }

    /**
     * @param Bob $bob
     * @return string
     */
    public function featuring(Bob $bob){


        return $this->nom." chante avec ".$bob->getNom();

    }



}