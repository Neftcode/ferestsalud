<?php

namespace App\Repository;

use App\Entity\ValoracionMano;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionMano|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionMano|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionMano[]    findAll()
 * @method ValoracionMano[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionManoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionMano::class);
    }

    // /**
    //  * @return ValoracionMano[] Returns an array of ValoracionMano objects
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
    public function findOneBySomeField($value): ?ValoracionMano
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
