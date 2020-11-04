<?php
// Controlador para mostrar CRUD de EPS
namespace App\Controller\Admin;

use App\Entity\Eps;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EpsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Eps::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('nombre')
        ];
    }
}
