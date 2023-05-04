-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 08:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `lname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `avatar` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `avatar`) VALUES
(1, 'Karn', 'Yong', 'karn.yong@melivecode.com', 'https://www.melivecode.com/users/1.png'),
(2, 'Ivy', 'Cal', 'ivy.cal@melivecode.com', 'https://www.melivecode.com/users/2.png'),
(3, 'Walter', 'Beau', 'walter.beau@melivecode.com', 'https://www.melivecode.com/users/3.png'),
(4, 'Gayla', 'Bertrand', 'gayla.bertrand@melivecode.com', 'https://www.melivecode.com/users/4.png'),
(5, 'Benjamin', 'Chaz', 'benjamin.chaz@melivecode.com', 'https://www.melivecode.com/users/5.png'),
(6, 'Delia', 'Robin', 'delia.robin@melivecode.com', 'https://www.melivecode.com/users/6.png'),
(7, 'Hector', 'Graves', 'hector.graves@melivecode.com', 'https://www.melivecode.com/users/7.png'),
(8, 'Diego', 'Greene', 'diego.greene@melivecode.com', 'https://www.melivecode.com/users/8.png'),
(9, 'Izzie', 'Mooney', 'izzie.mooney@melivecode.com', 'https://www.melivecode.com/users/9.png'),
(10, 'Romeo', 'Garner', 'romeo.garner@melivecode.com', 'https://www.melivecode.com/users/10.png'),
(11, 'Adrian', 'Faisal', 'adrian.faisal@melivecode.com', 'https://www.melivecode.com/users/11.png'),
(18, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(19, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(20, 'aaaaaaaa', 'aaaaa', 'aaaaaaal@melivecode.com', 'https://www.melivecode.com/users/2.png'),
(21, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(30, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(31, 'test', 'wan', 'chai', 'https://www.melivecode.com/users/2.png'),
(32, 'test', 'ta', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(33, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(34, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(35, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(36, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(37, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(38, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png'),
(39, 'wanchaloem', 'phromjan', '6240011040@psu.ac.th', 'https://www.melivecode.com/users/2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
