-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: db_undangan_rat
-- ------------------------------------------------------
-- Server version	8.0.45

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_kelamin`
--

DROP TABLE IF EXISTS `tb_kelamin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_kelamin` (
  `intKelaminId` int NOT NULL AUTO_INCREMENT,
  `txtKelamin` char(20) DEFAULT NULL,
  `txtPanggilan` varchar(30) DEFAULT NULL,
  `txtPanggilanLain` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`intKelaminId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kelamin`
--

LOCK TABLES `tb_kelamin` WRITE;
/*!40000 ALTER TABLE `tb_kelamin` DISABLE KEYS */;
INSERT INTO `tb_kelamin` VALUES (1,'Laki-laki','Bapak','Jang'),(2,'Perempuan','Ibu','Neng');
/*!40000 ALTER TABLE `tb_kelamin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_undangan`
--

DROP TABLE IF EXISTS `tb_undangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_undangan` (
  `intUndanganId` int NOT NULL AUTO_INCREMENT,
  `txtStatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`intUndanganId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_undangan`
--

LOCK TABLES `tb_undangan` WRITE;
/*!40000 ALTER TABLE `tb_undangan` DISABLE KEYS */;
INSERT INTO `tb_undangan` VALUES (1,'Pengantin Pria'),(2,'Pengantin Wanita'),(3,'Ayah Pria'),(4,'Ibu Pria'),(5,'Ayah Wanita'),(6,'Ibu Wanita'),(7,'Wali Pria'),(8,'Wali Wanita'),(9,'Lain-lain');
/*!40000 ALTER TABLE `tb_undangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_user` (
  `intUserId` int NOT NULL AUTO_INCREMENT,
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
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intUserId`),
  KEY `txtKelaminId` (`txtKelaminId`),
  KEY `txtAyahId` (`txtAyahId`),
  KEY `txtIbuId` (`txtIbuId`),
  KEY `txtUndanganId` (`txtUndanganId`),
  CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`txtKelaminId`) REFERENCES `tb_kelamin` (`intKelaminId`),
  CONSTRAINT `tb_user_ibfk_2` FOREIGN KEY (`txtUndanganId`) REFERENCES `tb_undangan` (`intUndanganId`),
  CONSTRAINT `tb_user_ibfk_3` FOREIGN KEY (`txtAyahId`) REFERENCES `tb_user` (`intUserId`),
  CONSTRAINT `tb_user_ibfk_4` FOREIGN KEY (`txtIbuId`) REFERENCES `tb_user` (`intUserId`),
  CONSTRAINT `tb_user_ibfk_5` FOREIGN KEY (`txtUndanganId`) REFERENCES `tb_undangan` (`intUndanganId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (1,'Nandang','Duryat',1,'S.Kom.',3,4,1,1,NULL,9,0,'2022-02-13 09:43:12'),(2,'Ananda','Rismawati',2,'S.I.Kom.',5,6,1,4,NULL,9,0,'2022-02-13 09:43:12'),(3,'Ukim',NULL,1,NULL,NULL,NULL,4,6,NULL,9,0,'2022-02-09 06:08:42'),(4,'Arni',NULL,2,NULL,NULL,NULL,2,3,NULL,9,0,'2022-02-09 06:08:42'),(5,'Ali','Nurdin',1,NULL,NULL,NULL,NULL,NULL,NULL,9,0,'2022-02-09 06:08:42'),(6,'Engkom','Komalasari',2,NULL,NULL,NULL,NULL,NULL,NULL,9,0,'2022-02-09 06:08:42'),(7,'Kostaman',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,9,0,'2022-04-19 13:51:24'),(8,'Delis','Setiarni',2,NULL,NULL,NULL,NULL,NULL,NULL,9,0,'2022-04-19 13:51:24'),(9,'Noordiansyah',NULL,1,NULL,NULL,NULL,3,3,NULL,9,0,'2022-04-19 13:51:24'),(10,'Pandu','Sudewo',1,'(Alm.)',NULL,NULL,NULL,NULL,NULL,9,0,'2022-04-19 13:51:24'),(11,'Rima','Khuriatul Rakhmatiah',2,NULL,NULL,NULL,NULL,0,NULL,9,0,'2022-04-19 13:51:24'),(12,'Hilya','Dina Rosyida',2,NULL,NULL,NULL,1,2,NULL,9,0,'2022-04-19 13:51:24'),(13,'Drs. Purwono',NULL,1,'(Alm.)',NULL,NULL,NULL,NULL,NULL,3,0,'2026-02-23 02:41:02'),(14,'Yanuar','Riswanti',2,NULL,NULL,NULL,NULL,NULL,NULL,4,0,'2026-02-23 02:41:01'),(15,'Iman','Suparman',1,NULL,NULL,NULL,NULL,NULL,NULL,5,0,'2026-02-23 02:41:00'),(16,'Kurniati','Watiningsih',2,NULL,NULL,NULL,NULL,NULL,NULL,6,0,'2026-02-23 02:41:00'),(17,'Naufal','A Prabowo',1,NULL,13,14,3,3,NULL,1,0,'2023-10-02 19:52:44'),(18,'Denaya','C Safira',2,NULL,15,16,2,2,NULL,2,0,'2023-10-02 19:52:44'),(19,'Bagus','Bimantoro',1,NULL,NULL,NULL,NULL,NULL,NULL,1,0,'2026-02-23 02:40:59'),(20,'Mawar','Puspa Endah',2,NULL,NULL,NULL,NULL,NULL,NULL,9,0,'2024-02-19 08:09:06'),(21,'Dini','Sandra Novita Manalu',2,'SHP SCM - P P I C',NULL,NULL,1,1,NULL,2,0,'2026-02-23 02:40:57'),(22,'Rizki','Andika',1,'SHP SCM, QSS & IDC -',NULL,NULL,NULL,NULL,NULL,1,0,'2026-02-23 02:40:55'),(23,'Himawan','Prasetiyo',1,'QSS - TPP',NULL,NULL,NULL,NULL,NULL,1,1,'2026-02-23 02:45:12'),(24,'Mutiara','Siska Putri Utami',2,'QSS - Supply Chain',NULL,NULL,NULL,NULL,NULL,2,1,'2026-02-23 02:45:06');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_reservasi`
--

DROP TABLE IF EXISTS `tr_reservasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_reservasi` (
  `reservasiId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `attending` varchar(2) NOT NULL,
  `jumlah_tamu` int NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reservasiId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_reservasi`
--

LOCK TABLES `tr_reservasi` WRITE;
/*!40000 ALTER TABLE `tr_reservasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_reservasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_tamu`
--

DROP TABLE IF EXISTS `tr_tamu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_tamu` (
  `tamuId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sesi` varchar(5) NOT NULL,
  `jumlah_tamu` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tamuId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_tamu`
--

LOCK TABLES `tr_tamu` WRITE;
/*!40000 ALTER TABLE `tr_tamu` DISABLE KEYS */;
/*!40000 ALTER TABLE `tr_tamu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_ucapan`
--

DROP TABLE IF EXISTS `tr_ucapan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_ucapan` (
  `ucapanId` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `namareservasi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ucapan` varchar(255) NOT NULL,
  `attending` varchar(2) NOT NULL,
  `jumlahtamu` int NOT NULL,
  `nik_perwakilan` varchar(16) DEFAULT NULL,
  `sesi` varchar(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ucapanId`),
  KEY `idx_nik_perwakilan` (`nik_perwakilan`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_ucapan`
--

LOCK TABLES `tr_ucapan` WRITE;
/*!40000 ALTER TABLE `tr_ucapan` DISABLE KEYS */;
INSERT INTO `tr_ucapan` VALUES (1,'Anonymous','Anonymous','None','Testing Anonymous','2',1,'200100030','1','2026-03-03 05:25:31'),(2,'Maryati Ramli','Maryati Ramli','SHP CS - Branch Head Operational','Berada dikantor cabang dan sedang ada agenda pekerjaan lainnya','2',1,'130200022','1','2026-03-03 13:49:37'),(3,'Anton Heru Purnama','Anton Heru Purnama','GVN - PRODUCTION AND WAREHOUSE','Semangat dan semakin maju KKM','1',1,NULL,'1','2026-03-04 19:21:14'),(4,'Brenda Mahegasari','Brenda Mahegasari','SHP SCM - Engineering','Semangat KKM semoga dividennya bisa 2 digit aamiin 😊','1',1,NULL,'1','2026-03-04 19:38:38'),(5,'Mona Dwi Fenska','Mona Dwi Fenska','SHP QSS - Quality &amp; Food Safety','Semangat untuk acaranya! \nSemoga semakin sukses dan sejahtera untuk semua pengguna KKM :)','1',1,NULL,'1','2026-03-04 19:39:35'),(6,'Arif Darmawan','Arif Darmawan','SHP FA - Costing','Terus jaya','1',1,NULL,'1','2026-03-04 19:47:24'),(7,'Haris Baihaqi','Haris Baihaqi','SHP SCM - SHP Plant Maintenance','Positif','1',1,NULL,'1','2026-03-04 19:51:46'),(8,'Saptadi','Saptadi','SHP SCM - SHP Plant PPC','Semakin jaya selalu','1',1,NULL,'1','2026-03-04 19:51:58'),(9,'Widari Khusumaningrum','Widari Khusumaningrum','SHP SCM - P P I C','KKM semakin jaya','1',1,NULL,'1','2026-03-04 19:58:15'),(10,'Rifka Azmi Nurinda','Rifka Azmi Nurinda','SHP SCM - Procurement','Jaya selalu','1',1,NULL,'1','2026-03-04 19:59:26'),(11,'Novi Nurhayati','Novi Nurhayati','SHP QSS - Analytical Center','Semoga KKM makin jaya jaya jaya','1',1,NULL,'1','2026-03-04 20:01:18'),(12,'Ranti Murnia','Ranti Murnia','SHP QSS - SHE','Jozz terus KKM','1',1,NULL,'1','2026-03-04 20:01:23'),(13,'Achmad Rifai','Achmad Rifai','SHP SCM - SHP Plant Production','Semoga tidak membosankan','1',1,NULL,'1','2026-03-04 20:04:26'),(14,'Andika Saputra','Andika Saputra','SHP SCM - Engineering','Semangat dan Sejahtera','1',1,NULL,'1','2026-03-04 20:17:42'),(15,'Ainurrofik','Ainurrofik','SHP QSS - Corporate QA','maju terus ','1',1,NULL,'1','2026-03-04 20:20:02'),(16,'Dede Hapid','Dede Hapid','GVN - WAREHOUSE ','KKM semakin di depan','1',1,NULL,'1','2026-03-04 20:58:13'),(17,'Luthfi Praditya Kuswinoto','Luthfi Praditya Kuswinoto','SHP FA - Costing','Terus berkembang!','1',1,NULL,'1','2026-03-04 21:44:39'),(18,'Eurotiva Pratista','Eurotiva Pratista','SHP QSS - SHE','Sakjoseee','1',1,NULL,'1','2026-03-04 23:26:02'),(19,'Guntur Svingkoe','Guntur Svingkoe','SHP SCM - Procurement','Maju Tak Kendor','1',1,NULL,'1','2026-03-05 00:13:52'),(20,'Muhamad Feri Andika Saputra','Muhamad Feri Andika Saputra','SHP QSS - Quality &amp; Food Safety','Sukses bagi kita semua','1',1,NULL,'1','2026-03-05 04:30:29'),(21,'M. Alwiyadin','M. Alwiyadin','KAMI - PPIC AND WAREHOUSE','Semoga KKM memeberikan banyak manfaat buat anggota','1',1,NULL,'1','2026-03-05 05:09:44'),(22,'Puput Putuhatti','Puput Putuhatti','KAMI - FINANCE AND ACCOUNTING','Lancar lancar yah ','1',1,NULL,'1','2026-03-05 05:12:42'),(23,'Malawi Adi Winarta','Malawi Adi Winarta','SHP SCM - SHP Plant Maintenance','Semoga KKM semakin exist& tingkatkan teruw pelayanan agar semakin maju dan .....','1',1,NULL,'1','2026-03-05 05:15:18'),(24,'Aris Yusuf','Aris Yusuf','SHP SCM - WHL FG','Masak ikan buat arisan\nSediakan wadah berjumlah delapan\nKita jadikan harapan kesuksesan\nSebagai bekal melangkah ke depan','1',1,NULL,'1','2026-03-05 05:23:03'),(25,'Budi Santoso','Budi Santoso','SHP SCM - SHP Plant Production','semoga berkah','1',1,NULL,'1','2026-03-05 05:29:10'),(26,'Heri Iwan Susanto','Heri Iwan Susanto','SHP SCM - WHL RMPM','Semoga KKM lebih maju dan anggota lebih sejahtera','1',1,NULL,'1','2026-03-05 05:33:24'),(27,'Archo Budhi Winarso','Archo Budhi Winarso','SHP SCM - SHP Plant QA','Semoga kkm lebih maju dan berkembang','1',1,NULL,'1','2026-03-05 05:39:55'),(28,'Sodikin','Sodikin','SHP SCM - SHP Plant Production','Semoga KKM bermanfaat bagi anggotanya dan berkah','1',1,NULL,'1','2026-03-05 06:05:03'),(29,'Muhammad Ichsan Syahrizal','Muhammad Ichsan Syahrizal','SHP SCM - External Plant Third Party Production','Tetap semangat jangan Semaput','1',1,NULL,'1','2026-03-05 06:05:21'),(30,'Yosep Iskandar','Yosep Iskandar','SHP SCM - SHP Plant PPC','Semoga acaranya seru dan lancar','1',1,NULL,'1','2026-03-05 06:16:41'),(31,'Nur Ali Husein','Nur Ali Husein','SHP SCM - SHP Plant Production','Daun salam di ikat empat ketupat satu di bagi empat yuk ucapkan salam selagi sempat ....','1',1,NULL,'1','2026-03-05 06:44:59'),(32,'Syefira Salsabila Dwi Oktapinanti','Syefira Salsabila Dwi Oktapinanti','SHP SCM - External Plant Contract Manufacturing','Jaya selalu','1',1,NULL,'1','2026-03-05 07:22:05'),(33,'Ahmad Salahudin','Ahmad Salahudin','SHP SCM - WHL RMPM','Sejahtera selalu','1',1,NULL,'1','2026-03-05 08:07:42'),(34,'Dimas Fauzan','Dimas Fauzan','SHP SCM - SHP Plant QA','Semoga acaranya berjalan dengan lancar, soliddd !','1',1,NULL,'1','2026-03-05 08:12:06'),(35,'Moh Amin','Moh Amin','SHP SCM - SHP Plant Production','Karena ada DL kantor dari tgl 8-15 maret 26','2',1,'130200010 ','1','2026-03-05 08:31:52'),(36,'Ronald Irawan','Ronald Irawan','CRM - IT AND PRODUCT MANAGEMENT','Semoga Dapat doorprize, dah lama gak dapat doorprize dari koperasi :)','1',1,NULL,'1','2026-03-05 08:37:14'),(37,'Dwianto Joko Utomo','Dwianto Joko Utomo','SHP FA &amp; Legal','ada agenda RUPS Perseroan','0',1,NULL,'1','2026-03-05 08:38:42'),(38,'Candra Saputra','Candra Saputra','SHP CS - Commercial Operation Support','semangat menghadiri undangan RAT ','1',1,NULL,'1','2026-03-05 08:44:06'),(39,'Novalia Dyah Indayani','Novalia Dyah Indayani','SHP CS - Branch Head Operational','Bersamaan dengan rakor cabang','0',1,NULL,'1','2026-03-05 09:32:01'),(40,'Rickha Wijayanthy','Rickha Wijayanthy','SHP FA - Finance','Dapat Dorprize..','1',1,NULL,'1','2026-03-05 08:44:11'),(41,'Peter Ivan Devara','Peter Ivan Devara','SHP SCM - Procurement','Sukses dan Berkah','1',1,NULL,'1','2026-03-05 08:45:30'),(42,'Nadia Febianti','Nadia Febianti','SHP HCGA - Human Capital Center of Excellence	','Pertama kali hadir offline yeay','1',1,NULL,'1','2026-03-05 08:47:04'),(43,'Catarina Sudarmiyanti','Catarina Sudarmiyanti','SHP CS - Branch Head Operational','Cuti acara keluarga di Yogyakarta','0',1,NULL,'1','2026-03-05 08:58:36'),(44,'Anis Zainuddin','Anis Zainuddin','SHP NSD - Sales &amp; Distribution West','Sudah ada agenda lain yang terjadwal','2',1,'220300175','1','2026-03-05 09:00:45'),(45,'Wahyu Werdi Utami','Wahyu Werdi Utami','SHP CS - Branch Head Operational','Rakor Cabang','0',1,NULL,'1','2026-03-05 09:01:25'),(46,'Vivi Felicia','Vivi Felicia','SHP IDC - Prodev Powder Children','Sukses Selalu','1',1,NULL,'1','2026-03-05 09:01:29'),(47,'Gupemala Napolta Silitonga','Gupemala Napolta Silitonga','SHP CS - Branch Head Operational','Bersamaan dengan Rakor Cabang','0',1,NULL,'1','2026-03-05 09:13:45'),(48,'Ridho Lazuardi','Ridho Lazuardi','SHP FA - Costing','Menyala S-H-U','1',1,NULL,'1','2026-03-05 09:21:40'),(49,'Endy Hermawan','Endy Hermawan','SHP IDC - Process Development','terima kasih, ada agenda lain','0',1,NULL,'1','2026-03-05 10:47:04'),(50,'Agus Hariyanto','Agus Hariyanto','SHP SCM - WHL RMPM','Untuk menjadi yang terbaik ','1',1,NULL,'1','2026-03-05 10:58:38'),(51,'Syamsul Bahri','Syamsul Bahri','SHP SCM - SHP Plant Production','kkm top','1',1,NULL,'1','2026-03-05 11:09:38'),(52,'Susi Ariyani, Stp','Susi Ariyani, Stp','SHP CPS - Marketing Nutrition - 2','Trimakasih utk undangannya, ada agenda meeting yg sdh terjadwal','0',1,NULL,'1','2026-03-05 11:16:16'),(53,'Andri Suryadi','Andri Suryadi','SHP SCM - SHP Plant Production','Sukses selalu RAT  dan banyak membawa ke untungan ,,','1',1,NULL,'1','2026-03-05 12:02:51'),(54,'Juairiah','Juairiah','SHP SCM - SHP Plant Production','Sekses selalu semoga berkah','1',1,NULL,'1','2026-03-05 12:03:24'),(55,'Tifani Yuliawati','Tifani Yuliawati','SHP IDC - Prodev Powder Adult','Ada agenda lain','2',1,'251000150','1','2026-03-05 12:13:52'),(56,'Benita Ivan Palupi','Benita Ivan Palupi','SHP QSS - Analytical Center','Semoga lancar ','1',1,NULL,'1','2026-03-05 12:14:10'),(57,'Muhamad Febrian','Muhamad Febrian','SHP HCGA - Human Capital Center of Excellence	','Semangat','1',1,NULL,'1','2026-03-05 12:50:18'),(58,'Yuanita Yuniar','Yuanita Yuniar','CRM - CONNECTION HUB','Mhn maaf tidak bisa hadir Bp/Ibu, krn bersamaan ada meeting, smg sukses selalu ya','0',1,NULL,'1','2026-03-05 17:45:03'),(59,'Vony Heidy Evelyn','Vony Heidy Evelyn','SHP HCGA - Human Capital Business Partner','Semakin cuan buat KKM','1',1,NULL,'1','2026-03-05 18:29:53'),(60,'Punirah','Punirah','SHP SCM - SHP Plant Production','Semoga lancar','1',1,NULL,'1','2026-03-05 20:25:53');
/*!40000 ALTER TABLE `tr_ucapan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_undangan`
--

DROP TABLE IF EXISTS `tr_undangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_undangan` (
  `intUndanganId` int NOT NULL AUTO_INCREMENT,
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
  `intNamaPemegangRekening_intUserId` int DEFAULT NULL,
  PRIMARY KEY (`intUndanganId`),
  KEY `intNamaPengantinPria_intUserId` (`intNamaPengantinPria_intUserId`),
  KEY `intNamaPengantinWanita_intUserId` (`intNamaPengantinWanita_intUserId`),
  KEY `intNamaAyahPengantinPria_intUserId` (`intNamaAyahPengantinPria_intUserId`),
  KEY `intNamaIbuPengantinPria_intUserId` (`intNamaIbuPengantinPria_intUserId`),
  KEY `intNamaAyahPengantinWanita_intUserId` (`intNamaAyahPengantinWanita_intUserId`),
  KEY `intNamaIbuPengantinWanita_intUserId` (`intNamaIbuPengantinWanita_intUserId`),
  KEY `intNamaPemegangRekening_intUserId` (`intNamaPemegangRekening_intUserId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_undangan`
--

LOCK TABLES `tr_undangan` WRITE;
/*!40000 ALTER TABLE `tr_undangan` DISABLE KEYS */;
INSERT INTO `tr_undangan` VALUES (1,NULL,NULL,'2022-03-27 08:00:00','2022-03-27 10:00:00','GRAHA PINDAD\r\nJalan Gatot Subroto No.517, Kebon Kangkung, Kiaracondong, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40284',NULL,NULL,'https://goo.gl/maps/Q76muirvoCRAswicA',9,12,7,8,10,11,'2022-02-14 08:04:15','2022-02-14 08:04:15','2022-02-14 08:04:15','2022-02-14 08:04:15',NULL,NULL,62818435453,NULL,9);
/*!40000 ALTER TABLE `tr_undangan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-03-05 15:54:56
