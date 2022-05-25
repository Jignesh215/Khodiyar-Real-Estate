-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 05:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(44) NOT NULL,
  `myusername` varchar(55) NOT NULL,
  `mypassword` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `myusername`, `mypassword`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `id_property` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `mobile_phone` varchar(11) NOT NULL,
  `cus_email` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `time` varchar(11) NOT NULL,
  `reason` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `id_property`, `name`, `mobile_phone`, `cus_email`, `password`, `date`, `time`, `reason`) VALUES
(12, 8, 'munish', '9896222029', 'munish@gmai', '12345', '2019-02-12', '', 'sdfsdfsdgds'),
(18, 6, 'as', '232323', 'hdsjs@gmail', '', '2019-01-29', '', 'dsd'),
(19, 6, 'hitesh', '9729710174', 'hitesh@gmai', '123456', '2019-02-13', '', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(44) NOT NULL,
  `reason` varchar(444) NOT NULL,
  `planning` varchar(444) NOT NULL,
  `name` varchar(444) NOT NULL,
  `no_phone` varchar(444) NOT NULL,
  `email` varchar(444) NOT NULL,
  `question` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `reason`, `planning`, `name`, `no_phone`, `email`, `question`) VALUES
(7, 'sadas', 'dasdasd', 'asdasdasdasdasd', 'dasd', 'asdasda@gmail.comasdasd', 'asdasd'),
(8, 'I am looking to rent a Property', 'renovate', 'aimran', '0144444444', 'aim@yahoo.com', 'help for renovation'),
(9, 'I am looking to let a Property', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(55) NOT NULL,
  `reason` varchar(333) NOT NULL,
  `name` varchar(333) NOT NULL,
  `no_fon` varchar(333) NOT NULL,
  `email` varchar(333) NOT NULL,
  `message` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `reason`, `name`, `no_fon`, `email`, `message`) VALUES
(5, 'I have another enquiry', 'Mohd Shahril Ikbal', '0122222222', 'shahril@gmail.com', 'i want to renovate my house at kg.pandan, kl this weekend and i want you to find  contraters to renovate my house  '),
(6, 'I am looking to rent a Property', 'Sufiyuddin', '0133333333', 'sufi@yahoo.com', 'i want to rent my house to student only area pandan indah, kl. '),
(7, 'I am looking to let a Property', 'meor syafiq', '0166666666', 'meor34@gmail.com', 'let go my home'),
(13, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(14, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(15, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(16, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(17, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(18, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(19, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(20, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(21, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(22, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(23, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(24, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(25, 'I am looking to sell a Property', 'Hitesh Gongely', 'Hitesh Gongely', 'creative.hitu12@gmail.com', 'r'),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(30, '', '', '', '', ''),
(31, '', '', '', '', ''),
(32, '', '', '', '', ''),
(33, '', '', '', '', ''),
(34, '', '', '', '', ''),
(35, '', '', '', '', ''),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, '', '', '', '', ''),
(40, '', '', '', '', ''),
(41, '', '', '', '', ''),
(42, '', '', '', '', ''),
(43, '', '', '', '', ''),
(44, '', '', '', '', ''),
(45, 'I am looking to let a Property', 'cfd', 'fedf', 'fef', 'e'),
(46, 'I am looking to let a Property', '', '', '', ''),
(47, 'I am looking to let a Property', '', '', '', ''),
(48, 'I am looking to rent a Property', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id_property` int(5) NOT NULL,
  `name_property` varchar(250) NOT NULL,
  `type_property` varchar(255) NOT NULL,
  `add1` varchar(300) NOT NULL,
  `add2` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `price_type` varchar(300) NOT NULL,
  `land_area` varchar(300) NOT NULL,
  `groos_floor_area` varchar(300) NOT NULL,
  `leasehold` varchar(300) NOT NULL,
  `beds` varchar(333) NOT NULL,
  `baths` varchar(333) NOT NULL,
  `contact_no` varchar(333) NOT NULL,
  `per_squre_feet` varchar(333) NOT NULL,
  `squre_feet` varchar(333) NOT NULL,
  `text` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id_property`, `name_property`, `type_property`, `add1`, `add2`, `price`, `price_type`, `land_area`, `groos_floor_area`, `leasehold`, `beds`, `baths`, `contact_no`, `per_squre_feet`, `squre_feet`, `text`) VALUES
(4, 'appartmen pandan height', 'Condominium', 'lot 770 pandan perdana', '17000', '500,000.00', 'Negotiable', '79', '79', '79', '4', '3', '01111111111', '45.9', '30.9', 'viewing kl city'),
(5, 'villa ameran', 'Bungalow House', 'lorong mad', '81900', '1000000.00', 'Negotiable', 'mutiara rini', '', '', '6', '8', '0123456789', '70', '70', ''),
(6, 'azura villa', 'Bungalow House', 'lorong balakang rumah, sebelah masjid, jalan depan sikit, belah kanan', '', '123456.00', 'Negotiable', 'kubu kuat', '', '', '2', '', '', '', '', 'mere xde kawan dekat KL time raya'),
(8, 'pandan villa bestari', 'Condominium', 'pandan indah', '15100', '540,000.00', 'Guide Price', 'pandan jaya', '56', '23.12', '5', '5', '0145091646', '345.8', '345.8', 'saya nak renovate rumah ni so macam mana saya nk buat or contact siapa tuk renovate rumah'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id_property`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id_property` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
