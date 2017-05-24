-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 12:49 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arteastru_dozor45`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `name`, `post`, `status`) VALUES
(3, 'ÐÐ½Ð½Ð°', 'ÐŸÐ¾Ð·Ð²Ð¾Ð½Ð¸Ð»Ð°, Ð¿Ñ€Ð¾ÐºÐ¾Ð½ÑÑƒÐ»ÑŒÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð¸. Ð¡Ð¼Ð¾Ð½Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð¸ Ð±ÐµÑÐ¿Ñ€Ð¾Ð²Ð¾Ð´Ð½Ð¾Ðµ Ð¾Ð±Ð¾Ñ€ÑƒÐ´Ð¾Ð²Ð°Ð½Ð¸Ðµ, Ñ‚Ð°Ðº ÐºÐ°Ðº Ð½Ðµ Ð½ÑƒÐ¶Ð½Ñ‹ Ð»Ð¸ÑˆÐ½Ð¸Ðµ ÐºÐ»ÑŽÑ‡Ð¸ Ð¸ ÐºÐ»Ð°Ð²Ð¸Ð°Ñ‚ÑƒÑ€Ñ‹. Ð£Ð¿Ñ€Ð°Ð²Ð»ÑÑŽ Ñ Ð¼Ð¾Ð±Ð¸Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð¿Ñ€Ð¸Ð»Ð¾Ð¶ÐµÐ½Ð¸Ñ, Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¸Ð»Ð¸ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð¾Ð± Ð¾Ñ‚ÐºÐ»ÑŽÑ‡ÐµÐ½Ð¸Ð¸ 220, ÐµÑÐ»Ð¸ Ñ‡Ñ‚Ð¾ push ÑƒÐ²ÐµÐ´Ð¾Ð¼Ð»ÐµÐ½Ð¸Ðµ Ð²ÑÐ¿Ð»Ñ‹Ð²Ð°ÐµÑ‚ - Ñ‚ÐµÐ¿ÐµÑ€ÑŒ Ð·Ð½Ð°ÑŽ ÐºÐ¾Ð³Ð´Ð° Ð¸ Ð½Ð°ÑÐºÐ¾Ð»ÑŒÐºÐ¾. Ð¡Ð¿Ð°ÑÐ¸Ð±Ð¾.', 1),
(4, 'ÐÐ½Ð½Ð°', 'ÐŸÐ¾Ð·Ð²Ð¾Ð½Ð¸Ð»Ð°, Ð¿Ñ€Ð¾ÐºÐ¾Ð½ÑÑƒÐ»ÑŒÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð¸. Ð¡Ð¼Ð¾Ð½Ñ‚Ð¸Ñ€Ð¾Ð²Ð°Ð»Ð¸ Ð±ÐµÑÐ¿Ñ€Ð¾Ð²Ð¾Ð´Ð½Ð¾Ðµ Ð¾Ð±Ð¾Ñ€ÑƒÐ´Ð¾Ð²Ð°Ð½Ð¸Ðµ, Ñ‚Ð°Ðº ÐºÐ°Ðº Ð½Ðµ Ð½ÑƒÐ¶Ð½Ñ‹ Ð»Ð¸ÑˆÐ½Ð¸Ðµ ÐºÐ»ÑŽÑ‡Ð¸ Ð¸ ÐºÐ»Ð°Ð²Ð¸Ð°Ñ‚ÑƒÑ€Ñ‹. Ð£Ð¿Ñ€Ð°Ð²Ð»ÑÑŽ Ñ Ð¼Ð¾Ð±Ð¸Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ð¿Ñ€Ð¸Ð»Ð¾Ð¶ÐµÐ½Ð¸Ñ, Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¸Ð»Ð¸ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð¾Ð± Ð¾Ñ‚ÐºÐ»ÑŽÑ‡ÐµÐ½Ð¸Ð¸ 220, ÐµÑÐ»Ð¸ Ñ‡Ñ‚Ð¾ push ÑƒÐ²ÐµÐ´Ð¾Ð¼Ð»ÐµÐ½Ð¸Ðµ Ð²ÑÐ¿Ð»Ñ‹Ð²Ð°ÐµÑ‚ - Ñ‚ÐµÐ¿ÐµÑ€ÑŒ Ð·Ð½Ð°ÑŽ ÐºÐ¾Ð³Ð´Ð° Ð¸ Ð½Ð°ÑÐºÐ¾Ð»ÑŒÐºÐ¾. Ð¡Ð¿Ð°ÑÐ¸Ð±Ð¾.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`ID`, `name`, `value`) VALUES
(2, 'login', 'dozor45'),
(3, 'password', '12345678'),
(4, 'title', 'Ð§ÐžÐŸ Ð”Ð¾Ð·Ð¾Ñ€'),
(5, 'desc', 'Ñ‡Ð°ÑÑ‚Ð½Ð¾Ðµ Ð¾Ñ…Ñ€Ð°Ð½Ð½Ð¾Ðµ Ð¿Ñ€ÐµÐ´Ð¿Ñ€Ð¸ÑÑ‚Ð¸Ðµ Ð”Ð¾Ð·Ð¾Ñ€'),
(6, 'keys', 'Ð¾Ñ…Ñ€Ð°Ð½Ð°'),
(7, 'pass', '12345678'),
(8, 'address', 'ÑƒÐ». Ð¡Ð¸Ð±Ð¸Ñ€ÑÐºÐ°Ñ, 8, ÑÑ‚Ñ€. 1'),
(9, 'phonecode', '(3522)'),
(10, 'phone1', '55-90-02'),
(11, 'phone2', '24-00-21'),
(12, 'phone3', ''),
(13, 'mail', 'info@dozor45.ru'),
(14, 'vk', 'vk.com/public142786921');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
