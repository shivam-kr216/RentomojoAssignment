-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 02:38 AM
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
-- Database: `phonebook`
--
CREATE DATABASE IF NOT EXISTS `phonebook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phonebook`;

-- --------------------------------------------------------

--
-- Table structure for table `add_contact`
--

CREATE TABLE `add_contact` (
  `id` int(3) NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_contact`
--

INSERT INTO `add_contact` (`id`, `contact_name`, `dateofbirth`, `phone`, `address`) VALUES
(9, 'Ritik Kumar', '2002-12-01', '9905365870', 'ritikkumar2k18@gmail.com'),
(10, 'Shivam kumar', '1999-07-12', '8434090048', 'shivamkr216@gmail.com'),
(17, 'Gulshan ', '2000-07-14', '6209591567', 'gulshan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_contact`
--
ALTER TABLE `add_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_contact`
--
ALTER TABLE `add_contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
