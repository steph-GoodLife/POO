-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema onetable
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema onetable
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `onetable` DEFAULT CHARACTER SET utf8 ;
USE `onetable` ;

-- -----------------------------------------------------
-- Table `onetable`.`Personnage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onetable`.`Personnage` (
  `idPersonnage` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `theName` VARCHAR(80) NOT NULL,
  `theEndurance` SMALLINT UNSIGNED NULL DEFAULT 100,
  `thedefense` SMALLINT UNSIGNED NULL DEFAULT 10,
  `theAttac` SMALLINT UNSIGNED NULL DEFAULT 10,
  `theExp` MEDIUMINT UNSIGNED NULL DEFAULT 0,
  `theFight` MEDIUMINT UNSIGNED NULL DEFAULT 0,
  PRIMARY KEY (`idPersonnage`),
  UNIQUE INDEX `thename_UNIQUE` (`theName` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
