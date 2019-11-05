-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/11/2019 às 17:00
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `cod_adm` int(5) NOT NULL,
  `nome_adm` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `denuncia`
--

INSERT INTO `denuncia` (`cod_denuncia`, `texto_denuncia`, `titulo`, `den_cod_usuario`) VALUES
(1, 'dorimen', 'ameno', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `elogio`
--

CREATE TABLE `elogio` (
  `cod_elogio` int(5) NOT NULL,
  `texto_elogio` text NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `elo_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `elogio`
--

INSERT INTO `elogio` (`cod_elogio`, `texto_elogio`, `titulo`, `elo_cod_usuario`) VALUES
(1, 'sees, soos, sees, soos, soos, sees', 'sees ou soos', 1),
(2, 'OI, MAS QUE BELO LUGAR', 'Ola ', 4),
(3, 'okokokokoko', 'aaa', 4),
(4, 'teste', 'teste', 4),
(5, 'testando', 'aaa', 3),
(6, 'á¼ÎºÏ„Ï‰Ï Î´á¾½ á½¡Ï‚ Î£ÎºÎ±Î¹Î¬Ï‚ Ï„Îµ Ï€ÏÎ»Î±Ï‚ ÎºÎ±á½¶ Ï†Î·Î³á½¸Î½ á¼µÎºÎ±Î½ÎµÎ½, á¼€Î¼Ï†á¾½ á¼„ÏÎ± Î¼Î¹Î½ Î¤ÏÏŽÏ‰Î½ á¼„Î»Î¿Ï‡Î¿Î¹ Î¸Î­Î¿Î½ á¼ Î´á½² Î¸ÏÎ³Î±Ï„ÏÎµÏ‚ Îµá¼°ÏÏŒÎ¼ÎµÎ½Î±Î¹ Ï€Î±á¿–Î´Î¬Ï‚ Ï„Îµ ÎºÎ±ÏƒÎ¹Î³Î½Î®Ï„Î¿Ï…Ï‚ Ï„Îµ á¼”Ï„Î±Ï‚ Ï„Îµ ÎºÎ±á½¶ Ï€ÏŒÏƒÎ¹Î±Ï‚: á½ƒ Î´á¾½ á¼”Ï€ÎµÎ¹Ï„Î± Î¸ÎµÎ¿á¿–Ï‚ Îµá½”Ï‡ÎµÏƒÎ¸Î±Î¹', 'primeiro parÃ¡grafo da iliada de homer', 2),
(7, 'Ð²ÑÐµ, Ñ‡Ñ‚Ð¾ Ð¿Ñ€Ð¾Ð¸Ð·Ð²Ð¾Ð´Ð¸Ñ‚ Ñ€Ð°Ð±Ð¾Ñ‡Ð¸Ð¹, Ð¿Ñ€Ð¸Ð½Ð°Ð´Ð»ÐµÐ¶Ð¸Ñ‚ ÐµÐ¼Ñƒ', 'maldito patrÃ£o burgues', 6),
(8, 'tu e lixo', 'gostei', 7),
(9, 'á¼ÎºÏ„Ï‰Ï Î´á¾½ á½¡Ï‚ Î£ÎºÎ±Î¹Î¬Ï‚ Ï„Îµ Ï€ÏÎ»Î±Ï‚ ÎºÎ±á½¶ Ï†Î·Î³á½¸Î½ á¼µÎºÎ±Î½ÎµÎ½, á¼€Î¼Ï†á¾½ á¼„ÏÎ± Î¼Î¹Î½ Î¤ÏÏŽÏ‰Î½ á¼„Î»Î¿Ï‡Î¿Î¹ Î¸Î­Î¿Î½ á¼ Î´á½² Î¸ÏÎ³Î±Ï„ÏÎµÏ‚ Îµá¼°ÏÏŒÎ¼ÎµÎ½Î±Î¹ Ï€Î±á¿–Î´Î¬Ï‚ Ï„Îµ ÎºÎ±ÏƒÎ¹Î³Î½Î®Ï„Î¿Ï…Ï‚ Ï„Îµ á¼”Ï„Î±Ï‚ Ï„Îµ ÎºÎ±á½¶ Ï€ÏŒÏƒÎ¹Î±Ï‚: á½ƒ Î´á¾½ á¼”Ï€ÎµÎ¹Ï„Î± Î¸ÎµÎ¿á¿–Ï‚ Îµá½”Ï‡ÎµÏƒÎ¸Î±Î¹ á¼€Î½ÏŽÎ³ÎµÎ¹ Ï€Î¬ÏƒÎ±Ï‚ á¼‘Î¾ÎµÎ¯Î·Ï‚: Ï€Î¿Î»Î»á¿‡ÏƒÎ¹ Î´á½² ÎºÎ®Î´Îµá¾½ á¼Ï†á¿†Ï€Ï„Î¿. á¼€Î»Î»á¾½ á½…Ï„Îµ Î´á½´ Î ÏÎ¹Î¬Î¼Î¿Î¹Î¿ Î´ÏŒÎ¼Î¿Î½ Ï€ÎµÏÎ¹ÎºÎ±Î»Î»Î­á¾½ á¼µÎºÎ±Î½Îµ Î¾ÎµÏƒÏ„á¿‡Ï‚ Î±á¼°Î¸Î¿ÏÏƒá¿ƒÏƒÎ¹ Ï„ÎµÏ„Ï…Î³Î¼Î­Î½Î¿Î½: Î±á½Ï„á½°Ï á¼Î½ Î±á½Ï„á¿· Ï€ÎµÎ½Ï„Î®ÎºÎ¿Î½Ï„á¾½ á¼”Î½ÎµÏƒÎ±Î½ Î¸Î¬Î»Î±Î¼Î¿Î¹ Î¾ÎµÏƒÏ„Î¿á¿–Î¿ Î»Î¯Î¸Î¿Î¹Î¿ Ï€Î»Î·ÏƒÎ¯Î¿Î½ á¼€Î»Î»Î®Î»Ï‰Î½ Î´ÎµÎ´Î¼Î·Î¼Î­Î½Î¿Î¹, á¼”Î½Î¸Î± Î´á½² Ï€Î±á¿–Î´ÎµÏ‚ ÎºÎ¿Î¹Î¼á¿¶Î½Ï„Î¿ Î ÏÎ¹Î¬Î¼Î¿Î¹Î¿ Ï€Î±Ïá½° Î¼Î½Î·ÏƒÏ„á¿‡Ï‚ á¼€Î»ÏŒÏ‡Î¿Î¹ÏƒÎ¹, ÎºÎ¿Ï…ÏÎ¬Ï‰Î½ Î´á¾½ á¼‘Ï„Î­ÏÏ‰Î¸ÎµÎ½ á¼Î½Î±Î½Ï„Î¯Î¿Î¹ á¼”Î½Î´Î¿Î¸ÎµÎ½ Î±á½Î»á¿†Ï‚ Î´ÏŽÎ´ÎµÎºá¾½ á¼”ÏƒÎ±Î½ Ï„Î­Î³ÎµÎ¿Î¹ Î¸Î¬Î»Î±Î¼Î¿Î¹ Î¾ÎµÏƒÏ„Î¿á¿–Î¿ Î»Î¯Î¸Î¿Î¹Î¿ Ï€Î»Î·ÏƒÎ¯Î¿Î½ á¼€Î»Î»Î®Î»Ï‰Î½ Î´ÎµÎ´Î¼Î·Î¼Î­Î½Î¿Î¹, á¼”Î½Î¸Î± Î´á½² Î³Î±Î¼Î²ÏÎ¿á½¶ ÎºÎ¿Î¹Î¼á¿¶Î½Ï„Î¿ Î ÏÎ¹Î¬Î¼Î¿Î¹Î¿ Ï€Î±Ïá¾½ Î±á¼°Î´Î¿Î¯á¿ƒÏ‚ á¼€Î»ÏŒÏ‡Î¿Î¹ÏƒÎ¹Î½: á¼”Î½Î¸Î¬ Î¿á¼± á¼ Ï€Î¹ÏŒÎ´Ï‰ÏÎ¿Ï‚ á¼Î½Î±Î½Ï„Î¯Î· á¼¤Î»Ï…Î¸Îµ Î¼Î®Ï„Î·Ï Î›Î±Î¿Î´Î¯ÎºÎ·Î½ á¼ÏƒÎ¬Î³Î¿Ï…ÏƒÎ± Î¸Ï…Î³Î±Ï„Ïá¿¶Î½ Îµá¼¶Î´Î¿Ï‚ á¼€ÏÎ¯ÏƒÏ„Î·Î½: á¼”Î½ Ï„á¾½ á¼„ÏÎ± Î¿á¼± Ï†á¿¦ Ï‡ÎµÎ¹Ïá½¶ á¼”Ï€Î¿Ï‚ Ï„á¾½ á¼”Ï†Î±Ï„á¾½ á¼”Îº Ï„á¾½ á½€Î½ÏŒÎ¼Î±Î¶Îµ: Ï„Î­ÎºÎ½Î¿Î½ Ï„Î¯Ï€Ï„Îµ Î»Î¹Ï€á½¼Î½ Ï€ÏŒÎ»ÎµÎ¼Î¿Î½ Î¸ÏÎ±Ïƒá½ºÎ½ Îµá¼°Î»Î®Î»Î¿Ï…Î¸Î±Ï‚; á¼¦ Î¼Î¬Î»Î± Î´á½´ Ï„ÎµÎ¯ÏÎ¿Ï…ÏƒÎ¹ Î´Ï…ÏƒÏŽÎ½Ï…Î¼Î¿Î¹ Ï…á¼·ÎµÏ‚ á¼ˆÏ‡Î±Î¹á¿¶Î½ Î¼Î±ÏÎ½Î¬Î¼ÎµÎ½Î¿Î¹ Ï€ÎµÏá½¶ á¼„ÏƒÏ„Ï…: Ïƒá½² Î´á¾½ á¼Î½Î¸Î¬Î´Îµ Î¸Ï…Î¼á½¸Ï‚ á¼€Î½á¿†ÎºÎµÎ½ á¼Î»Î¸ÏŒÎ½Ï„á¾½ á¼Î¾ á¼„ÎºÏÎ·Ï‚ Ï€ÏŒÎ»Î¹Î¿Ï‚ Î”Î¹á½¶ Ï‡Îµá¿–ÏÎ±Ï‚ á¼€Î½Î±ÏƒÏ‡Îµá¿–Î½. á¼€Î»Î»á½° Î¼Î­Î½á¾½ á½„Ï†ÏÎ¬ ÎºÎ­ Ï„Î¿Î¹ Î¼ÎµÎ»Î¹Î·Î´Î­Î± Î¿á¼¶Î½Î¿Î½ á¼Î½ÎµÎ¯ÎºÏ‰, á½¡Ï‚ ÏƒÏ€ÎµÎ¯Ïƒá¿ƒÏ‚ Î”Î¹á½¶ Ï€Î±Ï„Ïá½¶ ÎºÎ±á½¶ á¼„Î»Î»Î¿Î¹Ï‚ á¼€Î¸Î±Î½Î¬Ï„Î¿Î¹ÏƒÎ¹ Ï€Ïá¿¶Ï„Î¿Î½, á¼”Ï€ÎµÎ¹Ï„Î± Î´á½² ÎºÎ±á½Ï„á½¸Ï‚ á½€Î½Î®ÏƒÎµÎ±Î¹ Î±á¼´ ÎºÎµ Ï€Î¯á¿ƒÏƒÎ¸Î±. á¼€Î½Î´Ïá½¶ Î´á½² ÎºÎµÎºÎ¼Î·á¿¶Ï„Î¹ Î¼Î­Î½Î¿Ï‚ Î¼Î­Î³Î± Î¿á¼¶Î½Î¿Ï‚ á¼€Î­Î¾ÎµÎ¹, á½¡Ï‚ Ï„ÏÎ½Î· ÎºÎ­ÎºÎ¼Î·ÎºÎ±Ï‚ á¼€Î¼ÏÎ½Ï‰Î½ ÏƒÎ¿á¿–ÏƒÎ¹Î½ á¼”Ï„á¿ƒÏƒÎ¹. Î´á¾½ á¼ Î¼ÎµÎ¯Î²ÎµÏ„á¾½ á¼”Ï€ÎµÎ¹Ï„Î± Î¼Î­Î³Î±Ï‚ ÎºÎ¿ÏÏ…Î¸Î±Î¯Î¿Î»Î¿Ï‚ á¼ÎºÏ„Ï‰Ï: Î¼Î® Î¼Î¿Î¹ Î¿á¼¶Î½Î¿Î½ á¼„ÎµÎ¹ÏÎµ Î¼ÎµÎ»Î¯Ï†ÏÎ¿Î½Î± Ï€ÏŒÏ„Î½Î¹Î± Î¼á¿†Ï„ÎµÏ, Î¼Î® Î¼á¾½ á¼€Ï€Î¿Î³Ï…Î¹ÏŽÏƒá¿ƒÏ‚ Î¼Î­Î½ÎµÎ¿Ï‚, á¼€Î»Îºá¿†Ï‚ Ï„Îµ Î»Î¬Î¸Ï‰Î¼Î±Î¹: Ï‡ÎµÏÏƒá½¶ Î´á¾½ á¼€Î½Î¯Ï€Ï„Î¿Î¹ÏƒÎ¹Î½ Î”Î¹á½¶ Î»ÎµÎ¯Î²ÎµÎ¹Î½ Î±á¼´Î¸Î¿Ï€Î± Î¿á¼¶Î½Î¿Î½ á¼…Î¶Î¿Î¼Î±Î¹: Î¿á½Î´Î­ Ï€á¿ƒ á¼”ÏƒÏ„Î¹ ÎºÎµÎ»Î±Î¹Î½ÎµÏ†Î­ÏŠ ÎšÏÎ¿Î½Î¯Ï‰Î½Î¹ Î±á¼µÎ¼Î±Ï„Î¹ ÎºÎ±á½¶ Î»ÏÎ¸Ïá¿³ Ï€ÎµÏ€Î±Î»Î±Î³Î¼Î­Î½Î¿Î½ Îµá½Ï‡ÎµÏ„Î¬Î±ÏƒÎ¸Î±Î¹. á¼€Î»Î»á½° Ïƒá½º Î¼á½²Î½ Ï€Ïá½¸Ï‚ Î½Î·á½¸Î½ á¼ˆÎ¸Î·Î½Î±Î¯Î·Ï‚ á¼€Î³ÎµÎ»ÎµÎ¯Î·Ï‚ á¼”ÏÏ‡ÎµÎ¿ Ïƒá½ºÎ½ Î¸Ï…Î­ÎµÏƒÏƒÎ¹Î½ á¼€Î¿Î»Î»Î¯ÏƒÏƒÎ±ÏƒÎ± Î³ÎµÏÎ±Î¹Î¬Ï‚: Ï€Î­Ï€Î»Î¿Î½ Î´á¾½, á½…Ï‚ Ï„Î¯Ï‚ Ï„Î¿Î¹ Ï‡Î±ÏÎ¹Î­ÏƒÏ„Î±Ï„Î¿Ï‚ á¼ Î´á½² Î¼Î­Î³Î¹ÏƒÏ„Î¿Ï‚ á¼”ÏƒÏ„Î¹Î½ á¼Î½á½¶ Î¼ÎµÎ³Î¬Ïá¿³ ÎºÎ±Î¯ Ï„Î¿Î¹ Ï€Î¿Î»á½º Ï†Î¯Î»Ï„Î±Ï„Î¿Ï‚ Î±á½Ï„á¿‡, Ï„á½¸Î½ Î¸á½²Ï‚ á¼ˆÎ¸Î·Î½Î±Î¯Î·Ï‚ á¼Ï€á½¶ Î³Î¿ÏÎ½Î±ÏƒÎ¹Î½ á¼ Ï‹ÎºÏŒÎ¼Î¿Î¹Î¿, ÎºÎ±Î¯ Î¿á¼± á½‘Ï€Î¿ÏƒÏ‡Î­ÏƒÎ¸Î±Î¹ Î´Ï…Î¿ÎºÎ±Î¯Î´ÎµÎºÎ± Î²Î¿á¿¦Ï‚ á¼Î½á½¶ Î½Î·á¿· á¼¤Î½Î¹Ï‚ á¼ ÎºÎ­ÏƒÏ„Î±Ï‚ á¼±ÎµÏÎµÏ…ÏƒÎ­Î¼ÎµÎ½, Î±á¼´ Îºá¾½ á¼Î»ÎµÎ®Ïƒá¿ƒ á¼„ÏƒÏ„Ï Ï„Îµ ÎºÎ±á½¶ Î¤ÏÏŽÏ‰Î½ á¼€Î»ÏŒÏ‡Î¿Ï…Ï‚ ÎºÎ±á½¶ Î½Î®Ï€Î¹Î± Ï„Î­ÎºÎ½Î±, Î±á¼´ ÎºÎµÎ½ Î¤Ï…Î´Î­Î¿Ï‚ Ï…á¼±á½¸Î½ á¼€Ï€ÏŒÏƒÏ‡á¿ƒ á¼¸Î»Î¯Î¿Ï… á¼±Ïá¿†Ï‚ á¼„Î³ÏÎ¹Î¿Î½ Î±á¼°Ï‡Î¼Î·Ï„á½´Î½ ÎºÏÎ±Ï„ÎµÏá½¸Î½ Î¼Î®ÏƒÏ„Ï‰ÏÎ± Ï†ÏŒÎ²Î¿Î¹Î¿. á¼€Î»Î»á½° Ïƒá½º Î¼á½²Î½ Ï€Ïá½¸Ï‚ Î½Î·á½¸Î½ á¼ˆÎ¸Î·Î½Î±Î¯Î·Ï‚ á¼€Î³ÎµÎ»ÎµÎ¯Î·Ï‚ á¼”ÏÏ‡ÎµÏ…, á¼Î³á½¼ Î´á½² Î Î¬ÏÎ¹Î½ Î¼ÎµÏ„ÎµÎ»ÎµÏÏƒÎ¿Î¼Î±Î¹ á½„Ï†ÏÎ± ÎºÎ±Î»Î­ÏƒÏƒÏ‰ Î±á¼´ Îºá¾½ á¼Î¸Î­Î»á¿ƒÏƒá¾½ Îµá¼°Ï€ÏŒÎ½Ï„Î¿Ï‚ á¼€ÎºÎ¿Ï…Î­Î¼ÎµÎ½: á½¥Ï‚ ÎºÎ­ Î¿á¼± Î±á½–Î¸Î¹ Î³Î±á¿–Î± Ï‡Î¬Î½Î¿Î¹: Î¼Î­Î³Î± Î³Î¬Ï Î¼Î¹Î½ á½ˆÎ»ÏÎ¼Ï€Î¹Î¿Ï‚ á¼”Ï„ÏÎµÏ†Îµ Ï€á¿†Î¼Î± Î¤ÏÏ‰ÏƒÎ¯ Ï„Îµ ÎºÎ±á½¶ Î ÏÎ¹Î¬Î¼á¿³ Î¼ÎµÎ³Î±Î»Î®Ï„Î¿ÏÎ¹ Ï„Î¿á¿–ÏŒ Ï„Îµ Ï€Î±Î¹ÏƒÎ¯Î½. Îµá¼° ÎºÎµá¿–Î½ÏŒÎ½ Î³Îµ á¼´Î´Î¿Î¹Î¼Î¹ ÎºÎ±Ï„ÎµÎ»Î¸ÏŒÎ½Ï„á¾½ á¼ŒÏŠÎ´Î¿Ï‚ Îµá¼´ÏƒÏ‰ Ï†Î±Î¯Î·Î½ ÎºÎµ Ï†ÏÎ­Î½á¾½ á¼€Ï„Î­ÏÏ€Î¿Ï… á½€ÏŠÎ¶ÏÎ¿Ï‚ á¼ÎºÎ»ÎµÎ»Î±Î¸Î­ÏƒÎ¸Î±Î¹. á½£Ï‚ á¼”Ï†Î±Î¸á¾½, á¼£ Î´á½² Î¼Î¿Î»Î¿á¿¦ÏƒÎ± Ï€Î¿Ï„á½¶ Î¼Î­Î³Î±Ïá¾½ á¼€Î¼Ï†Î¹Ï€ÏŒÎ»Î¿Î¹ÏƒÎ¹ ÎºÎ­ÎºÎ»ÎµÏ„Î¿: Ï„Î±á½¶ Î´á¾½ á¼„Ïá¾½ á¼€ÏŒÎ»Î»Î¹ÏƒÏƒÎ±Î½ ÎºÎ±Ï„á½° á¼„ÏƒÏ„Ï… Î³ÎµÏÎ±Î¹Î¬Ï‚. Î±á½Ï„á½´ Î´á¾½ á¼Ï‚ Î¸Î¬Î»Î±Î¼Î¿Î½ ÎºÎ±Ï„ÎµÎ²Î®ÏƒÎµÏ„Î¿ ÎºÎ·ÏŽÎµÎ½Ï„Î±, á¼”Î½Î¸á¾½ á¼”ÏƒÎ¬Î½ Î¿á¼± Ï€Î­Ï€Î»Î¿Î¹ Ï€Î±Î¼Ï€Î¿Î¯ÎºÎ¹Î»Î± á¼”ÏÎ³Î± Î³Ï…Î½Î±Î¹Îºá¿¶Î½ Î£Î¹Î´Î¿Î½Î¯Ï‰Î½, Ï„á½°Ï‚ Î±á½Ï„á½¸Ï‚ á¼ˆÎ»Î­Î¾Î±Î½Î´ÏÎ¿Ï‚ Î¸ÎµÎ¿ÎµÎ¹Î´á½´Ï‚ á¼¤Î³Î±Î³Îµ Î£Î¹Î´Î¿Î½Î¯Î·Î¸ÎµÎ½ á¼Ï€Î¹Ï€Î»á½¼Ï‚ Îµá½ÏÎ­Î± Ï€ÏŒÎ½Ï„Î¿Î½, Ï„á½´Î½ á½Î´á½¸Î½ á¼£Î½ á¼™Î»Î­Î½Î·Î½ Ï€ÎµÏ á¼€Î½Î®Î³Î±Î³ÎµÎ½ Îµá½Ï€Î±Ï„Î­ÏÎµÎ¹Î±Î½: Ï„á¿¶Î½ á¼•Î½á¾½ á¼€ÎµÎ¹ÏÎ±Î¼Î­Î½Î· á¼™ÎºÎ¬Î²Î· Ï†Î­ÏÎµ Î´á¿¶ÏÎ¿Î½ á¼ˆÎ¸Î®Î½á¿ƒ, á½ƒÏ‚ ÎºÎ¬Î»Î»Î¹ÏƒÏ„Î¿Ï‚ á¼”Î·Î½ Ï€Î¿Î¹ÎºÎ¯Î»Î¼Î±ÏƒÎ¹Î½ á¼ Î´á½² Î¼Î­Î³Î¹ÏƒÏ„Î¿Ï‚, á¼€ÏƒÏ„á½´Ï Î´á¾½ á½£Ï‚ á¼€Ï€Î­Î»Î±Î¼Ï€ÎµÎ½: á¼”ÎºÎµÎ¹Ï„Î¿ Î´á½² Î½ÎµÎ¯Î±Ï„Î¿Ï‚ á¼„Î»Î»Ï‰Î½. Î²á¿† Î´á¾½ á¼°Î­Î½Î±Î¹, Ï€Î¿Î»Î»Î±á½¶ Î´á½² Î¼ÎµÏ„ÎµÏƒÏƒÎµÏÎ¿Î½Ï„Î¿ Î³ÎµÏÎ±Î¹Î±Î¯.', 'Ancient Greek rapping ', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `reclamacao`
--

CREATE TABLE `reclamacao` (
  `cod_reclamacao` int(5) NOT NULL,
  `texto_reclamacao` varchar(500) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `rec_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `reclamacao`
--

INSERT INTO `reclamacao` (`cod_reclamacao`, `texto_reclamacao`, `titulo`, `rec_cod_usuario`) VALUES
(1, 'teste', 'teste', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sugestao`
--

CREATE TABLE `sugestao` (
  `cod_sugestao` int(5) NOT NULL,
  `texto_sugestao` varchar(500) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `sug_cod_usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sugestao`
--

INSERT INTO `sugestao` (`cod_sugestao`, `texto_sugestao`, `titulo`, `sug_cod_usuario`) VALUES
(1, 'teste', 'teste', 4);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome_completo`, `apelido`, `senha`, `telefone`) VALUES
(1, 'Bruno Henrique', 'bruno', 'steverogers', 912121212),
(2, 'Jao', 'Joao', 'remo', 912344567),
(3, 'Nalliak Eknil', 'Homem1', 'senha', 911911911),
(4, 'Zherdev Arseniy Denisovich', 'Julinho da ak', 'julio', 999887452),
(5, 'Sildreski da Ilvigo', 'Sildreski', 'homem', 935647263),
(6, 'Caio JÃºlio CÃ©sar', 'Juniiior', 'sex', 910000000),
(7, 'Tatarintseva Luiza Pavlovna', 'teste2', 'erro', 923232323);

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
  ADD PRIMARY KEY (`cod_denuncia`);

--
-- Índices de tabela `elogio`
--
ALTER TABLE `elogio`
  ADD PRIMARY KEY (`cod_elogio`);

--
-- Índices de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD PRIMARY KEY (`cod_reclamacao`);

--
-- Índices de tabela `sugestao`
--
ALTER TABLE `sugestao`
  ADD PRIMARY KEY (`cod_sugestao`);

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
  MODIFY `cod_elogio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  MODIFY `cod_reclamacao` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `sugestao`
--
ALTER TABLE `sugestao`
  MODIFY `cod_sugestao` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
