<?php

namespace App\Controller\Admin;

use App\Entity\Area;
use App\Entity\Arl;
use App\Entity\CajaCompensacion;
use App\Entity\Cargo;
use App\Entity\Ciudad;
use App\Entity\Departamento;
use App\Entity\Eps;
use App\Entity\EstadoUsuario;
use App\Entity\FondoCesantias;
use App\Entity\FondoPensiones;
use App\Entity\Genero;
use App\Entity\Modulo;
use App\Entity\Operacion;
use App\Entity\OperacionUsuario;
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
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardAdminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();


        return $this->redirect($routeBuilder->setController(AreaCrudController::class)->generateUrl());

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
            ->setTitle('<a href="dashboard"><img src="images/logo.png" style="width: 40px; height: 40px;"> Ferestsalud</a>')
            ->setFaviconPath('images/favicon.ico');
    }

    public function configureMenuItems(): iterable
    {
        $permisos = $_SESSION["permisos"];
        // dd($permisos);
        yield MenuItem::linktoRoute('Dashboard', 'fas fa-home', 'dashboard');
        yield MenuItem::linkToCrud('Áreas', 'fas fa-box', Area::class);
        yield MenuItem::linkToCrud('Arl', 'fas fa-user-injured', Arl::class);
        yield MenuItem::linkToCrud('Cajas de compensación', 'fas fa-hand-holding-heart', CajaCompensacion::class);
        yield MenuItem::linkToCrud('Cargos', 'fas fa-user-tie', Cargo::class);
        yield MenuItem::linkToCrud('Ciudades', 'fas fa-city', Ciudad::class);
        yield MenuItem::linkToCrud('Departamentos', 'fas fa-flag', Departamento::class);
        yield MenuItem::linkToCrud('Documentos TI', 'fas fa-id-card', TipoDocumento::class);
        yield MenuItem::linkToCrud('Eps', 'fas fa-hand-holding-medical', Eps::class);
        yield MenuItem::linkToCrud('Estados de usuario', 'fas fa-id-badge', EstadoUsuario::class);
        yield MenuItem::linkToCrud('Fondos de cesantías', 'fas fa-hand-holding-usd', FondoCesantias::class);
        yield MenuItem::linkToCrud('Fondos de pensiones', 'fas fa-hand-holding-usd', FondoPensiones::class);
        yield MenuItem::linkToCrud('Géneros', 'fas fa-venus-mars', Genero::class);
        yield MenuItem::linkToCrud('Módulos', 'fas fa-folder-open', Modulo::class);
        yield MenuItem::linkToCrud('Operaciones', 'fas fa-box', Operacion::class);
        yield MenuItem::linkToCrud('Operación usuarios', 'fas fa-chalkboard-teacher', OperacionUsuario::class);
        yield MenuItem::linkToCrud('Permisos usuarios', 'fas fa-universal-access', PermisoModuloUsuario::class);
        yield MenuItem::linkToCrud('RH', 'fas fa-hand-holding-water', Rh::class);
        yield MenuItem::linkToCrud('Roles', 'fas fa-box', Rol::class);
        yield MenuItem::linkToCrud('Sedes', 'fas fa-building', Sede::class);
        yield MenuItem::linkToCrud('Tipos de contrato', 'fas fa-scroll', TipoContrato::class);
        yield MenuItem::linkToCrud('Tipos de practicante', 'fas fa-user-graduate', TipoPracticante::class);
        yield MenuItem::linkToCrud('Tipos de sangre', 'fas fa-hand-holding-water', TipoSangre::class);
        if (array_key_exists("admin_usuario", $permisos)) {
            yield MenuItem::linkToCrud('Usuarios', 'fas fa-users-cog', Usuario::class);
        }
    }

}
