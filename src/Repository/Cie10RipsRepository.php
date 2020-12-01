<?php

namespace App\Repository;

use App\Entity\Cie10Rips;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cie10Rips|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cie10Rips|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cie10Rips[]    findAll()
 * @method Cie10Rips[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Cie10RipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cie10Rips::class);
    }

    // /**
    //  * @return Cie10Rips[] Returns an array of Cie10Rips objects
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
    public function findOneBySomeField($value): ?Cie10Rips
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
