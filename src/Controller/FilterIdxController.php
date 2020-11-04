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
        $em = $this->getDoctrine()->getManager();
        $permisosModulosUsuario = $em->getRepository(PermisoModuloUsuario::class)->permisosUsuario($this->getUser()->getId());

        $cantPermisos = count($permisosModulosUsuario);
        $matrizPermisos = [];
        for ($i=0; $i<$cantPermisos; $i++) {
            $matrizPermisos[$permisosModulosUsuario[$i]["modNombreAlt"]] = $permisosModulosUsuario[$i];
        }
        $_SESSION["permisos"] = $matrizPermisos;

        return $this->redirectToRoute('dashboard');
        // return $this->render('filter_idx/index.html.twig', [
        //     'permisos' => $_SESSION["permisos"],
        // ]);
    }
}
