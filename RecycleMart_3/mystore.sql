-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 01:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `contact_no` int(20) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`title`, `description`, `image`, `publisher`, `date`, `contact_no`, `id`) VALUES
('titurhhdj', 'sjhdytu', 'Screenshot (7).png', 'sjhygt', '2024-04-27', 1243587632, 0),
('dsfdghjlkjkhgjhfghjkl;', 'gdsfghjkljhgdfs', 'vlcsnap-2023-10-30-19h25m25s428.png', 'hkjhkjhhkj', '2024-05-01', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `fghj` varchar(200) NOT NULL,
  `ghjh` int(11) NOT NULL,
  `dfghjghjkjh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` varchar(200) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
('1', '::1', 1),
('3', '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'hello'),
(4, 'tyee'),
(5, 'goo'),
(6, 'dddddd'),
(7, 'hiiiiiiiii'),
(8, 'dfhjkkhghhh');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`) VALUES
('h12FAnxY6JoXb51iDpda', '01 example post title', 'post_1.webp'),
('sRKX0vSREJbBzO07wM1H', '02 example post title', 'post_2.webp'),
('G6zDaxTTS0fV5UT4BQ46', '03 example post title', 'post_3.webp'),
('6zQRsklaYIO38cLIgYZN', '04 example post title', 'post_4.webp'),
('mMj2FWPRVWZPsfOsjSUL', '05 example post title', 'post_5.webp'),
('hK2tgabAaK1c1FAak6UW', '06 example post title', 'post_6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `ratings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `category_id`, `product_image1`, `product_price`, `contact_no`, `location`, `date`, `status`, `ratings`) VALUES
(1, 'shoes ', 'upgover shoes', 4, 'Untitled design (12).png', '56.77', '', '', '2024-04-18 11:13:33', 'true', 3),
(2, 'apple', 'this apple is not apple ', 1, 'r.png', '50', '', '', '2024-04-18 11:13:42', 'true', 5),
(3, 'table', 'asdfghjklhgfdsdkddddddddddddddddddddgggggggggggggggggggggggggggggggggggggggggggg', 1, 'Untitled design (11).png', '45545', '', '', '2024-04-18 11:13:52', 'true', 4),
(4, 'werwert', 'asdfsasdfg', 5, 'Untitled design (1).png', '2343', '', '', '2024-04-18 11:14:01', 'true', 4),
(5, 'yutyutiuh', 'iouiouiou', 4, 'us_cources.jpg', '5555', '', '', '2024-04-18 11:14:10', 'true', 0),
(6, 'Hi', 'bjdhoiud', 5, 'Screenshot (5).png', '122', '23145289348', 'NO', '2024-04-18 11:14:20', 'true', 3);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `contact_no` int(50) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`name`, `description`, `date`, `contact_no`, `id`) VALUES
('msjggudg', 'dcsdvd', '2024-04-20', 838997634, 1),
('jhiugdsyuz', 'hjdgufygd', '2024-04-20', 287677832, 2),
('qwertyui', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhddddddddddddddddddddddddddddddddddddduuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', '2024-04-17', 2147483647, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` varchar(20) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `post_id`, `user_id`, `rating`, `title`, `description`, `date`) VALUES
('NasT2wakIsjWZ1dyxVva', 'h12FAnxY6JoXb51iDpda', 'UtUqv4tlpoZy4TnaXwbb', '1', 'lsjfljslfjslj', 'slkflsk', '2024-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('UtUqv4tlpoZy4TnaXwbb', 'dilip', 'dilip@gmail.com', '$2y$10$sadgbcxDK6lHSZDL5olMDeWAq4/WPwPBdqrO10w58Zm1eu6MAUteq', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'dfgfdfgh', 'dilipkhunti47@gmail.com', '', 'Untitled design (13).png', '::1', 'ahmedabad', '9904186171'),
(2, 'dfgfdfgh', 'dilipkhunti47@gmail.com', '', 'Untitled design (13).png', '::1', 'ahmedabad', '9904186171'),
(3, 'dfgfdfgh', 'dilipkhunti47@gmail.com', '', 'Untitled design (13).png', '::1', 'ahmedabad', '9904186171'),
(4, 'dfgfdfgh', 'dilipkhunti47@gmail.com', '', 'Untitled design (13).png', '::1', 'ahmedabad', '9904186171'),
(5, 'dfgfdfgh', 'dilipkhunti47@gmail.com', '', 'Untitled design (13).png', '::1', 'ahmedabad', '9904186171'),
(6, 'wertyu', 'wertyuj', '1234567890', 'Untitled design (14).png', '::1', 'asdfghjk', '123456789'),
(7, 'erty', 'heylas@gmail.com', 'qwer', 'Untitled design (11).png', '::1', 'sdfg', '1234567'),
(8, 'qwert', 'sdfgf@gmail.com', 'qwerty', 'Untitled design (11).png', '::1', 'wsdfg', '2345654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ghjh`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ghjh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
