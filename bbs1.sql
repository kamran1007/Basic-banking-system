-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 10:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbs1`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender`, `receiver`, `amount`) VALUES
(0, 'mallick', 'kamran', 44),
(0, 'mallick', 'kamran', 65),
(0, 'mallick', 'kamran', 7),
(0, 'mallick', 'kamran', 778),
(0, 'mallick', 'kamran', 778),
(0, 'kamran', 'aasif', 6646),
(0, 'Mallick', 'Aafia', 7655),
(0, 'Muazzam', 'shahbaz', 67675),
(0, 'Mallick', 'Aafia', 545),
(0, 'kamran', 'Muazzam', 7698),
(0, 'Mallick', 'Aafia', 76575),
(0, 'Aafia', 'shams', 65657);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `names` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `credit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `credit`) VALUES
(101, 'Mallick', 'mallick@gmail.com', 215225),
(102, 'kamran', 'kamranquamar@protonmail.ch', 43896),
(103, 'sqalain', 'saqlain@gmail.com', 400000),
(104, 'Adnan', 'adnan@gmail.com', 30000),
(105, 'shahbaz', 'squamar7@gmail.com', 567675),
(106, 'Muazzam', 'mquamarhaque@gmail.com', 440023),
(107, 'Quamar', 'kamranquamar@outlook.com', 10000),
(108, 'shams', 'quamar234@gmail.com', 3740303),
(109, 'Aafia', 'aafiaasif@gmail.com', 3474663),
(110, 'aasif', 'aasifmallick@gmail.com', 5463191);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`names`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
