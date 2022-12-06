-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 20:17
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bestmeal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `cod` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`cod`, `cod_usuario`, `data_hora`) VALUES
(1, 3, '2022-12-06 19:26:05'),
(2, 3, '2022-12-06 19:26:08'),
(3, 3, '2022-12-06 19:26:08'),
(4, 3, '2022-12-06 19:26:08'),
(5, 3, '2022-12-06 19:26:09'),
(6, 3, '2022-12-06 19:27:55'),
(7, 3, '2022-12-06 19:28:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_item`
--

CREATE TABLE `pedido_item` (
  `cod` int(11) NOT NULL,
  `cod_pedido` int(11) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pedido_item`
--

INSERT INTO `pedido_item` (`cod`, `cod_pedido`, `cod_produto`) VALUES
(1, 1, 17),
(2, 1, 15),
(3, 2, 17),
(4, 2, 15),
(5, 3, 17),
(6, 3, 15),
(7, 4, 17),
(8, 4, 15),
(9, 5, 17),
(10, 5, 15),
(11, 6, 17),
(12, 6, 15),
(13, 7, 17),
(14, 7, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `ingredientes`, `foto`) VALUES
(15, 'X-MISTO QUENTE', '10,00', 'Queijo, presunto, tomate, alface, maionese ', '../views/_resources/storage/lanches/2022.11.30-21.45.48.jpg'),
(16, 'X-CHEDDAR', '30,00', 'Hamb&uacute;rguer, cheddar, ketchup e pliques', '../views/_resources/storage/lanches/2022.11.30-21.46.13.jpg'),
(17, 'X-GORDI', '22,99', 'Hamb&uacute;rguer, cheddar, ketchup e pliques', '../views/_resources/storage/lanches/2022.11.30-21.47.50.jpg'),
(18, 'X-LETICIA', '50,00', 'Hamb&uacute;rguer, queijo, tomate, alface e pliques', '../views/_resources/storage/lanches/2022.11.30-21.53.40.jpg'),
(19, 'x-carne', '12,99', 'Hamb&uacute;rguer, cheddar, ketchup e pliques', '../views/_resources/storage/lanches/2022.11.30-21.56.25.jpg'),
(20, 'x-carne', '30,00', 'Hamb&uacute;rguer, cheddar, ketchup e pliques', '../views/_resources/storage/lanches/2022.11.30-21.58.12.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT 0,
  `adm` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `ativo`, `adm`) VALUES
(1, 'Leticia Farias', 'lefarias111@gmail.com', 'ifoZDWOqWbrtc', 1, 0),
(2, 'adm', 'adm@gmail.com', 'ifirqopaUdTcg', 1, 1),
(3, 'luciana', 'lu@gmail.com', 'ifTEhrZYmcTkM', 1, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `pedido_item`
--
ALTER TABLE `pedido_item`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pedido_item`
--
ALTER TABLE `pedido_item`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
