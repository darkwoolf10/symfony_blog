<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="like")
 */
class Like
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $counterLikes;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="like")
     * @ORM\JoinColumn(nullable=false)
     */
    private $post;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function __construct()
    {
        $this->counterLikes = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCounterLikes()
    {
        return $this->counterLikes;
    }

    public function setCounterLikes($counterLikes)
    {
        $this->counterLikes = $counterLikes;
    }

    public function upCounterLikes()
    {
        return $this->counterLikes = $this->counterLikes + 1;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
    }
}