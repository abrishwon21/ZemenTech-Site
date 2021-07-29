-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 08:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zementech`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(50) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `cat_author` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c-id` int(11) NOT NULL,
  `c_uname` varchar(256) NOT NULL,
  `c_uemail` varchar(256) NOT NULL,
  `c_message` varchar(512) NOT NULL,
  `c_status` varchar(256) NOT NULL DEFAULT 'pending',
  `c_date` date NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_uname` varchar(256) NOT NULL,
  `fb_email` varchar(256) NOT NULL,
  `fb_subject` varchar(256) NOT NULL,
  `fb_message` varchar(512) NOT NULL,
  `fb_status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(256) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_photo` varchar(256) NOT NULL,
  `p_date` date NOT NULL,
  `p_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(256) NOT NULL,
  `s_description` varchar(1000) NOT NULL,
  `s_image` varchar(256) DEFAULT NULL,
  `s_author` varchar(256) NOT NULL,
  `s_status` varchar(256) NOT NULL DEFAULT 'pending',
  `s_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_title`, `s_description`, `s_image`, `s_author`, `s_status`, `s_date`) VALUES
(4, 'web development', 'Web development is the work involved in developing a Web site for the\r\nInternet or an intranet.\r\n\r\nWeb development can range from developing a simple single static page of\r\nplain text to complex Web-based Internet applications, electronic businesses,\r\nand social network services.', '1627533449_WIN_20210420_19_41_33_Pro.jpg', '1', 'pending', '2021-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `tm_id` int(11) NOT NULL,
  `tm_name` varchar(256) NOT NULL,
  `tm_email` varchar(256) NOT NULL,
  `tm_password` varchar(256) NOT NULL,
  `tm_contact` varchar(256) NOT NULL,
  `tm_role` varchar(256) NOT NULL DEFAULT 'admin',
  `tm_status` varchar(255) NOT NULL DEFAULT 'pending',
  `tm_photo` varchar(256) NOT NULL,
  `tm_description` varchar(256) NOT NULL,
  `tm_profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`tm_id`, `tm_name`, `tm_email`, `tm_password`, `tm_contact`, `tm_role`, `tm_status`, `tm_photo`, `tm_description`, `tm_profession`) VALUES
(1, 'fitsum mesfin', 'fitsummesfin12@gmail.com', '', '+917205309431 ', 'admin', 'pending', '', '', ''),
(2, 'Temam Hashim', 'temamhashim4@gmail.com', '', '', 'admin', 'pending', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_member_address`
--

CREATE TABLE `team_member_address` (
  `id` int(11) NOT NULL,
  `tm_id` int(11) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `gmail` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `telegram` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c-id`),
  ADD KEY `Constraint257` (`p_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `Constraint256` (`p_author`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `team_member_address`
--
ALTER TABLE `team_member_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Constraint255` (`tm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `tm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_member_address`
--
ALTER TABLE `team_member_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Constraint257` FOREIGN KEY (`p_id`) REFERENCES `posts` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Constraint256` FOREIGN KEY (`p_author`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_member_address`
--
ALTER TABLE `team_member_address`
  ADD CONSTRAINT `Constraint255` FOREIGN KEY (`tm_id`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
