<?php

namespace WoolfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Subscribe
 *
 * @ORM\Entity()
 * @ORM\Table(name="subscribe")
 */
class Subscribe
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}