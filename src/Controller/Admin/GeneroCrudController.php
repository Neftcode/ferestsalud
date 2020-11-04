<?php
// Controlador para mostrar CRUD de Géneros
namespace App\Controller\Admin;

use App\Entity\Genero;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GeneroCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Genero::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextField::new('alt', 'Alternativo')
        ];
    }
    
}
