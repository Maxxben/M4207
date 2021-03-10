<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210304074737 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acces (id INT AUTO_INCREMENT NOT NULL, utilisateur_id_id INT NOT NULL, document_id_id INT NOT NULL, INDEX IDX_D0F43B10B981C689 (utilisateur_id_id), INDEX IDX_D0F43B1016E5E825 (document_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B10B981C689 FOREIGN KEY (utilisateur_id_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1016E5E825 FOREIGN KEY (document_id_id) REFERENCES document (id)');
        $this->addSql('ALTER TABLE autorisation ADD acces_id INT NOT NULL');
        $this->addSql('ALTER TABLE autorisation ADD CONSTRAINT FK_9A43134FC05BFAD FOREIGN KEY (acces_id) REFERENCES acces (id)');
        $this->addSql('CREATE INDEX IDX_9A43134FC05BFAD ON autorisation (acces_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE autorisation DROP FOREIGN KEY FK_9A43134FC05BFAD');
        $this->addSql('DROP TABLE acces');
        $this->addSql('DROP INDEX IDX_9A43134FC05BFAD ON autorisation');
        $this->addSql('ALTER TABLE autorisation DROP acces_id');
    }
}
