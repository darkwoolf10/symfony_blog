<?php

namespace WoolfBundle\Controller;

use WoolfBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WoolfBundle\Entity\Post;

class BlogController extends Controller
{

    /**
     * @Route("/blog", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em    = $this->getDoctrine()->getManager();
        $dql   = "SELECT post FROM WoolfBundle:Post post ORDER BY post.id DESC";
        $posts = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', $this->container->getParameter('woolf.limit_article'))/*limit per page*/

        );
        return $this->render(
            '@Woolf/blog/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("about", name="about")
     */
    public function aboutAction()
    {
        return $this->render("@Woolf/info/about.html.twig");
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
            $post->setAuthor($this->getUser());
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('@Woolf/blog/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/blog/{id}", name="show_post")
     */
    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);

        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("homepage"));
        $breadcrumbs->addRouteItem("Post №$id", "show_post", [
            'id' => $id,
        ]);

        $post = $repository->find($id);

        if(!$post) {
           return $this->render('@Woolf/blog/notFound.html.twig');
        }
        return $this->render(
            '@Woolf/blog/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/delete_post/id", name="delete_post")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($id);
        $submittedToken = $request->request->get('token');

        if (!$post) {
            throw $this->createNotFoundException(
                'No post found for id '.$id
            );
        }
        if ($this->isCsrfTokenValid('delete-item', $submittedToken)) {
            $em->remove($post);
            $em->flush();
        }

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

            return $this->redirectToRoute('show_post', [
                'id' => $post->getId()
            ]);
        }
        return $this->render('@Woolf/blog/edit.html.twig', [
            'form' => $form->createView()
        ]);

    }

}