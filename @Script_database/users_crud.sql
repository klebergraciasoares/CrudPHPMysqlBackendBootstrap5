-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql19-farm2.uni5.net
-- Tempo de geração: 03/04/2023 às 11:56
-- Versão do servidor: 5.5.62-log
-- Versão do PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `galaxyz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users_crud`
--

CREATE TABLE IF NOT EXISTS `users_crud` (
  `id` bigint(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `userid` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=403 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `users_crud`
--

INSERT INTO `users_crud` (`id`, `name`, `userid`, `password`) VALUES
(401, 'admin', 'admin', '123'),
(402, 'vendas', 'vendas', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `users_crud`
--
ALTER TABLE `users_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `users_crud`
--
ALTER TABLE `users_crud`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=403;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
