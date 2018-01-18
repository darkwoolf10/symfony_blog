<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LikesController extends Controller
{
    /**
     * @Route("/blog/{id}/like", name="like_post")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function likeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->find(Post::class, $id);
        $user = $this->getUser();

        // check if post is found
        if ($post === null) {
            throw new NotFoundHttpException('Post not found');
        }

        // check if user did not like this post yet
        $userPostLike = $em->getRepository(Likes::class)->findOneBy(['user' => $user, 'post' => $post]);

        if ($userPostLike === null) {
            $userPostLike = new Likes();
            $userPostLike->setUser($user);
            $userPostLike->setPost($post);

            $post->increaseLikesCounter();

            $em->persist($userPostLike);
            $em->flush();

            return new JsonResponse(array('result' => 'success'));
        }

        return new JsonResponse(['result' => 'failed']);
    }
}