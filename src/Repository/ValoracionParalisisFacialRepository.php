<?php

namespace App\Repository;

use App\Entity\ValoracionParalisisFacial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionParalisisFacial|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionParalisisFacial|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionParalisisFacial[]    findAll()
 * @method ValoracionParalisisFacial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionParalisisFacialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionParalisisFacial::class);
    }

    // /**
    //  * @return ValoracionParalisisFacial[] Returns an array of ValoracionParalisisFacial objects
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
    public function findOneBySomeField($value): ?ValoracionParalisisFacial
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
