<?php

namespace App\Entity;

use App\Repository\MedicamentoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicamentoRepository::class)
 */
class Medicamento
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
    private $codigo_atc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $principio_activo;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $concentracion;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $forma_farmaceutica;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoAtc(): ?string
    {
        return $this->codigo_atc;
    }

    public function setCodigoAtc(string $codigo_atc): self
    {
        $this->codigo_atc = $codigo_atc;

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

    public function getPrincipioActivo(): ?string
    {
        return $this->principio_activo;
    }

    public function setPrincipioActivo(string $principio_activo): self
    {
        $this->principio_activo = $principio_activo;

        return $this;
    }

    public function getConcentracion(): ?string
    {
        return $this->concentracion;
    }

    public function setConcentracion(string $concentracion): self
    {
        $this->concentracion = $concentracion;

        return $this;
    }

    public function getFormaFarmaceutica(): ?string
    {
        return $this->forma_farmaceutica;
    }

    public function setFormaFarmaceutica(string $forma_farmaceutica): self
    {
        $this->forma_farmaceutica = $forma_farmaceutica;

        return $this;
    }

    public function __toString()
    {
        return $this->getNombre();
    }

}
