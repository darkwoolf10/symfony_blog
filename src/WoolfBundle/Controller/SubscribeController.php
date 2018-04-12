<?php

namespace WoolfBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WoolfBundle\Entity\Subscribe;

class SubscribeController extends Controller
{

    /**
     * @Route("/subscribe", name="subscribe", options={"expose" = true})
     * @Method({"POST"})
     */
    public function subscribeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('WoolfBundle:Subscribe');
        $userEmail = $this->getUser()->getEmail();
        $subscribe = $repository->findOneByEmail($userEmail);

        if(!$subscribe){
            $subscribe = new Subscribe();
            $subscribe->setEmail($this->getUser()->getEmail());
            $em->persist($subscribe);
            $em->flush();
            $data = [
              'result'=>true,
            ];

            return new JsonResponse($data);
        } else {
            $em->remove($subscribe);
            $em->flush();
            $data = [
                'result'=>false,
            ];

            return new JsonResponse($data);
        }
    }
}