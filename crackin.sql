-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 08:16 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crackin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `ans` varchar(250) NOT NULL,
  `tid` int(11) NOT NULL,
  `qno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `img`, `ans`, `tid`, `qno`) VALUES
(4, 'data/dark clouds _ Christopher Martin Photography.jpg', 'cloud', 9, 2),
(5, 'data/Free photo_ Nature, Field, Oilseed Rape, Sky - Free Image on Pixabay ___.jpg', 'nature', 15, 1),
(6, 'data/Untitled.png', 'error', 9, 0),
(9, 'data/picture000.jpg', 'sign', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `id` int(11) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `upass` varchar(250) NOT NULL,
  `name1` varchar(250) NOT NULL,
  `name2` varchar(250) NOT NULL,
  `brchyr1` varchar(250) NOT NULL,
  `brchyr2` varchar(250) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  `chance` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `uname`, `upass`, `name1`, `name2`, `brchyr1`, `brchyr2`, `role`, `chance`) VALUES
(1, 'admin123', 'pass@123', 'ADMIN', '', '', '', 1, 1),
(3, 'abcd1', 'abcd', '', '', '', '', 2, 1),
(4, 'abcd', 'abcd', 'User1', 'User2', 'IT||||4', 'CSE||||4', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `lid` varchar(250) NOT NULL,
  `test1` int(11) NOT NULL DEFAULT '0',
  `test1_tm` varchar(50) NOT NULL DEFAULT '0',
  `test12` int(11) NOT NULL DEFAULT '0',
  `test12_tm` varchar(50) NOT NULL DEFAULT '0',
  `sample` int(11) NOT NULL DEFAULT '0',
  `sample_tm` varchar(50) NOT NULL DEFAULT '0',
  `amp` int(11) NOT NULL DEFAULT '0',
  `amp_tm` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `lid`, `test1`, `test1_tm`, `test12`, `test12_tm`, `sample`, `sample_tm`, `amp`, `amp_tm`) VALUES
(1, 'abcd1', 0, '0', 0, '0', 0, '0', 0, '0'),
(2, 'abcd', 1, '00:49', 1, '28:16', 0, '0', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `duration`, `status`) VALUES
(9, 'test1', 1, 1),
(15, 'test12', 30, 1),
(16, 'sample', 15, 0),
(17, 'amp', 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lid` (`lid`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `logindetails` (`uname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
