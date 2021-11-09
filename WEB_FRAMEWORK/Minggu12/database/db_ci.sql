-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 01:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_ci`
--

CREATE TABLE `db_ci` (
  `nim` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tm_grup`
--

CREATE TABLE `tm_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_grup`
--

INSERT INTO `tm_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tm_user`
--

CREATE TABLE `tm_user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `grup` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_user`
--

INSERT INTO `tm_user` (`id`, `username`, `nama`, `password`, `grup`) VALUES
(13, 'admin', 'Admin', 'admin', 1),
(17, 'aliando', 'Aliando', 'aliando', 2),
(28, 'salma', 'Salmabinarabdul', 'salma123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_ci`
--
ALTER TABLE `db_ci`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tm_grup`
--
ALTER TABLE `tm_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_grup`
--
ALTER TABLE `tm_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_user`
--
ALTER TABLE `tm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
