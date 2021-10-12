/*
SQLyog Ultimate v12.5.1 (64 bit)
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
  `nama_program` varchar(200) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_belanegara`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_belanegara` */

insert  into `t_belanegara`(`id_belanegara`,`nama_program`,`judul`,`jml_mhs`,`jml_dosen`,`luaran_kegiatan`,`periode`) values 
(1,'1','1',1,1,'1',0);

/*Table structure for table `t_childormawa` */

DROP TABLE IF EXISTS `t_childormawa`;

CREATE TABLE `t_childormawa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ormas_id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `struktur_organisasi` text,
  `visi_misi` text,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_childormawa` */

/*Table structure for table `t_fileluaran` */

DROP TABLE IF EXISTS `t_fileluaran`;

CREATE TABLE `t_fileluaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ormas_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_fileluaran` */

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

/*Table structure for table `t_folder` */

DROP TABLE IF EXISTS `t_folder`;

CREATE TABLE `t_folder` (
  `id_folder` int(11) NOT NULL AUTO_INCREMENT,
  `nama_folder` varchar(200) DEFAULT NULL,
  `ormas_id` int(11) NOT NULL,
  PRIMARY KEY (`id_folder`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_folder` */

/*Table structure for table `t_galery` */

DROP TABLE IF EXISTS `t_galery`;

CREATE TABLE `t_galery` (
  `id_galery` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `folder` int(11) DEFAULT NULL,
  `file` text,
  `tgl_entry` date DEFAULT NULL,
  PRIMARY KEY (`id_galery`),
  KEY `folder` (`folder`),
  CONSTRAINT `t_galery_ibfk_1` FOREIGN KEY (`folder`) REFERENCES `t_folder` (`id_folder`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_galery` */

/*Table structure for table `t_mengajarsekolah` */

DROP TABLE IF EXISTS `t_mengajarsekolah`;

CREATE TABLE `t_mengajarsekolah` (
  `id_mengajar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_pelaksana` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_mengajar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_mengajarsekolah` */

/*Table structure for table `t_ormawa` */

DROP TABLE IF EXISTS `t_ormawa`;

CREATE TABLE `t_ormawa` (
  `id_ormawa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ormawa` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ormawa`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `t_ormawa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`kd_user`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_ormawa` */

/*Table structure for table `t_penelitian` */

DROP TABLE IF EXISTS `t_penelitian`;

CREATE TABLE `t_penelitian` (
  `id_penelitian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_penelitian` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_penelitian` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_penelitian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_penelitian` */

/*Table structure for table `t_periode` */

DROP TABLE IF EXISTS `t_periode`;

CREATE TABLE `t_periode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periode` year(4) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `t_periode` */

insert  into `t_periode`(`id`,`periode`,`status`) values 
(5,2021,1),
(6,2022,0);

/*Table structure for table `t_pertukaranpelajar` */

DROP TABLE IF EXISTS `t_pertukaranpelajar`;

CREATE TABLE `t_pertukaranpelajar` (
  `id_perpel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_perpel`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_pertukaranpelajar` */

insert  into `t_pertukaranpelajar`(`id_perpel`,`nama_program`,`level`,`status`,`jml_mhs`,`periode`) values 
(1,'asd','Nasional','SKS',1,0);

/*Table structure for table `t_praktikkerja` */

DROP TABLE IF EXISTS `t_praktikkerja`;

CREATE TABLE `t_praktikkerja` (
  `id_praktikkerja` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_magang` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_praktikkerja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_praktikkerja` */

/*Table structure for table `t_profil` */

DROP TABLE IF EXISTS `t_profil`;

CREATE TABLE `t_profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `isi` text,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_profil_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_profil` */

insert  into `t_profil`(`id_profil`,`nama`,`isi`,`periode`) values 
(1,'TENTANG PUSBINPRES','tentang pusbinpres',5),
(2,'STRUKTUR ORGANISASI','struktur organisasi',5);

/*Table structure for table `t_projekdesa` */

DROP TABLE IF EXISTS `t_projekdesa`;

CREATE TABLE `t_projekdesa` (
  `id_projekdesa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_program` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_projekdesa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekdesa` */

/*Table structure for table `t_projekindependen` */

DROP TABLE IF EXISTS `t_projekindependen`;

CREATE TABLE `t_projekindependen` (
  `id_independen` int(11) NOT NULL AUTO_INCREMENT,
  `program` text,
  `produk` text,
  `link_sosmed` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` text,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_independen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_projekindependen` */

insert  into `t_projekindependen`(`id_independen`,`program`,`produk`,`link_sosmed`,`jml_mhs`,`jml_dosen`,`luaran_kegiatan`,`periode`) values 
(1,'1','1','1',1,1,'1',0);

/*Table structure for table `t_projekkemanusian` */

DROP TABLE IF EXISTS `t_projekkemanusian`;

CREATE TABLE `t_projekkemanusian` (
  `id_projekkemanusian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_kegiatan` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_projekkemanusian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekkemanusian` */

/*Table structure for table `t_proker` */

DROP TABLE IF EXISTS `t_proker`;

CREATE TABLE `t_proker` (
  `id_proker` int(11) NOT NULL AUTO_INCREMENT,
  `ormas_id` int(11) NOT NULL,
  `periode` year(4) NOT NULL,
  `jenis` int(11) NOT NULL COMMENT '1=spesifik,2=kondisional bulan,3=kondisional semua',
  `agenda` text NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_proker` */

/*Table structure for table `t_regulasimhs` */

DROP TABLE IF EXISTS `t_regulasimhs`;

CREATE TABLE `t_regulasimhs` (
  `id_regulasimhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `file` text,
  `status` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_regulasimhs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_regulasimhs` */

/*Table structure for table `t_rekognisi` */

DROP TABLE IF EXISTS `t_rekognisi`;

CREATE TABLE `t_rekognisi` (
  `id_rekognisi` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(200) DEFAULT NULL,
  `identitas` varchar(200) DEFAULT NULL,
  `institusi` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `link_sosmed` text,
  PRIMARY KEY (`id_rekognisi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_rekognisi` */

insert  into `t_rekognisi`(`id_rekognisi`,`jenis`,`identitas`,`institusi`,`jml_mhs`,`jml_dosen`,`luaran_kegiatan`,`link_sosmed`) values 
(1,'1','1','1',1,1,'1','1');

/*Table structure for table `t_studi` */

DROP TABLE IF EXISTS `t_studi`;

CREATE TABLE `t_studi` (
  `id_studi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `link_sosmed` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`kd_user`,`username`,`password`,`nama`,`level`) values 
(33,'admin','21232f297a57a5a743894a0e4a801fc3','administrator',1),
(34,'bem','d3c654d99bdfaf101e012bfe2810679e','bem',2),
(35,'dpm','49677814b41e9ff6cdc497c85472a4ac','DPM',2),
(36,'hima pspd','31d828b1b3e8b94bcd4b1bb3cd68567d','HIMA PSPD',2),
(37,'hima psik','0c726d2750e18a114ddce8dd0f018d4c','HIMA PSIK',2),
(38,'hima psikologi','9afbe67b7305535ebfc998103c71ce7e','HIMA PSIKOLOGI',2),
(39,'hima kesmas','71fe3431c58060add4f13cbbaee7a7f3','HIMA KESMAS',2),
(40,'arbor vitae','14f9a8287e5c210d69307db88ede11b7','ARBOR VITAE',2),
(41,'ksi-asyifa','5b3f862b902b6c5a7cf40e93c0c58891','KSI-ASYIFA',2),
(43,'tbm-cs','100afac15f6a4ed52f7c238b2ed7e808','TBM-CS',2),
(44,'hipocampus','2fb2fa43b21202a7a5cd058bb761ea5f','HIPOCAMPUS',2),
(45,'cimsa','ca89b7c959937c2bd09d7f99e6fbeac2','CIMSA',2),
(46,'medis','68045a2d10a96ed788dbedf1b71895a9','MEDIS',2),
(47,'fsim','82593e680c668a7ff2f4304a671ab8b2','FSIM',2),
(48,'mfc','3800f845ae86a2e1a26be414d8cadd0f','MFC',2),
(49,'mub','daa551f036a22f6a1d9396b4d52ba522','MUB',2),
(50,'medicartes','c42e6a202ff9eca5191af43d629c8af5','MEDICARTES',2),
(59,'tensi','8d6daab29063cc56717b284aa51c15fd','TENSI',2);

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
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_wirausaha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_wirausaha` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
