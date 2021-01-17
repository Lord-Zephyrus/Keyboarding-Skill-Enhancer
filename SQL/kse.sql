-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 04:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kse`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `Username` varchar(20) NOT NULL,
  `Score` int(10) NOT NULL DEFAULT 0,
  `Rank` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`Username`, `Score`, `Rank`) VALUES
('LordZephyr', 0, NULL),
('JOZF', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`Name`, `Username`, `Email`, `Password`) VALUES
('Joseph George', 'JOZF', 'joseph.g.vani7@gmail.com', 'Jop123'),
('Thomas George', 'LordZephyr', 'tomsgeo.vani.2000@gmail.com', 'Thomas123');

-- --------------------------------------------------------

--
-- Table structure for table `user_stats`
--

CREATE TABLE `user_stats` (
  `Username` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `WC` int(10) NOT NULL DEFAULT 0,
  `CPM` int(10) NOT NULL DEFAULT 0,
  `WPM` int(10) NOT NULL DEFAULT 0,
  `ER` int(3) NOT NULL DEFAULT 0,
  `Rank` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_bin;

--
-- Dumping data for table `user_stats`
--

INSERT INTO `user_stats` (`Username`, `WC`, `CPM`, `WPM`, `ER`, `Rank`) VALUES
('LordZephyr', 0, 0, 0, 0, NULL),
('JOZF', 0, 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `user_stats`
--
ALTER TABLE `user_stats`
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user_profile` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_stats`
--
ALTER TABLE `user_stats`
  ADD CONSTRAINT `user_stats_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user_profile` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_stats_ibfk_2` FOREIGN KEY (`Rank`) REFERENCES `leaderboard` (`Rank`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
