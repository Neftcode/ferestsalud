<?php

namespace App\Controller\Admin;

use App\Entity\TipoProducto;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TipoProductoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TipoProducto::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre')
        ];
    }
    
}
