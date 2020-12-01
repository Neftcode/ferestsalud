<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InventarioPepsController extends AbstractController
{
    /**
     * @Route("/inventario/peps", name="inventario_peps")
     */
    public function index()
    {
        return $this->render('inventario_peps/index.html.twig', [
            'controller_name' => 'Inventario PEPS',
        ]);
    }
}
