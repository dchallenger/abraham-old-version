/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.1.41 : Database - victoria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `ww_time_form_balance_setup_policy` */

DROP TABLE IF EXISTS `ww_time_form_balance_setup_policy`;

CREATE TABLE `ww_time_form_balance_setup_policy` (
  `policy_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `balance_setup_id` int(1) unsigned NOT NULL DEFAULT '0',
  `form_id` int(1) NOT NULL DEFAULT '0',
  `form_code` varchar(16) DEFAULT NULL,
  `starting_credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `max_credit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_by` int(11) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`policy_id`),
  KEY `balance_setup_id` (`balance_setup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
