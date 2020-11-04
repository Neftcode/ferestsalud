<?php
// Controlador para mostrar CRUD de Cargos
namespace App\Controller\Admin;

use App\Entity\Cargo;
use App\Entity\TipoPracticante;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CargoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cargo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            AssociationField::new('tipo_practicante')
        ];
    }
    
}
