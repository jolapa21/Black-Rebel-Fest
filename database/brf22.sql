-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 07:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brf`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `username`, `jenis`, `jumlah`) VALUES
(23, 'isaac', 'gold', 'tiga'),
(24, 'isaac', 'bronze', 'tiga'),
(25, 'isaac', 'silver', 'tiga'),
(26, 'isaac2', 'gold', 'satu'),
(27, 'isaac4', 'gold', 'satu'),
(28, 'isaac4', 'silver', 'satu'),
(29, 'isaac4', 'bronze', 'satu'),
(30, 'treyu', 'bronze', 'dua'),
(31, 'treyu', 'gold', 'satu'),
(32, 'treyu', 'bronze', 'tiga');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'isaac', '$2y$10$Nq39ZlxwAWAYz8ePlj7kAedW8bOMYrc2GrbfHnMhDWP3CejolHNjy'),
(3, 'isaac2', '$2y$10$RXKj.38jBi3lBIYEHXszQ.CYjyKEaqNr3XFBUKW4CnBnE5TAfGMjK'),
(4, 'isaac3', '$2y$10$k9rfPb6vgXgirgGGzVAL0OhxYmpENziseSIOhwT1o5koS2ZYWH2nG'),
(5, 'isaac4', '$2y$10$rkq2/PrRTgSg8TeiK6pEueIf83jilb1yk0g6i6z.PSfA70n2Nb48K'),
(8, 'ayam', '$2y$10$gp.rIc7461DVSC.4bMozLeZgHrZX7KLI158yO.IcRMufDASBh6Zt2'),
(9, 'ayam2', '$2y$10$da6N9kXTuVmXsQfh5qal0.ipyDqeFfL5W.YeUdhFFSg0XAAb.nJiS'),
(10, 'treyu', '$2y$10$WONJdOHNDaB5w5xPE/.hwuUDQbiHCE6gHcxUgPsOm6Vu98aeDO0OW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
