-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2022 at 03:38 AM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webxiyjk_vadialdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `calendar_id` int(11) NOT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `assigned_to` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `action_plan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendar_id`, `activity`, `contact`, `date`, `time`, `title`, `description`, `assigned_to`, `priority`, `action_plan`) VALUES
(1, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaign_id` int(11) NOT NULL,
  `groups` varchar(255) DEFAULT NULL,
  `lists` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `dials` int(11) DEFAULT 0,
  `live` int(11) DEFAULT 0,
  `vm` int(11) DEFAULT 0,
  `others` int(11) DEFAULT 0,
  `agents_connect` int(11) DEFAULT 0,
  `abandon` int(11) DEFAULT 0,
  `agent_sIn` int(11) DEFAULT 0,
  `leads` int(11) DEFAULT 0,
  `redials` int(11) DEFAULT 0,
  `status` varchar(255) DEFAULT NULL,
  `channels` int(11) DEFAULT 0,
  `minutes` int(11) DEFAULT 0,
  `user_name` varchar(255) DEFAULT NULL,
  `manager` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `property_address` varchar(255) DEFAULT NULL,
  `property_city` varchar(255) DEFAULT NULL,
  `property_state` varchar(255) DEFAULT NULL,
  `property_zip_code` varchar(255) DEFAULT NULL,
  `mailing_address` varchar(255) DEFAULT NULL,
  `mailing_city` varchar(255) DEFAULT NULL,
  `mailing_state` varchar(255) DEFAULT NULL,
  `mailing_zip_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `co_owner_date_of_birth` varchar(255) DEFAULT NULL,
  `co_owner` varchar(255) DEFAULT NULL,
  `status_change_date` varchar(255) DEFAULT NULL,
  `tax_name` varchar(255) DEFAULT NULL,
  `list_price` varchar(255) DEFAULT NULL,
  `days_on_market` varchar(255) DEFAULT NULL,
  `mls_id` varchar(255) DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `bedrooms` varchar(255) DEFAULT NULL,
  `bathrooms` varchar(255) DEFAULT NULL,
  `square_footage` varchar(255) DEFAULT NULL,
  `year_built` varchar(255) DEFAULT NULL,
  `deceased` varchar(255) DEFAULT NULL,
  `deceased_last_name` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaign_id`, `groups`, `lists`, `source`, `dials`, `live`, `vm`, `others`, `agents_connect`, `abandon`, `agent_sIn`, `leads`, `redials`, `status`, `channels`, `minutes`, `user_name`, `manager`, `first_name`, `last_name`, `property_address`, `property_city`, `property_state`, `property_zip_code`, `mailing_address`, `mailing_city`, `mailing_state`, `mailing_zip_code`, `phone_number`, `mobile_number`, `email`, `notes`, `date_of_birth`, `co_owner_date_of_birth`, `co_owner`, `status_change_date`, `tax_name`, `list_price`, `days_on_market`, `mls_id`, `property_type`, `bedrooms`, `bathrooms`, `square_footage`, `year_built`, `deceased`, `deceased_last_name`, `county`) VALUES
(1, 'a', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'a', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'a', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'b', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'a', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'a', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'b', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'a', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'b', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'a', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'b', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'b', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 'admin', 'manager', 'b', 'y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `manager` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `optional` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `payment_success` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `role`, `admin`, `manager`, `agent`, `image`, `address`, `company`, `phone_number`, `plan`, `optional`, `last_login`, `date_created`, `payment_success`) VALUES
(1, 'super', 'su', 'per', 'Super@email.com', 'DWM_Password_2021', 'super', NULL, NULL, NULL, 'account/2021_04_18_06_59_15_blog--pic-1.png', NULL, NULL, NULL, NULL, NULL, '2021-09-02 06:56:52', NULL, 0),
(2, 'admin', 'ad', 'min', 'Admin@email.com', 'DWM_Password_2021', 'admin', NULL, NULL, NULL, 'account/2021_04_18_06_59_15_blog--pic-2.png', NULL, NULL, NULL, NULL, NULL, '2021-09-02 06:57:16', NULL, 1),
(3, 'manager', 'man', 'ager', 'Manager@email.com', 'DWM_Password_2021', 'manager', 'admin', NULL, NULL, 'account/2021_04_18_06_59_15_blog--pic-3.png', NULL, NULL, NULL, NULL, NULL, '2021-05-31 06:57:13', NULL, 0),
(4, 'agent', 'ag', 'ent', 'Agent@email.com', 'DWM_Password_2021', 'agent', 'admin', 'manager', NULL, 'account/2021_04_18_06_59_15_blog--pic-4.png', NULL, NULL, NULL, NULL, NULL, '2021-05-31 06:56:55', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `campaign_users_user_name_fk` (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_name_uindex` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_users_user_name_fk` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
