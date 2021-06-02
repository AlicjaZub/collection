# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: plants
# Generation Time: 2021-06-02 12:17:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `details`;

CREATE TABLE `details` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `latin_name` varchar(255) NOT NULL DEFAULT '',
  `hardiness` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;

INSERT INTO `details` (`id`, `name`, `latin_name`, `hardiness`, `image`)
VALUES
	(1,'Prayer Plant','Maranta leuconeura','3','prayer.jpg'),
	(2,'Fishbone Cactus','Epiphyllum anguliger','3','fishbone.jpg'),
	(3,'Chinese Money Plant','Pilea peperomioides','3','chinese.jpg'),
	(4,'Swiss Cheese Plant','Monstera deliciosa','3','swiss.jpg'),
	(5,'Maidenhair Fern','Adiantum raddianum','3','fern.jpg'),
	(6,'Devil\'s Ivy','Epipremnum aureum','3','devil.jpg'),
	(7,'Lavender Grosso','Lavandula x intermedia','1','lavender.jpg'),
	(8,'Geranium','Geranium palmatum','2','geranium.jpg');

/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hardiness_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hardiness_types`;

CREATE TABLE `hardiness_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hardiness_type` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `hardiness_types` WRITE;
/*!40000 ALTER TABLE `hardiness_types` DISABLE KEYS */;

INSERT INTO `hardiness_types` (`id`, `hardiness_type`)
VALUES
	(1,'Fully hardy'),
	(2,'Half hardy'),
	(3,'Tender');

/*!40000 ALTER TABLE `hardiness_types` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
