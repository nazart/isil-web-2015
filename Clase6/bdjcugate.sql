/*
SQLyog Community v12.04 (64 bit)
MySQL - 5.6.21 : Database - jcugarte
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jcugarte` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jcugarte`;

/*Table structure for table `accesorio` */

DROP TABLE IF EXISTS `accesorio`;

CREATE TABLE `accesorio` (
  `accesorio_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `accesorio_nombre` varchar(50) DEFAULT NULL,
  `accesorio_flag_activo` tinyint(4) DEFAULT '1',
  `accesorio_fecha_registro` datetime DEFAULT NULL,
  `accesorio_fecha_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`accesorio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `accesorio` */

/*Table structure for table `color` */

DROP TABLE IF EXISTS `color`;

CREATE TABLE `color` (
  `color_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `color_nombre` varchar(20) NOT NULL,
  `color_flag_activo` tinyint(4) NOT NULL DEFAULT '1',
  `color_fecha_registro` datetime NOT NULL,
  `color_fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `color` */

/*Table structure for table `combustible` */

DROP TABLE IF EXISTS `combustible`;

CREATE TABLE `combustible` (
  `combustible_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `combustible_nombre` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`combustible_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `combustible` */

/*Table structure for table `marca` */

DROP TABLE IF EXISTS `marca`;

CREATE TABLE `marca` (
  `marca_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca_nombre` varchar(50) DEFAULT NULL,
  `marca_imagen` varchar(150) DEFAULT NULL,
  `marca_flag_activo` tinyint(4) DEFAULT '1',
  `marca_fecha_registro` datetime DEFAULT NULL,
  `marca_fecha_ultima_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `marca` */

insert  into `marca`(`marca_id`,`marca_nombre`,`marca_imagen`,`marca_flag_activo`,`marca_fecha_registro`,`marca_fecha_ultima_actualizacion`) values (1,'Toyota','marca-143939070792.jpg',1,NULL,NULL),(2,'Nissan','marca-143939070792.jpg',1,'2015-08-12 01:41:14','2015-08-12 09:45:53'),(3,'Mercedez','marca-143936169523.jpg',1,'2015-08-12 01:41:35','2015-08-12 01:41:35'),(4,'Ford','marca-143936169583.jpg',1,'2015-08-12 01:41:35','2015-08-12 01:41:35'),(5,'Mazda','marca-143938518165.jpg',1,'2015-08-12 08:13:01','2015-08-12 08:13:01'),(6,'Mitsubishi','marca-143938519419.jpg',1,'2015-08-12 08:13:14','2015-08-12 08:13:14'),(7,'Kia','marca-143938522871.jpg',1,'2015-08-12 08:13:48','2015-08-12 08:13:48'),(34,'nombre','marca_imagen',0,NULL,NULL),(35,'Nombre1','marca_imagen',0,NULL,NULL),(36,'Nombre2','marca_imagen',0,NULL,NULL),(37,'Nombre3','marca_imagen',0,NULL,NULL),(38,'nombre','marca_imagen',0,NULL,NULL),(39,'Nombre1','marca_imagen',0,NULL,NULL),(40,'Nombre2','marca_imagen',0,NULL,NULL),(41,'Nombre3','marca_imagen',0,NULL,NULL),(42,'nombre','marca_imagen',0,NULL,NULL),(43,'Nombre1','marca_imagen',0,NULL,NULL),(44,'Nombre2','marca_imagen',0,NULL,NULL),(45,'Nombre3','marca_imagen',0,NULL,NULL),(46,'nombre','marca_imagen',0,NULL,NULL),(47,'Nombre1','marca_imagen',0,NULL,NULL),(48,'Nombre2','marca_imagen',0,NULL,NULL),(49,'Nombre3','marca_imagen',0,NULL,NULL),(50,'nombre','marca_imagen',0,NULL,NULL),(51,'Nombre1','marca_imagen',0,NULL,NULL),(52,'Nombre2','marca_imagen',0,NULL,NULL),(53,'Nombre3','marca_imagen',0,NULL,NULL),(54,'nombre','marca_imagen',0,NULL,NULL),(55,'Nombre1','marca_imagen',0,NULL,NULL),(56,'Nombre2','marca_imagen',0,NULL,NULL),(57,'Nombre3','marca_imagen',0,NULL,NULL);

/*Table structure for table `modelo` */

DROP TABLE IF EXISTS `modelo`;

CREATE TABLE `modelo` (
  `modelo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modelo_nombre` varchar(50) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `marca_flag_activo` tinyint(4) NOT NULL DEFAULT '1',
  `marca_fecha_registro` datetime NOT NULL,
  `marca_fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`modelo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `modelo` */

/*Table structure for table `pregunta` */

DROP TABLE IF EXISTS `pregunta`;

CREATE TABLE `pregunta` (
  `pregunta_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta_descripcion` text,
  `vendedor_id` int(11) DEFAULT NULL,
  `vehiculo_id` int(11) DEFAULT NULL,
  `pregunta_nombres` varchar(50) DEFAULT NULL,
  `pregunta_apellidos` varchar(50) DEFAULT NULL,
  `pregunta_email` varchar(50) DEFAULT NULL,
  `pregunta_telefono` varchar(15) DEFAULT NULL,
  `pregunta_fecha_registro` datetime DEFAULT NULL,
  `pregunta_estado` tinyint(4) DEFAULT NULL,
  `pregunta_respuesta` text,
  `pregunta_fecha_respuesta` datetime DEFAULT NULL,
  PRIMARY KEY (`pregunta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pregunta` */

/*Table structure for table `suscritos` */

DROP TABLE IF EXISTS `suscritos`;

CREATE TABLE `suscritos` (
  `suscrito_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `suscrito_email` varchar(50) NOT NULL,
  `suscrito_fecha_registro` datetime NOT NULL,
  PRIMARY KEY (`suscrito_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `suscritos` */

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) DEFAULT NULL,
  `etiqueta` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `test` */

insert  into `test`(`id`,`etiqueta`) values (1,'a');

/*Table structure for table `transmision` */

DROP TABLE IF EXISTS `transmision`;

CREATE TABLE `transmision` (
  `transmision_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transmision_nombre` varchar(15) NOT NULL,
  `transmision_flag_activo` tinyint(4) NOT NULL DEFAULT '1',
  `transmision_fecha_registro` datetime DEFAULT NULL,
  `transmision_fecha_actualizaicon` datetime DEFAULT NULL,
  PRIMARY KEY (`transmision_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transmision` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_nombres` varchar(50) DEFAULT NULL,
  `usuario_apellidos` varchar(50) DEFAULT NULL,
  `usuario_email` varchar(50) DEFAULT NULL,
  `usuario_telefono` varchar(15) DEFAULT NULL,
  `usuario_login` varchar(20) DEFAULT NULL,
  `usuario_password` varchar(50) DEFAULT NULL,
  `usuario_hash` varchar(50) DEFAULT NULL,
  `usuario_rol` int(11) DEFAULT NULL,
  `usuario_cargo` varchar(35) DEFAULT NULL,
  `usuario_foto` varchar(50) DEFAULT NULL,
  `usuario_estado` int(11) DEFAULT NULL,
  `usuario_flag_mostrar_web` tinyint(4) DEFAULT NULL,
  `usuario_fecha_registro` datetime DEFAULT NULL,
  `usuario_fecha_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

/*Table structure for table `vehiculo` */

DROP TABLE IF EXISTS `vehiculo`;

CREATE TABLE `vehiculo` (
  `vehiculo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca_id` int(11) NOT NULL,
  `modelo_id` int(11) NOT NULL,
  `transmision_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `combustible_id` int(11) NOT NULL,
  `vehiculo_annio` int(11) NOT NULL,
  `vehiculo_kilometraje` int(11) DEFAULT NULL,
  `vehiculo_video` varchar(50) NOT NULL,
  `vehiculo_precio` decimal(8,2) NOT NULL,
  `vehiculo_flag_web` tinyint(4) NOT NULL DEFAULT '0',
  `vehiculo_fecha_registro` datetime NOT NULL,
  `vehiculo_fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`vehiculo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo` */

insert  into `vehiculo`(`vehiculo_id`,`marca_id`,`modelo_id`,`transmision_id`,`color_id`,`combustible_id`,`vehiculo_annio`,`vehiculo_kilometraje`,`vehiculo_video`,`vehiculo_precio`,`vehiculo_flag_web`,`vehiculo_fecha_registro`,`vehiculo_fecha_actualizacion`) values (1,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,2,2,0,0,0,0,NULL,'','23900.00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `vehiculo_accesorio` */

DROP TABLE IF EXISTS `vehiculo_accesorio`;

CREATE TABLE `vehiculo_accesorio` (
  `vehiculo_id` int(11) NOT NULL,
  `accesorio_id` int(11) NOT NULL,
  `vehiculo_accesorio_flag` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vehiculo_id`,`accesorio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo_accesorio` */

insert  into `vehiculo_accesorio`(`vehiculo_id`,`accesorio_id`,`vehiculo_accesorio_flag`) values (1,1,1),(1,2,1),(1,3,1),(1,4,1),(1,5,1),(9,1,1),(9,2,1),(9,3,1),(9,4,1),(9,5,1),(10,1,1),(10,2,1),(10,3,1),(10,4,1),(10,5,1),(17,1,1),(17,2,1),(17,3,1),(17,4,1),(17,5,1),(18,1,1),(18,2,1),(18,3,1),(18,4,1),(18,5,1),(19,1,1),(19,2,1),(19,3,1),(19,4,1),(19,5,1),(20,1,1),(20,2,1),(20,3,1),(20,4,1),(20,5,1),(25,1,1),(25,2,1),(25,3,1),(25,4,1),(25,5,1),(26,1,1),(26,2,1),(26,3,1),(26,4,1),(26,5,1);

/*Table structure for table `vehiculo_imagen` */

DROP TABLE IF EXISTS `vehiculo_imagen`;

CREATE TABLE `vehiculo_imagen` (
  `vehiculo_imagen_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehiculo_id` int(11) NOT NULL,
  `vehiculo_imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`vehiculo_imagen_id`),
  KEY `vehiculo_imagen_id` (`vehiculo_imagen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo_imagen` */

/*Table structure for table `vehiculo_vendedor` */

DROP TABLE IF EXISTS `vehiculo_vendedor`;

CREATE TABLE `vehiculo_vendedor` (
  `vehiculo_vendedor_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehiculo_id` int(10) unsigned NOT NULL,
  `vendedor_id` int(10) unsigned NOT NULL,
  `vehiculo_vendedor_activo` int(1) NOT NULL,
  `vehiculo_vendedor_fecha_registro` datetime NOT NULL,
  `vehiculo_vendedor_fecha_baja` datetime DEFAULT NULL,
  PRIMARY KEY (`vehiculo_vendedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehiculo_vendedor` */

/*Table structure for table `vender` */

DROP TABLE IF EXISTS `vender`;

CREATE TABLE `vender` (
  `vender_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marca_id` int(11) NOT NULL,
  `modelo_id` int(11) NOT NULL,
  `transmision_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `combustible_id` int(11) NOT NULL,
  `vehiculo_annio` int(11) NOT NULL,
  `vehiculo_kilometraje` int(11) NOT NULL,
  `vehiculo_precio` decimal(8,2) NOT NULL,
  `vender_nombres` varchar(11) DEFAULT NULL,
  `vender_apellidos` varchar(50) DEFAULT NULL,
  `vender_telefono` varchar(15) DEFAULT NULL,
  `vender_email` varchar(50) DEFAULT NULL,
  `vender_fecha_registro` datetime NOT NULL,
  `vender_fecha_actualizacion` datetime NOT NULL,
  PRIMARY KEY (`vender_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vender` */

/*Table structure for table `vender_imagen` */

DROP TABLE IF EXISTS `vender_imagen`;

CREATE TABLE `vender_imagen` (
  `vender_imagen_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vender_id` int(11) NOT NULL,
  `vender_imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`vender_imagen_id`),
  KEY `vender_imagen_id` (`vender_imagen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vender_imagen` */

/* Procedure structure for procedure `p` */

/*!50003 DROP PROCEDURE IF EXISTS  `p` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `p`()
    READS SQL DATA
BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
