-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 06:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `response`) VALUES
(1, '{\"name\":\"Priyanka Rawat\",\"email\":\"priyankarawat6250@gmail.com\",\"description\":\"Lorem ipsum dolor sit amet. Ut nemo doloremque qui animi quia cum ipsam odio rem tempora aperiam. Eum aperiam dolorem sit voluptatem optio et magnam incidunt et blanditiis quaerat est eius mollitia non consectetur omnis. Et veritatis minima et dolor voluptas sed quis corporis eos nostrum expedita est autem vitae vel minima nihil!\",\"file\":\"files/dummy.pdf\"}'),
(2, '{\"name\":\"Priyanka Rawat\",\"email\":\"priyankarawat6250@gmail.com\",\"description\":\"Lorem ipsum dolor sit amet. Ut nemo doloremque qui animi quia cum ipsam odio rem tempora aperiam. Eum aperiam dolorem sit voluptatem optio et magnam incidunt et blanditiis quaerat est eius mollitia non consectetur omnis. Et veritatis minima et dolor voluptas sed quis corporis eos nostrum expedita est autem vitae vel minima nihil!\",\"file\":\"files/dummy_1.pdf\"}'),
(3, '{\"name\":\"Priyanka Rawat\",\"email\":\"priyankarawat6250@gmail.com\",\"description\":\"Lorem ipsum dolor sit amet. Ut nemo doloremque qui animi quia cum ipsam odio rem tempora aperiam. Eum aperiam dolorem sit voluptatem optio et magnam incidunt et blanditiis quaerat est eius mollitia non consectetur omnis. Et veritatis minima et dolor voluptas sed quis corporis eos nostrum expedita est autem vitae vel minima nihil!\",\"file\":\"files/dummy_2.pdf\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
