<?php

namespace App\FaceDeBook;



class User implements UserInterface
{


    protected $email;
    protected $age;
    protected $video;


    public function addVideo(Video $video){

        $this->video[]=$video;

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
    public function getVideo()
    {
        return $this->video;
    }





}