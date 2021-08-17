-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Nov-2020 às 00:26
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoav2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `voto`
--

DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `idvoto` int(20) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(30) NOT NULL,
  `voto` varchar(20) NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `idvoto` (`idvoto`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf16;

--
-- Extraindo dados da tabela `voto`
--

INSERT INTO `voto` (`idvoto`, `cpf`, `voto`) VALUES
(1, '111.111.111-11', 'Samsung'),
(2, '111.111.111-12', 'Apple'),
(3, '111.111.111-13', 'Xiaomi'),
(6, '111.111.114-56', 'xiaomi'),
(5, '111.111.114-55', 'Samsung'),
(7, '111.111.114-57', 'apple'),
(8, '222.222.222-22', 'xiaomi'),
(9, '333.333.333-33', 'xiaomi'),
(10, '444.444.444-44', 'apple'),
(11, '555.555.555-55', 'samsung'),
(12, '777.777.777-77', 'xiaomi'),
(13, '888.888.888-88', 'apple');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
