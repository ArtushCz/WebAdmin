<?php
/**
 * Created by PhpStorm.
 * User: ext90164
 * Date: 21.03.2019
 * Time: 13:23
 */

namespace App\Repository;

use Doctrine\ORM\EntityRepository;


class MenuItemRepository extends EntityRepository
{
    public function findByMenuCollectionId($id)
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.miMc', 'mc')
            ->addSelect('mc')
            ->andWhere('mc.mcId = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}