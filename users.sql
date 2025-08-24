-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/08/2025 às 04:19
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testedb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` char(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `user`, `surname`, `email`, `password`, `register_date`) VALUES
(9, 'Lorenzoo', '', '', '$2y$10$OltnTHxNhu15OA2GRNbEHeJsHhx2MesbINKXCgJsFxjpcYV2L.dTa', '2025-06-24 18:29:58'),
(13, 'teste', 'teste', 'teste@gmail.com', '$2y$10$WY6gTIb/tfSYBqPiJEMMpuX8kPbJP8dsWQE.g2QCMH//wxUIA.fme', '2025-08-23 22:16:58');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
