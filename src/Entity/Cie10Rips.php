<?php

namespace App\Entity;

use App\Repository\Cie10RipsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Cie10RipsRepository::class)
 */
class Cie10Rips
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=5)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $simbolo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexo;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $limite_inferior;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $limite_superior;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $no_afeccion_principal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $observaciones;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSimbolo(): ?string
    {
        return $this->simbolo;
    }

    public function setSimbolo(?string $simbolo): self
    {
        $this->simbolo = $simbolo;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getLimiteInferior(): ?string
    {
        return $this->limite_inferior;
    }

    public function setLimiteInferior(string $limite_inferior): self
    {
        $this->limite_inferior = $limite_inferior;

        return $this;
    }

    public function getLimiteSuperior(): ?string
    {
        return $this->limite_superior;
    }

    public function setLimiteSuperior(string $limite_superior): self
    {
        $this->limite_superior = $limite_superior;

        return $this;
    }

    public function getNoAfeccionPrincipal(): ?string
    {
        return $this->no_afeccion_principal;
    }

    public function setNoAfeccionPrincipal(?string $no_afeccion_principal): self
    {
        $this->no_afeccion_principal = $no_afeccion_principal;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function __toString()
    {
        return $this->getId().', '.$this->getDescripcion();
    }

}
