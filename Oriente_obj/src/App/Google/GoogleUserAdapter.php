<?php

namespace App\Google;


class GoogleUserAdapter implements UserInterface
{

    protected $fbuser;


    public function __construct(UserInterface $user){

        $this->fbuser = $user;

    }

    public function getEmail()
    {

        $this->fbuser=getEmail();


    }

    public function setEmail($email)
    {
        $this->fbuser=setEmail($email);

    }

    public function getAge()
    {
        $this->fbuser=getAge();

    }

    public function setAge($age)
    {

        $this->fbuser=setAge($age);

    }

    /**
     * @return UserInterface
     */
    public function getFbuser()
    {
        return $this->fbuser;
    }

    /**
     * @param UserInterface $fbuser
     */
    public function setFbuser($fbuser)
    {
        $this->fbuser = $fbuser;
    }


    /**
     * Je garde la signature de l'ancienne methode getImages de User
     * Elle retourne significativement un tableau d'objet
     *car c'est important si je le traite apres il fau que ce soit la meme chose
     * @return array
     */
    public function getMov(){

        $videos= $this->fbuser->getVideo();

        foreach($videos as $video){

            $tab[]= new Video($video);
        }
        return $tab;
    }
}