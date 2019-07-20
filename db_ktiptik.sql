-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2019 pada 09.16
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ktiptik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_abstrak`
--

CREATE TABLE `tbl_abstrak` (
  `id_abstrak` int(11) NOT NULL,
  `id_peserta` varchar(20) NOT NULL,
  `id_subtema` int(11) NOT NULL,
  `id_komentar_abstrak` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `judul` text NOT NULL,
  `konten` text NOT NULL,
  `paper` varchar(200) NOT NULL,
  `keywords` text NOT NULL,
  `is_accept` enum('perbaikan','diterima','ditolak') DEFAULT NULL,
  `is_read` int(2) NOT NULL DEFAULT '0',
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_abstrak`
--

INSERT INTO `tbl_abstrak` (`id_abstrak`, `id_peserta`, `id_subtema`, `id_komentar_abstrak`, `type`, `judul`, `konten`, `paper`, `keywords`, `is_accept`, `is_read`, `tgl_update`) VALUES
(1, 'SN190405032935', 1, 0, '', 'Lorem ipsum dolor sit amet', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'Lorem Ipsum dolor.pdf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do', 'ditolak', 1, '2019-04-29 03:40:25'),
(2, 'SN190409081752', 2, 0, '', 'LOREM ipsum asd', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum alias debitis accusamus? Laborum, perspiciatis modi! Deleniti, quas eveniet distinctio, incidunt, repellendus quod aut neque ipsa ab alias beatae quae.</p><p>&nbsp;</p><p>lorem upsum</p>', '', 'lorem ipsum dolor', 'perbaikan', 1, '2019-04-27 05:09:14'),
(4, 'SN190425055506', 1, 0, '', 'jkjkkjkj', '<p>iijjijoo</p>', '', 'jjkjkk', 'diterima', 1, '2019-04-27 05:08:58'),
(5, 'SN190504084032', 4, 0, '', 'Learning Of Internet Of Things', '<p><strong>Lorem</strong> ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit hic fugiat, magni nostrum cum itaque, optio, minus a iure consequatur veritatis amet doloribus labore id facilis commodi architecto sit.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit hic fugiat, magni nostrum cum itaque, optio, minus a iure consequatur veritatis amet doloribus labore id facilis commodi architecto sit.</p>', '', 'lorem ipsum dolor', 'diterima', 1, '2019-07-12 06:39:05'),
(6, 'SN190524073808', 2, 0, '', 'asassad', '<p>makana</p>', '', 'lorem ipsum', 'diterima', 1, '2019-05-29 01:46:36'),
(7, 'SN190529032911', 2, 0, '', 'Lorem Ipsum Dolor Sit Amet', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi a eos tempore in numquam, officia aperiam. Soluta, saepe deleniti, asperiores nisi reprehenderit consequuntur dolorum dolor facere eos assumenda, libero ex!&nbsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi a eos tempore in numquam, officia aperiam. Soluta, saepe deleniti, asperiores nisi reprehenderit consequuntur dolorum dolor facere eos assumenda, libero ex!&nbsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi a eos tempore in numquam, officia aperiam. Soluta, saepe deleniti, asperiores nisi reprehenderit consequuntur dolorum dolor facere eos assumenda, libero ex!&nbsp;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi a eos tempore in numquam, officia aperiam. Soluta, saepe deleniti, asperiores nisi reprehenderit consequuntur dolorum dolor facere eos assumenda, libero ex!</p>', '', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi a eos tempore in numquam, officia aperiam. Soluta, saepe deleniti, ', 'diterima', 1, '2019-05-29 01:46:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file_pendukung`
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
-- Dumping data untuk tabel `tbl_file_pendukung`
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
(31, 'Petunjuk', '21', 'BAB_II.pdf', '', '2019-05-04 00:52:48'),
(32, 'NAMA', '19', NULL, '', '2019-07-12 06:36:49'),
(33, 'Nama', '0', NULL, '', '2019-07-12 06:37:16'),
(34, 'Aswar', '33', NULL, '', '2019-07-12 06:37:33'),
(35, 'Format KTI', '0', NULL, '', '2019-07-15 05:56:40'),
(36, 'ini mi', '35', 'Translate_Chapter_2.docx', '', '2019-07-15 05:57:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar_abstrak`
--

CREATE TABLE `tbl_komentar_abstrak` (
  `id_komentar_abstrak` int(11) NOT NULL,
  `id_abstrak` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar_abstrak`
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
(14, 1, '<p>ggjhv,knb,bn</p>', '2019-05-15 06:24:31'),
(15, 8, '<p>lorem ipsum</p>', '2019-07-20 02:54:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar_paper`
--

CREATE TABLE `tbl_komentar_paper` (
  `id_komentar_paper` int(11) NOT NULL,
  `id_paper` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar_paper`
--

INSERT INTO `tbl_komentar_paper` (`id_komentar_paper`, `id_paper`, `komentar`, `tgl_update`) VALUES
(1, 1, '<p>sdfsdg</p>', '2019-04-29 03:33:45'),
(2, 1, '<p>adad</p>', '2019-04-29 03:33:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
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
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `id_user`, `namaweb`, `tagline`, `deskripsi`, `keywords`, `email`, `website`, `logo`, `icon`, `facebook`, `twitter`, `instagram`, `map`, `metatext`, `telepon`, `alamat`, `tanggal_update`) VALUES
(1, 2, 'SApp', 'sad', 'lorem ipsumm', 'lorem ipsum', 'sad', 'https://SApp.com', 'svg.svg', 'Artboard_12@4x-81.png', 'https://SApp.com', 'https://SApp.com', 'https://SApp.com', 'fddsf', 'lorem ipsum', 'sadsad', 'Jl. Mallangkeri', '2019-07-20 06:40:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfirmasi_pembayaran`
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
-- Dumping data untuk tabel `tbl_konfirmasi_pembayaran`
--

INSERT INTO `tbl_konfirmasi_pembayaran` (`id_pembayaran`, `id_peserta`, `metode`, `tgl_pembayaran`, `dari_bank`, `no_rekening`, `nama_rekening`, `destinasi_bank`, `jumlah_bayar`, `bukti_pembayaran`, `keterangan`, `status_pembayaran`, `is_read`, `tgl_update`) VALUES
(1, 'SN190405032935', 'tunai', '2019-03-15', 'BRI', '53424322', 'ASAA', 'BCA', 42222164, '21ad17fcc08afaf577badc34c2f89095.png', 'xvcxv', 'valid', 1, '2019-06-13 02:56:15'),
(3, 'SN190409081752', 'transfer', '2019-05-25', 'BNI', '051213251122', 'ASSA', '', 1200000, 'alphabet-bright-business-256502.jpg', '', 'proses', 1, '2019-07-15 05:53:33'),
(4, 'SN190524073808', 'transfer', '2019-05-26', 'BNI', '02151212151515', 'Aswar Kasim', '', 20000000, 'logo_tahfiz_wb2.png', 'adsaf', 'valid', 1, '2019-07-20 03:25:30'),
(5, 'SN190425040728', 'transfer', '2019-05-17', 'BNI', '02151212151515', 'ahadunahad', '', 20000000, 'WhatsApp_Image_2018-07-23_at_4_46_55_AM.jpeg', '', 'valid', 1, '2019-07-20 03:25:45'),
(6, 'SN190529032911', 'transfer', '2019-05-29', 'BNI', '02151212151515', 'Ikram Anas', '', 20000000, 'photo_2018-12-25_07-06-161.jpg', '', '', 1, '2019-06-13 02:55:30'),
(7, 'SN190720042238', 'tunai', '2019-07-17', 'SDA', '423432423432', 'ASDDAD', '', 199999, 'image_2019-04-09_06-49-51.png', '', 'proses', 0, '2019-07-20 02:38:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paper`
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
-- Dumping data untuk tabel `tbl_paper`
--

INSERT INTO `tbl_paper` (`id_paper`, `id_peserta`, `id_subtema`, `id_abstrak`, `id_komentar_paper`, `file`, `keterangan`, `is_accept`, `is_read`, `tgl_update`) VALUES
(1, 'SN190405032935', 1, 1, 0, '01-konsep-tatakelola.pdf', 'zczc', 'diterima', 1, '2019-07-20 07:09:08'),
(2, 'SN190409081752', 0, 2, 0, '01-konsep-tatakelola1.pdf', 'asd', NULL, NULL, '2019-07-20 07:09:17'),
(3, 'SN190529032911', 1, 7, 0, '01-konsep-tatakelola1.pdf', 'asvsav', NULL, NULL, '2019-07-20 07:09:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `id_peserta` varchar(20) NOT NULL,
  `nama_no_title` varchar(100) NOT NULL,
  `gender` enum('laki-laki','perempuan') NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`id_peserta`, `nama_no_title`, `gender`, `telp`, `alamat`, `institusi`, `email`, `password`) VALUES
('SN190405032935', 'Aswar Kasim', 'laki-laki', '31213212', 'Jl. dsadasa', 'UNM', 'cakikarossa@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190409081752', 'Muhammad Hisyam', 'laki-laki', '213212212', 'Jl. adsadad', 'UNMM', 'has@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190425040728', 'Mawardi Kudin', 'laki-laki', '321312', 'afsa', 'UNM', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('SN190425055506', 'Mustari', 'laki-laki', '0854432222', '-', 'UNM', 'mustarilamada@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
('SN190503035309', 'Muhammad Irwan', 'laki-laki', '0854432222', '-', 'UNM', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('SN190504084032', 'Ikram Anas', 'laki-laki', '321312', '-', 'UNM', 'ikram@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190524073808', 'Mhdsjhf', 'laki-laki', '098363636', 'fdsfsda', 'UNM', 'mwrd@gmail.com', '1fd5cd9766249f170035b7251e2c6b61'),
('SN190529032911', 'Ikram Anas', '', '082348635212', 'Jalan Perintis Kemerdekaan 7 Km.10', 'unm', 'ikam@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
('SN190720042238', 'Nur Darmansyah', '', '02111515', 'jl. Mallaangkeri no. 20', 'UNM', 'nurdarmawansyah@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekening`
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
-- Dumping data untuk tabel `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_rekening`, `nama_bank`, `no_rekening`, `negara`, `tgl_update`) VALUES
(1, 'Aswar Kasim', 'BTN', '511512213121', 'Indonesia', '2019-04-01 00:49:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reviewer`
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
-- Dumping data untuk tabel `tbl_reviewer`
--

INSERT INTO `tbl_reviewer` (`id_reviewer`, `nama_reviewer`, `email`, `password`, `is_aktif`, `tgl_update`) VALUES
(2, 'Aswar kasim', 'aswarkasim@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-04-07 09:21:12'),
(3, 'rev', 'rev@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-04-27 05:35:01'),
(4, 'reviewer1', 'reviewer1@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-07-12 06:59:22'),
(5, 'reviewer2', 'reviewer2@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-07-12 06:59:44'),
(6, 'azizah', 'azizah@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2019-07-15 06:58:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_seminar`
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
-- Dumping data untuk tabel `tbl_seminar`
--

INSERT INTO `tbl_seminar` (`id_seminar`, `nama_seminar`, `tema_seminar`, `tanggal`, `jam`, `tempat`, `gmap`, `deskripsi_seminar`, `banner`, `cp`, `email`, `is_pendaftaran`, `is_submit_abstrak`, `is_submit_paper`, `tanggal_update`) VALUES
(1, 'AZIZAH', 'SELALU GALAU', '2019-07-19', '09:00:00', 'Phinisi UNM, Jl. A. P. Pettarani No 40', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3973.5978503863416!2d119.43300151536218!3d-5.168208553635411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1554356692997!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '', 'arid-cliffs-daylight-1416687.jpg', '081-524-308-606', 'ltimptikunm2019@gmail.com', 0, 1, 1, '2019-07-20 06:02:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_subtema`
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
-- Dumping data untuk tabel `tbl_subtema`
--

INSERT INTO `tbl_subtema` (`id_subtema`, `id_reviewer`, `subtema`, `deskripsi`, `icon`, `tgl_update`) VALUES
(6, 4, 'Rekayasa Engineering', '', 'fa fa-cogs', '2019-07-12 07:00:10'),
(7, 5, 'Komputer Informatika', '', 'fa fa-desktop', '2019-07-12 07:00:39'),
(8, 4, 'Energi', '', 'fa fa-home', '2019-07-12 07:02:23'),
(9, 6, 'Aku Cinta PTIK', '', 'fa fa-university', '2019-07-15 07:03:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tanggal_penting`
--

CREATE TABLE `tbl_tanggal_penting` (
  `id_tgl_penting` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tanggal_penting`
--

INSERT INTO `tbl_tanggal_penting` (`id_tgl_penting`, `deskripsi`, `tanggal`, `tgl_update`) VALUES
(1, 'Upload Paper', '2019-03-14', '0000-00-00 00:00:00'),
(2, 'Batas Upload Paper ', '2019-03-30', '2019-04-02 12:39:52'),
(3, 'Batas Upload Paper ', '0000-00-00', '2019-04-02 12:39:57'),
(4, 'Kerja Bakti', '2019-07-25', '2019-07-15 07:07:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
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
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `status`, `foto`, `keterangan`, `tanggal`) VALUES
(6, 'admin', 'admin@mail.com', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'Aktif', NULL, NULL, '2019-03-27 20:18:05'),
(7, 'assa', 'aswarkasim@gmail.com', 'assa', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'Aktif', NULL, NULL, '2019-03-28 07:18:34'),
(9, 'Reviewer', 'rev@gmail.com', 'reviewer', '5f4dcc3b5aa765d61d8327deb882cf99', 'Reviewer', 'Aktif', NULL, NULL, '2019-04-01 06:31:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_abstrak`
--
ALTER TABLE `tbl_abstrak`
  ADD PRIMARY KEY (`id_abstrak`);

--
-- Indeks untuk tabel `tbl_file_pendukung`
--
ALTER TABLE `tbl_file_pendukung`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tbl_komentar_abstrak`
--
ALTER TABLE `tbl_komentar_abstrak`
  ADD PRIMARY KEY (`id_komentar_abstrak`);

--
-- Indeks untuk tabel `tbl_komentar_paper`
--
ALTER TABLE `tbl_komentar_paper`
  ADD PRIMARY KEY (`id_komentar_paper`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `tbl_konfirmasi_pembayaran`
--
ALTER TABLE `tbl_konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tbl_paper`
--
ALTER TABLE `tbl_paper`
  ADD PRIMARY KEY (`id_paper`);

--
-- Indeks untuk tabel `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `tbl_reviewer`
--
ALTER TABLE `tbl_reviewer`
  ADD PRIMARY KEY (`id_reviewer`);

--
-- Indeks untuk tabel `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indeks untuk tabel `tbl_subtema`
--
ALTER TABLE `tbl_subtema`
  ADD PRIMARY KEY (`id_subtema`);

--
-- Indeks untuk tabel `tbl_tanggal_penting`
--
ALTER TABLE `tbl_tanggal_penting`
  ADD PRIMARY KEY (`id_tgl_penting`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_abstrak`
--
ALTER TABLE `tbl_abstrak`
  MODIFY `id_abstrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_file_pendukung`
--
ALTER TABLE `tbl_file_pendukung`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar_abstrak`
--
ALTER TABLE `tbl_komentar_abstrak`
  MODIFY `id_komentar_abstrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar_paper`
--
ALTER TABLE `tbl_komentar_paper`
  MODIFY `id_komentar_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfirmasi_pembayaran`
--
ALTER TABLE `tbl_konfirmasi_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_paper`
--
ALTER TABLE `tbl_paper`
  MODIFY `id_paper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_reviewer`
--
ALTER TABLE `tbl_reviewer`
  MODIFY `id_reviewer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_subtema`
--
ALTER TABLE `tbl_subtema`
  MODIFY `id_subtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_tanggal_penting`
--
ALTER TABLE `tbl_tanggal_penting`
  MODIFY `id_tgl_penting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
