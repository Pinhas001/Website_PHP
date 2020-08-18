-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Ago-2020 às 15:27
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dwebpj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id`, `nome`, `comentario`, `data`) VALUES
(4, 'JoÃ£o', 'Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§Ã§', '2020-08-17 14:15:42'),
(5, 'Tiago', 'TESTEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE', '2020-08-17 14:25:08'),
(7, 'admin', 'asdasda', '2020-08-17 14:51:03'),
(8, 'teste', 'asdasdsd', '2020-08-17 14:51:20'),
(11, 'admin', '12312323131', '2020-08-17 15:07:14'),
(12, 'teste', '12315235424', '2020-08-17 15:07:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `iniciarsessao`
--

CREATE TABLE `iniciarsessao` (
  `id` int(11) NOT NULL,
  `utilizador` varchar(50) DEFAULT NULL,
  `palavrachave` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `iniciarsessao`
--

INSERT INTO `iniciarsessao` (`id`, `utilizador`, `palavrachave`) VALUES
(1, 'admin', 'admin'),
(2, 'teste', 'teste1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `idutilizador` int(11) DEFAULT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tipo`, `marca`, `valor`, `idutilizador`, `descricao`) VALUES
(5, 'asdaasdasdad', 'xcvxc', 'xcvx', 12312, NULL, 'adwdasd'),
(6, 'teste', 'teste', 'teste', 111, NULL, 'teste'),
(7, 'nomd', 'tipoproduto', 'marcaproduto', 12341, NULL, 'descricao\r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `iniciarsessao`
--
ALTER TABLE `iniciarsessao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idutilizador` (`idutilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `iniciarsessao`
--
ALTER TABLE `iniciarsessao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`idutilizador`) REFERENCES `iniciarsessao` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
