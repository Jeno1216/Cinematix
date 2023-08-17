-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 03:16 AM
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
-- Database: `cinematix`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_admin`
--

CREATE TABLE `cinematix_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_admin`
--

INSERT INTO `cinematix_admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Frank Elijorde', 'frank.elijorde@wvsu.edu.ph', 'frankelijorde123');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_bookings`
--

CREATE TABLE `cinematix_bookings` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(256) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `booking_status` varchar(20) NOT NULL DEFAULT 'pending',
  `id_photo` varchar(256) NOT NULL,
  `day` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `time` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_bookings`
--

INSERT INTO `cinematix_bookings` (`booking_id`, `user_id`, `movie_id`, `movie_name`, `lname`, `fname`, `email`, `booking_status`, `id_photo`, `day`, `date`, `month`, `time`) VALUES
(93, 0, 1, 'The Little Mermaid', 'asda', 'sdad', 'jenodorobellido16@gmail.com', 'declined', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(94, 0, 1, 'The Little Mermaid', 'asda', 'sdad', 'jenodorobellido16@gmail.com', 'approved', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(95, 0, 1, 'The Little Mermaid', 'asda', 'sdad', 'jenodorobellido16@gmail.com', 'pending', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(96, 0, 2, 'Dungeons and Dragons', 'BBBBBBBBBBB', 'AAAAAAAAAA', 'jenodorobellido16@gmail.com', 'pending', 'default_profile_picture.jpg', 'Saturday', '10', 'August', ''),
(97, 0, 1, 'The Little Mermaid', 'what', 'the fuck', 'jenodorobellido16@gmail.com', 'pending', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(98, 0, 1, 'The Little Mermaid', 'what', 'the fuck', 'jenodorobellido16@gmail.com', 'pending', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(99, 0, 1, 'The Little Mermaid', 'asda', 'sdad', 'jenodorobellido16@gmail.com', 'pending', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(100, 0, 1, 'The Little Mermaid', 'asda', 'sdad', 'jenodorobellido16@gmail.com', 'pending', 'default_profile_picture.jpg', 'Tuesday', '29', 'July', ''),
(104, 16, 1, 'The Little Mermaid', 'Jeno', 'Gago', 'jeno.bellido@wvsu.edu.ph', 'pending', '356936671_1950084922044987_8927194094107994971_n.jpg', 'Tuesday', '29', 'July', ''),
(105, 16, 1, 'The Little Mermaid', 'we', 'we', 'we@we', 'pending', 'Lingua (1).png', 'Tuesday', '29', 'July', '9:30 PM'),
(106, 16, 3, 'Fantastic Beasts: The Secrets of Dumbledore', '12', '12', '12@12', 'approved', 'English Score.png', 'Sunday', '12', 'August', '9:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_coming_soon`
--

CREATE TABLE `cinematix_coming_soon` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `img_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_coming_soon`
--

INSERT INTO `cinematix_coming_soon` (`id`, `title`, `img_url`) VALUES
(2, 'Meg 2: The Trench', 'https://static-sg.winudf.com/video/image/198b4aa7-7b38-4a59-8e88-17c752ed5099.jpg'),
(6, '11', 'https://static-sg.winudf.com/video/image/198b4aa7-7b38-4a59-8e88-17c752ed5099.jpg'),
(9, '11', '11'),
(12, '123', '123'),
(13, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_dates`
--

CREATE TABLE `cinematix_dates` (
  `schedule_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_dates`
--

INSERT INTO `cinematix_dates` (`schedule_id`, `movie_id`, `day`, `date`, `month`) VALUES
(1, 1, 'Tuesday', '29', 'July'),
(3, 1, 'Wednesday', '30', 'July'),
(6, 3, 'Sunday', '12', 'August'),
(7, 4, 'Monday', '30', 'August'),
(8, 5, 'Friday', '12', 'August'),
(10, 1, 'Thursday', '31', 'July'),
(11, 1, 'Friday', '1', 'August'),
(12, 1, 'Saturday', '2', 'August'),
(13, 1, 'Sunday', '3', 'August'),
(14, 1, 'Monday', '4', 'August');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_featured`
--

CREATE TABLE `cinematix_featured` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `img_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_featured`
--

INSERT INTO `cinematix_featured` (`id`, `title`, `genre`, `img_url`) VALUES
(1, 'Transformers: Rise of the Beasts', 'Action ', 'https://i0.wp.com/onemoregame.ph/wp-content/uploads/2023/04/transformers-rise-of-the-beasts-poster-crop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_now_showing`
--

CREATE TABLE `cinematix_now_showing` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `time` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `img_url` varchar(256) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_now_showing`
--

INSERT INTO `cinematix_now_showing` (`movie_id`, `title`, `time`, `rating`, `img_url`, `genre`) VALUES
(1, 'The Little Mermaid', '112', '7.6', 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/The_Little_Mermaid_%282023_film%29.png/220px-The_Little_Mermaid_%282023_film%29.png', 'Action'),
(3, 'Fantastic Beasts: The Secrets of Dumbledore', '115', '10.0', 'https://images.ctfassets.net/usf1vwtuqyxm/1soIBawzwa52bYit498iYy/8b67c35d5116f96c187e8ba27f4cc264/fb3-poster-jude-law-full.jpg', 'Action'),
(4, 'Hunger', '90', '5.5', 'https://m.media-amazon.com/images/M/MV5BZWUwOWU2NmMtYzc2Zi00MTMyLTg2NTUtZGM4Nzg2MGQyOGJkXkEyXkFqcGdeQXVyMTMzNzIyNDc1._V1_FMjpg_UX1000_.jpg', 'Action'),
(5, 'Missing', '98', '6.9', 'https://m.media-amazon.com/images/M/MV5BM2Q5ODdmOGEtMThiMS00MjM3LWJkZjYtN2ZlNGI0ZGQxOTdjXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg', 'Action'),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, 'Gago', 'Kaba', 'HUH', '', '12'),
(16, 'Gago', 'Kaba', 'HUH', '', '12'),
(17, 'Gago', 'Kaba', 'HUH', '', '12'),
(18, 'Gago', 'Kaba', 'HUH', '', '12'),
(19, 'Gago', 'Kaba', 'HUH', '', '12'),
(20, 'Gago', 'Kaba', '', '123', '12'),
(21, 'Gago', 'Kaba', '', '123', '12'),
(22, 'Gago', 'Kaba', '', '123', '12');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_time`
--

CREATE TABLE `cinematix_time` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_time`
--

INSERT INTO `cinematix_time` (`id`, `schedule_id`, `time`) VALUES
(1, 1, '9:30 PM'),
(2, 1, '10:30 PM'),
(3, 3, '2:30 PM'),
(5, 6, '9:30 PM'),
(6, 7, '10:00 AM'),
(7, 8, '12:00 AM'),
(9, 1, '4:30 PM'),
(10, 1, '6:30 PM'),
(11, 1, '8:30 PM'),
(12, 1, '10:30 PM'),
(13, 1, '10:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `cinematix_user`
--

CREATE TABLE `cinematix_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `profile_picture` varchar(256) NOT NULL DEFAULT 'default_profile_picture'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinematix_user`
--

INSERT INTO `cinematix_user` (`id`, `name`, `email`, `password`, `cpassword`, `profile_picture`) VALUES
(15, 'adad', 'asda@Wreds', 'asasa', 'sasa', 'default_profile_picture.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinematix_admin`
--
ALTER TABLE `cinematix_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinematix_bookings`
--
ALTER TABLE `cinematix_bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `cinematix_coming_soon`
--
ALTER TABLE `cinematix_coming_soon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinematix_dates`
--
ALTER TABLE `cinematix_dates`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `cinematix_featured`
--
ALTER TABLE `cinematix_featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinematix_now_showing`
--
ALTER TABLE `cinematix_now_showing`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `cinematix_time`
--
ALTER TABLE `cinematix_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date_id` (`schedule_id`);

--
-- Indexes for table `cinematix_user`
--
ALTER TABLE `cinematix_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinematix_admin`
--
ALTER TABLE `cinematix_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cinematix_bookings`
--
ALTER TABLE `cinematix_bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `cinematix_coming_soon`
--
ALTER TABLE `cinematix_coming_soon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cinematix_dates`
--
ALTER TABLE `cinematix_dates`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cinematix_featured`
--
ALTER TABLE `cinematix_featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cinematix_now_showing`
--
ALTER TABLE `cinematix_now_showing`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cinematix_time`
--
ALTER TABLE `cinematix_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cinematix_user`
--
ALTER TABLE `cinematix_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cinematix_dates`
--
ALTER TABLE `cinematix_dates`
  ADD CONSTRAINT `cinematix_dates_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `cinematix_now_showing` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cinematix_time`
--
ALTER TABLE `cinematix_time`
  ADD CONSTRAINT `cinematix_time_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `cinematix_dates` (`schedule_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
