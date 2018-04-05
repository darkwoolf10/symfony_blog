<?php

namespace WoolfBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use JMS\Serializer\SerializerBuilder;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;
use WoolfBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends FOSRestController
{

    /**
     * @Route("/api/category/{id}", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns the rewards of an user",
     *     @SWG\Schema(
     *         type="array",
     *         @Model(type=Category::class)
     *     )
     * )
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="The field used to order rewards"
     * )
     * @SWG\Tag(name="category")
     */
    public function categoryAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category::class)->find($id);

        if(!$category){
            return new JsonResponse($category, Response::HTTP_BAD_REQUEST);
        }

        $serializer = SerializerBuilder::create()->build();
        $categories = $serializer->serialize($category, 'json');

        return new JsonResponse($categories, Response::HTTP_OK);
    }
}
