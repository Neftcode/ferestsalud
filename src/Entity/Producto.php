<?php
// Clase de Productos
namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $lote;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fecha_vencimiento;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fabricante;

    /**
     * @ORM\Column(type="integer")
     */
    private $producto_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoProducto")
     */
    private $tipo_producto;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LaboratorioFarmaceutico")
     */
    private $laboratorio_farmaceutico;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proveedor")
     */
    private $proveedor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLote(): ?string
    {
        return $this->lote;
    }

    public function setLote(?string $lote): self
    {
        $this->lote = $lote;

        return $this;
    }

    public function getFechaVencimiento(): ?string
    {
        return $this->fecha_vencimiento;
    }

    public function setFechaVencimiento(?string $fecha_vencimiento): self
    {
        $this->fecha_vencimiento = $fecha_vencimiento;

        return $this;
    }

    public function getFabricante(): ?string
    {
        return $this->fabricante;
    }

    public function setFabricante(string $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    public function getProductoId(): ?int
    {
        return $this->producto_id;
    }

    public function setProductoId(int $producto_id): self
    {
        $this->producto_id = $producto_id;

        return $this;
    }

    public function getTipoProducto(): ?TipoProducto
    {
        return $this->tipo_producto;
    }

    public function setTipoProducto(?TipoProducto $tipo_producto): self
    {
        $this->tipo_producto = $tipo_producto;

        return $this;
    }

    public function getLaboratorioFarmaceutico(): ?LaboratorioFarmaceutico
    {
        return $this->laboratorio_farmaceutico;
    }

    public function setLaboratorioFarmaceutico(?LaboratorioFarmaceutico $laboratorio_farmaceutico): self
    {
        $this->laboratorio_farmaceutico = $laboratorio_farmaceutico;

        return $this;
    }

    public function getProveedor(): ?Proveedor
    {
        return $this->proveedor;
    }

    public function setProveedor(?Proveedor $proveedor): self
    {
        $this->proveedor = $proveedor;

        return $this;
    }

}
