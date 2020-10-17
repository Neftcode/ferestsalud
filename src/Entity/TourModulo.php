<?php

namespace App\Entity;

use App\Repository\TourModuloRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TourModuloRepository::class)
 */
class TourModulo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_visualizado;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Modulo")
     */
    private $modulo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaVisualizado(): ?string
    {
        return $this->fecha_visualizado;
    }

    public function setFechaVisualizado(string $fecha_visualizado): self
    {
        $this->fecha_visualizado = $fecha_visualizado;

        return $this;
    }
    
    /**
     * Get the value of modulo
     */ 
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set the value of modulo
     *
     * @return  self
     */ 
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
}
