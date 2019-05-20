CREATE DATABASE login;
USE login;

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telefone` INT(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `elogio` (
  `cod_elogio` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto_elogio` varchar(255) utf8 COLLATE utf8_general_ci NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO user (fullname, username, password, telefone)
VALUES ('Bruno Ruan', 'bruno', 'steverogers', '912121212'), ('Ricardo Santos', 'milos123', 'milos123', '966612469'), ('Homem 1', 'Homem', 'homem', '999999999'); 
