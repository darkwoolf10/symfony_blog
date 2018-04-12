<?php
namespace WoolfBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use WoolfBundle\Entity\Likes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LikesController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("{postId}/like", name="like", options={"expose" = true})
     */
    public function likeAction($postId)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('WoolfBundle:Post')->find($postId);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        $user = $this->getUser();
        $like = $em->getRepository(Likes::class)->findOneBy(['user' => $user, 'post' => $post]);

        if ($like === null) {
            $like = new Likes();
            $like->setUser($user);
            $like->setPost($post);
            $em->persist($like);
            $em->flush();

            return new JsonResponse(['result' => 'success']);
        } else {
            $em->remove($like);
            $em->flush();

            return new JsonResponse(['result' => 'failed']);
        }
    }
}