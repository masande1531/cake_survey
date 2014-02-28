cakePHP 2.X
===========

cake_survey
===========

Simple survey in cakephp 

MySQL Table
===========

CREATE TABLE IF NOT EXISTS `globalimsa_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `consultant` varchar(100) NOT NULL,
  `p_communication` varchar(100) NOT NULL,
  `p_money` varchar(100) NOT NULL,
  `p_company` varchar(100) NOT NULL,
  `recommend` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB 
