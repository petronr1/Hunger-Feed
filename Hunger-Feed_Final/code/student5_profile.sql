CREATE DATABASE  IF NOT EXISTS `student5` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `student5`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: student5
-- ------------------------------------------------------
-- Server version	5.1.73

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lastName` varchar(252) DEFAULT NULL,
  `firstName` varchar(252) DEFAULT NULL,
  `email` varchar(252) DEFAULT NULL,
  `password` varchar(252) DEFAULT NULL,
  `favorite_dishes` longtext,
  `past_dishes` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (1,'furlanetto','pedro','furlanp1@tcnj.edu','e10adc3949ba59abbe56e057f20f883e',NULL,NULL),(2,'petrongolo','rocco','petronr1@tcnj.edu','e10adc3949ba59abbe56e057f20f883e','44','96'),(3,'borm','chris','borm2@tcnj.edu','e10adc3949ba59abbe56e057f20f883e','122','91'),(4,'milburn','jared','milburj1@tcnj.edu','e10adc3949ba59abbe56e057f20f883e',NULL,NULL),(5,'smith','warren','smith332@tcnj.edu','e10adc3949ba59abbe56e057f20f883e','99',NULL),(11,'Petrongolo','Rocco','rpetrong1@gmail.com','b2c8416cd821ed140bc2331d04074742',NULL,NULL),(12,'TEST','GEORGE','BURNS@ASDF.COM','e10adc3949ba59abbe56e057f20f883e',NULL,NULL),(13,'Salgian','Andrea','salgian@tcnj.edu','e10adc3949ba59abbe56e057f20f883e','73',NULL),(14,'1234','1234','pedrofurlanetto@hotmail.com','e10adc3949ba59abbe56e057f20f883e',NULL,NULL),(15,'Palace','Eric','palacee1@tcnj.edu','5f4dcc3b5aa765d61d8327deb882cf99','6',NULL),(16,'Fiuza','Jose','douabunda@tcnj.edu','55587a910882016321201e6ebbc9f595','115',NULL);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-04 17:15:48
