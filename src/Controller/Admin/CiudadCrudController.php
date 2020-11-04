<?php
// Controlador para mostrar CRUD del Ciudades
namespace App\Controller\Admin;

use App\Entity\Ciudad;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CiudadCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ciudad::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('codigo_dane', 'Código Dane'),
            TextField::new('nombre'),
            BooleanField::new('capital_departamento'),
            BooleanField::new('capital_territorio'),
            AssociationField::new('departamento')
        ];
    }
    
}
