<?php

namespace AppBundle\Form;

use AppBundle\Entity\Category;
use AppBundle\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('author', TextType::class)
//            ->add('category', ChoiceType::class)
            ->add('save', SubmitType::class, ['label' => 'Create post'])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'Category',
                'multiple' => false
            ]);
        ;
//        $builder->add('users', EntityType::class, array(
//            'class' => Category::class,
//            'query_builder' => function (EntityRepository $er) {
//                return $er->createQueryBuilder('c')
//                    ->orderBy('c.name', 'ASC');
//            },
//            'choice_label' => 'category',
//        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}