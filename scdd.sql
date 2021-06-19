-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2021 às 16:14
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `scdd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `devedor`
--

CREATE TABLE `devedor` (
  `id_devedor` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `valor` float NOT NULL,
  `dian` int(11) NOT NULL,
  `mesn` varchar(10) NOT NULL,
  `anon` int(11) NOT NULL,
  `diav` int(11) NOT NULL,
  `mesv` varchar(10) NOT NULL,
  `anov` int(11) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `devedor`
--

INSERT INTO `devedor` (`id_devedor`, `nome`, `cpf`, `endereco`, `bairro`, `uf`, `cep`, `descricao`, `valor`, `dian`, `mesn`, `anon`, `diav`, `mesv`, `anov`, `updated`) VALUES
(5, 'Zilvan Molina de Oliveira Junior', '079.715.887-12', 'Estrada Municipal Antônio Além Bergara', 'Cachoeira Grande', 'AC', '25970-060', 'ads', 100, 6, 'Janeiro', 1994, 12, 'Junho', 2021, '2021-06-19 05:33:49'),
(6, 'Adriana', '079.715.887-12', 'Estrada Municipal Antônio Além Bergara', 'Cachoeira Grande', 'AC', '25970-060', 'ads', 100, 6, 'Janeiro', 1994, 12, 'Agosto', 2021, '2021-06-19 05:34:18'),
(8, 'Memória DDR4 HyperX Fury 2400 mhz', '079.715.887-12', 'Estrada Municipal Antônio Além Bergara', 'Cachoeira Grande', 'AC', '25970-060', 'ads', 100, 6, 'Janeiro', 1994, 12, 'Agosto', 2021, '2021-06-19 05:37:13'),
(9, 'Zilvan Molina de Oliveira Junior', '079.715.887-12', 'Estrada Municipal Antônio Além Bergara', 'Cachoeira Grande', 'CE', '25970-060', 'asdsd', 100, 6, 'Junho', 1994, 12, 'Fevereiro', 2021, '2021-06-19 13:12:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `devedor`
--
ALTER TABLE `devedor`
  ADD PRIMARY KEY (`id_devedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `devedor`
--
ALTER TABLE `devedor`
  MODIFY `id_devedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
