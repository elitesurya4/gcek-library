-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 10:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarygcek_scrollingnotice`
--

-- --------------------------------------------------------

--
-- Table structure for table `scrollingnotice`
--

CREATE TABLE `scrollingnotice` (
  `id` int(11) NOT NULL,
  `scroll_title` varchar(100) NOT NULL,
  `scroll_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scrollingnotice`
--

INSERT INTO `scrollingnotice` (`id`, `scroll_title`, `scroll_link`) VALUES
(1, 'OPAC USER MANUAL OF CENTRAL LIBRARY GCE KALAHANDI', 'OPAC Manual GCEK CENTRAL LIBRARY.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scrollingnotice`
--
ALTER TABLE `scrollingnotice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scrollingnotice`
--
ALTER TABLE `scrollingnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
