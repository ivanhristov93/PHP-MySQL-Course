-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema school
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema school
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8 ;
USE `school` ;

-- -----------------------------------------------------
-- Table `school`.`predmeti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`predmeti` (
  `idPredmeti` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  PRIMARY KEY (`idPredmeti`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `school`.`uchenici`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`uchenici` (
  `iduchenici` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `predmeti_idPredmeti` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`iduchenici`)  COMMENT '',
  INDEX `fk_uchenici_predmeti1_idx` (`predmeti_idPredmeti` ASC)  COMMENT '',
  CONSTRAINT `fk_uchenici_predmeti1`
    FOREIGN KEY (`predmeti_idPredmeti`)
    REFERENCES `school`.`predmeti` (`idPredmeti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `school`.`klasove`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`klasove` (
  `idklasove` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `uchenici_iduchenici` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`idklasove`)  COMMENT '',
  INDEX `fk_klasove_uchenici_idx` (`uchenici_iduchenici` ASC)  COMMENT '',
  CONSTRAINT `fk_klasove_uchenici`
    FOREIGN KEY (`uchenici_iduchenici`)
    REFERENCES `school`.`uchenici` (`iduchenici`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `school`.`prepodavateli`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`prepodavateli` (
  `idPrepodavateli` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `uchenici_iduchenici` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`idPrepodavateli`)  COMMENT '',
  INDEX `fk_prepodavateli_uchenici1_idx` (`uchenici_iduchenici` ASC)  COMMENT '',
  CONSTRAINT `fk_prepodavateli_uchenici1`
    FOREIGN KEY (`uchenici_iduchenici`)
    REFERENCES `school`.`uchenici` (`iduchenici`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `school`.`prepodavateli_has_klasove`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`prepodavateli_has_klasove` (
  `prepodavateli_idPrepodavateli` INT(11) NOT NULL COMMENT '',
  `klasove_idklasove` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`prepodavateli_idPrepodavateli`, `klasove_idklasove`)  COMMENT '',
  INDEX `fk_prepodavateli_has_klasove_klasove1_idx` (`klasove_idklasove` ASC)  COMMENT '',
  INDEX `fk_prepodavateli_has_klasove_prepodavateli1_idx` (`prepodavateli_idPrepodavateli` ASC)  COMMENT '',
  CONSTRAINT `fk_prepodavateli_has_klasove_prepodavateli1`
    FOREIGN KEY (`prepodavateli_idPrepodavateli`)
    REFERENCES `school`.`prepodavateli` (`idPrepodavateli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_prepodavateli_has_klasove_klasove1`
    FOREIGN KEY (`klasove_idklasove`)
    REFERENCES `school`.`klasove` (`idklasove`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `school`.`prepodavateli_has_predmeti`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `school`.`prepodavateli_has_predmeti` (
  `prepodavateli_idPrepodavateli` INT(11) NOT NULL COMMENT '',
  `predmeti_idPredmeti` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`prepodavateli_idPrepodavateli`, `predmeti_idPredmeti`)  COMMENT '',
  INDEX `fk_prepodavateli_has_predmeti_predmeti1_idx` (`predmeti_idPredmeti` ASC)  COMMENT '',
  INDEX `fk_prepodavateli_has_predmeti_prepodavateli1_idx` (`prepodavateli_idPrepodavateli` ASC)  COMMENT '',
  CONSTRAINT `fk_prepodavateli_has_predmeti_prepodavateli1`
    FOREIGN KEY (`prepodavateli_idPrepodavateli`)
    REFERENCES `school`.`prepodavateli` (`idPrepodavateli`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_prepodavateli_has_predmeti_predmeti1`
    FOREIGN KEY (`predmeti_idPredmeti`)
    REFERENCES `school`.`predmeti` (`idPredmeti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
