<?php

namespace App\Controller\Admin;

use App\Entity\Insumo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InsumoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Insumo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('codigo', 'Código'),
            TextField::new('nombre'),
            TextField::new('reg_san_invima', 'Registro sanitario INVIMA'),
            TextField::new('presentacion', 'Presentación'),
        ];
    }
    
}
