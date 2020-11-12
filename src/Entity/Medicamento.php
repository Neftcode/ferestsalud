<?php
// Clase de Medicamentos
namespace App\Entity;

use App\Repository\MedicamentoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicamentoRepository::class)
 */
class Medicamento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $reg_san_invima;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $principio_activo;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $concentracion;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $forma_farmaceutica;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

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

    public function getRegSanInvima(): ?string
    {
        return $this->reg_san_invima;
    }

    public function setRegSanInvima(string $reg_san_invima): self
    {
        $this->reg_san_invima = $reg_san_invima;

        return $this;
    }

    public function getPrincipioActivo(): ?string
    {
        return $this->principio_activo;
    }

    public function setPrincipioActivo(string $principio_activo): self
    {
        $this->principio_activo = $principio_activo;

        return $this;
    }

    public function getConcentracion(): ?string
    {
        return $this->concentracion;
    }

    public function setConcentracion(string $concentracion): self
    {
        $this->concentracion = $concentracion;

        return $this;
    }

    public function getFormaFarmaceutica(): ?string
    {
        return $this->forma_farmaceutica;
    }

    public function setFormaFarmaceutica(string $forma_farmaceutica): self
    {
        $this->forma_farmaceutica = $forma_farmaceutica;

        return $this;
    }

    public function __toString()
    {
        return $this->getCodigo() . ', ' . $this->getNombre();
    }

}
