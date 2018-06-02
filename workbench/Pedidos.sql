-- MySQL Script generated by MySQL Workbench
-- Fri Jun  1 22:32:43 2018
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
-- Table `mydb`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Clientes` (
  `nif` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  PRIMARY KEY (`nif`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Pedidos` (
  `numero` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `cliente` INT NULL,
  `producto` INT NULL,
  `cantidad` INT NULL,
  `Clientes_nif` INT NOT NULL,
  PRIMARY KEY (`numero`, `Clientes_nif`),
  INDEX `fk_Pedidos_Clientes_idx` (`Clientes_nif` ASC),
  CONSTRAINT `fk_Pedidos_Clientes`
    FOREIGN KEY (`Clientes_nif`)
    REFERENCES `mydb`.`Clientes` (`nif`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `Pedidos_numero` INT NOT NULL,
  `Pedidos_Clientes_nif` INT NOT NULL,
  PRIMARY KEY (`id`, `Pedidos_numero`, `Pedidos_Clientes_nif`),
  INDEX `fk_Productos_Pedidos1_idx` (`Pedidos_numero` ASC, `Pedidos_Clientes_nif` ASC),
  CONSTRAINT `fk_Productos_Pedidos1`
    FOREIGN KEY (`Pedidos_numero` , `Pedidos_Clientes_nif`)
    REFERENCES `mydb`.`Pedidos` (`numero` , `Clientes_nif`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
