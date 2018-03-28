<?php

namespace WoolfBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class FeadbackController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/feadback", name="feadback")
     */
    public function feadbackAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('from', EmailType::class)
            ->add('message', TextAreaType::class)
            ->add('save', SubmitType::class)
            ->getForm()
        ;
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ) {
            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('Support From Submission')
                ->setFrom($data['from'])
                ->setTo($this->container->getParameter('mailer_user'))
                ->setBody(
                    $form->getData()['message']
                )
            ;

            $this->get('mailer')->send($message);
        }

        return $this->render("@Woolf/blog/feadback.html.twig",[
            'form' => $form->createView(),
        ]);
    }
}