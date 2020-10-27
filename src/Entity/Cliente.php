<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @ORM\Entity(repositoryClass=ClienteRepository::class)
 */
class Cliente
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=15)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombres;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $fecha_nacimiento;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ocupacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Genero")
     */
    private $genero;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNombres(): ?string
    {
        return $this->nombres;
    }

    public function setNombres(string $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(string $fecha_nacimiento): self
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    public function getOcupacion(): ?string
    {
        return $this->ocupacion;
    }

    public function setOcupacion(string $ocupacion): self
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    public function getGenero(): ?Genero
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getEdad(): ?int
    {
        $fechaActual = new DateTime(date('Y-m-d') . " 00:00:00");
        $fechaNacimiento = new DateTime($this->getFechaNacimiento() . " 00:00:00");
        $diff = $fechaNacimiento->diff($fechaActual);
        return $diff->y;
    }

    public function __toString()
    {
        return $this->getId().', '.$this->getNombres().' '.$this->getApellidos();
    }
}
