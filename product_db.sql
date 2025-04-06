-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 02:07 AM
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
-- Database: `product_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `list_price` decimal(10,2) NOT NULL,
  `discount_percent` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `product_name`, `description`, `list_price`, `discount_percent`) VALUES
(1, 'PS5', 'Playstation 5 Console', 'Next-gen gaming with ultra-fast SSD and ray tracing.', 499.99, 10.00),
(2, 'xbox_series', 'Xbox Series X Console', 'Powerful 4K gaming with quick resume and game pass.', 499.99, 15.00),
(3, 'switch_oled', 'Nintendo Switch OLED', 'Vivid 7” OLED screen, enhanced audio, and dock.', 349.99, 5.00),
(4, 'elden_ring', 'Elden Ring (PS5)', 'Open-world RPG from the creators of Dark Souls.', 69.99, 20.00),
(5, 'mw3', 'Call of Duty: Modern Warfare 3', 'High-paced FPS with intense campaign and multiplayer.', 69.99, 15.00),
(6, 'dualsense', 'PS5 DualSense Controller', 'Adaptive triggers, haptic feedback, and built-in mic.', 69.99, 10.00),
(7, 'xbox_elite', 'Xbox Elite Wireless Controller', 'Pro-level customization and paddles for elite gamers.', 179.99, 25.00),
(8, 'zelda_totk', 'Zelda: Tears of the Kingdom', 'Epic open-world adventure in Hyrule’s skies and lands.', 69.99, 5.00),
(9, 'steamdeck', 'Steam Deck 512GB', 'Handheld PC gaming powerhouse with SteamOS.', 649.00, 12.00),
(10, 'gta6_pre', 'GTA VI Pre-Order', 'Be among the first to play Rockstar’s latest blockbuster, Grand Theft Auto IV!', 79.99, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
