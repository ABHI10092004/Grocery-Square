-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 10:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `price` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `purchase_id` varchar(225) NOT NULL,
  `qty` int(100) NOT NULL DEFAULT 1,
  `final_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `name`, `category`, `price`, `image`, `purchase_id`, `qty`, `final_price`) VALUES
(177, 'Harpic-disinfactant', 'Household', 140, '40202555_7-harpic-power-plus-disinfectant-toilet-cleaner.webp', '6', 1, 140),
(189, 'Watermelon', 'Fruits', 59, '10000207_24-fresho-watermelon-small.webp', '6', 1, 59),
(193, 'Ashirvad-Whole wheat', 'Daily Staples', 255, '126906_9-aashirvaad-atta-whole-wheat.webp', '6', 6, 1530),
(209, 'Pomegranate', 'Fruits', 210, '40120006_6-fresho-pomegranate-small.webp', '7', 1, 210),
(210, 'Banana', 'Fruits', 70, '10000031_21-fresho-banana-yelakki.webp', '7', 1, 70),
(211, 'Barbique-chicken-cubes', 'Meat', 477, '40231722_2-fresho-barbeque-pepper-chicken-cubes-juicy-fresh.webp', '7', 1, 477),
(212, 'bb-royal-mida', 'Daily Staples', 211, '1213921_1-bb-royal-maida.webp', '7', 1, 211),
(244, 'Cucumber', 'Vegetables', 42, '30007400_4-fresho-cucumber.webp', '1', 1, 42),
(245, 'Tata Salt', 'Daily Staples', 26, '241600_7-tata-salt-iodized.webp', '1', 1, 26),
(249, 'Ladies-finger', 'Vegetables', 20, '10000142_17-fresho-ladies-finger.webp', '25', 2, 40),
(250, 'Coconut', 'Fruits', 15, '40057966_7-fresho-tender-coconut-medium.webp', '25', 1, 15),
(251, 'Ladies-finger', 'Vegetables', 20, '10000142_17-fresho-ladies-finger.webp', '26', 1, 20),
(252, 'Coconut', 'Fruits', 15, '40057966_7-fresho-tender-coconut-medium.webp', '26', 2, 30),
(261, 'Ladies-finger', 'Vegetables', 20, '10000142_17-fresho-ladies-finger.webp', '38', 1, 20),
(262, 'Coconut', 'Fruits', 15, '40057966_7-fresho-tender-coconut-medium.webp', '38', 1, 15),
(283, 'Watermelon', 'Fruits', 59, '10000207_24-fresho-watermelon-small.webp', '47', 1, 59),
(284, 'Apple', 'Fruits', 192, '1203781_1-fresho-apple-red-delicious-washington-regular.webp', '47', 2, 384),
(285, 'Coconut', 'Fruits', 15, '40057966_7-fresho-tender-coconut-medium.webp', '47', 1, 15),
(288, 'Strawberry', 'Fruits', 266, '10000263_12-fresho-strawberry.webp', '47', 1, 266),
(289, 'Tata Salt', 'Daily Staples', 26, '241600_7-tata-salt-iodized.webp', '47', 1, 26),
(329, 'Masoori-rice', 'Big Packs Bigger Discount', 899, '40075895_5-bb-royal-sona-masoori-rice-raw-rice-super-premium.webp', '51', 1, 899),
(330, 'Hariyal-chicken', 'your orders', 316, '40231664_3-fresho-lush-hariyali-chicken-tikka-juicy-fresh.webp', '1', 1, 316),
(336, 'Roshu-fish-steak', 'Meat', 216, '40240474_4-fresho-desi-rohu-fish-steak-fresh-juicy-marinated-ready-to-cook.webp', '1', 7, 1512);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'Abhi', 'nan@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `offer` varchar(225) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `name`, `offer`, `status`) VALUES
(8, 'create an image 1382c7f8-05b2-458d-a22c-b5e693c079b9.png', 'Vegetables', '35%', 1),
(9, 'create an image df617216-0f0e-4151-aa6a-0c8e86ac6dc7.png', 'Fruits', '42%', 1),
(11, 'create an image be2233c3-a7b2-4d1e-9609-c5ded6024b07.png', 'Meat', '55%', 1),
(12, 'create an image 9053abf0-a3a5-42db-8508-327f884c37ae.png', 'Household', '45%', 1),
(15, 'create an image df617216-0f0e-4151-aa6a-0c8e86ac6dc7.png', 'Fruits', '55%', 0),
(16, 'create an image 1382c7f8-05b2-458d-a22c-b5e693c079b9.png', 'Vegetables', '33%', 0),
(17, 'create an image bda685e7-a72d-4d42-9f26-f35237ba7278.png', 'Dairy Products', '49%', 1),
(18, 'create an image be2233c3-a7b2-4d1e-9609-c5ded6024b07.png', 'Meat', '26%', 0),
(19, 'create an image 9053abf0-a3a5-42db-8508-327f884c37ae.png', 'Daily Staples', '20%', 0),
(20, 'make an image w eddab096-f934-4970-85b1-284edf8e8af5.png', 'Dairy Products', '49%', 0),
(21, 'create an image bda685e7-a72d-4d42-9f26-f35237ba7278.png', 'Hygiene', '23%', 0),
(22, 'make an image w 5860a4c7-a118-4e13-86e7-13af68acf34e.png', 'Snacks', '19%', 0),
(23, 'istockphoto-458984207-612x612.jpg', 'Household', '55%', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(100) NOT NULL,
  `image` varchar(225) NOT NULL,
  `coupon` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `price_range` int(225) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `image`, `coupon`, `status`, `price_range`) VALUES
(3, 't1_hp_aff_m_neucard_010624.webp', '980KLJJK', 0, 0),
(8, 't1_hp_aff_m_citidc_010624.webp', '233ERT56', 0, 0),
(10, '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 'ADDCC323', 0, 2000),
(11, 't1_hp_aff_m_deutsche_010624.webp', '980K11JJ', 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` int(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `userid` varchar(225) NOT NULL,
  `prodname` varchar(225) NOT NULL,
  `item_price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `Address`, `userid`, `prodname`, `item_price`, `status`) VALUES
(17, 'ABHI', 'abh@gmail.com', 2147483647, 'add123d12kkmaa', '1', 'Hariyal-chicken', 632, 0),
(18, 'ABHI', 'abh@gmail.com', 2147483647, 'add123d12kkmaa', '1', 'Kerala-Banana-chips', 400, 0),
(19, 'ABHI', 'abh@gmail.com', 2147483647, 'add123d12kkmaa', '1', 'Butter-murukulu', 274, 0),
(35, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarjssVisakhapatnamAndhra Pradesh', '1', 'Bournvita', 576, 0),
(36, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagaripokxVisakhapatnamAndhra Pradesh', '6', 'Combo-chicken-drumsticks', 798, 0),
(37, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagaripokxVisakhapatnamAndhra Pradesh', '6', 'Chicken-meat-loaf', 732, 0),
(38, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagaripokxVisakhapatnamAndhra Pradesh', '6', 'bb-royal-mida', 422, 0),
(39, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagaripokxVisakhapatnamAndhra Pradesh', '6', 'Roshu-fish-steak', 216, 0),
(50, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarasVisakhapatnamAndhra Pradesh', '6', 'Combo-chicken-drumsticks', 798, 0),
(51, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarasVisakhapatnamAndhra Pradesh', '6', 'Amul Butter-Milk', 30, 0),
(52, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarasVisakhapatnamAndhra Pradesh', '6', 'Afgani-chicken', 380, 0),
(53, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarasVisakhapatnamAndhra Pradesh', '6', 'Cintol-soap', 20, 0),
(54, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarasVisakhapatnamAndhra Pradesh', '6', 'Apple', 960, 0),
(55, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarllVisakhapatnamAndhra Pradesh', '6', 'Strawberry', 1330, 0),
(56, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarllVisakhapatnamAndhra Pradesh', '6', 'Watermelon', 295, 0),
(57, 'DAN', 'dny@gmail.com', 2147483647, 'AdarshnagarllVisakhapatnamAndhra Pradesh', '6', 'Fresh-cow-ghee', 210, 0),
(59, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Hariyal-chicken', 632, 0),
(60, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Kerala-Banana-chips', 400, 0),
(61, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Bournvita', 576, 0),
(62, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Kesar-Mango', 480, 0),
(63, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Ladies-finger', 20, 0),
(64, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Coconut', 15, 0),
(65, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '7', 'Coconut', 60, 0),
(66, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '7', 'Roshu-fish-steak', 864, 0),
(67, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '7', 'Chicken-meat-loaf', 3660, 0),
(68, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarqwwVisakhapatnamAndhra Pradesh', '7', 'Coconut', 30, 0),
(69, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarqwwVisakhapatnamAndhra Pradesh', '7', 'Ladies-finger', 20, 0),
(70, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarqwwVisakhapatnamAndhra Pradesh', '7', 'Roshu-fish-steak', 216, 0),
(71, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarqwwVisakhapatnamAndhra Pradesh', '7', 'Peanut Oil', 29, 0),
(72, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarqwwVisakhapatnamAndhra Pradesh', '7', 'Kesar-Mango', 160, 0),
(73, 'MKJX', 'tfcvs', 2147483647, 'AdarshnagarqwwVisakhapatnamAndhra Pradesh', '7', 'Charcole-soap', 50, 0),
(74, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Cintol-soap', 20, 0),
(75, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Charcole-soap', 50, 0),
(76, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Baby Shampoo', 71, 0),
(77, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Clear-foam-fasewash', 79, 0),
(78, 'ABHI', 'abh@gmail.com', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '1', 'Ashirvad-Whole wheat', 255, 0),
(79, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarbbbVisakhapatnamAndhra Pradesh', '8', 'Cucumber', 42, 0),
(80, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarbbbVisakhapatnamAndhra Pradesh', '8', 'Roshu-fish-steak', 1080, 0),
(81, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarbbbVisakhapatnamAndhra Pradesh', '8', 'Green-Chilli', 136, 0),
(82, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarbbbVisakhapatnamAndhra Pradesh', '8', 'Masoori-rice', 899, 0),
(83, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarbbbVisakhapatnamAndhra Pradesh', '8', 'Powder Tea', 11, 0),
(84, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarnnnVisakhapatnamAndhra Pradesh', '8', 'Kesar-Mango', 160, 0),
(85, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarnnnVisakhapatnamAndhra Pradesh', '8', 'Charcole-soap', 50, 0),
(86, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarnnnVisakhapatnamAndhra Pradesh', '8', 'Powder Tea', 11, 0),
(87, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarnnnVisakhapatnamAndhra Pradesh', '8', 'Tata Salt', 26, 0),
(88, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarnnnVisakhapatnamAndhra Pradesh', '8', 'Peanut Oil', 29, 0),
(89, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '8', 'Green-Chilli', 136, 0),
(90, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '8', 'Beetroot', 44, 0),
(91, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '8', 'Bottle Gaurd', 34, 0),
(92, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '8', 'Amul Butter-Milk', 15, 0),
(93, 'LUNA', 'naan@gmail.com', 2147483647, 'AdarshnagarreqrtVisakhapatnamAndhra Pradesh', '8', 'Powder Tea', 11, 0),
(94, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '47', 'Coconut', 15, 0),
(95, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '47', 'Cucumber', 42, 0),
(96, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '47', 'Tata Salt', 26, 0),
(97, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarnmcfVisakhapatnamAndhra Pradesh', '47', 'Strawberry', 2394, 0),
(98, 'LORA', 'nn@gmail.com', 1231231234, 'Adarshnagark;lmVisakhapatnamAndhra Pradesh', '47', 'Ladies-finger', 20, 0),
(99, 'LORA', 'nn@gmail.com', 1231231234, 'Adarshnagark;lmVisakhapatnamAndhra Pradesh', '47', 'Coconut', 45, 0),
(100, 'LORA', 'nn@gmail.com', 1231231234, 'Adarshnagark;lmVisakhapatnamAndhra Pradesh', '47', 'Cucumber', 42, 0),
(101, 'LORA', 'nn@gmail.com', 1231231234, 'Adarshnagark;lmVisakhapatnamAndhra Pradesh', '47', 'Tata Salt', 26, 0),
(102, 'LORA', 'nn@gmail.com', 1231231234, 'Adarshnagark;lmVisakhapatnamAndhra Pradesh', '47', 'Roshu-fish-steak', 216, 0),
(103, 'LORA', 'nn@gmail.com', 1231231234, 'Adarshnagark;lmVisakhapatnamAndhra Pradesh', '47', 'Charcole-soap', 50, 0),
(104, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarklVisakhapatnamAndhra Pradesh', '47', 'Strawberry', 266, 0),
(105, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarklVisakhapatnamAndhra Pradesh', '47', 'Watermelon', 59, 0),
(106, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarklVisakhapatnamAndhra Pradesh', '47', 'Pomegranate', 210, 0),
(107, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarklVisakhapatnamAndhra Pradesh', '47', 'Apple', 192, 0),
(108, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarklVisakhapatnamAndhra Pradesh', '47', 'Banana', 70, 0),
(109, 'LORA', 'nn@gmail.com', 1231231234, 'AdarshnagarklVisakhapatnamAndhra Pradesh', '47', 'Beetroot', 44, 0),
(110, 'EWD', 'nan@gmail.com', 4165, 'AdarshnagarjjVisakhapatnamAndhra Pradesh', '48', 'Ladies-finger', 20, 0),
(111, 'EWD', 'nan@gmail.com', 4165, 'AdarshnagarjjVisakhapatnamAndhra Pradesh', '48', 'Coconut', 15, 0),
(112, 'EWD', 'nan@gmail.com', 4165, 'AdarshnagarjjVisakhapatnamAndhra Pradesh', '48', 'Cucumber', 42, 0),
(113, 'EWD', 'nan@gmail.com', 4165, 'AdarshnagarjjVisakhapatnamAndhra Pradesh', '48', 'Tata Salt', 26, 0),
(114, 'EWD', 'nan@gmail.com', 4165, 'AdarshnagarjjVisakhapatnamAndhra Pradesh', '48', 'Strawberry', 2128, 0),
(115, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Coconut', 15, 0),
(116, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Cucumber', 42, 0),
(117, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Strawberry', 266, 0),
(118, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Watermelon', 59, 0),
(119, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Apple', 192, 0),
(120, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Pomegranate', 210, 0),
(121, 'IU', 'iucdw', 65, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '50', 'Strawberry', 2128, 0),
(122, 'BIHYFF', 'iucdw', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '51', 'Ladies-finger', 20, 0),
(123, 'BIHYFF', 'iucdw', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '51', 'Coconut', 15, 0),
(124, 'BIHYFF', 'iucdw', 2147483647, 'AdarshnagarommVisakhapatnamAndhra Pradesh', '51', 'Cucumber', 42, 0),
(125, 'BIHYFF', 'iucdw', 2147483647, 'AdarshnagarkkVisakhapatnamAndhra Pradesh', '51', 'Strawberry', 2128, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `category` varchar(225) NOT NULL,
  `orgprice` int(225) NOT NULL,
  `discprice` int(225) NOT NULL,
  `offer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `category`, `orgprice`, `discprice`, `offer`) VALUES
(16, '1217067_2-nandini-goodlife-toned-milk.webp', 'Beetroot', 'Vegetables', 73, 44, 40),
(17, '50000513_3-fresho-chilli-green-organically-grown.webp', 'Green-Chilli', 'Vegetables', 77, 68, 12),
(18, '10000273_16-fresho-mushrooms-button.webp', 'Mushroom', 'Vegetables', 66, 42, 36),
(19, '20000745_5-fresho-bottle-gourd.webp', 'Bottle Gaurd', 'Vegetables', 61, 34, 44),
(20, '10000067_23-fresho-capsicum-green.webp', 'Capsicum', 'Vegetables', 130, 80, 38),
(21, '10000097_19-fresho-coriander-leaves.webp', 'Coriander-leaves', 'Vegetables', 8, 6, 25),
(22, '30007400_4-fresho-cucumber.webp', 'Cucumber', 'Vegetables', 91, 42, 54),
(23, '10000142_17-fresho-ladies-finger.webp', 'Ladies-finger', 'Vegetables', 60, 20, 67),
(24, '1201414_1-fresho-onion.webp', 'Onion', 'Vegetables', 100, 68, 32),
(25, '10000263_12-fresho-strawberry.webp', 'Strawberry', 'Fruits', 400, 266, 34),
(26, '10000207_24-fresho-watermelon-small.webp', 'Watermelon', 'Fruits', 80, 59, 26),
(27, '1203781_1-fresho-apple-red-delicious-washington-regular.webp', 'Apple', 'Fruits', 200, 192, 4),
(28, '40120006_6-fresho-pomegranate-small.webp', 'Pomegranate', 'Fruits', 340, 210, 38),
(29, '40057966_7-fresho-tender-coconut-medium.webp', 'Coconut', 'Fruits', 38, 15, 61),
(30, '10000031_21-fresho-banana-yelakki.webp', 'Banana', 'Fruits', 77, 70, 9),
(31, '30000974_11-fresho-kesar-mango.webp', 'Kesar-Mango', 'Fruits', 290, 160, 45),
(32, '1200345_2-bb-combo-mango-banganpalli.webp', 'Mango', 'Fruits', 390, 240, 38),
(33, '20002416_1-haldirams-namkeen-chatpata-matar.webp', 'Halthiram-chatpaka-mutter', 'Snacks', 50, 40, 20),
(34, '1203981_1-haldirams-namkeen-lite-chiwda.webp', 'Haldiram-namkin-chiwda', 'Snacks', 130, 117, 10),
(35, '40271352_2-modern-kitchens-butter-murukku-fresh-crunchy-south-indian-snack.webp', 'Butter-murukulu', 'Snacks', 161, 137, 15),
(36, '40123671_6-townbus-namkeen-madras-mixture.webp', 'Namkeen-madras-mixture', 'Snacks', 99, 80, 19),
(37, '1228346_1-beyond-snack-kerala-banana-chips-original-style-thin-crispy-delicious.webp', 'Kerala-Banana-chips', 'Snacks', 233, 200, 14),
(38, '1204009_1-haldirams-mixture-cornflakes.webp', 'Haldiram-cornflakes-mixture', 'Snacks', 100, 83, 17),
(39, '40222671_1-sprite-soft-drink-lime-flavoured.webp', 'Sprite-lime-flovour', 'Snacks', 100, 97, 3),
(40, '40222670_1-thums-up-soft-drink.webp', 'Thumbs-up', 'Snacks', 90, 83, 8),
(41, '40164541_10-glucon-d-glucose-based-beverage-mix-orange.webp', 'Glucon-d', 'Snacks', 80, 54, 33),
(42, '40019371_30-bournvita-chocolate-health-drink-bournvita.webp', 'Bournvita', 'Snacks', 170, 144, 15),
(43, '40240474_4-fresho-desi-rohu-fish-steak-fresh-juicy-marinated-ready-to-cook.webp', 'Roshu-fish-steak', 'Meat', 416, 216, 48),
(44, '40231664_3-fresho-lush-hariyali-chicken-tikka-juicy-fresh.webp', 'Hariyal-chicken', 'Meat', 450, 316, 30),
(45, '40231679_3-fresho-creamy-afghani-chicken-tikka-juicy-fresh.webp', 'Afgani-chicken', 'Meat', 400, 380, 5),
(46, '40231722_2-fresho-barbeque-pepper-chicken-cubes-juicy-fresh.webp', 'Barbique-chicken-cubes', 'Meat', 500, 477, 5),
(47, '1202519_1-bb-combo-fresho-meat-chicken-drumstick-without-skin-1-kg-coca-cola-soft-drink-300-ml.webp', 'Combo-chicken-drumsticks', 'Meat', 480, 399, 17),
(49, '40227232_1-el-dina-chicken-meat-loaf-original-gluten-free.webp', 'Chicken-meat-loaf', 'Meat', 411, 366, 11),
(50, '126906_9-aashirvaad-atta-whole-wheat.webp', 'Ashirvad-Whole wheat', 'Daily Staples', 370, 255, 31),
(51, '1213921_1-bb-royal-maida.webp', 'bb-royal-mida', 'Daily Staples', 255, 211, 17),
(52, '40075895_5-bb-royal-sona-masoori-rice-raw-rice-super-premium.webp', 'Masoori-rice', 'Daily Staples', 1000, 899, 10),
(53, '220612_2-india-gate-basmati-rice-dubar.webp', 'India-Gate Basmathi rice', 'Daily Staples', 400, 321, 20),
(54, '1228371_1-fortune-sun-lite-refined-sunflower-oil.webp', 'Fortune-lite Sunflower Oil', 'Daily Staples', 130, 99, 24),
(55, '40311587_3-tata-simply-better-100-pure-unrefined-cold-pressed-groundnut-oil.webp', 'Peanut Oil', 'Daily Staples', 55, 29, 47),
(56, '241600_7-tata-salt-iodized.webp', 'Tata Salt', 'Daily Staples', 55, 26, 53),
(57, '40214887_2-parrys-white-label-sugar.webp', 'Sugar', 'Daily Staples', 35, 23, 34),
(58, '40162377_5-palmolive-feel-the-massage-shower-gel.webp', 'Shower Gel', 'Hygiene', 130, 111, 15),
(59, '40043564_6-cinthol-health-plus-bathing-soap-with-intense-deo-fragrance-germ-protection.webp', 'Cintol-soap', 'Hygiene', 30, 20, 33),
(60, '40223274_1-aramusk-charcoal-soap-with-999-germ-protection-for-men.webp', 'Charcole-soap', 'Hygiene', 91, 50, 45),
(61, '40020805_4-himalaya-baby-shampoo-gentle-baby.webp', 'Baby Shampoo', 'Hygiene', 88, 71, 19),
(62, '40313339_1-littles-baby-diaper-pants-premium-jumbo-xl-wetness-indicator-12-hours-absorption-cotton-soft.webp', 'Baby-dipher', 'Hygiene', 200, 190, 5),
(63, '1208793_4-axe-dark-temptation-deodorant.webp', 'Axe-perfume', 'Hygiene', 400, 288, 28),
(64, '1208457_5-clean-clear-foaming-face-wash-oil-free.webp', 'Clear-foam-fasewash', 'Hygiene', 80, 79, 1),
(65, '40112231_1-bigbasket-wet-wipes-citrus.webp', 'Wet-wipes', 'Hygiene', 100, 60, 40),
(66, '40202555_7-harpic-power-plus-disinfectant-toilet-cleaner.webp', 'Harpic-disinfactant', 'Household', 170, 140, 18),
(67, '1208843_9-harpic-disinfectant-bathroom-cleaner-liquid-lemon.webp', 'Harpic-Bathroom Cleaner', 'Household', 190, 140, 26),
(68, '40056692_6-nimyle-floor-cleaner-herbal.webp', 'Floor-Cleaner', 'Household', 500, 388, 22),
(69, '1226401_1-colin-glass-multisurface-cleaner-liquid-spray-lemon-burst.webp', 'Glass Cleaner', 'Household', 220, 199, 10),
(70, '40171082_9-surf-excel-matic-front-load-detergent-powder.webp', 'Surf exal-matic ', 'Household', 70, 66, 6),
(71, '269397_15-comfort-after-wash-lily-fresh-fabric-conditioner.webp', 'Comfort Cloth Wash', 'Household', 91, 77, 15),
(72, '40138336_3-odonil-air-freshener-zipper-super-saver.webp', 'Odonil-air freshner', 'Household', 150, 144, 4),
(73, '40173107_5-bb-home-naphthalene-balls.webp', 'Naphtlene Balls', 'Household', 80, 78, 3),
(74, '40149833_1-nandini-shubham-milk.webp', 'Nandini-Milk', 'Dairy Products', 30, 22, 27),
(75, '40149830_1-nandini-curd.webp', 'Nandini-Curd', 'Dairy Products', 35, 25, 29),
(76, '40161680_4-fresho-pure-cow-desi-ghee.webp', 'Fresh-cow-ghee', 'Dairy Products', 58, 42, 28),
(77, '40191706_2-amul-diced-cheese-blend.webp', 'Amul Diced-Cheese', 'Dairy Products', 110, 99, 10),
(78, '40096747_8-amul-malai-fresh-paneer.webp', 'Amul Malai-Paneer', 'Dairy Products', 100, 90, 10),
(79, '40020214_12-nestle-everyday-dairy-whitener-milk-powder-for-tea.webp', 'Powder Tea', 'Dairy Products', 20, 11, 45),
(80, '1217067_2-nandini-goodlife-toned-milk.webp', 'Nandini Pasturised-Milk', 'Dairy Products', 40, 33, 18),
(81, '1202759_3-amul-butter-pasteurized.webp', 'Amul Pasturised-Butter', 'Dairy Products', 50, 41, 18),
(82, '1200002_9-amul-masti-buttermilk-spice.webp', 'Amul Butter-Milk', 'Dairy Products', 20, 15, 25),
(83, '102871_11-red-label-tea.webp', 'Red-Label Tea', 'Snacks', 440, 257, 42),
(84, '266564_11-taj-mahal-tea.webp', 'Taj Mahal-Tea', 'Snacks', 466, 333, 29),
(85, '290185_15-bru-gold-instant-coffee-100-pure-authentic-taste.webp', 'Bru-Instant Coffee', 'Snacks', 450, 338, 25),
(86, '40242272_1-dove-deep-moisture-body-wash-nutrium-moisture-100-gentle-cleanser.webp', 'Dove-Moisturiser', 'Hygiene', 230, 147, 36),
(87, '40234007_3-lux-soft-skin-body-wash-french-rose-almond-oil-for-soft-skin.webp', 'Lux-Body wash', 'Hygiene', 300, 249, 17),
(88, '281397_7-domex-disinfectant-floor-cleaner.webp', 'Domex-Floor Cleaner', 'Household', 310, 298, 4),
(89, '1215964_2-domex-fresh-guard-disinfectant-toilet-cleaner-liquid-ocean-fresh.webp', 'Domex-Disinfactant', 'Household', 360, 310, 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `username`, `password`) VALUES
(1, 'abh@gmail.com', 9999999995, 'ABHI', '12345'),
(2, 'lily@gmail.com', 1111111111, 'lily', '12345'),
(4, 'nan@gmail.com', 7777777777, 'Danny', '1234567'),
(5, 'iucdw', 7777777777, 'Danny', '12345'),
(6, 'dny@gmail.com', 4444444444, 'dan', '123456'),
(7, 'tfcvs', 7777777777, 'mkjx', '1234567'),
(8, 'naan@gmail.com', 3333333333, 'luna', '1234567'),
(47, 'nn@gmail.com', 1231231234, 'lora', '1234567'),
(48, 'nan@gmail.com', 4165, 'ewd', 'qdwbj'),
(49, 'dc', 51, 'dc', '651'),
(50, 'iucdw', 65, 'iu', 'nhjl'),
(51, 'iucdw', 5465515555, 'bihyf f', 'frh');

-- --------------------------------------------------------

--
-- Table structure for table `user_coupons`
--

CREATE TABLE `user_coupons` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `coupons` varchar(225) NOT NULL,
  `coupon_img` varchar(225) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_coupons`
--

INSERT INTO `user_coupons` (`id`, `user_id`, `coupons`, `coupon_img`, `status`) VALUES
(1, 1, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(2, 1, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(3, 1, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 1),
(4, 1, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(5, 6, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(6, 6, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(7, 6, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(8, 6, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(9, 7, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(10, 7, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(11, 7, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(12, 7, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(13, 8, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 1),
(14, 8, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(15, 8, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(16, 8, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(17, 9, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(18, 9, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(19, 10, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(20, 10, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(21, 11, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(22, 11, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(23, 12, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(24, 12, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(25, 13, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(26, 13, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(27, 14, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(28, 14, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(29, 15, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(30, 15, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(31, 16, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(32, 16, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(33, 17, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(34, 17, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(35, 18, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(36, 18, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(37, 19, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(38, 19, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(39, 20, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(40, 20, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(41, 21, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(42, 21, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(43, 22, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(44, 22, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(45, 23, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(46, 23, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(47, 24, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(48, 24, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(49, 25, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(50, 25, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(51, 26, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(52, 26, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(53, 27, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(54, 27, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(55, 29, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(56, 29, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(57, 30, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(58, 30, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(59, 31, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(60, 31, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(61, 32, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(62, 32, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(63, 34, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(64, 34, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(65, 35, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(66, 35, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(67, 36, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(68, 36, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(69, 37, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(70, 37, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(71, 38, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(72, 38, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(73, 39, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(74, 39, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(75, 39, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(76, 39, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(77, 39, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(78, 39, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(79, 42, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(80, 42, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(81, 43, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(82, 43, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(83, 44, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(84, 44, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(85, 45, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(86, 45, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(87, 46, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(88, 46, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(89, 47, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(90, 47, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 1),
(91, 47, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(92, 47, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(93, 48, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 1),
(94, 48, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(95, 48, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(96, 48, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(97, 49, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(98, 49, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(99, 50, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 1),
(100, 50, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 1),
(101, 50, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(102, 50, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0),
(103, 51, '980KLJJK', 't1_hp_aff_m_neucard_010624.webp', 0),
(104, 51, '233ERT56', 't1_hp_aff_m_citidc_010624.webp', 0),
(105, 51, 'ADDCC323', '1533286101154-4674e6f6-7505-4eb7-a501-4ddd2c6ec7cf-image.png', 0),
(106, 51, '980K11JJ', 't1_hp_aff_m_deutsche_010624.webp', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_coupons`
--
ALTER TABLE `user_coupons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_coupons`
--
ALTER TABLE `user_coupons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
