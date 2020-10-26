<?php

namespace App\Controller\Admin;

use App\Entity\CajaCompensacion;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CajaCompensacionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CajaCompensacion::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
        ];
    }
    
}
