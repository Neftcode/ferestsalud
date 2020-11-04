<?php
// Clase de Géneros
namespace App\Entity;

use App\Repository\GeneroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GeneroRepository::class)
 */
class Genero
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $alt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Usuario", mappedBy="genero")
     */
    private $usuario;

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

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt($alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function __toString()
    {
        return $this->getAlt();
    }
    
}
