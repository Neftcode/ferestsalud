<?php

namespace App\Controller\Admin;

use App\Entity\Rol;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class RolCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rol::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
        ];
    }
    
}
