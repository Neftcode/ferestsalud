<?php

namespace App\Entity;

use App\Repository\CiudadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CiudadRepository::class)
 */
class Ciudad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $codigo_dane;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $capital_departamento;

    /**
     * @ORM\Column(type="integer")
     */
    private $capital_territorio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Departamento")
     */
    private $departamento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoDane(): ?string
    {
        return $this->codigo_dane;
    }

    public function setCodigoDane(string $codigo_dane): self
    {
        $this->codigo_dane = $codigo_dane;

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

    public function getCapitalDepartamento(): ?int
    {
        return $this->capital_departamento;
    }

    public function setCapitalDepartamento(int $capital_departamento): self
    {
        $this->capital_departamento = $capital_departamento;

        return $this;
    }

    public function getCapitalTerritorio(): ?int
    {
        return $this->capital_territorio;
    }

    public function setCapitalTerritorio(int $capital_territorio): self
    {
        $this->capital_territorio = $capital_territorio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartamento(): ?int
    {
        return $this->departamento;
    }

    /**
     * @param mixed $departamento
     */
    public function setDepartamento($departamento): void
    {
        $this->departamento = $departamento;
    }
}
