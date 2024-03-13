-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 02:23 PM
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
(11, 'dump', 'asdf', 'dump', 'middle', 'last', 123312, 'Recodo purok 7-A zamboanga city', 20, 'learner');

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
(34, 120, 9, '2024-05-14', '09:20:00', 0, 'Cancelled', '2024-03-13 21:19:22', '2024-03-13 21:19:22');

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
(120, 'aaa', 'aaa', 'asdf', 'asdf', 'Adjaluddin', 123312, 'Recodo purok 7-A zamboanga city', 20, 'tutor');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_profile`
--

CREATE TABLE `tutor_profile` (
  `id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `base` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor_profile`
--

INSERT INTO `tutor_profile` (`id`, `id_fk`, `subjects`, `experience`, `education`, `services`, `location`, `base`, `fee`, `rating`) VALUES
(30, 120, '', '', '', '', '', '', '', 0);

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
(10, 120, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit delectus pariatur quod laudantium cum iure amet ab nam excepturi?', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tutor_wall`
--
ALTER TABLE `tutor_wall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
