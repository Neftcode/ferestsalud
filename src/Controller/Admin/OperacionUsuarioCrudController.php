<?php

namespace App\Controller\Admin;

use App\Entity\OperacionUsuario;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OperacionUsuarioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OperacionUsuario::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            AssociationField::new('operacion', 'Operación'),
            AssociationField::new('area', 'Área'),
            AssociationField::new('cargo'),
            TextField::new('funcion', 'Función'),
            TextEditorField::new('observaciones'),
        ];
    }
}
