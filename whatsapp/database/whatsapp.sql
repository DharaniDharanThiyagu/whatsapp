-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 08:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whatsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  `image` varchar(255) NOT NULL,
  `login` varchar(150) NOT NULL,
  `about` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `image`, `login`, `about`, `date`) VALUES
(1, 'dharani', 'dharanidharan2707@gmail.com', 'Hitman@45', 'female', 'dharani.jpeg', 'online', '', '2023-08-22 05:58:34'),
(3, 'dharani', 'dharanidharani2707@gmail.com', 'Hitman@45', 'male', 'dharani.jpeg', 'offline', 'single', '2023-08-23 04:57:00'),
(4, 'rahini', 'rahini2707@gmail.com', 'rahini@01', 'female', 'image(3).png', 'online', 'single', '2023-08-23 05:23:30'),
(5, 'Dharani', 'crazyman2707@gmail.com', '2707', 'male', 'image(3).png', '', 'single', '2023-08-23 05:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_chat`
--

CREATE TABLE `user_chat` (
  `msg_id` int(150) NOT NULL,
  `sender_username` varchar(150) NOT NULL,
  `reciver_usernmae` varchar(120) NOT NULL,
  `msg_content` varchar(120) NOT NULL,
  `msg_status` varchar(255) NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_chat`
--

INSERT INTO `user_chat` (`msg_id`, `sender_username`, `reciver_usernmae`, `msg_content`, `msg_status`, `msg_date`) VALUES
(155, 'Hema', 'Hema', 'hello', 'read', '2023-08-22 04:42:50'),
(156, 'Hema', 'Hema', 'welcome', 'read', '2023-08-22 04:42:59'),
(157, 'Hema', 'Hema', 'welcome', 'read', '2023-08-22 04:44:49'),
(158, 'Hema', 'Hema', 'welcome', 'read', '2023-08-22 04:44:55'),
(159, 'Hema', 'dharani', 'hi', 'read', '2023-08-22 05:58:34'),
(160, 'Hema', 'dharani', 'welcome', 'read', '2023-08-22 05:58:34'),
(161, 'Hema', 'Hema', 'welcome', 'read', '2023-08-22 04:45:44'),
(162, 'Hema', 'Hema', 'welcome', 'read', '2023-08-22 05:21:06'),
(163, 'Hema', 'dharani', 'welcome', 'read', '2023-08-22 05:58:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `msg_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
