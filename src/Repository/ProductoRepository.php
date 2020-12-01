<?php

namespace App\Repository;

use App\Entity\Producto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Producto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producto[]    findAll()
 * @method Producto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Producto::class);
    }

    public function findInsumos($admin=false) {
        $str_admin = $admin ? "" : "AND `eliminado`=0";
        $stm = "SELECT PRO.`id`, `lote`, `fecha_vencimiento`, `fabricante`, `tipo_producto_id`, `laboratorio_farmaceutico_id`, `proveedor_id`, `producto_id`, `eliminado`, TP.`nombre` AS tipo_producto, INS.`nombre` AS prodNombre, INS.`codigo` AS prodCodigo, INS.`reg_san_invima` AS prodRegSanInvima, INS.`presentacion` AS prodPresentacion FROM `producto` AS PRO LEFT JOIN `tipo_producto` AS TP ON PRO.`tipo_producto_id`=TP.`id` LEFT JOIN `insumo` AS INS ON PRO.`producto_id`=INS.`id` WHERE TP.`nombre`='Insumo' ".$str_admin;

        $query = $this->getEntityManager()
            ->getConnection()->executeQuery($stm);
        return $query->fetchAll();
    }

    public function findMedicamentos($admin=false) {
        $str_admin = $admin ? "" : "AND `eliminado`=0";
        $stm = "SELECT PRO.`id`, `lote`, `fecha_vencimiento`, `fabricante`, `tipo_producto_id`, `laboratorio_farmaceutico_id`, `proveedor_id`, `producto_id`, `eliminado`, TP.`nombre` AS tipo_producto, MED.`nombre` AS prodNombre, MED.`codigo` AS prodCodigo, MED.`reg_san_invima` AS prodRegSanInvima, MED.`principio_activo` AS prodPrincipioActivo, MED.`concentracion` AS prodConcentracion, MED.`forma_farmaceutica` AS medFormaFarmaceutica FROM `producto` AS PRO LEFT JOIN `tipo_producto` AS TP ON PRO.`tipo_producto_id`=TP.`id` LEFT JOIN `medicamento` AS MED ON PRO.`producto_id`=MED.`id` WHERE TP.`nombre`='Medicamento' ".$str_admin;

        $query = $this->getEntityManager()
            ->getConnection()->executeQuery($stm);
        return $query->fetchAll();
    }

    public function findAllComplete($admin=false) {
        $insumos = $this->findInsumos($admin);
        $medicamentos = $this->findMedicamentos($admin);

        $resultSet = array_merge($insumos, $medicamentos);
        //ordenar matriz
        $sort = array();
        foreach ($resultSet as $key => $valor) {
            $sort["prodNombre"][$key] = $valor["prodNombre"];
        }
        array_multisort($sort["prodNombre"], SORT_ASC, $resultSet);
        return $resultSet;
    }

    // /**
    //  * @return Producto[] Returns an array of Producto objects
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
    public function findOneBySomeField($value): ?Producto
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
