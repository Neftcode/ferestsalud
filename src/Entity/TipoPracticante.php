<?php
// Clase de Tipos de Practicante
namespace App\Entity;

use App\Repository\TipoPracticanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoPracticanteRepository::class)
 */
class TipoPracticante
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
     * @ORM\OneToMany(targetEntity="App\Entity\Cargo", mappedBy="tipo_practicante")
     */
    private $cargos;

    public function __construct()
    {
        $this->cargos = new ArrayCollection();
    }

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
     * @return  Collection|Cargo[]
     */
    public function getCargos(): Collection{
        return $this->cargos;
    }

    public function addCargo(Cargo $cargo): self
    {
        if (!$this->cargos->contains($cargo)) {
            $this->cargos[] = $cargo;
            $cargo->setTipoPracticante($this);
        }

        return $this;
    }

    public function removeCargo(Cargo $cargo): self
    {
        if ($this->cargos->contains($cargo)) {
            $this->cargos->removeElement($cargo);
            if ($cargo->getTipoPracticante() === $this) {
                $cargo->setTipoPracticante(null);
            }

            return $this;
        }
    }

    public function __toString()
    {
        return $this->getNombre();
    }

}
