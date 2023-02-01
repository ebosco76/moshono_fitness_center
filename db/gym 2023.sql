-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 05:29 AM
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
(5, 128, '2022-11-15', '05:52:43'),
(6, 121, '2022-11-15', '05:53:14'),
(7, 120, '2022-11-15', '06:08:40'),
(8, 90, '2022-11-15', '06:09:47'),
(9, 81, '2022-11-15', '06:12:29'),
(10, 98, '2022-11-15', '06:13:49'),
(11, 131, '2022-11-15', '06:22:51'),
(12, 132, '2022-11-15', '06:23:00'),
(13, 149, '2022-11-18', '01:54:14'),
(14, 145, '2022-11-18', '01:54:29'),
(15, 138, '2022-11-18', '01:54:40'),
(16, 92, '2022-11-18', '01:54:57'),
(17, 142, '2022-11-18', '01:55:11'),
(18, 138, '2022-11-22', '08:08:31'),
(19, 128, '2022-11-22', '08:08:57'),
(20, 98, '2022-11-22', '08:11:07'),
(21, 90, '2022-11-22', '08:11:46'),
(22, 91, '2022-11-22', '08:12:02'),
(23, 93, '2022-11-22', '08:12:17'),
(24, 131, '2023-01-03', '05:54:51'),
(25, 121, '2023-01-03', '05:58:01'),
(26, 132, '2023-01-03', '06:05:47'),
(27, 155, '2023-01-03', '06:10:24'),
(28, 90, '2023-01-03', '06:10:35'),
(29, 159, '2023-01-03', '06:14:59'),
(30, 98, '2023-01-03', '06:15:19'),
(31, 100, '2023-01-03', '09:34:48'),
(32, 142, '2023-01-03', '09:35:03'),
(33, 89, '2023-01-03', '12:30:40'),
(34, 133, '2023-01-03', '12:31:02'),
(35, 119, '2023-01-03', '02:30:25'),
(36, 118, '2023-01-03', '05:17:16'),
(37, 79, '2023-01-03', '05:49:32'),
(38, 88, '2023-01-03', '05:57:59'),
(39, 101, '2023-01-03', '06:00:15'),
(40, 105, '2023-01-03', '06:06:58'),
(41, 157, '2023-01-03', '06:08:20'),
(42, 158, '2023-01-03', '06:08:47'),
(43, 132, '2023-01-04', '06:16:55'),
(44, 155, '2023-01-04', '06:17:36'),
(45, 90, '2023-01-04', '06:18:50'),
(46, 98, '2023-01-04', '06:25:02'),
(47, 131, '2023-01-04', '06:25:40'),
(48, 163, '2023-01-04', '06:29:18'),
(49, 162, '2023-01-04', '06:29:38'),
(50, 86, '2023-01-04', '06:38:49'),
(51, 156, '2023-01-04', '05:46:08'),
(52, 164, '2023-01-04', '05:46:23'),
(53, 158, '2023-01-04', '06:19:29'),
(54, 131, '2023-01-05', '06:04:24'),
(55, 132, '2023-01-05', '06:04:38');

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
(68, 'Thobius Malia', 29, 'Male', '2022-11-09', '2022-11-09', 88, 159, 2, 'Body Building', '2022-12-09', 60000, 0, '0784230722', '', 'System logo.png', 1, '14'),
(69, 'Sarah Mwakasege', 32, 'Female', '2022-11-09', '2022-11-09', 101, 132, 2, 'Fat Loss', '2022-12-09', 60000, 0, '0784373232', '', 'System logo.png', 1, '14'),
(70, 'Separatus Zephania', 30, 'Male', '2022-11-10', '2022-11-10', 70, 132, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0784270822', '', 'System logo.png', 1, '14'),
(71, 'Denis Huses', 30, 'Male', '2022-11-10', '2022-11-10', 68, 143, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0784210723', '', 'System logo.png', 1, '14'),
(72, 'Anna  Nakembe', 33, 'Female', '2022-11-10', '2022-11-10', 64, 125, 2, 'Fitness', '2022-12-10', 100000, -40000, '0682370831', '', 'System logo.png', 1, '14'),
(73, 'Agnes Ndemo', 39, 'Female', '2022-11-10', '2022-11-10', 89, 170, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0742634328', '', 'System logo.png', 1, '14'),
(74, 'Baraka', 31, 'Male', '2022-11-10', '2022-11-10', 145, 78, 2, 'Body Building', '2022-12-10', 60000, 0, '0716595940', '', 'System logo.png', 1, '14'),
(75, 'Ikunda30', 30, 'Female', '2022-11-10', '2022-11-10', 89, 132, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0769545447', '', 'System logo.png', 0, '14'),
(76, 'Akirwa', 69, 'Male', '2022-11-10', '2022-11-10', 71, 134, 2, 'Fitness', '2022-12-10', 60000, 0, '0729115466', '', 'System logo.png', 1, '14'),
(77, 'Violeth', 25, 'Female', '2022-11-10', '2022-11-10', 78, 124, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0786864553', '', 'System logo.png', 1, '14'),
(78, 'Phina', 27, 'Female', '2022-11-10', '2022-11-10', 60, 132, 2, 'Fitness', '2022-12-10', 30000, 30000, '0755300121', '', 'System logo.png', 1, '14'),
(79, 'Josephu Enock', 32, 'Male', '2022-11-10', '2022-11-10', 87, 153, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0723234565', '', 'System logo.png', 1, '14'),
(80, 'Beny', 30, 'Male', '2022-11-10', '2022-11-10', 71, 126, 2, 'Body Building', '2022-12-10', 60000, 0, '068724189968', '', 'System logo.png', 1, '14'),
(81, 'Dathan', 29, 'Male', '2022-11-10', '2022-11-10', 67, 137, 2, 'Fitness', '2022-12-10', 40000, 20000, '0785854053', '', 'System logo.png', 1, '14'),
(82, 'Eveline Kiula', 27, 'Female', '2022-11-10', '2022-11-10', 89, 132, 2, 'Fat Loss', '2022-12-10', 40000, 20000, '0756783255', '', 'System logo.png', 1, '14'),
(83, 'Jeff', 35, '', '2022-11-10', '2022-11-10', 87, 157, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0742907079', '', 'System logo.png', 1, '14'),
(84, 'Jackson R31', 31, 'Male', '2022-11-10', '2022-11-10', 87, 134, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0744377158', '', 'System logo.png', 1, '14'),
(85, 'Swalehe Msuya', 32, 'Male', '2022-11-10', '2022-11-10', 78, 134, 2, 'Fitness', '2022-12-10', 50000, 10000, '0755780027', '', 'System logo.png', 1, '14'),
(86, 'Godfrey Timos', 27, 'Female', '2022-11-10', '2022-11-10', 59, 143, 2, 'Body Building', '2022-12-10', 50000, 10000, '0762676215', '', 'System logo.png', 1, '14'),
(87, 'Speratus', 32, 'Male', '2022-11-10', '2022-11-10', 87, 123, 2, 'Fat Loss', '2022-12-10', 60000, 0, '0786542558', '', 'System logo.png', 1, '14'),
(88, 'Danieli', 25, 'Male', '2022-11-10', '2022-11-10', 76, 132, 2, 'Fat Loss', '2023-02-01', 60000, 0, '0742567890', '', 'System logo.png', 1, '14'),
(89, 'Baraka Kinasha', 29, 'Male', '2022-11-10', '2022-11-10', 78, 131, 2, 'Body Building', '2022-12-10', 600, 59400, '0765432343', '', 'System logo.png', 1, '14'),
(90, 'Ikunda', 32, 'Female', '2022-11-10', '2022-11-10', 88, 125, 2, 'Fitness', '2022-12-10', 60000, 0, '0755345678', '', 'System logo.png', 1, '14'),
(91, 'Akirwa', 57, 'Male', '2022-11-10', '2022-11-10', 59, 107, 2, 'Fitness', '2022-12-10', 60000, 0, '0789098909', '', 'System logo.png', 1, '14'),
(92, 'Jackiline', 23, 'Female', '2022-11-10', '2022-11-10', 60, 102, 2, 'Fitness', '2022-12-10', 60000, 0, '0765678890', '', 'System logo.png', 1, '14'),
(93, 'Neema', 25, 'Female', '2022-11-10', '2022-11-10', 65, 132, 2, 'Fitness', '2022-12-10', 60000, 0, '0789098789', '', 'System logo.png', 1, '14'),
(94, 'Ezekieli', 29, 'Male', '2022-11-10', '2022-11-10', 79, 135, 2, 'Fat Loss', '2022-12-10', 50000, 10000, '0784909972', '', 'System logo.png', 1, '14'),
(95, 'Marry', 28, 'Female', '2022-11-10', '2022-11-10', 78, 116, 2, 'Fat Loss', '2022-12-10', 60000, 0, '07689389', '', 'System logo.png', 1, '14'),
(97, 'Gweni', 28, 'Female', '2022-11-11', '2022-11-11', 78, 123, 2, 'Fitness', '2022-12-11', 60000, 0, '0789089900', '', 'System logo.png', 1, '14'),
(98, 'Rajabu', 27, 'Male', '2022-11-11', '2022-11-11', 76, 125, 2, 'Body Building', '2022-12-11', 60000, 0, '0622822716', '', 'System logo.png', 1, '14'),
(99, 'Nicodemu', 35, 'Male', '2022-11-11', '2022-11-11', 79, 136, 2, 'Fat Loss', '2022-12-11', 60000, 0, '0742367890', '', 'System logo.png', 1, '14'),
(100, 'Carlos', 27, 'Male', '2022-11-11', '2022-11-11', 80, 103, 2, 'Fitness', '2023-02-02', 60000, 0, '0763700759', '', 'System logo.png', 1, '14'),
(101, 'Ester Panda', 50, 'Male', '2022-11-11', '2022-11-11', 59, 124, 3, 'Fitness', '2023-03-04', 160000, -100000, '0789009870', '', 'System logo.png', 1, '14'),
(102, 'Mark D', 29, 'Male', '2022-11-11', '2022-11-11', 76, 145, 2, 'Body Building', '2022-12-11', 60000, 0, '0688584817', '', 'System logo.png', 1, '14'),
(103, 'Aneth', 35, 'Female', '2022-11-11', '2022-11-11', 95, 102, 2, 'Fitness', '2022-12-11', 60000, 0, '0757463020', '', 'System logo.png', 1, '14'),
(104, 'Anne', 38, 'Female', '2022-11-11', '2022-11-11', 76, 140, 2, 'Fat Loss', '2022-12-11', 60000, 0, '0765435670', '', 'System logo.png', 1, '14'),
(105, 'Happy Regani', 27, 'Female', '2022-11-11', '2022-11-11', 67, 123, 2, 'Fitness', '2022-12-11', 60000, 0, '0757118720', '', 'System logo.png', 1, '14'),
(106, 'Babra', 43, 'Male', '2022-11-11', '2022-11-11', 87, 134, 2, 'Fat Loss', '2022-12-11', 60000, 0, '0684230722', '', 'System logo.png', 1, '14'),
(107, 'Susane', 45, 'Female', '2022-11-11', '2022-11-11', 79, 121, 2, 'Fitness', '2022-12-11', 60000, 0, '0789054376', '', 'System logo.png', 1, '14'),
(111, 'Cesilia', 30, 'Female', '2022-11-11', '2022-11-11', 85, 102, 2, 'Fitness', '2022-12-11', 60000, 0, '0684270822', '', 'System logo.png', 1, '14'),
(112, 'Colman', 34, 'Male', '2022-11-11', '2022-11-11', 78, 143, 2, 'Body Building', '2022-12-11', 60000, 0, '0786543897', '', 'System logo.png', 1, '14'),
(113, 'Neema Foya', 0, 'Female', '2022-11-11', '2022-11-11', 68, 125, 2, 'Fitness', '2022-12-11', 60000, 0, '0682090831', '', 'System logo.png', 1, '14'),
(114, 'Erland', 28, 'Male', '2022-11-11', '2022-11-11', 88, 132, 2, 'Body Building', '2022-12-11', 60000, 0, '0682960241', '', 'System logo.png', 1, '14'),
(115, 'Happy Kisota', 45, 'Female', '2022-11-11', '2022-11-11', 73, 123, 2, 'Fitness', '2022-12-11', 60000, 0, '0689098765', '', 'System logo.png', 1, '14'),
(117, 'Lodricki', 31, 'Male', '2022-11-11', '2022-11-11', 74, 132, 2, 'Fat Loss', '2022-12-11', 60000, 0, '0682634328', '', 'System logo.png', 1, '14'),
(118, 'Queen', 32, 'Female', '2022-11-11', '2022-11-11', 108, 105, 2, 'Fitness', '2022-12-11', 60000, 0, '0780090723', '', 'System logo.png', 1, '14'),
(119, 'Anna ', 28, 'Female', '2022-11-11', '2022-11-11', 80, 132, 2, 'Fitness', '2022-12-11', 60000, 0, '0684299822', '', 'System logo.png', 1, '14'),
(120, 'Ma.Kisamo', 70, 'Female', '2022-11-11', '2022-11-11', 72, 109, 2, 'Fitness', '2022-12-11', 45000, 15000, '0754361312', '', 'System logo.png', 1, '14'),
(121, 'Ester Kisamo', 34, 'Female', '2022-11-11', '2022-11-11', 80, 123, 2, 'Fitness', '2022-12-11', 60000, 0, '0784230700', '', 'System logo.png', 1, '14'),
(123, 'Jullious Moleli', 31, 'Male', '2022-11-11', '2022-11-11', 89, 145, 2, 'Body Building', '2022-12-11', 60000, 0, '0752512449', '', 'System logo.png', 1, '14'),
(124, 'George', 34, 'Male', '2022-11-11', '2022-11-11', 87, 139, 2, 'Fitness', '2022-12-11', 20000, 40000, '0784230007', '', 'System logo.png', 1, '14'),
(125, 'Simoni', 26, 'Male', '2022-11-11', '2022-11-11', 69, 118, 2, 'Body Building', '2022-12-11', 20000, 40000, '0789408386', '', 'System logo.png', 1, '14'),
(126, 'Donald', 27, 'Male', '2022-11-11', '2022-11-11', 78, 126, 2, 'Fitness', '2022-12-11', 30000, 30000, '0676715112', '', 'System logo.png', 1, '14'),
(127, 'Frenk Robarty', 31, 'Male', '2022-11-14', '2022-11-14', 82, 132, 2, 'Fitness', '2022-12-14', 60000, 0, '0752606600', '', 'System logo.png', 1, '14'),
(128, 'Loth', 36, 'Male', '2022-11-14', '2022-11-14', 78, 122, 2, 'Fitness', '2022-12-14', 60000, 0, '0767357364', '', 'System logo.png', 1, '14'),
(130, 'Micho', 48, 'Male', '2022-11-15', '2022-11-15', 76, 134, 2, 'Fitness', '2022-12-15', 60000, 0, '0790373232', '', 'System logo.png', 1, '14'),
(131, 'Nassibu', 48, 'Male', '2022-11-15', '2022-11-15', 78, 132, 2, 'Fat Loss', '2022-12-15', 50000, 10000, '0765431567', '', 'System logo.png', 1, '14'),
(132, 'Goodlck', 45, 'Male', '2022-11-15', '2022-11-15', 76, 135, 2, 'Fitness', '2022-12-15', 60000, 0, '0717045215', '', 'System logo.png', 1, '14'),
(133, 'Elizabeth', 53, 'Female', '2022-11-15', '2022-11-15', 76, 115, 2, 'Fitness', '2022-12-15', 60000, 0, '0754595050', 'narigo.mbago@gmail.com', 'System logo.png', 1, '14'),
(135, 'vivian', 29, 'Female', '2022-11-15', '2022-11-15', 100, 128, 2, 'Fitness', '2022-12-15', 50000, 10000, '0765477899', '', 'System logo.png', 1, '14'),
(137, 'Victor', 35, 'Male', '2022-11-15', '2022-11-15', 78, 123, 2, 'Fitness', '2022-12-15', 60000, 0, '0784230720', '', 'System logo.png', 1, '14'),
(138, 'James Minja', 35, 'Male', '2022-11-15', '2022-11-15', 78, 132, 2, 'Fitness', '2022-12-15', 35000, 25000, '0684373232', 'james.minja.28@gmail.com', 'System logo.png', 1, '14'),
(140, 'Robarty', 28, 'Male', '2022-11-15', '2022-11-15', 65, 122, 2, 'Body Building', '2022-12-15', 60000, 0, '0622192270', 'piusladslaus.97@gmail.com', 'System logo.png', 1, '14'),
(142, 'sally Msuya', 30, 'Female', '2022-11-15', '2022-11-15', 88, 138, 2, 'Fitness', '2022-12-15', 60000, 0, '0753271404', 'saima.msuya@icloud.com', 'System logo.png', 1, '14'),
(143, 'Mmasa Sauli', 45, 'Male', '2022-11-15', '2022-11-15', 75, 114, 2, 'Fitness', '2023-02-02', 60000, 0, '0787787634', 'mmasasaul19@gmail.com', 'System logo.png', 1, '14'),
(145, 'Kamau', 36, 'Male', '2022-11-15', '2022-11-15', 74, 132, 2, 'Fitness', '2022-12-15', 60000, 0, '0755459282', 'kamaugeneralsupply17@yahoo.com', 'System logo.png', 1, '14'),
(147, 'Elizabeth Ngora', 29, 'Female', '2022-11-15', '2022-11-15', 65, 123, 2, 'Fitness', '2022-12-15', 60000, 0, '0789007654', '', 'System logo.png', 1, '14'),
(148, 'Judith', 37, 'Female', '2022-11-15', '2022-11-15', 78, 133, 1, 'Fitness', '2022-11-22', 25000, 0, '0789765433', '', 'System logo.png', 1, '14'),
(149, 'Fredy', 32, 'Male', '2022-11-18', '2022-11-18', 96, 145, 2, 'Fitness', '2022-12-18', 60000, 0, '0788654323', '', 'System logo.png', 1, '14'),
(150, 'Elina', 30, 'Female', '2022-11-24', '2022-11-24', 75, 122, 2, 'Fitness', '2022-12-24', 60000, 0, '0784219907', '', 'System logo.png', 1, '14'),
(151, 'Enol', 32, 'Male', '2022-11-24', '2022-11-24', 77, 146, 2, 'Fitness', '2022-12-24', 60000, 0, '0765821842', 'enoi99@live.com', 'System logo.png', 1, '14'),
(153, 'Noryn', 27, 'Female', '2022-11-24', '2022-11-24', 73, 124, 2, 'Fitness', '2022-12-24', 60000, 0, '0719855336', 'noryncharlz@gmail.com', 'System logo.png', 1, '14'),
(154, 'Judith', 37, 'Female', '2022-11-24', '2022-11-24', 80, 114, 2, 'Fitness', '2022-12-24', 60000, 0, '0704210723', '', 'System logo.png', 1, '14'),
(155, 'Victor', 35, 'Male', '2023-01-02', '2023-01-02', 84, 148, 2, 'Fitness', '2023-02-01', 60000, 0, '0754975574', '', 'System logo.png', 1, '14'),
(156, 'JACKLINE DEOGRATUS', 27, 'Female', '2023-01-02', '2023-01-02', 64, 153, 2, 'Fitness', '2023-02-01', 60000, 0, '0699570849', '', 'System logo.png', 1, '14'),
(157, 'STANLEY', 54, 'Male', '2023-01-02', '2023-01-02', 85, 147, 2, 'Fat Loss', '2023-02-01', 60000, 0, '0787372424', '', 'System logo.png', 1, '14'),
(158, 'VICTOR SAID', 42, 'Male', '2023-01-02', '2023-01-02', 75, 159, 2, 'Fitness', '2023-02-02', 60000, 0, '0755009003', '', 'System logo.png', 1, '14'),
(159, 'Arnold', 45, 'Male', '2023-01-03', '2023-01-03', 82, 122, 4, 'Fitness', '2023-04-03', 180000, 0, '0786543236', '', 'System logo.png', 1, '14'),
(160, 'Elizabeth marandu', 27, 'Female', '2023-01-03', '2023-01-03', 104, 132, 2, 'Fat Loss', '2023-02-02', 50000, 10000, '0784670973', '', 'System logo.png', 1, '14'),
(162, 'Willibart Tarimo', 35, 'Male', '2023-01-03', '2023-01-03', 87, 145, 2, 'Fitness', '2023-02-02', 30000, 30000, '075840007', '', 'System logo.png', 1, '14'),
(163, 'Ester Panda', 53, 'Female', '2023-01-03', '2023-01-03', 63, 123, 3, 'Fitness', '2023-03-04', 100000, 20000, '0788907655', '', 'System logo.png', 1, '14'),
(164, 'Susan Michael', 32, '', '2023-01-03', '2023-01-03', 78, 123, 2, 'Fitness', '2023-02-02', 30000, 30000, '0784759873', '', 'System logo.png', 1, '14'),
(166, 'Paul Z ', 44, 'Male', '2023-01-04', '2023-01-04', 89, 145, 2, 'Fitness', '2023-02-03', 60000, 0, '0784239722', '', 'System logo.png', 1, '14'),
(168, 'stephania', 17, 'Female', '2023-01-05', '2023-01-05', 70, 105, 2, 'Fitness', '2023-02-04', 60000, 0, '0788899078', '', 'System logo.png', 1, '14'),
(169, 'khadija', 32, 'Female', '2023-01-05', '2023-01-05', 73, 123, 2, 'Fitness', '2023-02-04', 50000, 10000, '0715920543', '', 'System logo.png', 1, '14'),
(170, 'Dina  mashuve', 43, '', '2023-01-05', '2023-01-05', 68, 134, 2, '', '2023-02-04', 60000, 0, '0767774476', '', 'System logo.png', 1, '14'),
(171, 'Neema lLema', 27, 'Female', '2023-01-05', '2023-01-05', 65, 103, 2, 'Fitness', '2023-02-04', 60000, 0, '0712297635', '', 'System logo.png', 1, '14');

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
(13, 'Philipo', '0742947790', 'Male', '2022-11-08', '5000', 14),
(14, 'Nassoro', '0742957890', 'Male', '2022-11-08', '5000', 14),
(15, 'George', '0742957690', 'Male', '2022-11-08', '5000', 14),
(16, 'Amina', '0743567659', 'Female', '2022-11-09', '5000', 14),
(17, 'Nassoro', '0742957890', 'Male', '2022-11-09', '5000', 14),
(18, 'Philipo', '0742947790', 'Male', '2022-11-09', '5000', 14),
(19, 'Nassoro', '0742957890', 'Male', '2022-11-10', '5000', 14),
(20, 'Ericki Kibada', '0789900768', 'Male', '2022-11-10', '5000', 14),
(21, 'Hellen', '0784373002', 'Female', '2022-11-11', '5000', 14),
(22, 'Leonard', '0784210993', 'Male', '2022-11-11', '5000', 14),
(23, 'Leonard', '0784210993', 'Male', '2022-11-11', '5000', 14),
(24, 'Kitoi', '0789009899', 'Male', '2022-11-11', '5000', 14),
(25, 'Loise', '0788654320', 'Female', '2022-11-11', '5000', 14),
(26, 'Mary', '0678990989', 'Female', '2022-11-11', '5000', 14),
(27, 'Jullious', '0789002345', 'Male', '2022-11-11', '5000', 14),
(28, 'piter', '0789324976', 'Male', '2022-11-11', '5000', 14),
(29, 'piter', '0789324976', 'Male', '2022-11-11', '5000', 14),
(30, 'Zakaria', '0768904480', 'Male', '2022-11-11', '5000', 14),
(31, 'Ericki Kibada', '0789900768', 'Male', '2022-11-11', '5000', 14),
(32, 'Mary', '0678990989', 'Female', '2022-11-11', '5000', 14),
(33, 'Kitoi', '0789009899', 'Male', '2022-11-11', '5000', 14),
(34, 'Frenk', '0782869350', 'Male', '2022-11-11', '5000', 14),
(35, 'Nassoro', '0742957890', 'Male', '2022-11-11', '5000', 14),
(36, 'Johar', '0684373232', 'Female', '2022-11-15', '5000', 14),
(37, 'Warioba', '0784270887', 'Male', '2022-11-15', '5000', 14),
(38, 'Warioba', '0784270887', 'Male', '2022-11-15', '5000', 14),
(39, 'Nassoro', '0742957890', 'Male', '2022-11-15', '5000', 14),
(40, 'Willifred', '0684373232', 'Male', '2022-11-15', '5000', 14),
(41, 'Mary', '0678990989', 'Female', '2022-11-15', '5000', 14),
(42, 'Albina', '0684210723', 'Female', '2022-11-15', '5000', 14),
(43, 'Hellen', '0784373002', 'Female', '2022-11-15', '5000', 14),
(44, 'Kessi', '0784373200', 'Male', '2022-11-18', '5000', 14),
(45, 'Shaban', '0784230002', 'Male', '2022-11-18', '5000', 14),
(46, 'Shaban', '0784230002', 'Male', '2022-11-18', '5000', 14),
(47, 'Warioba', '0784270887', 'Male', '2022-11-18', '5000', 14),
(48, 'Nassoro', '0742957890', 'Male', '2022-11-18', '5000', 14),
(49, 'Frenk', '0782869350', 'Male', '2022-11-18', '5000', 14),
(50, 'Philipo', '0742947790', 'Male', '2022-11-18', '5000', 14),
(51, 'Ericki Kibada', '0789900768', 'Male', '2022-11-18', '5000', 14),
(52, 'Mary', '0678990989', 'Female', '2022-11-18', '5000', 14),
(53, 'Albina', '0684210723', 'Female', '2022-11-18', '5000', 14),
(54, 'Frenk', '0782869350', 'Male', '2022-11-18', '5000', 14),
(55, 'Frenk', '0782869350', 'Male', '2022-11-18', '5000', 14),
(56, 'Peter', '0784210792', 'Male', '2022-11-18', '5000', 14),
(57, 'Peter', '0784210792', 'Male', '2022-11-18', '5000', 14),
(58, 'Lenarpy', '0682070831', 'Male', '2022-11-18', '5000', 14),
(59, 'Lenarpy', '0682070831', 'Male', '2022-11-18', '5000', 14),
(60, 'Lois', '', '', '2022-11-18', '5000', 14),
(61, 'Mike', '0784889022', 'Male', '2022-11-22', '5000', 14),
(62, 'Nassoro', '0742957890', 'Male', '2022-11-22', '5000', 14),
(63, 'Ray', '0682370838', 'Male', '2022-11-22', '5000', 14),
(64, 'Ray', '0682370838', 'Male', '2022-11-22', '5000', 14),
(65, 'Frenk', '0782869350', 'Male', '2022-11-24', '5000', 14),
(66, 'Mike', '0784889022', 'Male', '2022-11-24', '5000', 14),
(67, 'Violeth', '', '', '2023-01-02', '5000', 14),
(68, 'Violeth', '', '', '2023-01-02', '5000', 14),
(69, 'john', '076632888', 'Male', '2023-01-03', '5000', 14),
(70, 'Nassoro', '0765889000', 'Male', '2023-01-03', '5000', 14),
(71, 'john', '076632888', 'Male', '2023-01-03', '5000', 14),
(72, 'Mishi', '0784373232', 'Female', '2023-01-03', '5000', 14),
(73, 'Peter', '0784210792', 'Male', '2023-01-03', '5000', 14),
(74, 'Nicodemu', '0682370831', 'Male', '2023-01-03', '5000', 14),
(75, 'coletha', '0766267979', 'Female', '2023-01-03', '5000', 14),
(76, 'bikulamchi', '', '', '2023-01-03', '5000', 14),
(77, 'Philipo', '', 'Male', '2023-01-04', '5000', 14),
(78, 'Philipo', '', 'Male', '2023-01-04', '5000', 14),
(79, 'Nassoro', '0622822716', 'Male', '2023-01-04', '5000', 14),
(80, 'john', '', 'Male', '2023-01-04', '5000', 14),
(81, 'john', '', 'Male', '2023-01-04', '5000', 14),
(82, 'Nassoro', '0622822716', 'Male', '2023-01-04', '5000', 14),
(83, 'Peter', '', 'Male', '2023-01-05', '5000', 14),
(84, 'Peter Gemin', '', 'Male', '2023-01-05', '5000', 14);

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
(101, 3, 'Fitness', '2023-01-10', 4, '14'),
(88, 2, 'Fat Loss', '2022-12-10', 5, '14'),
(100, 2, 'Body Building', '2022-12-11', 6, '14'),
(143, 2, 'Fitness', '2022-12-15', 7, '14');

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
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `daily_clients`
--
ALTER TABLE `daily_clients`
  MODIFY `d_client_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
