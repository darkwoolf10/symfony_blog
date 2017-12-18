<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Post;

class BlogController extends Controller
{

    /**
     * @Route("/blog", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT article FROM AppBundle:Post article";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        $categories = $em->getRepository('AppBundle:Category')
            ->findAll();

        return $this->render(
            '@App/blog/index.html.twig', [
            'pagination' => $pagination,
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/blog/create")
     */
    public function createAction(Request $request)
    {
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        $em = $this->get('doctrine.orm.entity_manager');
        $categories = $em->getRepository('AppBundle:Category')
            ->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('@App/blog/create.html.twig', [
            'form' => $form->createView(),
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/blog/{id}", name="show_post")
     */
    public function showAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);

        $post = $repository->find($id);

        dump($post);
        if (!$post) {
            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            '@App/blog/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
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
     * @Route("edit_post/{id}", name="edit_post")
     */
    public function editAction($id)
    {
        //$em = $this->getDoctrine()->getManager();
        //$post = $em->getRepository(Post::class)->find($id);

        return new Response('Пока нету редактирования поста №'.$id);

    }

    /**
     * @Route("/category/{categoryId}", name="category")
     */
    public function categoryAction($categoryId, EntityManagerInterface $em)
    {
        // Для того чтобы посты отображалось меню категорий
        $categories = $em->getRepository('AppBundle:Category')
            ->findAll();

        $category = $em->getRepository('AppBundle:Category')
            ->find($categoryId);
        $posts = $category->getPost();

        return $this->render(
            '@App/blog/category.html.twig', [
            'categories' => $categories,
            'category' => $category,
            'posts' => $posts,
        ]);
    }

}