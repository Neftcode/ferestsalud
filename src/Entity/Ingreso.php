<?php
// Clase de Ingresos
namespace App\Entity;

use App\Repository\IngresoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngresoRepository::class)
 */
class Ingreso
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
     * @ORM\Column(type="float", nullable=true)
     */
    private $peso;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $talla;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sesiones;

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
     * @ORM\Column(type="string", length=5000)
     */
    private $cronologia_patologia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Paciente")
     */
    private $paciente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cie10Rips")
     */
    private $cie10;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Aseguradora")
     */
    private $aseguradora;

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

    public function getPeso(): ?float
    {
        return $this->peso;
    }

    public function setPeso(?float $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getTalla(): ?float
    {
        return $this->talla;
    }

    public function setTalla(?float $talla): self
    {
        $this->talla = $talla;

        return $this;
    }

    public function getSesiones(): ?int
    {
        return $this->sesiones;
    }

    public function setSesiones(?int $sesiones): self
    {
        $this->sesiones = $sesiones;

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

    public function getCronologiaPatologia(): ?string
    {
        return $this->cronologia_patologia;
    }

    public function setCronologiaPatologia(string $cronologia_patologia): self
    {
        $this->cronologia_patologia = $cronologia_patologia;

        return $this;
    }

    public function getPaciente(): ?Paciente
    {
        return $this->paciente;
    }

    public function setPaciente($paciente): self
    {
        $this->paciente = $paciente;

        return $this;
    }

    public function getCie10(): ?Cie10Rips
    {
        return $this->cie10;
    }

    public function setCie10(?Cie10Rips $cie10): self
    {
        $this->cie10 = $cie10;

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

}
