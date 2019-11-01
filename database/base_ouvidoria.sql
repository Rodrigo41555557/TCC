-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE DATABASE bd_ouvidoria_3info2;
USE bd_ouvidoria_3info2;

CREATE TABLE `usuario` (
cod_usuario int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome_completo varchar(150) NOT NULL,
apelido varchar(50) NOT NULL,
senha varchar(150) NOT NULL,
telefone int(33) NOT NULL
);

CREATE TABLE `adm` (
cod_adm int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome_adm varchar(150) NOT NULL,
senha varchar(150) NOT NULL
);

CREATE TABLE `elogio` (
cod_elogio int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_elogio varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
elo_cod_usuario int(5) NOT NULL
);

CREATE TABLE `denuncia` (
cod_denuncia int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_denuncia varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
den_cod_usuario int(5) NOT NULL
);

CREATE TABLE `sugestao` (
cod_sugestao int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_sugestao varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
sug_cod_usuario int(5) NOT NULL
);

CREATE TABLE `reclamacao` (
cod_reclamacao int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_reclamacao varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
rec_cod_usuario int(5) NOT NULL
);

INSERT INTO `usuario` (`nome_completo`, `apelido`, `senha`, `telefone`) VALUES
('Bruno Henrique', 'bruno', 'steverogers', '912121212'), 
('Jao', 'Joao', 'remo', '912344567'), 
('Kallian Linke', 'Homem', 'link', '911111111'), 
('Zherdev Arseniy Denisovich', 'Julinho da ak', 'julio', '999887452'), 
('Sildreski da Ilvigo', 'Sildreski', 'homem', '935647263'), 
('Tatarintseva Luiza Pavlovna', 'teste2', 'erro', '923232323'),
('juniiiorr', 'Julinho da ak', 'julio', '999887452'), 
('teste2', 'teste2', 'err', '923232323');

INSERT INTO `adm` (`nome_adm`, `senha`) VALUES
( 'Admnistrador', 'administrador');

INSERT INTO `elogio` (`texto_elogio`, `titulo`, `elo_cod_usuario`) VALUES
( 'sees, soos, sees, soos, soos, sees', 'sees ou soos', 1),
('OI, MAS QUE BELO LUGAR', 'Ola ', '4'), 
('okokokokoko', 'aaa', '4');
