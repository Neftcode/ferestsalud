<?php

namespace App\Form;

use App\Entity\Area;
use App\Entity\Cargo;
use App\Entity\Operacion;
use App\Entity\OperacionUsuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OperacionUsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('funcion', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Función',
            ])
            ->add('observaciones', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('operacion', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Operacion::class,
                'mapped' => false,
                'choice_label' => function (Operacion $operacion) {
                    return $operacion->getNombre();
                },
                'label' => 'Operación',
                'required' => false
            ])
            ->add('area', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Area::class,
                'mapped' => false,
                'choice_label' => function (Area $area) {
                    return $area->getNombre();
                },
                'label' => 'Área',
                'required' => false
            ])
            ->add('cargo', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Cargo::class,
                'mapped' => false,
                'choice_label' => function (Cargo $cargo) {
                    return $cargo->getNombre();
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
            'data_class' => OperacionUsuario::class,
        ]);
    }
}