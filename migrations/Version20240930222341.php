<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240930222341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout d\'une adresse et d\'une URL pour l\'image de profile';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD adresse VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD image_profile VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE contact DROP adresse');
        $this->addSql('ALTER TABLE contact DROP image_profile');
    }
}
