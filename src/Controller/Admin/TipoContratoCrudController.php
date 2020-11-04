<?php
// Controlador para mostrar CRUD de Tipos de Contrato
namespace App\Controller\Admin;

use App\Entity\TipoContrato;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TipoContratoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TipoContrato::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextEditorField::new('observaciones'),
        ];
    }
    
}
