-- MySQL Script generated by MySQL Workbench
-- 03/17/15 21:49:17
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Admin` (
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Nama` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`Username`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Alumni`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Alumni` (
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `NamaLengkap` VARCHAR(100) NOT NULL,
  `NamaPanggilan` VARCHAR(15) NOT NULL,
  `JenisKelamin` CHAR(1) NOT NULL,
  `TempatLahir` VARCHAR(50) NOT NULL,
  `TanggalLahir` DATE NOT NULL,
  `Lembaga` VARCHAR(50) NOT NULL,
  `TahunLulus` MEDIUMINT(5) NOT NULL,
  `Cabang` VARCHAR(50) NULL DEFAULT NULL,
  `AlamatAsal` VARCHAR(200) NOT NULL,
  `AlamatSekarang` VARCHAR(200) NOT NULL,
  `Facebook` VARCHAR(80) NULL DEFAULT NULL,
  `Twitter` VARCHAR(30) NULL DEFAULT NULL,
  `Email` VARCHAR(80) NOT NULL,
  `NoHP` INT(15) NOT NULL,
  `Hobi` VARCHAR(80) NULL DEFAULT NULL,
  `Cita-cita` VARCHAR(45) NULL DEFAULT NULL,
  `Motto` VARCHAR(80) NULL DEFAULT NULL,
  `Prestasi` VARCHAR(200) NULL,
  `Kuliah` VARCHAR(100) NULL DEFAULT NULL,
  `AktifOrganisasi` VARCHAR(200) NULL DEFAULT NULL,
  `TempatKerja` VARCHAR(100) NULL DEFAULT NULL,
  `NamaOrtu` VARCHAR(100) NULL DEFAULT NULL,
  `PendidikanOrtu` VARCHAR(30) NULL DEFAULT NULL,
  `PekerjaanOrtu` VARCHAR(50) NULL DEFAULT NULL,
  `KontakOrtu` INT(15) NULL DEFAULT NULL,
  `LinkFoto` VARCHAR(50) NULL DEFAULT NULL,
  `TanggalUpdate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`Username`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
