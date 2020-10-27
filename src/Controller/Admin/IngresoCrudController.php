<?php

namespace App\Controller\Admin;

use App\Entity\Ingreso;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class IngresoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ingreso::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
            ->hideOnForm(),
            AssociationField::new('cliente'),
            TextField::new('nombre_acompanante', 'Nombre acompañante'),
            TelephoneField::new('telefono_acompanante', 'Teléfono acompañante')
            ->onlyOnForms(),
            NumberField::new('peso'),
            NumberField::new('talla'),
            IntegerField::new('sesiones', 'No. sesiones')
            ->setFormTypeOptions(['attr' => ['min' => 0]]),
            BooleanField::new('estado')
            ->hideOnForm(),
            TextField::new('fecha_ingreso', 'Fecha ingreso')
            ->hideOnForm()
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('estado')
            ->add('fecha_ingreso');
    }

}
