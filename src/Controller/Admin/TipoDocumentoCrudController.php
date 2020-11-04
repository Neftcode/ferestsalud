<?php
// Controlador para mostrar CRUD de Tipos de Documento
namespace App\Controller\Admin;

use App\Entity\TipoDocumento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TipoDocumentoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TipoDocumento::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre'),
            TextField::new('descripcion', 'Descripción'),
        ];
    }
    
}
