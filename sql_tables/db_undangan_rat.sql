-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 06:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_undangan_rat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelamin`
--

CREATE TABLE `tb_kelamin` (
  `intKelaminId` int(10) NOT NULL,
  `txtKelamin` char(20) DEFAULT NULL,
  `txtPanggilan` varchar(30) DEFAULT NULL,
  `txtPanggilanLain` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `intUndanganId` int(10) NOT NULL,
  `txtStatus` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `intUserId` int(10) NOT NULL,
  `txtNamaDepan` varchar(50) DEFAULT NULL,
  `txtNamaBelakang` varchar(50) DEFAULT NULL,
  `txtKelaminId` int(10) DEFAULT NULL,
  `txtTitle` char(100) DEFAULT NULL,
  `txtAyahId` int(10) DEFAULT NULL,
  `txtIbuId` int(10) DEFAULT NULL,
  `intAnakKe` tinyint(10) DEFAULT NULL,
  `intJumlahSaudara` int(10) DEFAULT NULL,
  `txtPhoto` varchar(50) DEFAULT NULL,
  `txtUndanganId` int(10) DEFAULT NULL,
  `bitActive` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(17, 'Naufal', 'A Prabowo', 1, NULL, 13, 14, 3, 3, NULL, 9, 0, '2025-02-25 03:59:05'),
(18, 'Denaya', 'C Safira', 2, NULL, 15, 16, 2, 2, NULL, 9, 0, '2025-02-25 03:59:05'),
(19, 'Bagus', 'Bimantoro', 1, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2025-02-25 03:48:13'),
(20, 'Mawar', 'Puspa Endah', 2, NULL, NULL, NULL, NULL, NULL, NULL, 9, 0, '2024-02-19 08:09:06'),
(21, 'Dini', 'Sandra Novita Manalu', 2, 'SHP SCM - P P I C', NULL, NULL, 1, 1, NULL, 9, 0, '2025-02-25 03:58:42'),
(22, 'Rizki', 'Andika', 1, 'SHP SCM, QSS & IDC -', NULL, NULL, NULL, NULL, NULL, 9, 0, '2025-02-25 03:58:42'),
(23, 'Himawan', 'Prasetiyo', 1, 'SHP SCM - External Plant Third Party Production', NULL, NULL, NULL, NULL, NULL, 1, 1, '2025-02-25 04:09:58'),
(24, 'Mona', 'Dwi Fenska', 2, 'SHP QSS - Quality & Food Safety', NULL, NULL, NULL, NULL, NULL, 2, 1, '2025-02-25 04:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `tr_reservasi`
--

CREATE TABLE `tr_reservasi` (
  `reservasiId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `attending` varchar(2) NOT NULL,
  `jumlah_tamu` int(10) NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tr_tamu`
--

CREATE TABLE `tr_tamu` (
  `tamuId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `jumlah_tamu` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_tamu`
--

INSERT INTO `tr_tamu` (`tamuId`, `name`, `alamat`, `sesi`, `jumlah_tamu`, `date`) VALUES
(1, 'Nandang Duryat', 'DIG', '1', '1', '2024-02-27 18:04:58'),
(2, 'Reki Maulid', 'PRD', '1', '1', '2024-02-22 21:07:39'),
(3, 'Ismail', 'PRD', '1', '1', '2024-02-22 22:28:53'),
(4, 'Wildan', 'PRD', '1', '1', '2024-02-22 21:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `tr_tamu_plant`
--

CREATE TABLE `tr_tamu_plant` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `kehadiran` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_tamu_plant`
--

INSERT INTO `tr_tamu_plant` (`nik`, `nama`, `dept`, `kehadiran`, `date`) VALUES
('000500006', 'Wachid Sadali', 'QA', 0, '2025-01-19'),
('000700013', 'Agus Dwiyanto', 'QA', 0, '2025-01-19'),
('000700014', 'Budy Sutrisno', 'QA', 0, '2025-01-19'),
('000900017', 'Malawi Adi Winarta', 'Maintenance', 0, '2025-01-19'),
('012345678', 'Muhammad Rifki', 'Maintenance', 0, '2025-01-19'),
('030500006', 'Cuncun', 'PPC', 0, '2025-01-19'),
('060500014', 'Yudha Agus Tri Basuki', 'KMI', 0, '2025-01-19'),
('060700018', 'Dedi Setiadi', 'PPC', 0, '2025-01-19'),
('060800019', 'Cahyo Agung Martanto', 'Maintenance', 0, '2025-01-19'),
('060800021', 'Fajar Fauzan', 'General', 0, '2025-01-19'),
('070700085', 'A Ropi', 'Production', 0, '2025-01-19'),
('080100001', 'Fian Hariayana', 'Engineering', 0, '2025-01-19'),
('080600015', 'Heriana Sanjaya', 'QA', 1, '2025-01-20'),
('100300022', 'Mahajiwa Sabihisma', 'PPC', 0, '2025-01-19'),
('101200061', 'Adi Sofyan', 'QA', 0, '2025-01-19'),
('120100006', 'Nanang Yulianto', 'Maintenance', 0, '2025-01-19'),
('120500034', 'Sukaryadi', 'Digitalization', 0, '2025-01-19'),
('120900060', 'Abdul Halim', 'Production', 0, '2025-01-19'),
('120900062', 'Ahmad Sanusi', 'PPC', 0, '2025-01-19'),
('120900067', 'Ismail', 'Production', 0, '2025-01-19'),
('130100009', 'Yudi Sulistyo', 'Production', 0, '2025-01-19'),
('130400076', 'Novi Nurhayati', 'Digitalization', 0, '2025-01-19'),
('130700106', 'Budi Santoso', 'Production', 0, '2025-01-19'),
('140200012', 'Rehulinta Valerina', 'HR', 0, '2025-01-19'),
('140600068', 'Yogo Priyanto', 'PPC', 0, '2025-01-19'),
('140600070', 'Ade Wulandari', 'Production', 0, '2025-01-19'),
('140700099', 'Dea Nur Anggraeni', 'Production', 0, '2025-01-19'),
('140700106', 'Fahrul Rozi', 'QA', 0, '2025-01-19'),
('150400101', 'Priyo Anarkie Yuseptyo', 'Production', 0, '2025-01-19'),
('151100330', 'Verdiana Zahroh Narendra Bawanti', 'General', 0, '2025-01-19'),
('160200086', 'Dicky Pebrian', 'GA', 0, '2025-01-19'),
('161200728', 'Dyanza Aria Perdana', 'PPC', 0, '2025-01-19'),
('180700137', 'Joko Suprianto', 'Maintenance', 0, '2025-01-19'),
('190300104', 'Satria Nur Permadi', 'Engineering', 0, '2025-01-19'),
('190500135', 'Nicky Galih Pangesti', 'QA', 0, '2025-01-19'),
('191000241', 'Haris Baihaqi', 'Maintenance', 0, '2025-01-19'),
('191100276', 'Udi Rusdiana', 'Maintenance', 0, '2025-01-19'),
('191200293', 'Fendi Setiawan', 'GA', 0, '2025-01-19'),
('200100026', 'Emanuelle Nathania Lianto', 'HR', 0, '2025-01-19'),
('200100030', 'Nandang Duryat', 'Digitalization', 0, '2025-01-19'),
('200100040', 'Yuswa Slamet', 'Management System', 0, '2025-01-19'),
('200500103', 'Hoko Diantoro', 'Engineering', 0, '2025-01-19'),
('220300162', 'Asep Sopiyan', 'Digitalization', 0, '2025-01-19'),
('221000412', 'Kastolani', 'Engineering', 0, '2025-01-19'),
('230100020', 'Brenda Mahegasari', 'Engineering', 0, '2025-01-19'),
('230300066', 'Andika Saputra', 'Engineering', 0, '2025-01-19'),
('230400068', 'Sri Rejeki', 'QA', 0, '2025-01-19'),
('231100165', 'Agung Joko Suprihanto', 'Production', 0, '2025-01-19'),
('240700072', 'Reki Maulid', 'Production', 0, '2025-01-19'),
('241100123', 'Zahro Salma Rosyidah', 'General', 0, '2025-01-19'),
('991100012', 'Syamsul Bahri', 'Production', 0, '2025-01-19'),
('K230200028', 'Mawar Puspa Endah', 'General', 0, '2025-01-19'),
('K240500072', 'Fathya Afiffah Octaviany', 'PPC', 0, '2025-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `tr_ucapan`
--

CREATE TABLE `tr_ucapan` (
  `ucapanId` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `namareservasi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ucapan` varchar(255) NOT NULL,
  `attending` varchar(2) NOT NULL,
  `jumlahtamu` int(10) NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_ucapan`
--

INSERT INTO `tr_ucapan` (`ucapanId`, `nama`, `namareservasi`, `alamat`, `ucapan`, `attending`, `jumlahtamu`, `sesi`, `date`) VALUES
(1, 'Nandur', 'Nandur', 'DIG', 'Semoga acaranya sukses', '1', 1, '1', '2024-02-22 10:17:32'),
(2, 'Nandang Duryat', 'Nandang Duryat', 'DIG', 'Test RAT', '1', 1, '1', '2024-02-27 10:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `tr_undangan`
--

CREATE TABLE `tr_undangan` (
  `intUndanganId` int(10) NOT NULL,
  `txtSubtitle` varchar(50) DEFAULT NULL,
  `txtHeader` varchar(50) DEFAULT NULL,
  `dtmWaktuAkad` datetime DEFAULT NULL,
  `dtmWaktuResepsi` datetime DEFAULT NULL,
  `txtAlamat` varchar(250) DEFAULT NULL,
  `txtQuotePria` varchar(500) DEFAULT NULL,
  `txtQuoteWanita` varchar(250) DEFAULT NULL,
  `txtGoogleMaps` varchar(50) DEFAULT NULL,
  `intNamaPengantinPria_intUserId` int(10) DEFAULT NULL,
  `intNamaPengantinWanita_intUserId` int(10) DEFAULT NULL,
  `intNamaAyahPengantinPria_intUserId` int(10) DEFAULT NULL,
  `intNamaIbuPengantinPria_intUserId` int(10) DEFAULT NULL,
  `intNamaAyahPengantinWanita_intUserId` int(10) DEFAULT NULL,
  `intNamaIbuPengantinWanita_intUserId` int(10) DEFAULT NULL,
  `dtmFirstMeet` datetime DEFAULT NULL,
  `dtmFirstDate` datetime DEFAULT NULL,
  `dtmInARelationship` datetime DEFAULT NULL,
  `dtmOther` datetime DEFAULT NULL,
  `txtQuotesPengantin` varchar(250) DEFAULT NULL,
  `txtQuotesTokohTerkenal` varchar(250) DEFAULT NULL,
  `decNoEWallet` decimal(20,0) DEFAULT NULL,
  `decRekeningBank` decimal(20,0) DEFAULT NULL,
  `intNamaPemegangRekening_intUserId` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `tr_tamu_plant`
--
ALTER TABLE `tr_tamu_plant`
  ADD PRIMARY KEY (`nik`,`date`);

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
  MODIFY `intKelaminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_undangan`
--
ALTER TABLE `tb_undangan`
  MODIFY `intUndanganId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `intUserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tr_reservasi`
--
ALTER TABLE `tr_reservasi`
  MODIFY `reservasiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tr_tamu`
--
ALTER TABLE `tr_tamu`
  MODIFY `tamuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tr_ucapan`
--
ALTER TABLE `tr_ucapan`
  MODIFY `ucapanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tr_undangan`
--
ALTER TABLE `tr_undangan`
  MODIFY `intUndanganId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
