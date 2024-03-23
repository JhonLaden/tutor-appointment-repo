-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 01:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'learner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `phone`, `address`, `age`, `type`) VALUES
(8, 'bbb', 'qwe', 'asdfsd', 'ss', 'Adjaluddin', 123132, 'Recodo purok 7-A zamboanga city', 14, 'learner'),
(9, 'natsu', 'qwe', 'asdfsd', 'sadf', 'asdf', 123132, 'Recodo purok 7-A zamboanga city', 21, 'learner'),
(10, 'hello', 'asdf', 'wqer', 'asdf', 'asdf', 123132, 'Recodo purok 7-A zamboanga city', 21, 'learner'),
(11, 'dump', 'asdf', 'dump', 'middle', 'last', 123312, 'Recodo purok 7-A zamboanga city', 20, 'learner'),
(12, 'hello', 'qwe', 'asdfsd', 'sadf', 'Adjaluddin', 2147483647, 'Recodo purok 7-A zamboanga city', 14, 'learner'),
(13, 'zach', 'qwe', 'zach', 'zach', 'zach', 2147483647, 'Recodo purok 7-A zamboanga city', 21, 'learner');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `learner_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `fee` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `date_updated` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `tutor_id`, `learner_id`, `date`, `time`, `fee`, `status`, `date_created`, `date_updated`) VALUES
(27, 120, 9, '2024-03-16', '03:43:00', 0, 'Confirm', '2024-03-13 11:37:39', '2024-03-13 11:37:39'),
(28, 120, 9, '2024-03-23', '18:30:00', 0, 'Cancelled', '2024-03-13 12:21:27', '2024-03-13 12:21:27'),
(29, 120, 9, '2024-03-16', '15:24:00', 0, 'Confirm', '2024-03-13 12:21:45', '2024-03-13 12:21:45'),
(30, 120, 9, '2024-03-15', '08:40:00', 0, 'Confirm', '2024-03-13 20:39:06', '2024-03-13 20:39:06'),
(31, 120, 9, '2024-03-15', '08:40:00', 0, 'Pending', '2024-03-13 20:40:20', '2024-03-13 20:40:20'),
(32, 120, 9, '2024-03-30', '09:17:00', 0, 'Pending', '2024-03-13 20:40:27', '2024-03-13 20:40:27'),
(33, 120, 9, '2024-03-23', '08:51:00', 0, 'Cancelled', '2024-03-13 20:51:08', '2024-03-13 20:51:08'),
(34, 120, 9, '2024-05-14', '09:20:00', 0, 'Cancelled', '2024-03-13 21:19:22', '2024-03-13 21:19:22'),
(35, 123, 13, '2024-03-15', '09:44:00', 0, 'Cancelled', '2024-03-13 21:44:04', '2024-03-13 21:44:04'),
(36, 123, 13, '2024-03-22', '09:48:00', 0, 'Confirm', '2024-03-13 21:46:00', '2024-03-13 21:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `tutor_subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `date_updated` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `tutor_subject_id`, `subject_name`, `date_created`, `date_updated`, `status`) VALUES
(2, 120, 'Math', '2024-03-16', '2024-03-16', 0),
(3, 120, 'gaga', '2024-03-16', '2024-03-16', 0),
(4, 120, 'gaga', '2024-03-16', '2024-03-16', 0),
(5, 120, 'hello', '2024-03-16', '2024-03-16', 0),
(6, 120, 'yawa', '2024-03-16', '2024-03-16', 0),
(7, 120, 'gaga', '2024-03-16', '2024-03-16', 0),
(8, 120, 'hello', '2024-03-16', '2024-03-16', 0),
(9, 120, 'asdfsfd', '2024-03-16', '2024-03-16', 0),
(10, 120, 'asdfsfd', '2024-03-16', '2024-03-16', 0),
(11, 120, 'gaga', '2024-03-16', '2024-03-16', 0),
(12, 120, 'hello', '2024-03-16', '2024-03-16', 0),
(13, 120, 'hello', '2024-03-16', '2024-03-16', 0),
(14, 120, 'gaga', '2024-03-16', '2024-03-16', 0),
(15, 120, 'asdfsfd', '2024-03-16', '2024-03-16', 0),
(16, 120, 'gaga', '2024-03-16', '2024-03-16', 0),
(17, 120, 'asdfsfd', '2024-03-16', '2024-03-16', 0),
(18, 121, 'haha', '2024-03-16', '2024-03-16', 0),
(20, 121, 'tree', '2024-03-16', '2024-03-16', 1),
(21, 120, 'haha', '2024-03-16', '2024-03-16', 0),
(22, 120, '', '2024-03-16', '2024-03-16', 0),
(23, 120, 'Math', '2024-03-16', '2024-03-16', 1),
(24, 120, 'English', '2024-03-16', '2024-03-16', 1),
(25, 120, 'Art', '2024-03-16', '2024-03-16', 1),
(26, 120, 'Science', '2024-03-16', '2024-03-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'tutor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `phone`, `address`, `age`, `type`) VALUES
(120, 'aaa', 'aaa', 'Jhon Ladenm', 'bayle', 'adjaluddin', 123312, 'Recodo purok 7-A zamboanga city', 20, 'tutor'),
(121, 'fatima', 'qwe', 'fatima', 'b', 'bibbio', 2147483647, 'Recodo purok 7-A zamboanga city', 14, 'tutor'),
(122, 'dump', 'qwer', 'Jhon Ladenm', 'bayle', 'adjaluddin', 2147483647, 'Recodo purok 7-A zamboanga city', 21, 'tutor'),
(123, 'pat', 'pat', 'pat', 'sarita', 'sarita', 2147483647, 'Recodo purok 7-A zamboanga city', 20, 'tutor');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_profile`
--

CREATE TABLE `tutor_profile` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `education` varchar(255) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `location` varchar(255) NOT NULL,
  `base` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor_profile`
--

INSERT INTO `tutor_profile` (`id`, `id_fk`, `description`, `experience`, `education`, `services`, `location`, `base`, `fee`, `rating`) VALUES
(30, 120, '                 I am an expert of mathematics from Grade School level to College Level and good at creating instructional materials to the level of needs of the student. I have been teaching students for more than 2 years and to teach unfortunate children volunteer haahhahaah', 'SHS Teacher (Mar, 2021–Present) at DepEd Valenzuela City I am currently a Senior High School Teacher at a public school in Valenzuela. I am teaching General Mathematics, Statistics and Probability, Pre-Calculus, and Basic Calculus.</p>\r\n                        <p>Mathematics Teacher (Jun, 2018–Mar, 2020) at Philippine Cultural College-Manila', 'Bachelor in Mathematics Education (Jun, 2014–Apr, 2018) from Philippine Normal University - Manila\r\n                       Master in English (Jan, 2019-March, 2020) from Philippine Normal University Manila', 'My tutorial services includes:\r\n\r\nTeaching/Advance Study/Review\r\nAssistance with your school requirements and:\r\nA copy of the learning materials or presentation for easier learning\r\nPS: I accept students of any grade or year level and the payment rate is negotiable', '', '', '', 0),
(31, 121, '0', '', '', '', '', '', '', 0),
(32, 122, '0', '', '', '', '', '', '', 0),
(33, 123, '0', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_wall`
--

CREATE TABLE `tutor_wall` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor_wall`
--

INSERT INTO `tutor_wall` (`id`, `tutor_id`, `rating`, `description`, `rate`) VALUES
(10, 120, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit delectus pariatur quod laudantium cum iure amet ab nam excepturi?', 0),
(11, 121, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit delectus pariatur quod laudantium cum iure amet ab nam excepturi?', 299),
(12, 122, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit delectus pariatur quod laudantium cum iure amet ab nam excepturi?', 299),
(13, 123, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit delectus pariatur quod laudantium cum iure amet ab nam excepturi?', 299);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `tutor_id` (`tutor_id`),
  ADD KEY `learner_id` (`learner_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `tutor_subject_id` (`tutor_subject_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_id_fk` (`id_fk`);

--
-- Indexes for table `tutor_wall`
--
ALTER TABLE `tutor_wall`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_wall_ibfk_1` (`tutor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tutor_wall`
--
ALTER TABLE `tutor_wall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`learner_id`) REFERENCES `learner` (`id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`tutor_subject_id`) REFERENCES `tutor_profile` (`id_fk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  ADD CONSTRAINT `fk_tutor_profile_tutor_id` FOREIGN KEY (`id_fk`) REFERENCES `tutor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor_wall`
--
ALTER TABLE `tutor_wall`
  ADD CONSTRAINT `tutor_wall_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
