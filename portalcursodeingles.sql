-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Ago-2019 às 00:46
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
-- Database: `favatto`
--
CREATE DATABASE IF NOT EXISTS `favatto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `favatto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `logi` varchar(10) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `Rua` varchar(120) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `Complemento` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `data_nasc`, `email`, `telefone`, `cpf`, `logi`, `senha`, `sexo`, `Rua`, `Municipio`, `Complemento`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$hd8y5A2HsFew3eZK448bluApuM9D2AqsVZO8/X9ouEfG9O4CtfxqG', NULL, '', '', ''),
(5, 'Caio dos Santos', '2001-07-23', 'jessiquinhaestanislau0406@gmail.com', '21991811438', '10575799714', 'telma_evan', '$2y$10$m2pghWBRMxYck1Y7NSA64uV3RDv/DMyk7MqE20gzduxPrcLKYELny', 'Masculino', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;--
-- Database: `portalcursodeingles`
--
CREATE DATABASE IF NOT EXISTS `portalcursodeingles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portalcursodeingles`;

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
  `gabarito` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`idquestao`, `enunciado`, `opA`, `opB`, `opC`, `opD`, `gabarito`) VALUES
(2, 'quanto são dois hipopótamos mais dois hipopótamos?', '85 metros', '4 Hipopótamos', '-273ºC', 'fotossíntese', 2),
(3, 'quantas beterrabas cabem em 3 caixotes que cabe uma beterraba?', '5', '3', '4', '-23ÂºC', 2),
(4, 'beterrabona', '123', '15', 'asd', 'xpto', 4),
(5, 'Quantas milenys cabem em 3 potes?', 'uma mileny', 'duas', 'trÃªs', '568', 2);

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
('asd', 'asd', '$2y$10$/Ht3HIIk79DbrC82DVPzc.lOOVKRH6HHP34cyekHP4nP44JpnLKnq', '2019-01-01', 1, 1),
('asd2', 'asd2', '$2y$10$qwy1ZNYGeFgy8yzyX1HHd.IS9oE09QAGrxhfvsWD/b9Ju8y/sm5Lq', '2019-01-01', 2, 1),
('xpto', 'xpto', '$2y$10$zMMf5P.zppZNaBfBn9Xl4eRNqdPOy6wJBugfItaGfDYBZqU25ta2q', '2004-09-06', 3, 1),
('Eliza Das Beths', 'beterrabinhas@gmail.com', '$2y$10$MOM0FnHKoDAMJWig9i92d.U2/U7h22n9Y8RV47O0J0u4APWcHq3mu', '2001-04-10', 4, 1);

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
  MODIFY `idquestao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questao_exercicio`
--
ALTER TABLE `questao_exercicio`
  MODIFY `idexercicio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
