-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 03:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_undangan_edumeet`
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
  `txtTitle` char(20) DEFAULT NULL,
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
(17, 'Naufal', 'A Prabowo', 1, NULL, 13, 14, 3, 3, NULL, 9, 0, '2024-02-25 12:53:12'),
(18, 'Denaya', 'C Safira', 2, NULL, 15, 16, 2, 2, NULL, 9, 0, '2024-02-25 12:54:04'),
(19, 'Bagus', 'Bimantoro', 1, NULL, NULL, NULL, NULL, NULL, NULL, 9, 1, '2024-02-25 12:53:12'),
(20, 'Mawar', 'Puspa Endah', 2, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2024-02-25 12:54:05'),
(21, 'Dini', 'Sandra Novita Manalu', 2, 'SHP SCM - P P I C', NULL, NULL, 1, 1, NULL, 9, 0, '2024-02-25 12:52:40'),
(22, 'Rizki', 'Andika', 1, 'SHP SCM, QSS & IDC -', NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-02-25 12:40:32'),
(23, 'Andriyanto', '', 1, 'PREP & PPC', NULL, NULL, NULL, NULL, NULL, 1, 1, '2024-02-25 12:40:14');

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
(1, 'Nandang Duryat', 'DIG', '1', '1', '2024-02-22 17:40:16'),
(2, 'Reki Maulid', 'PRD', '1', '1', '2024-02-22 21:07:39'),
(3, 'Ismail', 'PRD', '1', '1', '2024-02-22 22:28:53'),
(4, 'Wildan', 'PRD', '1', '1', '2024-02-22 21:23:37');

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
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `kendaraan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_ucapan`
--

INSERT INTO `tr_ucapan` (`ucapanId`, `nama`, `namareservasi`, `alamat`, `ucapan`, `attending`, `jumlahtamu`, `sesi`, `date`, `kendaraan`) VALUES
(1, 'Nandur', 'Nandur', 'DIG', 'Semoga acaranya sukses', '1', 1, '1', '2024-02-22 10:17:32', ''),
(2, 'Nandang Duryat', 'Nandang Duryat', 'DIG', 'Semoga sukses', '1', 1, '1', '2024-02-25 22:36:22', '2');

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
(1, NULL, NULL, '2022-03-27 08:00:00', '2022-03-27 10:00:00', 'GRAHA PINDAD\r\nJalan Gatot Subroto No.517, Kebon Kangkung, Kiaracondong, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40284', NULL, NULL, 'https://goo.gl/maps/Q76muirvoCRAswicA', 9, 12, 7, 8, 10, 11, '2022-02-14 08:04:15', '2022-02-14 08:04:15', '2022-02-14 08:04:15', '2022-02-14 08:04:15', NULL, NULL, '62818435453', NULL, 9);

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
  MODIFY `intUserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `ucapanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
