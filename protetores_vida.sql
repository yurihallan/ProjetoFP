-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 01:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protetores_vida`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(50) NOT NULL,
  `rg` smallint(8) NOT NULL,
  `cpf` smallint(11) NOT NULL,
  `telefone1` int(8) NOT NULL,
  `telefone2` int(8) DEFAULT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` int(4) NOT NULL,
  `complemento` varchar(25) NOT NULL,
  `sexo` set('masculino','feminino') NOT NULL,
  `dependentes` tinyint(1) NOT NULL,
  `qtddependentes` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cadastro`
--

INSERT INTO `cadastro` (`nome`, `rg`, `cpf`, `telefone1`, `telefone2`, `rua`, `numero`, `complemento`, `sexo`, `dependentes`, `qtddependentes`) VALUES
('Maria da Chatisse', 0, 0, 0, NULL, '', 0, '', '', 0, 0),
('Maria', 0, 0, 0, NULL, '', 0, '', '', 0, 0),
('rwe', 32767, 2, 23232, 423, 'tkfo', 42, 'mgdmk', '', 0, 0),
('rwe', 32767, 2, 23232, 423, 'tkfo', 42, 'mgdmk', 'masculino', 0, 0),
('lklk', 5, 898, 767, 677, 'hjuj', 545, 'uy', 'masculino', 1, 6),
('yuri', 32767, 32767, 99273279, 887, 'libertador', 2, 'msjkdjsjd', 'masculino', 1, 2),
('wwwwwwwwwwwww', 32767, 32767, 22222222, 22222222, 'ssssssssssssssssssssssssssssss', 2222, 'ssssssssss', 'feminino', 0, 1),
('yuri', 32767, 32767, 82472834, 99, 'rhwuusbd', 6566, 'hsugdfyvy', 'masculino', 0, NULL),
('yuri', 32767, 32767, 82472834, 99, 'rhwuusbd', 6566, 'hsugdfyvy', 'masculino', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doacao`
--

CREATE TABLE `doacao` (
  `id` int(11) NOT NULL,
  `doacao` varchar(10) NOT NULL,
  `procedencia` set('interno','externo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doacao`
--

INSERT INTO `doacao` (`id`, `doacao`, `procedencia`) VALUES
(1, '500', 'interno'),
(2, '500', 'interno');

-- --------------------------------------------------------

--
-- Table structure for table `evento_prin`
--

CREATE TABLE `evento_prin` (
  `nome_evento` varchar(40) NOT NULL,
  `local` varchar(40) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `data` varchar(11) NOT NULL,
  `horario` varchar(6) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evento_prin`
--

INSERT INTO `evento_prin` (`nome_evento`, `local`, `contato`, `data`, `horario`, `descricao`, `id`) VALUES
('festa fantasia', 'ong', '993992390', '2017-11-23', '14:2', 'festa legal para caramba', 6),
('Fan', 'minha casa', '898889898', '2017-11-25', '11:1', 'somente roupa ao estilo pedido', 7),
('festa', 'casa', '99999', '2017-11-23', '14:00', 'blabla', 8),
('festa fantasia', 'ong', '993992390', '2017-11-23', '14:2', 'festa legal para caramba', 9);

-- --------------------------------------------------------

--
-- Table structure for table `materiais`
--

CREATE TABLE `materiais` (
  `id` int(11) NOT NULL,
  `produto` varchar(20) NOT NULL,
  `quant` int(10) NOT NULL,
  `procedencia` set('interno','externo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materiais`
--

INSERT INTO `materiais` (`id`, `produto`, `quant`, `procedencia`) VALUES
(1, 'nescau', 4, ''),
(2, 'nescau', 4, ''),
(3, 'qualquer coisa', 1, ''),
(4, 'leite', 2, ''),
(5, '', 0, ''),
(6, 'Cadeira de Rodas', 10, ''),
(7, 'leite', 20, ''),
(8, 'leite', 20, 'interno'),
(9, 'Fralda Adulto', 1, 'interno'),
(10, 'Fralda Adulto', 1, 'interno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evento_prin`
--
ALTER TABLE `evento_prin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evento_prin`
--
ALTER TABLE `evento_prin`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
