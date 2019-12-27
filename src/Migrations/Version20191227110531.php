<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20191227110531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adds `active` column on `user`';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user ADD COLUMN active TINYINT(1) DEFAULT 1 AFTER roles');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user DROP COLUMN active');
    }
}
