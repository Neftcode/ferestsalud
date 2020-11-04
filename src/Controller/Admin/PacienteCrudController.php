<?php
// Controlador para mostrar CRUD de Ciudades
namespace App\Controller\Admin;

use App\Entity\Paciente;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PacienteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Paciente::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $user = $this->getUser();
        $userRoles = $user->getRoles();
        $permisos = $_SESSION["permisos"];
        // dd($_SESSION["permisos"]);
        if (Crud::PAGE_EDIT === $pageName) {
            if ($permisos["admin_usuario"]["rolNombre"] == "ROLE_SUPER_ADMIN") {
                yield IdField::new('id')
                ->setFormTypeOptions(['attr' => ['maxlength' => 15]]);
            } else {
                yield IdField::new('id')
                ->setFormTypeOptions(['attr' => ['readonly' => true, 'maxlength' => 15]]);
            }
        } else {
            yield IdField::new('id')
            ->setFormTypeOptions(['attr' => ['maxlength' => 15]]);
        }
        yield TextField::new('nombres');
        yield TextField::new('apellidos');
        yield AssociationField::new('genero', 'Género');
        if (Crud::PAGE_INDEX === $pageName || Crud::PAGE_DETAIL === $pageName) {
            yield IntegerField::new('edad');
        } else {
            yield TextField::new('fecha_nacimiento', 'Fecha nacimiento');
        }
        yield TextField::new('ocupacion', 'Ocupación');
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('genero');
    }
}
