-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 01:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--
CREATE DATABASE IF NOT EXISTS `demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `demo`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `price` decimal(11,0) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prodID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `prodID`) VALUES
(1, 'Smartphone', '650', 'Sample smartphone.', 1),
(2, 'Laptop', '450', 'Sample laptop.', 2),
(3, 'Battery Pack', '100', 'Sample battery pack.', 3),
(4, 'Smartwatch', '300', 'Sample laptop.', 4),
(5, 'Headphones', '400', 'Sample headphones.', 5),
(6, 'Wireless Charger', '100', 'Sample wireless charger.', 6),
(10, 'Bluetooth Speaker', '100', 'Sample Bluetooth Speaker', 7);

-- --------------------------------------------------------

--
-- Table structure for table `students2`
--

CREATE TABLE `students2` (
  `id` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(128) DEFAULT NULL,
  `LastName` varchar(128) DEFAULT NULL,
  `CurrentYear` varchar(128) DEFAULT NULL,
  `Major` varchar(128) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students2`
--

INSERT INTO `students2` (`id`, `FirstName`, `LastName`, `CurrentYear`, `Major`, `Email`, `slug`, `body`) VALUES
(1, 'Bert', 'Sprosty', 'Junior', 'Statistics', 'bspors@uni.edu', 'bert-sprosty', 'Student 1'),
(2, 'Lenora', 'Liebig', 'Sophomore', 'Systematic Musicology', 'lebig@uni.edu', 'lenora-liebig', 'Student 2'),
(3, 'Marlana', 'Samaras', 'Junior', 'Systems Dynamics', 'marlaras@uni.edu', 'marlana-samaras', 'Student 3'),
(4, 'Wally', 'Senkel', 'Sophomore', 'Business', 'walkel@uni.edu', 'wally-senkel', 'Student 4'),
(5, 'Zack', 'Hammerquist', 'Senior', 'Systematic Musicology', 'zackhammer@uni.edu', 'zack-hammerquist', 'Student 5'),
(15, 'testfirst3', 'testlast2', 'testyear', 'testmajo', 'teststu@mail.com', 'testfirst3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `datepurchased` text NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `itemspurchased` text NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `datepurchased`, `subtotal`, `itemspurchased`, `user`) VALUES
(1, '2022-04-29 18:13:40', '1643', 'smartphone, laptop, batterypack, smartwatch, headphones', 'testuser'),
(2, '2022-04-29 19:46:49', '1013', 'smartphone, , batterypack, , headphones', 'testuser'),
(3, '2022-04-29 19:50:49', '593', 'smartphone, , batterypack, , ', 'newuser'),
(4, '2022-05-04 17:34:58', '908', 'smartphone, , batterypack, smartwatch, , wirelesscharger, ', 'testuser'),
(5, '2022-05-04 18:29:06', '908', ', laptop, , , headphones, , bluetoothspeaker', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'testuser', 'test@mail.com', '$2y$10$a.0Yu8gUgtKjhJpll59ih.zHK2uNW1Ye2WvTSaiDspobWfcVl2Ilu', '2022-04-23 23:27:42'),
(2, 'test2', 'test2@mail.com', '$2y$10$YQr/TYNTZYP0d8Rh7OhHCen4AjKdBQ.gMEUl.ikqR78gfCBqIoy8u', '2022-04-23 23:48:46'),
(3, 'admin', 'admin@mail.com', '$2y$10$9JRN7LHhrSzvYiSOT2EUkOHUyraiZ9QEySJXnQE170EX5FdhA4vgC', '2022-04-24 02:39:40'),
(4, 'testuser', 'testuser@mail.com', '$2y$10$mOjE/SrECtPEarnqGGVX4OySdCY0WmRryM.xs2QZ8cr6HX3SHgivy', '2022-04-25 23:00:41'),
(10, 'testuser2', 'testuser2@mail.com', '$2y$10$BpvtSUiqM3Ss7D0H3bCRr.c6gmu2kIQxXFaF9kJY9FeOoEUAwxIQ6', '2022-04-26 04:18:24'),
(11, 'testuser4new', 'testnew@mail.com', '$2y$10$fw2v773LkZu1dJjJzcobJO4VQ2yU6Z3pT2K7Elx.ZJCF41GOvVy1W', '2022-04-28 21:07:11'),
(12, 'tester', 'tester@mail.com', '$2y$10$wXyigJfct0rqVR5HQEs4eub8A1tdMXuYkBao/h6uvOMAlgrgQhBSG', '2022-05-04 22:42:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students2`
--
ALTER TABLE `students2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students2`
--
ALTER TABLE `students2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
