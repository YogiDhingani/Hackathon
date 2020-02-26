-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 09:14 AM
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
(1, 'Sunil Chauhan', 'sunilchauhan940940@gmail.com', 7854123698, 'Sunil@940');

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
(2, 'Health'),
(3, 'Food'),
(4, 'E-commerce'),
(5, 'Transpotation'),
(8, 'Education');

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
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `title` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `complaint_detail` varchar(250) NOT NULL,
  `solution_detail` varchar(500) DEFAULT NULL,
  `complaint_file` varchar(250) NOT NULL,
  `solution_file` varchar(255) DEFAULT NULL,
  `location` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `privacy` varchar(10) NOT NULL DEFAULT 'Public',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `solution_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `title`, `category_name`, `subcategory_name`, `complaint_detail`, `solution_detail`, `complaint_file`, `solution_file`, `location`, `status`, `privacy`, `creation_date`, `solution_date`, `user_id`, `manager_id`) VALUES
(1, 'Bus Related', 'Transpotation', 'Timing of Bus', 'I am a student. i am regular user of your Transpotation service and take your buse to travel to and from my college. But during last couple of week your bus are making recurring delay and this is affecting our arrival in college on time.', NULL, '...', NULL, 'Isanpur,Ahmedabad-382443.', 'Pending', 'public', '2020-02-21 03:57:00', '2020-02-21 03:57:00', 11, 3);

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
  `subcategory` varchar(50) NOT NULL,
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

INSERT INTO `manager` (`manager_id`, `name`, `email_id`, `phone_no`, `category`, `subcategory`, `city`, `password`, `total_complaint`, `pending_complaint`, `solved_complaint`, `creation_date`) VALUES
(1, 'Ramesh Gupta', 'rameshgupta2123@gmail.com', 7854123656, 'Banking', 'Transaction', 'Ahmedabad', 'guptar@13', 5, 3, 2, '2020-02-21 03:27:24'),
(2, 'Mina Mishra', 'mishramina@gmail.com', 8657422574, 'E-commerce', 'Shopping', 'Surat', 'Minamishra@13', 8, 4, 4, '2020-02-21 03:29:32'),
(3, 'Kartik Patel', 'patelkartik12@gmail.com', 8657425678, 'Transpotation', 'Timing', 'Ahmedabad', 'kartikP@111', 9, 4, 5, '2020-02-21 03:54:46'),
(4, 'Rohan Patel', 'rohanpatel@gmail.com', 9833412432, 'Helth', 'poor treatment', 'Ahmedabad', '123456', NULL, NULL, NULL, '2020-02-25 01:20:30');

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
(1, 'Mahesh Kumar', 'maheshkumar1234@gmail.com', 8657423964, 'Ahmedabad', 'Mahesh@12'),
(2, 'Paritosh Kumar', 'paritosh123@gmail.com', 7854123698, 'Vadodara', 'Paritosh@134'),
(3, 'Neha Gupta', 'guptaneha@gmail.com', 8457963245, 'Mumbai', 'Guptaneha@1'),
(4, 'Mukesh Sharma', 'Mukesh145@gmail.com', 8457123694, 'Ahmedabad', 'Sharmamukesh@11'),
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `fk_manager_id` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
