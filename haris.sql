-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 03:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haris`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `listing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`, `listing_id`) VALUES
(9, 'bell-weater-batrooms.jpg', '2021-11-11 12:46:12', '1', 91163),
(10, 'bell-weater-compound.jpg', '2021-11-11 12:46:12', '1', 91163),
(11, 'bell-weater-outside.jpg', '2021-11-11 12:46:12', '1', 91163),
(12, 'bell-weater-swimmin-pool.jpg', '2021-11-11 12:46:12', '1', 91163),
(13, 'buziga apartments 2.jpg', '2021-11-11 13:01:43', '1', 81784),
(14, 'buziga apartments 3.jpg', '2021-11-11 13:01:43', '1', 81784),
(15, 'buziga apartments 4.jpg', '2021-11-11 13:01:43', '1', 81784),
(16, 'buziga apartments main.jpg', '2021-11-11 13:01:43', '1', 81784),
(17, 'kyanja-kungu.jpg', '2021-11-11 13:06:07', '1', 28696),
(18, 'kyanja-kungu2.jpg', '2021-11-11 13:06:07', '1', 28696);

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listing_id` int(11) NOT NULL,
  `listing_title` varchar(100) NOT NULL,
  `listing_location` varchar(100) NOT NULL,
  `listing_type` varchar(30) NOT NULL,
  `listing_amenities` varchar(150) NOT NULL,
  `listing_price` int(11) NOT NULL,
  `listing_picture` varchar(100) NOT NULL,
  `listing_date` datetime DEFAULT NULL,
  `listing_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listing_id`, `listing_title`, `listing_location`, `listing_type`, `listing_amenities`, `listing_price`, `listing_picture`, `listing_date`, `listing_details`) VALUES
(28696, 'Kyanja Kungu Rentals', 'Kyanja Kungu', 'For Sale', 'Close to the road', 111111, 'a73c42e0df9a72b7cde7c6ff04d6855a.jpg', '2021-11-11 13:05:44', '<h3>Fahad’s rentals</h3>\r\n<p>&nbsp;LOCATION: Kyanja Kungu.</p>\r\n<p>&nbsp;Number of Units – 5UNITS.</p>\r\n<p>&nbsp;All are 1Bhk kitchen and living room.</p>\r\n<p>&nbsp;Rentals are for sale.\r\n400million \r\nRental income 2.5M a month\r\n\r\nClose to the road<br /></p>'),
(81784, 'Buziga Apartments', 'Buziga, Right next to Casamia', 'Both Sale And Rent', 'Cameras, Swimming pool, Access to the Terrace', 138888, 'e12d1acf5200bfcbcbb787407180d22a.jpg', '2021-11-11 13:01:14', '<p>LOCATION: Buziga.\r\nRight next to Casamia \r\n\r\nBoth FOR sale and Rent.\r\n\r\n1BHK\r\n7 Units\r\nRENT:1.5M each\r\nSALE:250M each\r\n\r\n2BHK,2Bathrooms\r\n5 Units\r\nRENT:2M each\r\nSALE:350M each\r\n\r\nPENT HOUSE.\r\nBHK \r\n4 Bathrooms.\r\n5Toilets \r\nSALE:500M\r\n\r\nAMENITIES.\r\n-Cameras \r\n-Swimming pool \r\n-Access to the Terrace.<br /></p>'),
(91163, 'Bell Weather', 'Kyanja estates', 'For Rent', 'Swimming pool, CCTV cameras, Steam and sauna, WI-FI, Terrace, Fire monitor, 24-HOUR security guards, Stand by generator', 2000, '125e7e8b6a231734b50b61d179b956bc.jpg', '2021-11-11 12:45:47', '<p>BELL WETHER</p>\r\n<p>LOCATION: Kyanja estates&nbsp;</p>\r\n<p>&nbsp;3BHK \r\n-They have both furnished and unfurnished.\r\n-Furnished go for 100USD per night 2,000Usd long stay.\r\n-Unfurnished -800usd per month.\r\n\r\nAMENITIES&nbsp;</p>\r\n<ul><li>&nbsp;Swimming pool</li><li>CCTv cameras</li><li>Steam and sauna</li><li>WI-FI \r\n-Terrace</li><li>Fire monitor</li><li>24-HOUR security guards</li><li>Stand by generator<br /></li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(2, 'Haris Benzz', 'Haris@2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_id` (`listing_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listing_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`listing_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
