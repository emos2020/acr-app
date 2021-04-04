<?php

namespace App\Repository;

use App\Entity\CustomerConfig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CustomerConfig|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerConfig|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerConfig[]    findAll()
 * @method CustomerConfig[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerConfig::class);
    }

    // /**
    //  * @return CustomerConfig[] Returns an array of CustomerConfig objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomerConfig
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
