<?php

namespace AppBundle\Form;

use AppBundle\Form\Type\TagsTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;

class TagsType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
       $builder
           ->addModelTransformer(new CollectionToArrayTransformer())
           ->addModelTransformer(new TagsTransformer(), true);
   }

    public function getParent()
   {
       return TextType::class;
   }
}