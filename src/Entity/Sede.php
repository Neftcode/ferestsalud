<?php
// Clase de Sedes
namespace App\Entity;

use App\Repository\SedeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SedeRepository::class)
 */
class Sede
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $proyecto;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $direccion;
    
    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $observaciones;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad")
     */
    private $ciudad;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProyecto(): ?string
    {
        return $this->proyecto;
    }

    public function setProyecto(string $proyecto): self
    {
        $this->proyecto = $proyecto;

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

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

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

    public function getCiudad(): ?Ciudad
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
    
}
