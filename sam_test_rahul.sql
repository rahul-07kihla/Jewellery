-- phpMyAdmin SQL Dump
-- version 5.1.1-1.fc34
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 06:59 AM
-- Server version: 10.5.11-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sam_test_rahul`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` varchar(251) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive',
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`id`, `p_id`, `user_id`, `status`, `quantity`, `created_at`, `updated_at`) VALUES
(30, 1, '', '1', NULL, '2021-10-29 11:51:24', '2021-10-29 11:56:58'),
(50, 4, '3', '1', NULL, '2021-11-10 05:39:37', '2021-11-10 05:39:37'),
(58, 1, '9', '1', NULL, '2021-11-10 06:36:35', '2021-11-10 06:36:35'),
(59, 2, '9', '1', NULL, '2021-11-10 06:36:47', '2021-11-10 06:36:47'),
(60, 1, '9', '1', NULL, '2021-11-10 06:36:54', '2021-11-10 06:36:54'),
(61, 3, '9', '1', NULL, '2021-11-10 06:37:57', '2021-11-10 06:37:57'),
(62, 4, '9', '1', NULL, '2021-11-10 06:38:34', '2021-11-10 06:38:34'),
(63, 3, '9', '1', NULL, '2021-11-10 06:38:46', '2021-11-10 06:38:46'),
(64, 1, '9', '1', NULL, '2021-11-10 06:39:37', '2021-11-10 06:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `profile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `profile`, `username`, `email`, `password`, `created_at`, `status`) VALUES
(1, 'user.jpeg', 'rahul', 'rahul@gmail.com', 'admin', '2021-10-27 07:52:07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brandname`, `status`) VALUES
(1, 'Kalyan', '1'),
(2, 'Tanishq', '1'),
(3, 'Malabar', '1'),
(4, 'The Jewelry Place', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `categoryimage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cetegoryname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive ',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryimage`, `cetegoryname`, `status`, `created_at`, `updated_at`) VALUES
(1, 'necklaces.jpg', 'Nacklaces', '1', '2021-10-22 06:25:40', '2021-11-12 12:18:26'),
(2, 'Bracelets.jpg', 'Bracelets', '1', '2021-10-22 06:27:11', '2021-10-25 05:41:56'),
(3, 'Earrings.jpg', 'Earrings', '1', '2021-10-22 06:28:26', '2021-10-25 05:41:55'),
(4, 'Rings.jpg', 'Rings', '1', '2021-10-22 06:28:44', '2021-10-25 05:41:56'),
(6, 'Mangalesuta.jpg', 'Mangalsutra', '1', '2021-10-26 07:48:21', '2021-11-15 12:22:37'),
(7, 'download.jpeg', 'Bangals', '1', '2021-10-26 07:50:50', '2021-10-26 08:04:38'),
(8, 'chain.jpeg', 'Chain', '1', '2021-10-26 07:54:21', '2021-10-26 08:04:42'),
(10, 'wsi-imageoptim-gold-slider-001.jpg', 'Set', '1', '2021-11-10 05:28:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateed_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `created_at`, `updateed_at`) VALUES
(1, 0, '1', '2021-10-28 12:14:17', '0000-00-00 00:00:00'),
(7, 1, '1', '2021-10-29 04:45:48', '0000-00-00 00:00:00'),
(9, 1, '1', '2021-10-29 05:56:32', '0000-00-00 00:00:00'),
(10, 1, '1', '2021-10-29 05:59:51', '0000-00-00 00:00:00'),
(11, 1, '1', '2021-10-29 07:21:03', '0000-00-00 00:00:00'),
(12, 1, '1', '2021-10-29 07:31:33', '0000-00-00 00:00:00'),
(13, 1, '1', '2021-10-29 07:31:47', '0000-00-00 00:00:00'),
(14, 1, '1', '2021-10-30 10:47:13', '0000-00-00 00:00:00'),
(15, 1, '1', '2021-10-30 10:49:39', '0000-00-00 00:00:00'),
(16, 1, '1', '2021-10-30 10:49:43', '0000-00-00 00:00:00'),
(17, 1, '1', '2021-10-30 10:49:43', '0000-00-00 00:00:00'),
(18, 1, '1', '2021-10-30 10:50:08', '0000-00-00 00:00:00'),
(19, 1, '1', '2021-10-30 10:50:19', '0000-00-00 00:00:00'),
(20, 1, '1', '2021-10-30 10:50:31', '0000-00-00 00:00:00'),
(21, 1, '1', '2021-10-30 10:51:33', '0000-00-00 00:00:00'),
(22, 1, '1', '2021-10-30 11:04:23', '0000-00-00 00:00:00'),
(23, 1, '1', '2021-10-30 11:46:18', '0000-00-00 00:00:00'),
(24, 1, '1', '2021-10-30 11:50:34', '0000-00-00 00:00:00'),
(25, 1, '1', '2021-10-30 11:51:20', '0000-00-00 00:00:00'),
(26, 1, '1', '2021-10-30 12:00:29', '0000-00-00 00:00:00'),
(27, 1, '1', '2021-10-30 12:01:49', '0000-00-00 00:00:00'),
(28, 1, '1', '2021-10-30 12:01:56', '0000-00-00 00:00:00'),
(29, 1, '1', '2021-10-30 12:02:33', '0000-00-00 00:00:00'),
(30, 1, '1', '2021-10-30 12:14:03', '0000-00-00 00:00:00'),
(31, 1, '1', '2021-11-01 04:56:37', '0000-00-00 00:00:00'),
(32, 1, '1', '2021-11-01 04:57:45', '0000-00-00 00:00:00'),
(33, 1, '1', '2021-11-01 04:58:25', '0000-00-00 00:00:00'),
(34, 1, '1', '2021-11-01 04:58:48', '0000-00-00 00:00:00'),
(35, 1, '1', '2021-11-01 05:00:19', '0000-00-00 00:00:00'),
(36, 1, '1', '2021-11-01 06:33:21', '0000-00-00 00:00:00'),
(37, 1, '1', '2021-11-01 06:33:23', '0000-00-00 00:00:00'),
(38, 1, '1', '2021-11-01 06:33:23', '0000-00-00 00:00:00'),
(39, 1, '1', '2021-11-01 06:33:32', '0000-00-00 00:00:00'),
(40, 1, '1', '2021-11-01 06:34:13', '0000-00-00 00:00:00'),
(41, 1, '1', '2021-11-01 06:34:36', '0000-00-00 00:00:00'),
(42, 1, '1', '2021-11-01 06:35:06', '0000-00-00 00:00:00'),
(43, 1, '1', '2021-11-01 06:35:27', '0000-00-00 00:00:00'),
(44, 3, '1', '2021-11-01 06:40:10', '0000-00-00 00:00:00'),
(45, 3, '1', '2021-11-01 06:43:29', '0000-00-00 00:00:00'),
(46, 1, '1', '2021-11-01 08:04:20', '0000-00-00 00:00:00'),
(47, 1, '1', '2021-11-01 08:04:23', '0000-00-00 00:00:00'),
(48, 1, '1', '2021-11-01 12:25:37', '0000-00-00 00:00:00'),
(49, 3, '1', '2021-11-02 07:25:17', '0000-00-00 00:00:00'),
(50, 3, '1', '2021-11-02 07:27:53', '0000-00-00 00:00:00'),
(51, 3, '1', '2021-11-02 07:45:05', '0000-00-00 00:00:00'),
(52, 3, '1', '2021-11-02 07:47:18', '0000-00-00 00:00:00'),
(53, 3, '1', '2021-11-02 07:47:42', '0000-00-00 00:00:00'),
(54, 3, '1', '2021-11-02 07:58:47', '0000-00-00 00:00:00'),
(55, 3, '1', '2021-11-02 10:15:57', '0000-00-00 00:00:00'),
(56, 3, '1', '2021-11-02 10:16:12', '0000-00-00 00:00:00'),
(57, 3, '1', '2021-11-02 10:31:12', '0000-00-00 00:00:00'),
(58, 3, '1', '2021-11-02 10:32:24', '0000-00-00 00:00:00'),
(59, 3, '1', '2021-11-02 10:32:34', '0000-00-00 00:00:00'),
(60, 3, '1', '2021-11-02 10:33:24', '0000-00-00 00:00:00'),
(61, 3, '1', '2021-11-02 10:33:50', '0000-00-00 00:00:00'),
(62, 3, '1', '2021-11-02 10:34:05', '0000-00-00 00:00:00'),
(63, 3, '1', '2021-11-02 10:34:49', '0000-00-00 00:00:00'),
(64, 3, '1', '2021-11-02 10:35:10', '0000-00-00 00:00:00'),
(65, 3, '1', '2021-11-02 10:35:24', '0000-00-00 00:00:00'),
(66, 3, '1', '2021-11-02 10:36:10', '0000-00-00 00:00:00'),
(67, 3, '1', '2021-11-02 10:36:18', '0000-00-00 00:00:00'),
(68, 3, '1', '2021-11-02 10:36:55', '0000-00-00 00:00:00'),
(69, 3, '1', '2021-11-02 10:37:10', '0000-00-00 00:00:00'),
(70, 3, '1', '2021-11-02 10:40:29', '0000-00-00 00:00:00'),
(71, 3, '1', '2021-11-02 10:40:45', '0000-00-00 00:00:00'),
(72, 3, '1', '2021-11-02 10:41:33', '0000-00-00 00:00:00'),
(73, 3, '1', '2021-11-02 10:46:04', '0000-00-00 00:00:00'),
(74, 3, '1', '2021-11-02 10:50:02', '0000-00-00 00:00:00'),
(75, 3, '1', '2021-11-02 10:53:03', '0000-00-00 00:00:00'),
(76, 3, '1', '2021-11-02 10:55:10', '0000-00-00 00:00:00'),
(77, 3, '1', '2021-11-02 10:57:06', '0000-00-00 00:00:00'),
(78, 3, '1', '2021-11-02 10:59:29', '0000-00-00 00:00:00'),
(79, 3, '1', '2021-11-02 11:02:52', '0000-00-00 00:00:00'),
(80, 3, '1', '2021-11-02 11:03:19', '0000-00-00 00:00:00'),
(81, 3, '1', '2021-11-02 11:03:55', '0000-00-00 00:00:00'),
(82, 3, '1', '2021-11-02 11:05:06', '0000-00-00 00:00:00'),
(83, 3, '1', '2021-11-02 11:06:06', '0000-00-00 00:00:00'),
(84, 3, '1', '2021-11-02 11:07:01', '0000-00-00 00:00:00'),
(85, 3, '1', '2021-11-02 11:08:49', '0000-00-00 00:00:00'),
(86, 3, '1', '2021-11-02 11:09:03', '0000-00-00 00:00:00'),
(87, 3, '1', '2021-11-02 11:09:52', '0000-00-00 00:00:00'),
(88, 3, '1', '2021-11-02 11:10:12', '0000-00-00 00:00:00'),
(89, 3, '1', '2021-11-02 11:10:27', '0000-00-00 00:00:00'),
(90, 3, '1', '2021-11-02 11:11:00', '0000-00-00 00:00:00'),
(91, 3, '1', '2021-11-02 11:13:04', '0000-00-00 00:00:00'),
(92, 3, '1', '2021-11-02 11:33:29', '0000-00-00 00:00:00'),
(93, 3, '1', '2021-11-02 11:34:27', '0000-00-00 00:00:00'),
(94, 3, '1', '2021-11-02 11:34:36', '0000-00-00 00:00:00'),
(95, 3, '1', '2021-11-02 11:36:25', '0000-00-00 00:00:00'),
(96, 3, '1', '2021-11-02 11:36:37', '0000-00-00 00:00:00'),
(97, 3, '1', '2021-11-02 11:37:16', '0000-00-00 00:00:00'),
(98, 3, '1', '2021-11-02 11:39:10', '0000-00-00 00:00:00'),
(99, 1, '1', '2021-11-09 05:14:40', '0000-00-00 00:00:00'),
(100, 1, '1', '2021-11-09 05:21:08', '0000-00-00 00:00:00'),
(101, 1, '1', '2021-11-09 05:34:35', '0000-00-00 00:00:00'),
(102, 1, '1', '2021-11-09 05:34:48', '0000-00-00 00:00:00'),
(103, 1, '1', '2021-11-09 05:35:30', '0000-00-00 00:00:00'),
(104, 1, '1', '2021-11-09 05:35:53', '0000-00-00 00:00:00'),
(105, 1, '1', '2021-11-09 05:36:27', '0000-00-00 00:00:00'),
(106, 1, '1', '2021-11-09 05:36:54', '0000-00-00 00:00:00'),
(107, 1, '1', '2021-11-09 05:37:05', '0000-00-00 00:00:00'),
(108, 1, '1', '2021-11-09 05:37:22', '0000-00-00 00:00:00'),
(109, 1, '1', '2021-11-09 05:37:51', '0000-00-00 00:00:00'),
(110, 1, '1', '2021-11-09 05:38:04', '0000-00-00 00:00:00'),
(111, 1, '1', '2021-11-09 05:38:27', '0000-00-00 00:00:00'),
(112, 1, '1', '2021-11-09 05:38:39', '0000-00-00 00:00:00'),
(113, 1, '1', '2021-11-09 05:39:05', '0000-00-00 00:00:00'),
(114, 1, '1', '2021-11-09 05:39:28', '0000-00-00 00:00:00'),
(115, 1, '1', '2021-11-09 05:39:52', '0000-00-00 00:00:00'),
(116, 1, '1', '2021-11-09 05:39:59', '0000-00-00 00:00:00'),
(117, 1, '1', '2021-11-09 05:40:51', '0000-00-00 00:00:00'),
(118, 1, '1', '2021-11-09 05:40:59', '0000-00-00 00:00:00'),
(119, 1, '1', '2021-11-09 05:41:14', '0000-00-00 00:00:00'),
(120, 1, '1', '2021-11-09 05:41:47', '0000-00-00 00:00:00'),
(121, 1, '1', '2021-11-09 05:45:03', '0000-00-00 00:00:00'),
(122, 1, '1', '2021-11-09 05:45:13', '0000-00-00 00:00:00'),
(123, 1, '1', '2021-11-09 05:45:35', '0000-00-00 00:00:00'),
(124, 1, '1', '2021-11-09 05:45:46', '0000-00-00 00:00:00'),
(125, 1, '1', '2021-11-09 05:48:05', '0000-00-00 00:00:00'),
(126, 1, '1', '2021-11-09 05:48:09', '0000-00-00 00:00:00'),
(127, 1, '1', '2021-11-09 05:48:20', '0000-00-00 00:00:00'),
(128, 1, '1', '2021-11-09 05:50:16', '0000-00-00 00:00:00'),
(129, 1, '1', '2021-11-09 05:50:27', '0000-00-00 00:00:00'),
(130, 1, '1', '2021-11-09 05:50:34', '0000-00-00 00:00:00'),
(131, 1, '1', '2021-11-09 05:50:38', '0000-00-00 00:00:00'),
(132, 1, '1', '2021-11-09 05:50:43', '0000-00-00 00:00:00'),
(133, 1, '1', '2021-11-09 05:50:51', '0000-00-00 00:00:00'),
(134, 1, '1', '2021-11-09 05:50:55', '0000-00-00 00:00:00'),
(135, 1, '1', '2021-11-09 05:51:27', '0000-00-00 00:00:00'),
(136, 1, '1', '2021-11-09 05:51:32', '0000-00-00 00:00:00'),
(137, 1, '1', '2021-11-09 05:52:09', '0000-00-00 00:00:00'),
(138, 1, '1', '2021-11-09 05:52:21', '0000-00-00 00:00:00'),
(139, 1, '1', '2021-11-09 05:52:34', '0000-00-00 00:00:00'),
(140, 1, '1', '2021-11-09 05:52:38', '0000-00-00 00:00:00'),
(141, 1, '1', '2021-11-09 05:52:49', '0000-00-00 00:00:00'),
(142, 1, '1', '2021-11-09 05:54:06', '0000-00-00 00:00:00'),
(143, 1, '1', '2021-11-09 05:54:46', '0000-00-00 00:00:00'),
(144, 1, '1', '2021-11-09 05:54:57', '0000-00-00 00:00:00'),
(145, 1, '1', '2021-11-09 05:55:02', '0000-00-00 00:00:00'),
(146, 1, '1', '2021-11-09 05:55:37', '0000-00-00 00:00:00'),
(147, 1, '1', '2021-11-09 05:55:55', '0000-00-00 00:00:00'),
(148, 1, '1', '2021-11-09 05:56:03', '0000-00-00 00:00:00'),
(149, 1, '1', '2021-11-09 05:56:14', '0000-00-00 00:00:00'),
(150, 1, '1', '2021-11-09 05:56:22', '0000-00-00 00:00:00'),
(151, 1, '1', '2021-11-09 05:56:56', '0000-00-00 00:00:00'),
(152, 1, '1', '2021-11-09 05:57:12', '0000-00-00 00:00:00'),
(153, 1, '1', '2021-11-09 05:57:48', '0000-00-00 00:00:00'),
(154, 1, '1', '2021-11-09 05:58:05', '0000-00-00 00:00:00'),
(155, 1, '1', '2021-11-09 05:58:26', '0000-00-00 00:00:00'),
(156, 1, '1', '2021-11-09 05:58:50', '0000-00-00 00:00:00'),
(157, 1, '1', '2021-11-09 05:59:01', '0000-00-00 00:00:00'),
(158, 1, '1', '2021-11-09 05:59:06', '0000-00-00 00:00:00'),
(159, 1, '1', '2021-11-09 05:59:12', '0000-00-00 00:00:00'),
(160, 1, '1', '2021-11-09 05:59:22', '0000-00-00 00:00:00'),
(161, 1, '1', '2021-11-09 05:59:29', '0000-00-00 00:00:00'),
(162, 1, '1', '2021-11-09 05:59:43', '0000-00-00 00:00:00'),
(163, 1, '1', '2021-11-09 05:59:51', '0000-00-00 00:00:00'),
(164, 1, '1', '2021-11-09 06:00:55', '0000-00-00 00:00:00'),
(165, 1, '1', '2021-11-09 06:01:08', '0000-00-00 00:00:00'),
(166, 1, '1', '2021-11-09 06:03:44', '0000-00-00 00:00:00'),
(167, 1, '1', '2021-11-09 06:03:51', '0000-00-00 00:00:00'),
(168, 1, '1', '2021-11-09 06:04:00', '0000-00-00 00:00:00'),
(169, 1, '1', '2021-11-09 06:04:17', '0000-00-00 00:00:00'),
(170, 1, '1', '2021-11-09 06:05:27', '0000-00-00 00:00:00'),
(171, 1, '1', '2021-11-09 06:06:01', '0000-00-00 00:00:00'),
(172, 1, '1', '2021-11-09 06:07:09', '0000-00-00 00:00:00'),
(173, 1, '1', '2021-11-09 06:07:41', '0000-00-00 00:00:00'),
(174, 1, '1', '2021-11-09 06:07:55', '0000-00-00 00:00:00'),
(175, 1, '1', '2021-11-09 06:08:27', '0000-00-00 00:00:00'),
(176, 1, '1', '2021-11-09 06:08:46', '0000-00-00 00:00:00'),
(177, 1, '1', '2021-11-09 06:09:31', '0000-00-00 00:00:00'),
(178, 1, '1', '2021-11-09 06:09:38', '0000-00-00 00:00:00'),
(179, 1, '1', '2021-11-09 06:10:45', '0000-00-00 00:00:00'),
(180, 1, '1', '2021-11-09 06:11:07', '0000-00-00 00:00:00'),
(181, 1, '1', '2021-11-09 06:12:34', '0000-00-00 00:00:00'),
(182, 1, '1', '2021-11-09 06:34:16', '0000-00-00 00:00:00'),
(183, 1, '1', '2021-11-09 07:24:40', '0000-00-00 00:00:00'),
(184, 1, '1', '2021-11-09 10:17:29', '0000-00-00 00:00:00'),
(185, 1, '1', '2021-11-09 10:24:17', '0000-00-00 00:00:00'),
(186, 1, '1', '2021-11-09 10:24:41', '0000-00-00 00:00:00'),
(187, 1, '1', '2021-11-09 10:55:17', '0000-00-00 00:00:00'),
(188, 1, '1', '2021-11-09 11:11:16', '0000-00-00 00:00:00'),
(189, 1, '1', '2021-11-09 11:14:31', '0000-00-00 00:00:00'),
(190, 1, '1', '2021-11-09 11:14:54', '0000-00-00 00:00:00'),
(191, 1, '1', '2021-11-09 11:15:32', '0000-00-00 00:00:00'),
(192, 1, '1', '2021-11-09 11:15:53', '0000-00-00 00:00:00'),
(193, 1, '1', '2021-11-09 11:16:45', '0000-00-00 00:00:00'),
(194, 1, '1', '2021-11-09 11:16:59', '0000-00-00 00:00:00'),
(195, 1, '1', '2021-11-09 11:17:42', '0000-00-00 00:00:00'),
(196, 1, '1', '2021-11-09 11:18:13', '0000-00-00 00:00:00'),
(197, 1, '1', '2021-11-09 11:20:10', '0000-00-00 00:00:00'),
(198, 1, '1', '2021-11-09 11:26:36', '0000-00-00 00:00:00'),
(199, 1, '1', '2021-11-09 11:26:41', '0000-00-00 00:00:00'),
(200, 1, '1', '2021-11-09 11:31:34', '0000-00-00 00:00:00'),
(201, 1, '1', '2021-11-09 11:32:22', '0000-00-00 00:00:00'),
(202, 1, '1', '2021-11-09 12:22:47', '0000-00-00 00:00:00'),
(203, 1, '1', '2021-11-09 12:25:29', '0000-00-00 00:00:00'),
(204, 1, '1', '2021-11-09 12:26:02', '0000-00-00 00:00:00'),
(205, 1, '1', '2021-11-09 12:26:24', '0000-00-00 00:00:00'),
(206, 1, '1', '2021-11-09 12:27:07', '0000-00-00 00:00:00'),
(207, 1, '1', '2021-11-09 12:27:15', '0000-00-00 00:00:00'),
(208, 1, '1', '2021-11-09 12:27:32', '0000-00-00 00:00:00'),
(209, 1, '1', '2021-11-09 12:28:08', '0000-00-00 00:00:00'),
(210, 1, '1', '2021-11-09 12:29:27', '0000-00-00 00:00:00'),
(211, 1, '1', '2021-11-09 12:30:14', '0000-00-00 00:00:00'),
(212, 1, '1', '2021-11-09 12:30:23', '0000-00-00 00:00:00'),
(213, 1, '1', '2021-11-09 12:30:33', '0000-00-00 00:00:00'),
(214, 1, '1', '2021-11-09 12:32:11', '0000-00-00 00:00:00'),
(215, 1, '1', '2021-11-09 12:32:29', '0000-00-00 00:00:00'),
(216, 1, '1', '2021-11-09 12:32:48', '0000-00-00 00:00:00'),
(217, 1, '1', '2021-11-09 12:32:53', '0000-00-00 00:00:00'),
(218, 1, '1', '2021-11-09 12:33:29', '0000-00-00 00:00:00'),
(219, 1, '1', '2021-11-09 12:44:39', '0000-00-00 00:00:00'),
(220, 1, '1', '2021-11-09 12:45:39', '0000-00-00 00:00:00'),
(221, 1, '1', '2021-11-09 12:47:02', '0000-00-00 00:00:00'),
(222, 1, '1', '2021-11-09 12:47:39', '0000-00-00 00:00:00'),
(223, 1, '1', '2021-11-09 12:48:28', '0000-00-00 00:00:00'),
(224, 1, '1', '2021-11-09 12:48:55', '0000-00-00 00:00:00'),
(225, 1, '1', '2021-11-09 12:49:08', '0000-00-00 00:00:00'),
(226, 1, '1', '2021-11-09 12:49:18', '0000-00-00 00:00:00'),
(227, 1, '1', '2021-11-09 12:49:21', '0000-00-00 00:00:00'),
(228, 1, '1', '2021-11-09 12:50:33', '0000-00-00 00:00:00'),
(229, 1, '1', '2021-11-09 13:00:59', '0000-00-00 00:00:00'),
(230, 1, '1', '2021-11-09 13:01:32', '0000-00-00 00:00:00'),
(231, 1, '1', '2021-11-09 13:01:47', '0000-00-00 00:00:00'),
(232, 1, '1', '2021-11-09 13:02:16', '0000-00-00 00:00:00'),
(233, 1, '1', '2021-11-09 13:03:22', '0000-00-00 00:00:00'),
(234, 1, '1', '2021-11-09 13:05:38', '0000-00-00 00:00:00'),
(235, 1, '1', '2021-11-09 13:08:49', '0000-00-00 00:00:00'),
(236, 1, '1', '2021-11-09 13:09:01', '0000-00-00 00:00:00'),
(237, 1, '1', '2021-11-09 13:09:22', '0000-00-00 00:00:00'),
(238, 1, '1', '2021-11-09 13:10:01', '0000-00-00 00:00:00'),
(239, 4, '1', '2021-11-10 05:32:49', '0000-00-00 00:00:00'),
(240, 4, '1', '2021-11-10 05:33:46', '0000-00-00 00:00:00'),
(241, 4, '1', '2021-11-10 05:34:17', '0000-00-00 00:00:00'),
(242, 4, '1', '2021-11-10 05:34:44', '0000-00-00 00:00:00'),
(243, 4, '1', '2021-11-10 05:34:52', '0000-00-00 00:00:00'),
(244, 4, '1', '2021-11-10 05:35:07', '0000-00-00 00:00:00'),
(245, 4, '1', '2021-11-10 05:35:35', '0000-00-00 00:00:00'),
(246, 4, '1', '2021-11-10 05:36:25', '0000-00-00 00:00:00'),
(247, 9, '1', '2021-11-10 05:37:21', '0000-00-00 00:00:00'),
(248, 3, '1', '2021-11-10 05:39:48', '0000-00-00 00:00:00'),
(249, 3, '1', '2021-11-10 05:40:24', '0000-00-00 00:00:00'),
(250, 4, '1', '2021-11-10 06:28:17', '0000-00-00 00:00:00'),
(251, 1, '1', '2021-11-15 11:39:26', '0000-00-00 00:00:00'),
(252, 1, '1', '2021-11-15 11:40:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `unit_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `p_id`, `quantity`, `unit_price`) VALUES
(1, 220, 1, 5, 39),
(2, 220, 2, 4, 39),
(3, 221, 3, 3, 39),
(4, 222, 3, 3, 39),
(5, 237, 2, 1, 39),
(6, 238, 2, 1, 39),
(7, 244, 4, 1, 39),
(8, 245, 4, 1, 39),
(9, 246, 4, 1, 39),
(10, 247, 2, 1, 39),
(11, 248, 1, 1, 39),
(12, 248, 4, 2, 39),
(13, 249, 4, 3, 39),
(14, 251, 2, 1, 39),
(15, 252, 2, 1, 39);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `c_id` int(11) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saleprice` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mrp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemlenght` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stoneshape` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_type` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':Men , ''2'':Women , ''3'':Kids',
  `stock` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':instock , ''0'':out of stock ',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `c_id`, `image`, `productname`, `saleprice`, `mrp`, `description`, `quantity`, `brand`, `itemlenght`, `material`, `stoneshape`, `weight`, `gender_type`, `stock`, `status`) VALUES
(1, 4, 'ring.jpeg', 'Ring', '45.00', '39.00', 'Ring', '10', '3', '20', 'Brass', 'Rounded', '25', '2', '1', '1'),
(2, 6, 'Mangalesuta.jpg', 'Mangalsutra', '45', '39', 'Mangalsutra', '10', '1', '18', 'Gold', 'Rounded', '25', '2', '1', '1'),
(3, 6, 'mangalsutra.jpeg', 'Mangalsutra', '45.00', '39.00', 'Mangalsutra', '4', '1', '20', 'Gold', 'Rounded', '25', '1', '1', '1'),
(6, 10, 'wsi-imageoptim-gold-slider-001.jpg', 'Set', '19', '18', 'Set', '2', '3', '20', 'Gold', 'Rounded', '25', '2', '1', '1'),
(7, 1, '71qSVwRJ1FL._UY500_.jpg', 'Nackless', '15', '12', 'Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget youre at the office', '10', '1', '20', 'Gold', 'Rounded', '25', '2', '1', '1'),
(8, 3, 'images.jpeg', 'Earings', '30', '25', 'Stop your co-workers in their tracks with the stun...', '5', '1', '18', 'Brass', 'Rounded', '25', '2', '1', '1'),
(10, 2, 'bracelet.jpg', 'Bracelets', '19', '15', 'Stop your co-workers in their tracks with the stun...', '15', '3', '20', 'Oxodize', 'Rounded', '25', '2', '1', '1'),
(11, 7, 'Bangles.jpg', 'Bangals', '16', '18', 'Stop your co-workers in their tracks with the stun...', '5', '1', '15', 'gold', 'Rounded', '25', '2', '1', '1'),
(12, 8, 'chain.webp', 'Chain', '13', '11', 'Stop your co-workers in their tracks with the stun...', '5', '1', '20', 'Gold', 'Rounded', '25', '1', '1', '1'),
(13, 4, 'download.jpeg', 'Ring', '13', '10', 'Stop your co-workers in their tracks with the stun...', '10', '1', '20', 'Silver', 'Rounded', '25', '3', '1', '1'),
(14, 2, 'Baby-hand-with-gold-bracelet.jpg', 'Baby Bracelet', '13', '10', 'Stop your co-workers in their tracks with the stun...', '10', '3', '20', 'Gold', 'Rounded', '25', '3', '1', '1'),
(15, 6, 'Mangalsutra.jpg', 'Mangalsutra', '30', '28', 'Stop your co-workers in their tracks with the stun...', '5', '3', '20', 'Brass', 'Rounded', '25', '2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `status`) VALUES
(1, 'NEW BRACELETS COLLECTION 1', 'main-slider.jpg', '1'),
(8, 'New', 'main-slider-2.jpg', '1'),
(10, 'Set', 'wsi-imageoptim-gold-slider-001.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `profile` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmpassword` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '''1'':active , ''0'':inactive '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `profile`, `username`, `email`, `password`, `confirmpassword`, `status`) VALUES
(1, 'user.jpeg', 'rahulkihla', 'rahul@gmail.com', '439ed537979d8e831561964dbbbd7413', '439ed537979d8e831561964dbbbd7413', '1'),
(3, 'girluser.jpeg', 'mahek', 'mahek@gmail.com', '274d2bb1bc2be6e8208bcaa44b000167', '274d2bb1bc2be6e8208bcaa44b000167', '1'),
(4, 'user.jpeg', 'rohit', 'rohit88@gmail.com', '2d235ace000a3ad85f590e321c89bb99', '2d235ace000a3ad85f590e321c89bb99', '1'),
(9, 'girluser.jpeg', 'Uri', 'uri@gmail.com', '9305b73d359bd06734fee0b3638079e1', '9305b73d359bd06734fee0b3638079e1', '1'),
(43, 'user.jpeg', 'rahul kihla', 'rahulmaheta@gmail.com', '439ed537979d8e831561964dbbbd7413', '439ed537979d8e831561964dbbbd7413', '1'),
(50, 'user.jpeg', 'raju majnubhai', 'majnubhai@gmail.com', '18a9eb4f94c0c98388986cba134da49b', '18a9eb4f94c0c98388986cba134da49b', '1'),
(51, 'user.jpeg', 'Mansi makawana', 'mansi@gmail.com', '8e183f28f7ac8aaebf5650f728f79a37', '8e183f28f7ac8aaebf5650f728f79a37', '1'),
(52, 'user.jpeg', 'mukesh maheta', 'mukesh@gmail.com', 'a883bde368145d717b99c70594fd6069', 'a883bde368145d717b99c70594fd6069', '1'),
(53, 'user.jpeg', 'raju makwana', 'raju@gmail.com', '03c017f682085142f3b60f56673e22dc', '03c017f682085142f3b60f56673e22dc', '1'),
(55, 'user.jpeg', 'nayan kihla', 'nayan@gmail.com', 'b257312296cecbec7a9918cf5661dc51', 'b257312296cecbec7a9918cf5661dc51', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
