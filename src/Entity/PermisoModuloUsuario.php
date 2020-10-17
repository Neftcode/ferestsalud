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

    /**
     * @return mixed
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * @param mixed $modulo
     */
    public function setModulo($modulo): void
    {
        $this->modulo = $modulo;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol): void
    {
        $this->rol = $rol;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }
}