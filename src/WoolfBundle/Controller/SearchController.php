<?php

namespace WoolfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WoolfBundle\Form\SearchType;

class SearchController extends Controller
{

    /**
     * @Route("search")
     */
    public function searchFormAction(Request $request)
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $search = $data['search'];
            return $this->redirectToRoute('search_results', ['str' => $search]);
        }
        return $this->render('@Woolf/blog/search.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/search/{str}", name="search_results")
     */
    public function searchAction($str)
    {
        $results = $this->getDoctrine()->getRepository('WoolfBundle:Post')->search($str)->getResult();

        return $this->render('@Woolf/blog/search_result.html.twig', [
            'results' => $results,
        ]);
    }
}