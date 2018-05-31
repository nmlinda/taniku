-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 09:08 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taniku`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `id_user` int(10) NOT NULL,
  `company` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `address1` text CHARACTER SET latin1,
  `address2` text CHARACTER SET latin1,
  `kelurahan` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `kecamatan` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `city` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `province` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `country` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `post_code` varchar(10) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `about_me` text,
  `bio` text,
  `mobile` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id_user` int(10) NOT NULL,
  `company` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `address1` text CHARACTER SET latin1,
  `address2` text CHARACTER SET latin1,
  `kelurahan` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `kecamatan` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `city` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `province` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `country` varchar(191) CHARACTER SET latin1 DEFAULT NULL,
  `post_code` varchar(10) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_id` int(10) NOT NULL DEFAULT '2',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_user_2` (`id_user`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_user_2` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
