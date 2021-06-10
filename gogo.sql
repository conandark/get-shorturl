-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 07:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblshorturl`
--

CREATE TABLE `tblshorturl` (
  `id` int(11) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp(),
  `short_url` varchar(256) NOT NULL,
  `full_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblshorturl`
--

INSERT INTO `tblshorturl` (`id`, `create_at`, `update_at`, `short_url`, `full_url`) VALUES
(1, '2021-06-09 22:55:45', '2021-06-09 22:55:45', 'MqoiUMHM', 'https://ufu.life/pages/login'),
(2, '2021-06-09 22:55:48', '2021-06-09 22:55:48', 'Yiumwdvt', 'Generate'),
(3, '2021-06-09 22:58:33', '2021-06-09 22:58:33', 'DhwJdeWD', 'Generate'),
(4, '2021-06-09 22:58:57', '2021-06-09 22:58:57', 'ik4R95su', 'Generate'),
(5, '2021-06-09 23:01:12', '2021-06-09 23:01:12', 'kWw1NBZw', 'Generate'),
(6, '2021-06-09 23:01:16', '2021-06-09 23:01:16', 'WbE09hEY', 'Generate'),
(7, '2021-06-09 23:02:38', '2021-06-09 23:02:38', 'b0J4ls6w', 'Generate'),
(8, '2021-06-09 23:02:51', '2021-06-09 23:02:51', 'WIPvM9MU', 'Generate'),
(9, '2021-06-09 23:03:23', '2021-06-09 23:03:23', 'wkuvumTm', 'Generate'),
(10, '2021-06-09 23:46:19', '2021-06-09 23:46:19', 'HQPCDH9l', 'https://ufu.life');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblshorturl`
--
ALTER TABLE `tblshorturl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblshorturl`
--
ALTER TABLE `tblshorturl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
