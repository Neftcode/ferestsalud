<?php

namespace App\Entity;

use App\Repository\DepartamentoRepository;
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
}
