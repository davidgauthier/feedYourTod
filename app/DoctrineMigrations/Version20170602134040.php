<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170602134040 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE lexik_cms_block (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_FDE123CDAEA34913 (reference), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lexik_cms_page (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_5FC2E42DAEA34913 (reference), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lexik_cms_page_translation (id INT AUTO_INCREMENT NOT NULL, page_id INT DEFAULT NULL, locale VARCHAR(255) NOT NULL, meta_title VARCHAR(255) NOT NULL, meta_description VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, content LONGTEXT DEFAULT NULL, transformed_content LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_2A07AD99C4663E4 (page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lexik_cms_block_translation (id INT AUTO_INCREMENT NOT NULL, block_id INT DEFAULT NULL, content LONGTEXT DEFAULT NULL, locale VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_8438853BE9ED820C (block_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lexik_cms_page_translation ADD CONSTRAINT FK_2A07AD99C4663E4 FOREIGN KEY (page_id) REFERENCES lexik_cms_page (id)');
        $this->addSql('ALTER TABLE lexik_cms_block_translation ADD CONSTRAINT FK_8438853BE9ED820C FOREIGN KEY (block_id) REFERENCES lexik_cms_block (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lexik_cms_block_translation DROP FOREIGN KEY FK_8438853BE9ED820C');
        $this->addSql('ALTER TABLE lexik_cms_page_translation DROP FOREIGN KEY FK_2A07AD99C4663E4');
        $this->addSql('DROP TABLE lexik_cms_block');
        $this->addSql('DROP TABLE lexik_cms_page');
        $this->addSql('DROP TABLE lexik_cms_page_translation');
        $this->addSql('DROP TABLE lexik_cms_block_translation');
    }
}
