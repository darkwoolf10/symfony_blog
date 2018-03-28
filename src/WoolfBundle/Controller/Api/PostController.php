<?php

namespace WoolfBundle\Controller\Api;

use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\Model;
use FOS\RestBundle\Controller\Annotations as Rest;
use Swagger\Annotations as SWG;
use WoolfBundle\Entity\Post;

class PostController extends FOSRestController
{

    /**
     * @Rest\Get("/api/post/{id}")
     * @SWG\Response(
     *     response=200,
     *     description="Return post by id",
     *     @SWG\Schema(
     *         type="array",
     *         @Model(type=Post::class)
     *     )
     * )
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="This parameter used to get Post"
     * )
     * @SWG\Tag(name="Post")
     */
    public function postAction($id, EntityManagerInterface $em)
    {
        $post = $em->getRepository(Post::class)->find($id);
        $view = $this->view($post, 200);

        return $this->handleView($view);
    }
}