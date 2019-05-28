-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 03:36 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_seminarapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_abstrak`
--

CREATE TABLE `tbl_abstrak` (
  `id_abstrak` int(11) NOT NULL,
  `id_peserta` varchar(20) NOT NULL,
  `id_subtema` int(11) NOT NULL,
  `id_komentar_abstrak` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `judul` text NOT NULL,
  `author` text NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `konten` text NOT NULL,
  `paper` varchar(200) NOT NULL,
  `keywords` text NOT NULL,
  `presenter` varchar(150) NOT NULL,
  `is_accept` enum('perbaikan','diterima','ditolak') DEFAULT NULL,
  `is_read` int(2) NOT NULL DEFAULT '0',
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_abstrak`
--

INSERT INTO `tbl_abstrak` (`id_abstrak`, `id_peserta`, `id_subtema`, `id_komentar_abstrak`, `type`, `judul`, `author`, `institusi`, `konten`, `paper`, `keywords`, `presenter`, `is_accept`, `is_read`, `tgl_update`) VALUES
(1, 'SN190405032935', 1, 0, '', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Universitas Negeri Makassar', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'Lorem Ipsum dolor.pdf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do', 'Irwan', 'ditolak', 1, '2019-04-29 03:40:25'),
(2, 'SN190409081752', 2, 0, '', 'LOREM ipsum asd', 'Aswar kasim, mawardi kudin, Muhammda Hisyam', 'UNM M', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum alias debitis accusamus? Laborum, perspiciatis modi! Deleniti, quas eveniet distinctio, incidunt, repellendus quod aut neque ipsa ab alias beatae quae.</p><p>&nbsp;</p><p>lorem upsum</p>', '', 'lorem ipsum dolor', 'Muhammad Hisyam Oke', 'perbaikan', 1, '2019-04-27 05:09:14'),
(4, 'SN190425055506', 1, 0, '', 'jkjkkjkj', 'kllklkllll', 'lklklljk', '<p>iijjijoo</p>', '', 'jjkjkk', 'jjjjk', 'diterima', 1, '2019-04-27 05:08:58'),
(5, 'SN190504084032', 4, 0, '', 'Learning Of Internet Of Things', 'Aswar kasim, mawardi kudin, Muhammda Hisyam', 'UNHAS', '<p><strong>Lorem</strong> ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit hic fugiat, magni nostrum cum itaque, optio, minus a iure consequatur veritatis amet doloribus labore id facilis commodi architecto sit.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit hic fugiat, magni nostrum cum itaque, optio, minus a iure consequatur veritatis amet doloribus labore id facilis commodi architecto sit.</p>', '', 'lorem ipsum dolor', 'Muhammad Hisyam', NULL, 0, '2019-05-04 14:57:19'),
(6, 'SN190524073808', 2, 0, '', 'asassad', 'Aswar kasim, mawardi kudin', 'UNM', '<p>makana</p>', '', 'lorem ipsum', 'Muhammad Hisyam', NULL, 0, '2019-05-24 05:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `icon`, `deskripsi`, `tgl_update`) VALUES
(2, 'Makan Siang', 'fa fa-food', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '0000-00-00 00:00:00'),
(6, 'dfagd', 'gdsgds', 'dsggd', '2019-03-15 06:53:54'),
(9, 'KMakan malam', 'fa fa-file', 'fassda', '2019-03-26 00:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_pendukung`
--

CREATE TABLE `tbl_file_pendukung` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `is_parent` varchar(50) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_file_pendukung`
--

INSERT INTO `tbl_file_pendukung` (`id_file`, `nama_file`, `is_parent`, `file`, `deskripsi`, `tgl_update`) VALUES
(19, 'Manual Acara', '0', '', '', '2019-05-04 00:57:04'),
(20, 'Jadwal Kegiatan', '19', 'mikaeil2018.pdf', '', '2019-05-04 00:35:07'),
(21, 'Paper', '0', NULL, '', '2019-05-04 00:57:07'),
(24, 'Petunjuk pelankasanaann', '19', 'JST_Review.docx', '', '2019-05-04 00:41:22'),
(25, 'Fliyer Seminar', '19', '26840879_182683535813500_4739663488918251063_o.jpg', '', '2019-05-04 00:42:17'),
(26, 'Administrasi', '0', NULL, '', '2019-05-04 00:57:11'),
(27, 'Surat Jalan', '26', 'Translate_Chapter_9.docx', '', '2019-05-04 00:48:21'),
(28, 'Surat Tugas', '26', '01-konsep-tatakelola.pdf', '', '2019-05-04 00:48:53'),
(29, 'Petunjuk', '19', '01-konsep-tatakelola1.pdf', '', '2019-05-04 00:50:19'),
(30, 'Template Paper', '21', '34743-ina.pdf', '', '2019-05-04 00:52:26'),
(31, 'Petunjuk', '21', 'BAB_II.pdf', '', '2019-05-04 00:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar_abstrak`
--

CREATE TABLE `tbl_komentar_abstrak` (
  `id_komentar_abstrak` int(11) NOT NULL,
  `id_abstrak` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar_abstrak`
--

INSERT INTO `tbl_komentar_abstrak` (`id_komentar_abstrak`, `id_abstrak`, `komentar`, `tgl_update`) VALUES
(1, 1, '', '2019-04-28 07:26:47'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, velit recusandae natus labore, molestias accusamus odio a nesciunt consequatur iusto enim voluptatem quisquam, commodi tempore ipsa delectus ipsam nihil nisi?\r\n', '2019-04-12 06:56:21'),
(3, 0, '', '2019-04-28 07:27:24'),
(4, 0, '', '2019-04-28 07:28:11'),
(5, 1, '<p>adsfsa</p>', '2019-04-28 07:29:39'),
(6, 1, '<p>afasf</p>', '2019-04-28 07:29:44'),
(7, 1, '<p>afas</p>', '2019-04-28 07:29:48'),
(8, 1, '<p>nbvbx</p><p>&nbsp;</p><p>sgnsdgksdg</p>', '2019-04-28 07:30:21'),
(9, 1, '<p>lorem ipsum dolor</p>', '2019-04-28 08:14:58'),
(10, 4, '<p>lorem ipsum</p><p>lorem ipsum</p>', '2019-04-28 08:16:36'),
(11, 4, '', '2019-04-28 08:17:44'),
(12, 4, '', '2019-04-28 08:19:45'),
(13, 4, '', '2019-04-28 08:20:03'),
(14, 1, '<p>ggjhv,knb,bn</p>', '2019-05-15 06:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar_paper`
--

CREATE TABLE `tbl_komentar_paper` (
  `id_komentar_paper` int(11) NOT NULL,
  `id_paper` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar_paper`
--

INSERT INTO `tbl_komentar_paper` (`id_komentar_paper`, `id_paper`, `komentar`, `tgl_update`) VALUES
(1, 1, '<p>sdfsdg</p>', '2019-04-29 03:33:45'),
(2, 1, '<p>adad</p>', '2019-04-29 03:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `map` text,
  `metatext` text,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `id_user`, `namaweb`, `tagline`, `deskripsi`, `keywords`, `email`, `website`, `logo`, `icon`, `facebook`, `twitter`, `instagram`, `map`, `metatext`, `telepon`, `alamat`, `tanggal_update`) VALUES
(1, 2, 'SApp', 'sad', 'lorem ipsumm', 'lorem ipsum', 'sad', 'https://SApp.com', 'Artboard_12@4x-8.png', 'Artboard_12@4x-81.png', 'https://SApp.com', 'https://SApp.com', 'https://SApp.com', 'fddsf', 'lorem ipsum', 'sadsad', 'Jl. Mallangkeri', '2019-03-08 08:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konfirmasi_pembayaran`
--

CREATE TABLE `tbl_konfirmasi_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_peserta` varchar(20) NOT NULL,
  `metode` enum('tunai','transfer') NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `dari_bank` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `destinasi_bank` varchar(100) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `bukti_pembayaran` varchar(300) NOT NULL,
  `keterangan` text NOT NULL,
  `status_pembayaran` enum('valid','non-valid','proses') NOT NULL,
  `is_read` int(2) NOT NULL DEFAULT '0',
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konfirmasi_pembayaran`
--

INSERT INTO `tbl_konfirmasi_pembayaran` (`id_pembayaran`, `id_peserta`, `metode`, `tgl_pembayaran`, `dari_bank`, `no_rekening`, `nama_rekening`, `destinasi_bank`, `jumlah_bayar`, `bukti_pembayaran`, `keterangan`, `status_pembayaran`, `is_read`, `tgl_update`) VALUES
(1, 'SN190405032935', 'tunai', '2019-03-15', 'BRI', '53424322', 'ASAA', 'BCA', 42222164, '21ad17fcc08afaf577badc34c2f89095.png', 'xvcxv', 'proses', 1, '2019-05-27 03:19:51'),
(3, 'SN190409081752', 'transfer', '2019-05-25', 'BNI', '051213251122', 'ASSA', '', 1200000, 'alphabet-bright-business-256502.jpg', '', 'valid', 1, '2019-05-04 06:36:39'),
(4, 'SN190524073808', 'transfer', '2019-05-26', 'BNI', '02151212151515', 'Aswar Kasim', '', 20000000, 'logo_tahfiz_wb2.png', 'adsaf', 'proses', 0, '2019-05-27 03:08:28'),
(5, 'SN190425040728', 'transfer', '2019-05-17', 'BNI', '02151212151515', 'ahadunahad', '', 20000000, 'WhatsApp_Image_2018-07-23_at_4_46_55_AM.jpeg', '', 'proses', 0, '2019-05-27 03:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paper`
--

CREATE TABLE `tbl_paper` (
  `id_paper` int(11) NOT NULL,
  `id_peserta` varchar(20) NOT NULL,
  `id_subtema` int(11) NOT NULL,
  `id_abstrak` int(11) NOT NULL,
  `id_komentar_paper` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `is_accept` enum('perbaikan','diterima','ditolak') DEFAULT NULL,
  `is_read` int(11) DEFAULT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paper`
--

INSERT INTO `tbl_paper` (`id_paper`, `id_peserta`, `id_subtema`, `id_abstrak`, `id_komentar_paper`, `file`, `keterangan`, `is_accept`, `is_read`, `tgl_update`) VALUES
(1, 'SN190405032935', 1, 1, 0, '2__KHUSUS_KE_BIROKRASI_PROJEK_PROPOSAL_TERAMPIL_2018.docx', 'zczc', 'diterima', 1, '2019-05-27 03:12:23'),
(2, 'SN190409081752', 0, 2, 0, '16704-1-31572-2-10-20170711.pdf', 'asd', NULL, NULL, '2019-04-22 14:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_abstrak` int(11) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` varchar(20) NOT NULL,
  `nama_no_title` varchar(100) NOT NULL,
  `nama_with_title` varchar(255) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `partisipan` enum('presenter','peserta_s1','peserta_s2') NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `nama_no_title`, `nama_with_title`, `gender`, `telp`, `alamat`, `institusi`, `partisipan`, `fax`, `email`, `password`) VALUES
('SN190405032935', 'Aswar Kasim', 'Dr. Aswar Kasim, S.Pd. A.C.A.', 'laki-laki', '31213212', 'Jl. dsadasa', 'UNM', 'presenter', '123213132', 'cakikarossa@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190409081752', 'Muhammad Hisyam', 'Muhammad Hisyam, S.Ag.i', 'laki-laki', '213212212', 'Jl. adsadad', 'UNMM', 'presenter', '53231', 'has@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190425040728', 'Mawardi Kudin', 'Mawardi Kudin, Sc. M.Sc.', 'laki-laki', '321312', 'afsa', 'UNM', 'peserta_s1', '53231', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('SN190425055506', 'Mustari', 'Dr. Mustari', 'laki-laki', '0854432222', '-', 'UNM', 'peserta_s2', '-', 'mustarilamada@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('SN190503035309', 'Muhammad Irwan', 'Muhammad Irwan, S.Pd.', 'laki-laki', '0854432222', '-', 'UNM', 'peserta_s1', '53231', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('SN190504084032', 'Ikram Anas', 'Ikram Anas, S.Pd. S.Si', 'laki-laki', '321312', '-', 'UNM', 'presenter', '53231', 'ikram@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190524073808', 'Mhdsjhf', 'Dr. dsf, S.Pd. A.C.A.', 'laki-laki', '098363636', 'fdsfsda', 'UNM', 'presenter', '53231', 'mwrd@gmail.com', '1fd5cd9766249f170035b7251e2c6b61');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing`
--

CREATE TABLE `tbl_pricing` (
  `id_pricing` int(11) NOT NULL,
  `nama_pricing` varchar(100) NOT NULL,
  `pricing` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pricing`
--

INSERT INTO `tbl_pricing` (`id_pricing`, `nama_pricing`, `pricing`, `deskripsi`, `tgl_update`) VALUES
(1, 'Presenter', 500000, '', '2019-03-27 05:38:25'),
(2, 'Peserta S1', 75000, '', '2019-03-27 05:38:25'),
(3, 'Peserta S1/S2', 150000, '', '2019-03-27 05:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_rekening`, `nama_bank`, `no_rekening`, `negara`, `tgl_update`) VALUES
(1, 'Aswar Kasim', 'BTN', '511512213121', 'Indonesia', '2019-04-01 00:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relat`
--

CREATE TABLE `tbl_relat` (
  `id_relat` int(11) NOT NULL,
  `nama_relat` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `type` enum('organized','sponsor','media_partner') NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_relat`
--

INSERT INTO `tbl_relat` (`id_relat`, `nama_relat`, `logo`, `type`, `tgl_update`) VALUES
(1, 'PT. Hadji Kallas dfg', 'Artboard_2.png', 'organized', '2019-04-04 02:55:08'),
(3, 'Pondok Informatika', 'LOGO_PONDOK_INFORMATIKA_BIRU.png', 'organized', '2019-04-04 02:55:31'),
(4, 'IT KAF', 'Artboard_x1_copy_3@4x.png', 'organized', '2019-04-04 02:57:57'),
(5, 'Ramadhan', 'Artboard_1_copy_4@4x.png', 'media_partner', '2019-04-04 02:58:22'),
(6, 'Coffe', 'Artboard_21.png', 'sponsor', '2019-04-04 02:59:10'),
(7, 'Ark Dev', '2.png', 'organized', '2019-04-04 02:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviewer`
--

CREATE TABLE `tbl_reviewer` (
  `id_reviewer` int(11) NOT NULL,
  `nama_reviewer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_aktif` int(2) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reviewer`
--

INSERT INTO `tbl_reviewer` (`id_reviewer`, `nama_reviewer`, `email`, `password`, `is_aktif`, `tgl_update`) VALUES
(2, 'Aswar kasim', 'aswarkasim@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-04-07 09:21:12'),
(3, 'rev', 'rev@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-04-27 05:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seminar`
--

CREATE TABLE `tbl_seminar` (
  `id_seminar` int(11) NOT NULL,
  `nama_seminar` varchar(50) NOT NULL,
  `tema_seminar` text NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(300) NOT NULL,
  `gmap` text NOT NULL,
  `deskripsi_seminar` text NOT NULL,
  `banner` varchar(200) NOT NULL,
  `cp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_pendaftaran` int(2) NOT NULL,
  `is_submit_abstrak` int(2) NOT NULL,
  `is_submit_paper` int(2) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seminar`
--

INSERT INTO `tbl_seminar` (`id_seminar`, `nama_seminar`, `tema_seminar`, `tanggal`, `jam`, `tempat`, `gmap`, `deskripsi_seminar`, `banner`, `cp`, `email`, `is_pendaftaran`, `is_submit_abstrak`, `is_submit_paper`, `tanggal_update`) VALUES
(1, 'Seminar Nasional sd asdfas', 'Merajut Asa dengan Internet of Things di Era 4.0 asdas', '2019-07-19', '09:00:00', 'Phinisi UNM, Jl. A. P. Pettarani No 40', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3973.5978503863416!2d119.43300151536218!3d-5.168208553635411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1554356692997!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. vcbcbc\r\n  sdfdsfds', 'IMG_9965.JPG', '331331', 'aswarkasim@gmail.com', 1, 1, 1, '2019-05-04 14:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_speaker`
--

CREATE TABLE `tbl_speaker` (
  `id_speaker` int(11) NOT NULL,
  `nama_speaker` varchar(200) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis_speaker` enum('1','2') NOT NULL,
  `foto` varchar(300) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_speaker`
--

INSERT INTO `tbl_speaker` (`id_speaker`, `nama_speaker`, `institusi`, `deskripsi`, `jenis_speaker`, `foto`, `tgl_update`) VALUES
(5, 'Nur Darmawansyah', 'UNMM', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque hic, nisi repellat sed labore voluptatum est aspernatur officiis, tenetur adipisci doloremque illum possimus quas. Suscipit, aspernatur laboriosam. Ex, esse eligendi.\r\n', '2', 'IMG_9857.JPG', '2019-04-04 03:12:39'),
(6, 'Aswar Kasim', 'UNM', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque hic, nisi repellat sed labore voluptatum est aspernatur officiis, tenetur adipisci doloremque illum possimus quas. Suscipit, aspernatur laboriosam. Ex, esse eligendi.\r\n', '1', 'IMG_9953.JPG', '2019-04-04 03:10:33'),
(7, 'Mawardi kudin', 'UNM', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque hic, nisi repellat sed labore voluptatum est aspernatur officiis, tenetur adipisci doloremque illum possimus quas. Suscipit, aspernatur laboriosam. Ex, esse eligendi.\r\n', '1', 'IMG_9913.JPG', '2019-04-04 03:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subtema`
--

CREATE TABLE `tbl_subtema` (
  `id_subtema` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL,
  `subtema` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subtema`
--

INSERT INTO `tbl_subtema` (`id_subtema`, `id_reviewer`, `subtema`, `deskripsi`, `icon`, `tgl_update`) VALUES
(1, 2, 'Machine Learning', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore eligendi amet expedita porro, in corrupti nihil et, deleniti necessitatibus numquam, officia qui ex sed! Repellendus necessitatibus numquam expedita dolorum eius.\r\n', 'fa fa-language', '2019-04-27 06:07:07'),
(2, 2, 'Blended Learning Burn', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore eligendi amet expedita porro, in corrupti nihil et, deleniti necessitatibus numquam, officia qui ex sed! Repellendus necessitatibus numquam expedita dolorum eius.\r\n', 'fa fa-cogs', '2019-05-04 00:09:28'),
(4, 3, 'Internet Learning', '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore eligendi amet expedita porro, in corrupti nihil et, deleniti necessitatibus numquam, officia qui ex sed! Repellendus necessitatibus numquam expedita dolorum eius.\r\n', 'fa fa-file', '2019-04-27 06:41:29'),
(5, 3, 'Extream Learning', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure praesentium nisi id omnis! Totam cupiditate ipsa quidem laudantium, exercitationem, quae adipisci nemo, perferendis expedita amet numquam doloribus fugiat quos blanditiis.\r\n', 'fa fa-calendar', '2019-05-03 23:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggal_penting`
--

CREATE TABLE `tbl_tanggal_penting` (
  `id_tgl_penting` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tanggal_penting`
--

INSERT INTO `tbl_tanggal_penting` (`id_tgl_penting`, `deskripsi`, `tanggal`, `tgl_update`) VALUES
(1, 'Upload Paper', '2019-03-14', '0000-00-00 00:00:00'),
(2, 'Batas Upload Paper ', '2019-03-30', '2019-04-02 12:39:52'),
(3, 'Batas Upload Paper ', '0000-00-00', '2019-04-02 12:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` enum('Super Admin','Admin','Reviewer','') NOT NULL,
  `status` enum('Aktif','Non Aktif') NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `status`, `foto`, `keterangan`, `tanggal`) VALUES
(6, 'admin', 'admin@mail.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'Aktif', NULL, NULL, '2019-03-27 20:18:05'),
(7, 'assa', 'aswarkasim@gmail.com', 'assa', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'Aktif', NULL, NULL, '2019-03-28 07:18:34'),
(9, 'Reviewer', 'rev@gmail.com', 'reviewer', '5f4dcc3b5aa765d61d8327deb882cf99', 'Reviewer', 'Aktif', NULL, NULL, '2019-04-01 06:31:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_abstrak`
--
ALTER TABLE `tbl_abstrak`
  ADD PRIMARY KEY (`id_abstrak`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_file_pendukung`
--
ALTER TABLE `tbl_file_pendukung`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_komentar_abstrak`
--
ALTER TABLE `tbl_komentar_abstrak`
  ADD PRIMARY KEY (`id_komentar_abstrak`);

--
-- Indexes for table `tbl_komentar_paper`
--
ALTER TABLE `tbl_komentar_paper`
  ADD PRIMARY KEY (`id_komentar_paper`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_konfirmasi_pembayaran`
--
ALTER TABLE `tbl_konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_paper`
--
ALTER TABLE `tbl_paper`
  ADD PRIMARY KEY (`id_paper`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  ADD PRIMARY KEY (`id_pricing`);

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `tbl_relat`
--
ALTER TABLE `tbl_relat`
  ADD PRIMARY KEY (`id_relat`);

--
-- Indexes for table `tbl_reviewer`
--
ALTER TABLE `tbl_reviewer`
  ADD PRIMARY KEY (`id_reviewer`);

--
-- Indexes for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `tbl_speaker`
--
ALTER TABLE `tbl_speaker`
  ADD PRIMARY KEY (`id_speaker`);

--
-- Indexes for table `tbl_subtema`
--
ALTER TABLE `tbl_subtema`
  ADD PRIMARY KEY (`id_subtema`);

--
-- Indexes for table `tbl_tanggal_penting`
--
ALTER TABLE `tbl_tanggal_penting`
  ADD PRIMARY KEY (`id_tgl_penting`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_abstrak`
--
ALTER TABLE `tbl_abstrak`
  MODIFY `id_abstrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_file_pendukung`
--
ALTER TABLE `tbl_file_pendukung`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_komentar_abstrak`
--
ALTER TABLE `tbl_komentar_abstrak`
  MODIFY `id_komentar_abstrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_komentar_paper`
--
ALTER TABLE `tbl_komentar_paper`
  MODIFY `id_komentar_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_konfirmasi_pembayaran`
--
ALTER TABLE `tbl_konfirmasi_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_paper`
--
ALTER TABLE `tbl_paper`
  MODIFY `id_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pricing`
--
ALTER TABLE `tbl_pricing`
  MODIFY `id_pricing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_relat`
--
ALTER TABLE `tbl_relat`
  MODIFY `id_relat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_reviewer`
--
ALTER TABLE `tbl_reviewer`
  MODIFY `id_reviewer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_speaker`
--
ALTER TABLE `tbl_speaker`
  MODIFY `id_speaker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_subtema`
--
ALTER TABLE `tbl_subtema`
  MODIFY `id_subtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tanggal_penting`
--
ALTER TABLE `tbl_tanggal_penting`
  MODIFY `id_tgl_penting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
