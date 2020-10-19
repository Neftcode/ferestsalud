<?php

namespace App\Entity;

use App\Repository\ModuloRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuloRepository::class)
 */
class Modulo
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
     * @ORM\Column(type="string", length=200, unique=true)
     */
    private $nombre_alt;

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

    public function getNombreAlt(): ?string
    {
        return $this->nombre_alt;
    }

    public function setNombreAlt(string $nombre_alt): self
    {
        $this->nombre_alt = $nombre_alt;

        return $this;
    }
}
