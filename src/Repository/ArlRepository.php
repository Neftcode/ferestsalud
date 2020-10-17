<?php

namespace App\Repository;

use App\Entity\Arl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Arl|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arl|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arl[]    findAll()
 * @method Arl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Arl::class);
    }

    // /**
    //  * @return Arl[] Returns an array of Arl objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Arl
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
