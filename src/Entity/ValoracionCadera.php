<?php

namespace App\Entity;

use App\Repository\ValoracionCaderaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionCaderaRepository::class)
 */
class ValoracionCadera
{
    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity=ValoracionGeneral::class, cascade={"persist", "remove"})
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
