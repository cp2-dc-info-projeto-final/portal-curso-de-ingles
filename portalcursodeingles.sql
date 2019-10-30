-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2019 às 12:30
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
  `professor` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `idexercicio` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `idquestao` int(3) NOT NULL,
  `enunciado` varchar(500) COLLATE utf8_bin NOT NULL,
  `opA` varchar(120) COLLATE utf8_bin NOT NULL,
  `opB` varchar(120) COLLATE utf8_bin NOT NULL,
  `opC` varchar(120) COLLATE utf8_bin NOT NULL,
  `opD` varchar(120) COLLATE utf8_bin NOT NULL,
  `gabarito` int(11) NOT NULL,
  `tipo` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao_exercicio`
--

CREATE TABLE `questao_exercicio` (
  `idexercicio` int(11) NOT NULL,
  `idquestao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(150) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(60) COLLATE utf8_bin NOT NULL,
  `datanasc` date NOT NULL,
  `id` int(6) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `idquestao` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questao_exercicio`
--
ALTER TABLE `questao_exercicio`
  MODIFY `idexercicio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;COMMIT;
 INSERT INTO `questao`(`idquestao`, `enunciado`, `opA`, `opB`, `opC`, `opD`, `gabarito`, `tipo`) 
 
VALUES (1, '1. I _____ Brazilian and I live in Curitiba. ', 'is', 'are', 'am','your','3', 1),
 (2, '2. _____ you talking to me?', 'is', 'are', 'it', 'am', '2', 1),
 (3, '3. What _____ Sheila doing?', 'am', 'are', 'is','your', '3', 1),
 (4, '4. My dog _____ playing in the garden.)', 'is', 'are', 'am', 'it', '1', 1),
(5, '5. The doors _____ closed.', 'is', 'it', 'am', 'are', '4', 1),
 (6, '2. In the question “What fish did you see?” We can state that', 'a) The correct would be "what fish you saw?"', 'b) There is no grammatical error;', 'c) This is incorrect because the auxiliary verb did should be at the beginning of the question.', 'd) A possible answer would be “I saw two fishes”.', '2', 2),
(7, '3. Which sentence below is seen as correct against the grammatical dictates of the English language?', 'a) I did a research.', 'b) I bought one clothe.', 'c) I bought two equipment.', 'd) I would rather you went tomorrow.', '4', 2),
(8, '7. Which sentence below contains the same function still present in the phrase "My brother is 100% right and still 100% wrong"?', 'a) It is yet to come.', 'b) Are we there yet?', 'c) The Zika virus doesn’t yet pose a threat to people in the United States.', 'd) I am trying to keep drugs out of my life, and yet I’m forced to take them every day.', '4', 2),
(9, '4. Which alternative below presents a controversial sentence due to its construction?', 'a) I like reading books.', 'b) I’ve been meaning to tell you something.', 'c) That’s a song I’ve never heard of.', 'd) I’m off to bed.', '3', 2),
(10, '1. Which of the options below “were there” or “there were” contain the same function as “were there any kids in there?”', 'a) Jack and Bob were there too.', 'b) They were excited we were there.', 'c) Boy, were there lots of snakes back then.', 'd) There were no chairs at all.', '4', 2);
