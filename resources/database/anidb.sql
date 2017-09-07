-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema anidb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema anidb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `anidb` DEFAULT CHARACTER SET utf8 ;
USE `anidb` ;

-- -----------------------------------------------------
-- Table `anidb`.`Anime`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`Anime` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `watchStatus` INT NOT NULL COMMENT '0 - Done Watching\n1 - Currently Watching (Ongoing)\n2 - Not Watched\n3 - For Downloading\n4 - Dropped',
  `quality` VARCHAR(12) NOT NULL,
  `title` VARCHAR(150) NOT NULL,
  `episodes` INT UNSIGNED NULL,
  `ovas` INT UNSIGNED NULL,
  `specials` INT UNSIGNED NULL,
  `filesize` BIGINT(12) NULL,
  `seasonNumber` INT NULL,
  `dateFinished` DATE NULL,
  `releaseSeason` ENUM('Winter', 'Spring', 'Summer', 'Fall') NULL,
  `releaseYear` INT NULL,
  `durationHour` INT NULL,
  `durationMinute` INT NULL,
  `durationSecond` INT NULL,
  `encoder` VARCHAR(64) NULL,
  `variants` VARCHAR(150) NULL,
  `remarks` VARCHAR(150) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `title_UNIQUE` (`title` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
