<?php

namespace AppBundle\Controller;

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
}