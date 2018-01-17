<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Likes;

class LikesRepository extends \Doctrine\ORM\EntityRepository
{
    public function isLikeExist(Post $post,User $user)
    {
        $result = false;
        $postLikes = $this->findBy([
            'user' => $user,
            'post' => $post
        ]);
        if ($postLikes) {
            $result = true;
        }
        return $result;
    }
}