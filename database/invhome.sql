-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 09:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invhome`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `created_at`, `admin_status`) VALUES
(1, 'vishal@gmail.com', 'dc06698f0e2e75751545455899adccc3', '2022-10-22 19:23:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug_url` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_category` varchar(50) NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `post_meta_tags` varchar(255) NOT NULL,
  `post_meta_description` varchar(255) NOT NULL,
  `post_created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `post_category_id` int(11) NOT NULL,
  `post_category_title` varchar(255) NOT NULL,
  `post_category_slug` varchar(255) NOT NULL,
  `category_thumbnail` varchar(250) DEFAULT NULL,
  `createt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`post_category_id`, `post_category_title`, `post_category_slug`, `category_thumbnail`, `createt`) VALUES
(7, 'SOFA SET', 'sofa-set', 'http://localhost:8080/upload/categories/sofa.png', '2022-10-29 14:42:24'),
(8, 'CHAIR', 'chair', 'http://localhost:8080/upload/categories/chair-1.png', '2022-10-29 14:43:01'),
(9, 'BED', 'bed', 'http://localhost:8080/upload/categories/bed.png', '2022-10-29 14:42:43'),
(10, 'CONSOLE', 'console', 'http://localhost:8080/upload/categories/console.png', '2022-10-29 14:43:11'),
(11, 'DINING TABLE', 'dining-table', 'http://localhost:8080/upload/categories/dining.png', '2022-10-29 14:43:30'),
(12, 'END TABLE', 'end-table', 'http://localhost:8080/upload/categories/endtable1.png', '2022-10-29 14:40:25'),
(13, 'MEDIA UNIT', 'media-unit', 'http://localhost:8080/upload/categories/unit.png', '2022-10-29 14:40:58'),
(14, 'SIDE TABLE', 'side-table', 'http://localhost:8080/upload/categories/sidetable.png', '2022-10-29 14:41:53'),
(15, 'COMMERCIAL FURNITURE', 'commercial-furniture', 'http://localhost:8080/upload/categories/vector-office.png', '2022-11-01 03:48:19'),
(16, 'CENTER TABLE', 'center-table', 'http://localhost:8080/upload/categories/tavble.jpg', '2022-11-01 06:06:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`post_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
