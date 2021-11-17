-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 10:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kedokteran`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_belanegara`
--

CREATE TABLE `t_belanegara` (
  `id_belanegara` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `tgl_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_childormawa`
--

CREATE TABLE `t_childormawa` (
  `id` int(11) NOT NULL,
  `ormawa_id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `struktur_organisasi` text DEFAULT NULL,
  `visi_misi` text DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_childormawa`
--

INSERT INTO `t_childormawa` (`id`, `ormawa_id`, `profil`, `struktur_organisasi`, `visi_misi`, `periode`) VALUES
(1, 2, '<p>a&nbsp;&nbsp;&nbsp;&nbsp;</p>', '<p>a</p>', '<p>a</p>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_fileluaran`
--

CREATE TABLE `t_fileluaran` (
  `id` int(11) NOT NULL,
  `ormas_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp(),
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filemengajarsekolah`
--

CREATE TABLE `t_filemengajarsekolah` (
  `id_file` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `mengajarsekolah_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filepenilitian`
--

CREATE TABLE `t_filepenilitian` (
  `id_file` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `penilitian_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filepertukaranpelajar`
--

CREATE TABLE `t_filepertukaranpelajar` (
  `id_filepp` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `pertukaranpelajar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filepraktikkerja`
--

CREATE TABLE `t_filepraktikkerja` (
  `id_file` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `praktikkerja_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_fileprojekdesa`
--

CREATE TABLE `t_fileprojekdesa` (
  `id_file` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `projekdesa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_fileprojekkemanusian`
--

CREATE TABLE `t_fileprojekkemanusian` (
  `id_file` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `projekkemanusian_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_folder`
--

CREATE TABLE `t_folder` (
  `id_folder` int(11) NOT NULL,
  `nama_folder` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `ormas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_folder`
--

INSERT INTO `t_folder` (`id_folder`, `nama_folder`, `deskripsi`, `ormas_id`) VALUES
(12, 'c', 'tes deskripsi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_galery`
--

CREATE TABLE `t_galery` (
  `id_galery` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `folder` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `tgl_entry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis`
--

CREATE TABLE `t_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tabel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_jenis`
--

INSERT INTO `t_jenis` (`id_jenis`, `nama`, `tabel`) VALUES
(1, 'Tentang Pusbinpres', 'profil'),
(2, 'Struktur Organisasi', 'profil'),
(3, 'SOP Peminjaman Fasum', 'regulasi'),
(4, 'Pedoman Etika', 'regulasi'),
(5, 'Pedoman SKPI', 'regulasi'),
(6, 'SOP Pengajuan Insentif Prestasi', 'regulasi');

-- --------------------------------------------------------

--
-- Table structure for table `t_mengajarsekolah`
--

CREATE TABLE `t_mengajarsekolah` (
  `id_mengajar` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_pelaksana` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ormawa`
--

CREATE TABLE `t_ormawa` (
  `id_ormawa` int(11) NOT NULL,
  `nama_ormawa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ormawa`
--

INSERT INTO `t_ormawa` (`id_ormawa`, `nama_ormawa`) VALUES
(2, 'BEM'),
(3, 'DPM'),
(4, 'HIMA PSPD'),
(5, 'HIMA PSIK'),
(6, 'HIMA PSIKOLOGI'),
(7, 'HIMA KESMAS'),
(8, 'ARBOR VITAE'),
(9, 'KSI-ASYIFA'),
(10, 'TENSI'),
(11, 'TBM-CS'),
(12, 'HIPOCAMPUS'),
(13, 'CIMSA'),
(14, 'MEDIS'),
(15, 'FSIM'),
(16, 'MFC'),
(17, 'MUB'),
(18, 'MEDICARTES'),
(19, 'IKA');

-- --------------------------------------------------------

--
-- Table structure for table `t_penelitian`
--

CREATE TABLE `t_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_penelitian` text DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_penelitian` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_periode`
--

CREATE TABLE `t_periode` (
  `id` int(11) NOT NULL,
  `periode` year(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_periode`
--

INSERT INTO `t_periode` (`id`, `periode`, `status`) VALUES
(5, 2021, 1),
(6, 2022, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_pertukaranpelajar`
--

CREATE TABLE `t_pertukaranpelajar` (
  `id_perpel` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_praktikkerja`
--

CREATE TABLE `t_praktikkerja` (
  `id_praktikkerja` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_magang` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_profil`
--

CREATE TABLE `t_profil` (
  `id_profil` int(11) NOT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_profil`
--

INSERT INTO `t_profil` (`id_profil`, `jenis_id`, `isi`, `periode`) VALUES
(2, 2, 'struktur organisasi123234', 5),
(4, 1, '<p>adasda</p>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_projekdesa`
--

CREATE TABLE `t_projekdesa` (
  `id_projekdesa` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_program` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_projekindependen`
--

CREATE TABLE `t_projekindependen` (
  `id_independen` int(11) NOT NULL,
  `program` text DEFAULT NULL,
  `produk` text DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` text DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_projekkemanusian`
--

CREATE TABLE `t_projekkemanusian` (
  `id_projekkemanusian` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_kegiatan` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_proker`
--

CREATE TABLE `t_proker` (
  `id_proker` int(11) NOT NULL,
  `ormawa_id` int(11) NOT NULL,
  `periode` int(4) NOT NULL,
  `jenis` int(11) NOT NULL COMMENT '1=spesifik,2=kondisional bulan,3=kondisional semua',
  `agenda` text NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_proker`
--

INSERT INTO `t_proker` (`id_proker`, `ormawa_id`, `periode`, `jenis`, `agenda`, `waktu`, `status`, `keterangan`) VALUES
(5, 2, 5, 2, '1', '2021-10-13 04:44:00', 1, '-');

-- --------------------------------------------------------

--
-- Table structure for table `t_regulasimhs`
--

CREATE TABLE `t_regulasimhs` (
  `id_regulasimhs` int(11) NOT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_rekognisi`
--

CREATE TABLE `t_rekognisi` (
  `id_rekognisi` int(11) NOT NULL,
  `jenis` varchar(200) DEFAULT NULL,
  `identitas` varchar(200) DEFAULT NULL,
  `institusi` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
  `periode` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_slide`
--

CREATE TABLE `t_slide` (
  `id_slide` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `subjudul` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `urutan` int(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_studi`
--

CREATE TABLE `t_studi` (
  `id_studi` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `ormawa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`kd_user`, `username`, `password`, `nama`, `level`, `ormawa_id`) VALUES
(33, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 1, NULL),
(34, 'bem', '827ccb0eea8a706c4c34a16891f84e7b', 'bem', 2, 2),
(35, 'dpm', '49677814b41e9ff6cdc497c85472a4ac', 'DPM', 2, 5),
(36, 'hima pspd', '31d828b1b3e8b94bcd4b1bb3cd68567d', 'HIMA PSPD', 2, 5),
(37, 'hima psik', '0c726d2750e18a114ddce8dd0f018d4c', 'HIMA PSIK', 2, 5),
(38, 'hima psikologi', '9afbe67b7305535ebfc998103c71ce7e', 'HIMA PSIKOLOGI', 2, 5),
(39, 'hima kesmas', '71fe3431c58060add4f13cbbaee7a7f3', 'HIMA KESMAS', 2, 5),
(40, 'arbor vitae', '827ccb0eea8a706c4c34a16891f84e7b', 'ARBOR VITAE', 2, 8),
(41, 'ksi-asyifa', '5b3f862b902b6c5a7cf40e93c0c58891', 'KSI-ASYIFA', 2, 5),
(43, 'tbm-cs', '100afac15f6a4ed52f7c238b2ed7e808', 'TBM-CS', 2, 5),
(44, 'hipocampus', '2fb2fa43b21202a7a5cd058bb761ea5f', 'HIPOCAMPUS', 2, 5),
(45, 'cimsa', 'ca89b7c959937c2bd09d7f99e6fbeac2', 'CIMSA', 2, 5),
(46, 'medis', '68045a2d10a96ed788dbedf1b71895a9', 'MEDIS', 2, 5),
(47, 'fsim', '82593e680c668a7ff2f4304a671ab8b2', 'FSIM', 2, 5),
(48, 'mfc', '3800f845ae86a2e1a26be414d8cadd0f', 'MFC', 2, 5),
(49, 'mub', 'daa551f036a22f6a1d9396b4d52ba522', 'MUB', 2, 5),
(50, 'medicartes', 'c42e6a202ff9eca5191af43d629c8af5', 'MEDICARTES', 2, 5),
(59, 'tensi', '8d6daab29063cc56717b284aa51c15fd', 'TENSI', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_visitor`
--

CREATE TABLE `t_visitor` (
  `id_visitor` bigint(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `counter` varchar(20) DEFAULT NULL,
  `browser` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_visitor`
--

INSERT INTO `t_visitor` (`id_visitor`, `tanggal`, `ip_address`, `counter`, `browser`) VALUES
(1, '2021-10-30', '::1', '1', 'Chrome/Opera'),
(2, '2021-10-31', '::1', '1', 'Chrome/Opera'),
(3, '2021-10-31', '127.0.0.1', '1', 'Chrome/Opera'),
(4, '2021-10-31', '::1', '1', 'Chrome/Opera'),
(5, '2021-10-31', '::1', '1', 'Chrome/Opera'),
(6, '2021-11-01', '::1', '1', 'Chrome/Opera'),
(7, '2021-11-02', '::1', '1', 'Safari'),
(8, '2021-11-05', '::1', '1', 'Safari'),
(9, '2021-11-17', '::1', '1', 'Safari'),
(10, '2021-11-17', '::1', '1', 'Safari'),
(11, '2021-11-17', '::1', '1', 'Safari'),
(12, '2021-11-17', '::1', '1', 'Safari');

-- --------------------------------------------------------

--
-- Table structure for table `t_wirausaha`
--

CREATE TABLE `t_wirausaha` (
  `id_wirausaha` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `bidang_usaha` varchar(100) DEFAULT NULL,
  `jml_mhspelaksana` int(11) DEFAULT NULL,
  `link_sosmed` text DEFAULT NULL,
  `jml_mhsterlibat` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_belanegara`
--
ALTER TABLE `t_belanegara`
  ADD PRIMARY KEY (`id_belanegara`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `t_childormawa`
--
ALTER TABLE `t_childormawa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periode` (`periode`),
  ADD KEY `ormawa_id` (`ormawa_id`);

--
-- Indexes for table `t_fileluaran`
--
ALTER TABLE `t_fileluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_filemengajarsekolah`
--
ALTER TABLE `t_filemengajarsekolah`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `mengajarsekolah_id` (`mengajarsekolah_id`);

--
-- Indexes for table `t_filepenilitian`
--
ALTER TABLE `t_filepenilitian`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `penilitian_id` (`penilitian_id`);

--
-- Indexes for table `t_filepertukaranpelajar`
--
ALTER TABLE `t_filepertukaranpelajar`
  ADD PRIMARY KEY (`id_filepp`),
  ADD KEY `pertukaranpelajar_id` (`pertukaranpelajar_id`);

--
-- Indexes for table `t_filepraktikkerja`
--
ALTER TABLE `t_filepraktikkerja`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `praktikkerja_id` (`praktikkerja_id`);

--
-- Indexes for table `t_fileprojekdesa`
--
ALTER TABLE `t_fileprojekdesa`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `projekdesa_id` (`projekdesa_id`);

--
-- Indexes for table `t_fileprojekkemanusian`
--
ALTER TABLE `t_fileprojekkemanusian`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `projekkemanusian_id` (`projekkemanusian_id`);

--
-- Indexes for table `t_folder`
--
ALTER TABLE `t_folder`
  ADD PRIMARY KEY (`id_folder`);

--
-- Indexes for table `t_galery`
--
ALTER TABLE `t_galery`
  ADD PRIMARY KEY (`id_galery`),
  ADD KEY `folder` (`folder`);

--
-- Indexes for table `t_jenis`
--
ALTER TABLE `t_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_ormawa`
--
ALTER TABLE `t_ormawa`
  ADD PRIMARY KEY (`id_ormawa`);

--
-- Indexes for table `t_penelitian`
--
ALTER TABLE `t_penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_periode`
--
ALTER TABLE `t_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pertukaranpelajar`
--
ALTER TABLE `t_pertukaranpelajar`
  ADD PRIMARY KEY (`id_perpel`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_praktikkerja`
--
ALTER TABLE `t_praktikkerja`
  ADD PRIMARY KEY (`id_praktikkerja`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_profil`
--
ALTER TABLE `t_profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_projekdesa`
--
ALTER TABLE `t_projekdesa`
  ADD PRIMARY KEY (`id_projekdesa`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_projekindependen`
--
ALTER TABLE `t_projekindependen`
  ADD PRIMARY KEY (`id_independen`);

--
-- Indexes for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  ADD PRIMARY KEY (`id_projekkemanusian`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_proker`
--
ALTER TABLE `t_proker`
  ADD PRIMARY KEY (`id_proker`),
  ADD KEY `ormawa_id` (`ormawa_id`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_regulasimhs`
--
ALTER TABLE `t_regulasimhs`
  ADD PRIMARY KEY (`id_regulasimhs`);

--
-- Indexes for table `t_rekognisi`
--
ALTER TABLE `t_rekognisi`
  ADD PRIMARY KEY (`id_rekognisi`),
  ADD KEY `periode` (`periode`);

--
-- Indexes for table `t_slide`
--
ALTER TABLE `t_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `t_studi`
--
ALTER TABLE `t_studi`
  ADD PRIMARY KEY (`id_studi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`kd_user`),
  ADD KEY `ormawa_id` (`ormawa_id`);

--
-- Indexes for table `t_visitor`
--
ALTER TABLE `t_visitor`
  ADD PRIMARY KEY (`id_visitor`);

--
-- Indexes for table `t_wirausaha`
--
ALTER TABLE `t_wirausaha`
  ADD PRIMARY KEY (`id_wirausaha`),
  ADD KEY `periode` (`periode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_belanegara`
--
ALTER TABLE `t_belanegara`
  MODIFY `id_belanegara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_childormawa`
--
ALTER TABLE `t_childormawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_fileluaran`
--
ALTER TABLE `t_fileluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_filemengajarsekolah`
--
ALTER TABLE `t_filemengajarsekolah`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_filepenilitian`
--
ALTER TABLE `t_filepenilitian`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_filepertukaranpelajar`
--
ALTER TABLE `t_filepertukaranpelajar`
  MODIFY `id_filepp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_filepraktikkerja`
--
ALTER TABLE `t_filepraktikkerja`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_fileprojekdesa`
--
ALTER TABLE `t_fileprojekdesa`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_fileprojekkemanusian`
--
ALTER TABLE `t_fileprojekkemanusian`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_folder`
--
ALTER TABLE `t_folder`
  MODIFY `id_folder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_galery`
--
ALTER TABLE `t_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_jenis`
--
ALTER TABLE `t_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_ormawa`
--
ALTER TABLE `t_ormawa`
  MODIFY `id_ormawa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t_penelitian`
--
ALTER TABLE `t_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_periode`
--
ALTER TABLE `t_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_pertukaranpelajar`
--
ALTER TABLE `t_pertukaranpelajar`
  MODIFY `id_perpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_praktikkerja`
--
ALTER TABLE `t_praktikkerja`
  MODIFY `id_praktikkerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_profil`
--
ALTER TABLE `t_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_projekdesa`
--
ALTER TABLE `t_projekdesa`
  MODIFY `id_projekdesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_projekindependen`
--
ALTER TABLE `t_projekindependen`
  MODIFY `id_independen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  MODIFY `id_projekkemanusian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_proker`
--
ALTER TABLE `t_proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_regulasimhs`
--
ALTER TABLE `t_regulasimhs`
  MODIFY `id_regulasimhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_rekognisi`
--
ALTER TABLE `t_rekognisi`
  MODIFY `id_rekognisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_slide`
--
ALTER TABLE `t_slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_studi`
--
ALTER TABLE `t_studi`
  MODIFY `id_studi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `t_visitor`
--
ALTER TABLE `t_visitor`
  MODIFY `id_visitor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_wirausaha`
--
ALTER TABLE `t_wirausaha`
  MODIFY `id_wirausaha` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_belanegara`
--
ALTER TABLE `t_belanegara`
  ADD CONSTRAINT `t_belanegara_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_childormawa`
--
ALTER TABLE `t_childormawa`
  ADD CONSTRAINT `t_childormawa_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_childormawa_ibfk_2` FOREIGN KEY (`ormawa_id`) REFERENCES `t_ormawa` (`id_ormawa`) ON DELETE CASCADE;

--
-- Constraints for table `t_filemengajarsekolah`
--
ALTER TABLE `t_filemengajarsekolah`
  ADD CONSTRAINT `t_filemengajarsekolah_ibfk_1` FOREIGN KEY (`mengajarsekolah_id`) REFERENCES `t_mengajarsekolah` (`id_mengajar`) ON DELETE CASCADE;

--
-- Constraints for table `t_filepenilitian`
--
ALTER TABLE `t_filepenilitian`
  ADD CONSTRAINT `t_filepenilitian_ibfk_1` FOREIGN KEY (`penilitian_id`) REFERENCES `t_penelitian` (`id_penelitian`) ON DELETE CASCADE;

--
-- Constraints for table `t_filepertukaranpelajar`
--
ALTER TABLE `t_filepertukaranpelajar`
  ADD CONSTRAINT `t_filepertukaranpelajar_ibfk_1` FOREIGN KEY (`pertukaranpelajar_id`) REFERENCES `t_pertukaranpelajar` (`id_perpel`) ON DELETE CASCADE;

--
-- Constraints for table `t_filepraktikkerja`
--
ALTER TABLE `t_filepraktikkerja`
  ADD CONSTRAINT `t_filepraktikkerja_ibfk_1` FOREIGN KEY (`praktikkerja_id`) REFERENCES `t_praktikkerja` (`id_praktikkerja`) ON DELETE CASCADE;

--
-- Constraints for table `t_fileprojekdesa`
--
ALTER TABLE `t_fileprojekdesa`
  ADD CONSTRAINT `t_fileprojekdesa_ibfk_1` FOREIGN KEY (`projekdesa_id`) REFERENCES `t_projekdesa` (`id_projekdesa`) ON DELETE CASCADE;

--
-- Constraints for table `t_fileprojekkemanusian`
--
ALTER TABLE `t_fileprojekkemanusian`
  ADD CONSTRAINT `t_fileprojekkemanusian_ibfk_1` FOREIGN KEY (`projekkemanusian_id`) REFERENCES `t_projekkemanusian` (`id_projekkemanusian`) ON DELETE CASCADE;

--
-- Constraints for table `t_galery`
--
ALTER TABLE `t_galery`
  ADD CONSTRAINT `t_galery_ibfk_1` FOREIGN KEY (`folder`) REFERENCES `t_folder` (`id_folder`) ON DELETE CASCADE;

--
-- Constraints for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  ADD CONSTRAINT `t_mengajarsekolah_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_penelitian`
--
ALTER TABLE `t_penelitian`
  ADD CONSTRAINT `t_penelitian_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_pertukaranpelajar`
--
ALTER TABLE `t_pertukaranpelajar`
  ADD CONSTRAINT `t_pertukaranpelajar_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_praktikkerja`
--
ALTER TABLE `t_praktikkerja`
  ADD CONSTRAINT `t_praktikkerja_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_profil`
--
ALTER TABLE `t_profil`
  ADD CONSTRAINT `t_profil_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_projekdesa`
--
ALTER TABLE `t_projekdesa`
  ADD CONSTRAINT `t_projekdesa_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  ADD CONSTRAINT `t_projekkemanusian_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_proker`
--
ALTER TABLE `t_proker`
  ADD CONSTRAINT `t_proker_ibfk_1` FOREIGN KEY (`ormawa_id`) REFERENCES `t_ormawa` (`id_ormawa`) ON DELETE CASCADE,
  ADD CONSTRAINT `t_proker_ibfk_2` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_rekognisi`
--
ALTER TABLE `t_rekognisi`
  ADD CONSTRAINT `t_rekognisi_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`ormawa_id`) REFERENCES `t_ormawa` (`id_ormawa`) ON DELETE CASCADE;

--
-- Constraints for table `t_wirausaha`
--
ALTER TABLE `t_wirausaha`
  ADD CONSTRAINT `t_wirausaha_ibfk_1` FOREIGN KEY (`periode`) REFERENCES `t_periode` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
