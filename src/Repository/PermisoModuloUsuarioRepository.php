<?php

namespace App\Repository;

use App\Entity\PermisoModuloUsuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PermisoModuloUsuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method PermisoModuloUsuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method PermisoModuloUsuario[]    findAll()
 * @method PermisoModuloUsuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PermisoModuloUsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PermisoModuloUsuario::class);
    }

    public function permisosUsuario($idUser) {
        $stm = "SELECT PMU.id, MOD.nombre AS modNombre, MOD.nombre_alt AS modNombreAlt, ROL.nombre AS rolNombre, USU.nombres AS usuNombres FROM App:PermisoModuloUsuario AS PMU JOIN PMU.modulo AS MOD JOIN PMU.rol AS ROL JOIN PMU.usuario AS USU WHERE PMU.usuario=:user";
        $query = $this->getEntityManager()
            ->createQuery($stm)->setParameters(['user' => $idUser]);
        return $query->getResult();
    }

    // /**
    //  * @return PermisoModuloUsuario[] Returns an array of PermisoModuloUsuario objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PermisoModuloUsuario
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
