<?php

namespace App\Repository;

use App\Entity\ValoracionColumnaVertebral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ValoracionColumnaVertebral|null find($id, $lockMode = null, $lockVersion = null)
 * @method ValoracionColumnaVertebral|null findOneBy(array $criteria, array $orderBy = null)
 * @method ValoracionColumnaVertebral[]    findAll()
 * @method ValoracionColumnaVertebral[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ValoracionColumnaVertebralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ValoracionColumnaVertebral::class);
    }

    // /**
    //  * @return ValoracionColumnaVertebral[] Returns an array of ValoracionColumnaVertebral objects
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
    public function findOneBySomeField($value): ?ValoracionColumnaVertebral
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
