<?php

namespace App\Repository;

use App\Entity\Aseguradora;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aseguradora|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aseguradora|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aseguradora[]    findAll()
 * @method Aseguradora[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AseguradoraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aseguradora::class);
    }

    // /**
    //  * @return Aseguradora[] Returns an array of Aseguradora objects
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
    public function findOneBySomeField($value): ?Aseguradora
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
