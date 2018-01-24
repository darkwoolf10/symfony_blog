<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function categoryMenuAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');

        $categories = $em->getRepository('AppBundle:Category')
            ->findAll();

        return $this->render(
            '@App/blog/category_menu.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/category/{categoryId}", name="category")
     */
    public function categoryAction($categoryId, EntityManagerInterface $em)
    {
        $category = $em->getRepository('AppBundle:Category')
            ->find($categoryId);

        if (!$category) {
            return $this->render('@App/blog/notFound.html.twig');
        }

        $posts = $category->getPost();

        return $this->render(
            '@App/blog/category.html.twig', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }
}