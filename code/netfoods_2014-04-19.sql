# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.15)
# Database: netfoods
# Generation Time: 2014-04-20 03:05:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table dish
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dish`;

CREATE TABLE `dish` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dish_name` varchar(252) DEFAULT NULL,
  `rest_name` varchar(252) DEFAULT NULL,
  `rest_location` varchar(252) DEFAULT NULL,
  `type1` varchar(252) DEFAULT NULL,
  `type2` varchar(252) DEFAULT NULL,
  `description` varchar(252) DEFAULT NULL,
  `img_path` varchar(252) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dish` WRITE;
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;

INSERT INTO `dish` (`id`, `dish_name`, `rest_name`, `rest_location`, `type1`, `type2`, `description`, `img_path`, `rating`)
VALUES
	(1,'Antipasti','Trattoria Rosa Bianco',NULL,'Italian',NULL,NULL,'food/italian/trattoriarosabianca/antipasti/',NULL),
	(2,'Chirashi Bowl','Yummy Sushi',NULL,'Japanese',NULL,NULL,'food/japanese/yummysushi/chirashibowl/',NULL),
	(3,'Lady in Red','Yummy Sushi',NULL,'Japanese',NULL,NULL,'food/japanese/yummysushi/ladyinred/',NULL),
	(5,'Risotto Balls','Trattoria Rosa Bianco',NULL,'Italian',NULL,NULL,'food/italian/trattoriarosabianca/risottoballs/',NULL),
	(6,'Sesame Chicken','Yummy Sushi',NULL,'Japanese',NULL,NULL,'food/japanese/yummysushi/sesamechicken/',NULL),
	(9,'Veal Scallopini','Trattoria Rosa Bianco',NULL,'Italian',NULL,NULL,'food/italian/trattoriarosabianca/vealscallopini/',NULL),
	(10,'Bacon Cheeseburger','Cheeburger Cheeburger',NULL,'American',NULL,NULL,'food/american/CheeburgerCheeburger/baconcheeseburger/',NULL),
	(11,'Cheeseburger Wrap','Cheeburger Cheeburger',NULL,'American',NULL,NULL,'food/american/CheeburgerCheeburger/cheeseburgerwrap/',NULL),
	(12,'Semi Burger','Cheeburger Cheeburger',NULL,'American',NULL,NULL,'food/american/CheeburgerCheeburger/semiburger/',NULL),
	(13,'Blueberry Pancakes','Cafe 72',NULL,'Brunch',NULL,NULL,'food/brunch/cafe72/blueberrypancakes/',NULL),
	(14,'Crabcake Benedict','Cafe 72',NULL,'Brunch',NULL,NULL,'food/brunch/cafe72/crabcakebenedict/',NULL),
	(15,'Western Omelette','Cafe 72',NULL,'Brunch',NULL,NULL,'food/brunch/cafe72/westernomelette/',NULL);

/*!40000 ALTER TABLE `dish` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profile
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lastName` varchar(252) DEFAULT NULL,
  `firstName` varchar(252) DEFAULT NULL,
  `userName` varchar(252) DEFAULT NULL,
  `password` varchar(252) DEFAULT NULL,
  `email` varchar(252) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
