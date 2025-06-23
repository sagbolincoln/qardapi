<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250621112748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE company ADD return_url VARCHAR(255) DEFAULT NULL, ADD redirect_url VARCHAR(255) DEFAULT NULL, ADD country VARCHAR(10) DEFAULT NULL, ADD postal_code VARCHAR(20) DEFAULT NULL, ADD ape_code VARCHAR(20) DEFAULT NULL, CHANGE siren siren VARCHAR(20) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE company DROP return_url, DROP redirect_url, DROP country, DROP postal_code, DROP ape_code, CHANGE siren siren VARCHAR(9) NOT NULL, CHANGE status status VARCHAR(50) NOT NULL
        SQL);
    }
}
