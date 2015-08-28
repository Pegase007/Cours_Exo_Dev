<?php

namespace App\FaceDeBook;

/**
 * Class FbUser
 * @package App\FaceDeBook
 */
class FbUser implements UserInterface
{
    /**
     * @var
     */
    protected $email;
    /**
     * @var
     */
    protected $age;

    /**
     * @return array
     */
    public function connect(){

        return array("email"=>$this->email,
                    "age"=>$this->age);

    }

    /**
     * @return array
     */
    public function getPhotos(){

        return array(

            "http://3.bp.blogspot.com/-bGT55vQfxts/U5esziUqkDI/AAAAAAAAWnM/IFtYqeUbRgE/s1600/couverture-facebook-mots-de-ben_02%252B%252525284%25252529.jpg",
            "http://img15.hostingpics.net/pics/3034421187.jpg",
            "http://couverturefacebook.com/wp-content/uploads/2012/citation-03/Citation-1-300x110.jpg",
            "http://couverturefacebook.com/wp-content/uploads/2012/avril-04/couverture-facebook-citation-41.jpg"


        );


    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {

        return $this->age;

    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age=$age;
    }



}