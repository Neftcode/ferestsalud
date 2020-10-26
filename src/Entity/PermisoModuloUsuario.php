<?php

namespace App\Entity;

use App\Repository\PermisoModuloUsuarioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PermisoModuloUsuarioRepository::class)
 */
class PermisoModuloUsuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Modulo")
     */
    private $modulo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rol")
     */
    private $rol;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModulo(): ?Modulo
    {
        return $this->modulo;
    }

    public function setModulo($modulo): self
    {
        $this->modulo = $modulo;

        return $this;
    }

    public function getRol(): ?Rol
    {
        return $this->rol;
    }

    public function setRol($rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario($usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function __toString()
    {
        $modulo = $this->getModulo() == NULL ? 'Nulo' : $this->getModulo();
        $rol = $this->getRol() == NULL ? 'Nulo' : $this->getRol();
        $usuario = $this->getUsuario() == NULL ? 'Nulo' : $this->getUsuario();
        return $modulo . ', ' . $rol . ', ' . $usuario;
    }
    
}