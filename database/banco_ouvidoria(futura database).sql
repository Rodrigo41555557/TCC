-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.


CREATE TABLE elogio (
cod_elogio int(5) PRIMARY KEY,
texto_elogio varchar(500),
cod_usuario int(5)
)

CREATE TABLE denuncia (
cod_denuncia int(5) PRIMARY KEY,
texto_usuario varchar(500),
cod_usuario int(5)
)

CREATE TABLE usuario (
telefone int(33),
nome_completo varchar(150),
cod_usuario int(5) PRIMARY KEY,
apelido varchar(50),
senha varchar(150)
)

CREATE TABLE reclamacao (
cod_reclamacao int(5) PRIMARY KEY,
texto_reclamacao varchar(500),
cod_usuario int(5),
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
)

CREATE TABLE sugestao (
cod_sugestao int(5) PRIMARY KEY,
texto_sugestao varchar(500),
cod_usuario int(5),
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
)

ALTER TABLE elogio ADD FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
ALTER TABLE denuncia ADD FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
