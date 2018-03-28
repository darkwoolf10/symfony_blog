<?php

namespace WoolfBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WoolfBundle\Entity\Subscribe;

class SubscribeController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/subscibe", name="subsribe")
     */
    public function subscribeAction(Request $request)
    {
            $subscribe = new Subscribe();
            $subscribe->setEmail($this->getUser()->getEmail());
            $em = $this->getDoctrine()->getManager();
            $em->persist($subscribe);
            $em->flush();
            return new JsonResponse(true);
    }
}