<?php

namespace App\Form;

use App\Entity\Sede;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SedeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proyecto', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('nombre', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('direccion', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Dirección',
            ])
            ->add('observaciones', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
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
            'data_class' => Sede::class,
        ]);
    }
}
