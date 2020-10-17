<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201010042111 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cargo CHANGE tipo_practicante_id tipo_practicante_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ciudad CHANGE departamento_id departamento_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE estado_usuario CHANGE descripcion descripcion VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE modulo CHANGE observaciones observaciones VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE operacion_usuario CHANGE operacion_id operacion_id INT DEFAULT NULL, CHANGE area_id area_id INT DEFAULT NULL, CHANGE cargo_id cargo_id INT DEFAULT NULL, CHANGE funcion funcion VARCHAR(200) DEFAULT NULL, CHANGE observaciones observaciones VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE permiso_modulo_usuario CHANGE modulo_id modulo_id INT DEFAULT NULL, CHANGE rol_id rol_id INT DEFAULT NULL, CHANGE usuario_id usuario_id VARCHAR(15) DEFAULT NULL');
        $this->addSql('ALTER TABLE rh CHANGE descripcion descripcion VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE sede CHANGE observaciones observaciones VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE storage CHANGE usuario_registro_id usuario_registro_id VARCHAR(15) DEFAULT NULL');
        $this->addSql('ALTER TABLE tipo_contrato CHANGE observaciones observaciones VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE tour_modulo CHANGE modulo_id modulo_id INT DEFAULT NULL, CHANGE usuario_id usuario_id VARCHAR(15) DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario CHANGE arl_id arl_id INT DEFAULT NULL, CHANGE caja_compensacion_id caja_compensacion_id INT DEFAULT NULL, CHANGE cargo_id cargo_id INT DEFAULT NULL, CHANGE ciudad_residencia_id ciudad_residencia_id INT DEFAULT NULL, CHANGE eps_id eps_id INT DEFAULT NULL, CHANGE estado_usuario_id estado_usuario_id INT DEFAULT NULL, CHANGE fondo_cesantias_id fondo_cesantias_id INT DEFAULT NULL, CHANGE fondo_pensiones_id fondo_pensiones_id INT DEFAULT NULL, CHANGE jefe_directo_id jefe_directo_id VARCHAR(15) DEFAULT NULL, CHANGE rh_id rh_id INT DEFAULT NULL, CHANGE sede_laboral_id sede_laboral_id INT DEFAULT NULL, CHANGE tipo_contrato_id tipo_contrato_id INT DEFAULT NULL, CHANGE tipo_documento_id tipo_documento_id INT DEFAULT NULL, CHANGE tipo_sangre_id tipo_sangre_id INT DEFAULT NULL, CHANGE genero_id genero_id INT DEFAULT NULL, CHANGE fecha_expedicion fecha_expedicion VARCHAR(10) DEFAULT NULL, CHANGE fecha_salida fecha_salida VARCHAR(10) DEFAULT NULL, CHANGE contacto_personal contacto_personal VARCHAR(50) DEFAULT NULL, CHANGE direccion_residencia direccion_residencia VARCHAR(100) DEFAULT NULL, CHANGE contacto_emergencia_nombre contacto_emergencia_nombre VARCHAR(100) DEFAULT NULL, CHANGE contacto_emergencia_numero contacto_emergencia_numero VARCHAR(50) DEFAULT NULL, CHANGE correo_corporativo correo_corporativo VARCHAR(100) DEFAULT NULL, CHANGE salario_basico salario_basico VARCHAR(10) DEFAULT NULL, CHANGE bono bono VARCHAR(10) DEFAULT NULL, CHANGE auxilio_transporte auxilio_transporte VARCHAR(10) DEFAULT NULL, CHANGE dotacion dotacion VARCHAR(2) DEFAULT NULL, CHANGE carnet carnet VARCHAR(2) DEFAULT NULL, CHANGE control_logueo control_logueo VARCHAR(2) DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE usuario_notificacion CHANGE usuario_id usuario_id VARCHAR(15) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cargo CHANGE tipo_practicante_id tipo_practicante_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ciudad CHANGE departamento_id departamento_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE estado_usuario CHANGE descripcion descripcion VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE modulo CHANGE observaciones observaciones VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE operacion_usuario CHANGE operacion_id operacion_id INT DEFAULT NULL, CHANGE area_id area_id INT DEFAULT NULL, CHANGE cargo_id cargo_id INT DEFAULT NULL, CHANGE funcion funcion VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE observaciones observaciones VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE permiso_modulo_usuario CHANGE modulo_id modulo_id INT DEFAULT NULL, CHANGE rol_id rol_id INT DEFAULT NULL, CHANGE usuario_id usuario_id VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE rh CHANGE descripcion descripcion VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE sede CHANGE observaciones observaciones VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE storage CHANGE usuario_registro_id usuario_registro_id VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE tipo_contrato CHANGE observaciones observaciones VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE tour_modulo CHANGE modulo_id modulo_id INT DEFAULT NULL, CHANGE usuario_id usuario_id VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE usuario CHANGE genero_id genero_id INT DEFAULT NULL, CHANGE arl_id arl_id INT DEFAULT NULL, CHANGE caja_compensacion_id caja_compensacion_id INT DEFAULT NULL, CHANGE cargo_id cargo_id INT DEFAULT NULL, CHANGE ciudad_residencia_id ciudad_residencia_id INT DEFAULT NULL, CHANGE eps_id eps_id INT DEFAULT NULL, CHANGE estado_usuario_id estado_usuario_id INT DEFAULT NULL, CHANGE fondo_cesantias_id fondo_cesantias_id INT DEFAULT NULL, CHANGE fondo_pensiones_id fondo_pensiones_id INT DEFAULT NULL, CHANGE jefe_directo_id jefe_directo_id VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE rh_id rh_id INT DEFAULT NULL, CHANGE sede_laboral_id sede_laboral_id INT DEFAULT NULL, CHANGE tipo_contrato_id tipo_contrato_id INT DEFAULT NULL, CHANGE tipo_documento_id tipo_documento_id INT DEFAULT NULL, CHANGE tipo_sangre_id tipo_sangre_id INT DEFAULT NULL, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE fecha_expedicion fecha_expedicion VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE fecha_salida fecha_salida VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contacto_personal contacto_personal VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE direccion_residencia direccion_residencia VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contacto_emergencia_nombre contacto_emergencia_nombre VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contacto_emergencia_numero contacto_emergencia_numero VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE correo_corporativo correo_corporativo VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE salario_basico salario_basico VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE bono bono VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE auxilio_transporte auxilio_transporte VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE dotacion dotacion VARCHAR(2) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE carnet carnet VARCHAR(2) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE control_logueo control_logueo VARCHAR(2) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE usuario_notificacion CHANGE usuario_id usuario_id VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
