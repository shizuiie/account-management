-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 10:00 AM
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
-- Database: `login-register`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sid` varchar(25) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `time_stamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sid`, `lname`, `fname`, `email`, `password`, `time_stamp`) VALUES
('A21-041', 'Sherer', 'undefined', 'shake-192@taylorswift.com', '$2y$10$JmGt2VUMev9qnD7HymNdeOdDbfz9ejCKAmMd.TroNnLMpXR0nWQEW', '2024-10-22'),
('A21-0411', 'fdsa', 'fdsa', 'erickso@gmail.com', '$2y$10$RG3Bw6OZdBSCBRraaXZZq.B.Be2bwsmkU7Z9uX9okwUIFDRLGk5Ke', '2024-10-22'),
('A21-0412', 'Sayers', 'Lilah', 'ericksonmolino@gmail.com', '$2y$10$iMxPps8ofmutSIjWW4g3iegEUs0P2evdFNQ6cBPUgWj5XSEg7nB2G', '2024-10-22'),
('A21-0413', 'Molino', 'Erciskon', 'er@gmail.com', '$2y$10$Ynw5SJ/rwvd6lgGx4u.5GemEbNMJrgH8ixaYVUsTDW8vIB6/N1AY6', '2024-10-22'),
('A21-0414', 'Molino', 'Erciskon', 'erif@gmail.com', '$2y$10$S9pByYLphiemrorMSQYxZO7ppDY1N.Fg1HK6Il8LeH78NiN66RBPe', '2024-10-22'),
('A21-0417', 'fdsa', 'fdsa', 'fdsasd@gmail.com', '$2y$10$yQRwq8PkHGowBIetGhXAzOrwr2I8f2Bj89e3LTVo804j9T5b3HqYW', '2024-10-22'),
('A21-0418', 'fdsa', 'fdsa', 'fdsassd@gmail.com', '$2y$10$c08Xss1nmhSvRQFSDPfSRuejU9fq8x9PUBLd8ABPb9Yl0bgWSFp3u', '2024-10-22'),
('A21-0423', 'fdsa', 'asdfd', 'erickson@gmail.com', '$2y$10$3XbZ8tRUf9EEoTrw3zWfc.ZbHnFzSkdTk/ONKxmk6RRVVByQMw4hS', '2024-10-22'),
('A21-0424', 'fdsa', 'asdfd', 'erickfdasson@gmail.com', '$2y$10$J02BL3KPyLq3I1H73/kWzeD9nMUYjzBnOIA0xRt.8I.w2miDZLUzW', '2024-10-22'),
('A21-0434', 'fdas', 'fdas', 'erick@gmail.com', '$2y$10$NZh3fxZ6eVVpAzPG0MeUL.icM5dw9UC1MYC8BDrxlNimxh2pXpHpy', '2024-10-22'),
('A21-0435', 'fasdf', 'fdasf', 'ercsa@gmail.com', '$2y$10$x0nk5ip096lhNhe7o14poeM8IfqFjSFAwrbQiA7zgmNJgEvpQRlQK', '2024-10-22'),
('A21-0436', 'fasdf', 'fdasf', 'ercssa@gmail.com', '$2y$10$LC7oNbzcjdF7FfALd17UJ.3s0fxqTQ2l34rDikc.JTvgUQch0O3KG', '2024-10-22'),
('A21-0489', 'Sherer', 'Molino', 'ericsksonmolino0510@gmail.com', '$2y$10$zQPjve/PmjCQb12zifM3jeGM.EtnXgmbVFUUd9Bq08pYQG9b.35K.', '2024-10-22'),
('A21-0512', 'fdsa', 'dds', 'erfdsa@gmail.com', '$2y$10$j97rRjcW9zUnYxYSsLn6MePelkf1DCsxOkjv/X79449ujJ5mjUyyy', '2024-10-22'),
('A23-321', 'Erickson', 'Molino', 'nach@scze.com', '$2y$10$UnqWwMpkgnukTqj0q87f3usBm42/fy6Xd2KsBRB6ZmXjbe3VHry1m', '2024-10-22'),
('dsad', 'fadsf', 'A21-0411', '', '$2y$10$otJqZs6yc1pd6Y0JwInakuwGm9icIh8WoYqeC5hygMWw8VXyW8l0u', '2024-10-22'),
('Sherer', 'Lilah', 'A21-0411', 'ericksonmolino0510@gmail.com', '$2y$10$cj0iJM3p0NkdpOXuKtU3nOUIiGtHgexh7lMmktRbRGKbP4Y0yv9eO', '2024-10-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
