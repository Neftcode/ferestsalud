<?php

namespace App\Entity;

use App\Repository\DepartamentoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartamentoRepository::class)
 */
class Departamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $codigo_dane;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ciudad", mappedBy="departamento")
     */
    private $ciudades;

    public function __construct()
    {
        $this->ciudades = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoDane(): ?int
    {
        return $this->codigo_dane;
    }

    public function setCodigoDane(int $codigo_dane): self
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

    /**
     * @return  Collection|Ciudad[]
     */
    public function getCiudad(): Collection
    {
        return $this->ciudades;
    }

    public function addCiudad(Ciudad $ciudad): self
    {
        if (!$this->ciudades->contains($ciudad)) {
            $this->ciudades[] = $ciudad;
            $ciudad->setDepartamento($this);
        }

        return $this;
    }

    public function removeCiudad(Ciudad $ciudad): self
    {
        if ($this->ciudades->contains($ciudad)) {
            $this->ciudades->removeElement($ciudad);
            if ($ciudad->getDepartamento() === $this) {
                $ciudad->setDepartamento(null);
            }

            return $this;
        }
    }

    public function __toString()
    {
        return $this->getNombre();
    }

}
