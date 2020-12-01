<?php
// Controlador para mostrar CRUD de Usuarios
namespace App\Controller\Admin;

use App\Entity\Usuario;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\BooleanFilter;

class UsuarioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Usuario::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $user = $this->getUser();
        $userRoles = $user->getRoles();
        $permisos = $_SESSION["permisos"];
        // dd($_SESSION["permisos"]);
        if (Crud::PAGE_EDIT === $pageName) {
            if ($permisos["sistemas"]["rolNombre"]=="ROLE_ADMIN") {
                yield IdField::new('id', 'ID')
                    ->setFormTypeOptions(['attr' => ['maxlength' => 15]]);
                yield AssociationField::new('tipo_documento', 'Documento');
            } else {
                yield IdField::new('id', 'ID')
                    ->setFormTypeOptions(['attr' => ['readonly' => true, 'maxlength' => 15]]);
                yield AssociationField::new('tipo_documento', 'Documento')
                    ->setFormTypeOptions(['attr' => ['disabled' => true]]);
            }
        } else {
            yield IdField::new('id', 'ID')
                ->setFormTypeOptions(['attr' => ['maxlength' => 15]]);
            yield AssociationField::new('tipo_documento', 'Documento');
        }
        yield TextField::new('nombres');
        yield TextField::new('apellidos');
        if (Crud::PAGE_EDIT === $pageName) {
            if ($permisos["sistemas"]["rolNombre"] == "ROLE_ADMIN") {
                yield TextField::new('username', 'Usuario');
            } else {
                yield TextField::new('username', 'Usuario')
                    ->setFormTypeOptions(['attr' => ['readonly' => true]]);
            }
        } else {
            yield TextField::new('username', 'Usuario');
        }
        yield AssociationField::new('estado_usuario', 'Estado');
        yield AssociationField::new('jefe_directo', 'Jefe');
        yield EmailField::new('correo_corporativo', 'Correo corporativo')
            ->onlyOnForms();
        yield AssociationField::new('sede_laboral', 'Sede');
        yield AssociationField::new('genero', 'Género')
            ->onlyOnForms();
        yield TextField::new('fecha_nacimiento', 'Fecha nacimiento')
            ->onlyOnForms()
            ->setFormTypeOptions(['attr' => ['placeholder' => 'YYYY-MM-DD', 'maxlength' => 10]]);;
        yield TextField::new('fecha_expedicion', 'Fecha expedición documento')
            ->onlyOnForms()
            ->setFormTypeOptions(['attr' => ['placeholder' => 'YYYY-MM-DD', 'maxlength' => 10]]);;
        yield TextField::new('fecha_ingreso', 'Fecha ingreso')
            ->onlyOnForms()
            ->setFormTypeOptions(['attr' => ['placeholder' => 'YYYY-MM-DD', 'maxlength' => 10]]);;
        yield TextField::new('fecha_salida', 'Fecha salida')
            ->onlyOnForms()
            ->setFormTypeOptions(['attr' => ['placeholder' => 'YYYY-MM-DD', 'maxlength' => 10]]);;
        yield EmailField::new('correo_personal', 'Correo personal')
            ->onlyOnForms();
        yield TelephoneField::new('contacto_personal', 'Contacto personal')
            ->onlyOnForms();
        yield TextField::new('direccion_residencia', 'Dirección residencia')
            ->onlyOnForms();
        yield TextField::new('contacto_emergencia_nombre', 'Nombre contacto de emergencia')
            ->onlyOnForms();
        yield TelephoneField::new('contacto_emergencia_numero', 'Número contacto de emergencia')
            ->onlyOnForms();
        yield MoneyField::new('salario_basico', 'Salario básico')->setCurrency('COP')
            ->onlyOnForms();
        yield MoneyField::new('bono')->setCurrency('COP')
            ->onlyOnForms();
        yield MoneyField::new('auxilio_transporte', 'Auxilio transporte')->setCurrency('COP')
        ->onlyOnForms();
        yield BooleanField::new('dotacion', 'Dotación')
            ->onlyOnForms();
        yield BooleanField::new('carnet', 'Carné')
            ->onlyOnForms();
        yield BooleanField::new('control_logueo', 'Control logueo')
            ->onlyOnForms();
        if (Crud::PAGE_EDIT === $pageName) {
            yield TextField::new('fecha_registro', 'Fecha registro')
                ->setFormTypeOptions(['attr' => ['readonly' => true]]);
        }
        yield AssociationField::new('arl')
            ->onlyOnForms();
        yield AssociationField::new('caja_compensacion', 'Caja compensación')
            ->onlyOnForms();
        yield AssociationField::new('operacion', 'Operación')
            ->onlyOnForms();
        yield AssociationField::new('area', 'Área')
            ->onlyOnForms();
        yield AssociationField::new('cargo')
            ->onlyOnForms();
        yield AssociationField::new('ciudad_residencia', 'Ciudad residencia')
            ->onlyOnForms();
        yield AssociationField::new('eps')
            ->onlyOnForms();
        yield AssociationField::new('fondo_cesantias', 'Fondo cesantías')
            ->onlyOnForms();
        yield AssociationField::new('fondo_pensiones', 'Fondo pensiones')
            ->onlyOnForms();
        yield AssociationField::new('tipo_sangre', 'Tipo sangre')
            ->setFormTypeOptions(['attr' => ['maxlenght' => 2]])
            ->onlyOnForms();
        yield AssociationField::new('rh')
            ->setFormTypeOptions(['attr' => ['maxlenght' => 2]])
            ->onlyOnForms();
        yield AssociationField::new('tipo_contrato', 'Tipo contrato')
            ->onlyOnForms();
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('arl')
            ->add('caja_compensacion')
            ->add('cargo')
            ->add('eps')
            ->add('estado_usuario')
            ->add('fondo_cesantias')
            ->add('fondo_pensiones')
            // ->add(BooleanFilter::new('carnet'))
            // ->add(BooleanFilter::new('dotacion'))
            ->add('genero')
            ->add('jefe_directo')
            ->add('sede_laboral')
            ->add('tipo_contrato');
    }
    
}
