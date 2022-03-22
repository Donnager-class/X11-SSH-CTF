-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Database: `employee_comments`
--
-- --------------------------------------------------------
--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`Name`, `Surname`, `Username`, `Email`, `Password`) VALUES
('Amos', 'Burton', 'amosburton', 'timothybaltimore89@gmail.com ', 'baltimore89'),
(' Alex', 'Kamal', 'rocinante', 'alex.kamal@mcrn.com ', 'R0C1N@NT3'),
('Marco', 'Inaros', 'belterInaros', 'macro1naros@freenavy.com', 'belters4life'),
('Chrisjen', 'Avasarala', 'chrisjenAVA', 'chrisjen.avasarala@unitednations.com', 'Yh!115NkUN'),
('Carmina', 'Drummer', 'Drummer', 'carminadrummer@yahoo.com', 'navooAshford');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
