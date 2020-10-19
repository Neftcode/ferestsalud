<?php

namespace App\Form;

use App\Entity\Area;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AreaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
                // 'attr' => [
                //     'autofocus' => 'autofocus',
                //     'class' => 'myClass',
                //     'nombre' => 'datepicker'
                // ]
                // 'label' => 'Any name',
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
            'data_class' => Area::class,
        ]);
    }
}
