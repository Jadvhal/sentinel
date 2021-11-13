-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dynamic.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `first_name` varchar(50) DEFAULT '',
  `last_name` varchar(50) DEFAULT '',
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(50) DEFAULT '',
  `user_token` varchar(100) DEFAULT '',
  `user_pass` varchar(100) NOT NULL DEFAULT '',
  `last_status` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_phone` (`user_phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Dynamics default Table for Users';

-- Dumping data for table dynamic.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `user_email`, `user_phone`, `user_token`, `user_pass`, `last_status`, `user_time`) VALUES
	(1, 'abdulbasit', '', '', 'abdulbasitrubeiyya@gmail.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-18 12:31:54', '2021-10-18 12:31:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
