/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.21-MariaDB : Database - db_kedokteran
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kedokteran` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

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
  PRIMARY KEY (`id_belanegara`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_belanegara_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_belanegara` */

/*Table structure for table `t_berita` */

DROP TABLE IF EXISTS `t_berita`;

CREATE TABLE `t_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `tgl_entry` datetime NOT NULL,
  `cover` text DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_berita` */

/*Table structure for table `t_childormawa` */

DROP TABLE IF EXISTS `t_childormawa`;

CREATE TABLE `t_childormawa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ormawa_id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `struktur_organisasi` text DEFAULT NULL,
  `visi_misi` text DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `periode` (`periode`),
  KEY `ormawa_id` (`ormawa_id`),
  CONSTRAINT `t_childormawa_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE,
  CONSTRAINT `t_childormawa_ibfk_2` FOREIGN KEY (`ormawa_id`) REFERENCES `t_ormawa` (`id_ormawa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_childormawa` */

insert  into `t_childormawa`(`id`,`ormawa_id`,`profil`,`struktur_organisasi`,`visi_misi`,`periode`) values 
(1,2,'<p>a&nbsp;&nbsp;&nbsp;&nbsp;</p>','<p>a</p>','<p>a</p>',5);

/*Table structure for table `t_fileluaran` */

DROP TABLE IF EXISTS `t_fileluaran`;

CREATE TABLE `t_fileluaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proker_id` int(11) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `proker_id` (`proker_id`),
  CONSTRAINT `t_fileluaran_ibfk_1` FOREIGN KEY (`proker_id`) REFERENCES `t_proker` (`id_proker`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_fileluaran` */

/*Table structure for table `t_filemengajarsekolah` */

DROP TABLE IF EXISTS `t_filemengajarsekolah`;

CREATE TABLE `t_filemengajarsekolah` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text DEFAULT NULL,
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
  `isi` text DEFAULT NULL,
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
  `isi` text DEFAULT NULL,
  `pertukaranpelajar_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_filepp`),
  KEY `pertukaranpelajar_id` (`pertukaranpelajar_id`),
  CONSTRAINT `t_filepertukaranpelajar_ibfk_1` FOREIGN KEY (`pertukaranpelajar_id`) REFERENCES `t_pertukaranpelajar` (`id_perpel`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_filepertukaranpelajar` */

/*Table structure for table `t_filepraktikkerja` */

DROP TABLE IF EXISTS `t_filepraktikkerja`;

CREATE TABLE `t_filepraktikkerja` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text DEFAULT NULL,
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
  `isi` text DEFAULT NULL,
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
  `isi` text DEFAULT NULL,
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
  `deskripsi` text DEFAULT NULL,
  `ormas_id` int(11) NOT NULL,
  PRIMARY KEY (`id_folder`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `t_folder` */

insert  into `t_folder`(`id_folder`,`nama_folder`,`deskripsi`,`ormas_id`) values 
(13,'a','a',0);

/*Table structure for table `t_galery` */

DROP TABLE IF EXISTS `t_galery`;

CREATE TABLE `t_galery` (
  `id_galery` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `folder` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `tgl_entry` date DEFAULT NULL,
  PRIMARY KEY (`id_galery`),
  KEY `folder` (`folder`),
  CONSTRAINT `t_galery_ibfk_1` FOREIGN KEY (`folder`) REFERENCES `t_folder` (`id_folder`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_galery` */

/*Table structure for table `t_jenis` */

DROP TABLE IF EXISTS `t_jenis`;

CREATE TABLE `t_jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `tabel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `t_jenis` */

insert  into `t_jenis`(`id_jenis`,`nama`,`tabel`) values 
(1,'Tentang Pusbinpres','profil'),
(2,'Struktur Organisasi','profil'),
(3,'SOP Peminjaman Fasum','regulasi'),
(4,'Pedoman Etika','regulasi'),
(5,'Pedoman SKPI','regulasi'),
(6,'SOP Pengajuan Insentif Prestasi','regulasi');

/*Table structure for table `t_mengajarsekolah` */

DROP TABLE IF EXISTS `t_mengajarsekolah`;

CREATE TABLE `t_mengajarsekolah` (
  `id_mengajar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_pelaksana` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_mengajar`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_mengajarsekolah_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_mengajarsekolah` */

/*Table structure for table `t_ormawa` */

DROP TABLE IF EXISTS `t_ormawa`;

CREATE TABLE `t_ormawa` (
  `id_ormawa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ormawa` text NOT NULL,
  PRIMARY KEY (`id_ormawa`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `t_ormawa` */

insert  into `t_ormawa`(`id_ormawa`,`nama_ormawa`) values 
(2,'BEM'),
(3,'DPM'),
(4,'HIMA PSPD'),
(5,'HIMA PSIK'),
(6,'HIMA PSIKOLOGI'),
(7,'HIMA KESMAS'),
(8,'ARBOR VITAE'),
(9,'KSI-ASYIFA'),
(10,'TENSI'),
(11,'TBM-CS'),
(12,'HIPOCAMPUS'),
(13,'CIMSA'),
(14,'MEDIS'),
(15,'FSIM'),
(16,'MFC'),
(17,'MUB'),
(18,'MEDICARTES'),
(19,'IKA');

/*Table structure for table `t_penelitian` */

DROP TABLE IF EXISTS `t_penelitian`;

CREATE TABLE `t_penelitian` (
  `id_penelitian` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_penelitian` text DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_penelitian` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_penelitian`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_penelitian_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
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
  PRIMARY KEY (`id_perpel`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_pertukaranpelajar_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_pertukaranpelajar` */

/*Table structure for table `t_praktikkerja` */

DROP TABLE IF EXISTS `t_praktikkerja`;

CREATE TABLE `t_praktikkerja` (
  `id_praktikkerja` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_magang` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_praktikkerja`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_praktikkerja_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_praktikkerja` */

/*Table structure for table `t_profil` */

DROP TABLE IF EXISTS `t_profil`;

CREATE TABLE `t_profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_id` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_profil_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_profil` */

insert  into `t_profil`(`id_profil`,`jenis_id`,`isi`,`periode`) values 
(2,2,'struktur organisasi123234',5),
(4,1,'<p>adasda</p>',5);

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
  PRIMARY KEY (`id_projekdesa`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_projekdesa_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekdesa` */

/*Table structure for table `t_projekindependen` */

DROP TABLE IF EXISTS `t_projekindependen`;

CREATE TABLE `t_projekindependen` (
  `id_independen` int(11) NOT NULL AUTO_INCREMENT,
  `program` text DEFAULT NULL,
  `produk` text DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` text DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_independen`)
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
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_projekkemanusian`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_projekkemanusian_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_projekkemanusian` */

/*Table structure for table `t_proker` */

DROP TABLE IF EXISTS `t_proker`;

CREATE TABLE `t_proker` (
  `id_proker` int(11) NOT NULL AUTO_INCREMENT,
  `ormawa_id` int(11) NOT NULL,
  `periode` int(4) NOT NULL,
  `jenis` int(11) NOT NULL COMMENT '1=spesifik,2=kondisional bulan,3=kondisional semua',
  `agenda` text NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id_proker`),
  KEY `ormawa_id` (`ormawa_id`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_proker_ibfk_1` FOREIGN KEY (`ormawa_id`) REFERENCES `t_ormawa` (`id_ormawa`) ON DELETE CASCADE,
  CONSTRAINT `t_proker_ibfk_2` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `t_proker` */

/*Table structure for table `t_regulasimhs` */

DROP TABLE IF EXISTS `t_regulasimhs`;

CREATE TABLE `t_regulasimhs` (
  `id_regulasimhs` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_id` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp(),
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
  `link_sosmed` text DEFAULT NULL,
  `periode` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_rekognisi`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_rekognisi_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_rekognisi` */

/*Table structure for table `t_slide` */

DROP TABLE IF EXISTS `t_slide`;

CREATE TABLE `t_slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text DEFAULT NULL,
  `subjudul` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `urutan` int(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_slide` */

/*Table structure for table `t_studi` */

DROP TABLE IF EXISTS `t_studi`;

CREATE TABLE `t_studi` (
  `id_studi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
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
  `ormawa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_user`),
  KEY `ormawa_id` (`ormawa_id`),
  CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`ormawa_id`) REFERENCES `t_ormawa` (`id_ormawa`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `t_user` */

insert  into `t_user`(`kd_user`,`username`,`password`,`nama`,`level`,`ormawa_id`) values 
(33,'admin','21232f297a57a5a743894a0e4a801fc3','administrator',1,NULL),
(34,'bem','827ccb0eea8a706c4c34a16891f84e7b','bem',2,2),
(35,'dpm','49677814b41e9ff6cdc497c85472a4ac','DPM',2,5),
(36,'hima pspd','31d828b1b3e8b94bcd4b1bb3cd68567d','HIMA PSPD',2,5),
(37,'hima psik','0c726d2750e18a114ddce8dd0f018d4c','HIMA PSIK',2,5),
(38,'hima psikologi','9afbe67b7305535ebfc998103c71ce7e','HIMA PSIKOLOGI',2,5),
(39,'hima kesmas','71fe3431c58060add4f13cbbaee7a7f3','HIMA KESMAS',2,5),
(40,'arbor vitae','827ccb0eea8a706c4c34a16891f84e7b','ARBOR VITAE',2,8),
(41,'ksi-asyifa','5b3f862b902b6c5a7cf40e93c0c58891','KSI-ASYIFA',2,5),
(43,'tbm-cs','100afac15f6a4ed52f7c238b2ed7e808','TBM-CS',2,5),
(44,'hipocampus','2fb2fa43b21202a7a5cd058bb761ea5f','HIPOCAMPUS',2,5),
(45,'cimsa','ca89b7c959937c2bd09d7f99e6fbeac2','CIMSA',2,5),
(46,'medis','68045a2d10a96ed788dbedf1b71895a9','MEDIS',2,5),
(47,'fsim','82593e680c668a7ff2f4304a671ab8b2','FSIM',2,5),
(48,'mfc','3800f845ae86a2e1a26be414d8cadd0f','MFC',2,5),
(49,'mub','daa551f036a22f6a1d9396b4d52ba522','MUB',2,5),
(50,'medicartes','c42e6a202ff9eca5191af43d629c8af5','MEDICARTES',2,5),
(59,'tensi','8d6daab29063cc56717b284aa51c15fd','TENSI',2,5);

/*Table structure for table `t_visitor` */

DROP TABLE IF EXISTS `t_visitor`;

CREATE TABLE `t_visitor` (
  `id_visitor` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `counter` varchar(20) DEFAULT NULL,
  `browser` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_visitor`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `t_visitor` */

insert  into `t_visitor`(`id_visitor`,`tanggal`,`ip_address`,`counter`,`browser`) values 
(1,'2021-10-30','::1','1','Chrome/Opera'),
(2,'2021-10-31','::1','1','Chrome/Opera'),
(3,'2021-10-31','127.0.0.1','1','Chrome/Opera'),
(4,'2021-10-31','::1','1','Chrome/Opera'),
(5,'2021-10-31','::1','1','Chrome/Opera'),
(6,'2021-11-01','::1','1','Chrome/Opera'),
(7,'2021-11-02','::1','1','Safari'),
(8,'2021-11-05','::1','1','Safari'),
(9,'2021-11-17','::1','1','Safari'),
(10,'2021-11-17','::1','1','Safari'),
(11,'2021-11-17','::1','1','Safari'),
(12,'2021-11-17','::1','1','Safari'),
(13,'2021-11-17','::1','1','Safari'),
(14,'2021-11-17','::1','1','Safari'),
(15,'2021-11-18','::1','1','Safari');

/*Table structure for table `t_wirausaha` */

DROP TABLE IF EXISTS `t_wirausaha`;

CREATE TABLE `t_wirausaha` (
  `id_wirausaha` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(200) DEFAULT NULL,
  `bidang_usaha` varchar(100) DEFAULT NULL,
  `jml_mhspelaksana` int(11) DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
  `jml_mhsterlibat` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  PRIMARY KEY (`id_wirausaha`),
  KEY `periode` (`periode`),
  CONSTRAINT `t_wirausaha_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_wirausaha` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
