/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.5.27 : Database - foodplazashubham
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`foodplazashubham` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `foodplazashubham`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `adminname` varchar(25) DEFAULT NULL,
  `adminusername` varchar(25) NOT NULL DEFAULT '',
  `adminpassword` varchar(10) DEFAULT NULL,
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`adminusername`,`customerid`),
  KEY `customerid` (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`adminname`,`adminusername`,`adminpassword`,`customerid`) values ('anup','anup21017','sdfg',1),('kunal','kunal21027','as',2);

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) DEFAULT NULL,
  `foodid` int(11) DEFAULT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

insert  into `cart`(`cartid`,`customerid`,`foodid`) values (4,456,NULL),(5,457,NULL),(6,458,NULL),(7,456,2);

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `customername` varchar(25) DEFAULT NULL,
  `customeraddress` char(20) DEFAULT NULL,
  `contact` mediumtext,
  `customerusername` varchar(20) NOT NULL DEFAULT '',
  `customerpassword` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`customerid`,`customerusername`)
) ENGINE=InnoDB AUTO_INCREMENT=466 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`customerid`,`customername`,`customeraddress`,`contact`,`customerusername`,`customerpassword`) values (456,'shubhamtest              ','b-201,sec-19,airoli','8898600239','shub09','zxc'),(457,'sunny','thane','9323998570','sun09','werty'),(458,'sonu','nerul','9773190293','son09','erty'),(459,'sanjay','mulund','9323998594','san09','uiui'),(460,'nisha                  ','thane','9619152737','nish09','yuyu'),(462,'nikita                  ','    mulund(E)','8879238246','nik09','qwerty'),(463,'      hghgf            ','       gfchgxxhg','9790608908','marri','12345'),(464,'      hghgf            ','       gfchgxxhg','9790608908','marri','12345'),(465,'       sdasdasda         ','     asdasdasdasd','4121211111','werw','werwer');

/*Table structure for table `food` */

DROP TABLE IF EXISTS `food`;

CREATE TABLE `food` (
  `foodid` int(11) NOT NULL AUTO_INCREMENT,
  `foodname` varchar(20) DEFAULT NULL,
  `foodprice` double DEFAULT NULL,
  `foodtype` char(8) DEFAULT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=InnoDB AUTO_INCREMENT=1460 DEFAULT CHARSET=latin1;

/*Data for the table `food` */

insert  into `food`(`foodid`,`foodname`,`foodprice`,`foodtype`) values (2,'spicy chicken wrap',170,'non veg'),(3,'Aloo Tikki',40,'veg'),(4,'chicken nuggets     ',200,'non veg'),(5,'spicy cheese pizza',470,'non veg'),(6,'pops                ',77,'veg'),(7,'fries',123,'veg'),(1456,'wings               ',99,'non veg'),(1457,' grilled sandwich   ',111,'veg'),(1458,'Fish fillet         ',112,'non veg'),(1459,'     test           ',10,'veg');

/*Table structure for table `foodorder` */

DROP TABLE IF EXISTS `foodorder`;

CREATE TABLE `foodorder` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) DEFAULT NULL,
  `totalbill` double DEFAULT NULL,
  `orderstatus` varchar(15) DEFAULT NULL,
  `orderdate` date DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `foodorder` */

insert  into `foodorder`(`orderid`,`customerid`,`totalbill`,`orderstatus`,`orderdate`) values (1,456,1110,'delivered','2016-06-21'),(2,457,850,'delivered','2016-06-21'),(3,458,540,'Delivered','2016-06-21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
