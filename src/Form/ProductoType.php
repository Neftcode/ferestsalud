<?php

namespace App\Form;

use App\Entity\Producto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lote', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('fecha_vencimiento', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2 datetime-local',
                    'style' => 'cursor: pointer; background-color: transparent;',
                    'readonly' => 'readonly',
                    'autoupdate' => 'false'
                ]
            ])
            ->add('fabricante', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('tipo_producto', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2',
                    'required' => true
                ]
            ])
            ->add('producto_id', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('laboratorio_farmaceutico', null, [
                "label" => "Laboratorio farmacéutico",
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('proveedor', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
