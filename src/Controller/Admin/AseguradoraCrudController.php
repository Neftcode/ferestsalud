<?php
// Controlador para mostrar CRUD de Aseguradoras
namespace App\Controller\Admin;

use App\Entity\Aseguradora;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AseguradoraCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Aseguradora::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre')
        ];
    }
    
}
