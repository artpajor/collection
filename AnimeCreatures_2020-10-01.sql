# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: AnimeCreatures
# Generation Time: 2020-10-01 09:00:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table creatures2
# ------------------------------------------------------------

DROP TABLE IF EXISTS `creatures2`;

CREATE TABLE `creatures2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `movie` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `special_ability` varchar(255) DEFAULT NULL,
  `creepiness` int(11) DEFAULT NULL,
  `img_dir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `creatures2` WRITE;
/*!40000 ALTER TABLE `creatures2` DISABLE KEYS */;

INSERT INTO `creatures2` (`id`, `name`, `movie`, `year`, `special_ability`, `creepiness`, `img_dir`)
VALUES
	(1,'totoro','\"My Neighbor Totoro\"',1988,'achieving fame despite doing absolutely nothing',0,'totoro.jpg'),
	(2,'noface','\"Spirited Away\"',2001,'can eat everything, and invisibility',7,'noface.jpg'),
	(3,'kodama','\"Princess Mononoke\"',1997,'invisibility, and they provide psychological comfort',2,'kodama.jpg'),
	(4,'spirit','\"Princess Mononoke\"',1997,'can heal or destroy the forest',3,'spirit.jpg'),
	(5,'ohmu','\"Nausicaa of the Valley of the Wind\"',1984,'immunity to toxic pollution',6,'ohmu.jpg'),
	(6,'calcifer','\"Howl\'s Moving Castle\"',2004,'can move buildings',1,'calcifer.jpg');

/*!40000 ALTER TABLE `creatures2` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
