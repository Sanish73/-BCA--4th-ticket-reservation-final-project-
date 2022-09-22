-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 07:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medallion`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `acc_id` int(11) NOT NULL,
  `acc_type` varchar(35) NOT NULL,
  `acc_price` double NOT NULL,
  `acc_slot` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`acc_id`, `acc_type`, `acc_price`, `acc_slot`) VALUES
(1, 'TOURIST BUS', 400, 30),
(2, 'SUMO', 500, 28),
(3, 'ARANIKO YATAYAT ', 300, 29),
(4, 'SUPER', 450, 14),
(5, 'BINDHYABASINI YATAYAT', 450, 30),
(6, 'DELUXE', 500, -10);

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `book_id` int(11) NOT NULL,
  `book_by` varchar(50) NOT NULL,
  `book_contact` varchar(15) NOT NULL,
  `book_address` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_age` int(11) NOT NULL,
  `book_gender` varchar(15) NOT NULL,
  `book_departure` date NOT NULL,
  `dest_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `origin_id` int(11) NOT NULL,
  `book_tracker` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`book_id`, `book_by`, `book_contact`, `book_address`, `book_name`, `book_age`, `book_gender`, `book_departure`, `dest_id`, `acc_id`, `origin_id`, `book_tracker`) VALUES
(104, 'sfdsf', '324', 'kadaghari,kathmandu', 'Sanish Thaoa', 3, 'Male', '2022-09-28', 1, 2, 1, '631f689ea63c0'),
(105, '3sdf', '33', 'sdf', 'sdfsdf sdf', 3, 'Male', '2022-09-14', 1, 2, 1, '631f740fc05c5'),
(106, 'sdkfjkl', '3123', 'kadaghari,kathmandu', 'SDAF', 3, 'Male', '2022-10-05', 1, 6, 1, '63200217de344'),
(107, 'sdkfjkl', '3123', 'kadaghari,kathmandu', 'Sanish Thaoa', 13, 'Male', '2022-10-05', 1, 6, 1, '63200217de344'),
(108, 'aasd', '12', 'kadaghari,kathmandu', 'sanish thapa', 2, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(109, 'aasd', '12', 'kadaghari,kathmandu', 'asd', 22, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(110, 'aasd', '12', 'kadaghari,kathmandu', 'sanish thapa', 2, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(111, 'aasd', '12', 'kadaghari,kathmandu', 'asd', 22, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(112, 'aasd', '12', 'kadaghari,kathmandu', 'asd', 22, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(113, 'aasd', '12', 'kadaghari,kathmandu', 'sanish thapa', 2, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(114, 'asdfasd', '13', 'kadaghari,kathmandu', 'Sanish Thaoa', 22, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(115, 'asdfasd', '13', 'kadaghari,kathmandu', 'zxc', 2, 'Male', '2022-09-14', 1, 4, 1, '632010cc5b102'),
(116, 'sdf', '24', 'sadf', 'Sanish Thaoa', 3, 'Male', '2022-09-29', 1, 2, 1, '6320186731ca0'),
(117, 'dasf', '23', 'kadaghari,kathmandu', 'dsf', 3, 'Male', '2022-09-29', 1, 2, 1, '6320186731ca0'),
(118, 'dasf', '23', 'kadaghari,kathmandu', 'Sanish Thaoa', 23, 'Male', '2022-09-29', 1, 2, 1, '6320186731ca0'),
(119, 'sanish', '17875646', 'sksdjfaks', 'sdfsdf sdf', 1, 'Male', '2022-01-07', 1, 3, 1, '63212cb422c0a'),
(120, 'sa', '234', 'kadaghari,kathmandu', 'sanish thapa', 3, 'Male', '2022-09-21', 1, 2, 1, '632758f6e40dd');

-- --------------------------------------------------------

--
-- Table structure for table `booked_copy`
--

CREATE TABLE `booked_copy` (
  `book_id` int(11) NOT NULL,
  `book_by` varchar(50) NOT NULL,
  `dest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `dest_id` int(11) NOT NULL,
  `dest_destination` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`dest_id`, `dest_destination`) VALUES
(1, 'Kathmandu'),
(2, 'Pokhara');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `origin_id` int(11) NOT NULL,
  `origin_desc` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`origin_id`, `origin_desc`) VALUES
(1, 'Pokhara'),
(2, 'Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stat_id` int(11) NOT NULL,
  `stat_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_id`, `stat_desc`) VALUES
(1, 'Paid'),
(2, 'Refunded');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `trans_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trans_payment` double NOT NULL,
  `trans_passenger` varchar(100) NOT NULL,
  `trans_age` int(11) NOT NULL,
  `trans_gender` varchar(15) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `origin_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `stat_id` int(11) DEFAULT 1,
  `trans_refunded` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `trans_time`, `trans_payment`, `trans_passenger`, `trans_age`, `trans_gender`, `acc_id`, `origin_id`, `dest_id`, `stat_id`, `trans_refunded`) VALUES
(1, '2017-02-27 16:06:37', 351, 'winnie a damayo', 23, 'Male', 2, 1, 1, 1, 1),
(2, '2017-03-28 15:08:34', 280.8, '323423', 25, 'Male', 2, 1, 1, 1, 1),
(3, '2022-05-08 13:27:47', 448, 'Sanish', 45, 'Male', 6, 1, 1, 1, 1),
(4, '2022-05-31 04:21:10', 448, 'sdfdf', 55, 'Male', 6, 1, 1, 1, 1),
(5, '2022-05-08 13:26:56', 432, 'kailash', 21, 'Male', 5, 1, 1, 1, 1),
(6, '2022-05-01 12:21:54', 700, 'Sanish Thapa', 15, 'Male', 6, 1, 1, 1, 0),
(7, '2022-05-19 07:34:14', 630, 'kailash', 45, 'Male', 6, 1, 1, 1, 1),
(8, '2022-05-01 12:21:54', 700, 'kusha', 45, 'Male', 6, 1, 1, 1, 0),
(9, '2022-05-19 07:33:49', 560, 'bipin', 45, 'Male', 6, 1, 1, 1, 1),
(10, '2022-05-01 12:21:54', 700, 'nirik', 45, 'Male', 6, 1, 1, 1, 0),
(11, '2022-05-17 10:17:23', 420, 'sdkjfla', 213, 'Male', 1, 1, 1, 1, 0),
(12, '2022-05-19 07:34:03', 450, 'kailash', 21, 'Male', 2, 1, 1, 1, 1),
(13, '2022-05-17 10:18:24', 500, 'SANISH', 21, 'Male', 2, 1, 1, 1, 0),
(14, '2022-05-17 10:18:24', 500, 'NIRIK', 21, 'Male', 2, 1, 1, 1, 0),
(15, '2022-05-30 16:11:10', 540, 'safsf', 234, 'Male', 1, 1, 1, 1, 1),
(16, '2022-05-31 04:20:08', 450, 'sdaf', 234, 'Male', 3, 1, 1, 1, 0),
(17, '2022-05-31 04:21:00', 480, 'sdaf', 1, 'Male', 1, 1, 1, 1, 1),
(18, '2022-09-01 23:58:22', 400, 'dsfads', 234, 'Male', 2, 1, 1, 1, 1),
(19, '2022-09-07 07:30:21', 300, 'smriti', 21, 'Female', 3, 1, 1, 1, 0),
(20, '2022-09-07 07:30:32', 300, 'sanish', 8, 'Male', 3, 1, 1, 1, 0),
(21, '2022-09-07 07:36:14', 400, 'sanish', 25, 'Male', 1, 1, 1, 1, 0),
(22, '2022-09-07 07:37:41', 450, 'sdkljflak', 4, 'Male', 4, 1, 1, 1, 0),
(23, '2022-09-07 07:38:47', 400, 'snaish', 25, 'Male', 2, 1, 1, 1, 0),
(24, '2022-09-07 07:38:51', 500, 'sanish thapa', 67, 'Male', 2, 2, 1, 1, 0),
(25, '2022-09-07 07:39:30', 280, 'dsfasd', 4234, 'Male', 1, 1, 1, 1, 0),
(26, '2022-09-07 07:39:30', 280, 'sdfsdf sdf', 234, 'Male', 1, 1, 1, 1, 0),
(27, '2022-09-07 07:41:19', 0, 'Sanish Thaoa', 10, 'Male', 3, 1, 1, 1, 0),
(28, '2022-09-07 09:34:47', 500, 'werwerwerwer', 23, 'Male', 2, 1, 1, 1, 0),
(29, '2022-09-07 09:34:47', 500, 'Sanish Thapa', 24, 'Male', 2, 1, 1, 1, 0),
(30, '2022-09-07 09:34:47', 500, 'Sanish Thapa', 234, 'Male', 2, 1, 1, 1, 0),
(31, '2022-09-07 09:38:56', 500, 'sanish thapa', 3, 'Male', 2, 1, 1, 1, 0),
(32, '2022-09-07 09:39:24', 500, 'sdfsdf sdf', 3, 'Male', 2, 1, 1, 1, 0),
(33, '2022-09-07 09:39:44', 500, 'Sanish Thaoa', 3, 'Male', 2, 1, 1, 1, 0),
(34, '2022-09-07 09:43:05', 500, 'sdfsdf sdf', 3, 'Male', 2, 1, 1, 1, 0),
(35, '2022-09-12 01:21:17', 500, 'Sanish Thapa', 324, 'Male', 2, 2, 1, 1, 0),
(36, '2022-09-12 13:08:56', 500, 'Sanish Thapa', 234, 'Male', 2, 1, 1, 1, 0),
(37, '2022-09-12 13:08:56', 500, 'sfdsf', 234, 'Male', 2, 1, 1, 1, 0),
(38, '2022-09-12 13:08:56', 500, 'sdfa', 234, 'Male', 2, 1, 1, 1, 0),
(39, '2022-09-12 13:15:03', 400, 'sdaf', 2, 'Male', 1, 1, 1, 1, 0),
(40, '2022-09-12 13:15:03', 400, 'sdfa', 32, 'Male', 1, 1, 1, 1, 0),
(41, '2022-09-12 13:15:03', 400, 'sadf', 32, 'Male', 1, 1, 1, 1, 0),
(42, '2022-09-12 13:15:03', 400, 'sdfa', 3, 'Male', 1, 1, 1, 1, 0),
(43, '2022-09-12 13:15:03', 400, 'Sanish Thapa', 34, 'Male', 1, 1, 1, 1, 0),
(44, '2022-09-12 13:20:58', 500, 'dsf', 32, 'Male', 2, 1, 1, 1, 0),
(45, '2022-09-12 13:20:58', 300, 'Sanish Thapa', 23, 'Male', 3, 1, 1, 1, 0),
(46, '2022-09-12 13:20:58', 500, 'Sanish Thaoa', 1, 'Male', 2, 1, 1, 1, 0),
(47, '2022-09-19 02:34:07', 500, 'sanish thapa', 2, 'Male', 6, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(50) NOT NULL,
  `user_password` varchar(35) NOT NULL,
  `u_name` varchar(100) DEFAULT NULL,
  `u_address` varchar(100) DEFAULT NULL,
  `u_phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_account`, `user_password`, `u_name`, `u_address`, `u_phone`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL),
(4, 'sanish', 'sanish', NULL, NULL, NULL),
(5, 'kailash', 'kailash', 'Kailash Kumar', 'pokhara', '987456645');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `dest_id` (`dest_id`,`acc_id`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `origin_id` (`origin_id`);

--
-- Indexes for table `booked_copy`
--
ALTER TABLE `booked_copy`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`origin_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `acc_id` (`acc_id`,`origin_id`,`dest_id`,`stat_id`),
  ADD KEY `origin_id` (`origin_id`),
  ADD KEY `dest_id` (`dest_id`),
  ADD KEY `stat_id` (`stat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `booked_copy`
--
ALTER TABLE `booked_copy`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `origin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked`
--
ALTER TABLE `booked`
  ADD CONSTRAINT `booked_ibfk_1` FOREIGN KEY (`dest_id`) REFERENCES `destination` (`dest_id`),
  ADD CONSTRAINT `booked_ibfk_2` FOREIGN KEY (`acc_id`) REFERENCES `accomodation` (`acc_id`),
  ADD CONSTRAINT `booked_ibfk_3` FOREIGN KEY (`origin_id`) REFERENCES `origin` (`origin_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accomodation` (`acc_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`origin_id`) REFERENCES `origin` (`origin_id`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`dest_id`) REFERENCES `destination` (`dest_id`),
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`stat_id`) REFERENCES `status` (`stat_id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `myevent` ON SCHEDULE AT '2022-09-12 22:33:13' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE accomodation SET acc_slot = acc_slot - 7 WHERE acc_id = 5$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
