<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\Column(nullable=true)
     */
    private $author;

    /**
     * @ORM\OneToMany(
     *      targetEntity="Comment",
     *      mappedBy="post",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"publishedAt": "DESC"})
     */
    private $comment;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Likes",
     *     mappedBy="post",
     *     orphanRemoval = true,
     *     cascade={"persist"}
     * )
     */
    private $likes;

    /**
     * @var integer
     *
     * @ORM\Column(name="likes_counter", type="integer")
     */
    private $likesCounter;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="post")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $publishedAt;

    public function __construct()
    {
        $this->publishedAt = new \DateTime();
        $this->comment = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->likesCounter = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function addComment(Comment $comment)
    {
        $comment->setPost($this);
        if (!$this->comment->contains($comment)) {
            $this->comment->add($comment);
        }
    }

    public function removeComment(Comments $comment)
    {
        $comment->setPost(null);
        $this->comment->removeElement($comment);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function upLikes(){

    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setLike($likes)
    {
        $this->likes = $likes;
    }

    /**
     * @return int
     */
    public function getLikesCounter()
    {
        return $this->likesCounter;
    }

    /**
     * @param int $likesCounter
     */
    public function setLikesCounter($likesCounter)
    {
        $this->likesCounter = $likesCounter;
    }

    public function increaseLikesCounter() {
        $this->likesCounter++;
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }
}
