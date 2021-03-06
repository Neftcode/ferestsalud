<?php
// Controlador donde se obtienen todos los permisos y redirecciona al Dashboard
namespace App\Controller;

use App\Entity\PermisoModuloUsuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilterIdxController extends AbstractController
{
    /**
     * @Route("/filter/idx", name="filter_idx")
     */
    public function index()
    {
        $this->permisos($this);
        return $this->redirectToRoute('admin');
        // return $this->render('filter_idx/index.html.twig', [
        //     'permisos' => $_SESSION["permisos"],
        // ]);
    }

    public static function permisos($_this) {
        $em = $_this->getDoctrine()->getManager();
        $permisosModulosUsuario = $em->getRepository(PermisoModuloUsuario::class)->permisosUsuario($_this->getUser()->getId());

        $cantPermisos = count($permisosModulosUsuario);
        $matrizPermisos = [];
        for ($i = 0; $i < $cantPermisos; $i++) {
            $matrizPermisos[$permisosModulosUsuario[$i]["modNombreAlt"]] = $permisosModulosUsuario[$i];
        }
        $_SESSION["permisos"] = $matrizPermisos;
    }
}
