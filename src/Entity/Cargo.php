<?php

namespace App\Entity;

use App\Repository\CargoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CargoRepository::class)
 */
class Cargo
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
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPracticante")
     */
    private $tipo_practicante;

    public function getId(): ?int
    {
        return $this->id;
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
     * Get the value of tipo_practicante
     */ 
    public function getTipo_practicante(): ?int
    {
        return $this->tipo_practicante;
    }

    /**
     * Set the value of tipo_practicante
     *
     * @return  self
     */ 
    public function setTipo_practicante($tipo_practicante): self
    {
        $this->tipo_practicante = $tipo_practicante;

        return $this;
    }
}
