<?php

namespace App\Repository;

use App\Entity\FondoCesantias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FondoCesantias|null find($id, $lockMode = null, $lockVersion = null)
 * @method FondoCesantias|null findOneBy(array $criteria, array $orderBy = null)
 * @method FondoCesantias[]    findAll()
 * @method FondoCesantias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FondoCesantiasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FondoCesantias::class);
    }

    // /**
    //  * @return FondoCesantias[] Returns an array of FondoCesantias objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FondoCesantias
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
