/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.34-MariaDB : Database - jogjarafting
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jogjarafting` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jogjarafting`;

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id_galeri` int(12) NOT NULL AUTO_INCREMENT,
  `nama_galeri` varchar(50) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `galeri` */

insert  into `galeri`(`id_galeri`,`nama_galeri`,`images`) values 
(1,'Kegiatan BPR Artha Mertoyudan 2','d04a6-tulips.jpg'),
(2,'Kegiatan Mahasiswa UGM','7ab58-hydrangeas.jpg'),
(3,'Kegiatan SMK N 1 Depok','102e9-penguins.jpg'),
(4,'Kegiatan PKK Desa Kaliurang','51094-hydrangeas.jpg');

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id_kontak` int(12) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `email_pengirim` varchar(50) DEFAULT NULL,
  `judul_pesan` varchar(50) DEFAULT NULL,
  `isi_pesan` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kontak` */

insert  into `kontak`(`id_kontak`,`nama_pengirim`,`email_pengirim`,`judul_pesan`,`isi_pesan`) values 
(4,'dev','devid@gmail.com','asaw','cafe ewrwccvrer'),
(5,'dev','devid@gmail.com','gddb','asevbdbd'),
(6,'hanan','hanan@gmail.com','batas waktu booking','test');

/*Table structure for table `paket` */

DROP TABLE IF EXISTS `paket`;

CREATE TABLE `paket` (
  `id_paket` int(20) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(50) DEFAULT NULL,
  `harga_paket` varchar(50) DEFAULT NULL,
  `durasi` varchar(50) DEFAULT NULL,
  `tingkat_kesulitan` varchar(50) DEFAULT NULL,
  `jumlah_jeram` varchar(50) DEFAULT NULL,
  `jarak_tempuh` varchar(50) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `paket` */

insert  into `paket`(`id_paket`,`nama_paket`,`harga_paket`,`durasi`,`tingkat_kesulitan`,`jumlah_jeram`,`jarak_tempuh`,`images`) values 
(12,'Paket Sumbing','Rp.500.000','5jam','sedang','50','10km','7385f-desert.jpg'),
(14,'Paket Merbabu','Rp.700.000','7jam','expert','90','15km','1f16d-koala.jpg'),
(15,'Paket Merapi','Rp.200.000','2jam','mudah','20','5km','b4162-penguins.jpg');

/*Table structure for table `tbl_session` */

DROP TABLE IF EXISTS `tbl_session`;

CREATE TABLE `tbl_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_session` */

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id_user` int(150) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `images` varchar(150) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id_user`,`nama_user`,`username`,`password`,`images`,`created_at`,`updated_at`) values 
(1,'Administrator','admin','21232f297a57a5a743894a0e4a801fc3','273b0-koala.jpg','2017-02-21 04:14:16','2017-03-06 13:42:37');

/*Table structure for table `tentang` */

DROP TABLE IF EXISTS `tentang`;

CREATE TABLE `tentang` (
  `id_tentang` int(5) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) DEFAULT NULL,
  `judul_tentang` varchar(100) DEFAULT NULL,
  `isi` longtext,
  PRIMARY KEY (`id_tentang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tentang` */

insert  into `tentang`(`id_tentang`,`foto`,`judul_tentang`,`isi`) values 
(1,'ICSB-Logo-Grey-2_Thursday,_22_February_2018_23_48_151.png','Jogja Rafting','<p style=\"text-align: justify;\" xss=\"removed\">\r\n	We Create, Design and Make it Real Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauriseuismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nullarisus, veltincidunt turpis. Aliquam a nulla mi, placerat blandit eros. In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, semut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet dui feugiat vitae dapibusodio eleifend. We Create, Design and Make it Real Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiatmauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nullarisus, vel tincidunt turpis. Aliquam a nulla mi, placerat blandit eros. In neque lectus, lobortis a varius ahendrerite get dolor Fuscescelerisque,sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet duifeugiat vitae dapibus odio eleifend. We Create, Design and Make it Real Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo utsapien euismod id feugiat mauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Phasellus id nulla risus, vel tincidunt turpis. Aliquam a nulla mi, placerat blandit eros. In neque lectus, lobortis a varius a, hendreriteget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretiumipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>\r\n');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
