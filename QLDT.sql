-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 05:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QLDT`
--

-- --------------------------------------------------------

--
-- Table structure for table `DIENTHOAI`
--

CREATE TABLE `DIENTHOAI` (
  `id` int(11) NOT NULL,
  `Ma dien thoai` varchar(255) NOT NULL,
  `Ten dien thoai` varchar(255) NOT NULL,
  `Tinh nang` text NOT NULL,
  `Gia` double NOT NULL,
  `Hang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DIENTHOAI`
--

INSERT INTO `DIENTHOAI` (`id`, `Ma dien thoai`, `Ten dien thoai`, `Tinh nang`, `Gia`, `Hang`) VALUES
(1, 'ádfasdf', 'Book 1.', '1999', 1111, 'Nokia'),
(2, 'f5d3j9g6f5g6c2e4f5c2', 'Book 1.', '1999', 5, 'Sony Ericssion'),
(3, 'NOK0001', 'Nokia 1110i', '1999', 590000, 'Nokia'),
(4, 'kkk1111111 edit.', 'Added edit ok.edit.', '1999 edit.', 123, 'SamSung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DIENTHOAI`
--
ALTER TABLE `DIENTHOAI`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DIENTHOAI`
--
ALTER TABLE `DIENTHOAI`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
