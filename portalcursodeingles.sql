-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Ago-2019 às 21:37
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalcursodeingles`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `idaula` int(11) NOT NULL,
  `data_aula` date DEFAULT NULL,
  `aluno` int(11) DEFAULT NULL,
  `professor` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `idexercicio` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavra`
--

CREATE TABLE `palavra` (
  `palavra` varchar(50) DEFAULT NULL,
  `idpalavra` int(11) NOT NULL,
  `sinonimo` varchar(200) DEFAULT NULL,
  `significado` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavra_aluno`
--

CREATE TABLE `palavra_aluno` (
  `idpalavra` int(11) NOT NULL,
  `idusuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavra_questao`
--

CREATE TABLE `palavra_questao` (
  `idpalavra` int(11) NOT NULL,
  `idquestao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `idquestao` int(3) NOT NULL,
  `enunciado` varchar(500) DEFAULT NULL,
  `opA` varchar(120) NOT NULL,
  `opB` varchar(120) NOT NULL,
  `opC` varchar(120) NOT NULL,
  `opD` varchar(120) NOT NULL,
  `gabarito` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`idquestao`, `enunciado`, `opA`, `opB`, `opC`, `opD`, `gabarito`) VALUES
(2, 'quantas beterrabas cabem em 3 caixotes que cabe uma beterraba?', '5', '3', '4', '-23ÂºC', '3 beterrabas - opÃ§Ã£o B'),
(3, 'beterrabona', '123', '15', 'asd', 'xpto', 'xpto - opÃ§Ã£o D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_exercicio`
--

CREATE TABLE `questao_exercicio` (
  `idexercicio` int(11) NOT NULL,
  `idquestao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `datanasc` date NOT NULL,
  `id` int(6) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `datanasc`, `id`, `tipo`) VALUES
('Alan', 'alan123@gmail.com', '$2y$10$X4q0K2XujtNuUhSLhwzhd.FnyWxz8c0N/f3vuAyOBggcaOprtsiV2', '1985-11-21', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`idaula`),
  ADD KEY `aluno` (`aluno`),
  ADD KEY `professor` (`professor`);

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`idexercicio`);

--
-- Indexes for table `palavra`
--
ALTER TABLE `palavra`
  ADD PRIMARY KEY (`idpalavra`);

--
-- Indexes for table `palavra_aluno`
--
ALTER TABLE `palavra_aluno`
  ADD PRIMARY KEY (`idusuario`,`idpalavra`),
  ADD KEY `idpalavra` (`idpalavra`);

--
-- Indexes for table `palavra_questao`
--
ALTER TABLE `palavra_questao`
  ADD PRIMARY KEY (`idpalavra`,`idquestao`),
  ADD KEY `idquestao` (`idquestao`);

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`idquestao`);

--
-- Indexes for table `questao_exercicio`
--
ALTER TABLE `questao_exercicio`
  ADD PRIMARY KEY (`idexercicio`,`idquestao`),
  ADD KEY `idquestao` (`idquestao`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `idaula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `idexercicio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `palavra`
--
ALTER TABLE `palavra`
  MODIFY `idpalavra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `palavra_aluno`
--
ALTER TABLE `palavra_aluno`
  MODIFY `idpalavra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `palavra_questao`
--
ALTER TABLE `palavra_questao`
  MODIFY `idpalavra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `idquestao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questao_exercicio`
--
ALTER TABLE `questao_exercicio`
  MODIFY `idexercicio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
