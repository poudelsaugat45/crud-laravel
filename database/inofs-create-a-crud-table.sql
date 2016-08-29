-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 01:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruds`
--

-- --------------------------------------------------------

--
-- Table structure for table `inofs`
--

CREATE TABLE `inofs` (
  `name` varchar(20) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `sn` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inofs`
--

INSERT INTO `inofs` (`name`, `updated_at`, `created_at`, `sn`, `id`) VALUES
('SaugatPoudel', '2016-08-29', '2016-08-29', 1, 1),
('sasda', '2016-08-29', '2016-08-29', 2, 2),
('dag', '2016-08-29', '2016-08-29', 3, 3),
('qwerty', '2016-08-29', '2016-08-29', 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inofs`
--
ALTER TABLE `inofs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inofs`
--
ALTER TABLE `inofs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
