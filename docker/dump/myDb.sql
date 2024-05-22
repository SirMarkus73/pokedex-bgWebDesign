SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `usuarios`
(
    `id`            INT AUTO_INCREMENT PRIMARY KEY,
    `user`          VARCHAR(50)  NOT NULL UNIQUE,
    `password`      VARCHAR(100) NOT NULL,
    `creation_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

CREATE TABLE `user_cards`
(
    `user`  VARCHAR(50) NOT NULL UNIQUE,
    `cards` TEXT
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;


/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
