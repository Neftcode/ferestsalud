<?php
// Controlador para mostrar CRUD de Estados de Usuario
namespace App\Controller\Admin;

use App\Entity\EstadoUsuario;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EstadoUsuarioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EstadoUsuario::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextField::new('descripcion', 'Descripción')
        ];
    }
}
