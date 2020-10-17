<?php

namespace App\Controller;

use App\Entity\Arl;
use App\Entity\CajaCompensacion;
use App\Entity\Eps;
use App\Entity\OperacionUsuario;
use App\Entity\Rol;
use App\Entity\Storage;
use App\Entity\TipoDocumento;
use App\Entity\TourModulo;
use App\Entity\Area;
use App\Entity\Cargo;
use App\Entity\Ciudad;
use App\Entity\Departamento;
use App\Entity\EstadoUsuario;
use App\Entity\FondoCesantias;
use App\Entity\FondoPensiones;
use App\Entity\Genero;
use App\Entity\Modulo;
use App\Entity\Operacion;
use App\Entity\PermisoModuloUsuario;
use App\Entity\Rh;
use App\Entity\Sede;
use App\Entity\TipoContrato;
use App\Entity\TipoPracticante;
use App\Entity\TipoSangre;
use App\Entity\Usuario;
use App\Entity\UsuarioNotificacion;

use App\Form\ArlType;
use App\Form\CajaCompensacionType;
use App\Form\EpsType;
use App\Form\OperacionUsuarioType;
use App\Form\RolType;
use App\Form\StorageType;
use App\Form\TipoDocumentoType;
use App\Form\TourModuloType;
use App\Form\AreaType;
use App\Form\CargoType;
use App\Form\CiudadType;
use App\Form\DepartamentoType;
use App\Form\EstadoUsuarioType;
use App\Form\FondoCesantiasType;
use App\Form\FondoPensionesType;
use App\Form\GeneroType;
use App\Form\ModuloType;
use App\Form\OperacionType;
use App\Form\PermisoModuloUsuarioType;
use App\Form\RhType;
use App\Form\SedeType;
use App\Form\TipoContratoType;
use App\Form\TipoPracticanteType;
use App\Form\TipoSangreType;
use App\Form\UsuarioType;
use App\Form\UsuarioNotificacionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistroConfiguracionController extends AbstractController
{
    /**
     * @Route("/registro/configuracion", name="registro_configuracion")
     * @param Request $request
     * @param $CajaCompensacion
     * @param $Cargo
     * @param $Ciudad
     * @param $Area
     * @param $Arl
     * @param $Departamento
     * @param $Eps
     * @param $EstadoUsuario
     * @param $FondoCesantias
     * @param $FondoPensiones
     * @param $Modulo
     * @param $Operacion
     * @param $OperacionUsuario
     * @param $PermisoModuloUsuario
     * @param $Rh
     * @param $Rol
     * @param $Sede
     * @param $Storage
     * @param $TipoContrato
     * @param $TipoDocumento
     * @param $TipoPracticante
     * @param $TipoSangre
     * @param $TourModulo
     * @param $Usuario
     * @param $UsuarioNotificacion
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = $this->getUser();
        $userRoles = $user->getRoles();
        if (!in_array("ROLE_SUPER_ADMIN", $userRoles)) {
            return $this->redirectToRoute('dashboard');
        }
        /**
         * Formulario Area
         */
        $area = new Area();
        $formArea = $this->createForm(AreaType::class, $area);
        // $formArea = $this->get('form.factory')->createNamed('my_name', ArlType::class, $area);//modificar el nombre del formulario
        $formArea->handleRequest($request);
        if ($formArea->isSubmitted() && $formArea->isValid()) {
            $emArl = $this->getDoctrine()->getManager();
            $emArl->persist($area);
            $emArl->flush();
            $this->addFlash('success', 'Área registrada exitosamente!');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Arl
         */
        $arl = new Arl();
        $formArl = $this->createForm(ArlType::class, $arl);
        // $formArl = $this->get('form.factory')->createNamed('my_name', ArlType::class, $arl);//modificar el nombre del formulario
        $formArl->handleRequest($request);
        if ($formArl->isSubmitted() && $formArl->isValid()) {
            $emArl = $this->getDoctrine()->getManager();
            $emArl->persist($arl);
            $emArl->flush();
            $this->addFlash('success', '¡Arl registrada exitosamente!');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Eps
         */
        $eps = new Eps();
        $formEps = $this->createForm(EpsType::class, $eps);
        // $formEps = $this->get('form.factory')->createNamed('my_name', EpsType::class, $eps);//modificar el nombre del formulario
        $formEps->handleRequest($request);
        if ($formEps->isSubmitted() && $formEps->isValid()) {
            $emEps = $this->getDoctrine()->getManager();
            $emEps->persist($eps);
            $emEps->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario CajaCompensacion
         */
        $CajaCompensacion = new CajaCompensacion();
        $formCajaCompensacion = $this->createForm(CajaCompensacionType::class, $CajaCompensacion);
        // $formCajaCompensacion = $this->get('form.factory')->createNamed('my_name', CajaCompensacionType::class, $CajaCompensacion);//modificar el nombre del formulario
        $formCajaCompensacion->handleRequest($request);
        if ($formCajaCompensacion->isSubmitted() && $formCajaCompensacion->isValid()) {
            $emCajaCompensacion = $this->getDoctrine()->getManager();
            $emCajaCompensacion->persist($CajaCompensacion);
            $emCajaCompensacion->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Cargo
         */
        $Cargo = new Cargo();
        $formCargo = $this->createForm(CargoType::class, $Cargo);
        // $formCargo = $this->get('form.factory')->createNamed('my_name', CargoType::class, $Cargo);//modificar el nombre del formulario
        $formCargo->handleRequest($request);
        if ($formCargo->isSubmitted() && $formCargo->isValid()) {
            $tipoPracticante = $formCargo->get("tipo_practicante")->getData();
            $Cargo->setTipo_practicante($tipoPracticante);
            $emCargo = $this->getDoctrine()->getManager();
            $emCargo->persist($Cargo);
            $emCargo->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Ciudad
         */
        $Ciudad = new Ciudad();
        $formCiudad = $this->createForm(CiudadType::class, $Ciudad);
        // $formCiudad = $this->get('form.factory')->createNamed('my_name', CiudadType::class, $Ciudad);//modificar el nombre del formulario
        $formCiudad->handleRequest($request);
        if ($formCiudad->isSubmitted() && $formCiudad->isValid()) {
            $departamento = $formCiudad->get("departamento")->getData();
            $Ciudad->setDepartamento($departamento);
            $emCiudad = $this->getDoctrine()->getManager();
            $emCiudad->persist($Ciudad);
            $emCiudad->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Departamento
         */
        $Departamento = new Departamento();
        $formDepartamento = $this->createForm(DepartamentoType::class, $Departamento);
        // $formDepartamento = $this->get('form.factory')->createNamed('my_name', DepartamentoType::class, $Departamento);//modificar el nombre del formulario
        $formDepartamento->handleRequest($request);
        if ($formDepartamento->isSubmitted() && $formDepartamento->isValid()) {
            $emDepartamento = $this->getDoctrine()->getManager();
            $emDepartamento->persist($Departamento);
            $emDepartamento->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario EstadoUsuario
         */
        $EstadoUsuario = new EstadoUsuario();
        $formEstadoUsuario = $this->createForm(EstadoUsuarioType::class, $EstadoUsuario);
        // $formEstadoUsuario = $this->get('form.factory')->createNamed('my_name', EstadoUsuarioType::class, $EstadoUsuario);//modificar el nombre del formulario
        $formEstadoUsuario->handleRequest($request);
        if ($formEstadoUsuario->isSubmitted() && $formEstadoUsuario->isValid()) {
            $emEstadoUsuario = $this->getDoctrine()->getManager();
            $emEstadoUsuario->persist($EstadoUsuario);
            $emEstadoUsuario->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario FondoCesantias
         */
        $FondoCesantias = new FondoCesantias();
        $formFondoCesantias = $this->createForm(FondoCesantiasType::class, $FondoCesantias);
        // $formFondoCesantias = $this->get('form.factory')->createNamed('my_name', FondoCesantiasType::class, $FondoCesantias);//modificar el nombre del formulario
        $formFondoCesantias->handleRequest($request);
        if ($formFondoCesantias->isSubmitted() && $formFondoCesantias->isValid()) {
            $emFondoCesantias = $this->getDoctrine()->getManager();
            $emFondoCesantias->persist($FondoCesantias);
            $emFondoCesantias->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario FondoPensiones
         */
        $FondoPensiones = new FondoPensiones();
        $formFondoPensiones = $this->createForm(FondoPensionesType::class, $FondoPensiones);
        // $formFondoPensiones = $this->get('form.factory')->createNamed('my_name', FondoPensionesType::class, $FondoPensiones);//modificar el nombre del formulario
        $formFondoPensiones->handleRequest($request);
        if ($formFondoPensiones->isSubmitted() && $formFondoPensiones->isValid()) {
            $emFondoPensiones = $this->getDoctrine()->getManager();
            $emFondoPensiones->persist($FondoPensiones);
            $emFondoPensiones->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Género
         */
        $genero = new Genero();
        $formGenero = $this->createForm(GeneroType::class, $genero);
        // $formGenero = $this->get('form.factory')->createNamed('my_name', GeneroType::class, $genero);//modificar el nombre del formulario
        $formGenero->handleRequest($request);
        if ($formGenero->isSubmitted() && $formGenero->isValid()) {
            $emGenero = $this->getDoctrine()->getManager();
            $emGenero->persist($genero);
            $emGenero->flush();
            $this->addFlash('success', '¡Género registrado exitosamente!');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Modulo
         */
        $Modulo = new Modulo();
        $formModulo = $this->createForm(ModuloType::class, $Modulo);
        // $formModulo = $this->get('form.factory')->createNamed('my_name', ModuloType::class, $Modulo);//modificar el nombre del formulario
        $formModulo->handleRequest($request);
        if ($formModulo->isSubmitted() && $formModulo->isValid()) {
            $emModulo = $this->getDoctrine()->getManager();
            $emModulo->persist($Modulo);
            $emModulo->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Operacion
         */
        $Operacion = new Operacion();
        $formOperacion = $this->createForm(OperacionType::class, $Operacion);
        // $formOperacion = $this->get('form.factory')->createNamed('my_name', OperacionType::class, $Operacion);//modificar el nombre del formulario
        $formOperacion->handleRequest($request);
        if ($formOperacion->isSubmitted() && $formOperacion->isValid()) {
            $emOperacion = $this->getDoctrine()->getManager();
            $emOperacion->persist($Operacion);
            $emOperacion->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
        /**
         * Formulario OperacionUsuario
         */

        $OperacionUsuario = new OperacionUsuario();
        $formOperacionUsuario = $this->createForm(OperacionUsuarioType::class, $OperacionUsuario);
        // $formOperacionUsuario = $this->get('form.factory')->createNamed('my_name', OperacionUsuarioType::class, $OperacionUsuario);//modificar el nombre del formulario
        $formOperacionUsuario->handleRequest($request);
        if ($formOperacionUsuario->isSubmitted() && $formOperacionUsuario->isValid()) {
            $area = $formOperacionUsuario->get("area")->getData();
            $OperacionUsuario->setArea($area);
            $operacion = $formOperacionUsuario->get("operacion")->getData();
            $OperacionUsuario->setOperacion($operacion);
            $cargo = $formOperacionUsuario->get("cargo")->getData();
            $OperacionUsuario->setCargo($cargo);
            $emOperacionUsuario = $this->getDoctrine()->getManager();
            $emOperacionUsuario->persist($OperacionUsuario);
            $emOperacionUsuario->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario PermisoModuloUsuario
         */
        $PermisoModuloUsuario = new PermisoModuloUsuario();
        $formPermisoModuloUsuario = $this->createForm(PermisoModuloUsuarioType::class, $PermisoModuloUsuario);
        // $formPermisoModuloUsuario = $this->get('form.factory')->createNamed('my_name', PermisoModuloUsuarioType::class, $PermisoModuloUsuario);//modificar el nombre del formulario
        $formPermisoModuloUsuario->handleRequest($request);
        if ($formPermisoModuloUsuario->isSubmitted() && $formPermisoModuloUsuario->isValid()) {
            $modulo = $formPermisoModuloUsuario->get("modulo")->getData();
            $PermisoModuloUsuario->setModulo($modulo);
            $rol = $formPermisoModuloUsuario->get("rol")->getData();
            $PermisoModuloUsuario->setRol($rol);
            $usuario = $formPermisoModuloUsuario->get("usuario")->getData();
            $PermisoModuloUsuario->setUsuario($usuario);
            $emPermisoModuloUsuario = $this->getDoctrine()->getManager();
            $emPermisoModuloUsuario->persist($PermisoModuloUsuario);
            $emPermisoModuloUsuario->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Rh
         */
        $Rh = new Rh();
        $formRh = $this->createForm(RhType::class, $Rh);
        // $formRh = $this->get('form.factory')->createNamed('my_name', RhType::class, $Rh);//modificar el nombre del formulario
        $formRh->handleRequest($request);
        if ($formRh->isSubmitted() && $formRh->isValid()) {
            $emRh = $this->getDoctrine()->getManager();
            $emRh->persist($Rh);
            $emRh->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Rol
         */
        $Rol = new Rol();
        $formRol = $this->createForm(RolType::class, $Rol);
        // $formRol = $this->get('form.factory')->createNamed('my_name', RhType::class, $Rh);//modificar el nombre del formulario
        $formRol->handleRequest($request);
        if ($formRol->isSubmitted() && $formRol->isValid()) {
            $emRol = $this->getDoctrine()->getManager();
            $emRol->persist($Rol);
            $emRol->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Sede
         */
        $Sede = new Sede();
        $formSede = $this->createForm(SedeType::class, $Sede);
        // $formSede = $this->get('form.factory')->createNamed('my_name', SedeType::class, $Sede);//modificar el nombre del formulario
        $formSede->handleRequest($request);
        if ($formSede->isSubmitted() && $formSede->isValid()) {
            $emSede = $this->getDoctrine()->getManager();
            $emSede->persist($Sede);
            $emSede->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Storage
         */
        $Storage = new Storage();
        $formStorage = $this->createForm(StorageType::class, $Storage);
        // $formStorage = $this->get('form.factory')->createNamed('my_name', StorageType::class, $Storage);//modificar el nombre del formulario
        $formStorage->handleRequest($request);
        if ($formStorage->isSubmitted() && $formStorage->isValid()) {
            $Storage->setFechaRegistro(date('Y-m-d H:i:m'));
            $Storage->setUsuario_registro($user);
            $emStorage = $this->getDoctrine()->getManager();
            $emStorage->persist($Storage);
            $emStorage->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario TipoContrato
         */
        $TipoContrato = new TipoContrato();
        $formTipoContrato = $this->createForm(TipoContratoType::class, $TipoContrato);
        // $formTipoContrato = $this->get('form.factory')->createNamed('my_name', TipoContratoType::class, $TipoContrato);//modificar el nombre del formulario
        $formTipoContrato->handleRequest($request);
        if ($formTipoContrato->isSubmitted() && $formTipoContrato->isValid()) {
            $emTipoContrato = $this->getDoctrine()->getManager();
            $emTipoContrato->persist($TipoContrato);
            $emTipoContrato->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario TipoDocumento
         */
        $TipoDocumento = new TipoDocumento();
        $formTipoDocumento = $this->createForm(TipoDocumentoType::class, $TipoDocumento);
        // $formTipoDocumento = $this->get('form.factory')->createNamed('my_name', TipoDocumentoType::class, $TipoDocumento);//modificar el nombre del formulario
        $formTipoDocumento->handleRequest($request);
        if ($formTipoDocumento->isSubmitted() && $formTipoDocumento->isValid()) {
            $emTipoDocumento = $this->getDoctrine()->getManager();
            $emTipoDocumento->persist($TipoDocumento);
            $emTipoDocumento->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario TipoPracticante
         */
        $TipoPracticante = new TipoPracticante();
        $formTipoPracticante = $this->createForm(TipoPracticanteType::class, $TipoPracticante);
        // $formTipoPracticante = $this->get('form.factory')->createNamed('my_name', TipoPracticanteType::class, $TipoPracticante);//modificar el nombre del formulario
        $formTipoPracticante->handleRequest($request);
        if ($formTipoPracticante->isSubmitted() && $formTipoPracticante->isValid()) {
            $emTipoPracticante = $this->getDoctrine()->getManager();
            $emTipoPracticante->persist($TipoPracticante);
            $emTipoPracticante->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario TipoSangre
         */
        $TipoSangre = new TipoSangre();
        $formTipoSangre = $this->createForm(TipoSangreType::class, $TipoSangre);
        // $formTipoSangre = $this->get('form.factory')->createNamed('my_name', TipoSangreType::class, $TipoSangre);//modificar el nombre del formulario
        $formTipoSangre->handleRequest($request);
        if ($formTipoSangre->isSubmitted() && $formTipoSangre->isValid()) {
            $emTipoSangre = $this->getDoctrine()->getManager();
            $emTipoSangre->persist($TipoSangre);
            $emTipoSangre->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario TourModulo
         */
        $TourModulo = new TourModulo();
        $formTourModulo = $this->createForm(TourModuloType::class, $TourModulo);
        // $formTourModulo = $this->get('form.factory')->createNamed('my_name', TourModuloType::class, $TourModulo);//modificar el nombre del formulario
        $formTourModulo->handleRequest($request);
        if ($formTourModulo->isSubmitted() && $formTourModulo->isValid()) {
            $TourModulo->setFechaVisualizado(date('Y-m-d H:i:m'));
            $usuario = $formTourModulo->get("usuario")->getData();
            $TourModulo->setUsuario($usuario);
            $modulo = $formTourModulo->get("modulo")->getData();
            $TourModulo->setModulo($modulo);
            $emTourModulo = $this->getDoctrine()->getManager();
            $emTourModulo->persist($TourModulo);
            $emTourModulo->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario Usuario
         */
        $Usuario = new Usuario();
        $formUsuario = $this->createForm(UsuarioType::class, $Usuario);
        // $formUsuario = $this->get('form.factory')->createNamed('my_name', UsuarioType::class, $Usuario);//modificar el nombre del formulario
        $formUsuario->handleRequest($request);
        if ($formUsuario->isSubmitted() && $formUsuario->isValid()) {
            $arl = $formUsuario->get("arl")->getData();
            $caja_compensacion = $formUsuario->get("caja_compensacion")->getData();
            $cargo = $formUsuario->get("cargo")->getData();
            $ciudad_residencia = $formUsuario->get("ciudad_residencia")->getData();
            $eps = $formUsuario->get("eps")->getData();
            $estado_usuario = $formUsuario->get("estado_usuario")->getData();
            $fondo_cesantias = $formUsuario->get("fondo_cesantias")->getData();
            $fondo_pensiones = $formUsuario->get("fondo_pensiones")->getData();
            $genero = $formUsuario->get("genero")->getData();
            $jefe_directo = $formUsuario->get("jefe_directo")->getData();
            $rh = $formUsuario->get("rh")->getData();
            $sede_laboral = $formUsuario->get("sede_laboral")->getData();
            $tipo_contrato = $formUsuario->get("tipo_contrato")->getData();
            $tipo_documento = $formUsuario->get("tipo_documento")->getData();
            $tipo_sangre = $formUsuario->get("tipo_sangre")->getData();
            $Usuario->setPassword($passwordEncoder->encodePassword($Usuario, $formUsuario["id"]->getData()));
            $Usuario->setRoles(['ROLE_USER']);
            $Usuario->setFechaRegistro(date('Y-m-d H:i:m'));
            $Usuario->setArl($arl);
            $Usuario->setCaja_compensacion($caja_compensacion);
            $Usuario->setCargo($cargo);
            $Usuario->setCiudad_residencia($ciudad_residencia);
            $Usuario->setEps($eps);
            $Usuario->setEstado_usuario($estado_usuario);
            $Usuario->setFondo_cesantias($fondo_cesantias);
            $Usuario->setFondo_pensiones($fondo_pensiones);
            $Usuario->setGenero($genero);
            $Usuario->setJefe_directo($jefe_directo);
            $Usuario->setRh($rh);
            $Usuario->setSede_laboral($sede_laboral);
            $Usuario->setTipo_contrato($tipo_contrato);
            $Usuario->setTipo_documento($tipo_documento);
            $Usuario->setTipo_sangre($tipo_sangre);

            $emUsuario = $this->getDoctrine()->getManager();
            $emUsuario->persist($Usuario);
            $emUsuario->flush();
            $this->addFlash('success', Usuario::REGISTRO_MENSAJE);
            return $this->redirectToRoute('registro_configuracion');
        }
        /**
         * Formulario UsuarioNotificacion
         */
        $UsuarioNotificacion = new UsuarioNotificacion();
        $formUsuarioNotificacion = $this->createForm(UsuarioNotificacionType::class, $UsuarioNotificacion);
        // $formUsuarioNotificacion = $this->get('form.factory')->createNamed('my_name', UsuarioNotificacionType::class, $UsuarioNotificacion);//modificar el nombre del formulario
        $formUsuarioNotificacion->handleRequest($request);
        if ($formUsuarioNotificacion->isSubmitted() && $formUsuarioNotificacion->isValid()) {
            $usuario = $formUsuarioNotificacion->get("usuario")->getData();
            $UsuarioNotificacion->setUsuario($usuario);
            $UsuarioNotificacion->setEstado('Pendiente');
            $UsuarioNotificacion->setFechaEnvio('');
            $UsuarioNotificacion->setFechaRegistro(date('Y-m-d H:i:m'));
            $emUsuarioNotificacion = $this->getDoctrine()->getManager();
            $emUsuarioNotificacion->persist($UsuarioNotificacion);
            $emUsuarioNotificacion->flush();
            $this->addFlash('success', 'Se ha registrado exitosamente');
            return $this->redirectToRoute('registro_configuracion');
        }

        return $this->render('registro_configuracion/index.html.twig', [
            'controller_name' => 'Configuraciones',
            'formArea' => $formArea->createView(),
            'formArl' => $formArl->createView(),
            'formEps' => $formEps->createView(),
            'formCajaCompensacion' => $formCajaCompensacion->createView(),
            'formCargo' => $formCargo->createView(),
            'formCiudad' => $formCiudad->createView(),
            'formDepartamento' => $formDepartamento->createView(),
            'formEstadoUsuario' => $formEstadoUsuario->createView(),
            'formFondoCesantias' => $formFondoCesantias->createView(),
            'formFondoPensiones' => $formFondoPensiones->createView(),
            'formGenero' => $formGenero->createView(),
            'formModulo' => $formModulo->createView(),
            'formOperacion' => $formOperacion->createView(),
            'formOperacionUsuario' => $formOperacionUsuario->createView(),
            'formPermisoModuloUsuario' => $formPermisoModuloUsuario->createView(),
            'formRh' => $formRh->createView(),
            'formRol' => $formRol->createView(),
            'formSede' => $formSede->createView(),
            'formStorage' => $formStorage->createView(),
            'formTipoContrato' => $formTipoContrato->createView(),
            'formTipoDocumento' => $formTipoDocumento->createView(),
            'formTipoPracticante' => $formTipoPracticante->createView(),
            'formTipoSangre' => $formTipoSangre->createView(),
            'formTourModulo' => $formTourModulo->createView(),
            'formUsuario' => $formUsuario->createView(),
            'formUsuarioNotificacion' => $formUsuarioNotificacion->createView(),
            'permisos' => $_SESSION["permisos"]
        ]);
    }
}
