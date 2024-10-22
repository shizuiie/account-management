-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(128) NOT NULL,
  `course` varchar(128) NOT NULL,
  `year` year(4) NOT NULL,
  `adviser` varchar(128) NOT NULL,
  `abstract` text NOT NULL,
  `file` text NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `title`, `author`, `course`, `year`, `adviser`, `abstract`, `file`, `upload_date`) VALUES
(29, 'dsf', 'fds', 'Bachelor of Science in Nursing', '2018', 'Wishdd', 'About thesis archiving dasfadfdafa', 'file', '2024-09-22'),
(30, 'fdas', 'fdas', 'Bachelor of Science in Nursing', '2018', 'fdas', 'About thesis archiving dasfadfdafa', 'file', '2024-09-22'),
(31, 'fdas', 'fdas', 'Bachelor of Science in Nursing', '2018', 'fdas', 'About thesis archiving dasfadfdafa', 'uploads/Lesson_2-The_Demand_for_Security.pdf', '2024-09-22'),
(32, 'dfas', 'fdasf', 'Bachelor of Science in Nursing', '2016', 'ds', 'fdsafadsf', 'file', '2024-09-22'),
(33, 'dfas', 'fdasf', 'Bachelor of Science in Nursing', '2000', 'ds', 'fdsafadsf', '', '2024-09-22'),
(34, 'fds', 'fds', 'Bachelor of Science in Nursing', '2017', 'fdsa', 'About thesis archiving dasfadfdafa', 'file', '2024-09-22'),
(35, 'df', 'fdas', 'Bachelor of Science in Nursing', '2017', 'Wish', 'About thesis archiving dasfadfdafa', 'file', '2024-09-22'),
(36, 'dsf', 'fdsa', 'Bachelor of Science in Nursing', '2018', 'Wish', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(37, 'fd', 'fds', 'Bachelor of Science in Nursing', '2018', 'Wishdd', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(38, 'gfdg', 'gfds', 'Bachelor of Science in Nursing', '2018', 'Wishdd', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(39, 'fdf', 'dsa', 'Bachelor of Science Hospitality Management', '2018', 'Wishdd', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(40, 'fds', 'fds', 'Bachelor of Science in Nursing', '2018', 'Wishdd', 'About thesis archiving dasfadfdafa', '', '2024-09-23'),
(41, 'fe', 'dsa', 'Bachelor of Science in Accountancy', '2018', 'Wish', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(42, 'fds', 'fdsa', 'Bachelor of Science in Nursing', '2018', 'Wish', 'About thesis archiving', 'file', '2024-09-23'),
(43, 'fd', 'f', 'Bachelor of Science in Nursing', '2018', 'Wish', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(44, 'f', 'asd', 'Bachelor of Science in Nursing', '2018', 'Wish', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(45, 'fd', 'fd', 'Bachelor of Science in Nursing', '2018', 'Wishdd', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23'),
(46, 'fda', 'fdas', 'Bachelor of Science in Accountancy', '2018', 'asd', 'About thesis archiving dasfadfdafa', 'file', '2024-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
