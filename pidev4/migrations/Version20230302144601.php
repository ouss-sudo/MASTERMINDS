<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230302144601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE constat (id INT AUTO_INCREMENT NOT NULL, dateaccident DATE DEFAULT NULL, lieu VARCHAR(50) DEFAULT NULL, dateconstat DATE DEFAULT NULL, imageaccident VARCHAR(2000) DEFAULT NULL, etat VARCHAR(50) DEFAULT NULL, nomclient VARCHAR(50) DEFAULT NULL, prenomclient VARCHAR(50) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, numerodetelephone VARCHAR(100) DEFAULT NULL, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, constat_id INT DEFAULT NULL, num_contrat INT DEFAULT NULL, nomagence VARCHAR(255) DEFAULT NULL, nomconducteur VARCHAR(255) DEFAULT NULL, prenomconducteur VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, immatriculation VARCHAR(100) DEFAULT NULL, INDEX IDX_292FFF1DBDDDB8C (constat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DBDDDB8C FOREIGN KEY (constat_id) REFERENCES constat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DBDDDB8C');
        $this->addSql('DROP TABLE constat');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
