<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20131208200029 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("ALTER TABLE users ADD language VARCHAR(5)");
    }

    public function down(Schema $schema)
    {
        $this->addSql("ALTER TABLE users DROP language");
    }
}
