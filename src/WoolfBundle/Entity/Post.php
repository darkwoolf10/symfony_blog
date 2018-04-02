<?php

namespace WoolfBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Swagger\Annotations as SWG;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="WoolfBundle\Repository\PostRepository")
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
     * @Groups({"post"})
     */
    private $title;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     * @Groups({"post"})
     */
    private $content;


    /**
     * @Gedmo\Slug(fields={"title", "id"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\Column(nullable=true)
     * @SWG\Property(type="string", maxLength=255)
     * @Groups({"post"})
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
     * @ORM\OneToMany(targetEntity="Likes", mappedBy="post")
     */
    private $likes;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="post")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @ORM\ManyToMany(
     *     targetEntity="Tags",
     *     cascade={"persist"},
     *     inversedBy="post"
     * )
     * @ORM\JoinTable(name="post_tags")
     */
    private $tags;

    /**
     * @var \DateTime $publishedAt
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     * @Groups({"post"})
     */
    private $createAt;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"post"})
     */
    private $updated;

    /**
     * @var \DateTime $contentChanged
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="change", field={"title", "content"})
     */
    private $contentChanged;

    public function __construct()
    {
        $this->comment = new ArrayCollection();
        $this->tags = new ArrayCollection();
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

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }


    public function getCreatedAt()
    {
        return $this->createAt;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function getContentChanged()
    {
        return $this->contentChanged;
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

//    public function removeComment(Comments $comment)
//    {
//        $comment->setPost(null);
//        $this->comment->removeElement($comment);
//    }

    public function getTags()
    {
        return $this->tags;
    }

    public function addTags($tags)
    {
        $tags->setPost($this);
        if (!$this->tags->contains($tags)) {
            $this->tags->add($tags);
        }
    }

    public function removeTags(ArrayCollection $tags)
    {
        $tags->setPost(null);
        $this->tags->removeElement($tags);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function addLikes($likes)
    {
        return $this->likes[] = $likes;
    }

    public function removeLikes(Likes $likes)
    {
        return $this->likes->removeElement($likes);
    }

    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }
}