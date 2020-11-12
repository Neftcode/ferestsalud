<?php
// Clase de Compras
namespace App\Entity;

use App\Repository\CompraRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompraRepository::class)
 */
class Compra
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_compra;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaCompra(): ?string
    {
        return $this->fecha_compra;
    }

    public function setFechaCompra(string $fecha_compra): self
    {
        $this->fecha_compra = $fecha_compra;

        return $this;
    }
}
