-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for expense_manager_system
CREATE DATABASE IF NOT EXISTS `expense_manager_system` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `expense_manager_system`;

-- Dumping structure for table expense_manager_system.expense_item_tbl
CREATE TABLE IF NOT EXISTS `expense_item_tbl` (
  `expense_id` int(11) DEFAULT NULL,
  `expense_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table expense_manager_system.expense_item_tbl: ~3 rows (approximately)
/*!40000 ALTER TABLE `expense_item_tbl` DISABLE KEYS */;
INSERT INTO `expense_item_tbl` (`expense_id`, `expense_name`) VALUES
	(1, 'Electricity Bill'),
	(3, 'Water Bill'),
	(2, 'Phone Bill');
/*!40000 ALTER TABLE `expense_item_tbl` ENABLE KEYS */;

-- Dumping structure for table expense_manager_system.login_tbl
CREATE TABLE IF NOT EXISTS `login_tbl` (
  `acc_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table expense_manager_system.login_tbl: ~7 rows (approximately)
/*!40000 ALTER TABLE `login_tbl` DISABLE KEYS */;
INSERT INTO `login_tbl` (`acc_id`, `username`, `password`, `user_id`) VALUES
	(1, 'ddlovato', 'password', 1),
	(2, 'selenagomez', 'password', 2),
	(3, 'liampayne', 'password23', 3),
	(4, 'lalisamanoban', 'blackpink', 4),
	(5, 'harrystyles', 'password', 5),
	(6, 'francism', 'philippines', 6),
	(7, 'adamsmith', 'password', 7);
/*!40000 ALTER TABLE `login_tbl` ENABLE KEYS */;

-- Dumping structure for table expense_manager_system.users_expenses
CREATE TABLE IF NOT EXISTS `users_expenses` (
  `trans_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expense_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table expense_manager_system.users_expenses: ~6 rows (approximately)
/*!40000 ALTER TABLE `users_expenses` DISABLE KEYS */;
INSERT INTO `users_expenses` (`trans_id`, `user_id`, `expense_id`, `amount`) VALUES
	(1, 1, 1, 3000),
	(2, 2, 1, 5000),
	(3, 1, 2, 10000),
	(4, 5, 2, 15000),
	(5, 5, 1, 4000),
	(6, 7, 1, 8000);
/*!40000 ALTER TABLE `users_expenses` ENABLE KEYS */;

-- Dumping structure for table expense_manager_system.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table expense_manager_system.user_info: ~7 rows (approximately)
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`) VALUES
	(1, 'Demi', 'Lovato'),
	(2, 'Selena', 'Gomez'),
	(3, 'Liam', 'Payne'),
	(4, 'Lalisa', 'Manoban'),
	(5, 'Harry', 'Styles'),
	(6, 'Francis', 'Magalona'),
	(7, 'Adam', 'Smith');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
