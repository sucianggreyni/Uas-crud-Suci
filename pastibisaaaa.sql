-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 07:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pastibisaaaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `nama`, `email`, `jk`, `jabatan`) VALUES
(1, 'Zayn Malik', 'zaynmalik@gmail.com', 'pria', 'CEO'),
(2, 'Na Jaemin', 'jaemin@gmail.com', 'pria', 'karyawan'),
(3, 'Goo Yonjung', 'yonjung@gmail.com', 'wanita', 'karyawan'),
(4, 'Han Soo Hee', 'soo@gmail.com', 'wanita', 'karyawan'),
(5, 'Harry Styles', 'styles@gmail.com', 'pria', 'karyawan'),
(6, 'Louis Tomlinson', 'louis@gmail.com', 'pria', 'karyawan'),
(7, 'Lee Jeno', 'jeno@gmail.com', 'pria', 'karyawan'),
(8, 'Niall Horan', 'niall@gmail.com', 'pria', 'karyawan'),
(9, 'Liam Payne', 'liam@gmail.com', 'pria', 'karyawan'),
(10, 'Lee Taeyong', 'lee@gmail.com', 'pria', 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'jaemin', 'jaemin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'suci', 'suci@gmail.com', '3a2e378df3e264ce468013b275102223'),
(10, 'zayn', 'zayn@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(11, 'mutia', 'mutia@gmail.com', '90e528618534d005b1a7e7b7a367813f'),
(12, 'sucianggreyni', 'sucianggreyni@gmail.com', '1cc6545f956f39a79c80b05f65df3c0a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
