<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308163415 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(100) DEFAULT NULL, objet VARCHAR(50) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, date_reclamation DATE NOT NULL, date_traitement DATE DEFAULT NULL, etat VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation_user (reclamation_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_8CDC51262D6BA2D9 (reclamation_id), INDEX IDX_8CDC5126A76ED395 (user_id), PRIMARY KEY(reclamation_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT DEFAULT NULL, objet VARCHAR(200) DEFAULT NULL, description VARCHAR(100) DEFAULT NULL, datereponse DATE DEFAULT NULL, INDEX IDX_5FB6DEC72D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, constat_id INT DEFAULT NULL, num_contrat INT DEFAULT NULL, nomagence VARCHAR(255) DEFAULT NULL, nomconducteur VARCHAR(255) DEFAULT NULL, prenomconducteur VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, immatriculation VARCHAR(100) DEFAULT NULL, INDEX IDX_292FFF1DBDDDB8C (constat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation_user ADD CONSTRAINT FK_8CDC51262D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation_user ADD CONSTRAINT FK_8CDC5126A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DBDDDB8C FOREIGN KEY (constat_id) REFERENCES constat (id)');
        $this->addSql('ALTER TABLE constat ADD user_id INT DEFAULT NULL, DROP nomclient, DROP prenomclient, DROP email, DROP numerodetelephone');
        $this->addSql('ALTER TABLE constat ADD CONSTRAINT FK_F96EDD98A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F96EDD98A76ED395 ON constat (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constat DROP FOREIGN KEY FK_F96EDD98A76ED395');
        $this->addSql('ALTER TABLE reclamation_user DROP FOREIGN KEY FK_8CDC51262D6BA2D9');
        $this->addSql('ALTER TABLE reclamation_user DROP FOREIGN KEY FK_8CDC5126A76ED395');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC72D6BA2D9');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DBDDDB8C');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reclamation_user');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP INDEX IDX_F96EDD98A76ED395 ON constat');
        $this->addSql('ALTER TABLE constat ADD nomclient VARCHAR(50) DEFAULT NULL, ADD prenomclient VARCHAR(50) DEFAULT NULL, ADD email VARCHAR(100) DEFAULT NULL, ADD numerodetelephone VARCHAR(100) DEFAULT NULL, DROP user_id');
    }
}
