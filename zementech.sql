-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 08:45 AM
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
  `cat_author` int(11) NOT NULL,
  `cat_status` varchar(256) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_description`, `cat_author`, `cat_status`) VALUES
(3, 'web development', '    Without a proper company description, your brand will come off as unprofessional and will give your readers the idea that you’re not consistent. So although the idea of writing up a company description may seem daunting or time-consuming to a lot of b', 1, 'approved'),
(4, 'sfggsdfhf', 'fdhfghg', 1, 'unapproved');

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
  `created` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp(),
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `logo`, `description`) VALUES
(1, '1627883848_9.jpg', 'Without a proper company description, your brand will come off as unprofessional and will give your readers the idea that you’re not consistent. So although the idea of writing up a company description may seem daunting or time-consuming to a lot of business owners, it’s a necessary step they must all do at one point or another. Along with writing a great company description, another necessary step is offering your managers and supervisors with an easy to use software platform that makes creating and sending employee schedules quick and effortless. To see Deputy in action for yourself and to see why it’s trusted by brands like Amazon, Nike, and Ace Hardware, click on the link below to start your free trial.'),
(2, '', 'Without a proper company description, your brand will come off as unprofessional and will give your readers the idea that you’re not consistent. So although the idea of writing up a company description may seem daunting or time-consuming to a lot of business owners, it’s a necessary step they must all do at one point or another. Along with writing a great company description, another necessary step is offering your managers and supervisors with an easy to use software platform that makes creating and sending employee schedules quick and effortless. To see Deputy in action for yourself and to see why it’s trusted by brands like Amazon, Nike, and Ace Hardware, click on the link below to start your free trial.');

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
  `fb_status` varchar(256) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_uname`, `fb_email`, `fb_subject`, `fb_message`, `fb_status`) VALUES
(3, 'fitsum', 'fitsum@gmail.com', 'development', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliqu', 'unapproved');

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
  `p_cat` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `p_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_title`, `p_description`, `p_photo`, `p_date`, `p_cat`, `status`, `p_author`) VALUES
(3, 'fitsum mesfin', '4576890', '1627852825_9.jpg', '2021-08-02', 3, 'approved', 1),
(6, 'vdgfgfh', '  czxczxcghjh', '1627854539_9.jpg', '2021-08-02', 3, 'approved', 1);

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
(10, 'web development      ', 'Without a proper company description, your brand will come off as unprofessional and will give your readers the idea that you’re not consistent. So although the idea of writing up a company description may seem daunting or time-consuming to a lot of business owners, it’s a necessary step they must all do at one point or another. Along with writing a great company description, another necessary step is offering your managers and supervisors with an easy to use software platform that makes creating and sending employee schedules quick and effortless. To see Deputy in action for yourself and to see why it’s trusted by brands like Amazon, Nike, and Ace Hardware, click on the link below to start your free trial.', '1627829659_9.jpg', '1', 'approved', '2021-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sl_id` int(11) NOT NULL,
  `sl_title` varchar(256) NOT NULL,
  `sl_subtitle` varchar(256) NOT NULL,
  `sl_image` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `tm_role` varchar(256) NOT NULL DEFAULT 'no specified',
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
(2, 'Temam Hashim', 'temamhashim4@gmail.com', '', '', 'not specified', 'pending', '', '', ''),
(3, 'abreham wondimu', 'abreham@gmail.com', '123', '', 'not specified', 'pending', '', '', '');

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
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `constraint1464` (`cat_author`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c-id`),
  ADD KEY `Constraint257` (`p_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `Constraint256` (`p_author`),
  ADD KEY `constraint75647535` (`p_cat`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sl_id`);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `tm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_member_address`
--
ALTER TABLE `team_member_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `constraint1464` FOREIGN KEY (`cat_author`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Constraint257` FOREIGN KEY (`p_id`) REFERENCES `posts` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Constraint256` FOREIGN KEY (`p_author`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `constraint75647535` FOREIGN KEY (`p_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_member_address`
--
ALTER TABLE `team_member_address`
  ADD CONSTRAINT `Constraint255` FOREIGN KEY (`tm_id`) REFERENCES `team_members` (`tm_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
