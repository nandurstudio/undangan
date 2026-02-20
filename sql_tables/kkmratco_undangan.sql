-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2024 at 06:27 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkmratco_undangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelamin`
--

CREATE TABLE `tb_kelamin` (
  `intKelaminId` int NOT NULL,
  `txtKelamin` char(20) DEFAULT NULL,
  `txtPanggilan` varchar(30) DEFAULT NULL,
  `txtPanggilanLain` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kelamin`
--

INSERT INTO `tb_kelamin` (`intKelaminId`, `txtKelamin`, `txtPanggilan`, `txtPanggilanLain`) VALUES
(1, 'Laki-laki', 'Bapak', 'Jang'),
(2, 'Perempuan', 'Ibu', 'Neng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_undangan`
--

CREATE TABLE `tb_undangan` (
  `intUndanganId` int NOT NULL,
  `txtStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_undangan`
--

INSERT INTO `tb_undangan` (`intUndanganId`, `txtStatus`) VALUES
(1, 'Pengantin Pria'),
(2, 'Pengantin Wanita'),
(3, 'Ayah Pria'),
(4, 'Ibu Pria'),
(5, 'Ayah Wanita'),
(6, 'Ibu Wanita'),
(7, 'Wali Pria'),
(8, 'Wali Wanita'),
(9, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `intUserId` int NOT NULL,
  `txtNamaDepan` varchar(50) DEFAULT NULL,
  `txtNamaBelakang` varchar(50) DEFAULT NULL,
  `txtKelaminId` int DEFAULT NULL,
  `txtTitle` char(20) DEFAULT NULL,
  `txtAyahId` int DEFAULT NULL,
  `txtIbuId` int DEFAULT NULL,
  `intAnakKe` tinyint DEFAULT NULL,
  `intJumlahSaudara` int DEFAULT NULL,
  `txtPhoto` varchar(50) DEFAULT NULL,
  `txtUndanganId` int DEFAULT NULL,
  `bitActive` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`intUserId`, `txtNamaDepan`, `txtNamaBelakang`, `txtKelaminId`, `txtTitle`, `txtAyahId`, `txtIbuId`, `intAnakKe`, `intJumlahSaudara`, `txtPhoto`, `txtUndanganId`, `bitActive`, `timestamp`) VALUES
(1, 'Nandang', 'Duryat', 1, 'S.Kom.', 3, 4, 1, 1, NULL, 9, 0, '2022-02-13 09:43:12'),
(2, 'Ananda', 'Rismawati', 2, 'S.I.Kom.', 5, 6, 1, 4, NULL, 9, 0, '2022-02-13 09:43:12'),
(3, 'Ukim', NULL, 1, NULL, NULL, NULL, 4, 6, NULL, 9, 0, '2022-02-09 06:08:42'),
(4, 'Arni', NULL, 2, NULL, NULL, NULL, 2, 3, NULL, 9, 0, '2022-02-09 06:08:42'),
(5, 'Ali', 'Nurdin', 1, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2022-02-09 06:08:42'),
(6, 'Engkom', 'Komalasari', 2, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2022-02-09 06:08:42'),
(7, 'Kostaman', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2022-04-19 13:51:24'),
(8, 'Delis', 'Setiarni', 2, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2022-04-19 13:51:24'),
(9, 'Noordiansyah', NULL, 1, NULL, NULL, NULL, 3, 3, NULL, 9, 0, '2022-04-19 13:51:24'),
(10, 'Pandu', 'Sudewo', 1, '(Alm.)', NULL, NULL, NULL, NULL, NULL, 9, 0, '2022-04-19 13:51:24'),
(11, 'Rima', 'Khuriatul Rakhmatiah', 2, NULL, NULL, NULL, NULL, 0, NULL, 9, 0, '2022-04-19 13:51:24'),
(12, 'Hilya', 'Dina Rosyida', 2, NULL, NULL, NULL, 1, 2, NULL, 9, 0, '2022-04-19 13:51:24'),
(13, 'Drs. Purwono', NULL, 1, '(Alm.)', NULL, NULL, NULL, NULL, NULL, 3, 1, '2022-04-27 03:56:02'),
(14, 'Yanuar', 'Riswanti', 2, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, '2022-04-19 13:51:57'),
(15, 'Iman', 'Suparman', 1, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, '2022-04-19 13:50:17'),
(16, 'Kurniati', 'Watiningsih', 2, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, '2022-04-19 13:50:17'),
(17, 'Naufal', 'A Prabowo', 1, NULL, 13, 14, 3, 3, NULL, 1, 0, '2023-10-02 19:52:44'),
(18, 'Denaya', 'C Safira', 2, NULL, 15, 16, 2, 2, NULL, 2, 0, '2023-10-02 19:52:44'),
(19, 'Bagus', 'Bimantoro', 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-10-02 19:52:17'),
(20, 'Mawar', 'Puspa Endah', 2, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2024-02-19 08:09:06'),
(21, 'Dini', 'Sandra Novita Manalu', 2, 'SHP SCM - P P I C', NULL, NULL, 1, 1, NULL, 2, 1, '2024-02-21 09:30:10'),
(22, 'Rizki', 'Andika', 1, 'SHP SCM, QSS & IDC -', NULL, NULL, NULL, NULL, NULL, 1, 1, '2024-02-21 09:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `tr_reservasi`
--

CREATE TABLE `tr_reservasi` (
  `reservasiId` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `attending` varchar(2) NOT NULL,
  `jumlah_tamu` int NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_tamu`
--

CREATE TABLE `tr_tamu` (
  `tamuId` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `jumlah_tamu` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tr_tamu`
--

INSERT INTO `tr_tamu` (`tamuId`, `name`, `alamat`, `sesi`, `jumlah_tamu`, `date`) VALUES
(1, 'Nandang Duryat', 'DIG', '1', '1', '2024-02-28 12:23:23'),
(2, 'Nila Agustina', 'MTN', '1', '1', '2024-02-28 09:45:25'),
(3, 'Reki Maulid', 'DIG', '1', '1', '2024-02-28 12:24:29'),
(4, 'Dewi Puji Setya Ayu', 'AUDIT INTERNAL', '1', '1', '2024-02-28 12:33:02'),
(5, 'Tuminah', 'PRODEV FOR BBO', '1', '1', '2024-02-28 12:33:13'),
(6, 'Ajrina Sabila Hidayati', 'MANUFACTURING PROCUREMENT', '1', '1', '2024-02-28 12:34:13'),
(7, 'Anggita Septina', 'PRODEV FOR POWDER INFANT and GUM', '1', '1', '2024-02-28 12:34:31'),
(8, 'Angguni Wulan Fauziah', 'PRODUCT DEVELOPMENT LIQUID', '1', '1', '2024-02-28 12:34:41'),
(9, 'Surati', 'PACKAGING DEVELOPMENT', '1', '1', '2024-02-28 12:35:33'),
(10, 'Wachid Sadali', 'MANUFACTURING SHP PLANT QA', '1', '1', '2024-02-28 12:51:11'),
(11, 'Beny Santoso', 'SCM Management System', '1', '1', '2024-02-28 12:53:17'),
(12, 'Jumiko Kitada', 'FINANCE', '1', '1', '2024-02-28 12:54:49'),
(13, 'Egi Ahmad Fadli', 'MANUFACTURING WHL RMPM', '1', '1', '2024-02-28 12:56:55'),
(14, 'Sabarudin', 'TAX', '1', '1', '2024-02-28 12:57:25'),
(15, 'Yono Suharyono', 'MANUFACTURING WHL RMPM', '1', '1', '2024-02-28 12:57:32'),
(16, 'Nengky Feti Ayani', 'COSTING', '1', '1', '2024-02-28 12:57:54'),
(17, 'Lowisa Rosianna', 'SHP ACCOUNTING', '1', '1', '2024-02-28 12:58:05'),
(18, 'Zakiah', 'FINANCE', '1', '1', '2024-02-28 12:58:30'),
(19, 'Yosia Anita Ekawati', 'FINANCE', '1', '1', '2024-02-28 12:59:00'),
(20, 'Priyani Esturi Putri', 'KAMI HR and GA', '1', '1', '2024-02-28 12:59:12'),
(21, 'Linda Noviana', 'KAMI QUALITY ASSURANCE', '1', '1', '2024-02-28 12:59:19'),
(22, 'Imam Mustakim', 'KAMI Engineering', '1', '1', '2024-02-28 13:00:09'),
(23, 'M Alwiyadin', 'KAMI PPIC and Warehouse', '1', '1', '2024-02-28 13:00:25'),
(24, 'Andri Awaludin', 'CORPORATE QA ANALYTICAL CENTER', '1', '1', '2024-02-28 13:01:00'),
(25, 'Aris Yusuf', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:01:46'),
(26, 'Tamin', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:02:21'),
(27, 'Irfan', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:02:36'),
(28, 'Muhamad Amien', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:02:48'),
(29, 'Anton Heru Purnama', 'GLOBAL VITA NUTRITECT', '1', '1', '2024-02-28 13:03:04'),
(30, 'Dimas Briantono Hakim', 'CRM HRD and GA', '1', '1', '2024-02-28 13:03:20'),
(31, 'Edi Suhardiman', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:04:02'),
(32, 'Fahrul Rozi', 'MANUFACTURING SHP PLANT QA', '1', '1', '2024-02-28 13:04:38'),
(33, 'Ahmad Humaedi', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:04:18'),
(34, 'Andan', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:05:03'),
(35, 'A Nurjamil', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:05:12'),
(36, 'Maman Badruzaman', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:05:19'),
(37, 'Muhammad Helmi', 'MANUFACTURING WHL RMPM', '1', '1', '2024-02-28 13:05:28'),
(38, 'Arif Jayadi', 'MANUFACTURING WHL RMPM', '1', '1', '2024-02-28 13:05:48'),
(39, 'Irfan Sobarkah', 'SHP I T', '1', '1', '2024-02-28 13:07:20'),
(40, 'Tantawi Zauhari', 'MANUFACTURING WHL RMPM', '1', '1', '2024-02-28 13:08:07'),
(41, 'Yogo Priyanto', 'MANUFACTURING SHP PLANT PREPARATION', '1', '1', '2024-02-28 13:08:15'),
(42, 'Budi Samsudin', 'MANUFACTURING SHP PLANT PREPARATION', '1', '1', '2024-02-28 13:08:30'),
(43, 'Laura Agustin', 'MANUFACTURING P P I C', '1', '1', '2024-02-28 13:09:05'),
(44, 'Risma M Nurasih', 'MANUFACTURING P P I C', '1', '1', '2024-02-28 13:09:13'),
(45, 'Saryana', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:09:26'),
(46, 'Amanda Puspita Ps', 'MANUFACTURING P P I C', '1', '1', '2024-02-28 13:09:46'),
(47, 'Eki Sunarki', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:10:07'),
(48, 'Dhewi Lintang Asih', 'CORPORATE QA QUALITY and FOOD SAFETY', '1', '1', '2024-02-28 13:10:26'),
(49, 'Surtini', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:11:20'),
(50, 'Juairiah', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:11:34'),
(51, 'Ita Paridawati', 'CORPORATE QA ANALYTICAL CENTER', '1', '1', '2024-02-28 13:11:48'),
(52, 'Yulia Hutapea', 'MANUFACTURING SHP PLANT PRODUCTION', '1', '1', '2024-02-28 13:12:06'),
(53, 'Bambang Tri Budihartono', 'MANUFACTURING SHP PLANT QA', '1', '1', '2024-02-28 13:12:07'),
(54, 'Joko Suprianto', 'MANUFACTURING SHP PLANT EM', '1', '1', '2024-02-28 13:12:33'),
(55, 'Nur Asiah', 'CORPORATE QA ANALYTICAL CENTER', '1', '1', '2024-02-28 13:14:03'),
(56, 'Handrio Purnomo Siregar', 'MANUFACTURING PROCUREMENT', '1', '1', '2024-02-28 13:16:18'),
(57, 'Iswahyudi', 'GLOBAL VITA NUTRITECT', '1', '1', '2024-02-28 13:18:11'),
(58, 'Fransisca Anggiyostiana Sirait, Skm', 'MANUFACTURING SHE', '1', '1', '2024-02-28 13:18:55'),
(59, 'Rika Apriani Situngkir', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:19:26'),
(60, 'Sapta Miharsa', 'MANUFACTURING WHL FG', '1', '1', '2024-02-28 13:19:34'),
(61, 'Hayadi', 'MANUFACTURING SHP PLANT EM', '1', '1', '2024-02-28 13:21:45'),
(62, 'Kastolani', 'MANUFACTURING SHP PLANT EM', '1', '1', '2024-02-28 13:21:59'),
(63, 'Heigo Pebrianto', 'MANUFACTURING ER', '1', '1', '2024-02-28 13:22:23'),
(64, 'Riana Kurnianti', 'MANUFACTURING HCD and GA', '1', '1', '2024-02-28 13:24:32'),
(65, 'Edlin Etika Putri', 'MANUFACTURING HCD and GA', '1', '1', '2024-02-28 13:24:52'),
(66, 'Priyo Anarkie Yuseptyo', 'MANUFACTURING SHP PLANT GENERAL', '1', '1', '2024-02-28 13:27:59'),
(67, 'Dessi Noor A Antikawati', 'BRANCH FINANCIAL CONTROLLER', '1', '1', '2024-02-28 13:30:58'),
(68, 'Raditya Yuka G', 'SALES SUPPORT', '1', '1', '2024-02-28 13:31:06'),
(69, 'Eki Riyan Triyatno', 'SALES SUPPORT', '1', '1', '2024-02-28 13:32:09'),
(70, 'Ema Andriyani', 'QSS Contract Manufacturing', '1', '1', '2024-02-28 14:50:38'),
(71, 'Riri Susanti', 'MANUFACTURING THIRD PARTY PRODUCTION', '1', '1', '2024-02-28 14:50:56'),
(72, 'Fifi Fitria Nurul Islami', 'CORPORATE QA SUPPLY CHAIN', '1', '1', '2024-02-28 15:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `tr_ucapan`
--

CREATE TABLE `tr_ucapan` (
  `ucapanId` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `namareservasi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ucapan` varchar(255) NOT NULL,
  `attending` varchar(2) NOT NULL,
  `jumlahtamu` int NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tr_ucapan`
--

INSERT INTO `tr_ucapan` (`ucapanId`, `nama`, `namareservasi`, `alamat`, `ucapan`, `attending`, `jumlahtamu`, `sesi`, `date`) VALUES
(1, 'Reni Kasmita', 'Reni Kasmita', 'HUMAN CAPITAL DEVELOPMENT', 'Karena mau kontrol ke RS', '0', 0, '1', '2024-02-27 03:54:15'),
(2, 'Meilina', 'Meilina', 'BUSSINESS DEVELOPMENT', 'Mohon maaf karena sudah ada agenda meeting di hari yang sama', '0', 0, '1', '2024-02-27 04:58:06'),
(3, 'Muhammad Fajar Sulthan Nur Khalis', 'Muhammad Fajar Sulthan Nur Khalis', 'PRODEV FOR POWDER ADULT', 'Agenda yang lain', '0', 0, '1', '2024-02-27 06:35:13'),
(4, 'Andri Awaludin', 'Andri Awaludin', 'CORPORATE QA ANALYTICAL CENTER', 'Semoga lancar dan see u soon', '1', 1, '1', '2024-02-27 06:44:12'),
(5, 'Siendy Marlenda Lado Fernandez', 'Siendy Marlenda Lado Fernandez', 'CONSUMER INSIGHT', 'Semoga acaranya lancar, mohon maaf tidak bisa hadir krn sdh ada agenda lain. Terima kasih.', '0', 0, '1', '2024-02-27 06:50:37'),
(6, 'Irfan Sobarkah', 'Irfan Sobarkah', 'SHP I T', 'Mantap... Jaya terus KKM.', '1', 1, '1', '2024-02-27 06:55:57'),
(7, 'Riana Kurnianti', 'Riana Kurnianti', 'MANUFACTURING HCD and GA', 'Joss', '1', 1, '1', '2024-02-27 07:01:46'),
(8, 'Risma M Nurasih', 'Risma M Nurasih', 'MANUFACTURING P P I C', 'Semoga acaranya dilancarkan 👍', '1', 1, '1', '2024-02-27 07:05:16'),
(9, 'Arif Jayadi', 'Arif Jayadi', 'MANUFACTURING WHL RMPM', 'Jaya terus kkm pt sanghiang perkasa.. Jos', '1', 1, '1', '2024-02-27 07:06:30'),
(10, 'Hayadi', 'Hayadi', 'MANUFACTURING SHP PLANT EM', 'Semoga acaranya berjalan lancar...KKM jaya terus..', '1', 1, '1', '2024-02-27 07:08:37'),
(11, 'Lenny Anggraini', 'Lenny Anggraini', 'IDC', 'Semoga acaranya lancar, mohon maaf tidak bisa hadir karena ada meeting offline di Cakung. Terima kasih =) ', '0', 0, '1', '2024-02-27 07:08:37'),
(12, 'Eki Sunarki', 'Eki Sunarki', 'MANUFACTURING SHP PLANT PRODUCTION', 'Semoga semakin sukses KKM ', '1', 1, '1', '2024-02-27 07:08:45'),
(13, 'Handrio Purnomo Siregar', 'Handrio Purnomo Siregar', 'MANUFACTURING PROCUREMENT', 'Semangat ya team KKM ! 😊', '1', 1, '1', '2024-02-27 07:13:31'),
(14, 'Fahrul Rozi', 'Fahrul Rozi', 'MANUFACTURING SHP PLANT QA', 'Semoga lancar acara nya', '1', 1, '1', '2024-02-27 07:17:12'),
(15, 'Irfan', 'Irfan', 'MANUFACTURING WHL FG', 'Lanjutkan , Semoga Lancar Acara dan Sukses untuk semua Pengurus serta Anggota Koperasi.', '1', 1, '1', '2024-02-27 07:18:18'),
(16, 'A Nurjamil', 'A Nurjamil', 'MANUFACTURING WHL FG', 'semoga lancar acaranya...', '1', 1, '1', '2024-02-27 15:53:59'),
(17, 'Aris Yusuf', 'Aris Yusuf', 'MANUFACTURING WHL FG', 'Buah naga buah kecapi, semoga lancar dan happy', '1', 1, '1', '2024-02-27 07:21:59'),
(18, 'Dimas Briantono Hakim', 'Dimas Briantono Hakim', 'CRM HRD and GA', 'Semoga acaranya lancar ', '1', 1, '1', '2024-02-27 07:24:19'),
(19, 'Mellania Windu Pauly', 'Mellania Windu Pauly', 'MANUFACTURING THIRD PARTY PRODUCTION', 'Mohon maaf tidak bisa hadir karena ada genba ke pots ', '0', 0, '1', '2024-02-27 07:24:55'),
(20, 'Priyo Anarkie Yuseptyo', 'Priyo Anarkie Yuseptyo', 'MANUFACTURING SHP PLANT GENERAL', 'Semoga RAT membawa kebaikan dan manfaat buat anggota koperasi', '1', 1, '1', '2024-02-27 07:28:50'),
(21, 'Bambang Tri Budihartono', 'Bambang Tri Budihartono', 'MANUFACTURING SHP PLANT QA', 'Kalian luar biasa!!!', '1', 1, '1', '2024-02-27 07:28:57'),
(22, 'Kastolani', 'Kastolani', 'MANUFACTURING SHP PLANT EM', 'Semoga acaranya lancar dan dapet doorpress....😂😂😂', '1', 1, '1', '2024-02-27 07:31:46'),
(23, 'Yono Suharyono', 'Yono Suharyono', 'MANUFACTURING WHL RMPM', 'semoga deviden nya gede hahaah', '1', 1, '1', '2024-02-27 07:32:09'),
(24, 'Tamin', 'Tamin', 'MANUFACTURING WHL FG', 'Semoga lancar acaranya dan sukses selalu untuk para pengurus dan di beri kesehatan', '1', 1, '1', '2024-02-27 07:32:16'),
(25, 'Fransisca Anggiyostiana Sirait, Skm', 'Fransisca Anggiyostiana Sirait, Skm', 'MANUFACTURING SHE', 'Siap hadir...', '1', 1, '1', '2024-02-27 07:32:53'),
(26, 'Rika Apriani Situngkir', 'Rika Apriani Situngkir', 'MANUFACTURING WHL FG', 'Semoga makin jaya', '1', 1, '1', '2024-02-27 07:33:30'),
(27, 'Ajrina Sabila Hidayati', 'Ajrina Sabila Hidayati', 'MANUFACTURING PROCUREMENT', 'Hadir', '1', 1, '1', '2024-02-27 07:40:13'),
(28, 'Wachid Sadali', 'Wachid Sadali', 'MANUFACTURING SHP PLANT QA', 'Semangattttsss', '1', 1, '1', '2024-02-27 07:40:33'),
(29, 'Fifi Fitria Nurul Islami', 'Fifi Fitria Nurul Islami', 'CORPORATE QA SUPPLY CHAIN', 'Lanjutkan , Semoga Lancar Acara dan Sukses ', '1', 1, '1', '2024-02-27 07:41:50'),
(30, 'Sapta Miharsa', 'Sapta Miharsa', 'MANUFACTURING WHL FG', 'Semoga KKM semakin maju', '1', 1, '1', '2024-02-27 07:48:17'),
(31, 'Agus Warigit', 'Agus Warigit', 'SALES OPS 3 CIREBON', 'Semoga KKM selalu jaya', '1', 1, '1', '2024-02-27 07:54:40'),
(32, 'Nurmayanti Silitonga', 'Nurmayanti Silitonga', 'MANUFACTURING PROCUREMENT', 'Mohon maaf tidak bisa hadir soalnya ada agenda lainnya. Terima kasih.', '0', 0, '1', '2024-02-27 07:55:17'),
(33, 'Edy Suryadi', 'Edy Suryadi', 'MARKETING BRAND KN7', 'Sedang ada agenda lain', '0', 0, '1', '2024-02-27 07:56:14'),
(34, 'Anggi Yuliawati Usman', 'Anggi Yuliawati Usman', 'MARKETING BRAND KN7', 'Closing Sales Feb 2024', '0', 0, '1', '2024-02-27 07:57:32'),
(35, 'Lia Oktavianti', 'Lia Oktavianti', 'SALES KN7 JAKARTA 1', 'Mohon maaf tidak bisa hadir karena Closing sales Feb 24, semoga  acara nya berjalan lancar dan KKM semakin sukses ', '0', 0, '1', '2024-02-27 08:02:18'),
(36, 'Joko Suprianto', 'Joko Suprianto', 'MANUFACTURING SHP PLANT EM', 'Bismillahirrohmanirrohim ...............', '1', 1, '1', '2024-02-27 08:15:17'),
(37, 'Maman Badruzaman', 'Maman Badruzaman', 'MANUFACTURING WHL FG', 'Semoga KKM semakin maju', '1', 1, '1', '2024-02-27 08:28:26'),
(38, 'Muhammad Helmi', 'Muhammad Helmi', 'MANUFACTURING WHL RMPM', 'Makin maju makin sejahtera bersama ', '1', 1, '1', '2024-02-27 08:28:37'),
(39, 'Muhamad Amien', 'Muhamad Amien', 'MANUFACTURING SHP PLANT PRODUCTION', 'Maju terus KKM,semoga kita semua di berikaan kesehatan,baik anggota dan pengurus KKM.', '1', 1, '1', '2024-02-27 08:34:00'),
(40, 'Edi Suhardiman', 'Edi Suhardiman', 'MANUFACTURING SHP PLANT PRODUCTION', 'Semoga KKM bisa di akses jaringan internet luar dan proses pngajuan bisa lebih cepat (1 minggu ).', '1', 1, '1', '2024-02-27 08:43:42'),
(41, 'Firauzi', 'Firauzi', 'SALES KN2 1 MEDAN', 'Mohin maaf tidak bisa hadir karena Akan closing di kabanjahe. Sumatra utara', '0', 0, '1', '2024-02-27 08:44:35'),
(42, 'Raditya Yuka G', 'Raditya Yuka G', 'SALES SUPPORT', 'KKM JAYA SELALU', '1', 1, '1', '2024-02-27 15:11:06'),
(43, 'Dessi Retno Utami', 'Dessi Retno Utami', 'KN 3 NUTRITION FOR SPECIAL NEEDS', 'Mohon maaf  tidak bisa hadir karena ada agenda lain ', '0', 0, '1', '2024-02-27 09:06:03'),
(44, 'Rosmana Dewi', 'Rosmana Dewi', 'KN 1 NUTRITION FOR WOMAN', 'Ada agenda lain', '0', 0, '1', '2024-02-27 09:06:21'),
(45, 'Dessi Noor A Antikawati', 'Dessi Noor A Antikawati', 'BRANCH FINANCIAL CONTROLLER', 'Lebih baik dan lebih sukses untuk KKM & anggotanya ,yes... !!!', '1', 1, '1', '2024-02-27 15:15:13'),
(46, 'Eki Riyan Triyatno', 'Eki Riyan Triyatno', 'SALES SUPPORT', 'mohon maaf ada agenda lain', '0', 0, '1', '2024-02-27 09:10:26'),
(47, 'Yosia Anita Ekawati', 'Yosia Anita Ekawati', 'FINANCE', 'Mohon maaf tidak bisa hadir karena ada agenda lain', '0', 0, '1', '2024-02-27 09:31:27'),
(48, 'Angguni Wulan Fauziah', 'Angguni Wulan Fauziah', 'PRODUCT DEVELOPMENT LIQUID', 'Mantap KKM', '1', 1, '1', '2024-02-27 09:32:48'),
(49, 'Deasy Octavia Hutagalung', 'Deasy Octavia Hutagalung', 'KN 2 NUTRITION MILK FOR BABY', 'Maaf saya ada agenda lain.', '0', 0, '1', '2024-02-27 09:37:58'),
(50, 'Lowisa Rosianna', 'Lowisa Rosianna', 'SHP ACCOUNTING', 'Accounting sedang closingan Akhir Bulan', '0', 0, '1', '2024-02-27 09:40:09'),
(51, 'Zakiah', 'Zakiah', 'FINANCE', 'mohon maaf berhalangan hadir karena sedang closingan', '0', 0, '1', '2024-02-27 09:40:43'),
(52, 'Nyta Ef Helzen Tampubolon', 'Nyta Ef Helzen Tampubolon', 'SALES KN1 1 P SIANTAR', 'Mohon maaf karena posisi closing Akhir bulan. Terimakasih', '0', 0, '1', '2024-02-27 09:48:28'),
(53, 'Anggita Septina', 'Anggita Septina', 'PRODEV FOR POWDER INFANT and GUM', 'semoga dapet doorprize nya samsung S23 ultra', '1', 1, '1', '2024-02-27 09:54:49'),
(54, 'Dewi Puji Setya Ayu', 'Dewi Puji Setya Ayu', 'AUDIT INTERNAL', 'Semoga bs nabung sukarela lg di KKM', '1', 1, '1', '2024-02-27 10:11:33'),
(55, 'Hendi Hendrasta', 'Hendi Hendrasta', 'SHP I T', 'Mohon maaf karna ada agenda lain', '0', 0, '1', '2024-02-27 10:16:59'),
(56, 'Egi Ahmad Fadli', 'Egi Ahmad Fadli', 'MANUFACTURING WHL RMPM', 'Gaskeun.... Semoga bisa nabung sukarela lagi😁', '1', 1, '1', '2024-02-27 10:24:14'),
(57, 'Ahmad Humaedi', 'Ahmad Humaedi', 'MANUFACTURING SHP PLANT PRODUCTION', 'Gassssss pokona mahhh', '1', 1, '1', '2024-02-27 11:05:44'),
(58, 'Surtini', 'Surtini', 'MANUFACTURING SHP PLANT PRODUCTION', 'Semoga KKM lebih maju lagi dan tambah lancar terus', '1', 1, '1', '2024-02-27 11:13:51'),
(59, 'Gita Silalahi', 'Gita Silalahi', 'LEGAL', '.', '1', 1, '1', '2024-02-27 11:49:47'),
(60, 'Tuminah', 'Tuminah', 'PRODEV FOR BBO', 'Semoga boleh nabung lagi', '1', 1, '1', '2024-02-27 12:36:13'),
(61, 'M Alwiyadin', 'M Alwiyadin', 'KAMI PPIC and Warehouse', 'Semangat', '1', 1, '1', '2024-02-27 12:40:06'),
(62, 'Saryana', 'Saryana', 'MANUFACTURING SHP PLANT PRODUCTION', 'Semoga semua anggota KKM makin sejahtera', '1', 1, '1', '2024-02-27 14:54:36'),
(63, 'Sabarudin', 'Sabarudin', 'TAX', 'Mohon maaf Closing 🙏🙏🙏', '0', 0, '1', '2024-02-27 15:41:20'),
(64, 'Amanda Puspita Ps', 'Amanda Puspita Ps', 'MANUFACTURING P P I C', 'Sukses selalu', '1', 1, '1', '2024-02-28 01:03:51'),
(65, 'Nengky Feti Ayani', 'Nengky Feti Ayani', 'COSTING', 'semoga lancar acaranya, semangat panitia,', '1', 1, '1', '2024-02-28 01:10:47'),
(66, 'Tantawi Zauhari', 'Tantawi Zauhari', 'MANUFACTURING WHL RMPM', 'Semoga acara RAT nya sukses dan  anggotanya bahagia', '1', 1, '1', '2024-02-28 05:27:14'),
(67, 'Yogo Priyanto', 'Yogo Priyanto', 'MANUFACTURING SHP PLANT PREPARATION', 'gas', '1', 1, '1', '2024-02-28 05:42:36'),
(68, 'Budi Samsudin', 'Budi Samsudin', 'MANUFACTURING SHP PLANT PREPARATION', 'Yes', '1', 1, '1', '2024-02-28 05:53:17'),
(69, 'Jessica Aprilia', 'Jessica Aprilia', 'MARKETING BRAND KN3', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '1', 1, '1', '2024-02-28 05:58:28'),
(70, '', '', '', '', '', 0, '', '2024-03-01 16:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `tr_undangan`
--

CREATE TABLE `tr_undangan` (
  `intUndanganId` int NOT NULL,
  `txtSubtitle` varchar(50) DEFAULT NULL,
  `txtHeader` varchar(50) DEFAULT NULL,
  `dtmWaktuAkad` datetime DEFAULT NULL,
  `dtmWaktuResepsi` datetime DEFAULT NULL,
  `txtAlamat` varchar(250) DEFAULT NULL,
  `txtQuotePria` varchar(500) DEFAULT NULL,
  `txtQuoteWanita` varchar(250) DEFAULT NULL,
  `txtGoogleMaps` varchar(50) DEFAULT NULL,
  `intNamaPengantinPria_intUserId` int DEFAULT NULL,
  `intNamaPengantinWanita_intUserId` int DEFAULT NULL,
  `intNamaAyahPengantinPria_intUserId` int DEFAULT NULL,
  `intNamaIbuPengantinPria_intUserId` int DEFAULT NULL,
  `intNamaAyahPengantinWanita_intUserId` int DEFAULT NULL,
  `intNamaIbuPengantinWanita_intUserId` int DEFAULT NULL,
  `dtmFirstMeet` datetime DEFAULT NULL,
  `dtmFirstDate` datetime DEFAULT NULL,
  `dtmInARelationship` datetime DEFAULT NULL,
  `dtmOther` datetime DEFAULT NULL,
  `txtQuotesPengantin` varchar(250) DEFAULT NULL,
  `txtQuotesTokohTerkenal` varchar(250) DEFAULT NULL,
  `decNoEWallet` decimal(20,0) DEFAULT NULL,
  `decRekeningBank` decimal(20,0) DEFAULT NULL,
  `intNamaPemegangRekening_intUserId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tr_undangan`
--

INSERT INTO `tr_undangan` (`intUndanganId`, `txtSubtitle`, `txtHeader`, `dtmWaktuAkad`, `dtmWaktuResepsi`, `txtAlamat`, `txtQuotePria`, `txtQuoteWanita`, `txtGoogleMaps`, `intNamaPengantinPria_intUserId`, `intNamaPengantinWanita_intUserId`, `intNamaAyahPengantinPria_intUserId`, `intNamaIbuPengantinPria_intUserId`, `intNamaAyahPengantinWanita_intUserId`, `intNamaIbuPengantinWanita_intUserId`, `dtmFirstMeet`, `dtmFirstDate`, `dtmInARelationship`, `dtmOther`, `txtQuotesPengantin`, `txtQuotesTokohTerkenal`, `decNoEWallet`, `decRekeningBank`, `intNamaPemegangRekening_intUserId`) VALUES
(1, NULL, NULL, '2022-03-27 08:00:00', '2022-03-27 10:00:00', 'GRAHA PINDAD\r\nJalan Gatot Subroto No.517, Kebon Kangkung, Kiaracondong, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40284', NULL, NULL, 'https://goo.gl/maps/Q76muirvoCRAswicA', 9, 12, 7, 8, 10, 11, '2022-02-14 08:04:15', '2022-02-14 08:04:15', '2022-02-14 08:04:15', '2022-02-14 08:04:15', NULL, NULL, 62818435453, NULL, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelamin`
--
ALTER TABLE `tb_kelamin`
  ADD PRIMARY KEY (`intKelaminId`);

--
-- Indexes for table `tb_undangan`
--
ALTER TABLE `tb_undangan`
  ADD PRIMARY KEY (`intUndanganId`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`intUserId`),
  ADD KEY `txtKelaminId` (`txtKelaminId`),
  ADD KEY `txtAyahId` (`txtAyahId`),
  ADD KEY `txtIbuId` (`txtIbuId`),
  ADD KEY `txtUndanganId` (`txtUndanganId`);

--
-- Indexes for table `tr_reservasi`
--
ALTER TABLE `tr_reservasi`
  ADD PRIMARY KEY (`reservasiId`);

--
-- Indexes for table `tr_tamu`
--
ALTER TABLE `tr_tamu`
  ADD PRIMARY KEY (`tamuId`);

--
-- Indexes for table `tr_ucapan`
--
ALTER TABLE `tr_ucapan`
  ADD PRIMARY KEY (`ucapanId`);

--
-- Indexes for table `tr_undangan`
--
ALTER TABLE `tr_undangan`
  ADD PRIMARY KEY (`intUndanganId`),
  ADD KEY `intNamaPengantinPria_intUserId` (`intNamaPengantinPria_intUserId`),
  ADD KEY `intNamaPengantinWanita_intUserId` (`intNamaPengantinWanita_intUserId`),
  ADD KEY `intNamaAyahPengantinPria_intUserId` (`intNamaAyahPengantinPria_intUserId`),
  ADD KEY `intNamaIbuPengantinPria_intUserId` (`intNamaIbuPengantinPria_intUserId`),
  ADD KEY `intNamaAyahPengantinWanita_intUserId` (`intNamaAyahPengantinWanita_intUserId`),
  ADD KEY `intNamaIbuPengantinWanita_intUserId` (`intNamaIbuPengantinWanita_intUserId`),
  ADD KEY `intNamaPemegangRekening_intUserId` (`intNamaPemegangRekening_intUserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelamin`
--
ALTER TABLE `tb_kelamin`
  MODIFY `intKelaminId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_undangan`
--
ALTER TABLE `tb_undangan`
  MODIFY `intUndanganId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `intUserId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tr_reservasi`
--
ALTER TABLE `tr_reservasi`
  MODIFY `reservasiId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tr_tamu`
--
ALTER TABLE `tr_tamu`
  MODIFY `tamuId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tr_ucapan`
--
ALTER TABLE `tr_ucapan`
  MODIFY `ucapanId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tr_undangan`
--
ALTER TABLE `tr_undangan`
  MODIFY `intUndanganId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`txtKelaminId`) REFERENCES `tb_kelamin` (`intKelaminId`),
  ADD CONSTRAINT `tb_user_ibfk_2` FOREIGN KEY (`txtUndanganId`) REFERENCES `tb_undangan` (`intUndanganId`),
  ADD CONSTRAINT `tb_user_ibfk_3` FOREIGN KEY (`txtAyahId`) REFERENCES `tb_user` (`intUserId`),
  ADD CONSTRAINT `tb_user_ibfk_4` FOREIGN KEY (`txtIbuId`) REFERENCES `tb_user` (`intUserId`),
  ADD CONSTRAINT `tb_user_ibfk_5` FOREIGN KEY (`txtUndanganId`) REFERENCES `tb_undangan` (`intUndanganId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
