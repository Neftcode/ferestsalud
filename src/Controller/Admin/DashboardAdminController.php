<?php
// Controlador para mostrar Estructura de interfaz del módulo de administración
namespace App\Controller\Admin;

use App\Controller\FilterIdxController;
use App\Entity\Area;
use App\Entity\Arl;
use App\Entity\Aseguradora;
use App\Entity\CajaCompensacion;
use App\Entity\Cargo;
use App\Entity\Ciudad;
use App\Entity\Paciente;
use App\Entity\Departamento;
use App\Entity\Eps;
use App\Entity\EstadoUsuario;
use App\Entity\FondoCesantias;
use App\Entity\FondoPensiones;
use App\Entity\Genero;
use App\Entity\Ingreso;
use App\Entity\Medicamento;
use App\Entity\Modulo;
use App\Entity\Operacion;
use App\Entity\PermisoModuloUsuario;
use App\Entity\Rh;
use App\Entity\Rol;
use App\Entity\Sede;
use App\Entity\TipoContrato;
use App\Entity\TipoDocumento;
use App\Entity\TipoPracticante;
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
        return parent::index();
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
    //     return Assets::new()->addCssFile('fonts/css/all.min.css');
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
            $arrayGerencia = [];
            $arrayGerencia[] = MenuItem::linktoDashboard('Reportes', 'fas fa-file-excel');
            $arrayGerencia[] = MenuItem::linktoDashboard('Estadísticas', 'fas fa-chart-pie');
            $arrayGerencia[] = MenuItem::linktoDashboard('Administración sistema', 'fas fa-cogs');
            yield MenuItem::subMenu('Gerencia', 'fas fa-user-tie')->setSubItems($arrayGerencia);
            /* Módulo Gerencia Administración del Sistema */
            $arrayGerenciaSistema = [];
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Áreas', 'fas fa-box', Area::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Módulos', 'fas fa-folder-open', Modulo::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Operaciones', 'fas fa-box', Operacion::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Permisos usuarios', 'fas fa-universal-access', PermisoModuloUsuario::class);
            $arrayGerenciaSistema[] = MenuItem::linkToCrud('Usuarios', 'fas fa-users-cog', Usuario::class);
            yield MenuItem::subMenu('Gerencia - Sistema', 'fas fa-user-lock')->setSubItems($arrayGerenciaSistema);
        }
        /* Módulo Talento Humano */
        if (array_key_exists("talento_humano", $permisos)) {
            $arrayTalHum = [];
            $arrayTalHum[] = MenuItem::linkToCrud('Arl', 'fas fa-user-injured', Arl::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Cajas de compensación', 'fas fa-hand-holding-heart', CajaCompensacion::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Cargos', 'fas fa-user-tie', Cargo::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Eps', 'fas fa-hand-holding-medical', Eps::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Estados de usuario', 'fas fa-id-badge', EstadoUsuario::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Fondos de cesantías', 'fas fa-hand-holding-usd', FondoCesantias::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Fondos de pensiones', 'fas fa-hand-holding-usd', FondoPensiones::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Géneros', 'fas fa-venus-mars', Genero::class);
            $arrayTalHum[] = MenuItem::linkToCrud('RH', 'fas fa-hand-holding-water', Rh::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Roles', 'fas fa-box', Rol::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Sedes', 'fas fa-building', Sede::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Tipos de contrato', 'fas fa-scroll', TipoContrato::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Tipos de practicante', 'fas fa-user-graduate', TipoPracticante::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Tipos de sangre', 'fas fa-hand-holding-water', TipoSangre::class);
            $arrayTalHum[] = MenuItem::linkToCrud('Usuarios', 'fas fa-users-cog', Usuario::class);
            yield MenuItem::subMenu('Talento Humano', 'fas fa-user-check')->setSubItems($arrayTalHum);
        }
        /* Módulo Historia Clínica */
        if (array_key_exists("historia_clinica", $permisos)) {
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
            // yield MenuItem::section('Admisiones');
            $arrayAdmisiones = [];
            $arrayAdmisiones[] = MenuItem::linktoDashboard('FURIPS', 'fas fa-database');
            $arrayAdmisiones[] = MenuItem::linktoDashboard('Gestor documental', 'fas fa-cloud');
            $arrayAdmisiones[] = MenuItem::linkToCrud('Ingreso paciente', 'fas fa-user-plus', Ingreso::class);
            $arrayAdmisiones[] = MenuItem::linktoDashboard('SIRAS', 'fas fa-database');
            yield MenuItem::subMenu('Admisiones', 'fas fa-user-check')->setSubItems($arrayAdmisiones);
        }
        /* Módulo Facturacion */
        if (array_key_exists("facturacion", $permisos)) {
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
            $arrayCartera = [];
            $arrayCartera[] = MenuItem::linktoDashboard('Glosas', 'fas fa-database');
            $arrayCartera[] = MenuItem::linktoDashboard('Conciliaciones', 'fas fa-database');
            $arrayCartera[] = MenuItem::linktoDashboard('Recaudos', 'fas fa-database');
            yield MenuItem::subMenu('Cartera', 'fas fa-wallet')->setSubItems($arrayCartera);
        }
        /* Módulo Farmacia */
        if (array_key_exists("farmacia", $permisos)) {
            $arrayFarmacia = [];
            $arrayFarmacia[] = MenuItem::linktoDashboard('Inventarios PEPS', 'fas fa-boxes');
            $arrayFarmacia[] = MenuItem::linktoDashboard('Despachos', 'fas fa-truck-loading');
            yield MenuItem::subMenu('Farmacia', 'fas fa-medkit')->setSubItems($arrayFarmacia);
        }
        /* Módulo Sistemas */
        if (array_key_exists("sistemas", $permisos)) {
            $arraySistemas = [];
            $arraySistemas[] = MenuItem::linkToCrud('Aseguradoras', 'fas fa-user-shield', Aseguradora::class);
            $arraySistemas[] = MenuItem::linktoDashboard('Centro de costo', 'fas fa-database');
            $arraySistemas[] = MenuItem::linktoDashboard('CIE 10', 'fas fa-database');
            $arraySistemas[] = MenuItem::linkToCrud('Ciudades', 'fas fa-city', Ciudad::class);
            $arraySistemas[] = MenuItem::linkToCrud('Departamentos', 'fas fa-flag', Departamento::class);
            $arraySistemas[] = MenuItem::linktoDashboard('Firmas digitales', 'fas fa-database');
            $arrayAdmisiones[] = MenuItem::linktoDashboard('Gestor documental', 'fas fa-cloud');
            $arraySistemas[] = MenuItem::linkToCrud('Identificaciones', 'fas fa-id-card', TipoDocumento::class);
            $arraySistemas[] = MenuItem::linkToCrud('Medicamentos', 'fas fa-medkit', Medicamento::class);
            $arraySistemas[] = MenuItem::linkToCrud('Pacientes', 'fas fa-users', Paciente::class);
            $arraySistemas[] = MenuItem::linkToCrud('Usuarios', 'fas fa-users-cog', Usuario::class);
            yield MenuItem::subMenu('Sistemas', 'fas fa-database')->setSubItems($arraySistemas);
        }
    }

}
