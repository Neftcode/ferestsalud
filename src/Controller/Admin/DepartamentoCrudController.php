<?php
// Controlador para mostrar CRUD de Departamentos
namespace App\Controller\Admin;

use App\Entity\Departamento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DepartamentoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Departamento::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            IntegerField::new('codigo_dane', 'Código Dane')
            ->setFormTypeOptions(["attr" => ["min" => 0]]),
            TextField::new('nombre'),
        ];
    }
    
}
