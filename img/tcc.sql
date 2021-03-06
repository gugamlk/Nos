-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2021 às 12:31
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `more`
--

CREATE TABLE `more` (
  `idPostagem` int(30) NOT NULL,
  `titulo` tinytext DEFAULT NULL,
  `autor` varchar(20) NOT NULL,
  `imagem_net` tinytext DEFAULT NULL,
  `conteudo` varchar(100) NOT NULL,
  `cod` int(60) NOT NULL,
  `salvo` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `idPostagem` int(30) NOT NULL,
  `titulo` tinytext DEFAULT NULL,
  `autor` varchar(20) DEFAULT NULL,
  `imagem_net` tinytext DEFAULT NULL,
  `conteudo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`idPostagem`, `titulo`, `autor`, `imagem_net`, `conteudo`) VALUES
(1, '', ' Guga', '../img/', '            \"pode não parecer muito, mas me olhei no espelho hoje e não me senti mal, acho que já é '),
(2, '', ' Guga', '../img/', '            \"Passei o dia com crise de ansiedade hoje, queria saber se alguém entende melhor disso p');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nome` tinytext DEFAULT NULL,
  `nick` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `tipo` int(2) NOT NULL,
  `idade` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `nick`, `email`, `senha`, `tipo`, `idade`, `foto`) VALUES
(1, 'Gustavo H Santoss ', ' Guga', 'guga@gmail.com', '1234', 0, 2003, '../img/Boletim.PNG'),
(2, 'Administrador ', 'admin ', 'adm@gmail.com', '1227', 0, 2003, '../img/Boletim.PNG');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `more`
--
ALTER TABLE `more`
  ADD PRIMARY KEY (`salvo`);

--
-- Índices para tabela `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`idPostagem`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `more`
--
ALTER TABLE `more`
  MODIFY `salvo` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `postagens`
--
ALTER TABLE `postagens`
  MODIFY `idPostagem` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
