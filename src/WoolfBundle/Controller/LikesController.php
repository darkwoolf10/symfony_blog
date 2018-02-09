<?php
namespace WoolfBundle\Controller;

use WoolfBundle\Entity\Likes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LikesController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("{postId}/like/add", name="like_add")
     */
    public function addAction($postId)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('WoolfBundle:Post')->find($postId);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        $like = new Likes();
        $like->setUser($this->getUser());
        $like->setPost($post);

        $em->persist($like);
        $em->flush();

        return $this->redirectToRoute('show_post', [
            'id' => $postId,
        ]);
    }

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("{postId}/like/delete", name="like_delete")
     */
    public function deleteAction($postId)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('WoolfBundle:Post')->find($postId);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        $likes = $em->getRepository('WoolfBundle:Likes')->findBy(['post' => $post->getId(), 'user' => $this->getUser()]);

        foreach ($likes as $like) {
            $em->remove($like);
        }

        $em->flush();
        return $this->redirectToRoute('show_post', [
            'id' => $postId,
        ]);
    }
}