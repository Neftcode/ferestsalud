<?php

namespace App\Repository;

use App\Entity\TourModulo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TourModulo|null find($id, $lockMode = null, $lockVersion = null)
 * @method TourModulo|null findOneBy(array $criteria, array $orderBy = null)
 * @method TourModulo[]    findAll()
 * @method TourModulo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TourModuloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TourModulo::class);
    }

    // /**
    //  * @return TourModulo[] Returns an array of TourModulo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TourModulo
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
