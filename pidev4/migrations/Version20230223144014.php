<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223144014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, constat_id INT DEFAULT NULL, num_contrat INT DEFAULT NULL, nomagence VARCHAR(255) DEFAULT NULL, nomconducteur VARCHAR(255) DEFAULT NULL, prenomconducteur VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, immatriculation VARCHAR(100) DEFAULT NULL, INDEX IDX_292FFF1DBDDDB8C (constat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DBDDDB8C FOREIGN KEY (constat_id) REFERENCES constat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DBDDDB8C');
        $this->addSql('DROP TABLE vehicule');
    }
}
