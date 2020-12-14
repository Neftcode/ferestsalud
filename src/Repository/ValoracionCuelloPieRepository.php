<?php

namespace App\Repository;

use App\Entity\ValoracionCuelloPie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionCuelloPie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionCuelloPie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionCuelloPie[]    findAll()
 * @method ValoracionCuelloPie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionCuelloPieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionCuelloPie::class);
    }

    // /**
    //  * @return ValoracionCuelloPie[] Returns an array of ValoracionCuelloPie objects
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
    public function findOneBySomeField($value): ?ValoracionCuelloPie
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
