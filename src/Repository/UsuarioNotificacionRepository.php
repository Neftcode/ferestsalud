<?php

namespace App\Repository;

use App\Entity\UsuarioNotificacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsuarioNotificacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioNotificacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioNotificacion[]    findAll()
 * @method UsuarioNotificacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioNotificacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsuarioNotificacion::class);
    }

    // /**
    //  * @return UsuarioNotificacion[] Returns an array of UsuarioNotificacion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsuarioNotificacion
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
