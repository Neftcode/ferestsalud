<?php

namespace App\Controller\Admin;

use App\Entity\Proveedor;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProveedorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Proveedor::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextField::new('nit'),
            AssociationField::new('ciudad'),
            TextField::new('direccion', 'Dirección'),
            TextField::new('contacto'),
        ];
    }
    
}
