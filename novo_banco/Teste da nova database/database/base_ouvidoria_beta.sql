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

CREATE TABLE `elogio` (
cod_elogio int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_elogio varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
cod_usuario int(5) NOT NULL,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
);

CREATE TABLE `denuncia` (
cod_denuncia int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_usuario varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
cod_usuario int(5) NOT NULL,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
);

CREATE TABLE `sugestao` (
cod_sugestao int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_sugestao varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
cod_usuario int(5) NOT NULL,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
);

CREATE TABLE `reclamacao` (
cod_reclamacao int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
texto_reclamacao varchar(500) NOT NULL,
titulo varchar(50) NOT NULL,
cod_usuario int(5) NOT NULL,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
);

INSERT INTO `usuario` (`nome_completo`, `apelido`, `senha`, `telefone`) VALUES
( 'Bruno Ruan', 'bruno', 'steverogers', 912121212),
( 'Rodrigo da Silva', 'rodrigo121', 'rodrigo121', 912121212),
( 'Joao Pedro', 'jpac123', 'joao', 966612469),
( 'Willian Kamke', 'Homem1', 'homem', 999999999);
