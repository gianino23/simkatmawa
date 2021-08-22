-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `judul` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filemengajarsekolah`
--

CREATE TABLE `t_filemengajarsekolah` (
  `id_file` int(11) NOT NULL,
  `isi` text,
  `mengajarsekolah_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filepenilitian`
--

CREATE TABLE `t_filepenilitian` (
  `id_file` int(11) NOT NULL,
  `isi` text,
  `penilitian_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filepertukaranpelajar`
--

CREATE TABLE `t_filepertukaranpelajar` (
  `id_filepp` int(11) NOT NULL,
  `isi` text,
  `pertukaranpelajar_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_filepraktikkerja`
--

CREATE TABLE `t_filepraktikkerja` (
  `id_file` int(11) NOT NULL,
  `isi` text,
  `praktikkerja_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_fileprojekdesa`
--

CREATE TABLE `t_fileprojekdesa` (
  `id_file` int(11) NOT NULL,
  `isi` text,
  `projekdesa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_fileprojekkemanusian`
--

CREATE TABLE `t_fileprojekkemanusian` (
  `id_file` int(11) NOT NULL,
  `isi` text,
  `projekkemanusian_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ikatanalumni`
--

CREATE TABLE `t_ikatanalumni` (
  `id_alumni` int(11) NOT NULL,
  `profil_ika` text,
  `program_kerja` text,
  `luaran_kegiatan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_mengajarsekolah`
--

CREATE TABLE `t_mengajarsekolah` (
  `id_mengajar` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_mhs_pelaksana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ormas`
--

CREATE TABLE `t_ormas` (
  `id_ormas` int(11) NOT NULL,
  `profil` text,
  `struktur_organisasi` text,
  `visi_misi` text,
  `kalender_proker` text,
  `luaran_kinerja` text,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_penelitian`
--

CREATE TABLE `t_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `judul_penelitian` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_penelitian` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pertukaranpelajar`
--

CREATE TABLE `t_pertukaranpelajar` (
  `id_perpel` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL
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
  `jml_mhs_magang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_profil`
--

CREATE TABLE `t_profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `isi` text,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `luaran_kegiatan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_projekindependen`
--

CREATE TABLE `t_projekindependen` (
  `id_independen` int(11) NOT NULL,
  `produk` text NOT NULL,
  `link_sosmed` text NOT NULL,
  `jml_mhs` int(11) NOT NULL,
  `jml_dosen` int(11) NOT NULL,
  `luaran_kegiatan` text NOT NULL
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
  `luaran_kegiatan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_regulasimhs`
--

CREATE TABLE `t_regulasimhs` (
  `id_regulasimhs` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `isi` text,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_rekognisi`
--

CREATE TABLE `t_rekognisi` (
  `id_rekognisi` int(11) NOT NULL,
  `jenis` varchar(200) DEFAULT NULL,
  `institusi` varchar(200) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL,
  `link_sosmed` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_studi`
--

CREATE TABLE `t_studi` (
  `id_studi` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `link_sosmed` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL
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
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_wirausaha`
--

CREATE TABLE `t_wirausaha` (
  `id_wirausaha` int(11) NOT NULL,
  `nama_program` varchar(200) DEFAULT NULL,
  `bidang_usaha` varchar(100) DEFAULT NULL,
  `jml_mhspelaksana` int(11) DEFAULT NULL,
  `link_sosmed` text,
  `jml_mhsterlibat` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_belanegara`
--
ALTER TABLE `t_belanegara`
  ADD PRIMARY KEY (`id_belanegara`);

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
-- Indexes for table `t_ikatanalumni`
--
ALTER TABLE `t_ikatanalumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  ADD PRIMARY KEY (`id_mengajar`);

--
-- Indexes for table `t_ormas`
--
ALTER TABLE `t_ormas`
  ADD PRIMARY KEY (`id_ormas`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `t_penelitian`
--
ALTER TABLE `t_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `t_pertukaranpelajar`
--
ALTER TABLE `t_pertukaranpelajar`
  ADD PRIMARY KEY (`id_perpel`);

--
-- Indexes for table `t_praktikkerja`
--
ALTER TABLE `t_praktikkerja`
  ADD PRIMARY KEY (`id_praktikkerja`);

--
-- Indexes for table `t_profil`
--
ALTER TABLE `t_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `t_projekdesa`
--
ALTER TABLE `t_projekdesa`
  ADD PRIMARY KEY (`id_projekdesa`);

--
-- Indexes for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  ADD PRIMARY KEY (`id_projekkemanusian`);

--
-- Indexes for table `t_regulasimhs`
--
ALTER TABLE `t_regulasimhs`
  ADD PRIMARY KEY (`id_regulasimhs`);

--
-- Indexes for table `t_rekognisi`
--
ALTER TABLE `t_rekognisi`
  ADD PRIMARY KEY (`id_rekognisi`);

--
-- Indexes for table `t_studi`
--
ALTER TABLE `t_studi`
  ADD PRIMARY KEY (`id_studi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `t_wirausaha`
--
ALTER TABLE `t_wirausaha`
  ADD PRIMARY KEY (`id_wirausaha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_belanegara`
--
ALTER TABLE `t_belanegara`
  MODIFY `id_belanegara` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_filepp` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `t_ikatanalumni`
--
ALTER TABLE `t_ikatanalumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_ormas`
--
ALTER TABLE `t_ormas`
  MODIFY `id_ormas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penelitian`
--
ALTER TABLE `t_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pertukaranpelajar`
--
ALTER TABLE `t_pertukaranpelajar`
  MODIFY `id_perpel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_praktikkerja`
--
ALTER TABLE `t_praktikkerja`
  MODIFY `id_praktikkerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_profil`
--
ALTER TABLE `t_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_projekdesa`
--
ALTER TABLE `t_projekdesa`
  MODIFY `id_projekdesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  MODIFY `id_projekkemanusian` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `t_studi`
--
ALTER TABLE `t_studi`
  MODIFY `id_studi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_wirausaha`
--
ALTER TABLE `t_wirausaha`
  MODIFY `id_wirausaha` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `t_ormas`
--
ALTER TABLE `t_ormas`
  ADD CONSTRAINT `t_ormas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`kd_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
