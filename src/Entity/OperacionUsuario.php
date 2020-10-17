<?php

namespace App\Entity;

use App\Repository\OperacionUsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OperacionUsuarioRepository::class)
 */
class OperacionUsuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $funcion;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Operacion")
     */
    private $operacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Area")
     */
    private $area;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cargo")
     */
    private $cargo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFuncion(): ?string
    {
        return $this->funcion;
    }

    public function setFuncion(string $funcion): self
    {
        $this->funcion = $funcion;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area): void
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * @param mixed $operacion
     */
    public function setOperacion($operacion): void
    {
        $this->operacion = $operacion;
    }
}
