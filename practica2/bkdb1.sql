/*
SQLyog Community v12.04 (64 bit)
MySQL - 5.6.21 : Database - parcial1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`parcial1` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `parcial1`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `alumno_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno_nombre` varchar(30) DEFAULT NULL,
  `alumno_apellidos` varchar(30) DEFAULT NULL,
  `alumno_fecha` date DEFAULT NULL,
  `alumno_correo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`alumno_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

/*Data for the table `alumno` */

/*Table structure for table `alumno_asistencia` */

DROP TABLE IF EXISTS `alumno_asistencia`;

CREATE TABLE `alumno_asistencia` (
  `alumno_asistencia_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(11) DEFAULT NULL,
  `asistenacia_id` int(11) DEFAULT NULL,
  `alumno_asistencia_estado` tinyint(4) DEFAULT NULL,
  `alumno_asistencia_fecha_hora_registro` datetime DEFAULT NULL,
  `alumno_asistencia_flagofline` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`alumno_asistencia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `alumno_asistencia` */

/*Table structure for table `asistencia` */

DROP TABLE IF EXISTS `asistencia`;

CREATE TABLE `asistencia` (
  `asistencia_id` int(11) NOT NULL AUTO_INCREMENT,
  `asistencia_fecha` date DEFAULT NULL,
  `asistencia_nombre` varchar(20) DEFAULT NULL,
  `asistencia_hora_inicio` time DEFAULT NULL,
  `asistencia_hora_final` time DEFAULT NULL,
  PRIMARY KEY (`asistencia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `asistencia` */

insert  into `asistencia`(`asistencia_id`,`asistencia_fecha`,`asistencia_nombre`,`asistencia_hora_inicio`,`asistencia_hora_final`) values (1,'2015-10-12','Clase7','19:00:00','22:00:00'),(2,'2015-10-13','CLase8','19:00:00','22:00:00');

/*Table structure for table `nota` */

DROP TABLE IF EXISTS `nota`;

CREATE TABLE `nota` (
  `nota_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(11) DEFAULT NULL,
  `nota_practica_1` float DEFAULT NULL,
  `nota_practica_2` float DEFAULT NULL,
  `nota_practica_3` float DEFAULT NULL,
  `nota_practica_4` float DEFAULT NULL,
  `nota_parcial_1` float DEFAULT NULL,
  `nota_examen_final` float DEFAULT NULL,
  `nota_trabajo_final` float DEFAULT NULL,
  PRIMARY KEY (`nota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `nota` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
