<?php

namespace WoolfBundle\Controller;

use WoolfBundle\Entity\Post;
use WoolfBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WoolfBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends Controller
{
    /**
     * @Route("/comment/{id}", name="comment_new")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function commentNew(Request $request, Post $post)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // this code is here to not show unnecessary (empty) comments
            $comment->setAuthor($this->getUser());
            $post->addComment($comment);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('show_post', [
                'id' => $post->getId()
            ]);
        }

        return $this->render('@Woolf/blog/comment.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }
}