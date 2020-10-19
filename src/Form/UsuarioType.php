<?php

namespace App\Form;

use App\Entity\Arl;
use App\Entity\CajaCompensacion;
use App\Entity\Ciudad;
use App\Entity\Eps;
use App\Entity\EstadoUsuario;
use App\Entity\FondoCesantias;
use App\Entity\FondoPensiones;
use App\Entity\Genero;
use App\Entity\OperacionUsuario;
use App\Entity\Rh;
use App\Entity\Sede;
use App\Entity\TipoContrato;
use App\Entity\TipoDocumento;
use App\Entity\TipoSangre;
use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('username', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('nombres', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('apellidos', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('genero', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Genero::class,
                'mapped' => false,
                'choice_label' => function (Genero $arl) {
                    return $arl->getNombre();
                },
                'label' => 'Género',
                'required' => false
            ])
            ->add('fecha_nacimiento', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('fecha_expedicion', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Fecha expedición',
                'required' => false
            ])
            ->add('fecha_ingreso', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('fecha_salida', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('correo_personal', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ]
            ])
            ->add('contacto_personal', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('direccion_residencia', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Dirección residencia',
                'required' => false
            ])
            ->add('contacto_emergencia_nombre', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('contacto_emergencia_numero', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Contacto emergencia número',
                'required' => false
            ])
            ->add('correo_corporativo', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('salario_basico', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Salario básico',
                'required' => false
            ])
            ->add('bono', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('auxilio_transporte', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('dotacion', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'label' => 'Dotación',
                'required' => false
            ])
            ->add('carnet', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('control_logueo', null, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'required' => false
            ])
            ->add('arl', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Arl::class,
                'mapped' => false,
                'choice_label' => function (Arl $arl) {
                    return $arl->getNombre();
                },
                'required' => false
            ])
            ->add('caja_compensacion', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => CajaCompensacion::class,
                'mapped' => false,
                'choice_label' => function (CajaCompensacion $cajaCompensacion) {
                    return $cajaCompensacion->getNombre();
                },
                'label' => 'Caja compensación',
                'required' => false
            ])
            ->add('cargo', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => OperacionUsuario::class,
                'mapped' => false,
                'choice_label' => function (OperacionUsuario $operacionUsuario) {
                    return $operacionUsuario->getId();
                },
                'required' => false
            ])
            ->add('ciudad_residencia', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Ciudad::class,
                'mapped' => false,
                'choice_label' => function (Ciudad $ciudad) {
                    return $ciudad->getNombre();
                },
                'required' => false
            ])
            ->add('eps', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Eps::class,
                'mapped' => false,
                'choice_label' => function (Eps $eps) {
                    return $eps->getNombre();
                },
                'required' => false
            ])
            ->add('estado_usuario', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => EstadoUsuario::class,
                'mapped' => false,
                'choice_label' => function (EstadoUsuario $estado) {
                    return $estado->getNombre();
                },
                'required' => false
            ])
            ->add('fondo_cesantias', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => FondoCesantias::class,
                'mapped' => false,
                'choice_label' => function (FondoCesantias $fondoCesantias) {
                    return $fondoCesantias->getNombre();
                },
                'label' => 'Fondo cesantías',
                'required' => false
            ])
            ->add('fondo_pensiones', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => FondoPensiones::class,
                'mapped' => false,
                'choice_label' => function (FondoPensiones $fondoPensiones) {
                    return $fondoPensiones->getNombre();
                },
                'required' => false
            ])
            ->add('jefe_directo', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Usuario::class,
                'mapped' => false,
                'choice_label' => function (Usuario $usuario) {
                    return $usuario->getNombres().' '. $usuario->getApellidos();
                },
                'required' => false
            ])
            ->add('tipo_sangre', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => TipoSangre::class,
                'mapped' => false,
                'choice_label' => function (TipoSangre $tipoSangre) {
                    return $tipoSangre->getNombre();
                },
                'required' => false
            ])
            ->add('rh', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Rh::class,
                'mapped' => false,
                'choice_label' => function (Rh $rh) {
                    return $rh->getNombre();
                },
                'required' => false
            ])
            ->add('sede_laboral', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => Sede::class,
                'mapped' => false,
                'choice_label' => function (Sede $sede) {
                    return $sede->getNombre();
                },
                'required' => false
            ])
            ->add('tipo_contrato', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => TipoContrato::class,
                'mapped' => false,
                'choice_label' => function (TipoContrato $tipoContrato) {
                    return $tipoContrato->getNombre();
                },
                'required' => false
            ])
            ->add('tipo_documento', EntityType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm mb-2'
                ],
                'class' => TipoDocumento::class,
                'mapped' => false,
                'choice_label' => function (TipoDocumento $tipoDocumento) {
                    return $tipoDocumento->getNombre();
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
            'data_class' => Usuario::class,
        ]);
    }
}
