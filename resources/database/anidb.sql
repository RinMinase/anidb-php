-- MySQL Script generated by MySQL Workbench
-- 10/05/17 04:06:06
-- Model: New Model    Version: 1.0
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
  `seasonNumber` INT NULL COMMENT '0 - Not Applicable',
  `firstSeasonTitle` VARCHAR(150) NULL,
  `prequel` VARCHAR(150) NULL,
  `sequel` VARCHAR(150) NULL,
  `offquel` VARCHAR(600) NULL,
  `dateFinished` DATE NULL,
  `releaseSeason` ENUM('Winter', 'Spring', 'Summer', 'Fall') NULL,
  `releaseYear` INT NULL,
  `durationHour` INT NULL,
  `durationMinute` INT NULL,
  `durationSecond` INT NULL,
  `encoder` VARCHAR(64) NULL,
  `variants` VARCHAR(150) NULL,
  `remarks` VARCHAR(150) NULL,
  `inHDD` TINYINT(1) NOT NULL DEFAULT 0,
  `ratingAudio` TINYINT(1) NULL,
  `ratingEnjoyment` TINYINT(1) NULL,
  `ratingGraphics` TINYINT(1) NULL,
  `ratingPlot` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `title_UNIQUE` (`title` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anidb`.`Downloads`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`Downloads` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(150) NOT NULL,
  `status` INT NOT NULL COMMENT '1 - In Queue\n2 - Finished Downloading\n3 - Finished Watching',
  `priority` INT NOT NULL COMMENT '1 - First Priority\n2 - Normal Priority\n3 - Last Priority (Delay)',
  `season` INT NULL,
  `year` INT NULL,
  `remarks` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anidb`.`HDD`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`HDD` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `from` VARCHAR(5) NOT NULL,
  `to` VARCHAR(5) NOT NULL,
  `hddSize` BIGINT(13) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anidb`.`Bugs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`Bugs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` INT NOT NULL COMMENT '0 - Closed\n1 - [Open] Critical\n2 - [Open] Non Critical',
  `details` VARCHAR(256) NOT NULL COMMENT 'Place [c] & [/c] on keywords.\nEx: Critical bug on [c]homepage[/c]',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anidb`.`Changes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`Changes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` INT NOT NULL COMMENT '0 - Closed\n1 - [Open] Feature\n2 - [Open] Improvement',
  `details` VARCHAR(128) NOT NULL,
  `sublist` VARCHAR(256) NULL COMMENT 'Comma-separated values per list item\nEx: sort: title,quality: fhd,title (check variants): sample title,size: 40-50gb,finished: lastweek / lastmonth / august / 2012,release: summer /2016 / summer 2016,encoder: coalgirls,remarks: redownload',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anidb`.`Changelog`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`Changelog` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` INT NOT NULL COMMENT '1 - Fix\n2 - New\n3 - Improved\n4 - Bug',
  `details` VARCHAR(128) NOT NULL COMMENT 'Place [c] & [/c] on keywords.\nEx: Critical bug on [c]homepage[/c]',
  `date` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `anidb`.`Summer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anidb`.`Summer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `listTitle` VARCHAR(32) NULL,
  `dateStart` DATE NULL,
  `dateEnd` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
