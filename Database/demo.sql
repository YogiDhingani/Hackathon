-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 05:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

create or replace database cms;

use cms;

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
(1, 'Sunil Chauhan', 'sunilchauhan940940@gmail.com', 7854123698, 'Sunil@940');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `creation_date`) VALUES
(1, 'Banking', '2020-02-21 09:01:37'),
(2, 'Helth', '2020-02-21 09:01:37'),
(3, 'Food', '2020-02-21 09:02:32'),
(4, 'E-commerce', '2020-02-21 09:03:09'),
(5, 'Transpotation', '2020-02-21 09:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `category_id`, `name`, `address`, `website`, `creation_date`) VALUES
(1, 5, 'Amts', 'Out Side Jamalpur Darwaja,\r\nAmdavad-380022.', 'amts.co.in', '2020-02-22 16:27:00'),
(2, 1, 'Hdfc', 'Maninagar Ground Floor, Nakshatra Building, Nr. Sales, Ahmedabad, Gujarat 380008.', 'hdfcbank.com', '2020-02-22 16:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(50) NOT NULL,
  `complaint_title` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `complain_detail` varchar(500) NOT NULL,
  `complaint_file` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `solution_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint_title`, `category_name`, `subcategory_name`, `complain_detail`, `complaint_file`, `location`, `status`, `privacy`, `creation_date`, `solution_date`, `user_id`, `manager_id`, `company_name`, `website`) VALUES
(1, 'Bus Related', 'Transportation', 'Timing of Bus', 'I am a student.I am regular user of your Transportation service and take your buse to travel to and from my college. But during last couple of week your bus are making recurring delay and this is affecting our arrival in college on time.', '...', 'Isanpur,Ahmedabad-382443.', 'In process', 1, '2020-02-21 03:57:00', '2020-02-21 03:57:00', 2, 3, 'Amts', 'amts.co.in'),
(2, 'Refund', 'Banking', 'Loan Related', 'I had applied for hdfc home loan and paid a processing fee of ₹5900 but hdfc couldn\'t fullfill my requirements and any amount was not sanctioned and other that i had applied with another bank and successfully sanctioned and disbursed. Then i asked hdfc to refund my processing fee they said please drop mail on trailing mail and i did that but after several reminders and complaint on hdfc website and grivelance but there is no response and update from there side...', '...', 'Maninagar,Ahmedabad.', 'In Proccess', 1, '2020-02-22 16:20:34', '2020-02-22 16:20:34', 3, 1, 'Hdfc', 'hdfcbank.com');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `total_complaint` int(5) DEFAULT NULL,
  `pending_complaint` int(5) DEFAULT NULL,
  `solved_complaint` int(5) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `name`, `email_id`, `phone_no`, `category`, `city`, `password`, `total_complaint`, `pending_complaint`, `solved_complaint`, `creation_date`) VALUES
(1, 'Ramesh Gupta', 'rameshgupta2123@gmail.com', 7854123656, 'Banking', 'Ahmedabad', 'guptar@13', 5, 3, 2, '2020-02-21 08:57:24'),
(2, 'Mina Mishra', 'mishramina@gmail.com', 8657422574, 'Helth', 'Surat', 'Minamishra@13', 8, 4, 4, '2020-02-21 08:59:32'),
(3, 'Kartik Patel', 'patelkartik12@gmail.com', 8657425678, 'Transpotation', 'Ahmedabad', 'kartikP@111', 9, 4, 5, '2020-02-21 09:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `name`, `creation_date`) VALUES
(1, 1, 'Debit card or Credit card related', '2020-02-21 09:06:32'),
(2, 1, 'Transfer amount from one account to another', '2020-02-21 09:07:29'),
(3, 2, 'poor treatment', '2020-02-21 09:09:05'),
(4, 2, 'Appointment issues', '2020-02-21 09:09:05'),
(5, 4, 'Wrong Product', '2020-02-21 09:12:23'),
(6, 4, 'Delayed Delivery', '2020-02-21 09:12:23'),
(7, 5, 'Timing of Bus ', '2020-02-21 09:14:20'),
(8, 1, 'Loan Related', '2020-02-22 16:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email_id`, `phone_no`, `city`, `password`) VALUES
(1, 'Mahesh Kumar', 'maheshkumar12@gmail.com', 8657423964, 'Ahmedabad', 'Mahesh@12'),
(2, 'Paritosh Kumar', 'paritosh123@gmail.com', 7854123698, 'Vadodara', 'Paritosh@134'),
(3, 'Neha Gupta', 'guptaneha@gmail.com', 8457963245, 'Mumbai', 'Guptaneha@1'),
(4, 'Mukesh Sharma', 'Mukesh145@gmail.com', 8457123694, 'Ahmedabad', 'Sharmamukesh@11'),
(5, 'Ramesh Patel', 'patelramesh@gmail.com', 8457963214, 'Rajkot', 'Patel@13'),
(6, 'Nilkanth Rangani', 'nilkanthrangani@gmail.com', 9854721638, 'Surat', 'Nilkanth@123'),
(7, 'Krupa Chauhan', 'krupa167@gmail.com', 7589412369, 'Rajkot', 'Chauhan@190'),
(8, 'Manoj thakkar', 'thakkarmanoj@gmail.com', 8795417852, 'Ahmedabad', 'Manoj@456'),
(9, 'Keshav Sen', 'Keshavsen@gmail.com', 8659741236, 'Mumbai', 'senKeshav@345'),
(10, 'Mina vakil', 'vakilmina@gmail.com', 7458963214, 'Junagadh', 'Vakil@13456'),
(11, 'Aesh Mehta', 'mehtaaesh@gmail.com', 9852361475, 'Gandhinagar', 'Aesh123@m'),
(12, 'Hina Jadvani', 'jadvanihina12@gmail.com', 7541289638, 'Jamnagar', 'Jadvani@123'),
(13, 'Jaimin Panchal', 'jaminpanchal12@gmail.com', 9547863214, 'Bhavnag', 'Jaimin@11B'),
(14, 'Neha Rampara', 'rampara13neha@gmail.com', 8657425664, 'Mumbai', 'Neha123@45');

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
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `fk_company_category_id` (`category_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `fk_category_id` (`category_id`);

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
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fk_company_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
