<?php

namespace WoolfBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormatterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', FormatterType::class, array(
                'event_dispatcher' => $builder->getEventDispatcher(),
                'format_field'   => 'contentFormatter',
                'format_field_options' => array(
                    'choices' => [
                        'text' => 'Text',
                        'markdown' => 'Markdown',
                    ],
                    'data' => 'markdown',
                ),
                'source_field'   => 'rawContent',
                'source_field_options'      => array(
                    'attr' => array('class' => 'span10', 'rows' => 20)
                ),
                'listener'       => true,
                'target_field'   => 'content'
            ));
    }
}