<?php

namespace WoolfBundle\Controller\Api;

use FOS\RestBundle\Controller\Annotations\Route;
use WoolfBundle\Entity\Post;

class PostController
{

    /**
     * @Route("/api/post/{id}", methods={"GET"})
     */
    public function postAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($id);

        $view = $this->view($post, 200);
        return $this->handleView($view);
    }
}