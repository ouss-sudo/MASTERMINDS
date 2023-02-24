<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216175124 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD nomclient VARCHAR(255) DEFAULT NULL, ADD prenomclient VARCHAR(255) DEFAULT NULL, DROP nom_user, DROP prenom_user, CHANGE num_tel numtelephone VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD nom_user VARCHAR(255) DEFAULT NULL, ADD prenom_user VARCHAR(255) DEFAULT NULL, DROP nomclient, DROP prenomclient, CHANGE numtelephone num_tel VARCHAR(100) DEFAULT NULL');
    }
}
