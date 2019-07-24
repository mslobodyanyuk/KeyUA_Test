<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190709142501 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, specialty VARCHAR(255) DEFAULT NULL, write_code VARCHAR(255) DEFAULT NULL, test_code VARCHAR(255) DEFAULT NULL, communicate_with_manager VARCHAR(255) DEFAULT NULL, draw VARCHAR(255) DEFAULT NULL, set_tasks VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE subcategories');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL COLLATE utf8_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE employees (id INT NOT NULL, specialty VARCHAR(10) NOT NULL COLLATE utf8_general_ci, writeCode VARCHAR(25) DEFAULT NULL COLLATE utf8_general_ci, testCode VARCHAR(25) DEFAULT NULL COLLATE utf8_general_ci, communicateWithManager VARCHAR(25) DEFAULT NULL COLLATE utf8_general_ci, draw VARCHAR(25) DEFAULT NULL COLLATE utf8_general_ci, setTasks VARCHAR(25) DEFAULT NULL COLLATE utf8_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL COLLATE utf8_general_ci, category_id INT NOT NULL, subcategory_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE subcategories (id INT NOT NULL, name VARCHAR(100) NOT NULL COLLATE utf8_general_ci, product_category_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE employee');
    }
}
