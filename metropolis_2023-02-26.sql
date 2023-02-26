# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.27-MariaDB)
# Database: metropolis
# Generation Time: 2023-02-26 05:17:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table otbook
# ------------------------------------------------------------

DROP TABLE IF EXISTS `otbook`;

CREATE TABLE `otbook` (
  `otid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `otdate` date NOT NULL,
  `otstart` time NOT NULL,
  `otend` time DEFAULT NULL,
  `idcard` varchar(13) NOT NULL DEFAULT '',
  `prename` varchar(10) NOT NULL DEFAULT '',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `lname` varchar(50) NOT NULL DEFAULT '',
  `selfposition` varchar(50) NOT NULL DEFAULT '',
  `otcode` varchar(5) NOT NULL DEFAULT '',
  `otcontact` varchar(10) NOT NULL DEFAULT '',
  `telephone` varchar(5) NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`otid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
