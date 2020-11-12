<?php

namespace App\Controller\Admin;

use App\Entity\LaboratorioFarmaceutico;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LaboratorioFarmaceuticoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LaboratorioFarmaceutico::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            AssociationField::new('ciudad'),
            TextField::new('direccion', 'Dirección'),
            TextField::new('contacto')
        ];
    }
    
}
