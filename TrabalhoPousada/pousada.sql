-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2020 às 21:28
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pousada`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID do Cliente` int(11) NOT NULL,
  `Nome Completo` varchar(150) NOT NULL,
  `Documento` varchar(100) NOT NULL,
  `Data de Nascimento` date NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`ID do Cliente`, `Nome Completo`, `Documento`, `Data de Nascimento`, `Cidade`, `Estado`) VALUES
(1, 'Pedro Henrique de Souza Ramos', 'MG-209.556.10-4', '2011-04-05', 'Pouso Alegre', 'Minas Gerais'),
(2, 'Herick Douglas Prado de Oliveira', 'MG-203.245.21-5', '2015-11-02', 'Campinas\r\n', 'São Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `ID do quarto` int(11) NOT NULL,
  `Numero da Porta` varchar(20) NOT NULL,
  `Tipo do quarto` varchar(25) NOT NULL,
  `Valor da Diaria` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`ID do quarto`, `Numero da Porta`, `Tipo do quarto`, `Valor da Diaria`, `Status`) VALUES
(5, '1001', 'Triplo', '$5.000', 'Ocupado'),
(7, '1003', 'Simples', '$10.000', 'Livre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `ID da Reserva` int(11) NOT NULL,
  `ID do quarto` int(11) NOT NULL,
  `ID do Cliente` int(11) NOT NULL,
  `Data da entrada` date NOT NULL,
  `Data de Saida` date NOT NULL,
  `Valor da Reserva` varchar(50) NOT NULL,
  `Status da Reserva` varchar(50) NOT NULL,
  `Data e Hora do Status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`ID da Reserva`, `ID do quarto`, `ID do Cliente`, `Data da entrada`, `Data de Saida`, `Valor da Reserva`, `Status da Reserva`, `Data e Hora do Status`) VALUES
(10, 5, 1, '2020-09-01', '2020-09-04', '$20.000', 'Reservado', '2020-09-22 03:24:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID do Cliente`);

--
-- Índices para tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`ID do quarto`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID da Reserva`,`ID do quarto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID do Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `ID do quarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID da Reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
