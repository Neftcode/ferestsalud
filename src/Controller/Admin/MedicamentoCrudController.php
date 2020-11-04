<?php
// Controlador para mostrar CRUD de Medicamentos
namespace App\Controller\Admin;

use App\Entity\Medicamento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MedicamentoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Medicamento::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('codigo_atc', 'Código ATC'),
            TextField::new('nombre'),
            TextField::new('principio_activo', 'Principio activo'),
            TextField::new('concentracion', 'Concentración'),
            TextField::new('forma_farmaceutica', 'Forma farmacéutica'),
        ];
    }
    
}
