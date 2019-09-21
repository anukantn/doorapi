-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2019 at 10:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Codeigniter Rest API', 'Momo Baruno', '2015-12-26 09:17:14', '2015-12-26 09:17:14'),
(4, 'x', 'xx', '2019-09-18 11:05:15', '2019-09-18 06:09:37'),
(5, 'll', 'xxvv', '2019-09-18 11:10:10', '2019-09-18 11:10:10'),
(6, 'll', 'xxvv', '2019-09-21 17:00:22', '2019-09-21 17:00:22'),
(7, 'll', 'xxvv', '2019-09-21 19:22:29', '2019-09-21 19:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `roomkeys`
--

CREATE TABLE `roomkeys` (
  `room_number` int(10) NOT NULL,
  `access_key` varchar(50) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomkeys`
--

INSERT INTO `roomkeys` (`room_number`, `access_key`, `startdate`, `enddate`) VALUES
(11, 'testkey', '21-09-2019', '2-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$1$Dtqyvz7/$wZSaZbfHgn0UbLlVi1HHp0', 'Admin', '2019-09-21 14:34:23', '2015-12-25 10:35:16', '2015-12-25 10:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `users_authentication`
--

CREATE TABLE `users_authentication` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expired_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_authentication`
--

INSERT INTO `users_authentication` (`id`, `users_id`, `token`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 1, '$1$6fjNSBRR$7lx.mxo/q1LbNO7f5.7w8.', '2015-12-27 23:28:00', '2015-12-27 11:28:00', '2015-12-27 11:28:00'),
(2, 1, '$1$HY2H7rB0$2U.dlCsoHX21s/gvjCypG/', '2015-12-27 23:28:10', '2015-12-27 11:28:10', '2015-12-27 11:28:10'),
(4, 1, '$1$UlFQAUZe$hDSbQbkcCocG0zl8pVPbd1', '2019-09-18 17:34:46', '2019-09-18 10:34:46', '2019-09-18 10:34:46'),
(5, 1, '$1$ZkxxAecG$P08BBhtQgO9QMTVA3dzC91', '2019-09-18 17:35:15', '2019-09-18 10:35:15', '2019-09-18 10:35:15'),
(6, 1, '$1$YWwBAJo7$AFQUWYi.Z9c6FjjHfYnkr/', '2019-09-18 17:35:52', '2019-09-18 10:35:52', '2019-09-18 10:35:52'),
(7, 1, '$1$kY2//FQd$WPo7eNzFucZAVxhSbiwDh0', '2019-09-18 17:36:10', '2019-09-18 10:36:10', '2019-09-18 10:36:10'),
(8, 1, '$1$s58QMcoY$l.0lzniAxJQZvVQlo8dqR0', '2019-09-18 18:10:10', '2019-09-18 10:36:53', '2019-09-18 06:10:10'),
(9, 1, '$1$jgMT3dRp$mPNEo9WA7erXQndf22QNO1', '2019-09-22 00:00:22', '2019-09-21 16:59:42', '2019-09-21 12:00:22'),
(10, 1, '$1$Li596IQ.$YUcyi.hhvV/jDSIPVP/Km/', '2019-09-22 02:19:43', '2019-09-21 19:19:43', '2019-09-21 19:19:43'),
(11, 1, '$1$ADPkVBHx$RGsWJnk5v.Q0llBTS4qkZ/', '2019-09-22 02:20:17', '2019-09-21 19:20:17', '2019-09-21 19:20:17'),
(12, 1, '$1$5U4x3kvM$3f1GKvqmKH3p4dlGZ0xn40', '2019-09-22 02:33:11', '2019-09-21 19:21:39', '2019-09-21 14:33:11'),
(13, 1, '$1$KanqUlDe$iWxHE5IaqsZAC6x6nqKSt1', '2019-09-22 03:00:02', '2019-09-21 19:34:23', '2019-09-21 15:00:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomkeys`
--
ALTER TABLE `roomkeys`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users_authentication`
--
ALTER TABLE `users_authentication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_authentication`
--
ALTER TABLE `users_authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
