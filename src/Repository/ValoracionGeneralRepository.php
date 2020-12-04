<?php

namespace App\Repository;

use App\Entity\ValoracionGeneral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionGeneral|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionGeneral|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionGeneral[]    findAll()
 * @method ValoracionGeneral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionGeneralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionGeneral::class);
    }

    // /**
    //  * @return ValoracionGeneral[] Returns an array of ValoracionGeneral objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ValoracionGeneral
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
