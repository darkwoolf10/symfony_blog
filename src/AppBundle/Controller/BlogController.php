<?php

namespace AppBundle\Controller;

use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;

class BlogController extends Controller
{

    /**
     * @Route("/blog", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em    = $this->getDoctrine()->getManager();
        $dql   = "SELECT a FROM AppBundle:Post a ORDER BY a.id DESC";
        $posts = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)/*limit per page*/

        );
        dump($pagination);
        return $this->render(
            '@App/blog/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/blog/create")
     */
    public function createAction(Request $request)
    {
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('@App/blog/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/blog/{id}", name="show_post")
     */
    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);

        $post = $repository->find($id);

        if (!$post) {
            return $this->redirectToRoute('homepage');
        }
        return $this->render(
            '@App/blog/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/delete_post/{id}", name="delete_post")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($id);

        if (!$post) {
            throw $this->createNotFoundException(
                'No post found for id '.$id
            );
        }

        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("edit_post/{id}", name="edit_post")
     */
    public function editAction(Request $request, Post $post)
    {
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $this->addFlash('success', 'Post updated!');

            return $this->redirectToRoute('homepage');
        }
        return $this->render('@App/blog/edit.html.twig', [
            'form' => $form->createView()
        ]);

    }

}