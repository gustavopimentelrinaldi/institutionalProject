-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2018 às 23:31
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
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `acesso` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `email`, `senha`, `acesso`) VALUES
(1, 'User 1', 'user1@user.com', '12dea96fec20593566ab75692c9949596833adc9', 0),
(2, 'User 2', 'user2@user.com', '12dea96fec20593566ab75692c9949596833adc9', 0),
(3, 'User 3', 'user3@user.com', '12dea96fec20593566ab75692c9949596833adc9', 0),
(4, 'User 4', 'user4@user.com', '12dea96fec20593566ab75692c9949596833adc9', 0),
(5, 'user', 'user@user.com', '12dea96fec20593566ab75692c9949596833adc9', 0),
(6, 'usuario', 'usuario@usuario.com', '12dea96fec20593566ab75692c9949596833adc9', 0);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarta`
--

CREATE TABLE `quarta` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `espaco` varchar(3) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `sala` int(11) NOT NULL,
  `professor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quarta`
--

INSERT INTO `quarta` (`id`, `nome`, `turno`, `espaco`, `disciplina`, `sala`, `professor`) VALUES
(1, 'alos', 'NOT', 'P13', 'LTP1', 20, 'dsaddass'),
(2, 'fsdfsd', 'tete', 'das', 'tete', 0, 'tedasdsate'),
(3, 'fsdfsd Social', 'dsadsa', 'das', 'dsadsa', 21, 'dasda'),
(4, 'ffsdds fsds', 'MATdsa', 'dsa', 'Princï¿½pios de Economia', 11, 'Joaozin'),
(5, 'fsdfsd', 'MAT', 'P13', 'dsadsa', 10, 'joao'),
(6, 'sdfsdf', 'NOT', 'P13', 'dasdas dasdsa', 9, 'Joao'),
(7, 'Dirfsdfsdeito', 'NOT', 'P13', 'Direito Constitucional', 9, 'Joao'),
(8, 'dsafsdfsdd', 'dsada', 'P12', 'dsad', 13, 'dsada'),
(9, 'dsadsa', 'dsadsa', 'dsa', 'dsadsad', 0, 'das'),
(11, 'dsad', 'dsadsa', 'caa', 'dsad', 11, 'alo'),
(12, 'dssddssda', 'dsadsa', 'dsa', 'dasdsa', 1, 'dsadas'),
(13, 'dsafdd', 'dasd', 'p10', 'dasd', 11, 'dasdas'),
(14, 'dsad', 'dsadsa', 'dsa', 'sadsa', 0, 'dsadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quinta`
--

CREATE TABLE `quinta` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `espaco` varchar(3) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `sala` int(11) NOT NULL,
  `professor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quinta`
--

INSERT INTO `quinta` (`id`, `nome`, `turno`, `espaco`, `disciplina`, `sala`, `professor`) VALUES
(1, 'alos', 'NOT', 'P13', 'LTP1', 20, 'dsaddass'),
(2, 'fsdfsd', 'tete', 'das', 'tete', 0, 'tedasdsate'),
(3, 'fsdfsd Social', 'dsadsa', 'das', 'dsadsa', 21, 'dasda'),
(4, 'ffsdds fsds', 'MATdsa', 'dsa', 'Princï¿½pios de Economia', 11, 'Joaozin'),
(5, 'fsdfsd', 'MAT', 'P13', 'dsadsa', 10, 'joao'),
(6, 'sdfsdf', 'NOT', 'P13', 'dasdas dasdsa', 9, 'Joao'),
(7, 'Dirfsdfsdeito', 'NOT', 'P13', 'Direito Constitucional', 9, 'Joao'),
(8, 'dsafsdfsdd', 'dsada', 'P12', 'dsad', 13, 'dsada'),
(9, 'dsadsa', 'dsadsa', 'dsa', 'dsadsad', 0, 'das'),
(11, 'dsad', 'dsadsa', 'caa', 'dsad', 11, 'alo'),
(12, 'dssddssda', 'dsadsa', 'dsa', 'dasdsa', 1, 'dsadas'),
(13, 'dsafdd', 'dasd', 'p50', 'dasd', 11, 'dasdas'),
(14, 'dsad', 'dsadsa', 'dsa', 'sadsa', 0, 'dsadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sabado`
--

CREATE TABLE `sabado` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `espaco` varchar(3) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `sala` int(11) NOT NULL,
  `professor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sabado`
--

INSERT INTO `sabado` (`id`, `nome`, `turno`, `espaco`, `disciplina`, `sala`, `professor`) VALUES
(1, 'alos', 'NOT', 'P13', 'LTP1', 20, 'dsaddass'),
(2, 'fsdfsd', 'tete', 'das', 'tete', 0, 'tedasdsate'),
(3, 'fsdfsd Social', 'dsadsa', 'das', 'dsadsa', 21, 'dasda'),
(4, 'ffsdds fsds', 'MATdsa', 'dsa', 'Princï¿½pios de Economia', 11, 'Joaozin'),
(5, 'fsdfsd', 'MAT', 'P13', 'dsadsa', 10, 'joao'),
(6, 'sdfsdf', 'NOT', 'P13', 'dasdas dasdsa', 9, 'Joao'),
(7, 'Dirfsdfsdeito', 'NOT', 'P13', 'Direito Constitucional', 9, 'Joao'),
(8, 'dsafsdfsdd', 'dsada', 'P12', 'dsad', 13, 'dsada'),
(9, 'dsadsa', 'dsadsa', 'dsa', 'dsadsad', 0, 'das'),
(11, 'dsad', 'dsadsa', 'caa', 'dsad', 11, 'alo'),
(12, 'dssddssda', 'dsadsa', 'dsa', 'dasdsa', 1, 'dsadas'),
(13, 'dsafdd', 'dasd', 'p50', 'dasd', 11, 'dasdas'),
(14, 'dsad', 'dsadsa', 'dsa', 'sadsa', 0, 'dsadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `segunda`
--

CREATE TABLE `segunda` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `espaco` varchar(3) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `sala` int(11) NOT NULL,
  `professor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `segunda`
--

INSERT INTO `segunda` (`id`, `nome`, `turno`, `espaco`, `disciplina`, `sala`, `professor`) VALUES
(1, 'alos', 'NOT', 'P13', 'LTP1', 20, 'dsaddass'),
(2, 'tetet', 'tete', 'tet', 'tete', 0, 'tete'),
(3, 'fsdfsd Social', 'dsadsa', 'das', 'dsadsa', 21, 'dasda'),
(4, 'Economia EAD', 'MATdsa', 'P13', 'Princï¿½pios de Economia', 11, 'Joaozin'),
(5, 'fsdfsd', 'MAT', 'P13', 'dsadsa', 10, 'joao'),
(6, 'agorasim', 'valeu', 'p12', '10', 10, '10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sexta`
--

CREATE TABLE `sexta` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `espaco` varchar(3) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `sala` int(11) NOT NULL,
  `professor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sexta`
--

INSERT INTO `sexta` (`id`, `nome`, `turno`, `espaco`, `disciplina`, `sala`, `professor`) VALUES
(1, 'alos', 'NOT', 'P13', 'LTP1', 20, 'dsaddass'),
(2, 'fsdfsd', 'tete', 'das', 'tete', 0, 'tedasdsate'),
(3, 'fsdfsd Social', 'dsadsa', 'das', 'dsadsa', 21, 'dasda'),
(4, 'ffsdds fsds', 'MATdsa', 'dsa', 'Princï¿½pios de Economia', 11, 'Joaozin'),
(5, 'fsdfsd', 'MAT', 'P13', 'dsadsa', 10, 'joao'),
(6, 'sdfsdf', 'NOT', 'P13', 'dasdas dasdsa', 9, 'Joao'),
(7, 'Dirfsdfsdeito', 'NOT', 'P13', 'Direito Constitucional', 9, 'Joao'),
(8, 'dsafsdfsdd', 'dsada', 'P12', 'dsad', 13, 'dsada'),
(9, 'dsadsa', 'dsadsa', 'dsa', 'dsadsad', 0, 'das'),
(11, 'dsad', 'dsadsa', 'caa', 'dsad', 11, 'alo'),
(12, 'dssddssda', 'dsadsa', 'dsa', 'dasdsa', 1, 'dsadas'),
(13, 'dsafdd', 'dasd', 'p50', 'dasd', 11, 'dasdas'),
(14, 'dsad', 'dsadsa', 'dsa', 'sadsa', 0, 'dsadsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `terca`
--

CREATE TABLE `terca` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `espaco` varchar(3) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `sala` int(11) NOT NULL,
  `professor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `terca`
--

INSERT INTO `terca` (`id`, `nome`, `turno`, `espaco`, `disciplina`, `sala`, `professor`) VALUES
(1, 'alos', 'NOT', 'P13', 'LTP1', 20, 'dsaddass'),
(2, 'fsdfsd', 'tete', 'das', 'tete', 0, 'tedasdsate'),
(3, 'fsdfsd Social', 'dsadsa', 'das', 'dsadsa', 21, 'dasda'),
(4, 'ffsdds fsds', 'MATdsa', 'dsa', 'Princï¿½pios de Economia', 11, 'Joaozin'),
(5, 'fsdfsd', 'MAT', 'P13', 'dsadsa', 10, 'joao'),
(7, 'Dirfsdfsdeito', 'NOT', 'P13', 'Direito Constitucional', 9, 'Joao'),
(8, 'dsafsdfsdd', 'dsada', 'P12', 'dsad', 13, 'dsada'),
(9, 'dsadsa', 'dsadsa', 'dsa', 'dsadsad', 0, 'das'),
(11, 'dsad', 'dsadsa', 'caa', 'dsad', 11, 'alo'),
(12, 'dssddssda', 'dsadsa', 'dsa', 'dasdsa', 1, 'dsadas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direcao`
--
ALTER TABLE `direcao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarta`
--
ALTER TABLE `quarta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quinta`
--
ALTER TABLE `quinta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sabado`
--
ALTER TABLE `sabado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `segunda`
--
ALTER TABLE `segunda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sexta`
--
ALTER TABLE `sexta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terca`
--
ALTER TABLE `terca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `direcao`
--
ALTER TABLE `direcao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quarta`
--
ALTER TABLE `quarta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quinta`
--
ALTER TABLE `quinta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sabado`
--
ALTER TABLE `sabado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `segunda`
--
ALTER TABLE `segunda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sexta`
--
ALTER TABLE `sexta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `terca`
--
ALTER TABLE `terca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
