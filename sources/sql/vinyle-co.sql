-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 07 Août 2014 à 14:32
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `vinyle-co`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_article`
--

CREATE TABLE `t_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) NOT NULL,
  `categorie` varchar(32) NOT NULL,
  `style` varchar(32) NOT NULL,
  `img` varchar(164) NOT NULL,
  `brefDescriptif` varchar(64) NOT NULL,
  `prixTTC` float NOT NULL,
  `stock` int(4) NOT NULL,
  `annee` int(4) NOT NULL,
  `artiste` varchar(164) NOT NULL,
  `label` varchar(164) NOT NULL,
  `tracksFaceA` varchar(255) NOT NULL,
  `tracksFaceB` varchar(255) NOT NULL,
  `marque` varchar(32) NOT NULL,
  `ficheTechnique` varchar(264) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Contenu de la table `t_article`
--

INSERT INTO `t_article` (`id`, `nom`, `categorie`, `style`, `img`, `brefDescriptif`, `prixTTC`, `stock`, `annee`, `artiste`, `label`, `tracksFaceA`, `tracksFaceB`, `marque`, `ficheTechnique`) VALUES
(2, 'Thriller Remastered', 'vinyl', 'pop', 'MJ-thriller-remastered', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 26, 5, 0, 'Michael Jackson', '', '', '', '0', '0'),
(3, 'Dangerous', 'vinyl', 'pop', 'MJ-dangerous', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 27, 5, 0, 'Michael Jackson', '', '', '', '0', '0'),
(4, 'Bad', 'vinyl', 'pop', 'MJ-bad', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 22, 5, 0, 'Michael Jackson', '', '', '', '0', '0'),
(5, 'This is it', 'vinyl', 'pop', 'MJ-this-is-it', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 21, 5, 0, 'Michael Jackson', '', '', '', '0', '0'),
(6, 'Xscape', 'vinyl', 'pop', 'MJ-xscape', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 23, 5, 0, 'Michael Jackson', '', '', '', '0', '0'),
(7, 'Ultraviolence', 'vinyl', 'pop', 'Lanadelrey-ultraviolence', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 17, 5, 2014, 'Lana del rey', '', '', '', '0', '0'),
(8, 'Ghost stories', 'vinyl', 'pop', 'Coldplay-ghost-stories', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 21, 5, 2014, 'Coldplay', '', '', '', '0', '0'),
(9, 'À l''ancienne vol.1', 'vinyl', 'funk', 'DJ-abdel-a-lancienne1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 22, 0, 0, 'DJ abdel', '', '1. Unknown / intro : "a l''ancienne\n2. D.j abdel feat. jérôme prister & dad ppda / let the music...\n3. Mc fadden & whitehead / ain''t no stoppin'' us now\n4. Unique / what I got is what you need\n5. Gwen guthrie / it should have been you\n6. D train / music\n7. ', '11. Kool and the gang / the throwdown mix\n12. George duke / shine on\n13. Change / a lovers holiday\n14. George duke / reach out\n15. Maze / joy and pain\n16. Fat larry''s band / act like you know\n17. Jocelyn brown / somebody else''s guy\n18. Rufus & chaka khan ', '0', '0'),
(10, 'À l''ancienne vol.2', 'vinyl', 'funk', 'DJ-abdel-a-lancienne2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 20, 5, 2002, 'DJ abdel', '', '1. Intro - DJ Abdel\n2. Get down samedi soir - DJ Abdel\n3. Sure shot - Tracy Weber\n4. First true love affair - Jimmy Ross\n5. Put our hands together - The O''Jays\n6. Keep on - James "d-Train" Williams\n7. Heartache n°9 - Delegation\n8. Keep on movin'' n'' groovi', '11. Midas touch - Midnight Star\r\n12. I''ve had enough - Earth, Wind & Fire\r\n13. I wanna be your lover - Prince\r\n14. We got the funk - Positive Funk\r\n15. Before I let go - Maze\r\n16. Gimme the funk - The Charades\r\n17. It''s time to party now - Ray Junior Park', '0', '0'),
(11, 'El Camino', 'vinyl', 'rock', 'the-black-keys-el-camino', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 19, 5, 0, 'The Black Keys', '', 'A1.  Lonely Boy\nA2.  Dead And Gone3\nA3.  Gold On The Ceiling\nA4.  Little Black Submarines\nA5.  Money Maker ', 'B1.  Run Right Back\nB2.  Sister\nB3.  Hell Of A Season\nB4.  Stop Stop\nB5. Nova Baby\nB6. Mind Eraser', '0', '0'),
(12, 'Magic Potion', 'vinyl', 'rock', 'the-black-keys-magic-potion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 25, 5, 0, 'The Black Keys', '', 'A1. Just Got To Be\nA2. Your Touch\nA3. You''re The One\nA4. Just A Little Heat\nA5. Give Your Heart Away\nA6. Strange Desire', 'B1. Modern Times\nB2. The Flame\nB3. Goodbye Babylon\nB4. Black Door\nB5. Elevator', '0', '0'),
(13, 'Lady Soul', 'vinyl', 'soul', 'Aretha-franklin-lady-soul', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 19.36, 5, 1968, 'Aretha Franklin', 'Atlantic ?', '1. Chain Of Fools\r\n2. Money Won''t Change You\r\n3. People Get Ready\r\n4. Niki Hoeky\r\n5. (You Make Me Feel Like) A Natural Woman', '6. Since You''ve Been Gone (Sweet Sweet Baby)\n7. Good To Me As I Am To You\n8. Come Back Baby\n9. Groovin''\n10. Ain''t No Way', '0', '0'),
(14, 'The Very Best of Aretha Franklin', 'vinyl', 'soul', 'Very-best-of-aretha', '0', 32, 5, 1980, 'Aretha Franklin', 'Atlantic ?', '1. Respect\n2. Baby I Love You\n3. I Never Loved A Man (The Way I Love You)\n4. Chain Of Fools\n5. Do Right Woman-Do Right Man\n6. (You Make Me Feel Like) A Natural Woman\n7. (Sweet Sweet Baby) Since You''ve Been Gone\n8. Ain''t No Way', '9. Think\n10. See Saw\n11. The House That Jack Built\n12. I Say A Little Prayer\n13. The Weight\n14. Eleanor Rigby\n15. Share Your Love With Me\n16. Call Me', '0', '0'),
(15, '', 'vinyl', 'soul', 'otis', '0', 60, 5, 1997, 'Otis Redding', 'ATCO', 'Lorem ipsum dolor sit amet\nconsectetur adipisicing elit\nSapiente voluptas nostrum architecto\nrepellendus, laudantium labore\namet libero porro aspernatur blanditis', 'Lorem ipsum dolor sit amet\nconsectetur adipisicing elit\nSapiente voluptas nostrum architecto\nrepellendus, laudantium labore\namet libero porro aspernatur blanditis', '0', '0'),
(16, 'The Miseducation of Lauryn Hill', 'vinyl', 'hip-hop', 'miseducation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 31.11, 5, 1998, 'Lauryn Hill', 'Columbia', '1. Intro [From "The Miseducation Of"]\n2. Lost Ones\n3. Ex-Factor\n4. To Zion\n5. Doo Wop (That Thing)\n6. Superstar\n7. Final Hour\n8. When It Hurts So Bad\n9. I Used To Love Him', '1. Forgive Them Father\n2. Every Ghetto, Every City\n3. Nothing Even Matters\n4. Everything Is Everything\n5. The Miseducation Of Lauryn Hill\n6. Can''t Take My Eyes Off Of You\n7. Tell Him', '0', '0'),
(17, 'The Score', 'vinyl', 'hip-hop', 'fugees', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 29, 5, 1996, 'The Fugees', 'Columbia', '1.Red Intro\n2.How Many Mics\n3.Ready or Not\n4.Zealots\n5.The Beast\n6.Fu-Gee-La\n7.Family Business\n8.Killing Me Softly With His Song', '9.The Score\n10.The Mask\n11.Cowboys\n12.No Woman, No Cry\n13.Manifest / Outro\n14.Fu-Gee-La - (Refugee Camp remix)\n15.Fu-Gee-La - (Sly & Robbie mix)', '0', '0'),
(18, 'Platine Elvis', 'platine', '', 'platine1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ', 199, 5, 1990, '', '', '', '', 'Bose', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda rem, in numquam asperiores. Aperiam officia, ea earum voluptatem. Necessitatibus libero delectus numquam impedit vel doloribus ducimus eos error unde cum animi distinctio facere harum autem quisqu'),
(75, 'Platine Mike Brant', 'platine', '', 'platine2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ', 450, 5, 2012, '', '', '', '', 'Sony', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, id iste distinctio unde enim esse nam fugit hic accusantium veniam, accusamus magni saepe perspiciatis neque, tenetur dignissimos nulla vero harum. Praesentium quos ab quaerat facere modi excepturi at');

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(134) NOT NULL,
  `nom` varchar(134) NOT NULL,
  `password` varchar(32) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(132) NOT NULL,
  `codePostal` varchar(5) NOT NULL,
  `ville` varchar(132) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `t_user`
--

INSERT INTO `t_user` (`id`, `email`, `nom`, `password`, `birthdate`, `address`, `codePostal`, `ville`, `admin`) VALUES
(1, 'admin@admin.fr', '', 'troiswa', '0000-00-00', '', '', '', 1),
(2, 'taulita82@gmail.com', 'Taulita', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00', '', '', '', 0),
(3, 'john@mac.fr', 'John', '6531401f9a6807306651b87e44c05751', '0000-00-00', '', '', '', 0);

