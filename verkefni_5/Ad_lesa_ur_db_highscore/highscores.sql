--
-- Table structure for table `highscores`
--

CREATE TABLE IF NOT EXISTS `highscores` (
  `player` varchar(50) DEFAULT NULL,
  `score` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`player`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1011 ;

--
-- Dumping data for table `highscores`
--

INSERT INTO `highscores` (`player`, `score`) VALUES
('GRL', '1000'),
('BHB', '200'),
('SBB', '150');
