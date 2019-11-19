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
 
VALUES (1, ' I _____ Brazilian and I live in Curitiba. ', 'is', 'are', 'am','your','3', 1),
 (2, ' _____ you talking to me?', 'is', 'are', 'it', 'am', '2', 1),
 (3, ' What _____ Sheila doing?', 'am', 'are', 'is','your', '3', 1),
 (4, ' My dog _____ playing in the garden.', 'is', 'are', 'am', 'it', '1', 1),
(5, ' The doors _____ closed.', 'is', 'it', 'am', 'are', '4', 1),
 (6, ' In the question “What fish did you see?” We can state that', ' The correct would be "what fish you saw?"', ' There is no grammatical error;', ' This is incorrect because the auxiliary verb did should be at the beginning of the question.', ' A possible answer would be “I saw two fishes”.', '2', 2),
(7, ' Which sentence below is seen as correct against the grammatical dictates of the English language?', ' I did a research.', ' I bought one clothe.', ' I bought two equipment.', ' I would rather you went tomorrow.', '4', 2),
(8, ' Which sentence below contains the same function still present in the phrase "My brother is 100% right and still 100% wrong"?', ' It is yet to come.', ' Are we there yet?', ' The Zika virus doesn’t yet pose a threat to people in the United States.', 'd) I am trying to keep drugs out of my life, and yet I’m forced to take them every day.', '4', 2),
(9, ' Which alternative below presents a controversial sentence due to its construction?', ' I like reading books.', ' I’ve been meaning to tell you something.', ' That’s a song I’ve never heard of.', ' I’m off to bed.', '3', 2),
(10, ' Which of the options below “were there” or “there were” contain the same function as “were there any kids in there?”', ' Jack and Bob were there too.', ' They were excited we were there.', ' Boy, were there lots of snakes back then.', ' There were no chairs at all.', '4', 2),
(11, ' Which of the following options “were there” ou “there were” contém a mesma função que em “were there any kids in there?” ', ' Jack and Bob were there too.', ' Bob and Josh was empty',' Boy, were there lots of snakes back then.', ' There were no chairs at all.','4', 2),
(12, ' In question “What fish did you see?”,we can say that:The correct would be", “what fish you saw?”', '  There is no grammatical error;', ' This is incorrect because the auxiliary verb did should be at the beginning of the question.',' One possible answer would be “I saw two fishes”.', '2', 3),
(13, ' Which sentence below is correct as the English language grammar names?',' I did a research.',' I bought one clothe.',' I bought two equipment.',' I would rather you went tomorrow.', '4', 3),
(14, 'Which alternative below presents a controversial sentence due to its construction?',' I like reading books.',' I’ve been meaning to tell you something.',' That’s a song I’ve never heard of.',' no one previus awnser', '3', 3),
(15, '  Complete the sentence” I can’t help____________”', ' eat chocolate;','eating chocolate;',' for eating chocolate;',' eaten chocolate','2', 3),
(16, ' “Can’t get enough of it” indica:',' Impatience; ',' Predilection; ',' Tiredness; ',' Sadness;','2', 3),
(17, 'Which sentence below contains the same function as yet present in the sentence “My brother is 100% right and yet 100% wrong”?',' It is yet to come.',' Are we there yet?',' The Zika virus doesn’t yet pose a threat to people in the United States.',' I am trying to keep drugs out of my life, and yet I’m forced to take them every day.','4', 3),
(18, ' What is the meaning of the composition fancy myself in sentence “I fancied myself living in a place like this”?', ' me vi',' me permiti',' me policiei',' me dei o direito', '1', 3),
(19, ' Complete the sentence: “this car _________fourteen thousand dollars”. ',' affords',' goes for',' coasted',' value', '2', 3),
(20, ' What does drive home mean in the sentence “The newspapers drive home the fact that violence is part of urban life“?', ' dar o recado',' dirigir para casa', ' revelar', ' abordar', 1, 3),
(21, " I wouldn’t’ve looked so long for the misplaced book had I known it was in your backpack all along!", " There are no errors in being pointed out.", " The contraction would not be inadmissible.", " A contração wouldn’t’ve é inadmissível bem como had I known. Deve-se rescrever I had known.", " A contração wouldn’t’ve é inadmissível bem como had I known. Deve-se rescrever If I had known.", '1', 3),
(22, " Jack: Could you give me a hand with this? Bob: Sure, I’ll help you do the dishes.", " The verb that comes after the help must be in the infinitive.", " The verb after help should include the sequence of letters 'ing'.", " There are no errors to be pointed out.", "O demonstrativo adequado para o contexto em questão é that e não this.", '3', 3),
(23, " I then did a research and learned that Rio de Janeiro is not the capital of Brazil.", " The correct is researched, without the use of indefinite article.", " There are no errors to be pointed out.", " The correct one is Brazil’s capital and not capital of Brazil.", " For the context in question, correct is than and not then.", '1', 3),
(24, " Indicate an alternative that expresses the same meaning as: When children watch TV, they find a wide variety of places, people, and information.", " When children watch TV, a wide range of places, people, and information will be encounter", " When children watch TV, a wide range of places, people, and information are encountered", " When children watch TV, a wide range of places, people, and information is encountered.", " When TV was watched, a wide range of places, people, and information are encountered by children.", '1', 3),
(25, " Mary: I am about to fall asleep. I need to wake up! Clare: I______you some coffee."," 'll go", " am going to get", " will get", " am going to get to", '3', 1),
(26, " Billy: After you _____work, will you please drop by the grocery store and pick up some milk and bread. Sally: No problem, I ____up the groceries and be home by 6 o'clock", " left – will not pick", " leaves – will pick", " left – won't pick", " leave – will pick", '4', 1),
(27, " What is the simple past of the following verbs, respectively?", " hurt, bet, run, shaked;", " hurted, betted, shaked;"," hurt, bet, ran, shook;", " hurted, bet, runned, shaked;", '3', 1),
(28, " Choose the best alternative that has the same meaning as the sentence: He will talk to his brother after school.", " He going to talk to his brother after school.", " He's going talk to his brother after school.", " He's going to talk to his brother after school.", " He is going talk to his brother after school.", '3', 1),
(29, " Mark the incorrect sentence.", "The person who phoned me last night is my teacher.", "The car which hit me was red.", "The student whose phone just rang should stand up.", "The police are looking for the car which driver was masked.", '4', 1), 
 (30, " (UFSCar) Go and find the driver ________ arrived here yesterday.", " he", " who", " whose", " what", '2', 1),
(31, " (FMU – SP) He is the man ____________ sings very well", " whom", " how"," which"," who ", '4', 1),
(32, " That’s the fireman _________ son suffered an accident this afternoon.", " which", " who", " whose", " whom",  '3', 1),
(33, " Mark the option that complete correctly the sentences: 1 - The car, __________ was a taxi, exploded. 2 - Mrs Jack, __________ I like very much, is my teacher.  3-My brother, __________ phone you just heard, is a doctor.", " which,whom,whose.", " which, who, who."," that, who, who."," which, that, which.", '1', 1),
(34, "Mark the incorrect sentence.", "The person who phoned me last night is my teacher.", "The car which hit me was red.", "The student whose phone just rang should stand up.", "The police are looking for the car which driver was masked.", '4', 1),
(35, " In which sentence does the word spirit have the same meaning as in (One drink is generally defined as a 12-ounce glass of beer, a 4- ounce glass of wine or 1.5 ounces of  spirits):", " They usually pray for their ancestors spirits.", " The children lifted my spirits with their laughter.", " More than any other politician, he embodied the spirit of the times.", " Brandy here is more expensive than spirits.", '4', 2),
(36, " (Mackenzie SP) The corresponding synonym of the  word in between parenthesis (Illustrating decades of research with compelling and often bizarre examples of glitches) is: ", " aggressive", " complacent", " unreal", " defensible", '4', 3),
(37, " (Mackenzie SP) The word “masterpiece” is wrongly used in:", " One day I’ll paint a masterpiece." ," This is one of the great masterpieces of European art." , " The masterpiece of the expedition was a Frenchman.", " It was a masterpiece of deceit.", '3', 3),
(38, "What is a word from the text that means “something made from other things? ", "Ingredient.", "Product", "Dairy", "d) Component", '2', 2),
(39, "Look at the word OVERLAP in the passage (ref.1). Select the one best alternative which is closest
in meaning to the word OVERLAP", "extend over.", " cancel", " appear on", "darken", '1', 2),
(40, "In ''The cubs were in good health and receiving roundthe-clock care ...'' the expression''round-the-clock'' is equivalent to ", "every half hour", "every six hours", "every fifteen minutes", "all the time", '4', '2'),
(41, "In ''But it is an endangered species ...'' the expression ''endangered species'' is similar to: ", "a species that is in danger of extinction.", "a species that is out of danger", "a species that endangers other species.", "a species that may be dangerous to other species", '1', 2),
(42, "The word MUTED is closest in meaning to:", "Dumb", "Not enthusiastic", " Changed", " Loud", '2', 2),
(43, "The sentence “one day I will understand all the slang he says and everything else” means that Simone will definitely", "refuse to accept Mike’s language and ideas"," speak to Mike about the relationship between English and Portuguese", " learn about Mike’s everyday language and culture", " teach Mike all about her language and customs", '3', 2),
(44, "(ITA) If you had studied harder you would have had _______ difficulty.", "many", "very", "more", "less", '4', 2),
(45, "I went to the mall and bought _____ roses and ____ coffee than last week.", "fewer / fewer", "more / fewer", "less / less", "fewer / less", '4', 2);
INSERT INTO usuario (nome, email, senha, dataNasc, tipo) VALUES
('professor', 'professor@gmail.com', '$2y$10$LLmVjPdW57Qe.TCXmoHXVe64PJW0cZCAQ1dej0faItcg.ykruVW1a', '0001-01-01', 2),
('Aluno Exemplo', 'aluno1@gmail.com', '$2y$10$LLmVjPdW57Qe.TCXmoHXVe64PJW0cZCAQ1dej0faItcg.ykruVW1a', '0001-01-01', 1);