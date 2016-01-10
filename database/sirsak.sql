-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2016 at 01:32 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirsak`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdministrator` int(2) NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guru_idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Siswa_idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_murid_idWali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Kep_sek_idKep_sek` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`, `current_login`, `last_login`, `T_U_idT_U`, `Guru_idGuru`, `Siswa_idSiswa`, `Wali_kelas_idWali_kelas`, `Wali_murid_idWali_murid`, `Kep_sek_idKep_sek`) VALUES
(13, 'Ridho', 'ridho', '926a161c6419512d711089538c80ac70', '2016-01-08 11:48:26', '2016-01-08 11:48:26', '', '', '', '', '', NULL),
(12, 'Alwin', 'alwin', '69f50a8fa8200560db52e968572e2542', '2016-01-10 19:27:57', '2016-01-10 19:27:57', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE `wali_murid` (
  `idwali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`idwali_murid`, `nama`, `alamat`, `password`) VALUES
('A02', 'Budi', 'Jakarta', 'd41d8cd98f00b204e9800998ecf8427e'),
('A04', 'Slamet', 'Jogja', 'd41d8cd98f00b204e9800998ecf8427e'),
('A05', 'Sri', 'Solo', 'd41d8cd98f00b204e9800998ecf8427e'),
('A01', 'Abu', 'Semarang', 'd41d8cd98f00b204e9800998ecf8427e'),
('A03', 'Alwin', 'Semarang', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdministrator`,`T_U_idT_U`,`Guru_idGuru`,`Siswa_idSiswa`,`Wali_kelas_idWali_kelas`,`Wali_murid_idWali_murid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_Administrator_T_U` (`T_U_idT_U`),
  ADD KEY `fk_Administrator_Guru` (`Guru_idGuru`),
  ADD KEY `fk_Administrator_Siswa` (`Siswa_idSiswa`),
  ADD KEY `fk_Administrator_Wali_kelas` (`Wali_kelas_idWali_kelas`),
  ADD KEY `fk_Administrator_Wali_murid` (`Wali_murid_idWali_murid`),
  ADD KEY `fk_Administrator_Kep_sek` (`Kep_sek_idKep_sek`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`idwali_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idAdministrator` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
