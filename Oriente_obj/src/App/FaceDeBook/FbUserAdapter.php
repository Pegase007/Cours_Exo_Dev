<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/08/15
 * Time: 15:43
 */

namespace App\FaceDeBook;

use Lib\Images;

class FbUserAdapter implements UserInterface
{



    protected $fbuser;

    protected function __construct(UserInterface $user){

        $this->fbuser=$user;

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

        $this->fbuser=setEmail($age);

    }

    /**
     * Je garde la signature de l'ancienne methode getImages de User
     * Elle retourne significativement un tableau d'objet
     *car c'est important si je le traite apres il fau que ce soit la meme chose
     * @return array
     */
    public function getImages(){

        $images = $this->fbuser->getPhotos();

        foreach($images as $image){

            $tab[]=new Images($image);
        }
        return$tab;
    }
}