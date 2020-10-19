<?php

namespace App\Repository;

use App\Entity\Eps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Eps|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eps|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eps[]    findAll()
 * @method Eps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eps::class);
    }

    // /**
    //  * @return Eps[] Returns an array of Eps objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Eps
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
