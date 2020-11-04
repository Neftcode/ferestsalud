<?php
// Controlador para mostrar CRUD de Módulos
namespace App\Controller\Admin;

use App\Entity\Modulo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ModuloCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Modulo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextField::new('nombre_alt', 'Alternativo'),
        ];
    }
    
}
