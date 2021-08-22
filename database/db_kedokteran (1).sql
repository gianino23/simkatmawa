/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.38-MariaDB : Database - db_kedokteran
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kedokteran` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kedokteran`;

/*Table structure for table `t_belanegara` */

DROP TABLE IF EXISTS `t_belanegara`;

CREATE TABLE `t_belanegara` (
  `id_belanegara` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_belanegara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_belanegara` */

/*Table structure for table `t_filemengajarsekolah` */

DROP TABLE IF EXISTS `t_filemengajarsekolah`;

CREATE TABLE `t_filemengajarsekolah` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `mengajarsekolah_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_file`),
  KEY `mengajarsekolah_id` (`mengajarsekolah_id`),
  CONSTRAINT `t_filemengajarsekolah_ibfk_1` FOREIGN KEY (`mengajarsekolah_id`) REFERENCES `t_mengajarsekolah` (`id_mengajar`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_filemengajarsekolah` */

/*Table structure for table `t_filepenilitian` */

DROP TABLE IF EXISTS `t_filepenilitian`;

CREATE TABLE `t_filepenilitian` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `penilitian_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_file`),
  KEY `penilitian_id` (`penilitian_id`),
  CONSTRAINT `t_filepenilitian_ibfk_1` FOREIGN KEY (`penilitian_id`) REFERENCES `t_penelitian` (`id_penelitian`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_filepenilitian` */

/*Table structure for table `t_filepertukaranpelajar` */

DROP TABLE IF EXISTS `t_filepertukaranpelajar`;

CREATE TABLE `t_filepertukaranpelajar` (
  `id_filepp` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `pertukaranpelajar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_filepp`),
  KEY `pertukaranpelajar_id` (`pertukaranpelajar_id`),
  CONSTRAINT `t_filepertukaranpelajar_ibfk_1` FOREIGN KEY (`pertukaranpelajar_id`) REFERENCES `t_pertukaranpelajar` (`id_perpel`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_filepertukaranpelajar` */

/*Table structure for table `t_filepraktikkerja` */

DROP TABLE IF EXISTS `t_filepraktikkerja`;

CREATE TABLE `t_filepraktikkerja` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `praktikkerja_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_file`),
  KEY `praktikkerja_id` (`praktikkerja_id`),
  CONSTRAINT `t_filepraktikkerja_ibfk_1` FOREIGN KEY (`praktikkerja_id`) REFERENCES `t_praktikkerja` (`id_praktikkerja`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_filepraktikkerja` */

/*Table structure for table `t_fileprojekdesa` */

DROP TABLE IF EXISTS `t_fileprojekdesa`;

CREATE TABLE `t_fileprojekdesa` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `projekdesa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_file`),
  KEY `projekdesa_id` (`projekdesa_id`),
  CONSTRAINT `t_fileprojekdesa_ibfk_1` FOREIGN KEY (`projekdesa_id`) REFERENCES `t_projekdesa` (`id_projekdesa`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_fileprojekdesa` */

/*Table structure for table `t_fileprojekkemanusian` */

DROP TABLE IF EXISTS `t_fileprojekkemanusian`;

CREATE TABLE `t_fileprojekkemanusian` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text,
  `projekkemanusian_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_file`),
  KEY `projekkemanusian_id` (`projekkemanusian_id`),
  CONSTRAINT `t_fileprojekkemanusian_ibfk_1` FOREIGN KEY (`projekkemanusian_id`) REFERENCES `t_projekkemanusian` (`id_projekkemanusian`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_fileprojekkemanusian` */

/*Table structure for table `t_ikatanalumni` */

DROP TABLE IF EXISTS `t_ikatanalumni`;

CREATE TABLE `t_ikatanalumni` (
  `id_alumni` int(11) NOT NULL AUTO_INCREMENT,
  `profil_ika` text,
  `program_kerja` text,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_ikatanalumni` */

/*Table structure for table `t_mengajarsekolah` */

DROP TABLE IF EXISTS `t_mengajarsekolah`;

CREATE TABLE `t_mengajarsekolah` (
  `id_mengajar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_pelaksana` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mengajar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_mengajarsekolah` */

/*Table structure for table `t_ormas` */

DROP TABLE IF EXISTS `t_ormas`;

CREATE TABLE `t_ormas` (
  `id_ormas` int(11) NOT NULL AUTO_INCREMENT,
  `profil` text,
  `struktur_organisasi` text,
  `visi_misi` text,
  `kalender_proker` text,
  `luaran_kinerja` text,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ormas`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `t_ormas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`kd_user`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_ormas` */

/*Table structure for table `t_penelitian` */

DROP TABLE IF EXISTS `t_penelitian`;

CREATE TABLE `t_penelitian` (
  `id_penelitian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_penelitian` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_penelitian` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_penelitian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_penelitian` */

/*Table structure for table `t_pertukaranpelajar` */

DROP TABLE IF EXISTS `t_pertukaranpelajar`;

CREATE TABLE `t_pertukaranpelajar` (
  `id_perpel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_perpel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pertukaranpelajar` */

/*Table structure for table `t_praktikkerja` */

DROP TABLE IF EXISTS `t_praktikkerja`;

CREATE TABLE `t_praktikkerja` (
  `id_praktikkerja` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_magang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_praktikkerja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_praktikkerja` */

/*Table structure for table `t_profil` */

DROP TABLE IF EXISTS `t_profil`;

CREATE TABLE `t_profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `isi` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_profil` */

/*Table structure for table `t_projekdesa` */

DROP TABLE IF EXISTS `t_projekdesa`;

CREATE TABLE `t_projekdesa` (
  `id_projekdesa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_program` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_projekdesa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekdesa` */

/*Table structure for table `t_projekindependen` */

DROP TABLE IF EXISTS `t_projekindependen`;

CREATE TABLE `t_projekindependen` (
  `id_independen` int(11) NOT NULL,
  `produk` text NOT NULL,
  `link_sosmed` text NOT NULL,
  `jml_mhs` int(11) NOT NULL,
  `jml_dosen` int(11) NOT NULL,
  `luaran_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekindependen` */

/*Table structure for table `t_projekkemanusian` */

DROP TABLE IF EXISTS `t_projekkemanusian`;

CREATE TABLE `t_projekkemanusian` (
  `id_projekkemanusian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_kegiatan` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_projekkemanusian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekkemanusian` */

/*Table structure for table `t_regulasimhs` */

DROP TABLE IF EXISTS `t_regulasimhs`;

CREATE TABLE `t_regulasimhs` (
  `id_regulasimhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `isi` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_regulasimhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_regulasimhs` */

/*Table structure for table `t_rekognisi` */

DROP TABLE IF EXISTS `t_rekognisi`;

CREATE TABLE `t_rekognisi` (
  `id_rekognisi` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(200) DEFAULT NULL,
  `institusi` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `link_sosmed` text,
  PRIMARY KEY (`id_rekognisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_rekognisi` */

/*Table structure for table `t_studi` */

DROP TABLE IF EXISTS `t_studi`;

CREATE TABLE `t_studi` (
  `id_studi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `link_sosmed` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_studi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_studi` */

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`kd_user`,`username`,`password`,`nama`,`level`) values 
(1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator',1);

/*Table structure for table `t_wirausaha` */

DROP TABLE IF EXISTS `t_wirausaha`;

CREATE TABLE `t_wirausaha` (
  `id_wirausaha` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `bidang_usaha` varchar(100) DEFAULT NULL,
  `jml_mhspelaksana` int(11) DEFAULT NULL,
  `link_sosmed` text,
  `jml_mhsterlibat` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_wirausaha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_wirausaha` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
