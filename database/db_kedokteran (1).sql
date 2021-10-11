-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2021 at 02:49 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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

--
-- Dumping data for table `t_belanegara`
--

INSERT INTO `t_belanegara` (`id_belanegara`, `nama_program`, `judul`, `jml_mhs`, `jml_dosen`, `luaran_kegiatan`, `periode`) VALUES
(1, '1', '1', 1, 1, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_childormawa`
--

CREATE TABLE `t_childormawa` (
  `id` int(11) NOT NULL,
  `ormas_id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `struktur_organisasi` text,
  `visi_misi` text,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_fileluaran`
--

CREATE TABLE `t_fileluaran` (
  `id` int(11) NOT NULL,
  `ormas_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
-- Table structure for table `t_folder`
--

CREATE TABLE `t_folder` (
  `id_folder` int(11) NOT NULL,
  `nama_folder` varchar(200) DEFAULT NULL,
  `ormas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_galery`
--

CREATE TABLE `t_galery` (
  `id_galery` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `folder` int(11) DEFAULT NULL,
  `file` text,
  `tgl_entry` date DEFAULT NULL
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
  `jml_mhs_pelaksana` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_ormawa`
--

CREATE TABLE `t_ormawa` (
  `id_ormawa` int(11) NOT NULL,
  `nama_ormawa` text NOT NULL,
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

--
-- Dumping data for table `t_pertukaranpelajar`
--

INSERT INTO `t_pertukaranpelajar` (`id_perpel`, `nama_program`, `level`, `status`, `jml_mhs`, `periode`) VALUES
(1, 'asd', 'Nasional', 'SKS', 1, 0);

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
  `nama` varchar(200) DEFAULT NULL,
  `isi` text,
  `status` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_profil`
--

INSERT INTO `t_profil` (`id_profil`, `nama`, `isi`, `status`, `periode`) VALUES
(1, 'TENTANG PUSBINPRES', 'BLA BLA BLA ..... BLA BLA BLA', 1, 0),
(2, 'STRUKTUR ORGANISASI', 'BLA BLA BLA BLA ... BLA BLA BLA', 1, 0);

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
  `program` text,
  `produk` text,
  `link_sosmed` text,
  `jml_mhs` int(11) DEFAULT NULL,
  `jml_dosen` int(11) DEFAULT NULL,
  `luaran_kegiatan` text,
  `periode` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_projekindependen`
--

INSERT INTO `t_projekindependen` (`id_independen`, `program`, `produk`, `link_sosmed`, `jml_mhs`, `jml_dosen`, `luaran_kegiatan`, `periode`) VALUES
(1, '1', '1', '1', 1, 1, '1', 0);

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
  `ormas_id` int(11) NOT NULL,
  `periode` year(4) NOT NULL,
  `jenis` int(11) NOT NULL COMMENT '1=spesifik,2=kondisional bulan,3=kondisional semua',
  `agenda` text NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_regulasimhs`
--

CREATE TABLE `t_regulasimhs` (
  `id_regulasimhs` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `file` text,
  `status` int(11) DEFAULT NULL,
  `periode` int(4) NOT NULL,
  `tgl_entry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `link_sosmed` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rekognisi`
--

INSERT INTO `t_rekognisi` (`id_rekognisi`, `jenis`, `identitas`, `institusi`, `jml_mhs`, `jml_dosen`, `luaran_kegiatan`, `link_sosmed`) VALUES
(1, '1', '1', '1', 1, 1, '1', '1');

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
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`kd_user`, `username`, `password`, `nama`, `level`) VALUES
(33, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 1),
(34, 'bem', 'd3c654d99bdfaf101e012bfe2810679e', 'bem', 2),
(35, 'dpm', '49677814b41e9ff6cdc497c85472a4ac', 'DPM', 2),
(36, 'hima pspd', '31d828b1b3e8b94bcd4b1bb3cd68567d', 'HIMA PSPD', 2),
(37, 'hima psik', '0c726d2750e18a114ddce8dd0f018d4c', 'HIMA PSIK', 2),
(38, 'hima psikologi', '9afbe67b7305535ebfc998103c71ce7e', 'HIMA PSIKOLOGI', 2),
(39, 'hima kesmas', '71fe3431c58060add4f13cbbaee7a7f3', 'HIMA KESMAS', 2),
(40, 'arbor vitae', '14f9a8287e5c210d69307db88ede11b7', 'ARBOR VITAE', 2),
(41, 'ksi-asyifa', '5b3f862b902b6c5a7cf40e93c0c58891', 'KSI-ASYIFA', 2),
(43, 'tbm-cs', '100afac15f6a4ed52f7c238b2ed7e808', 'TBM-CS', 2),
(44, 'hipocampus', '2fb2fa43b21202a7a5cd058bb761ea5f', 'HIPOCAMPUS', 2),
(45, 'cimsa', 'ca89b7c959937c2bd09d7f99e6fbeac2', 'CIMSA', 2),
(46, 'medis', '68045a2d10a96ed788dbedf1b71895a9', 'MEDIS', 2),
(47, 'fsim', '82593e680c668a7ff2f4304a671ab8b2', 'FSIM', 2),
(48, 'mfc', '3800f845ae86a2e1a26be414d8cadd0f', 'MFC', 2),
(49, 'mub', 'daa551f036a22f6a1d9396b4d52ba522', 'MUB', 2),
(50, 'medicartes', 'c42e6a202ff9eca5191af43d629c8af5', 'MEDICARTES', 2),
(59, 'tensi', '8d6daab29063cc56717b284aa51c15fd', 'TENSI', 2);

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
  ADD PRIMARY KEY (`id_belanegara`);

--
-- Indexes for table `t_childormawa`
--
ALTER TABLE `t_childormawa`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  ADD PRIMARY KEY (`id_mengajar`);

--
-- Indexes for table `t_ormawa`
--
ALTER TABLE `t_ormawa`
  ADD PRIMARY KEY (`id_ormawa`),
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
-- Indexes for table `t_projekindependen`
--
ALTER TABLE `t_projekindependen`
  ADD PRIMARY KEY (`id_independen`);

--
-- Indexes for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  ADD PRIMARY KEY (`id_projekkemanusian`);

--
-- Indexes for table `t_proker`
--
ALTER TABLE `t_proker`
  ADD PRIMARY KEY (`id_proker`);

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
  MODIFY `id_belanegara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_childormawa`
--
ALTER TABLE `t_childormawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_fileluaran`
--
ALTER TABLE `t_fileluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `t_folder`
--
ALTER TABLE `t_folder`
  MODIFY `id_folder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_galery`
--
ALTER TABLE `t_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_mengajarsekolah`
--
ALTER TABLE `t_mengajarsekolah`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_ormawa`
--
ALTER TABLE `t_ormawa`
  MODIFY `id_ormawa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_penelitian`
--
ALTER TABLE `t_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pertukaranpelajar`
--
ALTER TABLE `t_pertukaranpelajar`
  MODIFY `id_perpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_praktikkerja`
--
ALTER TABLE `t_praktikkerja`
  MODIFY `id_praktikkerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_profil`
--
ALTER TABLE `t_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_projekdesa`
--
ALTER TABLE `t_projekdesa`
  MODIFY `id_projekdesa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_projekindependen`
--
ALTER TABLE `t_projekindependen`
  MODIFY `id_independen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_projekkemanusian`
--
ALTER TABLE `t_projekkemanusian`
  MODIFY `id_projekkemanusian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_proker`
--
ALTER TABLE `t_proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_regulasimhs`
--
ALTER TABLE `t_regulasimhs`
  MODIFY `id_regulasimhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_rekognisi`
--
ALTER TABLE `t_rekognisi`
  MODIFY `id_rekognisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `t_galery`
--
ALTER TABLE `t_galery`
  ADD CONSTRAINT `t_galery_ibfk_1` FOREIGN KEY (`folder`) REFERENCES `t_folder` (`id_folder`) ON DELETE CASCADE;

--
-- Constraints for table `t_ormawa`
--
ALTER TABLE `t_ormawa`
  ADD CONSTRAINT `t_ormawa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`kd_user`) ON DELETE CASCADE;
