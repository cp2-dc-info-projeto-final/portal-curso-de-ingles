-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2019 às 19:41
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

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`idquestao`, `enunciado`, `opA`, `opB`, `opC`, `opD`, `gabarito`, `tipo`) VALUES
(26, ' Billy: After you _____work, will you please drop by the grocery store and pick up some milk and bread. Sally: No problem, I ____up the groceries and be home by 6 o\'clock', ' left – will not pick', ' leaves – will pick', ' left – won\'t pick', ' leave – will pick', 4, 1),
(27, ' What is the simple past of the following verbs, respectively?', ' hurt, bet, run, shaked;', ' hurted, betted, shaked;', ' hurt, bet, ran, shook;', ' hurted, bet, runned, shaked;', 3, 1),
(28, ' Choose the best alternative that has the same meaning as the sentence: He will talk to his brother after school.', ' He going to talk to his brother after school.', ' He\'s going talk to his brother after school.', ' He\'s going to talk to his brother after school.', ' He is going talk to his brother after school.', 3, 1),
(29, ' Mark the incorrect sentence.', 'The person who phoned me last night is my teacher.', 'The car which hit me was red.', 'The student whose phone just rang should stand up.', 'The police are looking for the car which driver was masked.', 4, 1),
(30, ' (UFSCar) Go and find the driver ________ arrived here yesterday.', ' he', ' who', ' whose', ' what', 2, 1),
(31, ' (FMU – SP) He is the man ____________ sings very well', ' whom', ' how', ' which', ' who ', 4, 1),
(32, ' That’s the fireman _________ son suffered an accident this afternoon.', ' which', ' who', ' whose', ' whom', 3, 1),
(33, ' Mark the option that complete correctly the sentences: 1 - The car, __________ was a taxi, exploded. 2 - Mrs Jack, __________ I like very much, is my teacher.  3-My brother, __________ phone you just heard, is a doctor.', ' which,whom,whose.', ' which, who, who.', ' that, who, who.', ' which, that, which.', 1, 1),
(34, 'Mark the incorrect sentence.', 'The person who phoned me last night is my teacher.', 'The car which hit me was red.', 'The student whose phone just rang should stand up.', 'The police are looking for the car which driver was masked.', 4, 1),
(35, ' In which sentence does the word spirit have the same meaning as in (One drink is generally defined as a 12-ounce glass of beer, a 4- ounce glass of wine or 1.5 ounces of  spirits):', ' They usually pray for their ancestors spirits.', ' The children lifted my spirits with their laughter.', ' More than any other politician, he embodied the spirit of the times.', ' Brandy here is more expensive than spirits.', 4, 2),
(36, ' (Mackenzie SP) The corresponding synonym of the  word in between parenthesis (Illustrating decades of research with compelling and often bizarre examples of glitches) is: ', ' aggressive', ' complacent', ' unreal', ' defensible', 4, 3),
(37, ' (Mackenzie SP) The word “masterpiece” is wrongly used in:', ' One day I’ll paint a masterpiece.', ' This is one of the great masterpieces of European art.', ' The masterpiece of the expedition was a Frenchman.', ' It was a masterpiece of deceit.', 3, 3),
(38, 'What is a word from the text that means (something made from other things?)', 'Ingredient.', 'Product', 'Dairy', 'd) Component', 2, 2),
(39, 'Look at the word OVERLAP in the passage (ref.1). Select the one best alternative which is closest\r\nin meaning to the word OVERLAP', 'extend over.', ' cancel', ' appear on', 'darken', 1, 2),
(40, 'In \'\'The cubs were in good health and receiving roundthe-clock care ...\'\' the expression\'\'round-the-clock\'\' is equivalent to ', 'every half hour', 'every six hours', 'every fifteen minutes', 'all the time', 4, 2),
(41, 'In \'\'But it is an endangered species ...\'\' the expression \'\'endangered species\'\' is similar to: ', 'a species that is in danger of extinction.', 'a species that is out of danger', 'a species that endangers other species.', 'a species that may be dangerous to other species', 1, 2),
(42, 'The word MUTED is closest in meaning to:', 'Dumb', 'Not enthusiastic', ' Changed', ' Loud', 2, 2),
(43, 'The sentence (one day I will understand all the slang he says and everything else) means that Simone will definitely', 'refuse to accept Mike\'s language and ideas', ' speak to Mike about the relationship between English and Portuguese', ' learn about Mike\'s everyday language and culture', ' teach Mike all about her language and customs', 3, 2),
(44, '(ITA) If you had studied harder you would have had _______ difficulty.', 'many', 'very', 'more', 'less', 4, 2),
(45, 'I went to the mall and bought _____ roses and ____ coffee than last week.', 'fewer / fewer', 'more / fewer', 'less / less', 'fewer / less', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`idquestao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `idquestao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
