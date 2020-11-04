<?php
// Controlador para mostrar CRUD de Sedes
namespace App\Controller\Admin;

use App\Entity\Sede;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SedeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Sede::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('proyecto')
            ->setFormTypeOptions(["attr" => ["maxlength" => 10]]),
            TextField::new('nombre'),
            AssociationField::new('ciudad'),
            TextField::new('direccion', 'Dirección'),
            TextEditorField::new('observaciones'),
        ];
    }
    
}
