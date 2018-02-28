<?php

namespace WoolfBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubscribeController extends Controller
{

    /**
     * @Route("/count")
     */
    public function counterPostsAction()
    {
        $today = date('Y-m-d H:i:s');
        $yesterday = date('Y-m-d H:i:s',strtotime('-1 day'));
        $em    = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT COUNT(post)
             FROM WoolfBundle:Post post
             WHERE post.updated
             BETWEEN :yesterday AND :today'
        )->setParameter('today', $today)->setParameter('yesterday', $yesterday);
        $count = $query->getResult();
        return new JsonResponse($count);
    }
}