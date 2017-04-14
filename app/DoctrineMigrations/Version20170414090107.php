<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170414090107 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE child (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, firstName VARCHAR(255) NOT NULL, birthDate DATETIME NOT NULL, INDEX IDX_22B35429A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE child_food (id INT AUTO_INCREMENT NOT NULL, child_id INT NOT NULL, food_id INT NOT NULL, child_food_tag_id INT NOT NULL, INDEX IDX_61098A05DD62C21B (child_id), INDEX IDX_61098A05BA8E87C4 (food_id), INDEX IDX_61098A0520786E9C (child_food_tag_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE child_food_tag (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food (id INT AUTO_INCREMENT NOT NULL, food_type_id INT NOT NULL, wording VARCHAR(255) NOT NULL, INDEX IDX_D43829F78AD350AB (food_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE food_type (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, season_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_7D053A934EC001D1 (season_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_recipe (id INT AUTO_INCREMENT NOT NULL, recipe_id INT NOT NULL, src VARCHAR(255) NOT NULL, legend VARCHAR(255) NOT NULL, INDEX IDX_8F37C61F59D8A214 (recipe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, recipe_type_id INT DEFAULT NULL, season_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_DA88B13789A882D3 (recipe_type_id), INDEX IDX_DA88B1374EC001D1 (season_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_menu (recipe_id INT NOT NULL, menu_id INT NOT NULL, INDEX IDX_21E604C59D8A214 (recipe_id), INDEX IDX_21E604CCCD7E912 (menu_id), PRIMARY KEY(recipe_id, menu_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_type (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE season (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, dateBegin DATETIME NOT NULL, dateEnd DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_957A6479C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE child ADD CONSTRAINT FK_22B35429A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE child_food ADD CONSTRAINT FK_61098A05DD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('ALTER TABLE child_food ADD CONSTRAINT FK_61098A05BA8E87C4 FOREIGN KEY (food_id) REFERENCES food (id)');
        $this->addSql('ALTER TABLE child_food ADD CONSTRAINT FK_61098A0520786E9C FOREIGN KEY (child_food_tag_id) REFERENCES child_food_tag (id)');
        $this->addSql('ALTER TABLE food ADD CONSTRAINT FK_D43829F78AD350AB FOREIGN KEY (food_type_id) REFERENCES food_type (id)');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A934EC001D1 FOREIGN KEY (season_id) REFERENCES season (id)');
        $this->addSql('ALTER TABLE photo_recipe ADD CONSTRAINT FK_8F37C61F59D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B13789A882D3 FOREIGN KEY (recipe_type_id) REFERENCES recipe_type (id)');
        $this->addSql('ALTER TABLE recipe ADD CONSTRAINT FK_DA88B1374EC001D1 FOREIGN KEY (season_id) REFERENCES season (id)');
        $this->addSql('ALTER TABLE recipe_menu ADD CONSTRAINT FK_21E604C59D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipe_menu ADD CONSTRAINT FK_21E604CCCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE child_food DROP FOREIGN KEY FK_61098A05DD62C21B');
        $this->addSql('ALTER TABLE child_food DROP FOREIGN KEY FK_61098A0520786E9C');
        $this->addSql('ALTER TABLE child_food DROP FOREIGN KEY FK_61098A05BA8E87C4');
        $this->addSql('ALTER TABLE food DROP FOREIGN KEY FK_D43829F78AD350AB');
        $this->addSql('ALTER TABLE recipe_menu DROP FOREIGN KEY FK_21E604CCCD7E912');
        $this->addSql('ALTER TABLE photo_recipe DROP FOREIGN KEY FK_8F37C61F59D8A214');
        $this->addSql('ALTER TABLE recipe_menu DROP FOREIGN KEY FK_21E604C59D8A214');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B13789A882D3');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A934EC001D1');
        $this->addSql('ALTER TABLE recipe DROP FOREIGN KEY FK_DA88B1374EC001D1');
        $this->addSql('ALTER TABLE child DROP FOREIGN KEY FK_22B35429A76ED395');
        $this->addSql('DROP TABLE child');
        $this->addSql('DROP TABLE child_food');
        $this->addSql('DROP TABLE child_food_tag');
        $this->addSql('DROP TABLE food');
        $this->addSql('DROP TABLE food_type');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE photo_recipe');
        $this->addSql('DROP TABLE recipe');
        $this->addSql('DROP TABLE recipe_menu');
        $this->addSql('DROP TABLE recipe_type');
        $this->addSql('DROP TABLE season');
        $this->addSql('DROP TABLE fos_user');
    }
}
