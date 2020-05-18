-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 10:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sister_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pg_id` int(11) NOT NULL,
  `up_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `status` enum('Verifikasi','Tindak Lanjut','Selesai') NOT NULL DEFAULT 'Verifikasi',
  `jenis` enum('Pengaduan','Aspirasi','','') NOT NULL,
  `deskripsi` text NOT NULL DEFAULT '',
  `instansi` varchar(255) NOT NULL,
  `tgl_kejadian` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`pg_id`, `up_id`, `judul`, `kategori`, `status`, `jenis`, `deskripsi`, `instansi`, `tgl_kejadian`, `created_at`) VALUES
(1, 1, 'Terlambatnya Bantuan Sosial', 'Sosial', 'Selesai', 'Pengaduan', 'Saya termasuk keluarga yang membutuhkan bantuan sosial dari pemerintah, tapi bantuan sosial ini tidak kunjung datang', 'Dinas Sosial', '2020-05-17 09:00:00', '2020-05-18 07:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `up_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`up_id`, `nama`, `alamat`, `telephone`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Rafly Sadewa', 'Panaragan, Bogor', '081218860714', 'raflysdw25@gmail.com', 'raflysdw25', '$2y$10$YPxCbuESd/.AoERXKf4t3OsZHTRiCRtnlx3QhnDwMf/pgx0uzyAvW', '2020-05-18 07:05:30', NULL),
(2, 'Rafly Sadewa', 'Bogor', '081314312931', 'raflysdw06@gmail.com', 'raflysdw06', '$2y$10$YPxCbuESd/.AoERXKf4t3OsZHTRiCRtnlx3QhnDwMf/pgx0uzyAvW', '2020-05-18 11:32:21', NULL),
(3, 'Bima Anggara Pratama', 'Panaragan, Bogor', '081314312931', 'prtmanggara@gmail.com', 'bimaap', '$2y$10$YPxCbuESd/.AoERXKf4t3OsZHTRiCRtnlx3QhnDwMf/pgx0uzyAvW', '2020-05-18 06:57:04', '0000-00-00 00:00:00'),
(4, 'Yunarti', 'Panaragan, Bogor', '081314312931', 'yunartihwc@gmail.com', 'yunarti', '$2y$10$uYvxN7ZZFHp5pI6O.7C25e1muv3oxEPrHVEAy19FcsWG8TAxuERke', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pg_id`),
  ADD KEY `fk_up_id` (`up_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `fk_up_id` FOREIGN KEY (`up_id`) REFERENCES `user_profile` (`up_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
