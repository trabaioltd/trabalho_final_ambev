-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jun-2023 às 02:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `taruma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `chassi` varchar(255) NOT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `combustivel` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `ano` date NOT NULL,
  `peso` varchar(255) DEFAULT NULL,
  `capacidade` varchar(255) DEFAULT NULL,
  `cipp` varchar(255) NOT NULL,
  `observacoes` varchar(255) DEFAULT NULL,
  `area` varchar(255) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`id`, `modelo`, `placa`, `chassi`, `cor`, `combustivel`, `marca`, `ano`, `peso`, `capacidade`, `cipp`, `observacoes`, `area`, `estado`) VALUES
(11, 'caminhão', '43434', '4545', 'iooio', 'Gasolina', 'Citroën', '0000-00-00', '565', '5656', 'Sim', '', 'Puxada', 'PE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `prioridade` int(2) NOT NULL,
  `superior` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) NOT NULL,
  `observacoes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `prioridade`, `superior`, `cargo`, `observacoes`) VALUES
(8, 'fran', '202cb962ac59075b964b07152d234b70', 99, 'fran', 'TI', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vistoria`
--

CREATE TABLE `vistoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carroceria` varchar(255) NOT NULL,
  `pneu` varchar(255) NOT NULL,
  `vidros` varchar(255) NOT NULL,
  `pintura` varchar(255) NOT NULL,
  `situacao` varchar(30) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  `dataatual` date NOT NULL,
  `dataprox` date NOT NULL,
  `placa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vistoria`
--

INSERT INTO `vistoria` (`id`, `carroceria`, `pneu`, `vidros`, `pintura`, `situacao`, `observacoes`, `dataatual`, `dataprox`, `placa`) VALUES
(10, 'Otimo', 'Bom', 'Regular', 'Ruim', 'Reprovado', '11111111111', '2023-05-25', '2023-06-06', '43434');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `modelo`
--
ALTER TABLE `modelo`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `placa` (`placa`),
  ADD UNIQUE KEY `chassi` (`chassi`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `vistoria`
--
ALTER TABLE `vistoria`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vistoria`
--
ALTER TABLE `vistoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
