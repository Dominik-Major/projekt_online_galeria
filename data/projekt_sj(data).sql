-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 15.Jún 2026, 10:15
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `projekt_sj`
--

--
-- Sťahujem dáta pre tabuľku `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'dominik major', 'dominik@gmial.com', 'helo', '2026-06-14 15:07:49');

--
-- Sťahujem dáta pre tabuľku `gear_items`
--

INSERT INTO `gear_items` (`id`, `title`, `category`, `description`, `image`) VALUES
(1, 'Nikon D3300', 'Camera 1 & Kit', 'Beginner DSLR camera perfect for starting out with a wide variety of lenses for offer.', 'body_1.png'),
(2, 'Nikon 18-55 mm f/3,5-5,6 G AF-P DX VR', 'Camera 1 & Kit', 'A kit lens that is a budget option for begginers.', 'lens_1.webp'),
(3, 'Sony Alpha A6100', 'Camera 2 & Kit', 'APS-C mirrorless camera. A considerable upgrade for more serious work', 'body_2.webp'),
(4, 'Sony E PZ 16-50mm f/3.5-5.6 OSS', 'Camera 2 & Kit', 'Kit lens offering a wide range of focal length.', 'lens_3.jpg'),
(5, 'Hama STAR 61', 'Extras', 'Entry level tripod for specific shots.', 'extra_1.webp'),
(6, 'Iphone 15', 'Extras', 'Always useful for editing pictures or taking them with the phone when nothing else is available', 'Extra_3.webp');

--
-- Sťahujem dáta pre tabuľku `images`
--

INSERT INTO `images` (`id`, `category`, `filename`) VALUES
(1, 'events', 'image_20.jpg'),
(2, 'events', 'image_21.jpg'),
(3, 'events', 'image_22.jpg'),
(4, 'events', 'image_23.jpg'),
(5, 'events', 'image_24.jpg'),
(6, 'events', 'image_25.jpg'),
(7, 'events', 'image_26.jpg'),
(8, 'events', 'image_27.jpg'),
(9, 'events', 'image_28.jpg'),
(10, 'events', 'image_29.jpg'),
(11, 'events', 'image_30.jpg'),
(12, 'events', 'image_31.jpg'),
(13, 'events', 'image_32.jpg'),
(14, 'events', 'image_39.jpg'),
(15, 'events', 'image_40.jpg'),
(16, 'events', 'image_41.jpg'),
(17, 'events', 'image_43.jpg'),
(18, 'events', 'img_69de5b51893fc0.98695270.jpg'),
(19, 'nature', 'image_19.jpg'),
(20, 'nature', 'image_34.jpg'),
(21, 'nature', 'image_35.jpg'),
(22, 'nature', 'image_36.jpg'),
(23, 'nature', 'image_37.jpg'),
(24, 'nature', 'image_38.jpg'),
(25, 'nature', 'image_42.jpg'),
(26, 'nature', 'image_44.jpg'),
(27, 'street', 'image_1.jpg'),
(28, 'street', 'image_10.jpg'),
(29, 'street', 'image_11.jpg'),
(30, 'street', 'image_12.jpg'),
(31, 'street', 'image_13.jpg'),
(32, 'street', 'image_14.jpg'),
(33, 'street', 'image_15.jpg'),
(34, 'street', 'image_16.jpg'),
(35, 'street', 'image_17.jpg'),
(36, 'street', 'image_18.jpg'),
(37, 'street', 'image_2.jpg'),
(38, 'street', 'image_3.jpg'),
(39, 'street', 'image_33.jpg'),
(40, 'street', 'image_4.jpg'),
(41, 'street', 'image_45.jpg'),
(42, 'street', 'image_46.jpg'),
(43, 'street', 'image_5.jpg'),
(44, 'street', 'image_6.jpg'),
(45, 'street', 'image_7.jpg'),
(46, 'street', 'image_8.jpg'),
(47, 'street', 'image_9.jpg'),
(48, 'street', 'img_69de5b2bbd2f03.89865330.jpg');

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$F2AVrkh9eJlgI/aHF37KUunre4s2.hyWUj5aNZA3BMPdgBHygDMyS', 'admin'),
(2, 'dominik', '$2y$10$/ZIkMY/5yKpK2.nu4pJ5COmPip37ClBqdt3xjz01FTpwabWcEEeTS', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
