<?php

namespace App\Entity;

use App\Repository\StorageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StorageRepository::class)
 */
class Storage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $extension;

    /**
     * @ORM\Column(type="string", length=10000)
     */
    private $path;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tipo;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $entidad_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $entidad_nombre;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_registro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario_registro;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getEntidadId(): ?string
    {
        return $this->entidad_id;
    }

    public function setEntidadId(string $entidad_id): self
    {
        $this->entidad_id = $entidad_id;

        return $this;
    }

    public function getEntidadNombre(): ?string
    {
        return $this->entidad_nombre;
    }

    public function setEntidadNombre(string $entidad_nombre): self
    {
        $this->entidad_nombre = $entidad_nombre;

        return $this;
    }

    public function getFechaRegistro(): ?string
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro(string $fecha_registro): self
    {
        $this->fecha_registro = $fecha_registro;

        return $this;
    }

    /**
     * Get the value of usuario_registro
     */ 
    public function getUsuario_registro(): ?int
    {
        return $this->usuario_registro;
    }

    /**
     * Set the value of usuario_registro
     *
     * @return  self
     */ 
    public function setUsuario_registro($usuario_registro): self
    {
        $this->usuario_registro = $usuario_registro;

        return $this;
    }
}
