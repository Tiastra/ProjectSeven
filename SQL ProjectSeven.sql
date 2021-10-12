-- MySQL Workbench Synchronization
-- Generated: 2021-10-07 20:56
-- Model: New Model
-- Version: 1.0
-- Project: ProjectSeven
-- Author: Tiago Oliveira

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `projectseven` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `projectseven`.`Cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(100) NOT NULL,
  `documento_cliente` INT(11) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `email_cliente` VARCHAR(45) NOT NULL,
  `telefone_cliente` VARCHAR(14) NULL DEFAULT NULL,
  `id_endereco` INT(11) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE INDEX `documento_cliente_UNIQUE` (`documento_cliente` ASC),
  UNIQUE INDEX `email_cliente_UNIQUE` (`email_cliente` ASC),
  INDEX `fk_Cliente_Endereco1_idx` (`id_endereco` ASC),
  CONSTRAINT `fk_Cliente_Endereco1`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `projectseven`.`Endereco` (`id_endereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `projectseven`.`Endereco` (
  `id_endereco` INT(11) NOT NULL AUTO_INCREMENT,
  `cep` VARCHAR(8) NULL DEFAULT NULL,
  `logradouro` VARCHAR(60) NOT NULL,
  `numero` INT(11) NOT NULL,
  `complemento` VARCHAR(45) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(60) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_endereco`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `projectseven`.`Titulo` (
  `id_titulo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao_titulo` TEXT NOT NULL,
  `valor_titulo` DOUBLE NOT NULL,
  `data_vencimento` DATE NOT NULL,
  `data_atualizacao` VARCHAR(45) NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_titulo`),
  INDEX `fk_Titulo_Cliente1_idx` (`id_cliente` ASC),
  CONSTRAINT `fk_Titulo_Cliente1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `projectseven`.`Cliente` (`id_cliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
