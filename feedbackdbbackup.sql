-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.54-1ubuntu4


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema test
--

CREATE DATABASE IF NOT EXISTS test;
USE test;

--
-- Definition of table `test`.`comments`
--

DROP TABLE IF EXISTS `test`.`comments`;
CREATE TABLE  `test`.`comments` (
  `id` int(3) unsigned NOT NULL,
  `from` varchar(15) NOT NULL,
  `to` varchar(15) NOT NULL,
  `subject_code` varchar(6) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `from` (`from`,`to`),
  KEY `to` (`to`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`to`) REFERENCES `users` (`username`) ON DELETE CASCADE,
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`from`) REFERENCES `users` (`username`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`.`comments`
--

/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
LOCK TABLES `comments` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


--
-- Definition of table `test`.`subjects`
--

DROP TABLE IF EXISTS `test`.`subjects`;
CREATE TABLE  `test`.`subjects` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `code` varchar(6) NOT NULL,
  `class` char(2) NOT NULL,
  `teacher1` varchar(15) NOT NULL,
  `teacher2` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`code`,`class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`.`subjects`
--

/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
LOCK TABLES `subjects` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
