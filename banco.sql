-- SQL DO SISTEMA
-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Abr-2018 às 01:05
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat` varchar(500) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `date_msg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`id`, `room_id`, `user_id`, `chat`, `user_name`, `date_msg`) VALUES
(43, 2, 1, 'oi', 'Dieison', NULL),
(47, 2, 1, 'kl', 'Dieison', NULL),
(48, 2, 1, 'jjjjjj', 'Dieison', NULL),
(50, 2, 1, 'sdas', 'Dieison', NULL),
(57, 2, 1, 'asdsa', 'Dieison', NULL),
(58, 2, 1, 'sd', 'Dieison', NULL),
(59, 2, 1, 'alooouu', 'Dieison', NULL),
(60, 2, 1, 'kkkkkkkk', 'Dieison', NULL),
(62, 2, 1, 'asasasas', 'Dieison', NULL),
(66, 2, 1, 'asfasdfsdf', 'Dieison', NULL),
(67, 2, 1, 'sadfasdf', 'Dieison', NULL),
(68, 2, 1, 'eeeeeeeeeee', 'Dieison', NULL),
(69, 2, 1, 'alou', 'Dieison', NULL),
(70, 2, 1, 'waetwer', 'Dieison', NULL),
(71, 2, 1, '', 'Dieison', NULL),
(72, 2, 1, 'waf', 'Dieison', NULL),
(73, 2, 1, 'wawd', 'Dieison', NULL),
(74, 2, 1, 'asd', 'Dieison', NULL),
(75, 2, 1, 'alou', 'Dieison', NULL),
(76, 2, 1, 'to te ligando', 'Dieison', NULL),
(77, 2, 1, 'pra saber como você está', 'Dieison', NULL),
(78, 2, 1, 'está louco e por isso resolvi ligar', 'Dieison', NULL),
(79, 2, 1, 'pra contar que sonhei com você', 'Dieison', NULL),
(80, 2, 1, 'ASD', 'Dieison', NULL),
(81, 2, 1, 'ASD', 'Dieison', NULL),
(82, 2, 1, 'UFA', 'Dieison', NULL),
(83, 2, 1, 'sadf', 'Dieison', NULL),
(84, 2, 1, 'sadsa', 'Dieison', NULL),
(85, 2, 1, 'sad', 'Dieison', NULL),
(86, 2, 1, 'asd', 'Dieison', NULL),
(87, 1, 1, 'olá', 'Dieison', NULL),
(88, 1, 1, 'hello', 'Dieison', NULL),
(89, 1, 1, 'ta funcionando ai? aqui ta funcionando[', 'Dieison', NULL),
(90, 1, 1, 'sdafasd', 'Dieison', NULL),
(91, 1, 1, 'iasjai', 'Dieison', NULL),
(92, 1, 1, 'asfdasfsd', 'Dieison', NULL),
(93, 3, 1, 'hello', 'Dieison', NULL),
(94, 3, 1, 'as', 'Dieison', NULL),
(95, 3, 1, 'tudo bem?', 'Dieison', NULL),
(96, 3, 1, 'sim', 'Dieison', NULL),
(97, 3, 1, 'e por aí?', 'Dieison', NULL),
(98, 3, 1, 'acho que sim', 'Dieison', NULL),
(99, 3, 1, 'kkk', 'Dieison', NULL),
(100, 3, 1, 'aaaa', 'Dieison', '2018-04-07 00:00:00'),
(101, 3, 1, 'OIII', 'Dieison', '2018-04-07 00:00:00'),
(102, 2, 1, 'asa', 'Dieison', '2018-04-17 00:00:00'),
(103, 2, 1, 'dsd', 'Dieison', '2018-04-17 00:00:00'),
(104, 2, 1, 'sdf', 'Dieison', '2018-04-17 00:00:00'),
(105, 2, 1, 'kk', 'Dieison', '2018-04-17 20:02:56'),
(106, 2, 1, 'ola', 'Dieison', '2018-04-17 20:03:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `minimum_age` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `description`, `minimum_age`) VALUES
(1, 'tets', 'asdasda', 15),
(2, 'developers', 'just for developers', 18),
(3, 'PUBG', 'Just players that playing pubg', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'Dieison', ''),
(2, 'Felipe', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_rooms`
--

CREATE TABLE `users_rooms` (
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date_enter` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_rooms`
--

INSERT INTO `users_rooms` (`user_id`, `room_id`, `date_enter`) VALUES
(1, 1, '2018-04-17 20:03:34'),
(1, 2, '2018-04-17 20:03:48'),
(1, 3, '2018-04-07 00:00:00'),
(2, 2, '2018-04-07 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`,`room_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_rooms`
--
ALTER TABLE `users_rooms`
  ADD PRIMARY KEY (`user_id`,`room_id`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Limitadores para a tabela `users_rooms`
--
ALTER TABLE `users_rooms`
  ADD CONSTRAINT `users_rooms_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_rooms_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
