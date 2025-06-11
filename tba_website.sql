-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Generation Time: Jun 11, 2025 at 12:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tba_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(1, 'Tiara', 'Nilam', 'tiaranilam1178@gmail.com', '085632772890', 'i love u gusy'),
(2, 'Salsabilla', 'zennith', 'salsabilasyifa117@gmail.com', '084329752370', 'xixixi i love u too'),
(3, 'Nanda', 'Rizky', 'nandarzky11@gmail.com', '084329752370', 'hihihihi'),
(4, 'Nanda', 'Rizky', 'nandarzky11@gmail.com', '084329752370', 'adkjshahsoadko'),
(5, 'Narendra ', 'Fahrezi', 'narendrafatin1407@gmail.com', '084329752370', 'love tiaya'),
(6, 'Tiara', 'Nilam', 'tiaranilam1178@gmail.com', '085632772890', 'adnamd,msadkjdljadsl'),
(7, 'Tiara', 'Nilam', 'tiaranilam1178@gmail.com', '085632757382', 'love u'),
(8, 'Tiara', 'Nilam', 'tiaranilam1178@gmail.com', '0832974027032', 'hadshadhk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'tiara', 'tiaranilam1178@gmail.com', 'surakarta11'),
(2, '', '', '$2y$10$g.jV24U3TxIlTwhGZsyuYejO5GpznXstbEREKATpQjzqW1EK0qxby'),
(3, 'tiara', 'tiaranilam11078@gmail.com', '$2y$10$7G5WqFIs7ElC4zhZs8hdn.EvBhiXDvQKxtLuSthNhsJDLykdZ6Gpq'),
(4, 'zennith', 'salsabilasyifa118@gmail.com', '$2y$10$3O.0v/u5cH6B2IqILsquiOFbpF8g8/aoHoYJlTESU72PEP4Vkwif2'),
(5, 'nandul', 'nandarisky123@gmail.com', '$2y$10$zaZBS3gRVjWjo5C3.WUJVePrXjHTUVR.B4bQ/ggTZKbI.vVRCXczq'),
(6, 'athallah', 'muhattallah118@gmail.com', '$2y$10$UrtM63LU2TuMUJAH7zbSB.At.KlGoI1cuGML6QiwH6FJ7wOdHkTGG'),
(7, 'nandul', 'nandarizky111@gmail.com', '$2y$10$Ct4HB0XElZCzD9mjopUMlulqk98g1B/eDzkdP/Sr4DrfF9Xg/GQM2'),
(8, 'Salsabila Syifa', 'salsabilasyifa117@gmail.com', '$2y$10$jk0vHduDFpZYPUY8hDBH3e/DYHR22CtB2XDp3Hh1G68BMjxqtJxBS'),
(9, 'Zennitti ', 'as.zennitti@gmail.com', '$2y$10$bLYdCSGLKgLulln4BBGI/uZUTpeyG2uwORcGBoamRvNbfRKNYNj0q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
