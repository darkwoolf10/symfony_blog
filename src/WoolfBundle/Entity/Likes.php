<?php

namespace WoolfBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="likes")
 */
class Likes
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="likes", cascade={"persist"})
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $post;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="likes", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $user;

    public function getId()
    {
        return $this->id;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost(Post $post)
    {
        return $this->post = $post;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        return $this->user = $user;
    }
}

