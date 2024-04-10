-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 02:02 AM
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
-- Database: `hire_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_job`
--

CREATE TABLE `request_job` (
  `id` int(11) NOT NULL,
  `user_request` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `kind_request` varchar(10) NOT NULL,
  `date_now` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_job`
--

INSERT INTO `request_job` (`id`, `user_request`, `title`, `kind_request`, `date_now`) VALUES
(1, 'adel31_dz', 'Fix Scripts And Some Of That', 'default', '2024-01-08 16:45:33'),
(2, 'batata', 'do no thing in life lol', 'default', '2024-01-08 16:46:04'),
(3, 'mohamed', 'waiter', 'default', '2024-01-08 16:46:41'),
(4, 'jack smith', 'clash of clans player', 'default', '2024-01-08 16:46:57'),
(5, 'yahia', 'going to swim (swim teacher)', 'freelance', '2024-01-08 16:47:23'),
(6, 'test', 'testing', 'default', '2024-01-08 16:47:35'),
(8, 'free_man', 'playing half life all episod and the best player a', 'default', '2024-01-08 16:49:23'),
(11, 'yacin', 'playing half life all episode and the best player ', 'default', '2024-01-08 16:50:46'),
(23, 'sdfsdfsdf', '', 'full-time', '2024-03-16 14:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `skills` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `passwords` varchar(30) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `date_regester` datetime NOT NULL DEFAULT current_timestamp(),
  `descriptions` varchar(120) NOT NULL,
  `stat_desc` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `country`, `skills`, `email`, `passwords`, `img_url`, `date_regester`, `descriptions`, `stat_desc`, `gender`) VALUES
(1, 'adel31_dz', 'algeria', 'programmer', 'adelhamlil7@mic.com', 'adel31dz', 'IMG-658f4337b35337.61881381.png', '2024-01-08 16:40:19', '', '', 'male'),
(2, 'test', 'algeria', 'designer', 'soring@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:41:47', '', '', ''),
(3, 'jack smith', 'algeria', 'designer', 'framework@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:43:23', '', '', ''),
(4, 'free_man', 'algeria', 'designer', 'batata@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:43:23', '', '', ''),
(5, 'yacin', 'algeria', 'designer', 'framework@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:43:23', '', '', ''),
(6, 'mohamed', 'algeria', 'designer', 'sike_forest@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:43:23', '', '', ''),
(7, 'yahia', 'algeria', 'designer', 'framework@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:43:23', '', '', ''),
(8, 'batata', 'algeria', 'designer', 'mochahana44@mic.com', 'sdsdsdsd', 'new_user.jpg', '2024-01-08 16:43:23', '', '', ''),
(9, 'fefef', 'Algeria', '\";-- ', 'sdfsdf@gmail.com', 'gdgdgrdg', 'new_user.jpg', '2024-03-16 13:46:31', '', '', ''),
(10, '<a href=\"', 'Antigua and Barbuda', '<style>* {backg', 'adelhamlil7@gmail.com', 'tfyftyftygyf', 'new_user.jpg', '2024-03-16 14:00:30', '', '', ''),
(11, 'sdfsdfsdf', 'Armenia', 'sdfsdfs', 'sdfsdf@gmail.com', 'dsfsdfsdfsdf', 'IMG-65f5982df24670.20688746.jpg', '2024-03-16 14:00:57', '', '', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_job`
--
ALTER TABLE `request_job`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_request` (`user_request`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_job`
--
ALTER TABLE `request_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request_job`
--
ALTER TABLE `request_job`
  ADD CONSTRAINT `forgin` FOREIGN KEY (`user_request`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
