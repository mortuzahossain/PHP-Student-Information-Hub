CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(1000) NOT NULL,
  `fatherName` varchar(1000) NOT NULL,
  `university` varchar(10000) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `semister` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `bloodGroup` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)
