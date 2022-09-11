-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 09:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `password_saver`
--

-- --------------------------------------------------------

--
-- Table structure for table `ps_data`
--

CREATE TABLE `ps_data` (
  `ID` int(20) NOT NULL,
  `data_added_datetime` datetime NOT NULL,
  `data_user_ID` int(11) NOT NULL,
  `data_title` text NOT NULL,
  `data_description` text NOT NULL,
  `data_username` varchar(250) NOT NULL,
  `data_password` varchar(250) NOT NULL,
  `data_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ps_users`
--

CREATE TABLE `ps_users` (
  `ID` int(11) NOT NULL,
  `user_join_datetime` datetime NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_username` varchar(250) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_profile_url` text NOT NULL,
  `user_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ps_data`
--
ALTER TABLE `ps_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ps_users`
--
ALTER TABLE `ps_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ps_data`
--
ALTER TABLE `ps_data`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ps_users`
--
ALTER TABLE `ps_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
