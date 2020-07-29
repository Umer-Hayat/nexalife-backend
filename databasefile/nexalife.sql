-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 07:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexalife`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `exp_name` varchar(255) NOT NULL,
  `exp_gender` varchar(255) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `exp_postal_code` varchar(255) NOT NULL,
  `mfname` varchar(255) NOT NULL,
  `mfage` int(3) NOT NULL,
  `mmname` varchar(255) NOT NULL,
  `mmage` int(3) NOT NULL,
  `mbname` varchar(255) NOT NULL,
  `mbage` int(3) NOT NULL,
  `mgname` varchar(255) NOT NULL,
  `mgage` int(3) NOT NULL,
  `moname` varchar(255) NOT NULL,
  `moage` int(3) NOT NULL,
  `soloname` varchar(255) NOT NULL,
  `soloage` int(3) NOT NULL,
  `sfname` varchar(255) NOT NULL,
  `sfage` int(3) NOT NULL,
  `smname` varchar(255) NOT NULL,
  `smage` int(3) NOT NULL,
  `sbname` varchar(255) NOT NULL,
  `sbage` int(3) NOT NULL,
  `sgname` varchar(255) NOT NULL,
  `sgage` int(3) NOT NULL,
  `soname` varchar(255) NOT NULL,
  `soage` int(3) NOT NULL,
  `sendusing` varchar(255) NOT NULL,
  `life2_name` varchar(255) NOT NULL,
  `life2_gender` varchar(255) NOT NULL,
  `life2_date` varchar(255) NOT NULL,
  `life2_postal_code` varchar(255) NOT NULL,
  `is_smoker` varchar(255) NOT NULL,
  `do_exercise` varchar(255) NOT NULL,
  `do_practice` varchar(255) NOT NULL,
  `insurance-title` varchar(255) NOT NULL,
  `inurance_type` varchar(255) NOT NULL,
  `insuraance_price` varchar(255) NOT NULL,
  `cont_name` varchar(255) NOT NULL,
  `cont_last_name` varchar(255) NOT NULL,
  `m_last_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `rfc` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `no_ext` varchar(40) NOT NULL,
  `interior` varchar(255) NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `official_pic1` varchar(50) NOT NULL,
  `official_pic2` varchar(50) NOT NULL,
  `address_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
