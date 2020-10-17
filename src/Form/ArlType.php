<?php

namespace App\Form;

use App\Entity\Arl;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArlType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, [
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
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
                    'class' => 'btn btn-success mt-2'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Arl::class,
        ]);
    }
}
