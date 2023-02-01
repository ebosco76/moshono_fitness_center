-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 08:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `client_id_no` int(255) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `client_id_no`, `attendance_date`, `attendance_time`) VALUES
(1, 59, '2022-10-21', '09:01:18'),
(2, 58, '2022-10-21', '02:17:21'),
(3, 61, '2022-10-25', '01:47:41'),
(4, 66, '2022-10-25', '09:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id_no` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_reception` date NOT NULL,
  `progress_date` date NOT NULL,
  `weight` int(255) NOT NULL,
  `height` int(100) NOT NULL,
  `package_id` int(100) NOT NULL,
  `program_type` varchar(100) NOT NULL,
  `end_of_program_date` date NOT NULL,
  `amount_paid` int(255) NOT NULL,
  `remaining_amount` int(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `member_status` int(2) NOT NULL DEFAULT 1,
  `registeredby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id_no`, `fullname`, `age`, `gender`, `date_of_reception`, `progress_date`, `weight`, `height`, `package_id`, `program_type`, `end_of_program_date`, `amount_paid`, `remaining_amount`, `phoneno`, `client_email`, `profile_pic`, `member_status`, `registeredby`) VALUES
(46, 'Erick Haule', 29, 'Male', '2022-10-14', '2022-10-14', 50, 190, 1, 'Fitness', '0000-00-00', 20000, 5000, '0712121212', '', 'System logo.png', 1, '17'),
(48, 'Benigna Bosco', 54, 'Female', '2022-10-19', '2022-10-19', 87, 189, 1, 'Fitness', '0000-00-00', 20000, 5000, '0762121212', '', 'System logo.png', 0, '8'),
(58, 'Beston Bosco Haule', 45, 'Male', '2022-10-20', '2022-10-20', 90, 190, 1, 'Fitness', '2022-10-27', 5000, 20000, '0723121212', 'bestonbosco@gmail.com', 'System logo.png', 0, '8'),
(59, 'Jackson Kwai', 34, 'Male', '2022-10-21', '2022-10-21', 70, 180, 2, 'Body Building', '2022-11-20', 30000, 30000, '0622121212', '', '104806.jpg', 1, '8'),
(60, 'Asnat Kimario', 26, 'Female', '2022-10-21', '2022-10-21', 58, 190, 4, 'Body Building', '2023-01-21', 170000, 10000, '0763001212', '', 'System logo.png', 1, '8'),
(61, 'Vanessa Linus', 39, 'Female', '2022-10-25', '2022-10-25', 80, 190, 2, 'Fitness', '2022-11-24', 60000, 0, '0732121212', '', '561467.jpg', 1, '8'),
(62, 'Vanessa Linus1', 39, 'Female', '2022-10-25', '2022-10-25', 80, 190, 2, 'Fitness', '2022-11-24', 60000, 0, '0732121202', '', '561467.jpg', 1, '8'),
(63, 'Asnat Kimario2', 26, 'Female', '2022-10-21', '2022-10-21', 58, 190, 2, 'Body Building', '2022-11-24', 50000, 10000, '0763001012', '', 'System logo.png', 1, '17'),
(64, 'Jackson Kwai3', 34, 'Male', '2022-10-21', '2022-10-21', 70, 180, 2, 'Body Building', '2022-11-20', 30000, 30000, '0620121212', '', '104806.jpg', 1, '8'),
(65, 'Beston Bosco Haule4', 45, 'Male', '2022-10-20', '2022-10-20', 90, 190, 1, 'Fitness', '2022-10-27', 5000, 20000, '0723021212', 'bestonbosco@gmail.com', 'System logo.png', 0, '8'),
(66, 'Benigna Bosco5', 54, 'Female', '2022-10-19', '2022-10-19', 87, 189, 1, 'Fitness', '0000-00-00', 20000, 5000, '0760121212', '', 'System logo.png', 0, '8'),
(67, 'Erick Haule6', 29, 'Male', '2022-10-14', '2022-10-25', 70, 190, 1, 'Fitness', '0000-00-00', 20000, 5000, '0712120012', '', 'System logo.png', 1, '17');

-- --------------------------------------------------------

--
-- Table structure for table `daily_clients`
--

CREATE TABLE `daily_clients` (
  `d_client_id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `reg_date` date NOT NULL,
  `amount` varchar(100) NOT NULL DEFAULT '5000',
  `registeredby` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_clients`
--

INSERT INTO `daily_clients` (`d_client_id`, `full_name`, `phone_number`, `gender`, `reg_date`, `amount`, `registeredby`) VALUES
(1, 'Beston Haule', '0762826385', 'Male', '2022-10-24', '5000', 17),
(2, 'Beston Haule', '0762826385', 'Male', '2022-10-25', '5000', 8),
(3, 'Erick Haule', '0762131211', 'Male', '2022-10-25', '5000', 8),
(4, 'Vanessa Jr', '0727121212', 'Female', '2022-10-25', '5000', 8),
(5, 'Vanessa Jr', '0727121212', 'Female', '2022-10-25', '5000', 8),
(6, 'Erick Haule Bosco', '0766121212', 'Male', '2022-10-25', '5000', 17),
(7, 'Erick Haule Bosco', '0766121212', 'Male', '2022-10-25', '5000', 17),
(8, 'Erick Haule Bosco', '0766121212', 'Male', '2022-10-25', '5000', 17),
(9, 'Vanessa Jr', '0727121212', 'Female', '2022-10-25', '5000', 17),
(10, 'Beston Haule', '0762826385', 'Male', '2022-10-25', '5000', 17),
(11, 'Beston Haule', '0762826385', 'Male', '2022-11-06', '5000', 8),
(12, 'Beston Haule', '0762826385', 'Male', '2022-11-07', '5000', 8);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `expense_price` int(100) NOT NULL,
  `expense_date` date NOT NULL,
  `recorded_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `description`, `expense_price`, `expense_date`, `recorded_by`) VALUES
(1, 'Tishu', 1000, '2022-10-21', 8),
(2, 'Mafuta ya chelehani', 2000, '2022-10-21', 17),
(3, 'Sabuni', 1000, '2022-10-25', 8),
(4, 'Mafuta', 3000, '2022-10-25', 17);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `client_id_no` int(255) NOT NULL,
  `package_id` int(100) NOT NULL,
  `program_type` varchar(100) NOT NULL,
  `end_of_program_date` date NOT NULL,
  `history_id` int(255) NOT NULL,
  `registeredby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`client_id_no`, `package_id`, `program_type`, `end_of_program_date`, `history_id`, `registeredby`) VALUES
(60, 3, 'Personal Training', '2022-10-23', 1, '17'),
(60, 2, 'Body Building', '2022-11-22', 2, '8'),
(63, 4, 'Body Building', '2023-01-23', 3, '8');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `number_of_days` int(11) NOT NULL,
  `package_price` int(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `number_of_days`, `package_price`, `status`) VALUES
(1, '7 Days', 7, 25000, 1),
(2, '30 Days', 30, 60000, 1),
(3, '2 Months', 60, 120000, 1),
(4, '3 Months', 90, 180000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(255) NOT NULL,
  `client_id_no` int(255) NOT NULL,
  `amount_paid` int(255) NOT NULL,
  `amount_to_be_paid` int(255) NOT NULL,
  `extended_or_reduced_amount` int(255) NOT NULL,
  `received_by` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `client_id_no`, `amount_paid`, `amount_to_be_paid`, `extended_or_reduced_amount`, `received_by`) VALUES
(1, 60, 100000, 20000, 20000, 17),
(2, 60, 40000, 20000, 20000, 8),
(3, 61, 50000, 10000, 10000, 8),
(4, 63, 175000, 5000, 5000, 17);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_img`, `product_name`, `product_price`, `product_quantity`, `status`) VALUES
(1, '864674.jpg', 'Red V color t-shirt', 10000, 7, 1),
(2, '910927.jpg', 'Round color t-shirt', 20000, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `progress_id` int(255) NOT NULL,
  `client_id_no` int(255) NOT NULL,
  `date` date NOT NULL,
  `old_weight` int(255) NOT NULL,
  `new_weight` int(255) NOT NULL,
  `progress_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`progress_id`, `client_id_no`, `date`, `old_weight`, `new_weight`, `progress_image`) VALUES
(1, 59, '2022-10-21', 70, 75, '59559.jpg'),
(2, 59, '2022-10-21', 70, 80, '949334.jpg'),
(4, 60, '2022-10-21', 90, 80, '352596.jpg'),
(5, 60, '2022-10-21', 80, 75, 'System logo.png'),
(6, 60, '2022-10-21', 75, 60, 'System logo.png'),
(7, 60, '2022-10-21', 60, 58, 'System logo.png'),
(8, 61, '2022-10-25', 60, 70, '793270.jpg'),
(9, 61, '2022-10-25', 70, 80, 'System logo.png'),
(10, 67, '2022-10-25', 50, 60, '825630.jpg'),
(11, 67, '2022-10-25', 60, 70, '184086.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `selling_product`
--

CREATE TABLE `selling_product` (
  `selling_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `client_id_no` int(255) NOT NULL,
  `total_price` int(10) NOT NULL,
  `received_amount` int(10) NOT NULL,
  `remaining_amount` int(10) NOT NULL,
  `selling_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selling_product`
--

INSERT INTO `selling_product` (`selling_id`, `product_id`, `product_quantity`, `client_id_no`, `total_price`, `received_amount`, `remaining_amount`, `selling_date`) VALUES
(1, 1, 0, 0, 0, 0, 0, '2022-10-25'),
(2, 2, 0, 0, 0, 0, 0, '2022-10-25'),
(3, 2, 0, 0, 0, 0, 0, '2022-10-25'),
(4, 2, 3, 67, 60000, 40000, 0, '2022-10-25'),
(5, 2, 2, 64, 40000, 30000, 0, '2022-10-25'),
(6, 2, 0, 0, 0, 0, 0, '2022-10-25'),
(7, 2, 2, 64, 40000, 40000, 0, '2022-10-25'),
(8, 2, 0, 0, 0, 0, 0, '2022-10-25'),
(9, 2, 3, 64, 60000, 60000, 0, '2022-10-25'),
(10, 2, 5, 62, 100000, 90000, 10000, '2022-10-25'),
(11, 2, 3, 0, 60000, 0, 60000, '2022-11-06'),
(12, 2, 2, 0, 40000, 0, 40000, '2022-11-06'),
(13, 1, 3, 0, 30000, 0, 30000, '2022-11-06'),
(14, 2, 2, 0, 40000, 0, 40000, '2022-11-07'),
(15, 0, 2, 0, 40000, 0, 0, '2022-11-07'),
(16, 2, 2, 0, 40000, 0, 0, '2022-11-07'),
(17, 2, 3, 46, 60000, 60000, 0, '2022-11-07'),
(18, 2, 10, 0, 200000, 0, 0, '2022-11-07'),
(19, 2, 10, 0, 200000, 0, 0, '2022-11-07'),
(20, 2, 8, 0, 160000, 0, 0, '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `image`, `fullname`, `gender`, `age`, `phoneno`, `username`, `password`, `position`, `status`) VALUES
(8, 'img/staff/Screenshot (42).png', 'Godbless', 'Male', 0, '0762951911', 'Godbless', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 1),
(14, '395910.jpeg', 'Johnson John1', 'Female', 36, '0733665576', 'john', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 1),
(17, '448706.jpg', 'Delphina Mallya', 'Female', 21, '0777001265', 'Delphina', '827ccb0eea8a706c4c34a16891f84e7b', 'Trainer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id_no`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- Indexes for table `daily_clients`
--
ALTER TABLE `daily_clients`
  ADD PRIMARY KEY (`d_client_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `selling_product`
--
ALTER TABLE `selling_product`
  ADD PRIMARY KEY (`selling_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `daily_clients`
--
ALTER TABLE `daily_clients`
  MODIFY `d_client_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `progress_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `selling_product`
--
ALTER TABLE `selling_product`
  MODIFY `selling_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
