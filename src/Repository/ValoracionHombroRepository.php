<?php

namespace App\Repository;

use App\Entity\ValoracionHombro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionHombro|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionHombro|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionHombro[]    findAll()
 * @method ValoracionHombro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionHombroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionHombro::class);
    }

    // /**
    //  * @return ValoracionHombro[] Returns an array of ValoracionHombro objects
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
    public function findOneBySomeField($value): ?ValoracionHombro
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
