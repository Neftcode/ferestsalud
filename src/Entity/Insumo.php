<?php

namespace App\Entity;

use App\Repository\InsumoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InsumoRepository::class)
 */
class Insumo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $reg_san_invima;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $presentacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getRegSanInvima(): ?string
    {
        return $this->reg_san_invima;
    }

    public function setRegSanInvima(string $reg_san_invima): self
    {
        $this->reg_san_invima = $reg_san_invima;

        return $this;
    }

    public function getPresentacion(): ?string
    {
        return $this->presentacion;
    }

    public function setPresentacion(string $presentacion): self
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    public function __toString()
    {
        return $this->getCodigo() . ', ' . $this->getNombre();
    }

}
