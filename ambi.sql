-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 12:07 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Comment`) VALUES
('a', 'a@a.com', 'a'),
('asd', 'asd@sad.com', 'asd'),
('dsf', 'shitij.ca@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Mode` varchar(100) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`Name`, `Email`, `Password`, `Gender`, `Contact`, `Mode`, `Dob`) VALUES
('a', 'asd@sad.com', 'a', 'Male', 9874563214, 'Email', '0000-00-00'),
('asd', 'sirsastore@gmail.com', 's', 'Male', 9999999999, 'Email', '0000-00-00'),
('dfgd', 'd@d.com', 'd', 'Male', 9999999999, 'Email', '0000-00-00'),
('erfgef', 'e@e.com', 'e', 'Male', 9564538737, 'Email', '2017-07-11'),
('gterg', 'g@g.com', 'g', 'Male', 9874563214, 'Email', '0000-00-00'),
('sad', 'a@a.com', 's', 'Male', 9999999999, 'Email', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`Name`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
