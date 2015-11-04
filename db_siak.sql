-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2015 at 02:56 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE IF NOT EXISTS `tb_kontak` (
  `id` int(11) unsigned NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `is_dibalas` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `nama`, `email`, `judul`, `isi`, `is_dibalas`, `created_at`, `update_at`) VALUES
(1, 'hanif', 'mohammadhanifahnurshafrudin@gmail.com', 'halo', 'ini tester', '1', '2015-10-23 04:32:25', '2015-11-03 09:01:17'),
(2, 'firza', 'firza@yahoo.com', 'firza ', 'ini test', '0', '2015-10-27 08:41:22', '2015-10-27 08:41:22'),
(3, 'hanif', 'mohammadhanifahnurshafrudin@gmail.com', 'kadal', 'kadalmonitor', '0', '2015-11-03 09:00:30', '2015-11-03 09:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tb_pengumuman` (
  `id` smallint(4) unsigned NOT NULL,
  `judul` varchar(64) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id` smallint(4) unsigned NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` char(8) NOT NULL,
  `password` char(8) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nama_panggilan` varchar(32) NOT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `agama` enum('0','1','2','3','4','5','6') DEFAULT NULL,
  `ket_agama` varchar(32) DEFAULT NULL,
  `tempat_lahir` varchar(32) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `berat_badan` varchar(3) DEFAULT NULL,
  `tinggi_badan` varchar(3) DEFAULT NULL,
  `golongan_darah` enum('O','AB','B','A') DEFAULT NULL,
  `status_anak` enum('0','1') DEFAULT NULL,
  `anak_ke` varchar(2) DEFAULT NULL,
  `jumlah_saudara` varchar(2) DEFAULT NULL,
  `tmp_tinggal_dengan` enum('0','1','2','3','4') DEFAULT NULL,
  `tmp_ket_tinggal_dengan` varchar(32) DEFAULT NULL,
  `tmp_alamat` varchar(255) DEFAULT NULL,
  `tmp_telepon` varchar(16) DEFAULT NULL,
  `tmp_jarak_sekolah` varchar(2) DEFAULT NULL,
  `tmp_kendaraan` enum('0','1','2','3','4') DEFAULT NULL,
  `ort_nama_ayah` varchar(64) DEFAULT NULL,
  `ort_pekerjaan_ayah` enum('0','1','2','3','4','5','6','7') DEFAULT NULL,
  `ort_ket_pekerjaan_ayah` varchar(32) DEFAULT NULL,
  `ort_nama_ibu` varchar(64) DEFAULT NULL,
  `ort_pekerjaan_ibu` enum('0','1','2','3','4','5','6','7','8') DEFAULT NULL,
  `ort_ket_pekerjaan_ibu` varchar(32) DEFAULT NULL,
  `ort_alamat` varchar(255) DEFAULT NULL,
  `ort_telepon` varchar(16) DEFAULT NULL,
  `ort_penghasilan` varchar(12) DEFAULT NULL,
  `ska_nama` varchar(64) DEFAULT NULL,
  `ska_status` enum('0','1') DEFAULT NULL,
  `ska_alamat` varchar(255) DEFAULT NULL,
  `ska_telepon` varchar(16) DEFAULT NULL,
  `ska_kelas` varchar(32) DEFAULT NULL,
  `ska_no_ijazah` varchar(32) DEFAULT NULL,
  `nil_bin_1` float(2,1) DEFAULT NULL,
  `nil_bin_2` float(2,1) DEFAULT NULL,
  `nil_bin_3` float(2,1) DEFAULT NULL,
  `nil_bin_4` float(2,1) DEFAULT NULL,
  `nil_bin_5` float(2,1) DEFAULT NULL,
  `nil_bin_akhir` float(2,1) DEFAULT NULL,
  `nil_bing_1` float(2,1) DEFAULT NULL,
  `nil_bing_2` float(2,1) DEFAULT NULL,
  `nil_bing_3` float(2,1) DEFAULT NULL,
  `nil_bing_4` float(2,1) DEFAULT NULL,
  `nil_bing_5` float(2,1) DEFAULT NULL,
  `nil_bing_akhir` float(2,1) DEFAULT NULL,
  `nil_mat_1` float(2,1) DEFAULT NULL,
  `nil_mat_2` float(2,1) DEFAULT NULL,
  `nil_mat_3` float(2,1) DEFAULT NULL,
  `nil_mat_4` float(2,1) DEFAULT NULL,
  `nil_mat_5` float(2,1) DEFAULT NULL,
  `nil_mat_akhir` float(2,1) DEFAULT NULL,
  `nil_web_1` float(2,1) DEFAULT NULL,
  `nil_web_2` float(2,1) DEFAULT NULL,
  `nil_web_3` float(2,1) DEFAULT NULL,
  `nil_web_4` float(2,1) DEFAULT NULL,
  `nil_web_5` float(2,1) DEFAULT NULL,
  `nil_web_akhir` float(2,1) DEFAULT NULL,
  `nil_seni_1` float(2,1) DEFAULT NULL,
  `nil_seni_2` float(2,1) DEFAULT NULL,
  `nil_seni_3` float(2,1) DEFAULT NULL,
  `nil_seni_4` float(2,1) DEFAULT NULL,
  `nil_seni_5` float(2,1) DEFAULT NULL,
  `nil_seni_akhir` float(2,1) DEFAULT NULL,
  `nil_data_1` float(2,1) DEFAULT NULL,
  `nil_data_2` float(2,1) DEFAULT NULL,
  `nil_data_3` float(2,1) DEFAULT NULL,
  `nil_data_4` float(2,1) DEFAULT NULL,
  `nil_data_5` float(2,1) DEFAULT NULL,
  `nil_data_akhir` float(2,1) DEFAULT NULL,
  `status_biodata` enum('0','1') NOT NULL DEFAULT '0',
  `status_pendaftaran` enum('1','0') NOT NULL,
  `status_verifikasi` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `scalar` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `email`, `username`, `password`, `nisn`, `nama`, `nama_panggilan`, `jenis_kelamin`, `agama`, `ket_agama`, `tempat_lahir`, `tanggal_lahir`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `status_anak`, `anak_ke`, `jumlah_saudara`, `tmp_tinggal_dengan`, `tmp_ket_tinggal_dengan`, `tmp_alamat`, `tmp_telepon`, `tmp_jarak_sekolah`, `tmp_kendaraan`, `ort_nama_ayah`, `ort_pekerjaan_ayah`, `ort_ket_pekerjaan_ayah`, `ort_nama_ibu`, `ort_pekerjaan_ibu`, `ort_ket_pekerjaan_ibu`, `ort_alamat`, `ort_telepon`, `ort_penghasilan`, `ska_nama`, `ska_status`, `ska_alamat`, `ska_telepon`, `ska_kelas`, `ska_no_ijazah`, `nil_bin_1`, `nil_bin_2`, `nil_bin_3`, `nil_bin_4`, `nil_bin_5`, `nil_bin_akhir`, `nil_bing_1`, `nil_bing_2`, `nil_bing_3`, `nil_bing_4`, `nil_bing_5`, `nil_bing_akhir`, `nil_mat_1`, `nil_mat_2`, `nil_mat_3`, `nil_mat_4`, `nil_mat_5`, `nil_mat_akhir`, `nil_web_1`, `nil_web_2`, `nil_web_3`, `nil_web_4`, `nil_web_5`, `nil_web_akhir`, `nil_seni_1`, `nil_seni_2`, `nil_seni_3`, `nil_seni_4`, `nil_seni_5`, `nil_seni_akhir`, `nil_data_1`, `nil_data_2`, `nil_data_3`, `nil_data_4`, `nil_data_5`, `nil_data_akhir`, `status_biodata`, `status_pendaftaran`, `status_verifikasi`, `created_at`, `update_at`, `scalar`) VALUES
(1, 'fuzetsu_soul@yahoo.com', '5smYcDAg', 'XizS6PPe', '1234567891', 'rudi', 'rudic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '1', '2015-10-21 13:11:17', '2015-10-25 17:39:12', NULL),
(2, 'soulcabal@gmail.com', 'xPokSdq9', 'C8ICV58o', '1234567894', 'rudii', 'hanif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, 3.0, 3.0, 3.0, 3.0, 3.0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '1', '2015-10-21 13:29:37', '2015-10-27 08:43:50', NULL),
(3, 'mohammadhanifahnurshafrudin@gmail.com', 'hanifah', '120262', '1332532523', 'rudisa', 'hanifcsa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '0', '2015-10-21 14:12:29', '2015-10-21 14:12:29', NULL),
(4, 'tyaayya@yahoo.com', 'test', 'test', '1232131231', 'tya', 'tya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '0', '2015-10-21 15:06:36', '2015-10-21 15:06:36', NULL),
(5, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '0', '2015-10-25 17:17:53', '2015-10-25 17:17:53', NULL),
(6, 'wow@wow@gmail.com', 'firza', 'kadalmon', '1231231231', 'firza', 'firza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '0', '2015-11-03 09:39:26', '2015-11-03 09:39:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` tinyint(2) unsigned NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` enum('operator','administrator') NOT NULL DEFAULT 'operator',
  `is_blokir` enum('0','1') NOT NULL DEFAULT '0',
  `update_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `is_blokir`, `update_at`, `created_at`) VALUES
(3, 'hanif', '72e74f574535bdc82cf4b99f8fc064e1', 'Hanif', 'administrator', '0', '2015-10-25 12:12:32', '2015-10-25 12:12:32'),
(4, 'deathghost', '2bcea5a6a070e8fd7980a9e2a340ed85', 'Haniiiif', 'administrator', '0', '2015-10-25 14:51:01', '2015-10-25 12:16:03'),
(5, 'boringboy', 'f21e1784d6bf777b43b7c796d9d195d8', 'boringboy', 'operator', '0', '2015-10-25 12:18:58', '2015-10-25 12:18:58'),
(6, 'hanifah', '81dc9bdb52d04dc20036dbd8313ed055', 'hanifah', 'operator', '0', '2015-10-25 12:36:19', '2015-10-25 12:36:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
