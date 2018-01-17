<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LikesController extends Controller
{
    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function likeAction(Request $request, Post $post, User $user)
    {
        if($request->request->get("like")){
            $arrData = ['output' => 'You liked this post'];
            return new JsonResponse($arrData);
        }

        return $this->render("@App/blog/show.html.twig");
    }
}