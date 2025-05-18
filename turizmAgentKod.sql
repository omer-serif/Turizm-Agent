-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema turizmagent
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema turizmagent
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `turizmagent` DEFAULT CHARACTER SET utf8mb3 ;
USE `turizmagent` ;

-- -----------------------------------------------------
-- Table `turizmagent`.`Customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Customers` (
  `customerID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `eMail` VARCHAR(45) NOT NULL,
  `phoneNumber` VARCHAR(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthDate` DATE NOT NULL,
  
  PRIMARY KEY (`customerID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`Guides`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Guides` (
  `guideID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `salary` DECIMAL NOT NULL,
  PRIMARY KEY (`guideID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`Tours`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Tours` (
  `tourID` INT NOT NULL,
  `startDate` DATE NOT NULL,
  `finishDate` DATE NOT NULL,
  `quota` INT NOT NULL,
  `price` DECIMAL NOT NULL,
  `Guides_guideID` INT NOT NULL,
  PRIMARY KEY (`tourID`, `Guides_guideID`),
  INDEX `fk_Tours_Guides1_idx` (`Guides_guideID` ASC) VISIBLE,
  CONSTRAINT `fk_Tours_Guides1`
    FOREIGN KEY (`Guides_guideID`)
    REFERENCES `turizmagent`.`Guides` (`guideID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`Comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Comments` (
  `commentID` INT NOT NULL,
  `comment` VARCHAR(255) NOT NULL,
  `Tours_tourID` INT NOT NULL,
  PRIMARY KEY (`commentID`, `Tours_tourID`),
  INDEX `fk_Commnets_Tours1_idx` (`Tours_tourID` ASC) VISIBLE,
  CONSTRAINT `fk_Commnets_Tours1`
    FOREIGN KEY (`Tours_tourID`)
    REFERENCES `turizmagent`.`Tours` (`tourID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`Managers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Managers` (
  `managerID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `salaryl` DECIMAL NOT NULL,
  PRIMARY KEY (`managerID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`Customers_has_Tours`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Customers_has_Tours` (
  `rezervationID` INT NOT NULL,
  `Customers_customerID` INT NOT NULL,
  `Tours_tourID` INT NOT NULL,
  `totalPrice` DECIMAL NOT NULL,
  PRIMARY KEY (`rezervationID`, `Customers_customerID`, `Tours_tourID`),
  INDEX `fk_Customers_has_Tours_Tours1_idx` (`Tours_tourID` ASC) VISIBLE,
  INDEX `fk_Customers_has_Tours_Customers_idx` (`Customers_customerID` ASC) VISIBLE,
  CONSTRAINT `fk_Customers_has_Tours_Customers`
    FOREIGN KEY (`Customers_customerID`)
    REFERENCES `turizmagent`.`Customers` (`customerID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Customers_has_Tours_Tours1`
    FOREIGN KEY (`Tours_tourID`)
    REFERENCES `turizmagent`.`Tours` (`tourID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`FLanguage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`FLanguage` (
  `guideID` INT NOT NULL,
  `language` VARCHAR(45) NOT NULL,
  INDEX `FK_GuideLanguage_idx` (`guideID` ASC) VISIBLE,
  CONSTRAINT `FK_GuideLanguage`
    FOREIGN KEY (`guideID`)
    REFERENCES `turizmagent`.`Guides` (`guideID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `turizmagent`.`Payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `turizmagent`.`Payment` (
  `paymentID` INT NOT NULL,
  `rezervationID` INT NOT NULL,
  `paymentDate` DATE NOT NULL,
  `amount` DECIMAL(10,2) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`paymentID`),
  INDEX `fk_Payments_reservationID_idx` (`rezervationID` ASC) VISIBLE,
  CONSTRAINT `fk_Payments_reservationID`
    FOREIGN KEY (`rezervationID`)
    REFERENCES `turizmagent`.`Customers_has_Tours` (`rezervationID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- Trigger1 -- (tur kontenjan kontrolü)
DELIMITER $$

CREATE TRIGGER trg_check_and_update_quota
BEFORE INSERT ON Customers_has_Tours
FOR EACH ROW
BEGIN
  DECLARE tour_quota INT;

  -- Turun mevcut kontenjanını al
  SELECT quota INTO tour_quota
  FROM Tours
  WHERE tourID = NEW.Tours_tourID;

  -- Kontenjan sıfırsa hata ver
  IF tour_quota <= 0 THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'Bu tur için kontenjan kalmamıştır.';
  ELSE
    -- Kontenjanı bir azalt
    UPDATE Tours
    SET quota = quota - 1
    WHERE tourID = NEW.Tours_tourID;
  END IF;
END$$

DELIMITER ;


-- Trigger2 --(tur kontenjan güncellemesi)

DELIMITER //
CREATE TRIGGER update_tour_quota_on_delete
AFTER DELETE ON Customers_has_Tours
FOR EACH ROW
BEGIN
    UPDATE Tours
    SET quota = quota + 1
    WHERE tourID = OLD.Tours_tourID;
END;
//
DELIMITER ;

-- Trigger3--(ödeme durumu güncellemesi)
DELIMITER $$

CREATE TRIGGER trg_update_payment_status
BEFORE INSERT ON Payment
FOR EACH ROW
BEGIN
  SET NEW.status = 'completed';
END$$

DELIMITER ;

-- Index -- (sık yapılan sorgular)
CREATE INDEX idx_customer_name ON Customers (name);
CREATE INDEX idx_customer_email ON Customers (eMail);
CREATE INDEX idx_customer_phone ON Customers (phoneNumber);
CREATE INDEX idx_tour_start_date ON Tours (startDate);
CREATE INDEX idx_tour_finish_date ON Tours (finishDate);
CREATE INDEX idx_tour_guide_id ON Tours (Guides_guideID);
CREATE INDEX idx_rezervation_id ON Customers_has_Tours (rezervationID);
CREATE INDEX idx_language ON FLanguage (language);

-- view 1 --(tur detayları)
CREATE VIEW TourDetails AS
SELECT
    t.tourID,
    t.startDate,
    t.finishDate,
    t.quota,
    t.price,
    g.name AS guideName
FROM Tours t
JOIN Guides g ON t.Guides_guideID = g.guideID;


-- view 2 --(rezervasyon bilgileri)
CREATE VIEW CustomerReservations AS
SELECT
    c.name AS customerName,
    t.startDate,
    t.finishDate,
    ctr.totalPrice,
    ctr.rezervationID
FROM Customers c
JOIN Customers_has_Tours ctr ON c.customerID = ctr.Customers_customerID
JOIN Tours t ON ctr.Tours_tourID = t.tourID;

-- view 3 --(rehber adı bildiği diller)
CREATE VIEW GuideLanguages AS
SELECT
    g.name AS guideName,
    GROUP_CONCAT(fl.language SEPARATOR ', ') AS languages
FROM Guides g
LEFT JOIN FLanguage fl ON g.guideID = fl.guideID
GROUP BY g.guideID, g.name;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
