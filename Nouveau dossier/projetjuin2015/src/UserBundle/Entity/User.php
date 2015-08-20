<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
   @ORM\Entity
 * @ORM\Table(name="User")
 * 
 */
class User
{
    /**
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**

     *
     * @ORM\Column(name="name",type="string", length=255)
     */
    private $name;


    
}
