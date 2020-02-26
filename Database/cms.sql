-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 08:26 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
(2, 'Helth'),
(3, 'Food'),
(4, 'E-commerce'),
(5, 'Transpotation');

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
  `category_name` varchar(50) NOT NULL,
  `complaint_detail` varchar(250) NOT NULL,
  `complaint_file` varchar(150) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `solution_detail` varchar(150) NOT NULL,
  `solution_file` varchar(150) NOT NULL,
  `solution_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `title`, `category_name`, `complaint_detail`, `complaint_file`, `location`, `status`, `privacy`, `creation_date`, `solution_detail`, `solution_file`, `solution_date`, `user_id`, `manager_id`) VALUES
(77, 'Dairy ', 'Banking', 'jo', NULL, '', 'pending', 0, '2020-02-25 17:50:26', '', '', '2020-02-25 17:50:26', 2, 1),
(78, 'Dairy ', 'Banking', 'jo', NULL, '45.5017,-73.5673', 'pending', 0, '2020-02-25 17:51:18', '', '', '2020-02-25 17:51:18', 2, 1),
(79, 'Dairy ', 'Banking', 'jo', 'http://127.0.0.1/upload/bookpage.jpg', '', 'pending', 0, '2020-02-25 17:51:49', '', '', '2020-02-25 17:51:49', 2, 1),
(80, 'Dairy ', 'Banking', 'jo', 'http://127.0.0.1/upload/bookpage.jpg', '45.5017,-73.5673', 'pending', 0, '2020-02-25 17:51:55', '', '', '2020-02-25 17:51:55', 2, 1),
(81, 'Dairy ', 'Banking', 'ghj', NULL, '', 'pending', 0, '2020-02-25 19:12:00', '', '', '2020-02-25 19:12:00', 2, 1),
(85, 'Dairy ', 'Banking', 'hj', NULL, '22.2587,71.1924', 'pending', 0, '2020-02-25 19:15:03', '', '', '2020-02-25 19:15:03', 2, 1),
(86, 'Dairy ', 'Banking', 'ghj', NULL, '22.2587,71.1924', 'pending', 0, '2020-02-25 19:33:29', '', '', '2020-02-25 19:33:29', 2, 1),
(87, 'Dairy ', 'Banking', 'hj', NULL, '22.2587,71.1924', 'pending', 0, '2020-02-25 19:36:48', '', '', '2020-02-25 19:36:48', 2, 1);

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
(1, 'Ramesh Gupta', 'rameshgupta2123@gmail.com', 1, 7854123656, 'Ahmedabad', 'guptar@13', 5, 3, 2, '2020-02-21 08:57:24'),
(2, 'Mina Mishra', 'mishramina@gmail.com', 2, 8657422574, 'Surat', 'Minamishra@13', 8, 4, 4, '2020-02-21 08:59:32'),
(3, 'Kartik Patel', 'patelkartik12@gmail.com', 3, 8657425678, 'Ahmedabad', 'kartikP@111', 9, 4, 5, '2020-02-21 09:24:46');

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
(1, 'Mahesh Kumar', 'maheshkumar12@gmail.com', 8657423964, 'Mahesh@12', ''),
(2, 'Paritosh Kumar', 'paritosh123@gmail.com', 7854123698, 'Paritosh@134', ''),
(3, 'Neha Gupta', 'guptaneha@gmail.com', 8457963245, 'Guptaneha@1', ''),
(4, 'Mukesh Sharma', 'Mukesh145@gmail.com', 8457123694, 'Sharmamukesh@11', ''),
(5, 'Ramesh Patel', 'patelramesh@gmail.com', 8457963214, 'Patel@13', ''),
(6, 'Nilkanth Rangani', 'nilkanthrangani@gmail.com', 9854721638, 'Nilkanth@123', ''),
(7, 'Krupa Chauhan', 'krupa167@gmail.com', 7589412369, 'Chauhan@190', ''),
(8, 'Manoj thakkar', 'thakkarmanoj@gmail.com', 8795417852, 'Manoj@456', ''),
(9, 'Keshav Sen', 'Keshavsen@gmail.com', 8659741236, 'senKeshav@345', ''),
(10, 'Mina vakil', 'vakilmina@gmail.com', 7458963214, 'Vakil@13456', ''),
(11, 'Aesh Mehta', 'mehtaaesh@gmail.com', 9852361475, 'Aesh123@m', ''),
(12, 'Hina Jadvani', 'jadvanihina12@gmail.com', 7541289638, 'Jadvani@123', ''),
(13, 'Jaimin Panchal', 'jaminpanchal12@gmail.com', 9547863214, 'Jaimin@11B', ''),
(14, 'Neha Rampara', 'rampara13neha@gmail.com', 8657425664, 'Neha123@45', ''),
(15, 'Narendra Metaliya', 'metaliyanarendra1520@gmail.com', 9016214426, 'narendra@123', 'male');

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
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
