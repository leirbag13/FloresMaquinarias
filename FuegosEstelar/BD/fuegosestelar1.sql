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
  `categoria` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`categoria`) values (32,'GIRATORIOS'),(31,'CAÑAS'),(30,'TORTAS'),(33,'AUDIBLES'),(34,'BASES DE MISILES'),(35,'CANDELAS'),(36,'VOLCANES'),(37,'MORTEROS'),(38,'DISPLAY SHELL'),(39,'VENGALAS'),(40,'VARIOS'),(41,'NOVEDADES');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`subtitulo`,`fecha`,`autor`,`fuente`,`cuerpo`,`imagen1`,`imagen2`,`imagen3`) values (9,'aasd','asdasd','29/09/2011','asdasd','asdas','asdas a as asd asd asda sda as dasd asd asd ','07.jpg','F230607MarioBros.jpg','collage1.jpg'),(10,'das','asdasd','29/09/2011','','','asdasdad','billetes_de_100.jpg','Acceso directo.jpg','9667845.JPG');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `novedades` */

insert  into `novedades`(`id`,`titulo`,`subtitulo`,`fecha`,`autor`,`fuente`,`cuerpo`,`imagen1`,`imagen2`,`imagen3`) values (6,'sadas','asdas','29/09/2011','asdasd','asdasd','asdas asd asd d asd adas dasd asd ','mtv.jpg','dd.jpg','dragon-2.jpg'),(7,'asdsa','asdsad','29/09/2011','asdasd','asdasd','asd ssa sa asd asd asd ad ad as ','TellusOrion.jpg','dragonballz-131.jpg','ss4vegeta_anime.jpg');

/*Table structure for table `precios` */

DROP TABLE IF EXISTS `precios`;

CREATE TABLE `precios` (
  `articulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `precio_unidad` varchar(255) DEFAULT NULL,
  `cont_display` varchar(255) DEFAULT NULL,
  `cont_del_bulto` varchar(255) DEFAULT NULL,
  `precio_del_bulto` varchar(255) DEFAULT NULL,
  `sugerido_al_publico` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precio_display` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `precios` */

insert  into `precios`(`articulo`,`descripcion`,`precio_unidad`,`cont_display`,`cont_del_bulto`,`precio_del_bulto`,`sugerido_al_publico`,`id`,`precio_display`) values ('art','desc','$pre un','con disp','con del bulto','$pre del bulto','$sugerido',11,'$pre displ');

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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `productos` */

insert  into `productos`(`id`,`nombre`,`descripcion`,`categoria`,`item`,`marca`,`precio`,`activo`,`imagen`,`pdf`,`imagen2`,`imagen3`) values (42,'asd','','AUDIBLES','--','',0,'no','pagina00.jpg','','',''),(45,'asd','','CANDELAS','--','',0,'no','pagina03.jpg','','',''),(44,'sadsad','','BASES DE MISILES','--','',0,'no','pagina02.jpg','','',''),(46,'asd','','CAÑAS','--','',0,'no','pagina08.jpg','','',''),(47,'asd','','DISPLAY SHELL','--','',0,'no','pagina17.jpg','','',''),(48,'asd','','GIRATORIOS','--','',0,'no','pagina16.jpg','','',''),(49,'asd','','MORTEROS','--','',0,'no','pagina15.jpg','','',''),(50,'asd','','NOVEDADES','--','',0,'no','pagina19.jpg','','',''),(51,'asdasd','','TORTAS','--','',0,'no','pagina24.jpg','','',''),(52,'asd','','VARIOS','--','',0,'no','pagina27.jpg','','',''),(53,'asdas','','VENGALAS','--','',0,'no','pagina35.jpg','','',''),(54,'asda','','VOLCANES','--','',0,'no','pagina30.jpg','','','');

/*Table structure for table `submenu` */

DROP TABLE IF EXISTS `submenu`;

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(250) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `submenu` */

insert  into `submenu`(`id`,`item`,`categoria`) values (31,'xvxc','asdas'),(30,'qwewq','coca'),(29,'asd','coca');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

insert  into `videos`(`id`,`titulo`,`subtitulo`,`descripcion`,`video`) values (16,'','','','<object style=\"height: 390px; width: 640px\"><param name=\"movie\" value=\"http://www.youtube.com/v/VzuPeuanyqk?version=3&feature=player_detailpage\"><param name=\"allowFullScreen\" value=\"true\"><param name=\"allowScriptAccess\" value=\"always\"><embed src=\"http://www.youtube.com/v/VzuPeuanyqk?version=3&feature=player_detailpage\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" width=\"640\" height=\"360\"></object>'),(15,'','','','<object style=\"height: 390px; width: 640px\"><param name=\"movie\" value=\"http://www.youtube.com/v/VzuPeuanyqk?version=3&feature=player_detailpage\"><param name=\"allowFullScreen\" value=\"true\"><param name=\"allowScriptAccess\" value=\"always\"><embed src=\"http://www.youtube.com/v/VzuPeuanyqk?version=3&feature=player_detailpage\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" width=\"640\" height=\"360\"></object>'),(14,'asdas','asdsad','Inbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtubeInbrese aqui el codigo del video que saco de youtube','<object style=\"height: 390px; width: 640px\"><param name=\"movie\" value=\"http://www.youtube.com/v/0pZKiSsTKMA?version=3\"><param name=\"allowFullScreen\" value=\"true\"><param name=\"allowScriptAccess\" value=\"always\"><embed src=\"http://www.youtube.com/v/0pZKiSsTKMA?version=3\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" width=\"640\" height=\"360\"></object>'),(17,'','','','<object style=\"height: 390px; width: 640px\"><param name=\"movie\" value=\"http://www.youtube.com/v/VzuPeuanyqk?version=3&feature=player_detailpage\"><param name=\"allowFullScreen\" value=\"true\"><param name=\"allowScriptAccess\" value=\"always\"><embed src=\"http://www.youtube.com/v/VzuPeuanyqk?version=3&feature=player_detailpage\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowScriptAccess=\"always\" width=\"640\" height=\"360\"></object>');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
