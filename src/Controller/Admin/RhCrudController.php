<?php

namespace App\Controller\Admin;

use App\Entity\Rh;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RhCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rh::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextField::new('descripcion', 'Descripción'),
        ];
    }
    
}
