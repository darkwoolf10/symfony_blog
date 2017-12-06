<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogController extends Controller
{

    /**
     * @Route("/blog", name="homepage")
     */
    public function showAction()
    {
        return $this->render('blog/show.html.twig', [
        ]);
    }

    /**
     * @Route("/blog/create")
     */
    public function createAction(Request $request)
    {
        $post = new Post();
        $post->setTitle('');
        $post->setContent('');
        $post->setAuthor('root');

        $form = $this->createFormBuilder($post)
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('author', TextType::class, [

            ])
            ->add('save', SubmitType::class, ['label' => 'Create post'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('blog/create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function listAction()
    {

    }
}