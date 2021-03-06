<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20200511130902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Adds `avatar` to `user` table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `user` ADD COLUMN `avatar` VARCHAR(255) DEFAULT NULL AFTER `active`');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `user` DROP COLUMN `avatar`');
    }
}
