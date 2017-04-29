-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 12:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableall`
--

CREATE TABLE `tableall` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `born` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableall`
--

INSERT INTO `tableall` (`id`, `name`, `age`, `born`) VALUES
(471, 'Darin', 32, 'Sweden'),
(472, 'Donald', 37, 'Sweden'),
(473, 'Mario', 65, 'Sweden'),
(474, 'Ronaldo', 32, 'Spania'),
(475, 'Hilda', 44, 'Spania'),
(492, 'Sergio', 38, 'Spania'),
(505, 'Mario', 22, 'Germany'),
(506, 'Steffi', 44, 'Sweden'),
(509, 'Martin', 36, 'Sweden'),
(513, 'Repecka', 55, 'Germany');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableall`
--
ALTER TABLE `tableall`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tableall`
--
ALTER TABLE `tableall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
