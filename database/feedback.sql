SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `feedback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sub` varchar(10) NOT NULL,
  `fb` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `feedback` (`id`, `name`, `sub`, `fb`) VALUES
(1, 'Sudeep Sharma', 'ACA', 30),
(2, 'Abhilasa Panday', 'PPL', 11),
(3, 'Prakriti Kapoor', 'SEPM', 25),
(4, 'Malika Roy', 'CN', 22),
(5, 'Amresh Singh', 'IOT', 30);


CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `class`, `password`) VALUES
('0223CS161003', 'Anshul Gupta', '6th', '0223CS161003'),
('0223CS161022', 'Sakshi Vishwakarma', '6th', '0223CS161022'),
('0223CS161020', 'Prashant Tripathi', '6th', '0223CS161020'),;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
