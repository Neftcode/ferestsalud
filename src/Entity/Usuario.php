<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 */
class Usuario implements UserInterface
{
    const REGISTRO_MENSAJE = "¡Usuario registrado exitosamente!";
    /**
     * @ORM\Id()
     * @ORM\Column(type="string", length=15)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombres;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $fecha_nacimiento;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fecha_expedicion;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $fecha_ingreso;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $fecha_salida;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $correo_personal;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $contacto_personal;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $direccion_residencia;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $contacto_emergencia_nombre;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $contacto_emergencia_numero;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $correo_corporativo;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $salario_basico;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $bono;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $auxilio_transporte;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dotacion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $carnet;

    /**
     * @ORM\Column(type="boolean")
     */
    private $control_logueo;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $fecha_registro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Genero")
     * @ORM\JoinColumn(name="genero_id", referencedColumnName="id")
     */
    private $genero;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Arl")
     */
    private $arl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CajaCompensacion")
     */
    private $caja_compensacion;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\OperacionUsuario")
     */
    private $cargo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad")
     */
    private $ciudad_residencia;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Eps")
     */
    private $eps;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EstadoUsuario")
     */
    private $estado_usuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FondoCesantias")
     */
    private $fondo_cesantias;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\FondoPensiones")
     */
    private $fondo_pensiones;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     */
    private $jefe_directo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rh")
     */
    private $rh;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Sede")
     */
    private $sede_laboral;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoContrato")
     */
    private $tipo_contrato;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoDocumento")
     */
    private $tipo_documento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoSangre")
     */
    private $tipo_sangre;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNombres(): ?string
    {
        return $this->nombres;
    }

    public function setNombres(string $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getFechaExpedicion(): ?string
    {
        return $this->fecha_expedicion;
    }

    public function setFechaExpedicion(string $fecha_expedicion): self
    {
        $this->fecha_expedicion = $fecha_expedicion;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(string $fecha_nacimiento): self
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    public function getFechaIngreso(): ?string
    {
        return $this->fecha_ingreso;
    }

    public function setFechaIngreso(string $fecha_ingreso): self
    {
        $this->fecha_ingreso = $fecha_ingreso;

        return $this;
    }

    public function getFechaSalida(): ?string
    {
        return $this->fecha_salida;
    }

    public function setFechaSalida(?string $fecha_salida): self
    {
        $this->fecha_salida = $fecha_salida;

        return $this;
    }

    public function getCorreoPersonal(): ?string
    {
        return $this->correo_personal;
    }

    public function setCorreoPersonal(string $correo_personal): self
    {
        $this->correo_personal = $correo_personal;

        return $this;
    }

    public function getContactoPersonal(): ?string
    {
        return $this->contacto_personal;
    }

    public function setContactoPersonal(string $contacto_personal): self
    {
        $this->contacto_personal = $contacto_personal;

        return $this;
    }

    public function getDireccionResidencia(): ?string
    {
        return $this->direccion_residencia;
    }

    public function setDireccionResidencia(string $direccion_residencia): self
    {
        $this->direccion_residencia = $direccion_residencia;

        return $this;
    }

    public function getContactoEmergenciaNombre(): ?string
    {
        return $this->contacto_emergencia_nombre;
    }

    public function setContactoEmergenciaNombre(string $contacto_emergencia_nombre): self
    {
        $this->contacto_emergencia_nombre = $contacto_emergencia_nombre;

        return $this;
    }

    public function getContactoEmergenciaNumero(): ?string
    {
        return $this->contacto_emergencia_numero;
    }

    public function setContactoEmergenciaNumero(string $contacto_emergencia_numero): self
    {
        $this->contacto_emergencia_numero = $contacto_emergencia_numero;

        return $this;
    }

    public function getCorreoCorporativo(): ?string
    {
        return $this->correo_corporativo;
    }

    public function setCorreoCorporativo(string $correo_corporativo): self
    {
        $this->correo_corporativo = $correo_corporativo;

        return $this;
    }

    public function getSalarioBasico(): ?string
    {
        return $this->salario_basico;
    }

    public function setSalarioBasico(string $salario_basico): self
    {
        $this->salario_basico = $salario_basico;

        return $this;
    }

    public function getBono(): ?string
    {
        return $this->bono;
    }

    public function setBono(string $bono): self
    {
        $this->bono = $bono;

        return $this;
    }

    public function getAuxilioTransporte(): ?string
    {
        return $this->auxilio_transporte;
    }

    public function setAuxilioTransporte(string $auxilio_transporte): self
    {
        $this->auxilio_transporte = $auxilio_transporte;

        return $this;
    }

    public function getDotacion(): ?bool
    {
        return $this->dotacion;
    }

    public function setDotacion(bool $dotacion): self
    {
        $this->dotacion = $dotacion;

        return $this;
    }

    public function getCarnet(): ?bool
    {
        return $this->carnet;
    }

    public function setCarnet(bool $carnet): self
    {
        $this->carnet = $carnet;

        return $this;
    }

    public function getControlLogueo(): ?bool
    {
        return $this->control_logueo;
    }

    public function setControlLogueo(bool $control_logueo): self
    {
        $this->control_logueo = $control_logueo;

        return $this;
    }

    public function getFechaRegistro(): ?string
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro($fecha_registro): self
    {
        $this->fecha_registro = $fecha_registro;

        return $this;
    }

    public function getGenero(): ?Genero
    {
        return $this->genero;
    }
    
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getArl(): ?Arl
    {
        return $this->arl;
    }

    public function setArl($arl): self
    {
        $this->arl = $arl;

        return $this;
    }

    public function getCajaCompensacion(): ?CajaCompensacion
    {
        return $this->caja_compensacion;
    }

    public function setCajaCompensacion($caja_compensacion): self
    {
        $this->caja_compensacion = $caja_compensacion;

        return $this;
    }

    public function getCargo(): ?OperacionUsuario
    {
        return $this->cargo;
    }

    public function setCargo($cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getCiudadResidencia(): ?Ciudad
    {
        return $this->ciudad_residencia;
    }

    public function setCiudadResidencia($ciudad_residencia): self
    {
        $this->ciudad_residencia = $ciudad_residencia;

        return $this;
    }

    public function getEps(): ?Eps
    {
        return $this->eps;
    }

    public function setEps($eps): self
    {
        $this->eps = $eps;

        return $this;
    }

    public function getEstadoUsuario(): ?EstadoUsuario
    {
        return $this->estado_usuario;
    }

    public function setEstadoUsuario($estado_usuario): self
    {
        $this->estado_usuario = $estado_usuario;

        return $this;
    }

    public function getFondoCesantias(): ?FondoCesantias
    {
        return $this->fondo_cesantias;
    }

    public function setFondoCesantias($fondo_cesantias): self
    {
        $this->fondo_cesantias = $fondo_cesantias;

        return $this;
    }

    public function getFondoPensiones(): ?FondoPensiones
    {
        return $this->fondo_pensiones;
    }

    public function setFondoPensiones($fondo_pensiones): self
    {
        $this->fondo_pensiones = $fondo_pensiones;

        return $this;
    }

    public function getJefeDirecto(): ?Usuario
    {
        return $this->jefe_directo;
    }

    public function setJefeDirecto($jefe_directo): self
    {
        $this->jefe_directo = $jefe_directo;

        return $this;
    }

    public function getRh(): ?Rh
    {
        return $this->rh;
    }

    public function setRh($rh): self
    {
        $this->rh = $rh;

        return $this;
    }

    public function getSedeLaboral(): ?Sede
    {
        return $this->sede_laboral;
    }

    public function setSedeLaboral($sede_laboral): self
    {
        $this->sede_laboral = $sede_laboral;

        return $this;
    }

    public function getTipoContrato(): ?TipoContrato
    {
        return $this->tipo_contrato;
    }

    public function setTipoContrato($tipo_contrato): self
    {
        $this->tipo_contrato = $tipo_contrato;

        return $this;
    }

    public function getTipoDocumento(): ?TipoDocumento
    {
        return $this->tipo_documento;
    }

    public function setTipoDocumento($tipo_documento): self
    {
        $this->tipo_documento = $tipo_documento;

        return $this;
    }

    public function getTipoSangre(): ?TipoSangre
    {
        return $this->tipo_sangre;
    }

    public function setTipoSangre($tipo_sangre): self
    {
        $this->tipo_sangre = $tipo_sangre;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function __toString()
    {
        return $this->getNombres().' '.$this->getApellidos();
    }

}
