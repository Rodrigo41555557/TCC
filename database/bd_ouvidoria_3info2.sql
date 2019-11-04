-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 29/10/2019 às 16:07
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_ouvidoria_3info2`
--

CREATE DATABASE bd_ouvidoria_3info2;
USE bd_ouvidoria_3info2;

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `cod_adm` int(5) NOT NULL,
  `nome_adm` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `adm`
--

INSERT INTO `adm` (`cod_adm`, `nome_adm`, `senha`) VALUES
(1, 'Admnistrador', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura para tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `cod_denuncia` int(5) NOT NULL,
  `texto_denuncia` varchar(500) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `den_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `denuncia`
--

INSERT INTO `denuncia` (`cod_denuncia`, `texto_denuncia`, `titulo`, `den_cod_usuario`) VALUES
(1, 'abciuoiu jjjjjjjjjjjjjjjjjjj           jjjjjjjjjjjjjjjjjjj rghrggngiughuigsghshgui urghhgsrhgohsrghsi', 'A', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `elogio`
--

CREATE TABLE `elogio` (
  `cod_elogio` int(5) NOT NULL,
  `texto_elogio` varchar(500) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `elo_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `elogio`
--

INSERT INTO `elogio` (`cod_elogio`, `texto_elogio`, `titulo`, `elo_cod_usuario`) VALUES
(1, 'sees, soos, sees, soos, soos, sees', 'sees ou soos', NULL),
(2, 'sonuflenks\r\nsoueni\r\nsousos', 'soreoios', NULL),
(3, 'OI, MAS QUE BELO LUGAR', 'Ola ', 4),
(4, 'okokokokoko', 'aaa', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reclamacao`
--

CREATE TABLE `reclamacao` (
  `cod_reclamacao` int(5) NOT NULL,
  `texto_reclamacao` varchar(500) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `rec_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sugestao`
--

CREATE TABLE `sugestao` (
  `cod_sugestao` int(5) NOT NULL,
  `texto_sugestao` varchar(500) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `sug_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(5) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `telefone` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`nome_completo`, `apelido`, `senha`, `telefone`) VALUES
('Bruno Henrique', 'bruno', 'steverogers', '912121212'), 
('Jao', 'Joao', 'remo', '912344567'), 
('Kallian Linke', 'Homem', 'link', '911111111'), 
('Zherdev Arseniy Denisovich', 'Julinho da ak', 'julio', '999887452'), 
('Sildreski da Ilvigo', 'Sildreski', 'homem', '935647263'), 
('Tatarintseva Luiza Pavlovna', 'teste2', 'erro', '923232323'),
('juniiiorr', 'Julinho da ak', 'julio', '999887452'), 
('teste2', 'teste2', 'err', '923232323');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`cod_adm`);

--
-- Índices de tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`cod_denuncia`),
  ADD KEY `den_cod_usuario` (`den_cod_usuario`);

--
-- Índices de tabela `elogio`
--
ALTER TABLE `elogio`
  ADD PRIMARY KEY (`cod_elogio`),
  ADD KEY `elo_cod_usuario` (`elo_cod_usuario`);

--
-- Índices de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD PRIMARY KEY (`cod_reclamacao`),
  ADD KEY `rec_cod_usuario` (`rec_cod_usuario`);

--
-- Índices de tabela `sugestao`
--
ALTER TABLE `sugestao`
  ADD PRIMARY KEY (`cod_sugestao`),
  ADD KEY `sug_cod_usuario` (`sug_cod_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `cod_adm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `cod_denuncia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `elogio`
--
ALTER TABLE `elogio`
  MODIFY `cod_elogio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  MODIFY `cod_reclamacao` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `sugestao`
--
ALTER TABLE `sugestao`
  MODIFY `cod_sugestao` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `denuncia_ibfk_1` FOREIGN KEY (`den_cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Restrições para tabelas `elogio`
--
ALTER TABLE `elogio`
  ADD CONSTRAINT `elogio_ibfk_1` FOREIGN KEY (`elo_cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Restrições para tabelas `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD CONSTRAINT `reclamacao_ibfk_1` FOREIGN KEY (`rec_cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Restrições para tabelas `sugestao`
--
ALTER TABLE `sugestao`
  ADD CONSTRAINT `sugestao_ibfk_1` FOREIGN KEY (`sug_cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
