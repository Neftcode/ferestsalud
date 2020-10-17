<?php

namespace App\Entity;

use App\Repository\UsuarioNotificacionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuarioNotificacionRepository::class)
 */
class UsuarioNotificacion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $observaciones;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_registro;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_envio;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

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

    public function getFechaEnvio(): ?string
    {
        return $this->fecha_envio;
    }

    public function setFechaEnvio(string $fecha_envio): self
    {
        $this->fecha_envio = $fecha_envio;

        return $this;
    }
}
