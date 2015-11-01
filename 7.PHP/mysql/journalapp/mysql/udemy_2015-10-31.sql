# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: udemy
# Generation Time: 2015-11-01 03:46:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Diary` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;

INSERT INTO `Users` (`Id`, `Name`, `Email`, `Password`, `Diary`)
VALUES
	(1,'Joey','jsomma@millentek.com','JsMtudemy',NULL),
	(2,'Josh','jsomma@millentek.com','JsMtudemy',NULL),
	(3,'Donna','jsomma@millentek.com','JsMtudemy',NULL),
	(4,'Bill','joesomma@gmail.com','JsMtudemy',NULL),
	(27,NULL,'joe@joe.com','582d0e884e0bdd0407e79120a7e6e1a5','This is a journal entry\n\nThis is my second entry\n\nThis is my third entry\n'),
	(30,NULL,'1@2.com','9516e7f823bc3db22320624cc32f56ba',NULL),
	(31,NULL,'2@3.com','888473d3057e1fb2e174dd0b60c529ed','This is a new user account'),
	(32,NULL,'3@4.com','c463b08ce14c3475e4c2f39a29f3288a','This is my first diary entry for this new account 3@4.com\n\nAdding some additional info'),
	(33,NULL,'4@5.com','96e6d687fa3f2044132bf87ac03710c2','This is a new diary entry\n\nThis is another data entry\n'),
	(34,NULL,'5@6.com','b3976dbcfe994cb4cae0cd3f5709bf07','Hello from Gilford NH!\n\nIt is a nice fall day about 40 deg outdoors\n\nI am done with todays journal entry'),
	(35,NULL,'6@7.com','50280baac3730ea945bd5175548f1ed2','Wow this actually looks pretty decent in mobile view\n\n'),
	(36,NULL,'7@8.com','e37f55ae60e8d0995038184f6b7220b0','Here we are in my journal');

/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
