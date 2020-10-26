<?php

namespace App\Controller\Admin;

use App\Entity\PermisoModuloUsuario;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class PermisoModuloUsuarioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PermisoModuloUsuario::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            AssociationField::new('modulo', 'Módulo'),
            AssociationField::new('rol'),
            AssociationField::new('usuario')
        ];
    }
    
}
