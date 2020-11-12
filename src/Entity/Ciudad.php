<?php
// Clase de ciudades
namespace App\Entity;

use App\Repository\CiudadRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;

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
     * @ORM\Column(type="string", length=30)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $codigo_dane;

    /**
     * @ORM\Column(type="boolean")
     */
    private $capital_departamento;

    /**
     * @ORM\Column(type="boolean")
     */
    private $capital_territorio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Departamento", inversedBy="ciudades")
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

    public function getCapitalDepartamento(): ?bool
    {
        return $this->capital_departamento;
    }

    public function setCapitalDepartamento(bool $capital_departamento): self
    {
        $this->capital_departamento = $capital_departamento;

        return $this;
    }

    public function getCapitalTerritorio(): ?bool
    {
        return $this->capital_territorio;
    }

    public function setCapitalTerritorio(bool $capital_territorio): self
    {
        $this->capital_territorio = $capital_territorio;

        return $this;
    }

    public function getDepartamento(): ?Departamento
    {
        return $this->departamento;
    }

    public function setDepartamento($departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function __toString()
    {
        $departamento = $this->getDepartamento()==NULL ? '' : ', '.$this->getDepartamento();
        return $this->getNombre().$departamento;
    }
    
}
