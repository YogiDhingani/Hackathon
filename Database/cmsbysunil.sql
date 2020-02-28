-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 05:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email_id`, `phone_no`, `password`) VALUES
(1, 'Sunil Chauhan', 'sunilchauhan940940@gmail.com', 7854123698, '4b781e2cdd8d5957122ab31dc449b7c3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'Banking'),
(2, 'Helth'),
(3, 'Food'),
(4, 'E-commerce'),
(5, 'Transpotation'),
(6, 'Education'),
(7, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(5) NOT NULL,
  `complaint_id` int(5) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `complaint_id`, `comment`, `user_id`) VALUES
(16, 77, 'right', 2),
(15, 77, 'second ', 2),
(14, 77, 'hello', 2);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category_id` int(5) NOT NULL,
  `complaint_detail` varchar(250) NOT NULL,
  `complaint_file` varchar(150) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `solution_detail` varchar(150) NOT NULL,
  `solution_file` varchar(150) NOT NULL,
  `solution_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `review` varchar(100) DEFAULT NULL,
  `user_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `title`, `category_id`, `complaint_detail`, `complaint_file`, `location`, `status`, `privacy`, `creation_date`, `solution_detail`, `solution_file`, `solution_date`, `review`, `user_id`, `manager_id`) VALUES
(88, 'Transaction Failure', 1, 'Transaction Failure', NULL, '', 'pending', 0, '2020-02-27 05:51:11', '', '', '0000-00-00 00:00:00', NULL, 16, 1),
(93, 'BRTS', 4, 'Service is not proper ', 'http://127.0.0.1/Hackathon/upload/180173107019_CompletionCertificate.pdf', '', 'Completed', 0, '2020-02-27 06:21:58', 'SOLVED', '', '2020-02-27 12:13:02', '', 16, 1),
(94, 'Money', 1, 'fhj', NULL, '22.9966,72.4861', 'pending', 0, '2020-02-27 12:10:32', '', '', '2020-02-27 12:10:32', NULL, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `category` int(5) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `total_complaint` int(5) DEFAULT NULL,
  `pending_complaint` int(5) DEFAULT NULL,
  `solved_complaint` int(5) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `name`, `email_id`, `category`, `phone_no`, `city`, `password`, `total_complaint`, `pending_complaint`, `solved_complaint`, `creation_date`) VALUES
(1, 'Nilesh Rana', 'rana@gmail.com', 1, 9132123311, 'Surat', 'c33367701511b4f6020ec61ded352059', NULL, NULL, NULL, '2020-02-27 05:25:20'),
(6, 'Patel Rohan', 'rohan@gmail.com', 3, 9812321312, 'Ahmedabad', '9bf23df307deacdecd5fa668d9ac0884', NULL, NULL, NULL, '2020-02-27 05:32:11'),
(7, 'Vicky Bhai', 'vicky@gmail.com', 2, 8765454134, 'Bhavnagar', '28f6da5d54974400793b1e5b688a4998', NULL, NULL, NULL, '2020-02-27 05:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email_id`, `phone_no`, `password`, `gender`) VALUES
(15, 'Narendra Metaliya', 'metaliyanarendra1520@gmail.com', 9016214426, 'c210b42957fab29110d13171bd3a2ec4', 'Male'),
(16, 'Godfather', 'godfather@yahoo.com', 9812321312, 'e10adc3949ba59abbe56e057f20f883e', 'Male'),
(20, 'Umang Patel', 'umangpatel2919@gmail.com', 9877662345, 'e10adc3949ba59abbe56e057f20f883e', 'male'),
(21, 'Yogi Dhingani', 'dhinganiyogi120720@gmail.com', 9662294967, 'e12e7b3a3a9a12eefc164522ec2bfabe', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `fk_manager_id` (`manager_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `fk_manager_id` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
