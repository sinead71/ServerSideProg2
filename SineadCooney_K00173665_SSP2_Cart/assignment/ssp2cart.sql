-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 09:04 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssp2cart`
--
CREATE DATABASE IF NOT EXISTS `ssp2cart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ssp2cart`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `title` varchar(30) NOT NULL,
  `prod_id` int(20) NOT NULL,
  `description` varchar(120) NOT NULL,
  `image_url` mediumtext NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`title`, `prod_id`, `description`, `image_url`, `price`) VALUES
('Keyboard', 1, 'Wireless keyboard for computers.', 'https://codekeyboards.com/galleria/9.jpg', 30),
('Headphones', 2, 'Sony headphones with wireless option.', 'http://sonyglobal.scene7.com/is/image/gwtprod/fb0ca0319f3f6fc16dfc08f6ff1cdb38?fmt=pjpeg&wid=330&bgcolor=F1F5F9&bgc=F1F5F9', 50),
('Radio', 3, 'Connects to your favourite FM radio stations.', 'http://www.cure-your-bad-breath.com/wp-content/uploads/2016/03/95742_radio-internet-spcinternet-0803-300x300.png', 25),
('TV', 4, 'This TV comes with a DVD port to watch your favourite movies.', 'http://www.gadgetreview.com/wp-content/uploads/2014/08/LED-tv-reviews.jpg', 359),
('Microwave', 5, 'Reheat your food with this amazing microwave. ', 'https://static.independent.co.uk/s3fs-public/styles/story_medium/public/thumbnails/image/2016/02/11/11/RUssell%20Hobbs.jpg', 100),
('Hair Dryer', 6, 'Your hair will be dry in no time.', 'http://images.ulta.com/is/image/Ulta/2099391', 45);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `user_id`, `password`, `email`) VALUES
('sinead71', 1, '8ebf601f8b808c32b8d2fb570c2e0fbdbb388add', 'sinead71@email.com'),
('aaron93', 2, 'd93cb6df4756179806c9c567a629b01d77bc9a78', 'aaron93@email.com'),
('hannah01', 3, 'a7935346a4cf2aa8c0525a39c9a3c591ff570686', 'hannah01@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
