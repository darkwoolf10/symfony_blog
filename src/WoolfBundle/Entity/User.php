<?php

namespace WoolfBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_users")
 */
class User implements UserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
    * @ORM\Column(type="string", length=64)
    */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="Likes", mappedBy="user")
     */
    private $likes;

//    /**
//     * @ORM\ManyToMany(targetEntity="User", mappedBy="author")
//     */
//    private $subscribers;

//    /**
//     * @ORM\ManyToMany(targetEntity="User", inversedBy="subscribers")
//     *
//     * @ORM\JoinTable(name="subscribe",
//     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
//     *      inverseJoinColumns={@ORM\JoinColumn(name="author_id", referencedColumnName="id")}
//     *      )
//     */
//    private $author;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = [];

    public function __construct()
    {
//        $this->subscribers = new ArrayCollection();
        $this->author = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->username;
    }

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

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRoles()
    {
        $roles = $this->roles;

        if (!in_array('ROLE_USER', $roles)) {
            $roles[] = 'ROLE_USER';
        }

        return $roles;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function addLikes($likes)
    {
        return $this->likes = $likes;
    }

    public function removeLikes(Likes $likes)
    {
        return $this->likes->removeElement($likes);
    }

//    public function getSubscribers()
//    {
//        return $this->subscribers;
//    }
//
//    public function setSubscribers($subscribers)
//    {
//        $this->subscribers = $subscribers;
//    }
//
//    public function addSubscribers($subscribers)
//    {
//        return $this->subscribers[] = $subscribers;
//    }


    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
        return null;
    }
}

