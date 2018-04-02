-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Abr-2018 às 21:20
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quadro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `direcao`
--

CREATE TABLE `direcao` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `direcao`
--

INSERT INTO `direcao` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Usuário 1', 'user1@user.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858'),
(2, 'Usuário 2', 'user2@user.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858'),
(3, 'Usuário 3', 'user3@user.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858'),
(4, 'Usuário 4', 'root@root.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858'),
(5, 'Usuário 5', 'root@gmail.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858'),
(6, 'Usuário 6', 'rosa@rosa.com', '83353d597cbad458989f2b1a5c1fa1f9f665c858');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `direcao`
--
ALTER TABLE `direcao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `direcao`
--
ALTER TABLE `direcao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
