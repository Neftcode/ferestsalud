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

    public function setObservaciones($observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getArea(): ?Area
    {
        return $this->area;
    }

    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getCargo(): ?Cargo
    {
        return $this->cargo;
    }

    public function setCargo($cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getOperacion(): ?Operacion
    {
        return $this->operacion;
    }

    public function setOperacion($operacion): self
    {
        $this->operacion = $operacion;

        return $this;
    }

    public function __toString()
    {
        $operacion = $this->getOperacion()==NULL ? 'Nulo' : $this->getOperacion();
        $area = $this->getArea() == NULL ? 'Nulo' : $this->getArea();
        $cargo = $this->getCargo() == NULL ? 'Nulo' : $this->getCargo();
        return $operacion.', '.$area.', '.$cargo;
    }

}
