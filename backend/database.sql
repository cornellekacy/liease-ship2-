SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `track` ;
CREATE SCHEMA IF NOT EXISTS `track` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `track` ;

-- -----------------------------------------------------
-- Table `library`.`item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `track`.`users` ;

CREATE TABLE IF NOT EXISTS `track`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `email`, `username`,`password`) VALUES
(1, 'cornelle@gmail.com', 'admin', md5('admin45'));


DROP TABLE IF EXISTS `track`.`track` ;

CREATE TABLE IF NOT EXISTS `track`.`track` (
  `track_id` INT NOT NULL AUTO_INCREMENT,
  `packageumber` varchar(255) NOT NULL,
  `packagetype` varchar(255) NOT NULL,
  `departuredatetime` varchar(255) NOT NULL,
  `expectedarrivaldatetime` varchar(255) NOT NULL,
  `sendername` varchar(255) NOT NULL,
  `senderemail` varchar(255) NOT NULL,
  `senderaddress` varchar(255) NOT NULL,
  `senderphonenumber` varchar(255) NOT NULL,
  `origincity` varchar(255) NOT NULL,
  `DestinationCity` varchar(255) NOT NULL,
  `DeliveryAddress` varchar(255) NOT NULL,
  `ReceiverName` varchar(255) NOT NULL,
  `ReceiversEmail` varchar(255) NOT NULL,
  `ReceiversPhoneNumber` varchar(255) NOT NULL,
  `PackageDescription` varchar(255) NOT NULL,
  `Waybill` varchar(255) NOT NULL,
  `TransitPoints` varchar(255) NOT NULL,
  `TrackingNumber` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,

  PRIMARY KEY (`track_id`))
ENGINE = InnoDB;

GRANT ALL PRIVILEGES ON track.* TO 'cornelle'@'localhost' IDENTIFIED BY 'password';