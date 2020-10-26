<?php

namespace App\Controller\Admin;

use App\Entity\Arl;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ArlCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Arl::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
        ];
    }
}
