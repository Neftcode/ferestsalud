<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201220034344 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ingreso');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ingreso (id INT AUTO_INCREMENT NOT NULL, paciente_id VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, aseguradora_id INT DEFAULT NULL, nombre_acompanante VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telefono_acompanante VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, fecha_ingreso VARCHAR(19) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, estado TINYINT(1) NOT NULL, ocupacion VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telefonos LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', profesional_solicitante VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, especialidad VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, rm VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_CC9B241FC3EE7049 (aseguradora_id), INDEX IDX_CC9B241F7310DAD4 (paciente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE ingreso ADD CONSTRAINT FK_CC9B241F7310DAD4 FOREIGN KEY (paciente_id) REFERENCES paciente (id)');
        $this->addSql('ALTER TABLE ingreso ADD CONSTRAINT FK_CC9B241FC3EE7049 FOREIGN KEY (aseguradora_id) REFERENCES aseguradora (id)');
    }
}
