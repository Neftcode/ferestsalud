<?php

namespace App\Controller\Admin;

use App\Entity\FondoCesantias;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FondoCesantiasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FondoCesantias::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
        ];
    }
    
}
