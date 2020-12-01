<?php
// Controlador de Dashboard
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {
        return $this->redirectToRoute('pdf', ['pdf'=>'FURIPS']);
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Dashboard',
            'permisos' => $_SESSION["permisos"]
        ]);
    }
}
