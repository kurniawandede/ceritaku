-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 08:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cerita`
--

CREATE TABLE `tbl_cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `judul` varchar(50) NOT NULL,
  `sampul` varchar(50) NOT NULL,
  `isi_cerita` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `rating` float(2,1) NOT NULL DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cerita`
--

INSERT INTO `tbl_cerita` (`id_cerita`, `id_user`, `judul`, `sampul`, `isi_cerita`, `tanggal`, `id_kategori`, `rating`) VALUES
(1, 2, 's', 'introver-sebuah-novel-penggugah-jiwa.jpg', 's', '2023-03-29', 1, 0.0),
(4, 5, 'A', 'Cantik-Itu-Luka-Cover1.jpeg', 'redirect(\'admin/cerita\');', '2023-03-29', 2, 0.0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Fiksi'),
(2, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id_review` int(11) NOT NULL,
  `id_cerita` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `fullname`, `email`, `password`, `role`) VALUES
(2, 'dede', 'user@gmail.com', 'user', '1'),
(4, 'user', 'user@mail.com', 'user', '2'),
(5, 'M Rizqy', '2@mail.com', '123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  ADD PRIMARY KEY (`id_cerita`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_cerita` (`id_cerita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  ADD CONSTRAINT `tbl_cerita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`),
  ADD CONSTRAINT `tbl_cerita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `tbl_review_ibfk_1` FOREIGN KEY (`id_cerita`) REFERENCES `tbl_cerita` (`id_cerita`),
  ADD CONSTRAINT `tbl_review_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
