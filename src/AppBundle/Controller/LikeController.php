<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Like;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LikeController extends Controller
{

    /**
     * @Route("/like/{id}", name="like_up")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function likeAction(Request $request, Post $post)
    {
        $like = new Like();
        $form = $this->createFormBuilder($like)
            ->getForm()
        ;
        $form->handleRequest($request);
        dump($post);
        if ($form->isSubmitted()) {
            $like->setUser($this->getUser());
            $like->setPost($post);
            $like->upCounterLikes();

            $em = $this->getDoctrine()->getManager();
            $em->persist($like);
            $em->flush();

            return $this->redirectToRoute('show_post', [
                'id' => $post->getId(),
            ]);
        }

        return $this->render('@App/blog/like.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'like_count' => $like->getCounterLikes(),
        ]);
    }
}