-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 06:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
  `solfname` varchar(255) NOT NULL,
  `solfage` int(3) NOT NULL,
  `solmname` varchar(255) NOT NULL,
  `solmage` int(3) NOT NULL,
  `solgname` varchar(255) NOT NULL,
  `solgage` int(3) NOT NULL,
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
  `lifeto_name` varchar(255) NOT NULL,
  `lifeto_gender` varchar(255) NOT NULL,
  `lifeto_date` varchar(255) NOT NULL,
  `lifeto_postal_code` varchar(255) NOT NULL,
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
  `cellular` varchar(255) NOT NULL,
  `rfc_nationality` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `streetno_ext` varchar(255) NOT NULL,
  `interior` varchar(255) NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
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
