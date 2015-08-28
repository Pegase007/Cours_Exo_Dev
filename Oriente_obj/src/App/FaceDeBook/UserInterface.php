<?php

namespace App\FaceDeBook;


interface UserInterface
{

    public function getEmail();
    public function setEmail($email);

    public function getAge();
    public function setAge($age);

}