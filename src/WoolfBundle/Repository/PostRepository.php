<?php

namespace WoolfBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function search($str) {
        $query = $this->createQueryBuilder('p')
            ->where('p.title LIKE :str')
            ->setParameter('str', '%'.$str.'%')
            ->getQuery()
        ;

        return $query;
    }
}