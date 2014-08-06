-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2014 at 12:26 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vinyle-co`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_article`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `t_article`
--

INSERT INTO `t_article` (`id`, `artiste`, `nom`, `annee`, `style`, `prixTTC`, `tracksFaceA`, `tracksFaceB`, `label`, `categorie`, `img`, `stock`, `marque`, `ficheTechnique`) VALUES
(2, 'Michael Jackson', 'Thriller Remastered', 0, 'pop', 26, '', '', '', 'vinyl', 'MJ-thriller-remastered', 5, '0', '0'),
(3, 'Michael Jackson', 'Dangerous', 0, 'pop', 27, '', '', '', 'vinyl', 'MJ-dangerous', 5, '0', '0'),
(4, 'Michael Jackson', 'Bad', 0, 'pop', 22, '', '', '', 'vinyl', 'MJ-bad', 5, '0', '0'),
(5, 'Michael Jackson', 'This is it', 0, 'pop', 21, '', '', '', 'vinyl', 'MJ-this-is-it', 5, '0', '0'),
(6, 'Michael Jackson', 'Xscape', 0, 'pop', 23, '', '', '', 'vinyl', 'MJ-xscape', 5, '0', '0'),
(7, 'Lana del rey', 'Ultraviolence', 2014, 'pop', 17, '', '', '', 'vinyl', 'Lanadelrey-ultraviolence', 5, '0', '0'),
(8, 'Coldplay', 'Ghost stories', 2014, 'pop', 21, '', '', '', 'vinyl', 'Coldplay-ghost-stories', 5, '0', '0'),
(9, 'DJ abdel', 'À l''ancienne vol.1', 0, 'funk', 22, '1. Unknown / intro : "a l''ancienne\n2. D.j abdel feat. jérôme prister & dad ppda / let the music...\n3. Mc fadden & whitehead / ain''t no stoppin'' us now\n4. Unique / what I got is what you need\n5. Gwen guthrie / it should have been you\n6. D train / music\n7. ', '11. Kool and the gang / the throwdown mix\n12. George duke / shine on\n13. Change / a lovers holiday\n14. George duke / reach out\n15. Maze / joy and pain\n16. Fat larry''s band / act like you know\n17. Jocelyn brown / somebody else''s guy\n18. Rufus & chaka khan ', '', 'vinyl', 'DJ-abdel-a-lancienne1', 0, '0', '0'),
(10, 'DJ abdel', 'À l''ancienne vol.2', 2002, 'funk', 20, '1. Intro - DJ Abdel\n2. Get down samedi soir - DJ Abdel\n3. Sure shot - Tracy Weber\n4. First true love affair - Jimmy Ross\n5. Put our hands together - The O''Jays\n6. Keep on - James "d-Train" Williams\n7. Heartache n°9 - Delegation\n8. Keep on movin'' n'' groovi', '\n11. Midas touch - Midnight Star\n12. I''ve had enough - Earth, Wind & Fire\n13. I wanna be your lover - Prince\n14. We got the funk - Positive Funk\n15. Before I let go - Maze\n16. Gimme the funk - The Charades\n17. It''s time to party now - Ray Junior Parker\n18', '', 'vinyl', 'DJ-abdel-a-lancienne2', 5, '0', '0'),
(11, 'The Black Keys', 'El Camino', 0, 'rock', 19, 'A1.  Lonely Boy\nA2.  Dead And Gone3\nA3.  Gold On The Ceiling\nA4.  Little Black Submarines\nA5.  Money Maker ', 'B1.  Run Right Back\nB2.  Sister\nB3.  Hell Of A Season\nB4.  Stop Stop\nB5. Nova Baby\nB6. Mind Eraser', '', 'vinyl', 'the-black-keys-el-camino', 5, '0', '0'),
(12, 'The Black Keys', 'Magic Potion', 0, 'rock', 25, 'A1. Just Got To Be\nA2. Your Touch\nA3. You''re The One\nA4. Just A Little Heat\nA5. Give Your Heart Away\nA6. Strange Desire', 'B1. Modern Times\nB2. The Flame\nB3. Goodbye Babylon\nB4. Black Door\nB5. Elevator', '', 'vinyl', 'the-black-keys-magic-potion', 5, '0', '0'),
(13, 'Aretha Franklin', 'Lady Soul', 1968, 'soul', 19.36, '\n1. Chain Of Fools\n2. Money Won''t Change You\n3. People Get Ready\n4. Niki Hoeky\n5. (You Make Me Feel Like) A Natural Woman', '6. Since You''ve Been Gone (Sweet Sweet Baby)\n7. Good To Me As I Am To You\n8. Come Back Baby\n9. Groovin''\n10. Ain''t No Way', 'Atlantic ?', 'vinyl', 'Aretha-franklin-lady-soul', 5, '0', '0'),
(14, 'Aretha Franklin', 'The Very Best of Aretha Franklin', 1980, 'soul', 32, '1. Respect\n2. Baby I Love You\n3. I Never Loved A Man (The Way I Love You)\n4. Chain Of Fools\n5. Do Right Woman-Do Right Man\n6. (You Make Me Feel Like) A Natural Woman\n7. (Sweet Sweet Baby) Since You''ve Been Gone\n8. Ain''t No Way', '9. Think\n10. See Saw\n11. The House That Jack Built\n12. I Say A Little Prayer\n13. The Weight\n14. Eleanor Rigby\n15. Share Your Love With Me\n16. Call Me', 'Atlantic ?', 'vinyl', 'Very-best-of-aretha', 5, '0', '0'),
(15, 'Otis Redding', '', 1997, 'soul', 60, 'Lorem ipsum dolor sit amet\nconsectetur adipisicing elit\nSapiente voluptas nostrum architecto\nrepellendus, laudantium labore\namet libero porro aspernatur blanditis', 'Lorem ipsum dolor sit amet\nconsectetur adipisicing elit\nSapiente voluptas nostrum architecto\nrepellendus, laudantium labore\namet libero porro aspernatur blanditis', 'ATCO', 'vinyl', 'otis', 5, '0', '0'),
(16, 'Lauryn Hill', 'The Miseducation of Lauryn Hill', 1998, 'hip-hop', 31.11, '1. Intro [From "The Miseducation Of"]\n2. Lost Ones\n3. Ex-Factor\n4. To Zion\n5. Doo Wop (That Thing)\n6. Superstar\n7. Final Hour\n8. When It Hurts So Bad\n9. I Used To Love Him', '1. Forgive Them Father\n2. Every Ghetto, Every City\n3. Nothing Even Matters\n4. Everything Is Everything\n5. The Miseducation Of Lauryn Hill\n6. Can''t Take My Eyes Off Of You\n7. Tell Him', 'Columbia', 'vinyl', 'miseducation', 5, '0', '0'),
(17, 'The Fugees', 'The Score', 1996, 'hip-hop', 29, '1.Red Intro\n2.How Many Mics\n3.Ready or Not\n4.Zealots\n5.The Beast\n6.Fu-Gee-La\n7.Family Business\n8.Killing Me Softly With His Song', '9.The Score\n10.The Mask\n11.Cowboys\n12.No Woman, No Cry\n13.Manifest / Outro\n14.Fu-Gee-La - (Refugee Camp remix)\n15.Fu-Gee-La - (Sly & Robbie mix)', 'Columbia', 'vinyl', 'fugees', 5, '0', '0'),
(18, '', 'Platine Elvis', 1990, '', 199, '', '', '', 'platine', 'elvis', 5, 'Bose', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda rem, in numquam asperiores. Aperiam officia, ea earum voluptatem. Necessitatibus libero delectus numquam impedit vel doloribus ducimus eos error unde cum animi distinctio facere harum autem quisqu'),
(75, '', 'Platine Mike Brant', 2012, '', 450, '', '', '', 'Platine', 'Mike-brant', 5, 'Sony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, id iste distinctio unde enim esse nam fugit hic accusantium veniam, accusamus magni saepe perspiciatis neque, tenetur dignissimos nulla vero harum. Praesentium quos ab quaerat facere modi excepturi at');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(132) NOT NULL,
  `codePostal` varchar(5) NOT NULL,
  `ville` varchar(132) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `email`, `password`, `birthdate`, `address`, `codePostal`, `ville`, `admin`) VALUES
(1, 'admin@admin.fr', 'troiswa', '0000-00-00', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
