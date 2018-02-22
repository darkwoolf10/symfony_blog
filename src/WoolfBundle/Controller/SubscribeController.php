<?php

namespace WoolfBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubscribeController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("add/subscribe/{username}", name="subscribe")
     */
    public function subscribeAction($username)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('WoolfBundle:User')->findOneBy(['username' => $username]);

        if(!$user) {
            return new JsonResponse(['result' => 'failed']);
        }

        $currentUser = $this->getUser();

        if(in_array($user->getEmail(), $currentUser->getSubscribe()) == false ) {
            $currentUser->addSubscribe($user->getEmail());

            $em->persist($currentUser);
            $em->flush();

            $email = $user->getEmail();

            return new JsonResponse([
                'result' => true,
                'description' => 'Subsribe on ' . $username,
                'email' => $email,
            ]);
        }

        return new JsonResponse(['result' => 'failed']);
    }
}