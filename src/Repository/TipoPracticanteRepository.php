<?php

namespace App\Repository;

use App\Entity\TipoPracticante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoPracticante|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoPracticante|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoPracticante[]    findAll()
 * @method TipoPracticante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoPracticanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoPracticante::class);
    }

    // /**
    //  * @return TipoPracticante[] Returns an array of TipoPracticante objects
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
    public function findOneBySomeField($value): ?TipoPracticante
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
