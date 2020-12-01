<?php
// Controlador para mostrar CRUD de Ingresos
namespace App\Controller\Admin;

use App\Entity\Ingreso;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
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
            FormField::addPanel('Admisión'),
            IdField::new('id')
                ->hideOnForm(),
            AssociationField::new('paciente'),
            TextField::new('ocupacion', 'Ocupación')
                ->onlyOnForms(),
            AssociationField::new('cie10', 'CIE 10'),
            AssociationField::new('aseguradora'),
            TextField::new('nombre_acompanante', 'Nombre acompañante')
                ->onlyOnForms(),
            TelephoneField::new('telefono_acompanante', 'Teléfono acompañante')
                ->onlyOnForms(),
            TextareaField::new('cronologia_patologia', 'Cronología de la patología')
                ->setFormTypeOptions(['attr' => ['maxlength' => 5000]])
                ->onlyOnForms(),
            BooleanField::new('estado')
                ->hideOnForm(),
            TextField::new('fecha_ingreso', 'Fecha ingreso')
                ->hideOnForm(),

            FormField::addPanel('Valoración'),
            NumberField::new('peso')
                ->onlyOnForms(),
            NumberField::new('talla')
                ->onlyOnForms(),
            IntegerField::new('sesiones', 'No. sesiones')
                ->setFormTypeOptions(['attr' => ['min' => 0]])
                ->onlyOnForms(),
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('paciente')
            ->add('ocupacion')
            ->add('cie10')
            ->add('aseguradora')
            ->add('estado')
            ->add('fecha_ingreso');
    }

}
