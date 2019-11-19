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
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `idaula` int(11) NOT NULL PRIMARY KEY,
  `data_aula` date DEFAULT NULL,
  `hora` varchar(5),
  `aluno` integer,
  CONSTRAINT `fk_AluAul` FOREIGN KEY (`aluno`) REFERENCES `usuario`(`id`)
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
-- Indexes for dumped tables
--

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
 (4, '4. My dog _____ playing in the garden.', 'is', 'are', 'am', 'it', '1', 1),
(5, '5. The doors _____ closed.', 'is', 'it', 'am', 'are', '4', 1),
 (6, '1. In the question “What fish did you see?” We can state that', 'a) The correct would be "what fish you saw?"', 'b) There is no grammatical error;', 'c) This is incorrect because the auxiliary verb did should be at the beginning of the question.', 'd) A possible answer would be “I saw two fishes”.', '2', 2),
(7, '2. Which sentence below is seen as correct against the grammatical dictates of the English language?', 'a) I did a research.', 'b) I bought one clothe.', 'c) I bought two equipment.', 'd) I would rather you went tomorrow.', '4', 2),
(8, '3. Which sentence below contains the same function still present in the phrase "My brother is 100% right and still 100% wrong"?', 'a) It is yet to come.', 'b) Are we there yet?', 'c) The Zika virus doesn’t yet pose a threat to people in the United States.', 'd) I am trying to keep drugs out of my life, and yet I’m forced to take them every day.', '4', 2),
(9, '4. Which alternative below presents a controversial sentence due to its construction?', 'a) I like reading books.', 'b) I’ve been meaning to tell you something.', 'c) That’s a song I’ve never heard of.', 'd) I’m off to bed.', '3', 2),
(10, '5. Which of the options below “were there” or “there were” contain the same function as “were there any kids in there?”', 'a) Jack and Bob were there too.', 'b) They were excited we were there.', 'c) Boy, were there lots of snakes back then.', 'd) There were no chairs at all.', '4', 2),
(11, '1. Qual das opções abaixo “were there” ou “there were” contém a mesma função que em “were there any kids in there?” ', 'a) Jack and Bob were there too.', 'B) Bob and Josh was empty','c) Boy, were there lots of snakes back then.', 'd) There were no chairs at all.','4', 3),
(12, '2. Na pergunta “What fish did you see?”, podemos afirmar que:', 'a)  O correto seria “what fish you saw?”', 'b)  Não há qualquer erro gramatical;', 'c) Está incorreta, pois o verbo auxiliar did deveria estar no começo da pergunta.','d) Uma possível resposta seria “I saw two fishes”.', '2', 3),
(13, '3. Qual frase abaixo é vista como correta ante os ditames gramaticais da língua inglesa?','a) I did a research.','b) I bought one clothe.','c) I bought two equipment.','d) I would rather you went tomorrow.', '4', 3),
(14, '4. Qual alternativa abaixo apresenta uma frase passível de polêmica em função da sua construção?','a) I like reading books.','b) I’ve been meaning to tell you something.','c) That’s a song I’ve never heard of.','d) no one previus awnser', '3', 3),
(15, '5.  Complete a frase ” I can’t help____________”', 'a) eat chocolate;','b) eating chocolate;','c) for eating chocolate;','d) eaten chocolate','2', 3),
(16, '6. “Can’t get enough of it” indica:','a) Falta de paciência;','b) Predileção;','c) Cansaço;','d) Tristeza;','2', 3),
(17, '7. Qual frase abaixo contém a mesma função de yet presente na frase “My brother is 100% right and yet 100% wrong”?','a) It is yet to come.','b) Are we there yet?','c) The Zika virus doesn’t yet pose a threat to people in the United States.','d) I am trying to keep drugs out of my life, and yet I’m forced to take them every day.','4', 3),
(18, '8. Qual o sentido da composição fancy myself na frase “I fancied myself living in a place like this”?', 'a) me vi','b) me permiti','c) me policiei','d) me dei o direito', '1', 3),
(19, '9. Complete a frase: “this car _________fourteen thousand dollars”. ','a) affords','b) goes for','c) coasted','d) value', '2', 3),
(20, '10. O que significa drive home na frase “The newspapers drive home the fact that violence is part of urban life“?', 'a) dar o recado','b) dirigir para casa', 'c) revelar', 'd) abordar', 1, 3),
(21, "11. I wouldn’t’ve looked so long for the misplaced book had I known it was in your backpack all along!", "a) There are no errors in being pointed out.", "(b) The contraction would not be inadmissible.", "c) A contração wouldn’t’ve é inadmissível bem como had I known. Deve-se rescrever I had known.", "d) A contração wouldn’t’ve é inadmissível bem como had I known. Deve-se rescrever If I had known.", '1', 3),
(22, "12. Jack: Could you give me a hand with this? Bob: Sure, I’ll help you do the dishes.", "a) The verb that comes after the help must be in the infinitive.", "b) The verb after help should include the sequence of letters 'ing'.", "c) There are no errors to be pointed out.", "d) O demonstrativo adequado para o contexto em questão é that e não this.", '3', 3),
(23, "3 – I then did a research and learned that Rio de Janeiro is not the capital of Brazil.", "a) The correct is researched, without the use of indefinite article.", "b) There are no errors to be pointed out.", "c) The correct one is Brazil’s capital and not capital of Brazil.", "d) For the context in question, correct is than and not then.", '1', 3);
(24, "Indicate an alternative that expresses the same meaning as: When children watch TV, they find a wide variety of places, people, and information.", "a) When children watch TV, a wide range of places, people, and information will be encounter", "b) When children watch TV, a wide range of places, people, and information are encountered", "c) When children watch TV, a wide range of places, people, and information is encountered.", "d) When TV was watched, a wide range of places, people, and information are encountered by children.", '1', 3),
(25, "6. Mary: I am about to fall asleep. I need to wake up! Clare: I______you some coffee.","a) 'll go", "b) am going to get", "c) will get", "d) am going to get to", '3', 1),
(26, "7. Billy: After you _____work, will you please drop by the grocery store and pick up some milk and bread. Sally: No problem, I ____up the groceries and be home by 6 o'clock", "a) left – will not pick", "b) leaves – will pick", "c) left – won't pick", "d) leave – will pick", '4', 1),
(27, "8. What is the simple past of the following verbs, respectively?", "a) hurt, bet, run, shaked;", "b) hurted, betted, shaked;","c) hurt, bet, ran, shook;", "d) hurted, bet, runned, shaked;", '3', 1),
(28, "9. Chose the best alternative that has the same meaning as the sentence: He will talk to his brother after school.", "a) He going to talk to his brother after school.", "b) He's going talk to his brother after school.", "c) He's going to talk to his brother after school.", "d) He is going talk to his brother after school.", '3', 1),
(29, "10. Mark the incorrect sentence.", "a)The person who phoned me last night is my teacher.", "b)The car which hit me was red.", "c)The student whose phone just rang should stand up.", "d)The police are looking for the car which driver was masked.", '4', 1),
(30, "11. (UFSCar) Go and find the driver ________ arrived here yesterday.", "a) he", "b) who", "c) whose", "d) what", "e) whom", '2', 1),
(31, "12. (FMU – SP) He is the man ____________ sings very well", "a) whom", "b) how","c) which","d) whoe) ","what", '4', 1),
(32, "13. That’s the fireman _________ son suffered an accident this afternoon.", "a) which" "b) who", "c) whose", "d) whom", "e) when)",  '3', 1),
(33, "14. Mark the option that complete correctly the sentences: 1 - The car, __________ was a taxi, exploded. 2 - Mrs Jack, __________ I like very much, is my teacher.  3-My brother, __________ phone you just heard, is a doctor.", "a) which,whom,whose.", "b) which, who, who.","c) that, who, who.","d) which, that, which.","e) that, who, which.", '1', 1),
(34, "15. Mark the incorrect sentence.", "a)The person who phoned me last night is my teacher.", "b)The car which hit me was red.", "c)The student whose phone just rang should stand up.", "d)The police are looking for the car which driver was masked.", '4', 1),
(35, "13. In which sentence does the word spirit have the same meaning as in (One drink is generally defined as a 12-ounce glass of beer, a 4- ounce glass of wine or 1.5 ounces of  spirits):", "a) They usually pray for their ancestors spirits.", "b) The children lifted my spirits with their laughter.", "c) More than any other politician, he embodied the spirit of the times.", "d) Brandy here is more expensive than spirits.", '4', 1),


e)The person that I phoned last night is my teacher.)
INSERT INTO usuario (nome, email, senha, dataNasc, tipo) VALUES
('professor', 'professor@gmail.com', '$2y$10$LLmVjPdW57Qe.TCXmoHXVe64PJW0cZCAQ1dej0faItcg.ykruVW1a', '0001-01-01', 2),
('Aluno Exemplo', 'aluno1@gmail.com', '$2y$10$LLmVjPdW57Qe.TCXmoHXVe64PJW0cZCAQ1dej0faItcg.ykruVW1a', '0001-01-01', 1);