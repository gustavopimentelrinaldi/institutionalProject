-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Abr-2018 às 05:25
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
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `acesso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `direcao`
--

INSERT INTO `direcao` (`id`, `nome`, `email`, `senha`, `acesso`) VALUES
(1, 'Adm 1', 'adm1@adm.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(2, 'Adm 2', 'adm2@adm.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(3, 'Adm 3', 'adm3@adm.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(4, 'Adm 4', 'adm4@adm.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(5, 'root', 'root@root.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(6, 'rosa', 'rosa@rosa.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
