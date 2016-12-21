/*
SQLyog Enterprise Trial - MySQL GUI v8.17 
MySQL - 5.1.36-community-log : Database - fuegosestelar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fuegosestelar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fuegosestelar`;

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`categoria`) values (17,'culo botella'),(22,'bolas'),(23,'culo botella'),(24,'culo con chota'),(26,'asd');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `fecha` varchar(250) DEFAULT NULL,
  `autor` varchar(250) DEFAULT NULL,
  `fuente` varchar(250) DEFAULT NULL,
  `cuerpo` text,
  `imagen1` varchar(250) DEFAULT NULL,
  `imagen2` varchar(250) DEFAULT NULL,
  `imagen3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`subtitulo`,`fecha`,`autor`,`fuente`,`cuerpo`,`imagen1`,`imagen2`,`imagen3`) values (7,'not','dos','26/09/2011','de','nenas','asdasd asdasd mazamzame los huevos','DBZ_Gogeta_.jpg','foto-usuario-95347-41431845771.jpg','ss4vegeta_anime.jpg');

/*Table structure for table `novedades` */

DROP TABLE IF EXISTS `novedades`;

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `fecha` varchar(250) DEFAULT NULL,
  `autor` varchar(250) DEFAULT NULL,
  `fuente` varchar(250) DEFAULT NULL,
  `cuerpo` text,
  `imagen1` varchar(500) DEFAULT NULL,
  `imagen2` varchar(500) DEFAULT NULL,
  `imagen3` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `novedades` */

insert  into `novedades`(`id`,`titulo`,`subtitulo`,`fecha`,`autor`,`fuente`,`cuerpo`,`imagen1`,`imagen2`,`imagen3`) values (5,'adasd','asdasd','26/09/2011','asdasd','asdasd','asdasd','41493_100000294507269_3644_n.jpg','995465905_IMGBGPOCXXLMDON.jpg','flor mmmm.jpg');

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `categoria` varchar(250) DEFAULT NULL,
  `item` varchar(250) DEFAULT NULL,
  `marca` varchar(250) DEFAULT NULL,
  `precio` int(11) DEFAULT '0',
  `activo` varchar(2) DEFAULT 'si',
  `imagen` varchar(500) DEFAULT NULL,
  `pdf` varchar(500) DEFAULT NULL,
  `imagen2` varchar(500) DEFAULT NULL,
  `imagen3` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `productos` */

insert  into `productos`(`id`,`nombre`,`descripcion`,`categoria`,`item`,`marca`,`precio`,`activo`,`imagen`,`pdf`,`imagen2`,`imagen3`) values (38,'asad','bolas','asd','amacen las viejas ','asdasd',0,'si','36512_764422789.jpg','nuevohost datos de cuenta.pdf','8527_1238746098128_1513555075_30652349_6932818_n.jpg','16956_1312889271661_1513555075_30840890_699494_n.jpg');

/*Table structure for table `submenu` */

DROP TABLE IF EXISTS `submenu`;

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(250) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `submenu` */

insert  into `submenu`(`id`,`item`,`categoria`) values (28,'ad','bolas'),(27,'culote','bolas'),(24,'con bebas','culo botella');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`user`,`pass`) values (1,'admin','e029bbf9d5574ee6c7cc51b9cf3efde3');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

insert  into `videos`(`id`,`titulo`,`subtitulo`,`descripcion`,`video`) values (12,'asdsa','asdasd','Inbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\n\r\n','<object style=\"height: 390px; width: 640px\"><param name=\"movie\" value=\"http://www.youtube.com/v/wkA3kdUSMkg?version=3\"><param name=\"allowFullScreen\" value=\"true\"><param name=\"allowScriptAccess\" value=\"always\"><embed src=\"http://www.youtube.com/v/wkA3kdUSMkg?version=3\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" width=\"640\" height=\"360\"></object>');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
