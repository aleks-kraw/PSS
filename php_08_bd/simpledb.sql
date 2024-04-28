SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `simpledb` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
USE `simpledb` ;

-- -----------------------------------------------------
-- Table `simpledb`.`person`
-- -----------------------------------------------------
CREATE TABLE `person` (
  `idperson` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`idperson`, `name`, `surname`, `birthdate`, `phone`) VALUES
(1, 'Maciej', 'Wierzba', '2002-12-21', 765456789),
(2, 'Jan', 'Trzcina', '2000-01-09', 673457891),
(3, 'Barbara', 'Stodoła', '1998-11-23', 682480521),
(4, 'Justyna', 'Powidło', '1980-09-08', 294778542);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
