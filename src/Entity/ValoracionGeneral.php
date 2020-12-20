<?php

namespace App\Entity;

use App\Repository\ValoracionGeneralRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ValoracionGeneralRepository::class)
 */
class ValoracionGeneral
{
    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity=Admision::class, cascade={"persist", "remove"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sesiones;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $peso;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $talla;

    /**
     * @ORM\Column(type="text")
     */
    private $cronologia_patologia;

    /**
     * @ORM\Column(type="text")
     */
    private $diagnostico;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antecedentes_patologicos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antecedentes_quirurgicos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antecedentes_traumaticos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antecedentes_cardiovascular;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antecedentes_farmacologicos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antecedentes_ginecologicos;

    /**
     * @ORM\ManyToOne(targetEntity=Cie10Rips::class)
     */
    private $cie10;

    /**
     * @ORM\OneToOne(targetEntity=Usuario::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fisioterapeuta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSesiones(): ?int
    {
        return $this->sesiones;
    }

    public function setSesiones(?int $sesiones): self
    {
        $this->sesiones = $sesiones;

        return $this;
    }

    public function getPeso(): ?float
    {
        return $this->peso;
    }

    public function setPeso(float $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getTalla(): ?float
    {
        return $this->talla;
    }

    public function setTalla(float $talla): self
    {
        $this->talla = $talla;

        return $this;
    }

    public function getCronologiaPatologia(): ?string
    {
        return $this->cronologia_patologia;
    }

    public function setCronologiaPatologia(string $cronologia_patologia): self
    {
        $this->cronologia_patologia = $cronologia_patologia;

        return $this;
    }

    public function getDiagnostico(): ?string
    {
        return $this->diagnostico;
    }

    public function setDiagnostico(string $diagnostico): self
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    public function getAntecedentesPatologicos(): ?string
    {
        return $this->antecedentes_patologicos;
    }

    public function setAntecedentesPatologicos(?string $antecedentes_patologicos): self
    {
        $this->antecedentes_patologicos = $antecedentes_patologicos;

        return $this;
    }

    public function getAntecedentesQuirurgicos(): ?string
    {
        return $this->antecedentes_quirurgicos;
    }

    public function setAntecedentesQuirurgicos(?string $antecedentes_quirurgicos): self
    {
        $this->antecedentes_quirurgicos = $antecedentes_quirurgicos;

        return $this;
    }

    public function getAntecedentesTraumaticos(): ?string
    {
        return $this->antecedentes_traumaticos;
    }

    public function setAntecedentesTraumaticos(?string $antecedentes_traumaticos): self
    {
        $this->antecedentes_traumaticos = $antecedentes_traumaticos;

        return $this;
    }

    public function getAntecedentesCardiovascular(): ?string
    {
        return $this->antecedentes_cardiovascular;
    }

    public function setAntecedentesCardiovascular(?string $antecedentes_cardiovascular): self
    {
        $this->antecedentes_cardiovascular = $antecedentes_cardiovascular;

        return $this;
    }

    public function getAntecedentesFarmacologicos(): ?string
    {
        return $this->antecedentes_farmacologicos;
    }

    public function setAntecedentesFarmacologicos(?string $antecedentes_farmacologicos): self
    {
        $this->antecedentes_farmacologicos = $antecedentes_farmacologicos;

        return $this;
    }

    public function getAntecedentesGinecologicos(): ?string
    {
        return $this->antecedentes_ginecologicos;
    }

    public function setAntecedentesGinecologicos(?string $antecedentes_ginecologicos): self
    {
        $this->antecedentes_ginecologicos = $antecedentes_ginecologicos;

        return $this;
    }

    public function getCie10(): ?Cie10Rips
    {
        return $this->cie10;
    }

    public function setCie10(?Cie10Rips $cie10): self
    {
        $this->cie10 = $cie10;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->fisioterapeuta;
    }

    public function setUsuario(Usuario $fisioterapeuta): self
    {
        $this->fisioterapeuta = $fisioterapeuta;

        return $this;
    }
}
