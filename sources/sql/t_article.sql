-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 08 Août 2014 à 17:40
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `vinyle-co`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_article`
--

CREATE TABLE IF NOT EXISTS `t_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artiste` varchar(164) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `annee` int(4) NOT NULL,
  `style` varchar(32) NOT NULL,
  `prixTTC` float NOT NULL,
  `tracksFaceA` varchar(255) NOT NULL,
  `tracksFaceB` varchar(255) NOT NULL,
  `label` varchar(164) NOT NULL,
  `categorie` varchar(32) NOT NULL,
  `img` varchar(164) NOT NULL,
  `stock` int(4) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `ficheTechnique` varchar(264) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Contenu de la table `t_article`
--

INSERT INTO `t_article` (`id`, `artiste`, `nom`, `annee`, `style`, `prixTTC`, `tracksFaceA`, `tracksFaceB`, `label`, `categorie`, `img`, `stock`, `marque`, `ficheTechnique`) VALUES
(2, 'Michael Jackson', 'Thriller Remastered', 0, 'pop', 26, '', '', '', 'vinyl', 'MJ-thriller-remastered', 5, '0', '0'),
(3, 'Michael Jackson', 'Dangerous', 0, 'pop', 27, '', '', '', 'vinyl', 'MJ-dangerous', 5, '0', '0'),
(4, 'Michael Jackson', 'Bad', 0, 'pop', 22, '', '', '', 'vinyl', 'MJ-bad', 5, '0', '0'),
(5, 'Michael Jackson', 'This is it', 0, 'pop', 21, '', '', '', 'vinyl', 'MJ-this-is-it', 5, '0', '0'),
(6, 'Michael Jackson', 'Xscape', 0, 'pop', 23, '', '', '', 'vinyl', 'MJ-xscape', 5, '0', '0'),
(7, 'Lana del rey', 'Ultraviolence', 2014, 'pop', 17, '', '', '', 'vinyl', 'lanadelrey-ultraviolence', 5, '0', '0'),
(8, 'Coldplay', 'Ghost stories', 2014, 'pop', 21, '', '', '', 'vinyl', 'coldplay-ghost-stories', 5, '0', '0'),
(9, 'DJ abdel', 'À l''ancienne vol.1', 0, 'funk', 22, '1. Unknown / intro : "a l''ancienne<br>\r\n2. D.j abdel feat. jérôme prister & dad ppda / let the music<br>\r\n3. Mc fadden & whitehead / ain''t no stoppin'' us now<br>\r\n4. Unique / what I got is what you need<br>\r\n5. Gwen guthrie / it should have been you<br>\r\n', '7. Kool and the gang / the throwdown mix<br>\r\n8. George duke / shine on<br>\r\n9. Change / a lovers holiday<br>\r\n10. George duke / reach out<br>\r\n11. Maze / joy and pain<br>\r\n12. Fat larry''s band / act like you know<br>\r\n13. Jocelyn brown / somebody else''s ', '', 'vinyl', 'DJ-abdel-a-lancienne1', 0, '0', '0'),
(10, 'DJ abdel', 'À l''ancienne vol.2', 2002, 'funk', 20, '1. Intro - DJ Abdel<br>\r\n2. Get down samedi soir - DJ Abdel<br>\r\n3. Sure shot - Tracy Weber<br>\r\n4. First true love affair - Jimmy Ross<br>\r\n5. Put our hands together - The O''Jays<br>\r\n6. Keep on - James "d-Train" Williams<br>\r\n7. Heartache n°9 - Delegati', '11. Midas touch - Midnight Star<br>\r\n12. I''ve had enough - Earth, Wind & Fire<br>\r\n13. I wanna be your lover - Prince<br>\r\n14. We got the funk - Positive Funk<br>\r\n15. Before I let go - Maze<br>\r\n16. Gimme the funk - The Charades<br>\r\n17. It''s time to par', '', 'vinyl', 'DJ-abdel-a-lancienne2', 5, '0', '0'),
(11, 'The Black Keys', 'El Camino', 0, 'rock', 19, 'A1.  Lonely Boy<br>\r\nA2.  Dead And Gone3<br>\r\nA3.  Gold On The Ceiling<br>\r\nA4.  Little Black Submarines<br>\r\nA5.  Money Maker <br>', 'B1.  Run Right Back<br>\r\nB2.  Sister<br>\r\nB3.  Hell Of A Season<br>\r\nB4.  Stop Stop<br>\r\nB5. Nova Baby<br>\r\nB6. Mind Eraser<br>', '', 'vinyl', 'the-black-keys-el-camino', 5, '0', '0'),
(12, 'The Black Keys', 'Magic Potion', 0, 'rock', 25, 'A1. Just Got To Be<br>\r\nA2. Your Touch<br>\r\nA3. You''re The One<br>\r\nA4. Just A Little Heat<br>\r\nA5. Give Your Heart Away<br>\r\nA6. Strange Desire<br>', 'B1. Modern Times<br>\r\nB2. The Flame<br>\r\nB3. Goodbye Babylon<br>\r\nB4. Black Door<br>\r\nB5. Elevator<br>', '', 'vinyl', 'the-black-keys-magic-potion', 5, '0', '0'),
(13, 'Aretha Franklin', 'Lady Soul', 1968, 'soul', 19.36, '1. Chain Of Fools <br>\r\n2. Money Won''t Change You <br>\r\n3. People Get Ready <br>\r\n4. Niki Hoeky <br>\r\n5. (You Make Me Feel Like) A Natural Woman <br>', '6. Since You''ve Been Gone (Sweet Sweet Baby) <br>\r\n7. Good To Me As I Am To You <br>\r\n8. Come Back Baby <br>\r\n9. Groovin'' <br>\r\n10. Ain''t No Way <br>', 'Atlantic ?', 'vinyl', 'aretha-franklin-lady-soul', 5, '0', '0'),
(14, 'Aretha Franklin', 'The Very Best of Aretha Franklin', 1980, 'soul', 32, '1. Respect <br>\r\n2. Baby I Love You <br>\r\n3. I Never Loved A Man (The Way I Love You) <br>\r\n4. Chain Of Fools <br>\r\n5. Do Right Woman-Do Right Man <br>\r\n6. (You Make Me Feel Like) A Natural Woman <br>\r\n7. (Sweet Sweet Baby) Since You''ve Been Gone <br>\r\n8.', '9. Think <br>\r\n10. See Saw <br>\r\n11. The House That Jack Built <br>\r\n12. I Say A Little Prayer <br>\r\n13. The Weight <br>\r\n14. Eleanor Rigby <br>\r\n15. Share Your Love With Me <br>\r\n16. Call Me <br>', 'Atlantic ?', 'vinyl', 'very-best-of-aretha', 5, '0', '0'),
(15, 'Otis Redding', '', 1997, 'soul', 60, 'Lorem ipsum dolor sit amet <br>\r\nconsectetur adipisicing elit <br>\r\nSapiente voluptas nostrum architecto <br>\r\nrepellendus, laudantium labore <br>\r\namet libero porro aspernatur blanditis <br>', 'Lorem ipsum dolor sit amet <br>\r\nconsectetur adipisicing elit <br>\r\nSapiente voluptas nostrum architecto <br>\r\nrepellendus, laudantium labore <br>\r\namet libero porro aspernatur blanditis <br>', 'ATCO', 'vinyl', 'otis', 5, '0', '0'),
(16, 'Lauryn Hill', 'The Miseducation of Lauryn Hill', 1998, 'hip-hop', 31.11, '1. Intro [From "The Miseducation Of"] <br>\r\n2. Lost Ones <br>\r\n3. Ex-Factor <br>\r\n4. To Zion <br>\r\n5. Doo Wop (That Thing) <br>\r\n6. Superstar <br>\r\n7. Final Hour <br>\r\n8. When It Hurts So Bad <br>\r\n9. I Used To Love Him <br>', '1. Forgive Them Father <br>\r\n2. Every Ghetto, Every City <br>\r\n3. Nothing Even Matters <br>\r\n4. Everything Is Everything <br>\r\n5. The Miseducation Of Lauryn Hill <br>\r\n6. Can''t Take My Eyes Off Of You <br>\r\n7. Tell Him <br>', 'Columbia', 'vinyl', 'miseducation', 5, '0', '0'),
(17, 'The Fugees', 'The Score', 1996, 'hip-hop', 29, '1.Red Intro <br>\r\n2.How Many Mics <br>\r\n3.Ready or Not <br>\r\n4.Zealots <br>\r\n5.The Beast <br>\r\n6.Fu-Gee-La <br>\r\n7.Family Business <br>\r\n8.Killing Me Softly With His Song <br>', '9.The Score <br>\r\n10.The Mask <br>\r\n11.Cowboys <br>\r\n12.No Woman, No Cry <br>\r\n13.Manifest / Outro <br>\r\n14.Fu-Gee-La - (Refugee Camp remix) <br>\r\n15.Fu-Gee-La - (Sly & Robbie mix) <br>', 'Columbia', 'vinyl', 'fugees', 5, '0', '0'),
(18, '', 'Platine Elvis', 1990, '', 199, '', '', '', 'platine', 'platine1', 5, 'Bose', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda rem, in numquam asperiores. Aperiam officia, ea earum voluptatem. Necessitatibus libero delectus numquam impedit vel doloribus ducimus eos error unde cum animi distinctio facere harum autem quisqu'),
(75, '', 'Platine Mike Brant', 2012, '', 450, '', '', '', 'Platine', 'platine2', 5, 'Sony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, id iste distinctio unde enim esse nam fugit hic accusantium veniam, accusamus magni saepe perspiciatis neque, tenetur dignissimos nulla vero harum. Praesentium quos ab quaerat facere modi excepturi at');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
