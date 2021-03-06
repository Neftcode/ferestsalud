<?php
// Controlador para mostrar CRUD de Tipos de Sangre
namespace App\Controller\Admin;

use App\Entity\TipoSangre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TipoSangreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TipoSangre::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre')
        ];
    }
    
}
