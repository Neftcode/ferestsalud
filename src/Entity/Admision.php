<?php
// Clase de Admisiones
namespace App\Entity;

use App\Repository\AdmisionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdmisionRepository::class)
 */
class Admision
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre_acompanante;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $telefono_acompanante;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_ingreso;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ocupacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Paciente", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $paciente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Aseguradora")
     */
    private $aseguradora;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $telefonos = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profesional_solicitante;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $especialidad;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $rm;

    /**
     * @ORM\ManyToOne(targetEntity=Usuario::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreAcompanante(): ?string
    {
        return $this->nombre_acompanante;
    }

    public function setNombreAcompanante(string $nombre_acompanante): self
    {
        $this->nombre_acompanante = $nombre_acompanante;

        return $this;
    }

    public function getTelefonoAcompanante(): ?string
    {
        return $this->telefono_acompanante;
    }

    public function setTelefonoAcompanante(string $telefono_acompanante): self
    {
        $this->telefono_acompanante = $telefono_acompanante;

        return $this;
    }

    public function getFechaIngreso(): ?string
    {
        return $this->fecha_ingreso;
    }

    public function setFechaIngreso(string $fecha_ingreso): self
    {
        $this->fecha_ingreso = $fecha_ingreso;

        return $this;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

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

    public function getPaciente(): ?Paciente
    {
        return $this->paciente;
    }

    public function setPaciente(Paciente $paciente): self
    {
        $this->paciente = $paciente;

        return $this;
    }

    public function getAseguradora(): ?Aseguradora
    {
        return $this->aseguradora;
    }

    public function setAseguradora(?Aseguradora $aseguradora): self
    {
        $this->aseguradora = $aseguradora;

        return $this;
    }

    public function getTelefonos(): ?array
    {
        return $this->telefonos;
    }

    public function setTelefonos(?array $telefonos): self
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    public function getProfesionalSolicitante(): ?string
    {
        return $this->profesional_solicitante;
    }

    public function setProfesionalSolicitante(?string $profesional_solicitante): self
    {
        $this->profesional_solicitante = $profesional_solicitante;

        return $this;
    }

    public function getEspecialidad(): ?string
    {
        return $this->especialidad;
    }

    public function setEspecialidad(?string $especialidad): self
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    public function getRm(): ?string
    {
        return $this->rm;
    }

    public function setRm(?string $rm): self
    {
        $this->rm = $rm;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

}
