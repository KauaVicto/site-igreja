-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2021 às 16:24
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_igreja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nome`) VALUES
(0, 'Admin'),
(1, 'Pastor'),
(2, 'Membro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `devocionais`
--

CREATE TABLE `devocionais` (
  `id` int(11) NOT NULL,
  `assunto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `arquivo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `devocionais`
--

INSERT INTO `devocionais` (`id`, `assunto`, `descricao`, `data`, `arquivo`) VALUES
(1, 'Amor', 'Ame a Deus', '2021-10-08', NULL),
(2, 'Amor', 'Ame a Deus', '2021-10-08', NULL),
(3, 'Perdão', 'Perdoe', '2021-10-07', NULL),
(6, 'Perdão', 'Perdoe', '2021-10-11', 'd41d8cd98f00b204e9800998ecf8427e1633952066.'),
(7, 'Alegria', 'Fique alegre em Cristo', '2021-10-11', 'd41d8cd98f00b204e9800998ecf8427e1633962343.'),
(8, 'Libertação', 'Liberte-se do pecado', '2021-10-11', 'd41d8cd98f00b204e9800998ecf8427e1633980339.'),
(9, 'teste', 'teste23', '2021-10-11', 'f02fa590388c63d00801491b647768381633980413.pdf'),
(10, 'teste123', 'teste', '2021-10-11', 'f02fa590388c63d00801491b647768381633980474.pdf'),
(11, 'fasdfadf', 'asdfasdfasdf', '2021-10-11', 'f02fa590388c63d00801491b647768381633980531.pdf'),
(13, 'teste', 'descrição teste', '2021-10-14', 'd41d8cd98f00b204e9800998ecf8427e1634239829.'),
(14, 'Amor', 'Ame uns aos outros', '2021-10-15', 'd41d8cd98f00b204e9800998ecf8427e1634303527.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `nome`, `id_cargo`, `login`, `senha`) VALUES
(1, 'George', 1, 'george', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Layla Adryellen Oliveira Gomes', 2, 'layla', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Admin', 0, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices para tabela `devocionais`
--
ALTER TABLE `devocionais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_CargoUser` (`id_cargo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `devocionais`
--
ALTER TABLE `devocionais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_CargoUser` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
