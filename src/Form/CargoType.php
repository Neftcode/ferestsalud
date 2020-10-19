<?php

namespace App\Form;

use App\Entity\Cargo;
use App\Entity\TipoPracticante;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CargoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('tipo_practicante', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => TipoPracticante::class,
                'mapped' => false,
                'choice_label' => function (TipoPracticante $tipoPracticante) {
                    return $tipoPracticante->getNombre();
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
            'data_class' => Cargo::class,
        ]);
    }
}
