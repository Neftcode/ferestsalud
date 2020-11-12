<?php
// Controlador para mostrar CRUD del Ciudades
namespace App\Controller\Admin;

use App\Entity\Ciudad;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;

class CiudadCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ciudad::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // IdField::new('id'),
            TextField::new('codigo_dane', 'Código Dane'),
            TextField::new('nombre'),
            BooleanField::new('capital_departamento'),
            BooleanField::new('capital_territorio'),
            AssociationField::new('departamento')
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
        ->add(BooleanFilter::new('capital_departamento'))
        ->add(BooleanFilter::new('capital_territorio'))
        ->add('departamento');
    }
    
}
