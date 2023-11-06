-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 02:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_dimsum`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_dimsum`
--

CREATE TABLE `menu_dimsum` (
  `nomor` int(11) NOT NULL,
  `nama_dimsum` varchar(255) DEFAULT NULL,
  `kode_dimsum` varchar(50) DEFAULT NULL,
  `harga_dimsum` int(11) DEFAULT NULL,
  `stock_dimsum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_dimsum`
--

INSERT INTO `menu_dimsum` (`nomor`, `nama_dimsum`, `kode_dimsum`, `harga_dimsum`, `stock_dimsum`) VALUES
(1, 'Siomay Udang Ayam', 'DS001', 21000, 50),
(2, 'Hakau', 'DS002', 23000, 70),
(3, 'Xiao Long Bao (Ayam)', 'DS003', 21000, 60),
(4, 'Lumpia Steam', 'DS004', 25000, 40),
(5, 'Lumpia Udang Kulit Tahu', 'DS004', 31000, 40),
(6, 'Mantau Goreng', 'DS006', 19000, 20),
(7, 'Pangsit Udang', 'DS008', 27000, 60),
(8, 'Cheong Fun Ayam', 'DS009', 29000, 30),
(9, 'Pao Telur Asin', 'DS010', 24000, 45),
(10, 'Gyoza', 'DS011', 22000, 15),
(16, 'Fung Zao', 'DS012', 25000, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_dimsum`
--
ALTER TABLE `menu_dimsum`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_dimsum`
--
ALTER TABLE `menu_dimsum`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
