-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2022 às 01:03
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `financeiro_schema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela produtos`
--

CREATE TABLE `tabela produtos` (
  `id` int(100) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `valor` float NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `versao_sistema` varchar(11) NOT NULL,
  `numero_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela produtos`
--

INSERT INTO `tabela produtos` (`id`, `nome`, `valor`, `descricao`, `versao_sistema`, `numero_serie`) VALUES
(0, 'computador', 2000, 'i3', 'windows 10', 1),
(0, 'computador', 2000, 'i3', 'windows 10', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
