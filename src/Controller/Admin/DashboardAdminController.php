<?php
// Controlador para mostrar Estructura de interfaz del módulo de administración
namespace App\Controller\Admin;

use App\Controller\FilterIdxController;
use App\Entity\Admision;
use App\Entity\Area;
use App\Entity\Arl;
use App\Entity\Aseguradora;
use App\Entity\CajaCompensacion;
use App\Entity\Cargo;
use App\Entity\Cie10Rips;
use App\Entity\Ciudad;
use App\Entity\Paciente;
use App\Entity\Departamento;
use App\Entity\Eps;
use App\Entity\EstadoUsuario;
use App\Entity\FondoCesantias;
use App\Entity\FondoPensiones;
use App\Entity\Genero;
use App\Entity\Insumo;
use App\Entity\LaboratorioFarmaceutico;
use App\Entity\Medicamento;
use App\Entity\Modulo;
use App\Entity\Operacion;
use App\Entity\PermisoModuloUsuario;
use App\Entity\Proveedor;
use App\Entity\Rh;
use App\Entity\Rol;
use App\Entity\Sede;
use App\Entity\TipoContrato;
use App\Entity\TipoDocumento;
use App\Entity\TipoPracticante;
use App\Entity\TipoProducto;
use App\Entity\TipoSangre;
use App\Entity\Usuario;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardAdminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        if (!isset($_SESSION["permisos"])) {//validar permisos
            FilterIdxController::permisos($this);
        }
        // redirect to some CRUD controller
        return $this->render('bundles/EasyAdminBundle/dashboard.html.twig');
        // return parent::index();
        // $routeBuilder = $this->get(CrudUrlGenerator::class)->build();


        // return $this->redirect($routeBuilder->setController(AreaCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        // return $this->render('some/path/my-dashboard.html.twig');
        // return $this->render('admin/index.html.twig');

    }

    // public function configureAssets(): Assets
    // {
    //     return Assets::new()
    //         ->addCssFile('css/daterangepicker.css')
    //         ->addCssFile('js/daterangepicker.min.js')
    //         ->addCssFile('js/datepickers.js');
    // }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<a href="admin"><img src="/images/logo.png" style="width: 40px; height: 40px;"> Ferestsalud</a>')
            ->setFaviconPath('images/favicon.ico');
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        // Usually it's better to call the parent method because that gives you a
        // user menu with some menu items already created ("sign out", "exit impersonation", etc.)
        // if you prefer to create the user menu from scratch, use: return UserMenu::new()->...
        return parent::configureUserMenu($user)
            // use the given $user object to get the user name
            ->setName($user->getFullName())
            // use this method if you don't want to display the name of the user
            ->displayUserName(true)

            // you can return an URL with the avatar image
            // ->setAvatarUrl('https://...')
            // ->setAvatarUrl($user->getProfileImageUrl())
            // use this method if you don't want to display the user image
            ->displayUserAvatar(true);
            // you can also pass an email address to use gravatar's service
            // ->setGravatarEmail($user->getMainEmailAddress())

            // you can use any type of menu item, except submenus
            // ->addMenuItems([
            //     MenuItem::linkToRoute('My Profile', 'fa fa-id-card', 'admin', ['...' => '...']),
            //     MenuItem::section(),
            //     MenuItem::linkToLogout('Logout', 'fa fa-sign-out'),
            // ]);
    }

    public function configureMenuItems(): iterable
    {
        $permisos = $_SESSION["permisos"];
        // dd($permisos);
        yield MenuItem::linktoRoute('Dashboard', 'fas fa-home', 'admin');
        /* Módulo Gerencia */
        if (array_key_exists("gerencia", $permisos)) {
            yield MenuItem::section();
            $arrayGerencia = [];
            $arrayGerencia[] = MenuItem::linktoDashboard('Reportes', 'fas fa-file-excel');
            $arrayGerencia[] = MenuItem::linktoDashboard('Estadísticas', 'fas fa-chart-pie');
            yield MenuItem::subMenu('Gerencia', 'fas fa-user-tie')->setSubItems($arrayGerencia);
            /* Módulo Gerencia Administración del Sistema */
            $arrayGerenciaSistema = [];
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Áreas', 'fas fa-box', Area::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Módulos', 'fas fa-folder-open', Modulo::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Operaciones', 'fas fa-box', Operacion::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Permisos usuarios', 'fas fa-universal-access', PermisoModuloUsuario::class);
            yield MenuItem::subMenu('<label style="margin-right: 5px; cursor: pointer;">Gerencia - Sistema</label>', 'fas fa-user-lock')->setSubItems($arrayGerenciaSistema);
        }
        /* Módulo Talento Humano */
        if (array_key_exists("talento_humano", $permisos)) {
            yield MenuItem::section();
            $arrayTalHum = [];
            $arrayTalHum[] = MenuItem::linkToCrud('Arl', 'fas fa-user-injured', Arl::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Cajas de compensación', 'fas fa-hand-holding-heart', CajaCompensacion::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Cargos', 'fas fa-user-tie', Cargo::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Eps', 'fas fa-hand-holding-medical', Eps::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Fondos de cesantías', 'fas fa-hand-holding-usd', FondoCesantias::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Fondos de pensiones', 'fas fa-hand-holding-usd', FondoPensiones::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Géneros', 'fas fa-venus-mars', Genero::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Tipos de contrato', 'fas fa-scroll', TipoContrato::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Tipos de practicante', 'fas fa-user-graduate', TipoPracticante::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Usuarios', 'fas fa-users-cog', Usuario::class);
            yield MenuItem::subMenu('Talento Humano', 'fas fa-user-tag')->setSubItems($arrayTalHum);
        }
        /* Módulo Historia Clínica */
        if (array_key_exists("historia_clinica", $permisos)) {
            yield MenuItem::section();
            $arrayHistClin = [];
            $arrayHistClin[] = MenuItem::linktoDashboard('Consentimiento informado', 'fas fa-database');
            $arrayHistClin[] = MenuItem::linktoDashboard('Control de asistencia', 'fas fa-database');
            $arrayHistClin[] = MenuItem::linktoDashboard('Evolución diaria', 'fas fa-database');
            $arrayHistClin[] = MenuItem::linktoDashboard('Orden médica', 'fas fa-database');
            $arrayHistClin[] = MenuItem::linktoDashboard('Valoración inicial', 'fas fa-database');
            yield MenuItem::subMenu('Historia Clínica', 'fas fa-book-medical')->setSubItems($arrayHistClin);
        }
        /* Módulo Admisiones */
        if (array_key_exists("admisiones", $permisos)) {
            yield MenuItem::section();
            // yield MenuItem::section('Admisiones');
            $arrayAdmisiones = [];
            $arrayAdmisiones[] = MenuItem::linktoDashboard('FURIPS', 'fas fa-database');
            $arrayAdmisiones[] = MenuItem::linktoDashboard('Gestor documental', 'fas fa-cloud');
            $arrayAdmisiones[] = MenuItem::linkToCrud('Admisión paciente', 'fas fa-user-plus', Admision::class);
            $arrayAdmisiones[] = MenuItem::linkToCrud('Pacientes', 'fas fa-users', Paciente::class);
            $arrayAdmisiones[] = MenuItem::linktoDashboard('SIRAS', 'fas fa-database');
            yield MenuItem::subMenu('Admisiones', 'fas fa-user-check')->setSubItems($arrayAdmisiones);
        }
        /* Módulo Facturacion */
        if (array_key_exists("facturacion", $permisos)) {
            yield MenuItem::section();
            $arrayFacturacion = [];
            $arrayFacturacion[] = MenuItem::linktoDashboard('Generación factura', 'fas fa-database');
            $arrayFacturacion[] = MenuItem::linktoDashboard('Relación de envío', 'fas fa-database');
            $arrayFacturacion[] = MenuItem::linktoDashboard('Generación RIPS', 'fas fa-database');
            $arrayFacturacion[] = MenuItem::linktoDashboard('Medicamentos precios', 'fas fa-database');
            $arrayFacturacion[] = MenuItem::linktoDashboard('Codificación SOAT', 'fas fa-database');
            yield MenuItem::subMenu('Facturación', 'fas fa-scroll')->setSubItems($arrayFacturacion);
        }
        /* Módulo Cartera */
        if (array_key_exists("cartera", $permisos)) {
            yield MenuItem::section();
            $arrayCartera = [];
            $arrayCartera[] = MenuItem::linktoDashboard('Glosas', 'fas fa-database');
            $arrayCartera[] = MenuItem::linktoDashboard('Conciliaciones', 'fas fa-database');
            $arrayCartera[] = MenuItem::linktoDashboard('Recaudos', 'fas fa-database');
            yield MenuItem::subMenu('Cartera', 'fas fa-wallet')->setSubItems($arrayCartera);
        }
        /* Módulo Farmacia */
        if (array_key_exists("farmacia", $permisos)) {
            yield MenuItem::section();
            $arrayFarmacia = [];
            $arrayFarmacia[] = MenuItem::linktoRoute('Inventario PEPS', 'fas fa-boxes', 'inventario_peps')->setLinkTarget('_blank');
            $arrayFarmacia[] = MenuItem::linktoDashboard('Despachos', 'fas fa-cash-register');
            $arrayFarmacia[] = MenuItem::linkToCrud('Insumos', 'fas fa-prescription-bottle-alt', Insumo::class);
            $arrayFarmacia[] = MenuItem::linkToCrud('Laboratorios farmacéuticos', 'fas fa-flask', LaboratorioFarmaceutico::class);
            $arrayFarmacia[] = MenuItem::linkToCrud('Medicamentos', 'fas fa-pills', Medicamento::class);
            $arrayFarmacia[] = MenuItem::linkToCrud('Proveedores', 'fas fa-truck-loading', Proveedor::class);
            yield MenuItem::subMenu('Farmacia', 'fas fa-medkit')->setSubItems($arrayFarmacia);
        }
        /* Módulo Sistemas */
        if (array_key_exists("sistemas", $permisos)) {
            yield MenuItem::section();
            $arraySistemas = [];
            $arraySistemas[] = MenuItem::linkToCrud('Aseguradoras', 'fas fa-user-shield', Aseguradora::class);
            $arraySistemas[] = MenuItem::linktoDashboard('Centro de costo', 'fas fa-database');
            $arraySistemas[] = MenuItem::linkToCrud('CIE 10', 'fas fa-head-side-virus', Cie10Rips::class);
            $arraySistemas[] = MenuItem::linkToCrud('Ciudades', 'fas fa-city', Ciudad::class);
            $arraySistemas[] = MenuItem::linkToCrud('Departamentos', 'fas fa-flag', Departamento::class);
            $arraySistemas[] = MenuItem::linkToCrud('Estados de usuario', 'fas fa-id-badge', EstadoUsuario::class);
            $arraySistemas[] = MenuItem::linktoDashboard('Firmas digitales', 'fas fa-database');
            $arraySistemas[] = MenuItem::linktoDashboard('Gestor documental', 'fas fa-cloud');
            $arraySistemas[] = MenuItem::linkToCrud('Identificaciones', 'fas fa-id-card', TipoDocumento::class);
            $arraySistemas[] = MenuItem::linkToCrud('RH', 'fas fa-hand-holding-water', Rh::class);
            $arraySistemas[] = MenuItem::linkToCrud('Roles', 'fas fa-box', Rol::class);
            $arraySistemas[] = MenuItem::linkToCrud('Sedes', 'fas fa-building', Sede::class);
            $arraySistemas[] = MenuItem::linkToCrud('Tipos de producto', 'fas fa-tags', TipoProducto::class);
            $arraySistemas[] = MenuItem::linkToCrud('Tipos de sangre', 'fas fa-hand-holding-water', TipoSangre::class);
            $arraySistemas[] = MenuItem::linkToCrud('Usuarios', 'fas fa-users-cog', Usuario::class);
            yield MenuItem::subMenu('Sistemas', 'fas fa-database')->setSubItems($arraySistemas);

        }
    }

}
