<?php
// Clase de Tipos de Contrato
namespace App\Entity;

use App\Repository\TipoContratoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoContratoRepository::class)
 */
class TipoContrato
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
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Usuario", mappedBy="tipo_contrato")
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

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones($observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
    
}
