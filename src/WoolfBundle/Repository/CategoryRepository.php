<?php

namespace WoolfBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findAllOrderedByCategory($categoryId)
    {
        return $this->createQueryBuilder('c')
            ->select('c.post')
            ->where('category.id = :id')
            ->setParameter('id', $categoryId)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}