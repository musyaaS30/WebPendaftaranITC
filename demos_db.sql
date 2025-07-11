-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2025 at 02:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `demos_tb`
--

CREATE TABLE `demos_tb` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `divisi` enum('web','design','robotic') COLLATE utf8mb4_general_ci NOT NULL,
  `alasan` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demos_tb`
--

INSERT INTO `demos_tb` (`id`, `nama`, `kelamin`, `email`, `telepon`, `divisi`, `alasan`, `created_at`) VALUES
(2, 'KENSTEIN', 'perempuan', 'abdulganihadiansyah@gmail.com', '082112772119', 'robotic', 'saya suka robotic', '2025-06-27 03:00:21'),
(4, 'ABDUL GANI HADIANSYAH', 'laki-laki', 'abdulganihadiansyah@gmail.com', '082112772112', 'web', 'saya suka BANGETTTT', '2025-06-28 14:05:27'),
(10, 'roji', 'laki-laki', 'roji33@gmail.com', '0821-4321-8714', 'web', 'fjshfsfjvsdjbvjejbvjbvj sukaaaaa', '2025-07-04 09:02:18'),
(13, 'Musyahadat Hp', 'laki-laki', 'musyaspikee@gmail.co', '0817-8308-4229', 'robotic', 'aku mau buat robot tesla', '2025-07-11 06:29:08'),
(14, 'Angel', 'laki-laki', 'angel123@gmail.com', '1234-3255-6667', 'design', 'ghddgjfhjhjkdtyujixryjk desain', '2025-07-11 07:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demos_tb`
--
ALTER TABLE `demos_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demos_tb`
--
ALTER TABLE `demos_tb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
