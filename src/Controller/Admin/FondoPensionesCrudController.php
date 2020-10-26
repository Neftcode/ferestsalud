<?php

namespace App\Controller\Admin;

use App\Entity\FondoPensiones;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FondoPensionesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FondoPensiones::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre')
        ];
    }
    
}
