<?php

namespace App\Form;

use App\Entity\Ciudad;
use App\Entity\Departamento;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CiudadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('codigo_dane', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Código DANE',
            ])
            ->add('nombre', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('capital_departamento', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('capital_territorio', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('departamento', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Departamento::class,
                'mapped' => false,
                'choice_label' => function (Departamento $departamento) {
                    return $departamento->getNombre();
                },
                'required' => false
            ])
            ->add('Guardar', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success'
                ]
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ciudad::class,
        ]);
    }
}
