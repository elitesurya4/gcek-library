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
-- Database: `librarygcek_suggestbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_science`
--

CREATE TABLE `basic_science` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_science`
--

INSERT INTO `basic_science` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'Higher Engineering Mathematics', 'Bandaru Ramana', 'McGraw Hill Education', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `civil_engg`
--

CREATE TABLE `civil_engg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_engg`
--

INSERT INTO `civil_engg` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'Basic Civil Engineering', 'Satheesh Gopi', 'Pearson India', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `comp_sci_engg`
--

CREATE TABLE `comp_sci_engg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp_sci_engg`
--

INSERT INTO `comp_sci_engg` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'Java: The Complete Reference', ' Herbert Schildt', 'McGraw Hill Education', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_engg`
--

CREATE TABLE `electrical_engg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electrical_engg`
--

INSERT INTO `electrical_engg` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'A Textbook of Electrical Technology - Volume I (Basic Electrical Engineering) ', ' BL Theraja', 'Schand', '23rd');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'Rabindranath Tagore Gitanjali', 'W.B. Yeats', 'Laxmi Publications', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `humanity`
--

CREATE TABLE `humanity` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `humanity`
--

INSERT INTO `humanity` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'An Outline of English Literature', 'Thornley', 'Pearson India', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `mech_engg`
--

CREATE TABLE `mech_engg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mech_engg`
--

INSERT INTO `mech_engg` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'Basic Mechanical Engineering', ' Pravin Kumar', 'Pearson India', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_publisher` varchar(100) NOT NULL,
  `book_edition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `name`, `email`, `book_title`, `book_author`, `book_publisher`, `book_edition`) VALUES
(1, 'Suryanshu Patnaik', 'suryanshupatnaik4@gmail.com', 'MESSAGE IN A BOTTLE', ' Nicholas Sparks', 'DO NOT USE', '1st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_science`
--
ALTER TABLE `basic_science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_engg`
--
ALTER TABLE `civil_engg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_sci_engg`
--
ALTER TABLE `comp_sci_engg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_engg`
--
ALTER TABLE `electrical_engg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humanity`
--
ALTER TABLE `humanity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mech_engg`
--
ALTER TABLE `mech_engg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_science`
--
ALTER TABLE `basic_science`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `civil_engg`
--
ALTER TABLE `civil_engg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comp_sci_engg`
--
ALTER TABLE `comp_sci_engg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electrical_engg`
--
ALTER TABLE `electrical_engg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `humanity`
--
ALTER TABLE `humanity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mech_engg`
--
ALTER TABLE `mech_engg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
