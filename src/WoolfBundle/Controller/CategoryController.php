<?php

namespace WoolfBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    public function categoryMenuAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');

        $categories = $em->getRepository('WoolfBundle:Category')
            ->findAll();

        return $this->render(
            '@Woolf/blog/category_menu.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/category/{categoryId}", name="category")
     */
    public function categoryAction($categoryId, EntityManagerInterface $em, Request $request)
    {
        $category = $em->getRepository('WoolfBundle:Category')
            ->find($categoryId);

        if (!$category) {
            return $this->render('@Woolf/blog/notFound.html.twig');
        }

        $posts = $category->getPost();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 5)/*limit per page*/

        );

        return $this->render(
            '@Woolf/blog/category.html.twig', [
            'pagination' => $pagination,
            'category' => $category,
        ]);
    }
}