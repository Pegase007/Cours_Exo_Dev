<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/08/15
 * Time: 16:27
 */

namespace App\FaceDeBook;

use Lib\Images;

class User
{


    protected $email;
    protected $age;
    protected $images;


    public function addImage(Images $image){

        $this->images[]=$image;

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
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }



}