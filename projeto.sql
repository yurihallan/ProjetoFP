-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Mar-2019 às 03:38
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `data_nascimento`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `data_criacao`, `id_curso`) VALUES
(1, 'yuri', '10/04/1996', '69.098-099', 'rua libertador', 123, 'Adrianópolis', 'Manaus', 'AM', '0000-00-00 00:00:00', 3),
(2, 'jose', '01/04/2000', '69.012-000', '0', 123, '0', '0', '0', '2019-03-15 21:03:41', 2),
(3, 'fabiola', '05/06/1995', '67.090-090', 'rua brasil', 200, 'Manoa', 'Manaus', 'Am', '2019-03-15 21:07:23', 4),
(4, 'gisele', '02/04/1997', '67.091-090', 'rua brasil 2', 201, 'Manoa 1', 'Manaus', 'Am', '2019-03-15 21:11:25', 5),
(5, 'maria', '19/06/2000', '69.000.09', 'rua libertador', 200, 'Compensa', 'Manaus', 'AM', '2019-03-15 21:44:54', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_professor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome`, `data_criacao`, `id_professor`) VALUES
(2, 'Informática', '2019-03-14 22:11:15', 1),
(3, 'Ed.fisica', '2019-03-14 22:53:27', 2),
(4, 'Ciência', '2019-03-14 23:10:38', 3),
(5, 'Biologia', '2019-03-14 23:12:52', 1),
(6, 'História', '2019-03-14 23:55:14', 2),
(7, 'geografia', '2019-03-15 00:04:25', 2),
(8, 'geografia', '2019-03-15 00:04:57', 3),
(9, 'História 2', '2019-03-15 02:17:07', 6),
(10, 'Quimica', '2019-03-15 20:17:37', 1),
(12, 'Ingles', '2019-03-15 20:41:50', 2),
(13, 'Manunteção', '2019-03-17 00:09:55', 6),
(14, 'Engenharia da Computação', '2019-03-17 02:01:38', 6),
(15, 'Engenharia da Computação 2', '2019-03-17 02:02:19', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome`, `data_nascimento`, `data_criacao`) VALUES
(1, 'João santana', '05/10/1994', '2019-03-14 22:13:25'),
(2, 'Fernando', '24/10/1996', '2019-03-14 23:49:04'),
(3, 'João santana fereira', '25/04/1999', '2019-03-14 23:50:17'),
(6, 'Bernado santos', '12/05/1992', '2019-03-17 00:07:12'),
(7, 'Raimundo', '08/12/1994', '2019-03-17 00:08:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
