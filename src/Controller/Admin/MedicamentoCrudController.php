<?php

namespace App\Controller\Admin;

use App\Entity\Medicamento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MedicamentoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Medicamento::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
