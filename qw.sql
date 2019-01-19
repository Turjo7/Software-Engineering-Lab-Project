-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 10:24 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qw`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `a_id` int(11) NOT NULL,
  `s_id` varchar(2) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `a_time` time DEFAULT NULL,
  `a_address` varchar(50) DEFAULT NULL,
  `a_user_email` varchar(50) DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`a_id`, `s_id`, `a_date`, `a_time`, `a_address`, `a_user_email`, `status`) VALUES
(1, '02', '2018-12-10', '00:00:19', 'qwertyuio', 'abc@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bs_id` int(11) NOT NULL,
  `s_id` varchar(2) DEFAULT NULL,
  `b_date` date DEFAULT NULL,
  `b_time` time DEFAULT NULL,
  `b_address` varchar(100) DEFAULT NULL,
  `b_user_email` varchar(50) DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bs_id`, `s_id`, `b_date`, `b_time`, `b_address`, `b_user_email`, `status`) VALUES
(1, '01', '2018-12-12', '19:30:10', 'Mohammadpur', 'nahmed151086@bscse.uiu.ac.bd', 'Yes'),
(2, '01', '2018-12-12', '19:30:10', 'Mohammadpur', 'nislam@bscse.uiu.ac.bd', 'Yes'),
(3, '01', '2018-12-12', '19:30:10', 'Mohammadpur', 'ssaha@bscse.uiu.ac.bd', 'No'),
(4, '01', '2018-12-10', '00:00:19', '', '', NULL),
(5, '01', '2018-12-12', '00:00:19', '', 'abc@gmail.com', NULL),
(6, '01', '2018-12-17', '00:00:19', 'salimullah', 'abc@gmail.com', NULL),
(7, '01', '2018-12-11', '00:00:19', 'qwe', 'abc@gmail.com', NULL),
(8, '01', '2018-12-18', '00:00:19', 'salimullah', 'cba@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `s_id` varchar(2) DEFAULT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `s_time` time DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_email`, `s_id`, `s_name`, `s_date`, `s_time`, `status`) VALUES
(1, 'abc@gmail.com', '01', 'BANK', '2018-12-13', '19:12:12', NULL),
(2, 'abc@gmail.com', '01', 'BANK', '2018-12-13', '19:12:12', NULL),
(3, 'abc@gmail.com', '02', 'ATM', '2018-12-13', '19:12:12', NULL),
(4, 'abc@gmail.com', '03', 'EVENT', '2018-12-11', '00:00:19', NULL),
(5, 'abc@gmail.com', '04', 'HOME', '2018-12-30', '08:10:11', NULL),
(6, 'cba@gmail.com', '01', 'BANK', '2018-12-18', '00:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ev`
--

CREATE TABLE `ev` (
  `ev_id` int(11) NOT NULL,
  `s_id` varchar(2) DEFAULT NULL,
  `ev_date` date DEFAULT NULL,
  `ev_time` time DEFAULT NULL,
  `ev_address` varchar(50) DEFAULT NULL,
  `ev_user_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ev`
--

INSERT INTO `ev` (`ev_id`, `s_id`, `ev_date`, `ev_time`, `ev_address`, `ev_user_email`) VALUES
(1, '03', '2018-12-11', '00:00:19', 'PSC convention hall', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `h_id` int(11) NOT NULL,
  `s_id` varchar(2) DEFAULT NULL,
  `h_date` date DEFAULT NULL,
  `h_time` time DEFAULT NULL,
  `h_address` varchar(50) DEFAULT NULL,
  `h_user_email` varchar(50) DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`h_id`, `s_id`, `h_date`, `h_time`, `h_address`, `h_user_email`, `status`) VALUES
(1, '04', '2018-12-30', '08:10:11', '3/56', 'abc@gmail.com', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `email` varchar(50) NOT NULL,
  `m` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`email`, `m`) VALUES
('', ''),
('a@gmail.com', 'Welom\r\n'),
('aka@gmail.com', 'Testing from office 10.23 pm\r\n'),
('as@yahoo.com', '\r\ntesting m'),
('nahmed151086@bscse.uiu.ac.bd', 'Send'),
('turj@gmail.com', 'Send'),
('turjo@gmail.com', '\r\nI need your detials info of services ');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` varchar(2) NOT NULL,
  `s_name` varchar(10) NOT NULL,
  `s_price_per_hour` varchar(6) DEFAULT NULL,
  `s_people` varchar(100) DEFAULT NULL,
  `s_available` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_name`, `s_price_per_hour`, `s_people`, `s_available`) VALUES
('01', 'BANK', '2000', 'Mr.A', 'Yes'),
('02', 'ATM', '1500', 'Mr.B', 'Yes'),
('03', 'EVENT', '4500', 'Mr.C', 'Yes'),
('04', 'HOME', '1000', 'Mr.D', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `user_name`, `email`, `pass`, `address`, `phone`) VALUES
(1, 'Turjo', 'abc@gmail.com', 'abc', '13/9 Salimullah Road', '01818009809'),
(2, 'Shakib', 'def@gmail.com', '5678', '4/30 Salimullah Road', '01818009805'),
(4, 'root', 'xyz@gmail.com', '806', 'Dhanmondi', '01818009809'),
(5, 'Nupa', 'nislam151062@bscse.uiu.ac.bd', '12', 'Dhanmondi', '789'),
(6, 'Sukannya ', 'ssaha151079@bscse.uiu.ac.bd', '079', 'Monipuri Para', '896'),
(7, 'Nasir Uddin Ahmed', 'nahmed151086@bscse.uiu.ac.bd', '123456', '4/30 salimullah road, 13/9', '01818009809'),
(8, 'Nasir Uddin Ahmed', 'nahmed151086@bscse.uiu.ac.bd', '', '4/30 salimullah road, 13/9', '01818009809'),
(9, 'Nasir Uddin Ahmed', 'nahmed151086@bscse.uiu.ac.bd', '12345', '4/30 salimullah road, 13/9', '01818009809'),
(10, 'ASA', 'aAA@GMAIL.COM', '', 'AS', 'ASA'),
(11, 'ASA', 'aAA@GMAIL.COM', '', 'AS', 'ASA'),
(12, 'Xyz', 'cba@gmail.com', '1234', '4/30 salimullah road, 13/9', '1818009809');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bs_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`,`user_email`);

--
-- Indexes for table `ev`
--
ALTER TABLE `ev`
  ADD PRIMARY KEY (`ev_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`,`s_name`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atm`
--
ALTER TABLE `atm`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ev`
--
ALTER TABLE `ev`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atm`
--
ALTER TABLE `atm`
  ADD CONSTRAINT `atm_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `services` (`s_id`);

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `services` (`s_id`);

--
-- Constraints for table `ev`
--
ALTER TABLE `ev`
  ADD CONSTRAINT `ev_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `services` (`s_id`);

--
-- Constraints for table `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `services` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
