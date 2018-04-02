<?php

namespace WoolfBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WoolfBundle\Entity\Subscribe;

class SubscribeController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/subscibe", name="subsribe")
     */
    public function subscribeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('WoolfBundle:Subscribe');
        $user = $this->getUser()->getUsername();
        $subscribe = $repository->findOneBy($user);
        var_dump($subscribe);
        if(!$subscribe){
            $subscribe = new Subscribe();
            $subscribe->setEmail($this->getUser()->getEmail());
            $em->persist($subscribe);
            $em->flush();

            return new JsonResponse(true);
        } else {
            $em->remove($subscribe);
            $em->flush();

            return new JsonResponse(false);
        }
    }
}