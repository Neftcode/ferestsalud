<?php
// Clase de EPS
namespace App\Entity;

use App\Repository\EpsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EpsRepository::class)
 */
class Eps
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
     * @ORM\OneToMany(targetEntity="App\Entity\Usuario", mappedBy="eps")
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

    public function __toString()
    {
        return $this->getNombre();
    }
    
}
