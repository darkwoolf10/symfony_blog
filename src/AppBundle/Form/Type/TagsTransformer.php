<?php

namespace AppBundle\Form\Type;


use AppBundle\Entity\Tags;
use Symfony\Component\Form\DataTransformerInterface;

class TagsTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        return implode(', ', $value);
    }

    public function reverseTransform($value)
    {
        $tagname = explode(', ', $value);
        $tags = [];
        foreach ($tagname as $name) {
            $tag = new Tags();
            $tag->setName($name);
            $tags[] = $tag;
        }

        return $tags;
    }
}