<?php
// Controlador para mostrar CRUD de Operaciones
namespace App\Controller\Admin;

use App\Entity\Operacion;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OperacionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Operacion::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
        ];
    }
    
}
