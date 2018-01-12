<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
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
        public function likeAction(Request $request, Post $post, User $user)
        {
            $em = $this->getDoctrine()->getManager();
            $like = $em->getRepository('AppBundle:Likes')->findOne(['post' => $post, 'user' => $user]);

            if (!$like) {
                throw $this->createNotFoundException(
                    'Problems guy'
                );
            }

            $em->persist($like);
            $em->flush();
        }
    }