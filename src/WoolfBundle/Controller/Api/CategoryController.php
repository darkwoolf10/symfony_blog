<?php

namespace WoolfBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CategoryController extends Controller
{

    /**
     * @Route("/api/category")
     */
    public function categoryAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $categories = $em->getRepository('WoolfBundle:Category')
            ->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $data = $serializer->serialize($categories, 'json');
        return new JsonResponse($data);
    }
}
