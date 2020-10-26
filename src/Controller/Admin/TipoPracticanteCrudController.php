<?php

namespace App\Controller\Admin;

use App\Entity\TipoPracticante;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TipoPracticanteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TipoPracticante::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            // TextEditorField::new('description'),
        ];
    }
    
}
