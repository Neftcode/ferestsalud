<?php

namespace App\Controller\Admin;

use App\Entity\Cie10Rips;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class Cie10RipsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cie10Rips::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->setFormTypeOptions(['attr' => ['maxlength' => 5]]),
            TextField::new('simbolo', 'Símbolo')
                ->setFormTypeOptions(['attr' => ['maxlength' => 3]]),
            TextareaField::new('descripcion', 'Descripción'),
            TextField::new('sexo')
                ->setFormTypeOptions(['attr' => ['maxlength' => 1, 'placeholder' => 'H - M - A']]),
            TextField::new('limite_inferior', 'Límite inferior')
                ->setFormTypeOptions(['attr' => ['maxlength' => 3]]),
            TextField::new('limite_superior', 'Límite superior')
                ->setFormTypeOptions(['attr' => ['maxlength' => 3]]),
            TextField::new('no_afeccion_principal', 'No son afección principal')
                ->setFormTypeOptions(['attr' => ['maxlength' => 2]]),
            TextareaField::new('observaciones'),
        ];
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('simbolo')
            ->add('sexo')
            ->add('limite_inferior')
            ->add('limite_superior');
    }
    
}
