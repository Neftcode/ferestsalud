<?php

namespace App\Repository;

use App\Entity\ValoracionCodo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionCodo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionCodo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionCodo[]    findAll()
 * @method ValoracionCodo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionCodoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionCodo::class);
    }

    // /**
    //  * @return ValoracionCodo[] Returns an array of ValoracionCodo objects
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
    public function findOneBySomeField($value): ?ValoracionCodo
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
