<?php
// Clase de Cargos
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
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPracticante", inversedBy="cargos")
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
    
    public function getTipoPracticante(): ?TipoPracticante
    {
        return $this->tipo_practicante;
    }

    public function setTipoPracticante($tipo_practicante): self
    {
        $this->tipo_practicante = $tipo_practicante;

        return $this;
    }

    public function __toString()
    {
        $tipo_practicante = $this->getTipoPracticante()==NULL ? '' : ', '.$this->getTipoPracticante()->getNombre();
        return $this->getNombre().$tipo_practicante;
    }

}
