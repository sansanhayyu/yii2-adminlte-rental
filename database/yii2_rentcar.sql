-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 11:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2_rentcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_fasilitas`
--

CREATE TABLE `detail_fasilitas` (
  `no_mobil` int(11) NOT NULL,
  `kode_fasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_fasilitas`
--

INSERT INTO `detail_fasilitas` (`no_mobil`, `kode_fasilitas`) VALUES
(1, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_sewa`
--

CREATE TABLE `detail_sewa` (
  `no_nota` int(11) NOT NULL,
  `no_mobil` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_sewa`
--

INSERT INTO `detail_sewa` (`no_nota`, `no_mobil`, `id_driver`, `tgl_kembali`, `pembayaran`, `denda`) VALUES
(1, 1, 1, '2021-07-15', 1000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `nama`, `alamat`, `no_tlp`) VALUES
(1, 'Dua Lipa', 'New York', '123456789'),
(2, 'Daniel Radcliff', 'Belakang British Museum, London.', '1298765');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `kode_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`kode_fasilitas`, `nama_fasilitas`) VALUES
(1, 'Disediakan makan siang');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1626014890),
('m130524_201442_init', 1626014893),
('m190124_110200_add_verification_token_column_to_user_table', 1626014893);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no_mobil` int(11) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `nama_mobil` varchar(25) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `tahun_pembuatan` varchar(5) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `kapasitas_penumpang` int(3) NOT NULL,
  `status_mobil` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`no_mobil`, `nopol`, `nama_mobil`, `jenis_mobil`, `tahun_pembuatan`, `harga_sewa`, `kapasitas_penumpang`, `status_mobil`) VALUES
(1, 'F123', 'Ferari', 'Sport', '2020', 2000000, 2, 'Baru'),
(6, 'B234', 'BMW', 'MPV', '2019', 1500000, 4, 'Bekas');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `nama_lengkap`, `password`, `email`, `jenkel`, `pekerjaan`, `alamat`, `kota`, `provinsi`) VALUES
(1, 'Santi Rahayu', 'santi12345', 'sansanhayyu@gmail.com', 'Perempuan', 'Programmer', 'Marinjung', 'Sukabumi', 'Jawa Barat'),
(2, 'Logan Lerman', 'logan123', 'logan@azimuth.com', 'Laki-laki', 'Aktor', 'Kolong jembatan San Francisco', 'San Francisco', 'California');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `no_nota` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jaminan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`no_nota`, `id_penyewa`, `tgl_sewa`, `jaminan`) VALUES
(1, 1, '0000-00-00', 'Rumah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'F9ZM2Fs9XbPPhTzrtMmm6MsjpfgC1SGo', '$2y$13$aAF3PowPrv87x0.PHpYmAu2Vnc4qYO1y7zzTFar984y.96aVK.dfy', NULL, 'admin@mail.com', 10, 1626022894, 1626022894, 'MWMqKFAMRSsOUHN155jft0wgtQsZa6NU_1626022894'),
(2, 'superuser', 'xF2Q558aP6g7FJcsMHJuV6AhRqBYDd_b', '$2y$13$pEJCHoNQDJKD.vZineYegeegpRkvRSO5di277Y2LKIxA/TnH.sO.C', NULL, 'superuser@mail.com', 10, 1626023147, 1626023147, 'h2aDWENAmVm4cR_nIWbRPE23FL49SzVt_1626023147');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  ADD KEY `no_mobil` (`no_mobil`),
  ADD KEY `kode_fasilitas` (`kode_fasilitas`);

--
-- Indexes for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD UNIQUE KEY `no_nota` (`no_nota`),
  ADD KEY `no_mobil` (`no_mobil`),
  ADD KEY `id_driver` (`id_driver`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`kode_fasilitas`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_mobil`),
  ADD UNIQUE KEY `nopol` (`nopol`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`no_nota`),
  ADD KEY `id_penyewa` (`id_penyewa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `kode_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `no_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `no_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_fasilitas`
--
ALTER TABLE `detail_fasilitas`
  ADD CONSTRAINT `detail_fasilitas_ibfk_1` FOREIGN KEY (`no_mobil`) REFERENCES `mobil` (`no_mobil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_fasilitas_ibfk_2` FOREIGN KEY (`kode_fasilitas`) REFERENCES `fasilitas` (`kode_fasilitas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD CONSTRAINT `detail_sewa_ibfk_1` FOREIGN KEY (`no_nota`) REFERENCES `sewa` (`no_nota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_sewa_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_sewa_ibfk_3` FOREIGN KEY (`no_mobil`) REFERENCES `mobil` (`no_mobil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
