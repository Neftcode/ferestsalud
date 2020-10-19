<?php

namespace App\Form;

use App\Entity\Modulo;
use App\Entity\TourModulo;
use App\Entity\Usuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TourModuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estado', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('modulo', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Modulo::class,
                'mapped' => false,
                'choice_label' => function (Modulo $modulo) {
                    return $modulo->getNombre();
                },
                'required' => false
            ])
            ->add('usuario', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Usuario::class,
                'mapped' => false,
                'choice_label' => function (Usuario $usuario) {
                    return $usuario->getNombres();
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
            'data_class' => TourModulo::class,
        ]);
    }
}
