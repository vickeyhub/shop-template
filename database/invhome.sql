-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 02:49 AM
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

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_slug_url`, `post_description`, `post_category`, `post_thumbnail`, `post_meta_tags`, `post_meta_description`, `post_created_at`) VALUES
(18, 'first post', 'first-post', '<p>this is just for testing</p>\r\n', '7', 'http://localhost:8080/upload/modern-banner-important-announcement-business-260nw-1784320871.jpg', 'just forb test', 'meta description', '2022-10-23 00:34:00'),
(20, 'third post about chair', 'third-post-about-chair', '<p>chair</p>\r\n', '8', 'http://localhost:8080/upload/bg3.jpg', 'meta tags,', 'djfgjgrfj', '2022-10-23 00:42:15'),
(21, 'fourth set', 'fourth-set', '<p>sjdvj</p>\r\n', '7', 'http://localhost:8080/upload/products/grocery_thumbnail.jpg', 'iki', 'jji', '2022-10-23 00:45:23');

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
(7, 'sofa set', 'sofa-set', 'http://localhost:8080/upload/categories/sofa.png', '2022-10-23 00:17:04'),
(8, 'chair', 'chair', 'http://localhost:8080/upload/categories/chair-1.png', '2022-10-22 23:53:14');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
